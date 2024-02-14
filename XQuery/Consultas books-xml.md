<div align="justify">

<div align="right">
Rafael Martín Mayor.
</div>

## Consultas XQuery de books.xml:

**1. Listar los títulos de todos los libros:**

```xquery
for $book in doc("books.xml")//book 
return $book/title/text()
```

**2. Listar los años y los títulos de todos los libros ordenado por año:**

```xquery
for $book in doc("books.xml")//book 
order by $book/publish_date/year()
return concat($book/publish_date/year(), ": ", $book/title/text())
```

**3. Listar los libros cuyo precio sea menor que 65.95:**

```xquery
for $book in doc("books.xml")//book 
where $book/price < 65.95
return $book/title/text()
```

**4. Listar los libros publicados antes del año 2000:**

```xquery
for $book in doc("books.xml")//book 
where $book/publish_date/year() < 2000
return $book/title/text()
```

**5. Listar año y título de libros publicados por Mike Galos después del año 1992:**

```xquery
for $book in doc("books.xml")//book
where $book/author = "Galos, Mike" and xs:date($book/publish_date) > xs:date("1992-12-31")
return
  <book>
    <title>{$book/title}</title>
    <year>{substring($book/publish_date, 1, 4)}</year>
  </book>
```

</div>