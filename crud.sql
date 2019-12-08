CREATE DATABASE crud;

use crud;

create table usuario(
id int not null primary key auto_increment,
usuario char(10),
senha char(10),
perfil char(13)
);

insert into usuario(id,usuario,senha,perfil)
values(null,'ana','123','Administrador');

select * from usuario;
