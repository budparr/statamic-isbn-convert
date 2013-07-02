# Statamic ISBN Converter Plugin
=======================

Converts a 13 digit ISBN number to ISBN-10. The purpose of the plugin is to link to Amazon book pages directly without having to put in two ISBN numbers for each title.

Requires the Statamic CMS.

## Usage

* Download the zip file and unzip it or clone the repo.
* Make sure the folder name is "isbn_convert."
* Upload to your "/_add-ons/" folder.



## Tag

{{ isbn_convert isbn13='978XXXXXXXXXX' }}

or, for example

{{ isbn_convert isbn13='{{ isbn }}' }}

where {{ isbn }} is your ISBN field's output tag.
