# Custom Docker Image for WordPress with WP-CLI

This Docker image provides a custom WordPress environment with the latest WordPress version and the WP-CLI (WordPress Command-Line Interface) tool.

## Features

- Based on the official WordPress Docker image
- Custom `wp-config.php` file to read configuration from environment variables
- WP-CLI tool for managing and interacting with WordPress via command-line commands

## Environment Variables

```
USE_WP_REDIS=0
WP_REDIS_PORT="6379"
WP_REDIS_HOST=""
WP_REDIS_PASSWORD=""
USE_AWS_CDN=0
AWS_CDN_Isactive=""
WP_HOME="https://example.com"
WP_SITEURL="https://example.com"
DB_NAME="dbname"
DB_USER="dbuser"
DB_PASSWORD="dbpassword"
DB_HOST="dbhost"
AUTH_KEY=" V ^>Nv*example"
SECURE_AUTH_KEY=" V ^>Nv*example"
LOGGED_IN_KEY=" V ^>Nv*example"
NONCE_KEY=" V ^>Nv*example"
AUTH_SALT=" V ^>Nv*example"
SECURE_AUTH_SALT="t V ^>Nv*example"
LOGGED_IN_SALT=" V ^>Nv*example"
NONCE_SALT=" V ^>Nv*example"
TABLE_PREFIX="wp_"
WP_DEBUG=0
WP_ENVIRONMENT_TYPE="production"
WP_ALLOW_REPAIR=1
FORCE_SSL_ADMIN=1
DISALLOW_FILE_EDIT=0
EMPTY_TRASH_DAYS=30
WP_CACHE=1
WP_MAX_MEMORY_LIMIT="2048M"
WP_MEMORY_LIMIT="1024M"
USE_FORWARD_PROXY=1
```

## License

This Docker image is licensed under the [MIT License](LICENSE). Feel free to use it for your personal or commercial projects.

## Want to connect?

Feel free to contact me on [Twitter](https://twitter.com/OnlineAnto), [DEV Community](https://dev.to/antoonline/) or [LinkedIn](https://www.linkedin.com/in/anto-online) if you have any questions or suggestions.

Or just visit my [website](https://anto.online) to see what I do.
