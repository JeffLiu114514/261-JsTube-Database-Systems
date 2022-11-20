use jstube;

-- if using locally, change '..' to your own path to the directory

LOAD DATA LOCAL INFILE '../TaskC/user.csv' INTO TABLE USER
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (User_id, User_name, Email, Password);

LOAD DATA LOCAL INFILE '../TaskC/video.csv' INTO TABLE VIDEO
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (Video_name, Video_id, User_id, Upload_time, Membership_requirement, Link);

LOAD DATA LOCAL INFILE '../TaskC/membership.csv' INTO TABLE MEMBERSHIP
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (User_id, Level, Valid_date);

LOAD DATA LOCAL INFILE '../TaskC/administrator.csv' INTO TABLE ADMINISTRATOR
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (Administrator_id, Password, Email);

LOAD DATA LOCAL INFILE '../TaskC/case.csv' INTO TABLE jstube.CASE
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (Case_id, Administrator_id, Video_id, Type, Report_user_id);

LOAD DATA LOCAL INFILE '../TaskC/view.csv' INTO TABLE jstube.view
  FIELDS TERMINATED BY ',' 
  LINES TERMINATED BY '\n'
  IGNORE 1 LINES
  (Video_id, User_id, Times);



