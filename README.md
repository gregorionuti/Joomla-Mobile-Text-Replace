# Mobile Text Replace
### Replace text for mobile devices on Joomla websites.

This **Joomla plugin** can **replace a string of text** in the content of a **Joomla website** if it is browsed by a **mobile device**. It works with com_content thus with Joomla articles.

It may be helpful to replace some shortcodes only on mobile devices.

For example, if a website uses [SigPlus](https://hunyadi.info.hu/sigplus/) plugin to generate photo galleries, this plugin can replace the activation tag {gallery} with a proper formatted activation tag which allows a better rendering of the gallery using extra attributes.

![GitHub Release](https://img.shields.io/github/v/release/gregorionuti/Joomla-Mobile-Text-Replace)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/gregorionuti/Joomla-Mobile-Text-Replace/main)
![GitHub License](https://img.shields.io/github/license/gregorionuti/Joomla-Mobile-Text-Replace)
![Static Badge](https://img.shields.io/badge/joomla-cadetblue?label=platform)
![Static Badge](https://img.shields.io/badge/4.0%2B-blue?logo=joomla&logoColor=white&label=joomla)
![Static Badge](https://img.shields.io/badge/plugin-darkviolet?logo=joomla&logoColor=white&label=type)
![Static Badge](https://img.shields.io/badge/7.0%2B%20%7C%208.0%2B-purple?logo=php&logoColor=white&label=php)

---

#### Usage
Example of a plugin shortcode to be replaced:
```
{gallery}
```
Example of a new shortcode which can be printed in place of the other one only on mobile devices:
```
{gallery rows=2 cols=2 preview_width=320 preview_height=240 thumb_crop=yes}
```

---

#### Dependencies
- [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect/tree/2.8.x)

---

#### Links
- :speech_balloon: [Discord server](https://discord.gg/VCtqbgjERH)

---

#### Support
:coffee: Did you find it useful? You might consider buying me a coffee :blush:

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/Z8Z4U0RY9)

Thanks for all the caffeine :coffee: :coffee: :coffee:

---

#### Contributing
Pull requests with bugfixes and implementations are much appreciated. I'll be happy to review them and merge them once they're ready.