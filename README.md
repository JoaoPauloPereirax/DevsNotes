# DEVSNOTES: (Sistema de anotações simples)

## O que o projeto precisa fazer?
-Listar anotações
-Pegar informações de UMA anotação
-Inserir anotações
-Atualizar anotações
-Deletar anotações
OBS: Basicamente um CRUD

## Qual  a estrutura de dados?
-Local Para Armazenar as anotações
--id
--title
--body

## Quais os endpoints?
-(METODO) / url (PARÂMETROS)
--(GET) /api/notes      -      /api/getall.php
--(GET) /api/note/123      -      /api/get.php?id=123
--(POST) /api/note (title,body)     -      api/getall.php
--(PUT) /api/note/123 (title,body)      -      /api/update.php (id, title, body)
--(DELETE) /api/note/123      -      api/delete.php (id)
