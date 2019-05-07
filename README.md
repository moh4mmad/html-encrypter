## About HTML Encrypter
HTML encrypter protect web pages source code, its hard for people to decrypt the source code but it displays perfectly in a browser. No AdBlocker can read it. It encrypt on the fly and only the web browser can read it.
## How to install
 - git clone https://github.com/moh4mmad/html-encrypter.git
## Usage
 - To encrypt the whole page
 ```php
require_once 'src/HtmlEncryptor.class.php';

$html = new Html\Encryptor;
$html->Encrypt();
```
- To encrypt a part in a page
```php
<?php
require_once 'src/HtmlEncryptor.class.php';
$html = new Html\Encryptor;
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
  text-align: left;
}
</style>
</head>
<body>
<h2>Table Caption</h2>
<p>To add a caption to a table, use the caption tag.</p>
<?php $html->Encrypt(); ?>
<table style="width:100%">
  <caption>Monthly savings</caption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
  </tr>
</table>

</body>
</html>
```
## Issues
If you come across any issues please report them [here](https://github.com/moh4mmad/html-encrypter/issues)
