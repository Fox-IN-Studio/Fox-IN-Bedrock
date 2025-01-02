# Utiliser l'image officielle Node.js
FROM node:20

# Définir le répertoire de travail
WORKDIR /app

# Copier package.json et package-lock.json (si existants)
COPY package.json package-lock.json ./

# Installer les dépendances
RUN npm install -g npm@11.0.0

# Copier le reste des fichiers du projet
COPY . .

# Exposer le port 3000 pour Next.js
EXPOSE 3000

# Démarrer l'application Next.js
CMD ["npm", "run", "dev"]
