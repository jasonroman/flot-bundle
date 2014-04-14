Jason Roman's Flot Bundle
==============

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
// Use the service
$flotData = $this->container->get('jasonroman.flot')->convert($data);
$flotData = $this->container->get('jasonroman.flot')->convert($data, 'horizontal');
$flotData = $this->container->get('jasonroman.flot')->convert($data, 'vertical', $datetime = true);
$flotData = $this->container->get('jasonroman.flot')->convert($pieData);

```
