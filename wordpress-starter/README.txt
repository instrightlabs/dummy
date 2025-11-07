SwarajSecurity WordPress Package
=================================

Contents:
- swarajsecurity-theme/           : A lightweight starter WordPress theme (place into wp-content/themes/)
- swarajsecurity-pages-export.xml : Minimal WXR export (Tools > Import > WordPress)
- swarajsecurity-jsonld.json      : JSON-LD LocalBusiness snippet to place into header or via plugin
- README.txt                      : This file
- Assets: hero.jpg, team images (inside theme assets)

Recommended plugins (install via Plugins > Add New):
- Contact Form 7 (for the pre-inserted shortcodes)
- Yoast SEO or Rank Math
- UpdraftPlus (backups)
- Wordfence Security
- WP Mail SMTP (for reliable form email)
- ShortPixel or Smush (image optimization)
- Really Simple SSL (if needed)
- Google Site Kit (Analytics & Search Console)

Quick install steps:
1. Install WordPress on your hosting (https://wordpress.org/download/)
2. Upload the theme folder "swarajsecurity-theme" to wp-content/themes/
3. In WP Admin -> Appearance -> Themes, activate "SwarajSecurity Theme"
4. Install and activate Contact Form 7 (or WPForms). Create a form and replace the [contact-form-7 id="123"] shortcode ID with your form's ID.
5. Import pages: Tools -> Import -> WordPress -> upload swarajsecurity-pages-export.xml
6. Create menus (Appearance -> Menus) or use the default links in the header.
7. Go to Appearance -> Customize -> Additional CSS to paste or edit CSS if needed.
8. Replace placeholder phone/email/logo in footer.php and JSON-LD file.
9. Add Google Maps embed code into the Contact page template or via the page editor.
10. Configure WP Mail SMTP to ensure form emails are delivered.
11. Test forms on desktop and mobile.

Notes & customizing:
- The theme is intentionally minimal. Use it as a starter or child theme for a more advanced theme (GeneratePress/Astra/Kadence).
- For drag & drop design use Elementor; create a homepage and assign the "Home Landing" template if you want to use the included template.
- Replace placeholder images in swarajsecurity-theme/assets/ with your real imagery (logo.svg, hero.jpg, team images).
- Important: Update contact details, license numbers, and legal pages (Privacy Policy) before launch.

If you'd like, I can:
- Generate a Contact Form 7 form markup to import.
- Produce a zip containing a plugin-ready contact form configuration.
- Create a simple child theme for GeneratePress or Astra instead.

