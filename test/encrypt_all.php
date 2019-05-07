<?php
require_once '../src/HtmlEncryptor.class.php';

$html = new Html\Encryptor;
$html->Encrypt();
?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>
      <p>This is a paragraph</p>
      <p>This is another paragraph</p>
    </td>
    <td>This cell contains a table:
      <table>
        <tr>
          <td>A</td>
          <td>B</td>
        </tr>
        <tr>
          <td>C</td>
          <td>D</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>This cell contains a list
      <ul>
        <li>apples</li>
        <li>bananas</li>
        <li>pineapples</li>
      </ul>
    </td>
    <td>HELLO</td>
  </tr>
</table>

</body>
</html>
