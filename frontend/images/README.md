# Donour Hub - Image Assets

This folder contains all image assets for the Donour Hub blood donation management system.

## Folder Structure

```
images/
├── logo/              # Logo files in various formats
├── hero/              # Hero section images
├── icons/             # Icon files (if not using SVG inline)
├── blood-types/       # Blood type related graphics
├── testimonials/      # User testimonials photos
├── partners/          # Partner organization logos
└── misc/              # Miscellaneous images
```

## Recommended Images for Donour Hub

### 1. **Logo** (Required)
- **File**: `logo/donour-hub-logo.png`
- **Sizes**: 512x512px (main), 192x192px (favicon), 64x64px (small)
- **Description**: Blood drop icon with "Lifeline" or "Donour Hub" text
- **Usage**: Navbar, footer, favicon

### 2. **Hero Section Images**
- **File**: `hero/hero-bg.jpg` or `hero/hero-banner.png`
- **Size**: 1920x1080px (full HD)
- **Description**: Blood donation scene, hospital environment, or abstract medical imagery
- **Alternative**: Use gradient backgrounds (already implemented in CSS)

### 3. **Blood Type Icons**
- **Files**: `blood-types/a-positive.svg`, `blood-types/o-negative.svg`, etc.
- **Size**: 100x100px
- **Description**: Visual representation of each blood type

### 4. **Feature Icons**
- **File**: `icons/real-time-tracking.png`
- **Size**: 64x64px
- **Description**: Icons for features (location, donor, hospital, request)

### 5. **Testimonials/Donor Photos**
- **Files**: `testimonials/donor-1.jpg`, `testimonials/donor-2.jpg`
- **Size**: 300x300px (square, profile style)
- **Description**: Photos of satisfied donors and recipients

### 6. **Partner Logos**
- **Files**: `partners/apollo-hospital.png`, `partners/fortis.png`
- **Size**: Variable, maintain aspect ratio
- **Description**: Logos of partner hospitals

## Free Image Resources

### Stock Photo Websites (Free)
1. **Unsplash** - https://unsplash.com/
   - Search: "blood donation", "medical", "hospital", "healthcare"
   
2. **Pexels** - https://www.pexels.com/
   - Search: "blood donation", "medical professionals", "healthcare"
   
3. **Pixabay** - https://pixabay.com/
   - Search: "blood", "donation", "medical", "health"

### Icon Resources (Free)
1. **Flaticon** - https://www.flaticon.com/
   - Search: "blood drop", "hospital", "medical", "location"
   
2. **Icons8** - https://icons8.com/
   - Search: "healthcare", "blood", "medical"
   
3. **Font Awesome** - https://fontawesome.com/
   - Already using inline SVG, but can download PNG versions

### Logo Creation Tools
1. **Canva** - https://www.canva.com/ (Free tier)
2. **LogoMakr** - https://logomakr.com/
3. **Hatchful by Shopify** - https://www.shopify.com/tools/logo-maker

## Image Specifications

### Format Guidelines
- **Logos**: PNG (transparent background) or SVG
- **Photos**: JPG (optimized, 80-90% quality)
- **Icons**: SVG (preferred) or PNG
- **Backgrounds**: JPG or WebP

### Optimization
- Use tools like TinyPNG (https://tinypng.com/) to compress images
- Keep file sizes under 200KB for faster loading
- Use WebP format for modern browsers

### Color Scheme (from existing CSS)
- **Primary**: Rose (#f43f5e, #fb7185, #e11d48)
- **Gray**: (#f9fafb, #374151, #111827)
- **Emerald**: (#d1fae5, #047857)

## How to Use Images in HTML

### Example 1: Logo in Navbar
```html
<div class="brand">
  <img src="images/logo/donour-hub-logo.png" alt="Donour Hub Logo" width="32" height="32">
  Lifeline
</div>
```

### Example 2: Hero Section Background
```html
<section class="hero" style="background-image: url('images/hero/hero-bg.jpg');">
  <!-- Hero content -->
</section>
```

### Example 3: Feature Icons
```html
<div class="icon">
  <img src="images/icons/real-time-tracking.png" alt="Real-time Tracking" width="48" height="48">
</div>
```

## Placeholder Images

For development purposes, you can use placeholder services:
- **Placeholder.com**: https://placeholder.com/
- **Lorem Picsum**: https://picsum.photos/

Example:
```html
<img src="https://via.placeholder.com/300x200/f43f5e/ffffff?text=Blood+Donation" alt="Placeholder">
```

## Image Naming Convention

- Use lowercase letters
- Separate words with hyphens
- Be descriptive
- Examples: `hero-banner.jpg`, `blood-type-o-negative.svg`, `hospital-partner-logo.png`

## Next Steps

1. Create logo for Donour Hub
2. Download stock photos from Unsplash/Pexels
3. Optimize all images before uploading
4. Update `index.html` to reference image paths
5. Test responsive images on different screen sizes

---

**Note**: All images should be properly licensed for commercial use. Always check the license before using images in your project.
