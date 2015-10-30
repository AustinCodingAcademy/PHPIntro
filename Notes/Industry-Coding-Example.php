Real World Coding Example
=========================

Adding Functionality From One Dashboard To Another
--------------------------------------------------


-------


Show and Tell
-------------

* I'm sharing a real-world coding example -
  what I did at work yesterday.

* We have 2 different Dashboards at work, and one of
  them had some Tagging functionality, and we needed
  to Duplicate the functionality over to the other
  Dashboard.

* Real-world example of PHP coding
  in a large existing codebase.

    * Demonstration of coding Best Practices

    * Work Smart now so we don't have to Work Hard later! :)

* Don't worry if you don't understand most of the code!
  Just soak in the general concepts.


Background & Business Need
--------------------------

* At **ContractorMarketingPros**, we do marketing to get
  phone calls from new customers (**Leads**) for our clients.

* We have a **Client Dashboard** where our clients can
  log in and see a list of their Leads.  Clients can
  listen back to a recording of the call, flag a Lead
  for review if they feel it is not valid, and tag the
  Lead for organizational purposes.

* We also have an **Admin Dashboard** that *we* use - to
  onboard clients, manage their campaigns, and
  evolve our platform.  It has (mostly) a superset
  of the functionality of the Client Dashboard.

* But the **Lead Tagging functionality** is one case where
  the Client Dashboard had something the Admin Dashboard
  did not.  Some of our Admins were needing it so they
  could better organize Leads and help clients do the
  same.

* So again, the task is to *Duplicate the Lead Tagging
  functionality from the Client to the Admin*.


Notes about the Code
--------------------

* **Functions** - still the all-important basic unit of Code

    * The codebase is much, much larger but the concepts are still the same!

    * Taking loose code and moving it into a function

    * Figuring out what our inputs need to be

    * (This is called *factoring*, more on this later!)

* **Object-Oriented** - 2 new kinds of Functions (called Methods):

    * (->) Non-static Methods - about a specific Object instance: `$dog->bark();`
      is referring to the specific dog `$dog` and not about dogs in general.

    * (::) Static Methods - about that Class of objects in general,
      not a specific Object: `Dog::getAllBreeds();` is not
      about a specific dog, but about dogs in general.

* **MVC (Model View Controller)** architecture

    * Models are the Objects stored in our Database
      and code used to deal with them

    * Views are the HTML templates used to actually
      show the web pages for the User

    * Controllers are the glue code that figures out
      which URL the user wants to go to and gets the
      correct data

    * Our code base doesn't adhere strictly to this



Other things to Notice
----------------------

* **Git** source control - captured the story

        git log --stat --reverse

* **Factoring** - taking code that is just "out there" and
  "pulling it in" to its own function

    * Neater and cleaner
    * More reuseable / maintainable
    * Not that much more work, once you know how
    * Makes future work *much* easier

