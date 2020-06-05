# LocalGovDrupal demonstration module

Example content for demonstrating the LocalGovDrupal distribution and to help
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
