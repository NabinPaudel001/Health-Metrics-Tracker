CREATE TABLE systolic_tracks (
    systolic_track_id INT PRIMARY KEY AUTO_INCREMENT,
    m_id INT,
    day1 FLOAT,
    day2 FLOAT,
    day3 FLOAT,
    day4 FLOAT,
    day5 FLOAT,
    day6 FLOAT,
    day7 FLOAT,
    FOREIGN KEY (m_id) REFERENCES metrics(m_id)
);
INSERT INTO systolic_tracks (m_id, day1, day2, day3, day4, day5, day6, day7)
VALUES
    (1, 120.5, 122.0, 118.5, 119.8, 121.2, 119.5, 120.0);

