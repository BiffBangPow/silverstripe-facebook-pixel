# Facebook Pixel Module

This adds easy controls for adding the embed code for the Facebook Pixel.

## Setup

Install with Composer

`composer require biffbangpow/silverstripe-facebook-pixel`

Add the Facebook Pixel template to your main Page.ss template just before the closing `<head>` tag

`<% include FacebookPixel %>`

## Usage

In SiteConfig there will be a "FacebookPixelID" field where the numeric ID for your Facebook Pixel can be entered, this is a 15-digit number.

If a Facebook Pixel ID has been entered in Site Config then the Facebook Pixel embed code will be outputted on every page.

Each page also has the option to select an event from the list here "https://www.facebook.com/business/help/402791146561655".

If an event has been selected then the code to track the event will also be outputted on the page.

### Todo

Implement remaining events
