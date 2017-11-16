-- uniquement les villes
SELECT ville FROM Météo ;

-- toutes les villes et leur température maximum
SELECT ville, haut FROM Météo ;

-- toutes les villes et leur température minimum
SELECT ville, bas FROM Météo ;

-- La ou les villes dont la température maximale dépasse 27 degrés
SELECT ville, haut FROM Météo WHERE haut > 27 ;

-- La ou les villes dont la température minimale sera inférieure ou égale à 15 degrés
SELECT ville, bas FROM Météo WHERE bas <= 15 ;

-- La ou les villes dont la température minimale sera égale à 15 degrés
SELECT ville, bas FROM Météo WHERE bas = 15 ;

-- La ou les villes dont la température minimale ne sera PAS égale à 15 degrés
SELECT ville, bas FROM Météo WHERE bas <> 15 ;

-- La ou les villes dont le nom commence par "Br"
SELECT ville FROM Météo WHERE ville LIKE "Br%" ;

-- La ou les villes dont la température maximale se situe entre 26 et 28 degrés
SELECT ville, haut FROM Météo WHERE haut >= 26 and haut <= 28 ;

-- La ou les villes dont la température minimale est égale à 14 ou est égale à 16 degrés
SELECT ville, bas FROM Météo WHERE bas = 14 or bas = 16 ;

-- La ou les villes dont la température maximale est supérieure ou égale à 26 et la température 
-- minimale est inférieure à 14
SELECT ville, haut, bas FROM Météo WHERE haut >= 26 and bas < 14 ;