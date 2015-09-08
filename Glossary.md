Glossary of Programming Terms
=============================

Here is a list of programming terms that will come in handy
throughout the Backend Intro course and beyond.  For now,
don't worry if you don't totally understand each definition.
Just drink in the general concepts and file them away for later.  

* **[HTML](https://en.wikipedia.org/wiki/HTML)** (**H**yper**T**ext **M**arkup **L**anguage)

    Not a full programming language per se, but more of a "formatting language"
    for your web documents.  Pretty much all Web Pages are really HTML
    under the hood.  They have all the regular text of the web page,
    with special Tags and codes that supply the formatting (i.e. layout,
    font, text size, images, links, etc).

* **[Programming Language](https://en.wikipedia.org/wiki/Programming_language)** - (and low-level vs high-level)

    A formal language that allows a programmer to give a computer instructions to perform.
    Usually the code itself is in plain text format (see below).

    There are many programming languages.  When choosing a programming language, there is a
    tradeoff between how easy it is to express what you want the computer to do ("high-level",
    or "expressive"), vs how much direct control you have over the machine and how it
    implements the details of the individual instructions ("low-level", or "close to the metal").

    Examples of Programming Languages are Assembly Language (very low-level), C (low-level),
    C++ (a little higher level), as well as all the Scripting Languages listed below (high-level).

    In general, low-level languages take longer to write in, but can be used to create programs
    that are very fast, whereas high-level langauges can be used to create programs much more
    quickly, but the programs don't run as fast on the computer.

* **[Scripting Language](https://en.wikipedia.org/wiki/Scripting_language)**

    A kind of programming language that is designed to be easier to write programs quickly, without
    so much concern about them running fast.  In other words, a high-level programming language.

    Programs written in scripting languages are called "scripts", and are run by a program called
    the Interpreter (each scripting language has its own interpreter program).  This is different
    from a Compiled Language, where the code is compiled into an executable program that runs
    directly on the machine without assistance from an interpreter.

    Examples include PHP, python, ruby, javascript, lisp/scheme, perl, and erlang.

    In this course we will be using PHP as our scripting language.

* **[Client and Server](https://en.wikipedia.org/wiki/Client%E2%80%93server_model)**

    When 2 computers talk to each other, often one of the computers is consuming a service
    provided by the other.  In this case there is a clear breakdown of roles, where the computer
    consuming the service is called the Client and the one providing the service is called the Server.
    In web programming, the computer running the Web Server and hosting the website is the Server,
    whereas the computer that the user is browsing the website on is the Client.

* [**Backend Scripting Language** or **Server-Side Scripting Language**](https://en.wikipedia.org/wiki/Server-side_scripting)

    A scripting language that is deployed on the server (the computer hosting the web site)
    as opposed to the client (the user browsing the site's computer).  Any scripting language
    including Javascript (which is also the main front-end scripting language) will do as a
    backend scripting language.  In this course we will use PHP as our backend scripting language.
    The backend scripts do things like interface with the database, process form data submitted
    by clients, and create the HTML to send to the client to display on the web browser.

* [**Frontend Scripting Language** or **Client-Side Scripting Language**](https://en.wikipedia.org/wiki/Client-side_scripting)

    A scripting language that is deployed on the client (the computer that is browsing the web
    site).  In current web technology this is almost always Javascript, because Javascript
    is the only language supported by default on all major web browsers.  The frontend scripts
    do things like show / hide content when the user clicks on a link or button, handle transitions
    or animations, collect real-time analytics about a user's behavior, and talk to the server via
    AJAX calls when it wants to send more data back or when more data is needed from the server.
    

* **[Static Web Page](https://en.wikipedia.org/wiki/Static_web_page)**

    A web page whose HTML is not dynamically generated by a backend scripting language.  In other
    words, a static web page is just a plain .html file whose contents will never change unless you
    edit the file by hand.

    We can create static web pages with pure HTML, no PHP required!  However, as Wikipedia notes:

        Static web pages are suitable for the contents that never or rarely need
        to be updated. However, maintaining large numbers of static pages as files
        can be impractical without automated tools. Any personalization or
        interactivity has to run client-side, which is restricting.

    Hence, we'll learn how to use PHP to create Dynamic Web Pages.


* **[Dynamic Web Page](https://en.wikipedia.org/wiki/Dynamic_web_page)**

    A web page whose HTML is dynamically generated by a backend scripting language.  In other words,
    when you go to the web page, there is no .html file ready-made for your web browser to display!
    Instead, your request causes a backend script to run which creates the HTML on the fly.  This
    is a bit more complex but allows lots of extra features that would be harder to achieve with
    a static page, such as database interaction, or showing new/different content based on things
    the user does.


* [**PHP**](https://en.wikipedia.org/wiki/PHP) (**P**HP **H**ypertext **P**reprocessor)

    One of many backend scripting languages, PHP is still probably the most popular backend language
    people use to create the HTML for their web pages, though other languages like ruby, python
    and javascript are giving it a run for its money lately.  Examples of popular web pages that use
    PHP are Facebook and Wikipedia.

    PHP makes it very easy to make programs that create HTML because of its unique feature of letting
    you just write the HTML just as if it were a regular .html file, and whenever you need actual
    programming logic, you can "get into PHP" by typing `<?php ... ?>` and typing your PHP code inside.
    This way PHP just stays out of the way for 

* [**Plain Text Format**](https://en.wikipedia.org/wiki/Plain_text)

    A file format where the bits in the file correspond to a sequence of Characters and basically
    nothing else.  Characters can be letters, numbers, symbols, etc.  The 2 most common plain text
    formats are Unicode and ASCII.  You can use plain text files to store notes to yourself and
    retrieve them later using any Text Editor.  Other examples of files that are in plain text are
    HTML files, PHP code (most programming language code), many server configuration files.
    Examples of documents that are NOT plain text are Microsoft Word docs, Apple Rich Text (.rtf)
    files, PDFs, JPG and PNG images.  Linux / Unix is designed to make working with plain text files
    very easy and flexible.

* [**Text Editor**](https://en.wikipedia.org/wiki/Text_editor)

    A program that can be used to create and edit Plain Text files.  Examples are vim, nano, emacs,
    Sublime Text, TextEdit (Mac), TextMate (Mac), NotePad (Windows), NotePad++ (Windows), and PHPStorm.
    Not to be confused with a Word Processor!  Word Processors like Microsoft Word or Apple Pages
    do not create Plain Text files - they create proprietary binary file formats such as .doc, which
    is a very different thing and cannot be used to edit code.

* [**network**](https://en.wikipedia.org/wiki/Computer_network)
* [**operating system**](https://en.wikipedia.org/wiki/Operating_system)
* [**linux**](https://en.wikipedia.org/wiki/Linux)
* [**gnu**](https://en.wikipedia.org/wiki/GNU)
* [**virtual machine**](https://en.wikipedia.org/wiki/Virtual_machine)
* [**Command Line**](https://en.wikipedia.org/wiki/Command-line_interface)
* [**database**](https://en.wikipedia.org/wiki/Database)
* [**mysql**](https://en.wikipedia.org/wiki/MySQL)
* [**ssh**](https://en.wikipedia.org/wiki/Secure_Shell)
* [**git**](https://en.wikipedia.org/wiki/Git_(software)
