# doctrine-postgres-milliseconds-platform

| Branch    | PHP                                         |
|-----------|---------------------------------------------|
| `master`  | [![PHP][build-status-master-php]][actions]  |

## Usage

### Installation

```bash
composer require oskarstark/doctrine-postgres-milliseconds-platform
```

### Setup
```yaml
# config/packages/doctrine.yaml

doctrine:
    dbal:
        # We want to store DateTime objects with milliseconds
        # The solution is built on https://github.com/doctrine/dbal/issues/2873#issuecomment-701052412
        # but instead of using microseconds we use milliseconds
        platform_service: Datana\Doctrine\PostgreSQL\Platform\Doctrine\DBAL\Platforms\PostgreSQLMillisecondsPlatform
```

[build-status-master-php]: https://github.com/oskarstark/doctrine-postgres-milliseconds-platform/workflows/PHP/badge.svg?branch=master
[actions]: https://github.com/oskarstark/doctrine-postgres-milliseconds-platform/actions
