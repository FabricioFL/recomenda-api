# Recomenda api

<br>

## Endpoints:



## Adicionar musica

>### [POST] https://music-recomenda.herokuapp.com/api/music/add

<br>

### requisição:
```json
    {
        "title" : "titulo da musica",
        "reference" : "link da musica",
        "category" : "categoria da musica"
    }
```

<br>

### resposta esperada:
```json
    {
        "message" : "ok"
    }
```

<br>

### resposta de erro:
```json
    {
        "message" : "something wrong has occured"
    }
```

<br>
<br>
<br>

## Remover musica
>### [POST] https://music-recomenda.herokuapp.com/api/music/delete

<br>

### requisição:
```json
    {
        "title" : "some title"
    }
```

<br>

### resposta esperada:
```json
    {
        "message" : "ok"
    }
```

<br>

### resposta de erro:
```json
    {
        "message" : "something wrong has occured"
    }
```
<br>
<br>
<br>

## Receber musica aleatória
>### [GET] https://music-recomenda.herokuapp.com/api

### resposta esperada:
```json
    {
        "id": int,
        "title": "nome da musica",
        "reference": "link da musica",
        "category": "categoria da musica",
        "created_at": "data de adição no banco de dados",
        "updated_at": "data de atualização no banco de dados"
    }
```

<br>
<br>
<br>

## Receber musica aleatória por categoria
>### [GET] https://music-recomenda.herokuapp.com/api/{$algumaCategoria}

### resposta esperada:
```json
    {
        "id": int,
        "title": "nome da musica",
        "reference": "link da musica",
        "category": "categoria da musica",
        "created_at": "data de adição no banco de dados",
        "updated_at": "data de atualização no banco de dados"
    }
```

<br>
<br>
<br>

## Caso acesse a url raiz
>### [GET] https://music-recomenda.herokuapp.com

### resposta esperada:
```json
    {
        "message": "this endpoint is invalid, please check the documetation at https://github.com/FabricioFL/recomenda-api"
    }
```