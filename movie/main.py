import pickle
import os.path
from data_preprocessor import get_data
from sklearn.model_selection import train_test_split
import save_model

data = get_data()

if os.path.isfile("model.pkl"):
    model=pickle.load(open('model.pkl','rb'))
else:
    save_model.save()
    model=pickle.load(open('model.pkl','rb'))

X_train, X_test = train_test_split(data, test_size= 0.001)


preds=model.predict(X_test)

print(preds)