CREATE TABLE `product_hub` (  
`product_id` int NOT NULL AUTO_INCREMENT,  
`product_name` varchar(1000) NOT NULL,  
`product_image_path` varchar(50) NOT NULL,  
`product_link` varchar(100) NOT NULL,  
PRIMARY KEY (`product_id`) 
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `product_hub` (`product_id`, `product_name`, `product_image_path`, `product_link`) VALUES ('1', 'WARHAMMER 40K', 'images/Warhammer_40k.jpeg', 'warhammer_40k.php'), ('2', 'DUNGEONS & DRAGONS', 'images/Dungeon_and_Dragons.jpeg', 'd&d.php'), ('3', 'AGE OF SIGMAR', 'images/Warhammer_Age_of_Sigmar.png', 'warhammer_age_of_sigmar.php'), ('4', 'MAGIC THE GATHERING', 'images/Magic_the_gathering.png', 'magic_the_gathering.php');


CREATE TABLE `d&d` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(1000) NOT NULL,
  `product_image_path` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


INSERT INTO `d&d` (`product_id`, `product_name`, `product_image_path`) VALUES ('1', 'D&D departs from traditional wargaming by allowing each player to create their own character to play instead of a military formation. These characters embark upon imaginary adventures within a fantasy setting. A Dungeon Master (DM) serves as the game\'s referee and storyteller, while maintaining the setting in which the adventures occur, and playing the role of the inhabitants of the game world. The characters form a party and they interact with the setting\'s inhabitants and each other.', 'images/Dungeon_and_Dragons.jpeg'), ('2', 'Fizban’s Treasury of Dragons', 'images/Fizbans_Treasury_of_Dragons.png'), ('3', 'Strixhaven: A Curriculum of Chaos', 'images/Strixhaven_A_Curriculum_of_Chaos.png'), ('4', 'The Wild Beyond the Witchlight', 'images/The_Wild_Beyond_the_Witchlight.png'), ('5', 'Candlekeep Mysteries', 'images/Candlekeep_Mysteries.png');

CREATE TABLE `magic_the_gathering` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(1000) NOT NULL,
  `product_image_path` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


INSERT INTO `magic_the_gathering` (`product_id`, `product_name`, `product_image_path`) VALUES ('1', 'A player in Magic takes the role of a Planeswalker, doing battle with other players as Planeswalkers by casting spells, using artifacts, and summoning creatures as depicted on individual cards drawn from their individual decks.', 'images/Magic_the_gathering.png'), ('2', 'Challenger Decks 2021', 'images/Challenger_Decks_2021.png'), ('3', 'Kamigawa: Neon Dynasty Bundle', 'images/Kamigawa_Neon_Dynasty.png'), ('4', 'Strixhaven: School of Mages', 'images/Strixhaven_School_of_Mages.png'), ('5', 'Modern Horizons 2', 'images/Modern_Horizons_2.png');

CREATE TABLE `warhammer_40k` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(1000) NOT NULL,
  `product_image_path` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `warhammer_40k` (`product_id`, `product_name`, `product_image_path`) VALUES ('1', 'In the grimdark far future there is only war. Pick your faction to command, from the Imperium of man a hyper zelious intergalatic human empire lead by the corpse of a man to the orks a green skined race built for war. 40k has a faction for every play style or personality.', 'images/Warhammer_40k.jpeg'), ('2', 'Tempest of War Card Deck', 'images/Tempest_of_War_Card_Deck.jpg'), ('3', 'Shining Spear', 'images/Shining_Spear.jpg'), ('4', 'Aeldari Rangers', 'images/Aeldari_Rangers.jpg'), ('5', 'Aeldari Autarch', 'images/Aeldari_Autarch.jpg');

CREATE TABLE `warhammer_Age_of_Sigmar` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(1000) NOT NULL,
  `product_image_path` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


INSERT INTO `warhammer_Age_of_Sigmar` (`product_id`, `product_name`, `product_image_path`) VALUES ('1', 'Player\'s armies fight with medieval-era weaponry and cast magical spells, and the warriors are a mixture of humans and fantasy creatures such as elves, dwarves, and orks.Players take turns taking a range of actions with their models: moving, charging, shooting ranged weapons, fighting, and casting magical spells; the outcomes of which are generally determined by dice rolls.', 'images/Warhammer_Age_of_Sigmar.png'), ('2', 'Age of Sigmar: Harbinger', 'images/Age_of_Sigmar_Harbinger.jpg'), ('3', 'Age of Sigmar: Warriors', 'images/Age_of_Sigmar_Warrior.jpg'), ('4', 'Age of Sigmar: Extremis', 'images/Age_of_Sigmar_Extremis.jpg'), ('5', 'Age of Sigmar: Shadow and Pain', 'images/Age_of_Sigmar_Shadow_and_Pain.jpg');

CREATE TABLE gallery (
    id INT(4) NOT NULL AUTO_INCREMENT,
    path  VARCHAR(50),
    text VARCHAR(50),
    PRIMARY KEY (id)
);

INSERT INTO gallery (path, text) VALUES ('images/titan.jpg', 'This is an awesome Titan mini figure that we sell here at Clairemont Comics');
INSERT INTO gallery (path, text) VALUES ('images/figure.jpg', 'Rare and good condition collectable actions figures');
INSERT INTO gallery (path, text) VALUES ('images/files.jpg', 'Hidden treasures await');
INSERT INTO gallery (path, text) VALUES ('images/warhammer.jpg', 'We cannot stop Warhammer from reaching into our wallets either');
INSERT INTO gallery (path, text) VALUES ('images/table.jpg', 'Come play with us!');
INSERT INTO gallery (path, text) VALUES ('images/rocks.jpg', 'Awesome Merchandise!');
INSERT INTO gallery (path, text) VALUES ('images/panther.jpg', 'Comic books are a big hit!');
INSERT INTO gallery (path, text) VALUES ('images/haven.jpg', 'More great Merchandise!');