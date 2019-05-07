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
