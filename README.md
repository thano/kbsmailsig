# KBS Mail Sig
A pretty simple and pretty email signature generator for your office.

![screenshot](https://thano.github.io/kbs/img/right-img.JPG)

It is using materialize for css and animations:
http://materializecss.com/

Input your data on main site and hit generate. 
You will see a preview of your signature and a textarea that selects all markup with just clicking into it. 
Copy paste it into your html signature.

##index.php
Hosts the basic input form. You can easily add or change input fields to your liking. 

##signature.php
Receives the submitted data via GET and constructs the html markup for the email signature.
Change the markup inside 
```html
<div id="signature">...</div>
```
