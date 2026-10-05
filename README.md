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
mornrain-terminal/         # MornRain Terminal 主题根目录：暗色终端风
|-- .github/               # GitHub 仓库配置目录
|   `-- workflows/         # GitHub Actions 工作流目录
|       `-- build.yml      # CI 工作流：在 PHP 8.1–8.3 上 lint、跑 PHPUnit 并打包 ZIP 构件
|-- assets/                # 前端静态资源目录
|   |-- css/               # 样式资源目录
|   |   `-- main.css       # 主样式：GitHub 暗色令牌、全站等宽字体与代码块高亮
|   `-- js/                # 脚本资源目录
|       `-- main.js        # 渐进增强脚本：移动端菜单开合、宽表格滚动与标题闪烁光标
|-- tests/                 # PHPUnit 测试目录
|   |-- ScaffoldTest.php   # 脚手架冒烟测试：断言 README、LICENSE、composer.json 与入口文件存在
|   `-- bootstrap.php      # PHPUnit 引导文件：存在时才加载 Composer 自动加载器
|-- 404.php                # 404 模板：命令行式未找到提示与搜索表单
|-- archive.php            # 归档模板：归档文章的等宽列表
|-- composer.json          # Composer 元数据与 lint/test 脚本
|-- footer.php             # 页脚模板：页脚菜单与版权信息
|-- functions.php          # 主题初始化：导航菜单、缩略图、编辑器样式与资源挂载
|-- header.php             # 头部模板：head 元信息、站点品牌区与主导航
|-- index.php              # 首页模板：代码博客文章列表
|-- LICENSE                # GPL-2.0-or-later 许可证全文
|-- page.php               # 独立页面模板：页面标题与正文
|-- phpunit.xml.dist       # PHPUnit 配置，扫描 tests 目录
|-- README.md              # 主题说明文档
|-- search.php             # 搜索结果模板：检索词标题与结果列表
|-- single.php             # 单篇文章模板：标题、元信息、特色图与正文
`-- style.css              # 主题头信息与基础样式，定义暗色终端基调
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
