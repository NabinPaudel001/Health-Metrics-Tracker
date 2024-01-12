CREATE TABLE weight_tracks (
    weight_track_id INT PRIMARY KEY AUTO_INCREMENT,
    m_id INT,
    week1 FLOAT,
    week2 FLOAT,
    week3 FLOAT,
    week4 FLOAT,
    week5 FLOAT,
    FOREIGN KEY (m_id) REFERENCES metrics(m_id)
);

INSERT INTO weight_tracks (m_id, week1, week2, week3, week4, week5)
VALUES (1, 150.5, 149.0, 148.5, 147.8, 146.2);