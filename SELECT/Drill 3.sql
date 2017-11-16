
-- Affiche le prénom et nom de tous les octocats, par ordre alphabétique ascendant du prénom.
SELECT firstname, lastname FROM octocats ORDER BY firstname ;

-- Affiche le prénom et nom de tous les octocats, par ordre alphabétique descendant du nom de famille.
SELECT lastname, firstname FROM octocats ORDER BY lastname ;

-- Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé.
SELECT firstname, lastname, age FROM octocats ORDER BY age ;

-- Affiche le prénom, nom et âge de tous les octocats, du plus âgé au plus jeune.
SELECT firstname, lastname, age FROM octocats ORDER BY age DESC ;

-- Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central".
SELECT firstname, lastname, age FROM octocats WHERE promo = 'promo1-central' ORDER BY age ASC ;

-- Affiche le prénom, nom et âge de tous les octocats, du plus jeune au plus âgé, de la promo "promo1-central" 
-- et dont l'âge se situe entre 23 et 28 ans.
SELECT firstname, lastname, age FROM octocats WHERE promo = 'promo1-central' AND age >= 23 and age <= 28 ORDER BY age ASC ;

-- Affiche le prénom, nom, âge et genre de tous les octocats, du plus jeune au plus âgé, de la promo 
-- "promo1-central" et dont l'âge se situe entre 25 et 35 ans.
SELECT firstname, lastname, gender, age FROM octocats  WHERE promo = 'promo1-central' AND age >= 25 and age <= 35 ORDER BY age ASC ;

-- Affiche le prénom, nom, âge et genre de tous les octocats, du plus jeune au plus âgé, de la promo 
-- "promo1-central", dont l'âge se situe entre 25 et 35 ans et dont le genre est masculin.
SELECT firstname, lastname, gender, age FROM octocats  WHERE promo = 'promo1-central' AND age >= 25 and age <= 35 AND gender = 'M' ORDER BY age ASC ;

-- Affiche le prénom, nom, âge de l'octocat le plus âgé de Becode/Central. Donc tu dois obtenir un 
-- tableau avec une seule rangée.
SELECT firstname, lastname, age FROM octocats ORDER BY age DESC LIMIT 1;