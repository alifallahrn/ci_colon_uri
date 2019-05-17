# Codeigniter Colon URI
Use COLON {:} character for split url parameters in codeigniter

Version: 1.0.0

Author: Ali Fallah [alifallahrn@gmail.com](mailto:alifallahrn@gmail.com).

This library is intended to be compatible with CI 2.x and CI 3.x.

# Installation/Usage
Download and drag the **MY_Router.php** & **MY_URI.php** files into your **application/core** directory. CodeIgniter will load and initialise this class automatically.

Now you can use colon(:) character for split key & value parameters in your url routing:
```php
http://localhost/project/class/method/param1:value1/param2:value2
```

Accessing parameters is also easy, use this code via uri library :
```php
$param1 = $this->uri->param('param1') // output = value1
$param2 = $this->uri->param('param2') // output = value2
$param3 = $this->uri->param('param3') // output = null
$param4 = $this->uri->param('param4', 1) // output = 1
```

Or use helper function :
```php
$param1 = param('param1') // output = value1
$param2 = param('param2') // output = value2
$param3 = param('param3') // output = null
$param4 = param('param4', 1) // output = 1
```
