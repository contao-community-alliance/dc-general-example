Example of an no operational data provider:
===========================================
The no operational data provider is a excellent feature from the dcg. With this provider you can do very useful things.

This [example][example-3] shows how use the no operational data provider.

With this provider you can easily create an edit mask and don't have to program anything for data entry yourself.
The configuration can be done with a dca configuration that you have already used.
This also has the advantage that the data input is also checked.
With this configuration the sql are not needed or should be omitted. Otherwise the table will be created in the database.
What you don't need in this case. Show the [dca configuration][dca configuration].


Add the backend navigation link:
--------------------------------
So you must add the backend navigation link. Show [here][config-mod].

After this we have a link for theme importer.

If you now click on this link, you will be asked to create a new record. Which you don't need at this point.
You don't want to save the record. Therefore one should do the following so that one can start immediately with the input.
One should manipulate the link, so that one arrives immediately in the edit mask. 

How to do this can be seen here:
- create the [hook][config-hook]
- customise the hook as [service][service-hook]


Executing the Import:
---------------------
Now we have the data we need for our import. Next it has to be processed.
You should use this event, which is configured [here][service-event]. So you can complete your import.


[example-3]: https://github.com/contao-community-alliance/dc-general-example/blob/master/example/example-3/example-3.md
[dca configuration]: https://github.com/contao-community-alliance/dc-general-example/blob/master/src/Resources/contao/dca/tl_dcg_themes_import.php
[config-mod]: https://github.com/contao-community-alliance/dc-general-example/blob/master/src/Resources/contao/config/config.php#L26-L28
[config-hook]: https://github.com/contao-community-alliance/dc-general-example/blob/master/src/Resources/contao/config/config.php#L24
[service-hook]: https://github.com/contao-community-alliance/dc-general-example/blob/master/src/Resources/config/theme_importer_service.yml#L3-L8
[service-event]: https://github.com/contao-community-alliance/dc-general-example/blob/master/src/Resources/config/theme_importer_service.yml#L10-L19
