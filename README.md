# Projekt — MyGarden

## Opis projektu
Celem projektu 'MyGarden' było stworzenie systemu logowania i rejestracji, którego istotne elementy odbywały by się po stronie serwera wykorzystującego technologię PHP.

## Założenia projektu
- Możliwość rejestracji użytkownika (email, nickname, hasło)  
- Logowanie użytkownika z weryfikacją danych w bazie  
- Utrzymanie sesji zalogowanego użytkownika  
- Wylogowanie i przekierowanie na stronę logowania  
- Podstawowy styl w CSS

## Wykorzystane technologie
- HTML
- CSS
- PHP
- MySQL

## Narzędzia
- XAMPP (Obsługa serwera oraz bazy danych)
- VS Code (Edytor)
- Przeglądarka internetowa (Podgląd strony)

## Szybka instalacja i uruchomienie
1. Skopiuj zawartość repozytorium (Za wyjątkiem plików README.md oraz users.sql) do C:\xampp\htdocs\
2. Uruchom program 'XAMPP' i wyskakującym oknie kliknij przycisk 'START' modułów **Apache** oraz **MySQL**.
3. Otwórz przeglądarkę internetową i przejdź do http://localhost/phpmyadmin.
4. Utwórz nową bazę danych o nazwie 'user_base' lub zaimportuj gotową bazę z pliku 'users.sql' 
**(UWAGA Przed wdrożeniem bazy, zmień lub usuń testowy login administratora. Email: admin@mail.com, Hasło: 12345, nickname: admin).** 
5. Następnie w przeglądarce otwórz: http://localhost/my_garden

## Struktura plików projektu
- **index.php** - Przesyłanie do 'Welcome_page.php'
- **Welcome_page.php** - Strona główna logowania i rejestracji
- **login.php** - Strona logowania użytkownika
- **login_user.php** - Obsługa logowania (połączenie z bazą)
- **create_account.php** - Formularz rejestracji
- **database_connect.php** - Dane i konfiguracja połączenia z bazą
- **database_auth&create_account.php** - Obsługa tworzenia konta
- **user_main_page.php** - Główna strona użytkownika po zalogowaniu
- **logout.php** - Wylogowanie i zakończenie sesji
- **style.css** - Plik stylów dla całego projektu
- **users.sql** - Plik eksportu bazy danych (tabela users)

## Struktura bazy danych users

| Kolumna   | Typ danych   | Atrybuty                    | Opis                      |
|-----------|--------------|-----------------------------|---------------------------|
| id        | INT          | AUTO_INCREMENT, PRIMARY KEY | Identyfikator użytkownika |
| email     | VARCHAR(100) | UNIQUE                      | Adres e-mail              |
| nickname  | VARCHAR(50)  | UNIQUE                      | Nazwa użytkownika         |
| password  | VARCHAR(255) | —                           | Hasło użytkownika         |

## Dodatkowe uwagi
Należy upewnić się czy dane z pliku **database_connect.php** zgadzają się z uruchomioną bazą danych.

## Autor

Projekt wykonany przez **Wiktora Kowalskiego** - W1kiTor
