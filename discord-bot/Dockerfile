FROM node:18-alpine

# Copie les fichiers de package et installe les dépendances
COPY package*.json ./
RUN npm install

# Copie tout le reste
COPY . .

# Lance l'application
CMD ["node", "bot.js"]
