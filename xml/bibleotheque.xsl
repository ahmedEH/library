<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>La liste des livres dans cette bibleotheque</h2>
  <table >
      <tr >
        <th>Title</th>
        <th>Annee de production</th>
        <th>Auteur</th>
      </tr>
      <xsl:for-each select="bibleotheque/livre">
      <tr>
        <td><xsl:value-of select="titre" /></td>
        <td><xsl:value-of select="annee_prod" /></td>
        <td><xsl:value-of select="auteur" /></td>
        <td><a href="livre.php"><input type="button" value="Voir livre" /></a></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>