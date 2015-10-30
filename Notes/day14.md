Day 14 - HTML & CSS
-------------------

Already Learned:

* If you want <strong>Bold Text</strong> you can do this <b>or this</b>
* Or for italics, <em>this</em> or the <i>old-school way</i>
* <p></p> & <br>
    * when to use which
* <h1></h1>
* <table> / <tr> / <th> / <td>
* style - <p style="color: red">red</p>
* <pre>

About to Learn:

* Way more about style and CSS (Cascading Style Sheets)
    * Inline styles - style="<CSS RULE>"
    * Colors - builtin color names, Custom RGB #000000
    * How to make CSS rules
    * Background Images (in the CSS) background: url(<URL>)
    * box-model (box-sizing: border-box)

* <div> and <span> - Block Elements and Inline Elements
    * <span> - for Inline Elements - doesn't change anything by itself,
      just for grouping & styling
    * <div> - for Block Elements

* HTML = Hyper Text Markup Language
  vs HTTP = Hyper Text Transport Protocol

* Links - `<a href="<URL>">`
    * Absolute vs Relative URLs

* Lists
    * <ul> Unordered List
    * <ol> Ordered List
    * <li> inside either = List Item

* <html> / <body> / <head>

* <style>

* Images - <img src="<URL>">
* Forms (for posting data)
* URL Structure (Protocol, Domain, URI, optional Get variables aka Query var)
    https://www.google.com?q=candy+bar

* Redirects
    * 301 Moved Permanently (e.g. google.com -> www.google.com)

* How PHP can help with HTML



HTML Challenge 1
----------------

Create a page called "/page1.php" that has:

* A header
* A block element of some kind
* An inline element of some kind
* A list containing:
    * A link to a wikipedia article
    * A link to another page, "/page2.php"

page2.php should contain:

* A <style> block that turns all the text a weird color
* A header
* A link back to "/page1.php"



HTML Challenge 2 - Puppy Dog Array
----------------------------------

* see puppy-dogs.php


Get Variables and Forms
-----------------------

* URLs can have variables in this format:

  https://amazon.com?product=Lord+of+the+Rings&quantity=1&name=Ryan

* The PHP script can then read those variables
  in the $_GET superglobal variable

* Also known as query variables

* You can fill out a form and click submit and have all the
  info you filled out turn into Get Variables in the next URL


Get Vars and Forms Exploration
------------------------------

* Download the getvars-and-forms.php example

* Play around with the variables in your URL and see how it affects what goes into the $_GET array.

