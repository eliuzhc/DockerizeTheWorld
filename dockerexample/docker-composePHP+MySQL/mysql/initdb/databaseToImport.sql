CREATE TABLE topics ( 
    id INT unsigned NOT NULL AUTO_INCREMENT, 
    title VARCHAR(255) NOT NULL, 
    description TEXT NULL, 
    PRIMARY KEY(id) 
);

INSERT INTO topics (
    title,
    description
) VALUES (
    'Docker is Better',
    'Do not use vagrant, use docker'
);

INSERT INTO topics (
    title,
    description
) VALUES (
    'docker-compose',
    'Mozart used to compose music, we compose docker containers'
);

INSERT INTO topics (
    title,
    description
) VALUES (
    'perla pollonz',
    'Un vecchio saggio un giorno disse: "lavorare con php negli anni 2000 era come lavorare tu per tu con lo schifo"'
);
