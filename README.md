# API Spec

## Authentication

All API must use this authentication

Request :
- Header :
    - X-Api-Key : "your secret api key"

## Create Student

Request :
- Method : POST
- Endpoint : `/api/students`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "id" : "string or uuid, unique",
    "firstName" : "string",
    "lastName" : "string",
    "class" : "char",
    "exSchool" : "string"
}
```

Response :

```json 
{
    "code" : "number",
    "status" : "string",
    "data" : {
         "id" : "string or uuid, unique",
         "firstName" : "string",
         "lastName" : "string",
         "class" : "char",
         "exSchool" : "string",
         "createdAt" : "timestamp",
         "updatedAt" : "timestamp"
     }
}
```

## Get Student

Request :
- Method : GET
- Endpoint : `/api/students/{id_student}`
- Header :
    - Accept: application/json

Response :

```json 
{
    "code" : "number",
    "status" : "string",
    "data" : {
         "id" : "string or uuid, unique",
         "firstName" : "string",
         "lastName" : "string",
         "class" : "char",
         "exSchool" : "string",
         "createdAt" : "timestamp",
         "updatedAt" : "timestamp"
     }
}
```

## Update Student

Request :
- Method : PATCH
- Endpoint : `/api/students/{id_student}`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "firstName" : "string",
    "lastName" : "string"
    "class" : "char",
    "exSchool" : "string"
}
```

Response :

```json 
{
    "code" : "number",
    "status" : "string",
    "data" : {
         "id" : "string or uuid, unique",
         "firstName" : "string",
         "lastName" : "string",
         "class" : "char",
         "exSchool" : "string",
         "createdAt" : "date",
         "updatedAt" : "date"
     }
}
```

## List Student

Request :
- Method : GET
- Endpoint : `/api/students`
- Header :
    - Accept: application/json
- Query Param :
    - size : number,
    - page : number

Response :

```json 
{
    "code" : "number",
    "status" : "string",
    "data" : [
        {
             "id" : "string or uuid, unique",
             "firstName" : "string",
             "lastName" : "string",
             "class" : "char",
             "exSchool" : "string",
             "createdAt" : "date",
             "updatedAt" : "date"
        },
        {
             "id" : "string or uuid, unique",
             "firstName" : "string",
             "lastName" : "string",
             "class" : "char",
             "exSchool" : "string",
             "createdAt" : "date",
             "updatedAt" : "date"
         }
    ]
}
```

## Delete Student

Request :
- Method : DELETE
- Endpoint : `/api/students/{id_student}`
- Header :
    - Accept: application/json

Response :

```json 
{
    "code" : "number",
    "status" : "string"
}
```
