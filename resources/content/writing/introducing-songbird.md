---
extends: 'schema/post'
title: 'Introducing Songbird'
summary: 'An extremely brief and incomprehensible introduction.'
cover: 'bench.jpeg'
tags: ['Open source', 'PHP']
published: '2014-03-07'
---

## Table of contents

1. [Introduction](#)
2. [Directory structure](#directory-structure)
3. [Adding content](#adding-content)

------

## Introduction

Songbird is a very simple site generator written in PHP. It is inspired by PicoCMS and OctoberCMS.

-----

## Directory structure

A default Songbird application will have a setup similar to this:

```
app/
  etc/
  lib/
  resources/
  vendor/
  web/
```

Let's take a look at each folder.

### `etc`

This is where you will keep site specific configuration files, including `app.yaml` and `vars.yaml`. In these files you are able to define template variables and change the theme of the site.

### `lib` (optional)

This is home to your domain specific code. All files here should utlise PSR-4 namespacing to take advantage of Composer autoloading.

### `resources` (optional)

This is the content folder. If you are using the default local filesystem adapter you will keep your pages here. If you are using Dropbox you can probably remove this folder.

### `vendor`

This is where you dependencies live, including the core of Songbird.

### `web`

This is the web root. The front controller lives here (`index.php`). Your theme files and assets are here too.


------

## Adding content

There are two kinds of content in a basic Songbird app, `documents` and `fragments`.

### Documents

Documents are your pages, posts, articles and etc.

To add a page to your site all you need to do is create an `md` file in the content folder. As an example, let's create a file at `app/resources/documents/my-page.md` and add the following text.

```
---
title: 'My Page'
template: 'page'
type: 'page'
---

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto illum in iure iusto labore, non provident saepe voluptates? Alias asperiores cum fugiat ipsa molestiae neque optio quos reiciendis repellendus.
```

Now if you browse to `http://your-site.com/my-page` you will see your new page has been rendered.

### Fragments

Fragments are partial documents you can include in templates and other documents. A navigation menu serves as a good example.

```
---
description: 'This is the main navigation menu for my site'
---

* [Home](/)
* [About](/about)
* [Contact](/contact)
```

Fragments are especially useful for when you want to grant editorial access to template elements.