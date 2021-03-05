import pickle
import os.path
import sys
import json
from data_preprocessor import get_data
from sklearn.model_selection import train_test_split
import save_model

data = get_data()

if os.path.isfile("model.pkl"):
    model=pickle.load(open('model.pkl','rb'))
else:
    save_model.save()
    model=pickle.load(open('model.pkl','rb'))

if len(sys.argv) > 1:
    ID = int(sys.argv[1]) -1

X_test = data.loc[ID].to_frame().T

preds=model.predict(X_test)


values = [[i+1 for i in row] for row in preds]
feedback=json.dumps(values)

print(feedback)