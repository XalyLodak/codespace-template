#!/bin/bash
echo "Initialisation de la Base de données."

SQL_FILE_BDD="database/sourcesSql/initBdClinPasteur.sql"
SQL_FILE_INSERTS="database/sourcesSql/insertSqlBdClinPasteur.sql"

# Créer la base de données à partir du fichier SQL
echo "Peuplement de la BDD à partir de $SQL_FILE_BDD..."
sudo mysql -u root < $SQL_FILE_BDD

# Insertion des données d'exemple à partir du fichier SQL
echo "Création des routines stockées à partir de $SQL_FILE_INSERTS..."
sudo mysql -u root < $SQL_FILE_INSERTS
