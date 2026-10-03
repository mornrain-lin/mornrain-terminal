---
AIGC:
    Label: "1"
    ContentProducer: 001191440300708461136T1XGW3
    ProduceID: cf93d2ba4252e3fc820ac383cb09c649_789dc56abe7a11f18019525400248c00
    ReservedCode1: P4ctop7rTySuYegUK84cvBzV0CkyU3gi/JmyiYALq99dJEhIQa2S2iZ82GbL8ANnhcl3hBNX/zXZq8/mR4oBZmVPHhfW4qfLScsU66BSGICTCzGeYMk/2SmHCvW7itUzqQ+qFr6foYWT+nHR75OkF9+AZCzYY95tnTDKhiu/DVWQezMkvLD7RkOWqUw=
    ContentPropagator: 001191440300708461136T1XGW3
    PropagateID: cf93d2ba4252e3fc820ac383cb09c649_789dc56abe7a11f18019525400248c00
    ReservedCode2: P4ctop7rTySuYegUK84cvBzV0CkyU3gi/JmyiYALq99dJEhIQa2S2iZ82GbL8ANnhcl3hBNX/zXZq8/mR4oBZmVPHhfW4qfLScsU66BSGICTCzGeYMk/2SmHCvW7itUzqQ+qFr6foYWT+nHR75OkF9+AZCzYY95tnTDKhiu/DVWQezMkvLD7RkOWqUw=
---

# MornRain Terminal

> A dark, monospace, terminal-inspired theme for developer blogs.

`MornRain Terminal` is a standalone WordPress theme by **MornRain**. It ships as pure
code with **zero third-party runtime dependencies**, loads **no external CDN**
assets, contacts **no remote service** and creates **no extra database tables**.

| Item | Value |
| --- | --- |
| License | GNU General Public License v2 or later |
| Minimum WordPress | 6.0 |
| Minimum PHP | 8.0 |
| Text domain | `mornrain-terminal` |
| Function prefix | `mornrain_terminal` |

---

## Table of contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [File structure](#file-structure)
6. [Development and quality checks](#development-and-quality-checks)
7. [Frequently asked questions](#frequently-asked-questions)
8. [Changelog](#changelog)
9. [License](#license)

---

## Features

- GitHub-dark inspired palette with a green terminal accent.
- Monospace typography for every element, including headings and meta lines.
- Blinking caret after the site title for an authentic prompt feel.
- Dedicated code block styling with a tab-like header bar and horizontal scroll.
- High-contrast inline code, keyboard keys and block quotes.
- Responsive layout that keeps code readable on narrow screens.
- Zero JavaScript dependencies beyond the bundled progressive-enhancement file.

---

## Requirements

| Component | Minimum | Recommended |
| --- | --- | --- |
| WordPress | 6.0 | 6.6 or newer |
| PHP | 8.0 | 8.3 |
| MySQL | 5.7 | 8.0 |
| MariaDB | 10.3 | 10.11 |

---

## Installation

### Option A - Upload a ZIP archive (recommended)

1. Download or clone this repository.
2. Compress the `mornrain-terminal` folder itself into `mornrain-terminal.zip`. The archive must
   contain the theme folder, not the repository root.
3. In WordPress go to **Appearance > Themes > Add New > Upload Theme**.
4. Choose `mornrain-terminal.zip`, click **Install Now**, then **Activate**.

### Option B - Copy the folder over FTP / SSH

1. Copy the whole `mornrain-terminal` folder into `wp-content/themes/`.
2. Go to **Appearance > Themes** and activate `MornRain Terminal`.

### Option C - Git clone (developer workflow)

```bash
cd wp-content/themes
git clone https://github.com/mornrain-lin/mornrain-terminal.git
```

---

## Configuration

| What | Where | Notes |
| --- | --- | --- |
| Primary menu | Appearance > Menus | Assign a menu to the **Primary Menu** location. |
| Footer menu | Appearance > Menus | Assign a menu to the **Footer Menu** location. |
| Custom logo | Appearance > Customize > Site Identity | Optional; falls back to the site title. |
| Site title and tagline | Settings > General | Rendered in the header and footer. |
| Widgets | - | This theme registers no widget areas by design. |
| Reading settings | Settings > Reading | Feed length and front page behaviour follow core settings. |

The theme stores nothing beyond standard WordPress theme mods. Switching away
from it leaves no residue behind.

---

## File structure

```text
mornrain-terminal/
|-- .github/
|   `-- workflows/
|       `-- build.yml
|-- assets/
|   |-- css/
|   |   `-- main.css
|   `-- js/
|       `-- main.js
|-- tests/
|   |-- ScaffoldTest.php
|   `-- bootstrap.php
|-- 404.php
|-- archive.php
|-- composer.json
|-- footer.php
|-- functions.php
|-- header.php
|-- index.php
|-- LICENSE
|-- page.php
|-- phpunit.xml.dist
|-- README.md
|-- search.php
|-- single.php
`-- style.css

```

---

## Development and quality checks

```bash
composer install
composer validate
composer lint   # runs php -l over every PHP file
composer test   # runs PHPUnit
```

Coding style follows the
[WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/):
tab indentation, Yoda conditions, prefixed global functions (`mornrain_terminal*`),
nonces and capability checks where relevant, and escaped output everywhere.

Continuous integration lives in `.github/workflows/build.yml`. It runs on every
push and pull request across PHP 8.1, 8.2 and 8.3: `composer install`,
`php -l` linting, PHPUnit, and finally packages a release ZIP as a build
artifact.

---

## Frequently asked questions

### Which syntax highlighter is bundled?

None. The theme styles plain `<pre><code>` blocks. If you want token colouring,
pair it with any syntax highlighter plugin; the theme's styles will not conflict.

### Why is everything monospace?

That is the point of the theme: a uniform terminal aesthetic. You can override
`font-family` from a child theme if you prefer a mixed stack.

### Does the dark palette meet contrast guidelines?

Yes. Body text on the background is well above the WCAG AA 4.5:1 ratio, and the
green accent is reserved for links and headings.

### Can I use it for a documentation site?

It works well for that, though it is optimised for a chronological blog with
code-heavy posts.

### Is there a light mode?

No. The theme is intentionally dark-only, but the CSS custom properties in
`assets/css/main.css` make it straightforward to add your own light variant.

---

## Changelog

### 1.0.0

- Initial public release.

---

## License

Released under the **GNU General Public License v2 or later**.

```text
This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.
```

See [LICENSE](LICENSE) for the full text.
*（内容由AI生成，仅供参考）*
