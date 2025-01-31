<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Mon petit tableau </title> 
<link rel="stylesheet" href="style.css">
</head>

<table>

<caption> Mon petit tableau</caption>

<colgroup>
	<col>
	<col>
	<col span="6">
</colgroup>
<tr>
	
    <td rowspan="2"> Solde 30% </td>
    <td rowspan="6"> Solde 70% </td>
    <td colspan="6"> Par catégorie </td>

</tr>
<tr>
    <td colspan="2">Hommes</td>
    <td colspan="2">Femmes</td>
    <td colspan="2">Enfants</td>
</tr>
<tr>
	<td rowspan="4"> Solde 50% </td>
	<td> Article 1 </td>
	<td> Article 2 </td>
	<td> Article 3 </td>
	<td> Article 4 </td>
	<td> Article 5 </td>
	<td> Article 6 </td>
	
</tr>
<tr>
	<td> Article 7 </td>
	<td> Article 8 </td>
	<td> Article 9 </td>
	<td> Article 10 </td>
	<td> Article 11 </td>
	<td> Article 12 </td>
	
</tr><tr>
	<td> Article 13 </td>
	<td> Article 14 </td>
	<td> Article 15 </td>
	<td> Article 16 </td>
	<td> Article 17 </td>
	<td> Article 18 </td>
	
</tr><tr>
	<td> Article 19 </td>
	<td> Article 20 </td>
	<td> Article 21 </td>
	<td> Article 22 </td>
	<td> Article 23 </td>
	<td> Article 24 </td>
	
</tr>

CSS

body { background-color:black;
       color:white ;
 }
tr ,td { border: 3px solid;
        padding: 10 px;
        justify-content: center;
}
table { border-collapse: collapse;}