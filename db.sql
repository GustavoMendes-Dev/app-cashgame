CREATE DATABASE cashgame;
use cashgame;

INSERT INTO matchs(title, status)
VALUES
('Partida 3', 0);

INSERT INTO players(name, nickname, phone,  email, status)
VALUES
('Gustavo', 'Gut', '21 96523-4696', 'g.mendes@hotmail.com', 0);

INSERT INTO foreign_match_players(match_id, player_id)
VALUES
(16, 1);

SELECT * FROM players;
SELECT * FROM movement;
SELECT * FROM foreign_match_players;
SELECT * FROM matchs;
TRUNCATE TABLE foreign_match_players;



DROP FROM movements;

