import glob
import pandas as pd
import sys
import os
path =r'/media/batman/Stuff/Projects/TE/Stirring Minds/Backtesting/Data/3' # use your path
all_files = glob.glob(os.path.join(path, "*.csv"))     # advisable to use os.path.join as this makes concatenation OS independent

df_from_each_file = (pd.read_csv(f) for f in all_files)
concatenated_df   = pd.concat(df_from_each_file, ignore_index=True)
# doesn't create a list, nor does it append to one
concatenated_df.to_csv('summary.csv')
