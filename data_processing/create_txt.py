# -*- coding: utf-8 -*-
"""
Created on Mon Dec 13 15:03:00 2021

@author: Kevin
"""

import sqlite3 
con = sqlite3.connect('../data/IUTHub.db') #connexion a la base

file = open('data.txt','w') #ouverture du fichier
cur=con.cursor();
for row in cur.execute('SELECT * from ranking'):
    file.write(str(row).replace("(", "").replace(")","").replace(",", "")+'\n')
file.close()
con.close()