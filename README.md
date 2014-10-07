## MySystemMessages
MySystemMessages is an extension to MediaWiki that allows to add wiki specific system messages.


### Rationale
This extension is useful if you have multiple wiki instances which share the same content structure for, e.g. templates. It makes it easier to deploy translations to these wiki instances by avoiding individual message setup on every instance. Additionally farming is easier since the system messages may easily be deployed to all wiki instances.


### Installation
(1) Obtain the code from [GitHub](https://github.com/kghbln/MySystemMessages)  
(2) Extract the files in a directory called ``MySystemMessages`` in your ``extensions/`` folder.  
(3) Add the following code at the bottom of your "LocalSettings.php" file:  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;``require_once "$IP/extensions/MySystemMessages/MySystemMessages.php";``  
(4) Go to "Special:Version" on your wiki to verify that the extension is successfully installed.  
(5) Done.


### Updating
When updating this extension make sure that you back up the files located in the ``i18n/`` folder before moving in the new code or alternatively do not update the files situated in the ``i18n/`` folder. If you forget to do this all changes to the files located in the ``i18n/`` folder will be lost.


### Configuration
To add wiki specific system messages you will have to take the follwing steps:  
(1) Go to the "en.json" file located in the ``i18n/`` folder of this extension.  
(2) Add your system message to the file, e.g.

*before*
``` json
{
	"@metadata": {
		"authors": [
			"Kghbln"
		]
	},
	"mysystemmessages-desc": "Allows for custom system messages",
	"mysm-mockup": "This is a mockup message string to demonstrate this extension's functionality."
}
```
*after*
``` json
{
	"@metadata": {
		"authors": [
			"Kghbln",
			"My (user)name"
		]
	},
	"mysystemmessages-desc": "Allows for custom system messages",
	"mysm-mockup": "This is a mockup message string to demonstrate this extension's functionality.",
	"mysm-mymessage": "This is a message string I added myself."
}
```
**Notes:**
- Make sure that you always choose a destinct identifier for the system message. It is strongly suggested that all messages start with "``mysm-``" as the message prefix followed by the "``message-name``" thus resulting in "``mysm-message-name``".
- Make sure that every line containing a system message ends with a comma, except for the last line.
- Adding your (user)name into the metadata array for authors is optional. If you choose to do so, make sure that every line ends with a comma, except for the last line.

(3) Validate this file with e.g. [JSON Formatter](http://jsonformatter.curiousconcept.com/) to make sure that the json syntax is correct.  
(4) Go to the e.g. "de.json" file located in the ``i18n/`` folder of this extension.  
(5) Add the same system message to the file, e.g.  

*before*
``` json
{
	"@metadata": {
		"authors": [
			"Kghbln"
		]
	},
	"mysystemmessages-desc": "Ermöglicht wikispezifische Systemnachrichten",
	"mysm-mockup": "Dies ist eine Attrappennachricht, um die Funktionalität dieser Erweiterung darstellen zu können."
}
```
*after*
``` json
{
	"@metadata": {
		"authors": [
			"Kghbln",
			"My (user)name"
		]
	},
	"mysystemmessages-desc": "Ermöglicht wikispezifische Systemnachrichten",
	"mysm-mockup": "Dies ist eine Attrappennachricht, um die Funktionalität dieser Erweiterung darstellen zu können.",
	"mysm-mymessage": "Dies ist eine Systemnachricht, die ich selbst hinzugefügt habe."
}
```
(6) Validate this file with e.g. [JSON Formatter](http://jsonformatter.curiousconcept.com/) to make sure that the json syntaxis correct.  
(7) Do the same for all languages you want to provide, e.g. "es", "fr", it, etc. You might have to initially create those files if they are not yet available.  
(8) Move the json files to the ``i18n/`` folder of this extension.  
(9) Done.


### Usage

To add a system message to a page you will use the "int" parser function provided by core MediaWiki, i.e. ``{{int:message identifier}}``, e.g. ``{{int:mysm-mymessage}}``. Thus the message will be shown in the language the user selected in her or his preferences. If a message is not available in the internationalized version for a specific language the English version will be shown.
