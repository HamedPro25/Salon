# MLP for Pima Indians Dataset Serialize to JSON and HDF5
from tensorflow.keras.models import Sequential, model_from_json
from tensorflow.keras.layers import Dense
import numpy
from sklearn.preprocessing import MinMaxScaler
import os

json_file = open('model.json', 'r')
loaded_model_json = json_file.read()
json_file.close()


file1 = open('Air.txt', 'r')
Lines = file1.readlines()
var1 = int(Lines[0].strip())
var2 = int(Lines[1].strip())
var3 = int(Lines[2].strip())
var4 = int(Lines[3].strip())
var5 = int(Lines[4].strip())
var6 = int(Lines[5].strip())
var7 = int(Lines[6].strip())

file1.close()

file2 = open('Soil.txt', 'r')
Lines = file2.readlines()
var8 = int(Lines[0].strip())
var9 = int(Lines[1].strip())

file2.close()

loaded_model = model_from_json(loaded_model_json)
# load weights into new model
loaded_model.load_weights("model.h5")
inputs = [1,24,var1,var2,var3,var4,var5,var6,var7,var8,var9]

data = numpy.reshape(inputs, (1,-1))
res = loaded_model.predict(data)
print(res[0][0])