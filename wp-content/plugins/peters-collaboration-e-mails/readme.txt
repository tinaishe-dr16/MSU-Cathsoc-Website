=== Plugin Name ===
Contributors: pkthree
Donate link: http://www.theblog.ca
Tags: collaboration, post, posts, admin, email, editor, author, status
Requires at least: 3.2
Tested up to: 4.8
Stable tag: trunk

This plugin enables automatic e-mails to the relevant users during the collaboration workflow.

== Description ==

Enhance the "Submit for Review" feature for Contributor users. This plugin enables automatic e-mails to the relevant users at the different post status transitions: when posts are pending; when they are approved or scheduled; and when their statuses are changed from "pending" back to "draft".

= Features =

* When a Contributor user submits an article for review: The plugin e-mails a list of approvers of your choice, letting them know that there is a post ready for review, and giving them a link to edit the post.

* When a post is approved: The original Contributor user gets an e-mail saying that their post has been approved and who it was approved by. If the post was directly published, the author is given a link to read the post as the whole world sees it. If the post is scheduled to be published, the author is informed of the time that their post will go live. When the post does go live, the author will get another e-mail informing him / her of that. Similarly, if a post is first marked as "private", the author will be e-mailed if the post is changed to "public".

* Also when a post is approved: the approver user ID is stored as a custom field "approver_user_id"

* When a post's status is changed back to "draft" from "pending": The original Contributor user gets an e-mail saying that their post has been reverted back to a draft, along with a link to edit and re-submit the post.

* When used with [Peter's Post Notes](http://www.theblog.ca/wordpress-post-notes "From Peter's Useful Crap"), users can leave notes to accompany the e-mails for each step in the workflow.

= Translations =

* es\_ES translation by Guillermo Jimeno Espinosa and Luis González Jaime
* it\_IT translation by Massimo Santi
* fr\_FR translation by Romain
* ja translation by Kazuhiro Terada and Hijili Kosugi
* pt\_BR translation by Murillo Ferrari
* ro\_RO translation by Gabriel Berzescu
* pl\_PL translation by Michal Rozmiarek
* de\_DE translation by Rian Klijn of http://www.creditriskmanager.com/
* nl\_NL translation by Rene of http://wpwebshop.com and Dennis Koot
* ru\_RU translation by Doktor Bro of http://doktorbro.net
* tr translation by Can Kaya
* lt\_LT translation by Vincent G of http://www.host1free.com
* ca translation by Aleix of https://www.softcatala.org/
* da\_DK translation by Tom of http://artikelforlaget.dk
* id\_ID translation by Syamsul Alam of http://www.syamsulalam.net/
* cs\_CZ translation by Michal Kuk
* ga translation by Jordan Silaen

= Requirements =

* WordPress 3.2 or higher

== Installation ==

Unzip the peters\_collaboration\_emails folder to your WordPress plugins folder.

Details about the e-mails sent (who the sender should be; whether the contributor should know who approved his/her post; and so on) are configured in the Settings > Collaboration e-mails admin menu. The default settings should be sufficient for most implementations.

Moderator rules are also configured in the Settings > Collaboration e-mails admin menu. Moderators are Administrator or Editor users who should be notified whenever a post is submitted for review. You can create groups of Contributor users and assign different moderators for each group. In other words, different users can be notified based on who wrote a post. You can also assign moderators based on various taxonomies (such as tags, categories, and more) on post, pages, and custom post types. If a Contributor user belongs to multiple groups and/or a post has multiple taxonomy values, all moderators who have been assigned to the relevant groups or who match the post type rules are e-mailed.

== Troubleshooting ==

For version 1.4.0 and lower of the plugin, note that if you are using SMTP to send e-mails, WordPress up to and including version 2.9 has a bug in sending to multiple recipients. A fix is described at http://www.theblog.ca/wordpress-smtp

== Screenshots ==

1. Management page.

== Frequently Asked Questions ==

Please visit the plugin page at http://www.theblog.ca/wordpress-collaboration-emails with any questions.

== Changelog ==

= 2.2.0 =
* 2016-07-27: Replace use of deprecated get_currentuserinfo function. (Thanks Kyle!)

= 2.1.0 =
* 2016-02-12: Do not e-mail private notes -- when used with Peter's Post Notes 1.6.0 and up.

= 2.0.0 =
* 2015-12-06: Optional message to thank the author for their submission. Also: fixed the scheduled post timestamp. (Thanks Luis González Jaime!)

= 1.9.3 =
* 2013-10-07: Minor button styling improvements. (Thanks daymobrew!) Also: support PHP 5 static function calls, bumping WordPress requirement to 3.2+.

= 1.9.2 =
* 2013-03-29: Bug fix: In some cases, custom taxonomies weren't showing up as an e-mail condition option. (Thanks boxcarpress and jswan2!)

= 1.9.1 =
* 2013-01-29: Fix bug from previous release that broke front-end post submissions.

= 1.9.0 =
* 2013-01-23: Allow editing of plugin settings via the WordPress admin interface so that settings persist after upgrades.

= 1.8.2 =
* 2013-01-13: Fix e-mail text about the author of a post if it has been set by another user. (Thanks Alexander!) Allow editors to manage collaboration e-mail settings in WordPress 3.5+ (required capability is now "manage_categories" instead of "manage_links").

= 1.8.1 =
* 2012-10-08: Rewrite function that gets post type moderators to support collaborators with more restricted permissions. (Thanks Harold!)

= 1.8.0 =
* 2012-10-05: Added approver_user_id custom field upon pending-to-publish and pending-to-future transitions. (Thanks Chris Andrews!)

= 1.7.1 =
* 2012-10-03: Minor fixes for translations. (Thanks Hijili Kosugi!)

= 1.7.0 =
* 2012-09-22: Added e-mails at the "private-to-published" transition (enabled by default), and if a post is edited AND commented using the Peter's Post Notes plugin by another user (thanks Erik!) (disabled by default).

= 1.6.2 =
* 2011-09-22: Minor code edit for WordPress 3.3 compatibility.

= 1.6.1 =
* 2011-08-13: Minor code cleanup to remove unnecessary error notices.

= 1.6.0 =
* 2011-06-19: Added settings to disable any of the e-mails.

= 1.5.0 =
* 2010-11-27: Support for custom post types and taxonomies

= 1.4.0 =
* 2010-09-02: Added ability to specify contributor and moderator roles for sites with custom roles and capabilities

= 1.3.5 =
* 2010-04-25: E-mails are now all encoded in UTF-8

= 1.3.4 =
* 2010-01-11: Plugin now removes its database tables when it is uninstalled, instead of when it is deactivated. This prevents the collaboration rules from being deleted when upgrading WordPress automatically.

= 1.3.3 =
* 2009-09-22: Maintenance release to remove unnecessary code calls and increase security.

= 1.3.2 =
* 2009-06-27: Minor fixes for translations.

= 1.3.1 =
* 2009-06-19: Updated for WordPress 2.8 so that the approver doesn't get an e-mail if they simply save an already pending post.

= 1.3.0 =
* 2009-02-16: Added e-mails at the "pending-to-future" and "future-to-publish" transitions.

= 1.2.2 =
* 2009-02-06: Backwards translation support for WordPress 2.5

= 1.2.1 =
* 2009-01-03: Added .po and .mo files for translators.

= 1.2.0 =
* 2008-12-10: Added another e-mail trigger: when a pending post's status is changed back to a draft. Also added interoperability with Peter's Post Notes (for WordPress 2.7 and up; http://www.theblog.ca/wordpress-post-notes) so that users can leave descriptive notes at each step in the workflow.

= 1.1.0 =
* 2008-09-18: You can specify moderators per category. This update also includes several bug fixes to the management page functionality.

= 1.0.1 =
* 2008-08-07: Database table names no longer use a fixed prefix. They now use whatever your WordPress installation uses ("wp\_" by default).

= 1.0.0 =
* 2008-07-22: You can specify moderators per user. This is managed in the Settings section of the WordPress admin interface.

= 0.2.0 =
* 2007-11-11: You can specify a name and e-mail address for the sender of all collaboration e-mails or have the sender information default to the user performing the action. You can also toggle whether the post author should be told which user approved their post.

= 0.1.0 =
* 2007-10-31: You can e-mail multiple moderators when a post is submitted for review. Also, the author is e-mailed when one of their posts is approved.