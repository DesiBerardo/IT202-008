CREATE TABLE IF NOT EXISTS Accounts(
    id int AUTO_INCREMENT PRIMARY KEY,
    account varchar(12) unique DEFAULT (NULL),
    user_id int,
    balance int DEFAULT 0,
    account_type VARCHAR(15),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check (balance >= 0 AND LENGTH(account) = 12)
)