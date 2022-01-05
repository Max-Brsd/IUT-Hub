# -*- coding: utf-8 -*-
"""
Created on Tue Jan  4 21:07:25 2022

@author: Kevin
"""
from surprise import Reader
from surprise import BaselineOnly
from surprise import Dataset

from surprise.model_selection import train_test_split
import sqlite3

con = sqlite3.connect('../data/IUTHub.db') #connexion a la base
cur = con.cursor()
query= "select idMovie from movies where idMovie not in (select idMovie from ranking where idUser=(?))"
test = Reader(None,'item user rating',None,(1, 5),0)
# Load the movielens-100k dataset (download it if needed),
data = Dataset.load_from_file('data.txt',test)

# sample random trainset and testset
# test set is made of 25% of the ratings.
(trainset,testset) = train_test_split(data, test_size=.75)

# We'll use the baseline only algorithm because it got the best rmse testing all algorithms
algo = BaselineOnly()

# Train the algorithm on the trainset, and predict ratings for the testset
algo.fit(trainset)
def favorites (idUser):
    liste=[]
    for i in cur.execute(query,(idUser,)):
        tmp = algo.estimate(idUser, i[0])
        if (tmp>2.5):
            liste.append((i[0],tmp))
    liste.sort(key=lambda tup: tup[1],reverse=True)
    res=[]
    for j in liste:
        res.append(j[0])
    return res
print(favorites(1))