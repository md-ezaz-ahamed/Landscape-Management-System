DROP TABLE IF EXISTS item_t;
DROP TABLE IF EXISTS user_t;
DROP TABLE IF EXISTS appointment_t;

CREATE TABLE item_t (
    itemID INTEGER NOT NULL AUTO_INCREMENT,
    img_url VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    CONSTRAINT item_t PRIMARY KEY (itemID)
);

CREATE TABLE user_t (
    userID INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    CONSTRAINT user_t PRIMARY KEY (userID)
);

CREATE TABLE appointment_t (
    appointmentID INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL,

    CONSTRAINT appointment_t PRIMARY KEY (appointmentID)
);

INSERT INTO user_t(name, email, password) VALUES
('admin', 'admin@gmail.com', 'admin'),
('Roshni Parvin', 'roshni@gmail.com', '1234'),
('Samiul Islam Sourav', 'sourav@gmail.com', '1234'),
('Hasan Imam', 'hasan@gmail.com', '1234'),
('S Asif Ahmed Joy', 'asif@gmail.com', '1234');

INSERT INTO item_t(img_url, name, description) VALUES
('1.jpg', 'Mother In Law Tongue', 'It does not require much care. Will do best in very bright light, even some morning sun.'),
('2.jpg', 'Dracaena Fragrans', 'A graceful house plant that will do well in medium to bright indirect light.'),
('3.jpg', 'Lucky Bamboo', '"Lucky Bamboo" is not bamboo at all but is one type of Dracaena plant.'),
('4.jpg', 'Philodendron Brasil', 'Philodendron Brasil is similar to the Cordatum but has some yellow-green variegation on the leaves. A pretty house plant, the Philodendron Brasil adds a touch of color.'),
('5.jpg', 'Guzmania Bromeliad', 'This is a Guzmania Bromeliad, the most common bromeliad used as a houseplant. They can be many colors, yellow, pink, purple, red and many variations of those colors.');

