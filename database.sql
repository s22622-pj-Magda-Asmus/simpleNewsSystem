drop database if exists myposts;

create database myposts;

use myposts;
create table posts
(
	id int primary key auto_increment,
	post_time timestamp default CURRENT_TIMESTAMP,
	title varchar(255),
	body varchar(10000)
);

INSERT INTO `posts` (`id`, `post_time`, `title`, `body`) VALUES
                                                             (1, '2022-06-21 19:25:28', 'pierwszy post', 'Ok. Jeśli ten post sie uda to już cos. Jak nie to idę spać.'),
                                                             (2, '2022-06-21 19:26:49', 'Drugi post', 'Wstepnie wyglada na to że wszystko działa ale musze napisać długi post by zobaczyc czy faktycznie na pierwszej stronie wyświetli się cześć a po kliknieciu \"czytaj dalej\" już całość posta');
