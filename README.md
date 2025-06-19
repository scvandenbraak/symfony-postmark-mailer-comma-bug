# Postmark Transport Bug: Comma in name not escaped

## Install
Clone this repository and run `composer install`

## Show comma is not being escaped
```
$ php bin/console postmark-name-comma-not-escaped
```

## Optional: Testing with Postmark 
1. Uncomment lines 30-36 in `src/Command/PostmarkNameCommaNotEscaped.php`.
2. Fill in your own from and to email addresses.
3. Create a .env.local with a MAILER_DSN containing your Postmark Server Token.
4. Run the command `php bin/console postmark-name-comma-not-escaped`
