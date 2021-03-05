from scipy.spatial import distance
import pandas as pd
import numpy as np
from data_preprocessor import get_data

data = get_data()

class KNN():

    def fit(self, X_train):
        self.X_train = X_train
        

    def predict(self, X_test):
        predictions = []
        
        for i,row in X_test.iterrows():
            labels = self.closest(i)
            predictions.append(labels)
        return predictions
    
    def closest(self, row):
        best = get_dist(row, row + 1)
        best_distances = [best for i in range(5)]
        best_indexes = [0 for i in range(5)]
        for i,label in self.X_train.iterrows():
            dist = get_dist(row, i)
            if row != i:
                for j in range(len(best_distances)):
                    if dist < best_distances[j]:
                        best_distances[j] = dist
                        best_indexes[j] = i
                        break
            else:
                continue

        return best_indexes
    
def get_dist(movieId1, movieId2):


    a = data.iloc[movieId1]
    b = data.iloc[movieId2]
    
    scoreA = a['Meta_score']
    scoreB = b['Meta_score']
    scoreDistance = distance.euclidean(scoreA, scoreB)
    
    voteA = a['No_of_Votes']
    voteB = b['No_of_Votes']
    voteDistance = distance.euclidean(voteA, voteB)
    
    imdbA = a['IMDB_Rating']
    imdbB = b['IMDB_Rating']
    imdbDistance = distance.euclidean(imdbA, imdbB)
    
    runtimeA = a['Runtime']
    runtimeB = b['Runtime']
    runtimeDistance = distance.euclidean(int(runtimeA), int(runtimeB))
    
    yearA = a['Released_Year']
    yearB = b['Released_Year']
    yearDistance = distance.euclidean(int(yearA), int(yearB))
        
    genresA = a['Genres']
    genresB = b['Genres']
    genresDistance = int(np.sum(abs(np.subtract(genresA,genresB))))
    
    return scoreDistance + voteDistance + imdbDistance + genresDistance + runtimeDistance + yearDistance
