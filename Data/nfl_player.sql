USE acashop;

CREATE TABLE IF NOT EXISTS nfl_player (
    name VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    birth_city VARCHAR(255),
    birth_state VARCHAR(255),
    birth_country VARCHAR(255),
    birth_date VARCHAR(255),
    college VARCHAR(255),
    draft_team VARCHAR(255),
    draft_round VARCHAR(255),
    draft_pick VARCHAR(255),
    draft_year VARCHAR(255),
    position VARCHAR(255),
    height VARCHAR(255),
    weight INTEGER,
    death_date VARCHAR(255),
    death_city VARCHAR(255),
    death_state VARCHAR(255),
    death_country VARCHAR(255),
    year_start INTEGER,
    year_end INTEGER,
    nfl_player_id INTEGER PRIMARY KEY AUTO_INCREMENT
);

LOAD DATA INFILE '/var/www/Data/NFL-players-2013-12-12.csv' INTO TABLE nfl_player
  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY ''
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES;

