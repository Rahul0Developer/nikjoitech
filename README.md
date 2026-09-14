# Nikoji Technologies Website
## Deployment Guide

---

### Folder Structure

```
nikoji/
├── index.php           ← Homepage
├── automation.php      ← Automation page
├── design.php          ← Design page
├── testing.php         ← Testing page
├── ems.php             ← EMS page
├── innovation.php      ← Innovation page
├── consultancy.php     ← Consultancy page
├── services.php        ← All Services page
├── contact.php         ← Contact form (PHP)
├── newsletter.php      ← Newsletter handler (PHP)
├── admin.php           ← Admin panel (PHP)
├── .htaccess           ← Security & caching rules
├── inc/
│   ├── navbar.php      ← Shared navigation
│   └── footer.php      ← Shared footer
├── assets/
│   ├── css/main.css    ← Main stylesheet
│   ├── js/main.js      ← Main JavaScript
│   ├── images/
│   │   └── logo.jpg    ← Nikoji logo
│   └── uploads/
│       ├── pdfs/       ← Admin-uploaded PDFs
│       └── images/     ← Admin-uploaded images
└── data/
    ├── .htaccess       ← Blocks direct web access to data
    ├── contacts.json   ← Contact form submissions (auto-created)
    ├── contacts.csv    ← CSV export (auto-created)
    ├── newsletter.json ← Newsletter subscribers (auto-created)
    └── newsletter.csv  ← CSV export (auto-created)
```

---

### Upload Instructions (cPanel Shared Hosting)

1. **Upload all files** to `public_html/` via cPanel File Manager or FTP
2. **Set permissions**:
   - `data/` folder: `755`
   - `assets/uploads/` folder: `755`
   - All `.php` files: `644`
   - `.htaccess`: `644`
3. **Enable Free SSL** in cPanel → Let's Encrypt
4. The `data/` folder and JSON files are created automatically on first form submission

---

### Admin Panel

- **URL**: Hover over the copyright text in the footer for 1.5 seconds
- **Username**: `nikojitech@Ram`
- **Password**: `nikojitech@2025`
- **Direct URL**: `yourdomain.com/admin.php`

---

### Contact Details

- Email: rahul@nikojitechnologies.com
- Phone: +91 7678334459
- Address: H-108 Dharampura, Najafgarh Roshanpura Colony, New Delhi-110043

---

### Requirements

- PHP 7.4+ (PHP 8.x recommended)
- Apache with mod_rewrite enabled
- No npm, no build tools, no database required
- Works on any cPanel shared hosting plan

---

### Performance Notes

- All images should be compressed before upload (use TinyPNG or Squoosh)
- SVG animations are inline — no external dependencies
- Google Fonts load from CDN (one request)
- No JavaScript frameworks used — pure vanilla JS
