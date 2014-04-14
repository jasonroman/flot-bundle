Jason Roman's Flot Bundle
==============

This bundle requires (and loads) <a href="https://github.com/jasonroman/flot">jasonroman/flot</a>

## INSTALLATION

Add JasonRomanFlotBundle to your `composer.json`

```yaml
{
    "require": {
        "jasonroman/flot-bundle": "1.0.*@dev"
    }
}
```

Register the bundle in ``app/AppKernel.php``

```php
$bundles = array(
    // ...
    new JasonRoman\Bundle\FlotBundle\JasonRomanFlotBundle(),
);
```

## USAGE

```php
// convert to Flot JSON data from PHP arrays
$flotData = $this->container->get('jasonroman.flot')->convert($data);
$flotData = $this->container->get('jasonroman.flot')->convert($data, 'horizontal');
$flotData = $this->container->get('jasonroman.flot')->convert($data, 'vertical', $datetime = true);
$flotData = $this->container->get('jasonroman.flot')->convert($pieData);
```
