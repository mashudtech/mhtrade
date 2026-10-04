# MH Trade Capital Solutions — Phase 1 Development Scope & Requirement Specification

**Project Name:** MH Trade Capital Solutions — B2B Trade & Finance Platform  
**Phase:** Phase 1 (Core MVP & Scalable Web Application)  
**Budget Allocation:** ৳30,000 BDT  
**Technology Stack:** Laravel (Backend) + Bootstrap 5 / Vue.js (Frontend) + MySQL (Database)  
**Document Status:** Approved Scope for Phase 1 Implementation  

---

## 1. Executive Summary & Purpose

The objective of Phase 1 is to build a modern, scalable, high-converting B2B web application for **MH Trade Capital Solutions** (Dubai-based B2B Trade Finance, Commodity Sourcing, Project Finance, and UAE Business & Banking firm).

This document clearly outlines the exact features, functional requirements, and architecture to be delivered in **Phase 1 (MVP)** for **৳30,000 BDT**, while maintaining a flexible, modular database and codebase structure that will seamlessly support **Phase 2 enterprise features** (CRM, Supplier Portal, Advanced Analytics) without code re-writes.

---

## 2. Core Architecture & Design Directives

### 2.1 Visual Design & Brand Aesthetics
* **Theme & Style:** Modern, luxury, international B2B corporate financial aesthetic representing Dubai’s global trade network.
* **Color Palette & Theme:**
  1. **Golden Accent (`#D4AF37` / `#E5C158`):** Luxury metallic accents, highlights, key buttons, icons, and call-to-actions representing financial prestige.
  2. **Dark Blue (`#0A192F` / `#0F172A`):** Deep corporate navy/blue for main headers, backgrounds, and primary brand identity representing global trust and financial security.
  3. **White / Black Neutrals (`#FFFFFF` / `#000000` / `#F8F9FA`):** High-contrast text, crisp light/dark card surfaces, clean form elements, and maximum readability.
* **Brand Logo Assets:**
  - **Primary Transparent PNG:** `MH-website-logo-package/MH-logo-transparent.png` (Used for header, footer & brand displays; features dark blue 'M', metallic gold 'H', and golden arc).
  - **WebP Version:** `MH-website-logo-package/MH-logo-transparent.webp` (Optimized transparent web asset).
  - **Square Icon / Favicon:** `MH-website-logo-package/MH-logo-icon-512.png` (512x512 canvas for browser favicon and app icons).
* **Layout:** Clean typography, structured information layout, responsive across all devices (Desktop, Tablet, Mobile).
* **Framework:** Bootstrap 5 with Vue.js micro-interactions (or Blade + Vue components).

### 2.2 Client UI Reference Benchmarks & Hybrid Design Strategy
* **Client Reference Sites:**
  1. **Plaid (`https://plaid.com/en-gb/`):** Benchmarked for ultra-clean Fintech UI minimalism, modern micro-interactions, high-converting interactive form components, and institutional financial credibility (applied to Trade Finance & Central Inquiry Engine).
  2. **N. Mohammad Group (`https://nmohammadgroup.com/`):** Benchmarked for multi-vertical conglomerate navigation, sticky topbar contact shortcuts, structured category showcase grids, and corporate identity layout (applied to Business Verticals, Commodity Listings & Corporate UAE presence).
* **Hybrid UX Execution Strategy:**
  - Combine **Plaid’s sleek fintech elegance & dynamic form UX** with **N Mohammad Group’s clear multi-vertical navigation & corporate authority**.
  - **Color Palette Application:** Golden Accent (`#D4AF37`), Dark Navy Blue (`#0A192F`), and crisp White/Black contrasts.

### 2.3 Non-Negotiable Year Independence Rule
* **Rule:** No public-facing dates, establishment year, founding year, copyright year, or year/month embedded in public Request IDs or public content.
* **Backend:** System timestamps (`created_at`, `updated_at`) will be safely preserved in the database for audit and internal status management only.

---

## 3. Phase 1 Detailed Scope Breakdown

### Module 1: Public Frontend & Verticals (User Experience)

1. **Homepage:**
   - Hero Section highlighting Dubai to Global Trade connections.
   - Interactive "What does your business need?" quick inquiry widget.
   - Core 4 Business Verticals overview cards.
   - "How It Works" step-by-step process flow.
   - "Why MH" trust points and Direct Requirement CTA.

2. **Core 4 Business Verticals & Dedicated Catalog Pages:**
   - **Trade Finance:** Pages/Listings for LC, DLC, UPAS, Usance LC, SBLC, Bank Guarantee (BG), POF.
   - **Commodity Sourcing:** Listings for Energy, Petroleum, Agriculture, Metals, B2B product requirements.
   - **Project Finance:** Dedicated section for Infrastructure, Energy, and Real Estate project funding opportunities.
   - **UAE Business & Banking:** UAE Corporate Bank account setup, business formation, commercial services.
   - **International Trade:** Dedicated B2B trade opportunities listing section.

3. **Informational & Contact Pages:**
   - **About Us & Dubai Identity**
   - **How It Works / Required Documents guide**
   - **Frequently Asked Questions (FAQs)**
   - **Contact Us & Requirement Submission Page**

---

### Module 2: Central Requirement Engine & Dynamic Forms

1. **Central Ingestion Widget ("What Are You Looking For?"):**
   - Dynamic dropdown/selector triggering vertical-specific form fields.
   - Responsive multi-step inquiry form powered by Vue.js / Vanilla JS.

2. **Non-Date Unique Request ID Generator:**
   - System automatically generates a clean, unique Request ID upon submission (No Year/Month/Date).
   - **Format Examples:**
     - Trade Finance LC: `MH-LC-00001`
     - SBLC: `MH-SBLC-00001`
     - Commodity: `MH-COM-00001`
     - UAE Banking: `MH-BANK-00001`
     - Project Finance: `MH-PROJ-00001`
     - General Request: `MH-REQ-00001`

3. **Request Form Fields & Validations:**
   - Requester Info: Full Name, Company Name, Position, Email, Phone/WhatsApp, Country.
   - Requirement Info: Service/Commodity type, target amount/quantity, bank/origin/destination preferences, specifications.
   - Private Document Attachment (File/PDF upload capability).

4. **Notifications:**
   - Automated email notification sent to Admin upon new request submission.
   - Instant web confirmation screen with assigned Request ID for the client.

---

### Module 3: Admin Panel & Content Management System (CMS)

1. **Request Management System (Backend CRM Lite):**
   - **Request Table View:** Filter requests by Status, Service Type, Request ID, or Client Name.
   - **Request Detail View:** Inspect client inputs, downloaded attached documents, and client info.
   - **Status Lifecycle Workflow:** Update request status through stages:  
     `New` ➔ `In Review` ➔ `Information Required` ➔ `Processing` ➔ `Completed` ➔ `Closed`.
   - **Internal Notes:** Admin can log internal operational notes for each request.

2. **Full Dynamic CMS (Content CRUD):**
   - **Company & Contact Settings:** Admin can update Phone numbers, WhatsApp link, Business Email, Office Location, and Social Media links (LinkedIn, Facebook, etc.) without developer intervention.
   - **Services & Catalog Management:** Admin can Add, Edit, Publish, Unpublish, or Archive:
     - Banking Instruments / Trade Finance services
     - Commodity & Product listings
     - Project Finance opportunities
     - UAE Business & Banking packages
   - **FAQ & Information Management:** Admin can edit FAQs and legal disclaimers.

3. **Role-Based Authentication (RBAC Lite):**
   - **Super Admin:** Full platform access.
   - **Operations / Manager:** Access to view requests, update statuses, and edit CMS content.

---

### Module 4: Scalable Database & Security Architecture

1. **Database Design (Laravel / MySQL):**
   - Clean relational schema (`users`, `categories`, `services`, `requests`, `request_documents`, `request_logs`, `cms_settings`).
   - Modular table structure pre-designed to support Phase 2 Client Master Records and Supplier tables.

2. **Security & Data Protection:**
   - Secure Authentication & Session Management.
   - CSRF & XSS protection via Laravel core security features.
   - Secure private storage directory for client uploaded documents (non-publicly browseable).

---

## 4. Phase 2 Deferred Scope (Out of Scope for Phase 1)

The following features are explicitly deferred to **Phase 2** (additional milestone/budget):

| Feature Category | Phase 2 Scope (Deferred for Later Expansion) |
| :--- | :--- |
| **Form Builder** | Complex drag-and-drop visual dynamic form builder in Admin. |
| **Client Master Record** | Single unified Client Profile Sheet aggregating multi-year requests into one timeline. |
| **Supplier Portal** | Supplier registration, onboarding dashboard, and supplier verification matrix. |
| **Banking Database** | Internal matrix database of partner bank capabilities and terms. |
| **Analytics & Reporting** | Graphical analytics dashboard, automated daily/weekly PDF & XLSX export engine. |
| **Granular RBAC** | 6+ specialized sub-roles (Compliance, Sourcing Specialist, BD Manager, etc.). |
| **Multilingual Engine** | Arabic/French front-end language switcher UI. |

---

## 5. Phase 1 Acceptance Criteria & Deliverables

1. **Fully Functional Public Web App:** Responsive, fast-loading, ultra-premium B2B design.
2. **Working Central Request Engine:** Generates clean non-date Request IDs (`MH-XXXX-00001`) and delivers inquiries to Admin & Email.
3. **Working Admin Panel & CMS:** Full ability to manage incoming inquiries and edit all business content, services, commodities, contact info, and FAQs.
4. **Clean Code & Database:** Laravel + Bootstrap/Vue codebase delivered with clear installation instructions and scalable database schema.

---

**Prepared by:** Development Team  
**Accepted for Phase 1 Execution by:** Client / MH Trade Capital Solutions  
**Date:** September 2026  
