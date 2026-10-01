# RoceanBazar Child Theme

A custom WordPress child theme for the **Twenty Twenty-Five (TT5)** block theme, developed for the **RoceanBazar** WooCommerce project.

The purpose of this child theme is to provide a safe and maintainable development layer for customizing the TT5 theme without modifying the parent theme directly.

---

## Project

**RoceanBazar** — A WooCommerce-based online marketplace project.

**Website:** roceanbazar.com

**Development Environment:** Local WordPress / WooCommerce

**Parent Theme:** Twenty Twenty-Five (TT5)

**Child Theme:** RoceanBazar Child

**Platform:** WordPress

**Ecommerce:** WooCommerce

---

## Purpose

The RoceanBazar Child Theme is being developed to:

* Learn and practice WordPress block-theme architecture.
* Understand the relationship between a parent theme and child theme.
* Customize TT5 without modifying its original files.
* Practice WordPress template and template-part customization.
* Work with `theme.json`.
* Develop custom CSS and JavaScript where appropriate.
* Integrate WooCommerce customizations.
* Maintain clean separation between theme functionality and plugin functionality.
* Practice Git/GitHub-based WordPress development.
* Apply software QA and testing practices during development.

This project is also part of the practical development and QA learning work for **RoceanIT**.

---

## Parent Theme

This child theme is based on:

**Twenty Twenty-Five (TT5)**

The parent theme should remain unchanged.

All RoceanBazar-specific theme customizations should be developed in this child theme whenever the customization belongs to the presentation/theme layer.

---

## Child Theme Structure

The initial structure is:

```text
roceanbazar-child/
│
├── style.css
├── functions.php
├── theme.json
├── README.md
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── templates/
│
├── parts/
│
└── languages/
```

The structure may evolve as the project grows.

---

## Main Files

### `style.css`

Contains the child-theme header information and custom CSS.

Example:

```css
/*
Theme Name: RoceanBazar Child
Theme URI: https://roceanbazar.com
Description: Custom child theme for the Twenty Twenty-Five theme used by the RoceanBazar WooCommerce project.
Author: Kazi Harunar Rashid
Author URI: https://roceanit.com
Template: twentytwentyfive
Version: 1.0.0
Text Domain: roceanbazar-child
*/
```

The `Template` value must match the parent theme directory name.

---

### `functions.php`

Contains child-theme PHP functionality such as:

* Loading custom styles.
* Loading JavaScript.
* Registering theme-support functionality where appropriate.
* Adding WordPress hooks and filters.
* Supporting WooCommerce presentation-level customization.

Business logic that belongs to the application/plugin layer should not unnecessarily be placed here.

---

### `theme.json`

Used to configure and customize the block theme's:

* Global styles
* Typography
* Colors
* Spacing
* Layout
* Blocks
* Other supported WordPress theme settings

The child theme will use `theme.json` to learn and implement modern WordPress block-theme customization.

---

## Templates

Custom block templates will be placed under:

```text
templates/
```

Examples may include:

```text
templates/
├── index.html
├── single.html
├── archive.html
├── page.html
└── ...
```

Only templates that require RoceanBazar-specific customization should be overridden.

---

## Template Parts

Reusable block template parts will be placed under:

```text
parts/
```

Examples may include:

```text
parts/
├── header.html
├── footer.html
└── ...
```

---

## Assets

Project-specific assets are organized under:

```text
assets/
```

### CSS

```text
assets/css/
```

Custom CSS files will be maintained here when CSS is not appropriate for `theme.json`.

### JavaScript

```text
assets/js/
```

Custom JavaScript files will be maintained here when JavaScript functionality is required.

### Images

```text
assets/images/
```

Project-specific theme images and other appropriate static image assets may be stored here.

---

## Development Principles

The project follows these principles:

### 1. Do not modify TT5 directly

The parent theme should remain untouched.

### 2. Prefer WordPress-native solutions

Where possible, use:

* Block Editor
* `theme.json`
* Templates
* Template Parts
* WordPress hooks
* WordPress APIs

before introducing unnecessary custom code.

### 3. Keep functionality separate from presentation

Theme code should primarily control presentation and theme behavior.

Application/business functionality should preferably be implemented through plugins.

### 4. Avoid unnecessary overrides

A parent template should only be overridden when the RoceanBazar project actually requires a different implementation.

### 5. Keep the code maintainable

Use:

* meaningful names
* clear folder organization
* WordPress coding conventions
* comments where they improve maintainability

---

## WooCommerce

RoceanBazar uses WooCommerce for ecommerce functionality.

WooCommerce-related customization will be evaluated carefully to determine whether it belongs in:

* the child theme,
* a custom plugin,
* WooCommerce settings,
* or WooCommerce hooks/filters.

Presentation-related WooCommerce customization may be implemented in the child theme.

Business logic and reusable WooCommerce functionality should preferably be implemented in a plugin.

---

## Testing

Testing is performed locally before changes are moved to the production website.

Testing areas include:

* WordPress functionality
* Theme behavior
* Block templates
* Responsive layout
* WooCommerce product pages
* Cart
* Checkout
* Shipping
* Customer account functionality
* Browser compatibility
* JavaScript behavior
* PHP errors
* Console errors
* Regression testing

Automated testing may be introduced as the project develops.

---

## QA Practice

RoceanBazar is also being used as a practical Software QA project.

Testing will include both:

### Functional Testing

* Positive testing
* Negative testing
* Boundary testing
* Validation testing
* Regression testing
* Integration testing

### Technical Testing

* Browser DevTools
* JavaScript console
* Network requests
* Database verification
* PHP debugging
* WordPress debugging
* WooCommerce behavior

Future automation may include:

* Playwright
* Selenium
* API testing

---

## Development Environment

The project is currently developed locally using WordPress and WooCommerce.

Development is performed using:

* WordPress
* WooCommerce
* Twenty Twenty-Five
* RoceanBazar Child Theme
* PHP
* HTML
* CSS
* JavaScript
* MySQL/MariaDB
* Git
* GitHub
* VS Code

---

## Git Repository

The RoceanBazar project is maintained using Git.

**Repository:**

```text
khrashid71/roceanbazar
```

The child theme is maintained as part of the RoceanBazar development project.

---

## Versioning

### Version 1.0.0

Initial RoceanBazar Child Theme.

Initial objectives:

* Establish child-theme structure.
* Use TT5 as the parent theme.
* Establish `style.css`.
* Establish `functions.php`.
* Establish `theme.json`.
* Create organized asset directories.
* Begin TT5 block-theme customization.

Future versions will document significant theme and WooCommerce-related changes.

---

## Roadmap

Planned learning and development areas include:

* [ ] Understand TT5 block-theme architecture
* [ ] Understand child-theme loading
* [ ] Configure `theme.json`
* [ ] Customize global styles
* [ ] Customize templates
* [ ] Customize template parts
* [ ] Customize WooCommerce presentation
* [ ] Add custom CSS
* [ ] Add custom JavaScript
* [ ] Work with WordPress hooks
* [ ] Perform responsive testing
* [ ] Perform regression testing
* [ ] Introduce Playwright automation
* [ ] Integrate QA testing into the development workflow

---

## Author

**Kazi Harunar Rashid**

Senior QA Consultant & WordPress Engineer

**RoceanIT**

Website: https://roceanit.com

---

## Project Philosophy

> Learn the architecture, build the solution, test the behavior, and document the result.

RoceanBazar is being developed not only as an ecommerce website, but also as a practical environment for learning **WordPress architecture, WooCommerce development, software QA, and test automation**.
