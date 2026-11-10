# MCD complet du Blog

## 1. Les entités

### VILLE
- __id_ville__
- nom_ville

### AUTEUR
- __id_auteur__
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- __id_article__
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- __id_categorie__
- nom_categorie

## 2. Les relations et cardinalités

- VILLE (0,N) — habite — (1,1) AUTEUR

- AUTEUR (0,N) — rédige — (1,1) ARTICLE

- CATEGORIE (0,N) — regroupe — (1,1) ARTICLE

## 3. Vérification du MCD

- Les 4 entités sont présentes.
- Les 3 relations sont présentes.
- Les cardinalités sont respectées.
- Les identifiants sont soulignés.
- La donnée calculée `duree_lecture` est absente.
- Aucune clé étrangère ni type SQL n'est ajouté.