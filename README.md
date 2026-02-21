# Section Fieldtype

A visual section header fieldtype for Statamic. Adds a labeled separator to split fields in your blueprints — purely a UI element, stores no data.

## Requirements

- Statamic 6+

## Installation

```bash
composer require netforma/section-fieldtype
```

## Usage

Add a **Section** field to your blueprint. It renders as a bold header bar to visually group and separate fields in the publish form.

## Development

Requires Docker. The addon builds independently using containerized Composer and Node:

```bash
# Install dependencies + build assets
make build

# Start Vite dev server with HMR
make dev

# Install dependencies only
make install
```

Dependencies are cached — `make build` skips install if `composer.json` and `package.json` haven't changed.
