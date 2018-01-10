import pandas as pd
import requests
import json
from bs4 import BeautifulSoup
from nltk.tokenize import RegexpTokenizer
import datetime
import calendar
import gspread
from oauth2client.service_account import ServiceAccountCredentials

def populate(currency,start_date,end_date):
    res = requests.get("https://coinmarketcap.com/currencies/"+currency+"/historical-data/?start="+str(start_date)+"&end="+str(end_date))
    soup = BeautifulSoup(res.content,'lxml')
    table = soup.find_all('table')[0]
    df = pd.read_html(str(table))
    final = df[0].to_json(orient='records')
    type(final)
    final = json.loads(final)

    data = json.dumps(final)
    df = pd.read_json(data)

    df['day'] = [d.day for d in df['Date']]
    df['month'] = [d.month for d in df['Date']]
    size_df = len(df)
    df['name'] = currency
    df = pd.concat([df.Close, df.Date], axis=1, join_axes=[df.Close.index])
#     print(df)
    return df
#     p1.to_excel("Output/"+folder_name+"/"+currency+".xls")




import matplotlib.pyplot as plt

def create_graph(y,c,money):
    size = len(y)
    i = 0
    x = []
    while i<size:
        x.append(i)
        i +=1
    plt.figure(figsize=(17, 6))
    plt.plot(x,y)
    plt.xlabel('Days')
    plt.ylabel('Money')
    plt.title('Result of Investing $'+str(money)+' in '+c)

    plt.savefig('Graphs/'+sheetname+'/'+str(folder_number)+'/'+c+'.png')
    y = pd.DataFrame(y)
    y.to_csv('Data/'+sheetname+'/'+str(folder_number)+'/'+c+'.csv')
#     plt.show()

def calculating_returns(df,c,principle):
    size = len(df)
    first = principle
    bought_at = df.Close[size -1]
    i = size -2
    returns = []
    returns_money = []
    money = (df.Close[i] -bought_at)/bought_at *100
    returns.append(money)
    principle = float(principle)*(1+(money/100))
    returns_money.append(principle)
    cur = df.Close[i]
    return_object = {}
    i -= 1
    while i >= 0:
        money = (df.Close[i] - cur)/cur *100
        returns.append(money)
        principle = float(principle)*(1+(money/100))
        returns_money.append(principle)
        cur = df.Close[i]
        i -= 1
    total = sum(returns)
    return_object['Coin_Name'] = c
    return_object['Amount_Invested']= first
    return_object['Final_Amount'] = principle
################REMEMBER TO UNCOMMENT THIS!!!!!!!!!!!!!!!!!!!!!############################################

    create_graph(returns_money,c,first)


################REMEMBER TO UNCOMMENT THIS!!!!!!!!!!!!!!!!!!!!!############################################

    print(returns_money)
#     return_object['graph_values'] = returns_money
    return return_object


def authenticate(sheetname):
    scope = ["https://spreadsheets.google.com/feeds"]
    creds = ServiceAccountCredentials.from_json_keyfile_name('client_secret.json',scope)
    client = gspread.authorize(creds)
    sheet = client.open(sheetname).sheet1
    print("!!!!!!!!!!!!!!CONNECTED TO SHEETS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!")
    return sheet

def get_coin_names(col_num):
    coins = sheet.col_values(col_num)
#     invested = sheet.col_values(col_num+3)
#     pp.pprint(coins)
#     print(invested)
    return coins
# coins = sheet.get_all_records()
# coins = sheet.row_values(4)
# coins = sheet.col_values(1)
# coins = sheet.cell(5,2).value


def get_coin_list(i):
    coin_names= get_coin_names(i)
#     print(invested)
#     print(coin_names)
    coins = []
    j = 0
    for c in coin_names:
        if j == 0:
            j = 1
            continue
        if j == 1:
            j = 2
            continue
        if c == '':
            break
        else:
            coins.append(c.lower())
    coins = coins[2:]

#     invested = inv[2:]
#     print(inv)
    return coins

def get_investment_list(i):
    invested = get_coin_names(i+3)
    j = 4
    inv = []
    while True:
        if invested[j] == '':
            break
        else:
            inv.append(invested[j])
        j+=1
    return inv

columns = [1,7,13,19]
print('Enter Sheetname')
sheetname = input()
sheet = authenticate(sheetname)
i = 0
j = 0
folder_number = 1
coins = []
baskets = []
print("Enter Start Date and End Date (format:yyyymmdd eg:20171121 (for 21 November 2017))")
start_date = input("StartDate:")
end_date = input("EndDate")
# principle = 1000
for i in columns:
    j = 0
    temp = get_coin_list(i)
    inv = get_investment_list(i)
    print(temp)
    coins.append(temp)
    returns_list = []
    for c in temp:
        p = inv[j]
        j+=1
        returns = {}
        print("-----------------------------------"+str(c)+"------------------------------------------------")
        print(p)
        df = populate(c,start_date,end_date)
        returns = calculating_returns(df,c,p)
        returns_list.append(returns)
    summary = pd.DataFrame(returns_list,columns=['Coin_Name','Amount_Invested','Final_Amount'])
    summary.to_csv(('Results/'+sheetname+'/'+str(folder_number)+'.csv'))
    basket_summary = {}
    sum_ = 0
#     basket_summary['ID'] = folder_number +1
    for f in summary.Amount_Invested:
        sum_ += float(f)
    basket_summary['Amount_Invested'] = sum_
    sum_ = 0
    for f in summary.Final_Amount:
        sum_ += float(f)
    basket_summary['End_sum'] = sum_
    baskets.append(basket_summary)
#     basket_summary['End_Sum']= sum(summary.Final_Amount)
#     basket_summary = pd.DataFrame(basket_summary)
#     basket_summary.to_csv(('Results/BasketSummary/'+str(folder_number)+'.csv'))
    folder_number +=1
baskets = pd.DataFrame(baskets)
baskets.to_csv('Results/BasketSummary/'+sheetname+'/Total.csv')
