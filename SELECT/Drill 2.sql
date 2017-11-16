-- Affiche tous les octocats et leurs données
SELECT *FROM octocats ;

-- Affiche uniquement les prénoms
SELECT firstname FROM octocats ;

-- Affiche les prénoms, noms et age de chaque octocat
SELECT firstname, lastname, age FROM octocats ;

-- Affiche les octocats dont le nom commence par 'N'
SELECT firstname FROM octocats WHERE firstname LIKE "N%" ;

-- Affiche le prénom et le nom des octocats de la promo "promo1-central"
SELECT firstname, lastname FROM octocats WHERE promo = 'promo1-central' ;

-- Affiche le prénom, le nom et l'année de naissance des octocats de la promo "promo1-anderlecht"
SELECT firstname, lastname, birthdate FROM octocats WHERE promo = 'promo1-anderlecht';