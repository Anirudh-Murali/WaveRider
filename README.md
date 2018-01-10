# WaveRider
A simple automated back testing tool to test stratergies. It takes it input from a
[ google spreadsheet](https://docs.google.com/spreadsheets/d/12w8wwElopN_iAyiU1oxqWwQtwnTNQ3_PqE7BsVvusxQ/edit?usp=sharing) and get the closing price for each coin for the specified duration and makes a summary report.
## Input
  1. Sheet Name (Name of the google sheet from which the input is to be taken)
  2. Start Date (Date from which the backtest should begin)
  3. End Date (Last date of backtest)
 Please note that all input must be in the specified manner. While editing the spreadsheet, please ensure to stick to the same structure as that in the demo sheet.

## Output
 We currently have three output directories
  1. Results
  2. Data 
  3. Graphs
 Each folder contains data and are divided into subdirectories with the name of the sheets. Let us try to understand the kind of data contained in each
 
 ### Data Folder
  It contains subfolders with divided into different sub baskets. Each folder contains a csv file which describes how the value of the initial investment has grown or fallen each day each day.
 
 ### Graphs Folder
  It contains Visualization of the data contained in the Data folder for easier understanding.
 ### Result Folder
 This contains data similar to that in the data folder, but instead of focusing on a single coin, it focuses on the entire basket. Thust 1 csv file will be created for each subbasket. It also contains a subfolder Called Basket Summary which includes the 
 
 ## UI 
 A sample UI has been made for this project. However all data has been hardcoded. Developers are invited to automate this process. [Click here to check out the online link](http://smartblocks.000webhostapp.com/)
 
## Installation
To run this project, you must have python installed. Moreover as you see from the following code snippet. You also need to have your own `client_secret.json` file. Steps to generate one are discussed in the next section

```import pandas as pd
import requests
import json
import os
from bs4 import BeautifulSoup
from nltk.tokenize import RegexpTokenizer
import datetime
import calendar
import matplotlib.pyplot as plt

import gspread
from oauth2client.service_account import ServiceAccountCredentials
```
Once all the dependancies are install you can start by running the WaveRider.py script by entering the following command in a terminal
```python WaveRider.py```


## Google Spreadsheets
For this project I had decided to use Google Spreadsheets for one simple reason, so that anyone in the team can easily back test their own stratergies and use make use of this service. However to use this service a developer must first generate api credentials. It is a fairly easy process. You can create your own credentials by following [this video](https://www.youtube.com/watch?v=vISRn5qFrkM) 


## Jupyter Notebook

I have also shared the jupyter notebook on which I had developed the code. Even though it lacks documentation, it can be used to better understand the code and make changes.

## Contribution
The following changes are required, and developers are invited to collaborate with me in this project to help address the following issues :-
1. At present to run this project, you will need to install python and all the necessary dependancies, developers are invited to script a bat file to help install all the required dependancies automatically in Windows or to help host WaveRider on a server so that people can use it easily as a service.
2. The sample UI can be improved
3. Help in automating the data displayed in the UI. At present all the data is hardcoded. Developers are invited to help us change that.

## Issues
It is important to ensure that the structure of the google sheet is never changed. Please always keep track of the rows and columns being used. Always refer to the shared [google sheet](https://docs.google.com/spreadsheets/d/12w8wwElopN_iAyiU1oxqWwQtwnTNQ3_PqE7BsVvusxQ/edit?usp=sharing)
Moreover there might be times when the coin name does not match with the id in the api. Keep in mind that these small issues can easily occur. Feel free to comment in the issues secetion, so that I can address these issues.
