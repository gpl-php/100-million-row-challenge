Your goal is to parse a data set of page visits into a JSON file.

## Setup

```sh
composer install
php tempest data:generate
```

Next, implement your solution in `app/DataParseCommand.php`. You can always run the parse command to check your work:

```sh
php tempest data:parse
```

Finally, before uploading your solution, make sure it validates:

```sh
php tempest data:validate
```

## Output formatting rules

The output file should contain the following:

- Each entry should be a key-value pair with the page's URL path as the key and the number of visits per day as the value
- Visits should be sorted by date in ascending order
- The output should be encoded as a pretty JSON string