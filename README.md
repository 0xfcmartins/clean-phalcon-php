# Phalcon PHP

These are examples of [MVC][mvc-pattern] file structures you can employ using Phalcon >= 3.0.x

## Simple-Volt

This is a very simple [MVC][mvc-pattern] structure, it contains one model, two controllers and a view.
This example does not implement namespaces. Services are defined in `public/index.php`
without using `Di\FactoryDefault`. This example uses Volt as template engine:

```
Phacon-php/
├── app
│   ├── config
│   │   └── config.php
│   ├── controllers
│   │   ├── BaseController.php
│   │   └── IndexController.php
│   ├── services
│   │   ├── core
│   │   │   ├── ApplicationLoader.php
│   │   │   └── DependencyInjector.php
│   │   └── ServicesManager.php
│   └── views
│       ├── index
│       │   └── index.volt
│       ├── partials
│       │   ├── footer.volt
│       │   └── head.volt
│       └── base.volt
└── public
    └── index.php
```

## License

Phalcon MVC Examples is open source software licensed under the New BSD License.
See the LICENSE.txt file for more. <br>
Copyright (c) 2011-2016, Phalcon Framework Team

[devtools]: https://github.com/phalcon/phalcon-devtools
[mvc-pattern]: https://en.wikipedia.org/wiki/Model–view–controller
