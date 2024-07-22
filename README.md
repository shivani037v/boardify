# Boardify

Boardify is a custom Drupal 10 module for creating and managing community notices.

## Installation

### Step 1: Download the Module

Clone or download the Boardify module and place it in the `modules/custom` directory of your Drupal installation.

```sh
cd modules/custom
git clone https://github.com/shivani037v/boardify.git
```

### Step 2: Enable the Module

#### Via Drupal Admin Interface
1. Go to **Extend**.
2. Find "Boardify" in the list.
3. Check the box next to it.
4. Click **Install**.

#### Via Drush
```sh
drush en boardify -y
```

### Step 3: Clear Caches

#### Via Drupal Admin Interface
1. Go to **Configuration > Performance**.
2. Click **Clear all caches**.

#### Via Drush
```sh
drush cr
```

### Step 4: Create the Notice Content Type

1. Go to **Structure > Content types > Add content type**.
2. Name it "Notice".
3. Add fields such as Title, Body, and any other relevant fields.
4. Save the content type.

## Usage

### Create a Notice

1. Go to **Content > Add content**.
2. Select **Notice**.
3. Fill in the required fields (e.g., Title, Body).
4. Save the notice.

### View Community Notices

Navigate to `/community-notices` on your site to view the list of community notices.

Example URL: `http://your-drupal-site/community-notices`

## Troubleshooting

- **404 Error**: Ensure the module is enabled and clear Drupal cache.
- **Access Issues**: Verify permissions for accessing content.

## Contributing

Contributions are welcome! Please open an issue or create a pull request for any improvements or bug fixes.
