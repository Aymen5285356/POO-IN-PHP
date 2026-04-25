# TP1 POO-IN-PHP
---

# 📚 Exercices POO en PHP

Ce projet contient plusieurs exercices réalisés en **programmation orientée objet (POO) avec PHP**.
L’objectif est de maîtriser les concepts fondamentaux comme les classes, les objets, les constructeurs, l’encapsulation et l’héritage.

---

## 🟢 Exercice 1 : Classe Animal

### Objectif

Créer une classe simple représentant un animal.

### Instructions

* Créer une classe **Animal** avec :

  * `nom`
* Ajouter un **constructeur**
* Ajouter les **accesseurs (getters)** et **mutateurs (setters)**
* Ajouter une méthode `parler()` qui affiche un message
* Ajouter la méthode `__toString()`

---

## 🟡 Exercice 2 : Classe Livre

### Objectif

Manipuler une classe avec affichage d’informations.

### Instructions

* Créer une classe **Livre** avec :

  * `titre`
* Ajouter un **constructeur**
* Ajouter les **getters et setters**
* Ajouter une méthode pour afficher le titre
* Ajouter la méthode `__toString()`

---

## 🔵 Exercice 3 : Classe Voiture

### Objectif

Utiliser un constructeur pour initialiser un objet.

### Instructions

* Créer une classe **Voiture** avec :

  * `marque`
* Ajouter un **constructeur** pour initialiser la marque
* Ajouter les **getters et setters**
* Ajouter la méthode `__toString()`

---

## 🔴 Exercice 4 : Héritage avec Compte

### Objectif

Comprendre l’encapsulation et l’héritage.

### Instructions

### Classe Compte

* Attribut :

  * `solde` (privé)
* Méthodes :

  * `deposer()`
  * `retirer()`
* Ajouter :

  * constructeur
  * getters et setters
  * `__toString()`

### Classe CompteEpargne (hérite de Compte)

* Attribut :

  * `taux`
* Méthodes :

  * `calculerInteret()`
* Ajouter :

  * constructeur
  * getters et setters
  * `__toString()`

---

## 🟣 Exercice 5 : Gestion d’un panier

### Objectif

Manipuler plusieurs objets et calculer un total.

### Instructions

### Classe Produit

* Attributs :

  * `nom`
  * `prix`
* Ajouter :

  * constructeur
  * getters et setters
  * `__toString()`

### Classe Panier

* Contient plusieurs **Produit**
* Méthodes :

  * `ajouterProduit()`
  * `total()`
* Ajouter :

  * constructeur
  * getters et setters
  * `__toString()`

---

## 🛠️ Technologies utilisées

* PHP (POO)
* Serveur local (XAMPP)

---

## 🚀 Objectifs pédagogiques

* Comprendre les bases de la POO en PHP :

  * Classes et objets
  * Constructeurs (`__construct`)
  * Encapsulation (private, getters, setters)
  * Héritage
* Manipuler des objets et des collections
* Structurer un projet proprement

---

## ▶️ Exécution

1. Installer un serveur local (XAMPP)
2. Placer les fichiers dans `htdocs` ou `www`
3. Lancer le projet :

```bash
php index.php
```

---

## 👨‍💻 Auteur

Projet réalisé pour pratiquer la **programmation orientée objet en PHP** 🚀

