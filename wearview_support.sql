
USE if0_39069939_wearview;

CREATE TABLE IF NOT EXISTS issues (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  location VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  status ENUM('incomplete', 'complete') DEFAULT 'incomplete',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
