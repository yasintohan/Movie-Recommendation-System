import pickle
from model import KNN
from data_preprocessor import get_data

def save():
    data = get_data()


    model = KNN()
    model.fit(data)

    pickle.dump(model,open('model.pkl','wb'))
