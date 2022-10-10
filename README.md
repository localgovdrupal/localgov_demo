# LocalGov Drupal demonstration module

Example content for demonstrating the LocalGov Drupal distribution and to help
with development.

## Updating and adding content

To update default content already included in the module simply run:

```bash
drush dcem localgov_demo
```

To add new content add entity UUIDs to the `localgov_demo.info.yml` file and
export the content as above. Details on how to find entity UUIDs can be found
here:
<https://www.drupal.org/docs/8/modules/default-content-for-d8/defining-default-content> \
(Hint: use Devel).

Or

Export content and all references with:

```bash
lando drush dcer <entity type> <entity id> --folder=modules/contrib/localgov_demo/content/
```

You'll want to delete the `localgov_demo/content/user` directory before
committing code if using this method. Then add the new UUIDs to the
`localgov_demo.info.yml` file.

## Writing tests

To be able to test content isn't broken with updates and changes there should
be a test for each content type there's demo content for.

These tests only need to check that specific content appears in a given region.
This can be done by using the [elementTextContains()](https://api.drupal.org/api/drupal/vendor%21behat%21mink%21src%21WebAssert.php/function/WebAssert%3A%3AelementTextContains/8.9.x)
method to select an element by a CSS region without being too specific with the
CSS selector. For example:

```php
$this->assertSession()->elementTextContains('css', 'header h1', 'Adult health and social care');
$this->assertSession()->elementTextContains('css', '.block-localgov-service-cta-block nav', 'Find out about meals on wheels');
```

Installing the localgov_demo module takes some time, so for efficiency all content
tests should be added to the testPageContent() method in the ContentTest.php file.
Notes:

1. The --folder definition is relative to the web root.
2. There is no slash at the start of the path, it is --folder=modules/contrib...
3. You should delete the `localgov_demo/content/user` directory before
committing code if using this method as it will include users.
4. You should also add the new UUIDs to the `localgov_demo.info.yml` file.
5. Adding this line to trigger some tests! 
