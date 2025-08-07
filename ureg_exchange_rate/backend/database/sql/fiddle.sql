-- CREATE DATABASE forex;

-- CREATE TABLE currencies (
--     id SERIAL PRIMARY KEY,
--     code VARCHAR(3) NOT NULL,
--     name VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE rates (
--     id SERIAL PRIMARY KEY,
--     base_currency_id INT REFERENCES currencies(id),
--     target_currency_id INT REFERENCES currencies(id),
--     rate DECIMAL(18, 6) NOT NULL,
--     effective_date DATE NOT NULL
-- );

INSERT INTO currencies (id, code, name) VALUES
(1, 'USD', 'US Dollar'),
(2, 'EUR', 'Euro'),
(3, 'GBP', 'British Pound'),
(4, 'JPY', 'Japanese Yen'),
(5, 'AUD', 'Australian Dollar');

INSERT INTO rates (id, base_currency_id, target_currency_id, rate, effective_date) VALUES
(DEFAULT, 1, 2, 0.85, CURRENT_DATE),
(DEFAULT, 1, 3, 0.73, CURRENT_DATE),
(DEFAULT, 1, 4, 110.25, CURRENT_DATE),
(DEFAULT, 1, 5, 1.35, CURRENT_DATE),
(DEFAULT, 1, 2, 0.81, '2023-07-01'),
(DEFAULT, 1, 3, 0.68, '2023-07-01'),
(DEFAULT, 1, 4, 109.31, '2023-07-01'),
(DEFAULT, 1, 5, 1.25, '2023-07-01');

