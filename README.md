# Sommaire

- [Sommaire](#sommaire)
- [Niveau de progression du site](#niveau-de-progression-du-site)
  - [Site projet E5](#site-projet-e5)
    - [Progression global](#progression-global)
- [Divers](#divers)
  - [Liens](#liens)
  - [Infos Utiles](#infos-utiles)
    - [Infos pour html](#infos-pour-html)
    - [Plugins visual Studio :](#plugins-visual-studio-)

---

---

---

# Niveau de progression du site

## Site projet E5
### Versions

- [ ] Version 1.0.0 : Base du site et des pages - Premiere version totalement oppérationelle

---

### Contenus

- [x] Création de la base de donnés
- [ ] Pages dynamique si on est connecter ou non
- Création de pages et les finir a 100%
  - [ ] Page Accueil
  - [ ] Page Forum
    - [ ] Sortie des Post dynamiquement
    - [ ] Commentaires / vues fonctionnelles
      - [ ] Poster commentaire (Besoin du cookie de connexion)
    - [ ] Pouvoir consulter l'articles individuellement
    - [ ] Changment de page dynamique
  - [ ] Page Post
    - [x] Commentaires / vues fonctionnelles
      - [ ] Poster commentaire (Besoin du cookie de connexion)
    - [x] Pouvoir consulter l'articles individuellement
    - [x] Changment de page dynamique
  - Pages
    - [ ] Page A propos
      - [x] Contenu
      - [ ] Visuelle
    - [ ] Page Servies -- Annulé
    - [x] Page FAQ
    - [ ] Utilisateurs
      - [ ] Affichage via PHP (+tri ?)
  - [x] Création de formulaire d'inscription
    - [x] Empécher les inscriptions double email / pseudo
  - [x] Création de formulaire de connexion
    - [ ] Possibilité de se connécter avec Google / Facebook (Pas prioritaire)
  - [ ] Page profile
  - [ ] Rester connecter grace aux cookies
    - [ ] Pouvoir poster commentaire / thread sans devoir remmetre l'email a chaque fois
  - [x] Page Contact
  - [ ] Page support
  - [ ] Page question
    - [x] Affichage des question
    - [ ] Envoyer question (Besoin du cookie de connexion)
- Petits points
  - [x] Statistiques live
  - [x] Tags Fonctionelle
  - [ ] Systeme de points live
  - [ ] Thread récents
  - [ ] Bar de recherche
  - [ ] Finir le Footer
- [ ] Faire la documentation
- [ ] Faire le diagramme de grantt
  

---

### Progression global

- [x] 25%
- [x] 50%
- [x] 75%
- [ ] 99%


# Divers

## Liens

- [Page du site](https://monportfolio-freyermuthmatys.000webhostapp.com/EpreuveE5-WebApplication/)

---

- [Page GitHub](https://github.com/Mfxof/EpreuveE5-WebApplication)
- [Hébergeur WebHost](https://panel.000webhost.com/)

---

- [TailwindCss](https://tailwindcss.com/docs/installation)
- [BootStrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

---

- [Template type facebook](https://online-communities.demos.buddyboss.com/)
- [Themes Free](https://colorlib.com/wp/themes/)

## Infos Utiles

### Infos pour html

Aide a la creation de site Web

- Tailwind -Annuler-
- Bootstrap -Annuler-

### Plugins visual Studio :

- Mithril emmet
- Live serveur
- Markdown all in in
- Markdown table
- French - code spell checker
- Pettier code formatter
- Code snap _(Rajouter en activation a la sauvegarde pour le faire automatiquement | deux derniers lignes de la photo "gitSnapVs.jpg" )_+


## Code

**SQL de lien commun**
```SQL
ALTER TABLE blog
ADD COLUMN nb_commentaires INT DEFAULT 0;

UPDATE blog b
SET nb_commentaires = (
    SELECT COUNT(*) 
    FROM commentaires_blog cb 
    WHERE cb.id_commentaire_blog = b.id_commentaire_blog
);
```

