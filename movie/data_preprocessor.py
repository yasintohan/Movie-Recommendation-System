import pandas as pd
import numpy as np
import datetime


def get_data():
    data = pd.read_csv('datasets/imdb_top_1000.csv')

    liste = []
    for row in data['Genre']:
        genre_list=row.split(', ')
        for obj in genre_list:
            liste.append(obj.replace("'",""))
    liste = list(dict.fromkeys(liste))

    

    data['Genres'] = data['Genre'].apply(lambda x: binary(x,liste))
    data['Meta_score'].fillna(10*data['IMDB_Rating'], inplace=True)
    data.drop(['Poster_Link', 'Series_Title', 'Certificate', 'Genre', 'Overview', 'Director', 'Star1', 'Star2', 'Star3', 'Star4', 'Gross'], axis=1, inplace=True)


    for i,row in data.iterrows():
        data.loc[i,'Runtime'] = str(data.loc[i,'Runtime']).split(" ")[0]

    now = datetime.datetime.now()
    data['Released_Year'].replace({"PG": now.year+1},inplace=True)

    data['Released_Year'] = data['Released_Year'].astype(int)
    data['Runtime'] = data['Runtime'].astype(int)

    return data

def binary(genre_list,liste):
        binaryList = []
        
        for genre in liste:
            if genre in genre_list:
                binaryList.append(1)
            else:
                binaryList.append(0)
        
        return np.array(binaryList)

