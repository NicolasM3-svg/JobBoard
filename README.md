
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/NicolasM3-svg/JobBoard">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">JobBoar'd - Epitech</h3>

  <p align="center">
    An awesome README template to jumpstart your projects!
    <br />
    <a href="https://github.com/NicolasM3-svg/JobBoard/issues">Un problème avec le code ?</a>
    ·
    <a href="https://github.com/NicolasM3-svg/JobBoard/issues">Une option a ajouter ?</a>
  </p>
</p>

<!-- ABOUT THE PROJECT -->
## À propos

[![Product Name Screen Shot][product-screenshot]](https://example.com)

Le site JobBoar'd est un projet créer par Nicolas et Havane pour compléter le module sur le développement web.

Contenance du site :
* Création et modification d'annonces pour les entreprises,
* Création d'un compte candidat pour postuler aux offres,
* Panel qui permet la gestion des utilisateurs,
* Création d'un API à l'aide de NodeJS ! :smile:

Of course, no one template will serve all projects since your needs may be different. So I'll be adding more in the near future. You may also suggest changes by forking this repo and creating a pull request or opening an issue.

A list of commonly used resources that I find helpful are listed in the acknowledgements.

### Développer avec 
Voici la liste de tous les frameworks utilisés pour le site.
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [Node.JS](https://nodejs.org/en/)

### Installations préalables

Avant de lancer le site ainsi que le serveur, vous devez installer les packages suivants : 
* npm
```sh
npm install --global --production windows-build-tools 
npm install -g node-gyp
npm install -g node-pre-gyp
npm install -g chokidar
npm install --save bcrypt
npm install express-session
npm install session-file-store
```

### Installation

1. Dupliquer le dossier sur votre ordinateur
```sh
git clone https://github.com/NicolasM3-svg/JobBoard.git
```
2. Installer les NPM nécessaire (Linux/Windows)
```sh
npm install (liste au dessus)
```
3. Entrer les informations de la BDD dans `JobBoard\js\api\data\config.js`
```JS
const mysql = require('mysql');

const dbconfig = {
    host: 'localhost',
    user: 'USER/ROOT',
    password: 'MDP',
    database: 'Jobboard',
};

const pool = mysql.createPool(dbconfig);
module.exports = pool;

```

<!-- CONTACT -->
## Contacts

Nicolas BAAR - [@MeesN](https://twitter.com/MeesN_) - nicolas.baar@epitech.eu
Havane palabaud - havane.palabaud@epitech.eu

Lien du projet : [https://github.com/NicolasM3-svg/JobBoard](https://github.com/NicolasM3-svg/JobBoard)