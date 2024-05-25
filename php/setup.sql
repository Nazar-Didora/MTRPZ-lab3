-- Створення бази даних
CREATE DATABASE IF NOT EXISTS inspiration;

-- Використання бази даних
USE inspiration;

-- Створення таблиці для цитат
CREATE TABLE IF NOT EXISTS quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quote TEXT NOT NULL,
    author VARCHAR(100)
);

-- Вставка початкових даних
INSERT INTO quotes (quote, author) VALUES
('The only limit to our realization of tomorrow is our doubts of today.', 'Franklin D. Roosevelt'),
('Do not watch the clock. Do what it does. Keep going.', 'Sam Levenson'),
('Keep your face always toward the sunshine—and shadows will fall behind you.', 'Walt Whitman'),
('The best way to predict your future is to create it.', 'Abraham Lincoln'),
('Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.', 'Albert Schweitzer'),
('The only way to do great work is to love what you do.', 'Steve Jobs'),
('The purpose of our lives is to be happy.', 'Dalai Lama'),
('Life is what happens when you’re busy making other plans.', 'John Lennon'),
('Get busy living or get busy dying.', 'Stephen King'),
('You have within you right now, everything you need to deal with whatever the world can throw at you.', 'Brian Tracy'),
('Believe you can and you’re halfway there.', 'Theodore Roosevelt'),
('The only impossible journey is the one you never begin.', 'Tony Robbins'),
('Act as if what you do makes a difference. It does.', 'William James');
