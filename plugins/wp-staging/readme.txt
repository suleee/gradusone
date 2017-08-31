=== WP Staging - DB & File Duplicator & Migration  === 

Author URL: https://wordpress.org/plugins/wp-staging
Plugin URL: https://wordpress.org/plugins/wp-staging
Contributors: ReneHermi, WP-Staging
Donate link: https://wordpress.org/plugins/wp-staging
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: staging, duplication, cloning, clone, migration, sandbox, test site, testing, backup, post, admin, administration, duplicate posts
Requires at least: 3.6+
Tested up to: 4.8
Stable tag: 2.1.1

A duplicator plugin! Clone, duplicate and migrate live sites to independent staging and development sites that are available only to administrators.

== Description == 

<strong>This cloning and staging plugin is well tested but work in progress. <br><br>
If you find any issue, please open a [support ticket](https://wp-staging.com/support/ "support ticket").
</strong>
<br /><br />
<strong>Note: </strong> For pushing plugins and theme files to live site, check out [https://wp-staging.com/](https://wp-staging.com/ "WP Staging Pro")
<br /><br />
<blockquote>
<h4> WP Staging for WordPress Migration </h4>
This duplicator plugin allows you to create an staging or development environment in seconds* <br /> <br />
It creates a clone of your website into a subfolder of your main WordPress installation including an entire copy of your database. 
This sounds pretty simple and yes it is! All the hard time-consumptive database and file copying stuff including url replacements is done in the background.
 <br /> <br />
I created this plugin because all other solutions are way too complex, overloaded with dozens of options or having server requirements which are not available on most shared hosting solutions.
All these reasons prevent user from testing new plugins and updates first before installing them on their live website, so its time to release a plugin which has the potential to be merged into everyone´s wordpress workflow.
 <br /><br />
<p><small><em>* Time of creation depends on size of your database and file size</em></small></p>
</blockquote>

WP Staging helps you to prevent your website from being broken or unavailable because of installing untested plugin updates! 

[youtube https://www.youtube.com/watch?v=Ye3fC6cdB3A]

= Main Features =

* <strong>Easy: </strong> Staging migration applicable for everyone. No configuration needed!
* <strong>Fast: </strong> Migration process lasts only a few seconds or minutes, depending on the site's size and server I/O power
* <strong>Safe: </strong> Access to staging site is granted for administrators only.
<br /><br />
<strong>More safe:</strong> 
<br>
* Admin bar reflects that you are working on a staging site
* Extensive logging if duplication and migration process fails.

= What does not work or is not tested when running wordpress migration? =

* Wordpress migration of wordpress multisites (not tested)
* WordPress duplicating process on windows server (not tested but will probably work) 
Edit: Duplication on windows server seems to be working well: [Read more](https://wordpress.org/support/topic/wont-copy-files?replies=5 "Read more") 


<strong>Change your workflow of updating themes and plugins data:</strong>

1. Use WP Staging for migration of a production website to a clone site for staging purposes
2. Customize theme, configuration and plugins or install new plugins
3. Test everything on your staging site first
4. Everything running as expected? You are on the save side for migration of all these modifications to your production site!


<h3> Why should i use a staging website? </h3>

Plugin updates and theme customizations should be tested on a staging platform first. Its recommended to have the staging platform on the same server where the production website is located.
When you run a plugin update or plan to install a new one, it is a necessary task to check first the modifications on a clone of your production website.
This makes sure that any modifications is  working on your website without throwing unexpected errors or preventing your site from loading. (Better known as the wordpress blank page error)

Testing a plugin update before installing it in live environment isn´t done very often by most user because existing staging solutions are too complex and need a lot of time to create a 
up-to-date copy of your website.

Some people are also afraid of installing plugins updates because they follow the rule "never touch a running system" with having in mind that untested updates are increasing the risk of breaking their site.
I totally understand this and i am guilty as well here, but unfortunately this leads to one of the main reasons why WordPress installations are often outdated, not updated at all and unsecure due to this non-update behavior.

<strong> I think its time to change this, so i created "WP Staging" for WordPress migration of staging sites</strong>

<h3> Can´t i just use my local wordpress development copy for testing like xampp / lampp? </h3>

Nope! If your local hardware and software environment is not a 100% exact clone of your production server there is NO guarantee that every aspect 
of your local copy is working on your live website exactely as you would expect it. 
There are some obvious things like differences in the config of php and the server you are running but even such non obvious settings like the amount of ram or the 
the cpu performance can lead to unexpected results on your production website. 
There are dozens of other possible cause of failure which can not be handled well when you are testing your changes on a local staging platform.

This is were WP Staging steps in... Site cloning and staging site creation simplified!

<h3>I just want to migrate the database from one installation to another</h3>
If you want to migrate your local database to a already existing production site you can use a tool like WP Migrate DB.
WP Staging is only for creating a staging site with latest data from your production site. So it goes the opposite way of WP Migrate DB.
Both tools are excellent cooperating eachother.

<h3>What are the benefits compared to a plugin like Duplicator?</h3>
At first, i love the [Duplicator plugin](https://wordpress.org/plugins/duplicator/ "Duplicator plugin"). Duplicator is a great tool for migrating from development site to production one or from production site to development one. 
The downside is that Duplicator needs adjustments, manually interventions and prerequirements for this. Duplicator also needs some skills to be able to create a development / staging site, where WP Staging does not need more than a click from you.
However, Duplicator is best placed to be a tool for first-time creation of your production site. This is something where it is very handy and powerful.

So, if you have created a local or webhosted development site and you need to migrate this site the first time to your production domain than you are doing nothing wrong with using
the Duplicator plugin! If you need all you latest production data like posts, updated plugins, theme data and styles in a testing environment than i recommend to use WP Staging instead!

= I need you feedback =
This plugin has been done in hundreds of hours to work on even the smallest shared webhosting package but i am limited in testing this only on a handful of different server so i need your help:
Please open a [support request](https://wordpress.org/support/plugin/wp-staging/ "support request") and describe your problem exactely. In wp-content/wp-staging/logs you find extended logfiles. Have a look at them and let me know the error-thrown lines.


= Important =

Per default the staging site will have permalinks disabled because the staging site will be cloned into a subfolder and regular permalinks are not working 
without doing changes to your .htaccess or nginx.conf.
In the majority of cases this is abolutely fine for a staging platform and you still will be able to test new plugins and do some theme changes on your staging platform. 
If you need the same permalink stucture on your staging platform as you have in your prodcution website you have to create a custom .htaccess for apache webserver 
or to adjust your nginx.conf.

 
= How to install and setup? =
Install it via the admin dashboard and to 'Plugins', click 'Add New' and search the plugins for 'Staging'. Install the plugin with 'Install Now'.
After installation goto the settings page 'Staging' and do your adjustments there.


== Frequently Asked Questions ==


== Official Site ==
https://wp-staging.com

== Installation ==
1. Download the file "wp-staging" , unzip and place it in your wp-content/plugins/wp-staging folder. You can alternatively upload and install it via the WordPress plugin backend.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Start Plugins->Staging

== Screenshots ==

1. Step 1. Create new WordPress staging site
2. Step 2. Scanning your website for files and database tables
3. Step 3. Wordpress Staging site creation in progress
4. Finish!

== Changelog ==



= 2.1.1 =
* New: Add link to tutorial explaining the process of pushing modification to the live site

= 2.1.0 =
* New: Exclude unneccessary files from cloning process: .tmp, .log, .htaccess, .git, .gitignore, desktop.ini, .DS_Store, .svn
* New: More details for debugging in Tools->System Info
* Fix: Check if tables in staging site exists before attempting to modify them
* Fix: WordPress in sub directories were not opening
* Fix: Nonce check not working if nonce life time is filtered by another plugin WP Bug: https://core.trac.wordpress.org/ticket/41617#comment:1
* Fix: Access to staging site not working, if WP_SITEURL and WP_HOME is defined in wp-config.php 
* Tweak: Exclude wp-content/cache folder from copying process


= 2.0.9 =
* Skip Version

= 2.0.8 =
* Fix: After update from wpstg 1.6.x to 2.x previous settings were not imported resulting in cancelation of cloning process. Still not fixed in 2.0.7

= 2.0.7 =
* Fix: After update from wpstg 1.6.x to 2.x previous settings were not imported resulting in cancelation of cloning process


= 2.0.6 =
* Fix: Cancel Cloning button not working
* Fix: Limit max execution time to a maximum of 30sec to prevent high memory consumption and script timeouts


= 2.0.5 =
* New: Major version - Complete rewrite of the code base
* New: Batch processing allows to clone even huge sites without any timeouts
* New: Preparation for WP QUADS PRO with ability to copy file changes back to live site
* New: Bypass (broken) third party plugins during wp staging related ajax requests to prevent processing errors. Use a mu plugin for this.

= 1.1.6 =
* New: Add download link to WP Staging Beta Version 2.0.1

= 1.1.5 =
* Fix: Admin notice is throwing a false positive write permission error
* New: Move log folder to wp-content/uploads/wp-staging/logs
* New: Tested up to WP 4.7.3

= 1.1.4 =
* Fix: Fatal error Unsupported operand types

= 1.1.3 =
* New: Tested up to wp 4.7.2
* Fix: Arrows in drop down for folder selection are distorted
* Tweak: Show working log as default to make debugging easier

= 1.1.2 = 
* Fix: Settings are not deleted when plugin is removed
* Fix: Staging site is available for non administrators

= 1.1.1 =
* Fix: Change rating url

= 1.1.0 =
* New: Tested up to WP 4.6
* New: Create a poll and ask what feature is most required

= 1.0.9 =
* Fix: Undefined WPSTG() warning
* Fix: Change compatibility version to wp 4.5.3

= 1.0.8 =
* Tested up to WP 4.5.2

= 1.0.7 =
* Fix: Activation hook is not fired and staging site is not working properly
* Performance: Increase default query copy limit to 1000

= 1.0.6 =
* Fix: Uninstalling plugin throwing error
* Fix: Error permission admin notice although permission issues are correct


=  1.0.5 =
* New: Tested up to WP 4.5
* Fix: Download system log not working
* Fix: Click on Optimizer "Select all | none | invert" links leads to jumping
* Tweak: Make clear that unselecting a checkbox will exlude table or file from copy process
* Tweak: Remove unnecessary text
* Tweak: Change beta notice in dashboard. WP Staging is stable
* Tweak: Change twitter handle to @wpstg

= 1.0.3 =
* Fix: Missing const MASHFS_VERSION
* Fix: Remove error "table XY has been created, BUT inserting rows failed."
* Fix: Not tested up to 4.4.2 message shown although it's tested up to WP 4.4.2
* New: Disable either free or pro version and does not allow to have both version enabled at the same time

= 1.0.2 =
* Tweak: Change setting description of uninstall option
* Tweak: Lower tags in readme.txt

= 1.0.1 =
* New: Orange colored admin bar on staging site for better visualization and comparision between production live site and staging site
* Tweak: Remove contact link on multisite notification

= 1.0.0 =
* Fix: Do not follow symlinks during file copy process
* Fix: css error
* Fix: Show "not-compatible" notice only when blog version is higher than plugin tested version.
* Fix: undefined var $size
* Fix: Check if $path is null before writing to remaining_files.json
* Fix: $db_helper undefined message
* Fix: Skip non utf8 encoded files during copying process

Complete changelog: [https://wp-staging.com/changelog.txt](https://wp-staging.com/changelog.txt)

== Upgrade Notice ==

= 2.0.2 =
2.0.2 * New: Batch processing allows to clone even huge sites without any timeouts
