![scayle-logo-cr](https://cdn-prod.scayle.com/public/media/general/SCAYLE-Commerce-Engine-header.png)

<h1 align="center">
  SCAYLE Storefront API Java SDK
</h1>

<h4 align="center">
  <a href="https://new.scayle.dev">Documentation</a> |
  <a href="https://www.scayle.com/">Website</a>
</h4>

<p align="center">
  The SCAYLE <strong>Storefront API Java SDK</strong> streamlines interactions with Storefront REST APIs.
</p>
<p align="center">
  <a href="#"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="SCAYLE's **Storefront API PHP SDK is released under the MIT license." /></a>
</p>

## Getting Started

Visit the [Quickstart Guide](https://new.scayle.dev/en/developer-guide/introduction/apis#sdk-setup) to set up the Storefront API PHP SDK

Visit the [Docs](https://new.scayle.dev) to learn more about our system requirements.

## Installation
```PHP
# Install the PHP library with Composer
`composer require scayle/storefront-api`

# Initialise SDK
use Scayle\StorefrontApi\StorefrontClient;

$client = new StorefrontClient([
  'apiUrl' => 'https://{{tenant-space}}.storefront.api.scayle.cloud/v1/',
  'shopId' => 1001,
  'auth' => [
    'type' => 'token',
    'token' => '{{Access-Token}}',
  ],
]);
```
## What is Scayle ?

[SCAYLE](https://scayle.com) is a full-featured e-commerce software solution that comes with flexible APIs. Within SCAYLE, you can manage all aspects of your shop, such as products, stocks, customers, and transactions.

Learn more about Scayles’s architecture and commerce modules in the [Docs] (https://new.scayle.dev/en/user-guide).



##  Community

The community and core teams are available in [GitHub](https://github.com/scayle/), where you can ask for support, discuss roadmap, and share ideas.

## Other channels

- [GitHub Issues](https://github.com/scayle/storefront-api-java-sdk/issues)
- [LinkedIn](https://www.linkedin.com/company/scaylecommerce/)
- [Jobs](https://careers.smartrecruiters.com/ABOUTYOUGmbH/scayle)
- [AboutYou Tech Blog](https://aboutyou.tech/)

## License
Licensed under the [MIT](https://opensource.org/license/mit/)
