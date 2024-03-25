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
- [x] Pages dynamique si on est connecter ou non
- Création de pages et les finir a 100%
  - [x] Page Accueil
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
    - [x] Page A propos
      - [x] Contenu
      - [x] Visuelle
    - [x] Page FAQ
    - [ ] Utilisateurs
      - [ ] Affichage via PHP (+tri ?)
  - [x] Création de formulaire d'inscription
    - [x] Empécher les inscriptions double email / pseudo
  - [x] Création de formulaire de connexion
    - [ ] Possibilité de se connécter avec Google / Facebook (Pas prioritaire)
  - [x] Page profile
    - [ ] Modification du profile
  - [x] Rester connecter (grace aux cookies)
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
- Faire la documentation
    - [ ] UML de la BD
    - [ ] Documentation utilisateur
    - [ ] Documentation développeuer
- [ ] Faire le diagramme de grantt

---

**Annulée**
- [ ] Page Servies -- Annulé

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

**Anti copi-coller**
```js
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-102282699-1');

        document.addEventListener('copy', (event) => {
            event.preventDefault();
            alert('Le copier-coller est désactivé sur ce site.');
        });

        window.onload = function () {
            var images = document.getElementsByTagName('img');
            for (var i = 0; i < images.length; i++) {
                images[i].oncontextmenu = function () {
                    return false;
                }
            }
        }
```

**Vérification de token session**
```php
session_start();

// Vérifie si l'email est défini dans la session et s'il n'est pas vide
if (isset ($_SESSION['email']) && !empty ($_SESSION['email'])) {
    // Si l'email est défini et n'est pas vide, tu peux le récupérer
    $email = $_SESSION['email'];
    // Charge la page normalement ou exécute les actions nécessaires
}
```

**Code affichage érreurs**
```PHP
$resultat = $conn->query($sql);
if (!$resultat) {
    trigger_error('Erreur SQL : ' . $conn->error);
}
```
