SELECT prenom, nom, naissance FROM étudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;

