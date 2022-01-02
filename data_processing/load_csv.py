# -*- coding: utf-8 -*-
"""
Created on Fri Dec 31 14:05:21 2021

@author: Kevin
"""

import sqlite3 
from csv import reader
con = sqlite3.connect('../data/IUTHub.db') #connexion a la base
cur = con.cursor()
cpt=0
with open('../data/films.csv','r') as file: #ouverture du fichier
    read = reader(file)
    usercmd="insert into users(name) values (?)"
    mooviecmd = "insert into movies(title) values (?)"
    ratingcmd = "insert into ranking values (?,?,?)"
    for row in read:
        if(cpt==0):
            for i in range (2,len(row)):
                cur.execute(usercmd,(row[i],))
        else:
            cur.execute(mooviecmd,(row[0],))
            for i in range (2,len(row)):
                if(row[i]!=""):
                    cur.execute(ratingcmd,(cpt,i-2,row[i],))
        cpt+=1
    con.commit()
cur.close()
con.close()    