CREATE TABLE diastolic_tracks (
    diastolic_track_id INT PRIMARY KEY AUTO_INCREMENT,
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
INSERT INTO diastolic_tracks (m_id, day1, day2, day3, day4, day5, day6, day7)
VALUES
    (1, 80.5, 82.0, 78.5, 79.8, 81.2, 79.5, 80.0);