---
title: Versions
permalink: build.html
---
# This site was built at {{ 'now' | date: "%d-%m-%Y %H:%M" }}

## This build was made with:

### Theme:
{% assign theme_info = site.data.build.theme_info | split: " " %}

{% for item in theme_info %}
{{ item }}
{% endfor %}

### Jekyll:

{% assign plugins = site.data.build.jekyll_info | split: " " %}

{% for plugs in plugins %}
{{ plugs }}
{% endfor %}
