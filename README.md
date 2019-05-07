## What is it?
HTML encrypter protect web pages source code, its hard for people to decrypt the source code but it displays perfectly in a browser. No AdBlocker can read it. It encrypt on the fly and only the web browser can read it. 
The size of the first block of code depends on the size of your web page, it contains your original HTML. The second block of code always stays the same length, it contains the decode function. When opened in a web browser, the original page appears to be unchanged, but the code underneath has been transformed.

## Features
 - Protect HTML code against fast cribbing copying
 - Encode local HTML to prevent in-file searching
 - Protect unfinished websites from Google
 - Confuse people who press the “View Source” button :D
 - Become part of the invisible web, hide from search engines and data miners ;)
 - Very lightweight and working on-the-fly
 - There is no decompiler yet. 
 
## How to install
 - git clone https://github.com/moh4mmad/html-encrypter.git
## Usage
 - To encrypt the whole page
 ```php
 <?php
require_once 'src/HtmlEncryptor.class.php';

$html = new Html\Encryptor;
$html->Encrypt();
?>
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
## Demo
https://sakib.info/html_encrypter/

## Issues
If you come across any issues please report them [here](https://github.com/moh4mmad/html-encrypter/issues)
