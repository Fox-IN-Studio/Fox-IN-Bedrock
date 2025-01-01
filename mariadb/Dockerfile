<<<<<<< HEAD
FROM mariadb:latest

# Configuration du mot de passe par défaut
ENV MYSQL_ROOT_PASSWORD=root

# Copier un script d'initialisation SQL dans le dossier d'initialisation
COPY /docker-entrypoint-initdb.d/
=======
FROM node:18-alpine

# Crée un dossier pour l'application
WORKDIR /usr/src/app

# Copie les fichiers de package et installe les dépendances
COPY package*.json ./
RUN npm install

# Copie tout le reste
COPY . .

# Lance l'application
CMD ["node", "bot.js"]
>>>>>>> 38ff92ed6cf459480432ba54fab79de554f0c68e
