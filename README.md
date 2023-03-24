# Lead Tracker plugin

Lead tracking system for October CMS.

## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.LeadTracker
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.LeadTracker
```

## Using components

This plugin provides 1 component — `Tracker`. Component have no forms and default markup but it provide convenient functions to work with data. Forms and markup must be added by themes.

### Tracker component

This component allows frontend to submit lead forms with any information to backend.

Basic usage example:

```Twig
[Tracker]
==
<form data-request="Tracker::onSubmitLeadForm">
	<input type="text" name="name">
	<input type="text" name="phone">
	<input type="text" name="email">
	<input type="text" name="info:comment">
	<button>Submit</button>
</form>
```

This component provides 1 function — `onSubmitLeadForm`. `onSubmitLeadForm` saves lead from form by using Data Attributes API. For the function to save form data form inputs names should be one of the predetermined types:

- "name" for name
- "phone" for phone
- "email" for email
- "info:*" for any other input

With form data `onSubmitLeadForm` function detects and saves user IP, User-Agent and source URL with form.
