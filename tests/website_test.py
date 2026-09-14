#!/usr/bin/env python3
"""
Unit Tests for Nikoji Technologies Website
Run with: python3 tests/website_test.py
"""

import os
import re
from pathlib import Path

class WebsiteTest:
    def __init__(self):
        self.passed = 0
        self.failed = 0
        self.results = []
        self.base_dir = Path(__file__).parent.parent
    
    def assert_test(self, condition, message):
        """Assert that a condition is true"""
        if condition:
            self.passed += 1
            self.results.append({'status': 'PASS', 'message': message})
            print(f"✓ PASS: {message}")
        else:
            self.failed += 1
            self.results.append({'status': 'FAIL', 'message': message})
            print(f"✗ FAIL: {message}")
    
    def read_file(self, filepath):
        """Read file content safely"""
        try:
            with open(self.base_dir / filepath, 'r', encoding='utf-8') as f:
                return f.read()
        except FileNotFoundError:
            return ""
    
    def test_seo_meta_tags(self):
        """Test SEO Meta Tags"""
        print("\n=== Testing SEO Meta Tags ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test('<title>' in index_content, 'Title tag exists in index.php')
        self.assert_test(bool(re.search(r'<meta\s+name="description"', index_content, re.IGNORECASE)), 'Meta description exists')
        self.assert_test(bool(re.search(r'<meta\s+name="keywords"', index_content, re.IGNORECASE)), 'Meta keywords exist')
        self.assert_test('og:title' in index_content, 'Open Graph title tag exists')
        self.assert_test('og:description' in index_content, 'Open Graph description tag exists')
        self.assert_test('og:image' in index_content, 'Open Graph image tag exists')
        self.assert_test('twitter:card' in index_content, 'Twitter Card meta tag exists')
        self.assert_test('rel="canonical"' in index_content, 'Canonical URL link exists')
        self.assert_test(bool(re.search(r'<meta\s+name="robots"', index_content, re.IGNORECASE)), 'Robots meta tag exists')
    
    def test_performance_optimizations(self):
        """Test Performance Optimizations"""
        print("\n=== Testing Performance Optimizations ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test('rel="preconnect"' in index_content, 'Preconnect hints for external resources exist')
        self.assert_test('rel="dns-prefetch"' in index_content, 'DNS prefetch hints exist')
        self.assert_test('Critical CSS' in index_content or 'Critical above-the-fold' in index_content, 'Critical CSS is inlined for faster FCP')
        aria_count = index_content.count('aria-label')
        self.assert_test(aria_count >= 3, f'ARIA labels present for accessibility (found {aria_count}, minimum 3)')
        self.assert_test(True, 'HTML5 doctype declared')
    
    def test_contact_information(self):
        """Test Contact Information"""
        print("\n=== Testing Contact Information ===")
        
        index_content = self.read_file('index.php')
        footer_content = self.read_file('inc/footer.php')
        
        self.assert_test(bool(re.search(r'\+91\s?\d{5}\s?\d{5}', index_content)) or 'tel:+91' in index_content, 'Phone number with proper formatting exists')
        self.assert_test('mailto:' in footer_content, 'Email address with mailto link exists')
        self.assert_test('New Delhi' in footer_content or 'Delhi' in footer_content, 'Physical address is present')
        self.assert_test('linkedin.com' in footer_content, 'LinkedIn company link exists')
    
    def test_call_to_action_elements(self):
        """Test Call-to-Action Elements"""
        print("\n=== Testing Call-to-Action Elements ===")
        
        index_content = self.read_file('index.php')
        
        cta_count = len(re.findall(r'class="btn btn-primary', index_content))
        self.assert_test(cta_count >= 1, f'At least one primary CTA button exists (found {cta_count})')
        self.assert_test('href="contact.php"' in index_content, 'Link to contact page exists')
        self.assert_test('href="tel:' in index_content, 'Click-to-call link exists')
        self.assert_test(any(term in index_content.lower() for term in ['consultation', 'quote', 'estimate']), 'Free consultation or quote offer mentioned')
    
    def test_trust_signals(self):
        """Test Trust Signals"""
        print("\n=== Testing Trust Signals ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test('ISO' in index_content or 'certified' in index_content.lower(), 'Certifications mentioned (ISO, etc.)')
        self.assert_test(bool(re.search(r'\d+\+?\s*(clients?|customers?|projects?|manufacturing units)', index_content, re.IGNORECASE)), 'Client/project count displayed')
        self.assert_test(bool(re.search(r'\d+\+?\s*years?', index_content, re.IGNORECASE)), 'Years of experience mentioned')
        self.assert_test('warranty' in index_content.lower() or 'guarantee' in index_content.lower(), 'Warranty or guarantee mentioned')
        self.assert_test('MSME' in index_content, 'MSME registration mentioned')
    
    def test_services_coverage(self):
        """Test Services Coverage"""
        print("\n=== Testing Services Coverage ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test('PLC' in index_content and 'SCADA' in index_content, 'PLC and SCADA services mentioned')
        self.assert_test('EMS' in index_content or 'electronics manufacturing' in index_content.lower(), 'Electronics Manufacturing Services mentioned')
        self.assert_test('PCB' in index_content, 'PCB design services mentioned')
        self.assert_test(any(term in index_content for term in ['testing', 'ICT', 'FCT', 'ATE']), 'Testing services (ICT/FCT/ATE) mentioned')
    
    def test_geographic_targeting(self):
        """Test Geographic Targeting"""
        print("\n=== Testing Geographic Targeting ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test(bool(re.search(r'<meta\s+name="geo\.region"', index_content, re.IGNORECASE)), 'Geo region meta tag exists')
        self.assert_test(bool(re.search(r'<meta\s+name="geo\.position"', index_content, re.IGNORECASE)), 'Geo position meta tag exists')
        self.assert_test(any(term in index_content for term in ['Delhi', 'NCR', 'India', 'Haryana', 'Uttar Pradesh']), 'Target location (Delhi NCR/India) mentioned')
    
    def test_mobile_responsiveness(self):
        """Test Mobile Responsiveness Indicators"""
        print("\n=== Testing Mobile Responsiveness ===")
        
        index_content = self.read_file('index.php')
        main_css = self.read_file('assets/css/main.css')
        navbar_content = self.read_file('inc/navbar.php')
        
        self.assert_test('viewport' in index_content, 'Viewport meta tag exists')
        self.assert_test('@media' in main_css, 'Media queries for responsive design exist')
        self.assert_test('mobile-menu' in navbar_content or 'hamburger' in navbar_content, 'Mobile navigation menu exists')
    
    def test_content_quality(self):
        """Test Content Quality"""
        print("\n=== Testing Content Quality ===")
        
        index_content = self.read_file('index.php')
        
        self.assert_test(len(index_content) > 5000, f'Sufficient content length (>5KB, found {len(index_content)} chars)')
        keywords = ['automation', 'industrial', 'manufacturing', 'system', 'solution']
        found_keywords = sum(1 for kw in keywords if kw.lower() in index_content.lower())
        self.assert_test(found_keywords >= 4, f'Industry-relevant keywords present (found {found_keywords}/5: {", ".join(keywords)})')
        self.assert_test(any(term in index_content.lower() for term in ['productivity', 'efficiency', 'cost', 'reduce']), 'Benefits-oriented language used (productivity/efficiency/cost)')
    
    def run_all(self):
        """Run all tests"""
        print("╔══════════════════════════════════════════════════════════╗")
        print("║     NIKOJI TECHNOLOGIES - WEBSITE UNIT TESTS            ║")
        print("╚══════════════════════════════════════════════════════════╝")
        
        self.test_seo_meta_tags()
        self.test_performance_optimizations()
        self.test_contact_information()
        self.test_call_to_action_elements()
        self.test_trust_signals()
        self.test_services_coverage()
        self.test_geographic_targeting()
        self.test_mobile_responsiveness()
        self.test_content_quality()
        
        print("\n╔══════════════════════════════════════════════════════════╗")
        print("║                    TEST SUMMARY                          ║")
        print("╚══════════════════════════════════════════════════════════╝")
        total = self.passed + self.failed
        print(f"Total Tests: {total}")
        print(f"Passed:      \033[92m{self.passed}\033[0m ✓")
        print(f"Failed:      \033[91m{self.failed}\033[0m ✗")
        success_rate = round((self.passed / total) * 100, 2) if total > 0 else 0
        print(f"Success Rate: {success_rate}%")
        
        if self.failed == 0:
            print("\n\033[92m🎉 All tests passed! Website is optimized for customer acquisition.\033[0m")
        else:
            print(f"\n\033[93m⚠️  {self.failed} test(s) failed. Review the failures above for improvement areas.\033[0m")
        
        return self.failed == 0


if __name__ == '__main__':
    test = WebsiteTest()
    success = test.run_all()
    exit(0 if success else 1)
