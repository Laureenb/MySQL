-- Combien y a-t-il de garçons à Becode?
SELECT COUNT(*) FROM octocats WHERE gender = "M";

-- Combien y a-t-il de filles à Becode/Central ?
SELECT COUNT(*) FROM octocats WHERE gender = 'F' AND promo = 'promo1-central';

-- Combien y a-t-il de garçons à Becode/Central ?
SELECT COUNT(*) FROM octocats WHERE gender = 'M' AND promo = 'promo1-central';

-- Combien y a-t-il d'octocats dont le prénom est 'Nadia' à becode?
SELECT COUNT(*) FROM octocats WHERE firstname = 'Nadia';

-- Sur ce nouveau SQLFiddle, trouve la fonction permettant de n'afficher 
-- que l'année de la colonne "birthdate" et affiche le prénom de tous les octocts 
-- et leur année de naissance. (indice: comment dit-on "année" en anglais?)
SELECT firstname, YEAR(birthdate) FROM octocats ;

-- Sur le sqlfiddle bac à sable de Météo:
-- Trouve la fonction permettant de retourner un tableau contenant uniquement la 
-- température maximale prévue ("Demain le maxima observé en Belgique sera de ... degrés")
SELECT concat ("Demain le maxima observé en Belgique sera de ", haut, " degrés pour ", ville, ".")
FROM Météo;

-- Trouve la fonction permettant de retourner un tableau contenant uniquement la 
-- température minimale prévue ("Demain le minima observé en Belgique sera de ... degrés")
SELECT concat ("Demain les températures minimales en Belgique seront de ", bas, " degrés pour ", ville, ".")
FROM Météo;