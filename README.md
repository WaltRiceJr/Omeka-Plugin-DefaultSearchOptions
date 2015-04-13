DefaultSearchOptions Plugin
===========================

This plugin lets an administrator set the default search options for advanced search in Omeka. Note that the options set here will apply when advanced search is disabled.

You might want to change the default search type from 'Keyword' to 'Boolean' if you are encountering issues with records not being returned. MySQL full text indexing has a built-in stopword list. In addition, any word that occurs in more than 50% of the records in the index is added to the stoplist, making searches for common metadata elements impossible. Using a Boolean search will lose some of the flexibility of the default Keyword search, but it will ignore the stopword list and the 50% threshold.

This plugin will only work in Omeka 2.3 and higher, as the required filters were first implemented in version 2.3. 

Installation
============

1. Put these files in a folder called DefaultSearchOptions in your Omeka plugins directory.
2. In the admin interface, click to Install the DefaultSearchOptions plugin.
3. Configure the default options

Thanks
======

Inspiration to put the plugin together comes from the very simple and very useful DefaultSort plugin by The Digital Ark.
