from flask import Flask
from flask_cors import CORS
from flask import request

import numpy as np
from sklearn.naive_bayes import GaussianNB
from sklearn import svm
from sklearn import linear_model
from sklearn.ensemble import RandomForestClassifier
import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.linear_model import LogisticRegression
from sklearn.ensemble import RandomForestClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.tree import DecisionTreeClassifier
import json




app = Flask(__name__)
CORS(app)

@app.route("/output", methods=['POST', 'GET'])
def output():
	#malaria
	final_result=[]
	# print(request.form)
	f1=open("/home/divya/Downloads/BE PROJECT/train_test/malaria_train.txt",'r')
	text=f1.read()
	#print(text)
	x= text.split('\n')
	features=[]
	labels=[]
	for a in x:
		b=a.split('\t')
		v=[]
		lbl=''
		for i in range(0,len(b)-1):
			if(b[i] == '?'):
				v.append(9999)      
			else:
				 v.append((int(b[i])))
		labels.append(b[len(b)-1])
		features.append(v)
	x=np.array(request.form.getlist('inputVar[]'))
	# print(x)
	features_t=[]
	labels_t=[]
	v=[]                     
	for i in range(0,len(x)-1):
		if(x[i] == '?'):
			v.append(9999)	             
		else:
			v.append((int(x[i])))
	labels_t.append(x[len(x)-1])
	features_t.append(v)
	model=LogisticRegression()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result.append(int(y_pred[0]))
	model=GaussianNB()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result.append(int(y_pred[0]))
	model=svm.SVC()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result.append(int(y_pred[0]))
	neigh = KNeighborsClassifier(n_neighbors=3)
	neigh.fit(features,labels)
	pred2=neigh.predict(features_t)
	final_result.append(int(pred2[0]))
	clf = DecisionTreeClassifier(random_state=0)
	clf =clf.fit(features,labels)
	pred3=clf.predict(features_t)
	final_result.append(int(pred3[0]))
	model=RandomForestClassifier()
	model.fit(features,labels)
	y_pred=model.predict(features_t)
	final_result.append(int(y_pred[0]))
	avg=sum(final_result)/6
	avg*=100

	# return request.form.getlist('inputVar')
	# file = open("testfile.txt", "w")
	# file.write(' '.join(np.array(request.form.getlist('inputVar[]'))))
	# file.close()
	# return "Hello"
	#asthama
	final_result1=[]
	f1=open("/home/divya/Downloads/BE PROJECT/train_test/asthma_train.txt",'r')
	text=f1.read()
	#print(text)
	x= text.split('\n')
	features=[]
	labels=[]
	for a in x:
		b=a.split('\t')
		v=[]
		lbl=''
		for i in range(0,len(b)-1):
			if(b[i] == '?'):
				v.append(9999)      
			else:
				 v.append((int(b[i])))
		labels.append(b[len(b)-1])
		features.append(v)
	x=np.array(request.form.getlist('inputVar[]'))
	features_t=[]
	labels_t=[]
	v=[]                     
	for i in range(0,len(x)-1):
		if(x[i] == '?'):
			v.append(9999)	             
		else:
			v.append((int(x[i])))
	labels_t.append(x[len(x)-1])
	features_t.append(v)
	model=LogisticRegression()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result1.append(int(y_pred[0]))
	model=GaussianNB()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result1.append(int(y_pred[0]))
	model=svm.SVC()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result1.append(int(y_pred[0]))
	neigh = KNeighborsClassifier(n_neighbors=3)
	neigh.fit(features,labels)
	pred2=neigh.predict(features_t)
	final_result1.append(int(pred2[0]))
	clf = DecisionTreeClassifier(random_state=0)
	clf =clf.fit(features,labels)
	pred3=clf.predict(features_t)
	final_result1.append(int(pred3[0]))
	model=RandomForestClassifier()
	model.fit(features,labels)
	y_pred=model.predict(features_t)
	final_result1.append(int(y_pred[0]))
	avg1=sum(final_result1)/6
	avg1*=100
	#dengue
	final_result2=[]
	f1=open("/home/divya/Downloads/BE PROJECT/train_test/dengue_train.txt",'r')
	text=f1.read()
	#print(text)
	x= text.split('\n')
	features=[]
	labels=[]
	for a in x:
		b=a.split('\t')
		v=[]
		lbl=''
		for i in range(0,len(b)-1):
			if(b[i] == '?'):
				v.append(9999)      
			else:
				 v.append((int(b[i])))
		labels.append(b[len(b)-1])
		features.append(v)
	x=np.array(request.form.getlist('inputVar[]'))
	features_t=[]
	v=[]                     
	for i in range(0,len(x)-2):
		if(x[i] == '?'):
			v.append(9999)	             
		else:
			v.append((int(x[i])))
	features_t.append(v)
	model=LogisticRegression()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	print(y_pred[0])
	print("\n\n")
	final_result2.append(int(y_pred[0]))
	model=GaussianNB()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result2.append(int(y_pred[0]))
	model=svm.SVC()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result2.append(int(y_pred[0]))
	neigh = KNeighborsClassifier(n_neighbors=3)
	neigh.fit(features,labels)
	pred2=neigh.predict(features_t)
	final_result2.append(int(pred2[0]))
	clf = DecisionTreeClassifier(random_state=0)
	clf =clf.fit(features,labels)
	pred3=clf.predict(features_t)
	final_result2.append(int(pred3[0]))
	model=RandomForestClassifier()
	model.fit(features,labels)
	y_pred=model.predict(features_t)
	final_result2.append(int(y_pred[0]))
	avg2=sum(final_result2)/6
	avg2*=100
	#pnuemonia
	final_result3=[]
	f1=open("/home/divya/Downloads/BE PROJECT/train_test/pneumonia_train.txt",'r')
	text=f1.read()
	#print(text)
	x= text.split('\n')
	features=[]
	labels=[]
	for a in x:
		b=a.split('\t')
		v=[]
		lbl=''
		for i in range(0,len(b)-3):
			if(b[i] == '?'):
				v.append(9999)      
			else:
				 v.append((int(b[i])))
		labels.append(b[len(b)-1])
		features.append(v)
	x=np.array(request.form.getlist('inputVar[]'))
	features_t=[]
	labels_t=[]
	v=[]                     
	for i in range(0,len(x)-1):
		if(x[i] == '?'):
			v.append(9999)	             
		else:
			v.append((int(x[i])))
	labels_t.append(x[len(x)-1])
	features_t.append(v)
	model=LogisticRegression()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result3.append(int(y_pred[0]))
	model=GaussianNB()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result3.append(int(y_pred[0]))
	model=svm.SVC()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result3.append(int(y_pred[0]))
	neigh = KNeighborsClassifier(n_neighbors=3)
	neigh.fit(features,labels)
	pred2=neigh.predict(features_t)
	final_result3.append(int(pred2[0]))
	clf = DecisionTreeClassifier(random_state=0)
	clf =clf.fit(features,labels)
	pred3=clf.predict(features_t)
	final_result3.append(int(pred3[0]))
	model=RandomForestClassifier()
	model.fit(features,labels)
	y_pred=model.predict(features_t)
	final_result3.append(int(y_pred[0]))
	avg3=sum(final_result3)/6
	avg3*=100
	#rickets
	final_result4=[]
	f1=open("/home/divya/Downloads/BE PROJECT/train_test/rickets_train.txt",'r')
	text=f1.read()
	#print(text)
	x= text.split('\n')
	features=[]
	labels=[]
	for a in x:
		b=a.split('\t')
		v=[]
		lbl=''
		for i in range(0,len(b)-1):
			if(b[i] == '?'):
				v.append(9999)      
			else:
				 v.append((int(b[i])))
		labels.append(b[len(b)-1])
		features.append(v)
	x=np.array(request.form.getlist('inputVar[]'))
	features_t=[]
	labels_t=[]
	v=[]                     
	for i in range(0,len(x)-1):
		if(x[i] == '?'):
			v.append(9999)	             
		else:
			v.append((int(x[i])))
	labels_t.append(x[len(x)-1])
	features_t.append(v)
	model=LogisticRegression()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result4.append(int(y_pred[0]))
	model=GaussianNB()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result4.append(int(y_pred[0]))
	model=svm.SVC()
	model.fit(features,labels)#fitting parameters
	y_pred=model.predict(features_t)
	final_result4.append(int(y_pred[0]))
	neigh = KNeighborsClassifier(n_neighbors=3)
	neigh.fit(features,labels)
	pred2=neigh.predict(features_t)
	final_result4.append(int(pred2[0]))
	clf = DecisionTreeClassifier(random_state=0)
	clf =clf.fit(features,labels)
	pred3=clf.predict(features_t)
	final_result4.append(int(pred3[0]))
	model=RandomForestClassifier()
	model.fit(features,labels)
	y_pred=model.predict(features_t)
	final_result4.append(int(y_pred[0]))
	avg4=sum(final_result4)/6
	avg4*=100
	##return the largest
	final_list=[avg,avg1,avg2,avg3,avg4]
	
	diseases = ['Malaria', 'Asthma', 'Dengue', 'Pneumonia', 'Rickets']
	mx = 0
	for i in range(len(final_list)):
		if final_list[i] > final_list[mx]:
			mx = i;

	j = {
		"disease": diseases[mx],
		"percentage": final_list[mx]
	}
	return json.dumps(j)
	# return diseases[mx] final_list[mx]

if __name__ == "__main__":
	app.run()
