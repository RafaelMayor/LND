<div align="justify">

<div align="right">
Rafael Martín Mayor.
</div>

# Implementación de Transformaciones XSLT de XML a XML

**Introducción**

Este informe describe la implementación de transformaciones XSLT para convertir un documento XML de origen en otro documento XML con un formato o estructura diferente.

**Fundamentos de XSLT**

XSLT (Extensible Stylesheet Language Transformations) es un lenguaje de transformación de hojas de estilo desarrollado por el W3C. Se utiliza para convertir documentos XML de origen en otros documentos XML, HTML, o formatos de texto.

**Ventajas de XSLT:**

* **Flexibilidad:** Permite realizar transformaciones complejas de forma precisa y eficiente.
* **Extensibilidad:** Se pueden crear extensiones personalizadas para ampliar las funcionalidades de XSLT.
* **Interoperabilidad:** Es compatible con diferentes plataformas y lenguajes de programación.

**Ejemplo práctico**

A continuación, se presenta un ejemplo de transformación XSLT de XML a XML:

## XML de entrada:

catalogos.xml

```xml
<catalogo>
  
  <cd>
    <titulo>El mar que no cesa</titulo>
    <artista>Heroes del silencio</artista>
    <pais>España</pais>
    <compania>Dro</compania>
    <precio>5,60</precio>
    <anio>1989</anio>
  </cd>
  
  <cd>
    <titulo>París</titulo>
    <artista>Supertramp</artista>
    <pais>Inglaterra</pais>
    <compania>Columbia</compania>
    <precio>10,80</precio>
    <anio>2000</anio>
  </cd>
  
  <cd>
    <titulo>Bulerías</titulo>
    <artista>Manolo Escobar</artista>
    <pais>España</pais>
    <compania>Dro</compania>
    <precio>5,60</precio>
    <anio>1976</anio>
  </cd>
  
  <cd>
    <titulo>Manolo</titulo>
    <artista>El Fary</artista>
    <pais>España</pais>
    <compania>Dro</compania>
    <precio>4,80</precio>
    <anio>1950</anio>
  </cd>
  
</catalogo>
```

## Transformación XSLT para obtener solo título, artista y país

```xml
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="xml" indent="yes" />

  <xsl:template match="/">
    <catalogo>
      <xsl:for-each select="//cd">
        <cd>
          <xsl:value-of select="titulo" />
          <xsl:value-of select="artista" />
          <xsl:value-of select="pais" />
        </cd>
      </xsl:for-each>
    </catalogo>
  </xsl:template>

</xsl:stylesheet>
```

## **Resultado:**

```xml
<catalogo>
  <cd>
    <titulo>El mar que no cesa</titulo>
    <artista>Heroes del silencio</artista>
    <pais>España</pais>
  </cd>
  <cd>
    <titulo>París</titulo>
    <artista>Supertramp</artista>
    <pais>Inglaterra</pais>
  </cd>
  <cd>
    <titulo>Bulerías</titulo>
    <artista>Manolo Escobar</artista>
    <pais>España</pais>
  </cd>
  <cd>
    <titulo>Manolo</titulo>
    <artista>El Fary</artista>
    <pais>España</pais>
  </cd>
</catalogo>
```
</div>