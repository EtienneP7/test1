/* Base de donner nommée tp1 */

CREATE TABLE usager
(
    user varchar(30) NOT NULL,
	password varchar(255) NOT NULL,
	PRIMARY KEY(user)
);

CREATE TABLE genre
(
    nom varchar(40) NOT NULL,
	PRIMARY KEY(nom)
);

/* Not null in comments to makes the most of the tp I can with the time I had */
CREATE TABLE blog
(
	id INT UNSIGNED AUTO_INCREMENT,
	idAuteur varchar(30) /* NOT NULL */,
	titre varchar(100) NOT NULL,
    texte  LONGTEXT NOT NULL,
    genre varchar(40),
	PRIMARY KEY(id),
	FOREIGN KEY(idAuteur) REFERENCES usagers(user),
    FOREIGN KEY(genre) REFERENCES genre(nom)
);

CREATE TABLE commentaire
(
	id INT UNSIGNED AUTO_INCREMENT,
    texte  LONGTEXT NOT NULL,
    idAuteur varchar(30) NOT NULL,
    idBlog INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(idAuteur) REFERENCES usagers(user),
    FOREIGN KEY(idBlog) REFERENCES blog(id)
);