=== BeatGig WordPress Plugin ===
Contributors: BeatGig
Tags: calendar,calendars,event,events calendar,event calendar,online calendar,google calendar,google calender,calendar localization, schedule,webinar calendar,show calendar, agenda,whatson,whatson calendar,what's on,whats on,ics feed,icalendar,upcoming events calendar,shortcode, wp calendar, calendar plugin, calendar widget,interactive calendar, editorial calendar, recurring events,recurring,customizable calendar, ajax calendar, hosted calendar, calender, picture calendar, attractive calendar, beautiful calendar, tickets, date, dates, widget, meeting, workshop, webinar, upcoming, maps
Requires at least: 3.1
Tested up to: 6.3.0
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

BeatGig's event calendar is a modern, beautiful calendar that embeds directly onto your website. When you book new shows on BeatGig, your website calendar will instantly update on its own.

This plugin lets you embed 2 different items onto your website:

1. An auto-sync'd venue calendar
2. An artist application button

== Description ==

[BeatGig](https://BeatGig.com) BeatGig's event calendar is a modern, beautiful calendar that embeds directly onto your website. It looks great on computers & phones alike. All you need is an account on [BeatGig](https://beatgig.com) to get started.

The BeatGig WordPress plugin provides a WordPress shortcode that helps you get your calendar embedded in minutes.

Usage of this plugin is 100% free when you are a BeatGig user.

== Installation ==

This plugin lets you add a BeatGig venue calendar to your WordPress site. Before you can embed a calendar, you'll need to [sign up](https://beatgig.com) for BeatGig as a buyer, and then [create a venue](https://beatgig.com/dashboard/venues).
You can get one from the [BeatGig Website](https://BeatGig.com).

The easiest way to install the BeatGig plugin is to log in to your WordPress dashboard, go to Plugins -> Add New,
search for BeatGig, and click to install. You can also download the zip file from this page and upload it
from the Plugins -> Add New -> Upload page.

Once you've clicked install, wait for the spinner to finish loading. It might take a minute.

After it's done, make sure you click the "Active" button. If the "Active" button is gray, that means it worked.

Now that you have activated your plugin, there is one simple step.

All you need to do is paste the BeatGig short code onto your WordPress page. The shortcode looks like this: `[beatgig embed="venue-calendar" venue-slug="YOUR-VENUE-SLUG"]`
You should replace the `YOUR-VENUE-SLUG` text with your venue's unique slug. 

_To find your venue's slug, open your [BeatGig venues](https://beatgig.com/dashboard/venues), click "View" on the one you want to add, and copy your slug from the URL you see at the top of your browser._

For example, if your venue's URL is `beatgig.com/venues/potbellys`, then your venue slug is **potbellys**.

Your final WordPress shortcode would look like this: `[beatgig embed="venue-calendar" venue-slug="potbellys"]`
If you are embedding the artist application button, use this script instead, where it's `embed="apply-button"`: `[beatgig embed="apply-button" venue-slug="YOUR-VENUE-SLUG"]`

It's that easy!

----

If your website is hosted on WordPress.com, and you are using the page editor, you'll need to do this:

1) Click the plus sign to add a new block on your page.
2) Search for "short code" and click it when it comes up
3) Enter your venue's short code from the steps above.

== Support ==

1. See our [website](https://beatgig.com)
2. Feel free to reach out at <support@beatgig.com>. If you need an instant response, live chat on our [website](https://beatgig.com) by clicking the chat icon in the bottom right.

== Changelog ==

In `0.2`, we added the ability to embed an artist application button on your website: `[beatgig embed="venue-calendar" venue-slug="potbellys"]`
It will show a button anywhere on your website, and it will match your brand's colors – just like our calendar.