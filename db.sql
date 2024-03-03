CREATE TABLE `categories` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `jobs` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `category_id` int(11) NOT NULL,
    `company` varchar(255) NOT NULL,
    `jobtitle` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `salary` varchar(255) NOT NULL,
    `location` varchar(255) NOT NULL,
    `contact_user` varchar(255) NOT NULL,
    `contact_email` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `categories` (`name`) VALUES
('tech'),
('business'),
('medical'),
('social services');


-- Insert two tech jobs
INSERT INTO `jobs` (`category_id`, `company`, `jobtitle`, `description`, `salary`, `location`, `contact_user`, `contact_email`)
VALUES
(1, 'Tech Company A', 'Software Engineer', 'Description for Software Engineer position', '$80,000', 'Tech City', 'John Doe', 'john@example.com'),
(1, 'Tech Company B', 'Data Analyst', 'Description for Data Analyst position', '$70,000', 'Tech City', 'Jane Smith', 'jane@example.com');

-- Insert two business jobs
INSERT INTO `jobs` (`category_id`, `company`, `jobtitle`, `description`, `salary`, `location`, `contact_user`, `contact_email`)
VALUES
(2, 'Business Firm X', 'Marketing Manager', 'Description for Marketing Manager position', '$90,000', 'Business Center', 'Michael Brown', 'michael@example.com'),
(2, 'Business Firm Y', 'Financial Analyst', 'Description for Financial Analyst position', '$85,000', 'Business Center', 'Emily Johnson', 'emily@example.com');

-- Insert two medical jobs
INSERT INTO `jobs` (`category_id`, `company`, `jobtitle`, `description`, `salary`, `location`, `contact_user`, `contact_email`)
VALUES
(3, 'Medical Center Z', 'Nurse Practitioner', 'Description for Nurse Practitioner position', '$75,000', 'Medical District', 'David Wilson', 'david@example.com'),
(3, 'Hospital W', 'Surgeon', 'Description for Surgeon position', '$150,000', 'Medical District', 'Sarah Adams', 'sarah@example.com');

-- Insert two social services jobs
INSERT INTO `jobs` (`category_id`, `company`, `jobtitle`, `description`, `salary`, `location`, `contact_user`, `contact_email`)
VALUES
(4, 'Social Services Organization P', 'Social Worker', 'Description for Social Worker position', '$60,000', 'Community Center', 'Robert Lee', 'robert@example.com'),
(4, 'Nonprofit Q', 'Community Outreach Coordinator', 'Description for Community Outreach Coordinator position', '$55,000', 'Community Center', 'Lisa Taylor', 'lisa@example.com');
