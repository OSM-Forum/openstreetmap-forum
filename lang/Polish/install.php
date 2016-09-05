<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Choose install language'		=>	'Język skryptu instalacyjnego',
'Choose install language info'	=>	'Język wykorzystywany w tym skrypcie instalacyjnym. Domyślny język dla całego forum można ustawić niżej.',
'Install language'				=>	'Wybierz język instalacyjny',
'Change language'				=>	'Zmień język',
'Already installed'				=>	'Wygląda na to, że FluxBB jest już zainstalowany. Przejdź do <a href="index.php">strony głównej</a>.',
'You are running error'			=>	'Na serwerze uruchomiony jest %1$s w wersji %2$s. FluxBB %3$s wymaga co najmniej %1$s %4$s , aby działać poprawnie. Należy zaktualizować %1$s , aby kontynuować instalację.',
'My FluxBB Forum'				=>	'Moje forum FluxBB',
'Description'					=>	'Niestety, nikt nie powie Ci czym jest FluxBB - musisz go poznać sam!',
'Username 1'					=>	'Nazwa użytkownika musi mieć co najmniej 2 znaki.',
'Username 2'					=>	'Nazwa użytkownika nie może być dłuższa niż 25 znaków.',
'Username 3'					=>	'Gość (Guest) jest zarezerwowaną nazwą użytkownika.',
'Username 4'					=>	'Nazwa użytkownika nie może być postaci adresu IP.',
'Username 5'					=>	'Nazwa użytkownika nie może zawierać wszystkich znaków \', " i [ lub ] na raz.',
'Username 6'					=>	'Nazwa użytkownika nie może zawierać tagów BBCode.',
'Short password'				=>	'Hasło musi mieć co najmniej 6 znaków.',
'Passwords not match'			=>	'Wprowadzone hasła nie zgadzają się.',
'Wrong email'					=>	'Adres e-mail Administratora nie jest poprawny.',
'No board title'				=>	'Musisz wprowadzić tytuł forum.',
'Error default language'		=>	'Wybrany język domyślny nie istnieje.',
'Error default style'			=>	'Wybrany styl domyślny nie istnieje.',
'No DB extensions'				=>	'Środowisko PHP zainstalowane na serwerze nie wspiera baz danych, które wykorzystuje FluxBB. PHP powinien wspierać bazy danych MySQL, PostgreSQL lub SQLite, aby FluxBB został zainstalowany.',
'Administrator username'		=>	'Nazwa Administratora',
'Administrator email'			=>	'E-mail Administratora',
'Board title'					=>	'Tytuł forum',
'Base URL'						=>	'Adres URL',
'Required field'				=>	'jest polem wymaganym.',
'FluxBB Installation'			=>	'Instalacja FluxBB',
'Welcome'						=>	'Masz zamiar zainstalować FluxBB. W celu instalacji FluxBB należy wypełnić poprawnie poniższy formularz. W razie jakichkolwiek problemów podczas instalacji, należy zapoznać się z dokumentacją.',
'Install'						=>	'Instalacja FluxBB %s',
'Errors'						=>	'Poniższe błędy powinny zostać poprawione:',
'Database setup'				=>	'Ustawienia bazy danych',
'Info 1'						=>	'Proszę podać wymagane informacje w celu konfiguracji bazy danych dla FluxBB. Musisz znać wszystkie wymagane informacje przed przystąpieniem do instalacji.',
'Select database'				=>	'Wybierz typ bazy danych',
'Info 2'						=>	'FluxBB aktualnie wspiera bazy danych typu MySQL, PostgreSQL oraz SQLite. Jeśli Twojego typu bazy danych nie ma na poniższej liście rozwijalnej, oznacza to, że środowisko PHP zainstalowane na serwerze nie wspiera tego typu bazy. Więcej informacji na temat wsparcia dla poszczególnych wersji baz danych można znaleźć w FAQ.',
'Database type'					=>	'Typ bazy danych',
'Required'						=>	'(Wymagane)',
'Database hostname'				=>	'Wprowadź adres serwera bazy danych',
'Info 3'						=>	'Adres serwera bazy danych (przykład: localhost, db.myhost.com lub 192.168.0.15). Można sprecyzować niestandardowy port do łączenia z serwerem, jeżeli baza danych nie jest uruchomiona na standardowym porcie (przykład: localhost:3580). Dla SQLite wpisz cokolwiek lub pozostaw w polu \'localhost\'.',
'Database server hostname'		=>	'Adres serwera bazy danych',
'Database enter name'			=>	'Wprowadź nazwę bazy danych',
'Info 4'						=>	'Nazwa bazy danych, w której zostanie zainstalowany FluxBB. Podana baza danych musi istnieć na serwerze. Dla SQLite pole to oznacza nazwę pliku tej bazy. Ze względów bezpieczeństwa, zalecane jest, aby dostęp do tej bazy był prywatny (brak dostępu przez www). Jeżeli plik z bazą danych SQLite nie istnieje, FluxBB będzie próbował go utworzyć.',
'Database name'					=>	'Nazwa bazy danych',
'Database enter informations'	=>	'Wprowadź nazwę użytkownika i hasło bazy danych',
'Database username'				=>	'Nazwa użytkownika bazy danych',
'Info 5'						=>	'Wprowdź nazwę użytkownika i hasło, aby połączyć się z bazą danych. Zignoruj to dla SQLite.',
'Database password'				=>	'Hasło bazy danych',
'Database enter prefix'			=>	'Wprowadź prefiks dla tabel',
'Info 6'						=>	'Jeśli chcesz, możesz określić prefiks dla tabel w bazie danych. W ten sposób możesz zainstalować kilka kopii FluxBB w tej samej bazie danych (przykład: flux_).',
'Table prefix'					=>	'Prefiks tabel',
'Administration setup'			=>	'Ustawienia administracyjne',
'Info 7'						=>	'Tworzenie konta administratora forum',
'Info 8'						=>	'Nazwa użytkownika musi się składać z 2-25 znaków. Hasło użytkownika musi się składać z conajmniej 6 znaków. Wielkość znaków w haśle ma znaczenie.',
'Password'						=>	'Hasło',
'Confirm password'				=>	'Potwierdź hasło',
'Board setup'					=>	'Ustawienia forum',
'Info 11'                       =>  'Proszę wprowadzić wymagane informacje w celu konfiguracji forum FluxBB. Można je później zmienić.',
'General information'           =>  'Tytuł i opis forum.',
'Board description'             =>  'Krótki opis forum (to pole może zawierać kod HTML)',
'Appearance'                    =>  'Ustawienia wyglądu',
'Info 15'                       =>  'Wybierz domyślny język i styl dla forum',
'Default language'				=>	'Domyślny język',
'Default style'					=>	'Domyślny styl',
'Start install'					=>	'Rozpocznij instalację',
'DB type not valid'				=>	'\'%s\' nie jest poprawnym typem bazy danych',
'Table prefix error'			=>	'Podany prefiks \'%s\' zawiera niepoprawne znaki lub jest za długi. Prefiks może zawierać litery a-z, cyfry i znak podkreślenia, nie możę rozpoczynać się cyfrą. Maksymalna długość prefiksu to 40 znaków. Wybierz inny prefiks.',
'Prefix reserved'				=>	'Prefiks \'sqlite_\' jest zarezerwowany dla silnika SQLite. Wybierz inny prefiks.',
'Existing table error'			=>	'Tabela \'%susers\' już istnieje w bazie \'%s\'. Może to oznaczać, że FluxBB jest już zainstalowany lub inne oprogramowanie zainstalowane w bazie wykorzystuje nazwy tabel, których wymaga FluxBB. Jeśli instalujesz wiele kopii FluxBB w jednej bazie, musisz wykorzystywać różne prefiksy dla różnych kopii FluxBB.',
'InnoDB off'					=>	'Usługa InnoDB nie jest uruchomiona na serwerze. Wybierz inny typ bazy danych, który nie wykorzystuje InnoDB, bądź uruchom tę usługę na serwerze MySQL.',
'Administrators'				=>	'Administratorzy',
'Administrator'					=>	'Administrator',
'Moderators'					=>	'Moderatorzy',
'Moderator'						=>	'Moderator',
'Guests'						=>	'Goście',
'Guest'							=>	'Gość',
'Members'						=>	'Użytkownicy',
'Announcement'					=>	'Wprowadź ogłoszenie',
'Rules'							=>	'Wprowadź zasady forum',
'Maintenance message'			=>	'Forum jest aktualnie w trybie konserwacji. Odczekaj kilka minut, a następnie spróbuj ponownie.',
'Test post'						=>	'Wątek testowy',
'Message'						=>	'Jeśli widzisz tę wiadomość (a prawdopodobnie tak właśnie jest), oznacza to, że FluxBB został zainstalowany i działa poprawnie. Teraz zaloguj się i przejdź do Panelu Administracyjnego, aby skonfigurować forum.',
'Test category'					=>	'Kategoria testowa',
'Test forum'					=>	'Forum testowe',
'This is just a test forum'		=>	'To jest testowe forum',
'Alert cache'					=>	'<strong>Katalog cache nie jest obecnie zapisywalny!</strong> W celu poprawnej funkcjonalności FluxBB, katalog <em>%s</em> musi być zapisywalny przez PHP. Użyj komendy chmod, aby ustawić odpowiednie uprawnienia dla tego katalogu. Jeśli nie jesteś pewny, użyj chmod 0777.',
'Alert avatar'					=>	'<strong>Katalog avatar nie jest obecnie zapisywalny!</strong> Jeśli chcesz, aby użytkownicy mieli możliwość wgrywania swoich własnych avatarów, katalog <em>%s</em> musi być zapisywalny przez PHP. Później możesz zmienić miejsce zapisu wgrywanych avatarów - przejdź do Panel Administracyjny/Opcje. Użyj komendy chmod, aby ustawić odpowiednie uprawnienia dla tego katalogu. Jeśli nie jesteś pewny, użyj chmod 0777.',
'Alert upload'					=>	'<strong>Wysyłanie plików wydaje się być wyłączone na serwerze!</strong> Jeśli chcesz, aby użytkownicy mogli wgrywać swoje własne avatary, musisz włączyć funkcję file_uploads w konfiguracji ustawień PHP. Jeśli upload plików jest właczony, wgrywanie avatarów można włączyć w Panelu Administracyjnym/Opcje/Ustawienia avatarów.',
'FluxBB has been installed'		=>	'FluxBB został pomyślnie zainstalowany! Aby w pełni ukończyć instalację, wykonaj następujące czynności:',
'Final instructions'			=>	'Instrukcje końcowe',
'Info 17'						=>	'W celu zakończenia instalacji, kliknij przycisk poniżej i pobierz plik config.php. Następnie wgraj ten plik do katalogu głównego FluxBB na serwerze.',
'Info 18'						=>	'Plik config.php został przesłany poprawnie na serwer, FluxBB został w pełni zainstalowany! W tym momencie możesz przejść do <a href="index.php">strony głównej forum</a>.',
'Download config.php file'		=>	'Pobierz plik config.php',
'FluxBB fully installed'		=>	'FluxBB został pomyślnie zainstalowany! Możesz teraz przejść do <a href="index.php">strony głównej forum</a>.',

);