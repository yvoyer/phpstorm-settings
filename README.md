This is my custom configuration for PHPStorm, so that all my environments are setup the same.

Feel free to fork, to add your own settings.

Install
=======

*Note:* Make sure `default-jdk` is installed on the system: `sudo apt-get install default-jdk`

* Clone the project: `git clone http://github.com/yvoyer/phpstorm-settings`
* Execute the `./compile-settings.sh`: It will generate a `settings.jar` file with the configured settings
* Import the generated settings in your PHPStorm (**File->Import Settings...**), by selecting the `settings.jar` at the root of the project.

**Optional**: You might want to put your Author information in the `fileTemplates/includes/Author.php`, so that your files contains your information.

Current configurations affected
-------------------------------

IDE settings (Global)

* Files And Code Templates
  * Arguments of construct will be put on multiple lines when number of args is greater equlas than 4.
  * Getter will add PHP7 type hints, when the attribute is typed.
  * When generating a method needed by an interface, a `throw new \RuntimeException()` is added, forcing you to implement it.
  * Generate a PHPUnit test comes with a pending test method that automatically fail.
  * Attribute starting with `_` will generate arguments without the `_`.

* File Types
* Editor
