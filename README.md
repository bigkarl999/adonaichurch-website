# Adonai Pentecostal Church Website

Custom responsive website for Adonai Pentecostal Church, Hobart, Tasmania.

## Architecture
Designed specifically for ordinary Linux shared hosting such as Crazy Domains Economy. There is no Node.js runtime and no build step required.

- Frontend: HTML, CSS, vanilla JavaScript
- Backend: PHP
- Database: MySQL
- Gallery uploads: local hosting storage under `uploads/gallery/`
- Admin: `/admin/`

## Crazy Domains deployment
1. Upload the repository contents into the domain's public web root (normally `public_html`) using cPanel File Manager, FTP, Git tooling if available, or an automated deployment workflow.
2. Create a MySQL database and database user in cPanel.
3. Import `database.sql` with phpMyAdmin.
4. Copy `config.example.php` to `config.php` on the server.
5. Add the MySQL host/database/user/password to `config.php`.
6. Generate a secure PHP password hash for the gallery administrator and paste it into `admin_password_hash`.
7. Ensure PHP can write to `uploads/gallery/` (normally directory permissions 755/775 depending on the host configuration).
8. Visit `/admin/`, sign in, and upload a test gallery photo.
9. Test the contact form. PHP `mail()` depends on the hosting mail configuration; if Crazy Domains restricts it, configure authenticated SMTP in a later deployment step.

## Security
`config.php` is ignored by Git and must never be committed because it contains database credentials and the admin password hash. Gallery uploads are validated for MIME type and limited to JPG, PNG and WebP up to 8 MB.

## Content
The site includes Home, About, Ministries, Services & Events, Gallery, Contact, custom 404, contact handler, gallery API, MySQL schema, and gallery admin panel.

## Before launch
Replace temporary visual placeholders with approved church photographs and the final church logo asset, confirm the exact venue/street address if the church wants it public, add official social links, configure the production domain, and complete final accessibility/SEO/browser testing.
