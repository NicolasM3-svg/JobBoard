[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]

<br />

<p align="center">
  <a href="https://github.com/NicolasM3-svg/JobBoard">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">JobBoar'd - Epitech</h3>

  <p align="center">
    Le site pour vos recherches d'emplois (c'est pas vrai..) :smile:
    <br />
    <a href="https://github.com/NicolasM3-svg/JobBoard/issues">Un problème avec le code</a>
    ·
    <a href="https://github.com/NicolasM3-svg/JobBoard/issues">Une option a ajouter</a>
  </p>
</p>

## À propos

Le site JobBoar'd est un projet créer par Nicolas et Havane pour compléter le module sur le développement web.

Contenance du site :
* Création et modification d'annonces pour les entreprises,
* Création d'un compte candidat pour postuler aux offres,
* Panel qui permet la gestion des utilisateurs,
* Création d'un API à l'aide de NodeJS !

### Développer avec 
Liste de tous les frameworks utilisés pour la création du site JobBoar'd :
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
2. Installer les NPM nécessaires (Linux/Windows)
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

## Contacts

Nicolas BAAR - [@MeesN](https://twitter.com/MeesN_) - nicolas.baar@epitech.eu
<br />
Havane palabaud - havane.palabaud@epitech.eu

Lien du projet : [https://github.com/NicolasM3-svg/JobBoard](https://github.com/NicolasM3-svg/JobBoard)

[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=flat-square
[contributors-url]: https://github.com/NicolasM3-svg/JobBoard/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=flat-square
[forks-url]: https://github.com/NicolasM3-svg/JobBoard/pulse
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=flat-square
[stars-url]: https://github.com/NicolasM3-svg/JobBoard/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=flat-square
[issues-url]: https://github.com/NicolasM3-svg/JobBoard/issues
[product-screenshot]: images/screenshot.png
