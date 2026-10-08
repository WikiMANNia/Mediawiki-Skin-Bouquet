# MediaWiki Bouquet

Die Pflege dieses Forks des MediaWiki-Skins [Bouquet](https://www.mediawiki.org/wiki/Skin:Bouquet/de) wird von WikiMANNia verwaltet.

The maintenance of this fork of the MediaWiki skin [Bouquet](https://www.mediawiki.org/wiki/Skin:Bouquet) is managed by WikiMANNia.

El mantenimiento de esta bifurcación del tema de MediaWiki [Bouquet](https://www.mediawiki.org/wiki/Skin:Bouquet/es) está gestionado por WikiMANNia.

## Description

Der Skin Bouquet unterstützt Themen, siehe dazu Erweiterung [Theme](https://www.mediawiki.org/wiki/Extension:Theme/de).

The Bouquet skin supports themes; see the [Theme](https://www.mediawiki.org/wiki/Extension:Theme) extension for details.

El tema Bouquet admite temas; consulta la extensión de [Temas](https://www.mediawiki.org/wiki/Extension:Theme/es) para obtener más información.

Aktuell sind das die Themen:

Currently, the themes are:

Actualmente, los temas disponibles son:
* ´forgetmenot´
* ´pinkdogwood´
* ´tigerlily´

## Compatibility

This skin has been tested with MediaWiki versions `1.39.17`, `1.43.9`, `1.45.4`, and `1.47.0-alpha`.

The skin is expected to work with MediaWiki 1.36–1.38, but these versions are not currently tested.

## Version history

Version 1.4.1 - Oct 31, 2020
- Remove $wgMemc, bump skin version + minimum required MW version (was 1.32+, now 1.34+)

- Mar 25, 2021
-- Delete old, nowadays unused Special:Preferences CSS
-- Special:Preferences has been OOUI-based since MW 1.33 at least, at which point classes and IDs were shuffled around and thus these selectors here no longer match anything.
-- Additionally we require MW 1.34 or newer anyway in skin.json.

- Apr 5, 2021
-- Ditch the Skin::setupSkinUserCss method(), require MW 1.35+
-- Bug: T266735

Version 2.0.0 - Sep 16, 2022
- Upgrade for 1.39
- Remove output of HEAD tag
- Remove SkinTemplate class and use skin registration
- Use ResourceLoaderSkinModule
- Fix parameter order in parseMessage
- Bug: T269626
- Bug: T306942

- Feb 2, 2024
-- skin: Update class name for SkinModule, renamed in MW 1.39

- Mar 18, 2025
-- Common classes are namespaced and the class aliases were removed in fcbb75b8a4 (MediaWiki 1.44)
-- Fixing usage of aliases added in MediaWiki 1.40

- Aug 16, 2025
-- Remove "i18n-all-lists-margins" and "interface-message-box" features to avoid deprecation notice, require MW 1.43+

Version 2.1.0 - Oct 7, 2026

- Add namespace
- Add file ´Compat.php´
- Add backward compatibility to REL1_36
- Migrated ´skin.json´ from manifest version 1 to manifest version 2.
