
# apprendre_php 

Bienvenue dans le projet **apprendre** ! Ce projet est conçu pour vous aider à apprendre PHP à travers des tutoriels progressifs et des exemples de code pratiques.

## Table des matières

- [Aperçu](#aperçu)
- [A qui est destine cette formation?](#A-qui-est-destine-cette-formation?)
- [Structure du projet](#structure-du-projet)
- [Prérequis](#prérequis)
- [Comment utiliser ce projet](#comment-utiliser-ce-projet)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Aperçu

Ce projet est structuré en deux formations principales : `formation_php1` et `formation_php2`, chacune contenant plusieurs leçons avec des fichiers `tuto_nomDelaLecon.php` pour les explications détaillées et `code_nomDeLaLecon.php` pour les exemples de code.

## A qui est destine cette formation?
  Cette formation s'adresse a toute personne desireuse d'apprendre le php. Elle est plus adaptee pour les debutants en la matiere mais peut egalemnt aider une personne un peu plus avancee.Personnellemnt,elle m'aide moi meme a reviser quand je met long sans pratiquer du php.

## Il est a noter que le projet n'est pas encore termine ,mais pour le moment,vous pouvez commencer a exploiter les lecons disponibles.

## Structure du projet

- `formation_php1/`
  - `bases/`
    - `conditions/`
      - `code.php`
      - `tuto.php`   
    - `tableaux/`
      - `code.php`
      - `tuto.php`
    - `variables/`
      - `code.php`
      - `tuto.php`
  - `daatabase/`
    - `connexion/`
      - `code.php`
      - `tuto.php`
    - `methodes_GET_et_Post/`
      - `code.php`
      - `tuto.php`
    - `methodes_insert_delete_update/`
      - `code.php`
      - `tuto.php`
    - `methodes_select_from_where/`
      - `code.php`
      - `tuto.php`
  -
  - `util/`
    - `les_entites_html.php`


 ...
- `formation_php2/`
  - vide pour le moment  


Chaque dossier `nom_du_dossier` dans `formation_php1` et `formation_php2` correspond à une leçon particulière inscrit dans un theme precis indique par le nom du dossier parent avec un tutoriel expliquant les concepts et un fichier de code PHP associé.Le fichier code.php de chaque dossier represente le code de la lecon,generalement commente mais sans style. Cependant tuto.php represente une explication plus stylee et plus detaillee de ce qui est dans code.php avec parfois une demo pour mieux guider l'utilisateur de la formation.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

- [PHP](https://www.php.net/downloads) (version 7.4 ou supérieure)
- Un éditeur de code comme [Visual Studio Code](https://code.visualstudio.com/)
- Un serveur web local comme [XAMPP](https://www.apachefriends.org/index.html) ou [MAMP](https://www.mamp.info/en/)
-Un navigateur pour executer progressivement le projet

###### NB : Ca serait un plus d'avoir des connaissances minimales en bases de donnees et precisement le systeme de gestion de base de donnees (SGBD) MYSQL qui est celui que nous avons choisi por cette formation car il est de loin le plus utilise.

## Comment utiliser ce projet

  1. **Cloner le dépôt** :
  
      git clone https://github.com/NOMO-Gabriel/apprendre_les_bases_php.git
  2. **Naviguer vers la formation souhaitée** :         
    
      - cd apprendre_les_bases_php/formation_php1
       ou
      - cd apprendre_les_bases_php/formation_php2


## Choisir une lecon et Lire le tutoriel :
Ouvrez le fichier tuto.php dans l'editeur ou le navigateur de votre choix pour lire les explications et les instructions.

## Exécuter le code :
Exécutez le fichier code.php pour voir le code en action. Utilisez un serveur local comme XAMPP ou MAMP, ou le serveur PHP intégré :
php -S localhost:8000


### Contribuer
Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, suivez ces étapes :

1- **Fork le dépôt**.

2- **Créer une branche pour votre fonctionnalité ou correction** :

git checkout -b ma-nouvelle-branche

3- **Commit vos modifications** :

git commit -m "Ajout d'une nouvelle fonctionnalité"

  4- **Push vers la branche**:
    
      git push origin ma-nouvelle-branche
  5-**Me faire un mail**: 
  
  ecrire a l'adresse gabriel.nomo@facsciences-uy1.cm et je me chargerai d'integrer cette contribution dans la formation.

### Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus d'informations.








