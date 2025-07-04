 <footer id="site-footer" role="contentinfo">

        <div class="footer-bg">

            <div class="footer-inner container-xl">


                <div class="footer-bottom">

                    <div class="footer-credits">

                        <p class="footer-copyright">Copyright &copy;2025 Amourly. All rights reserved.
                        </p>
                        <!-- .footer-copyright -->

                    </div>
                    <!-- .footer-credits -->

                </div>
                <!-- .footer-bottom  -->

            </div>
            <!-- .footer-inner -->

        </div>

    </footer>
    <!-- #site-footer -->

    <script type="speculationrules">
        {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/amourly\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch,
        .no-prefetch a"}}]},"eagerness":"conservative"}]}
    </script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script src="https://amourly.peerduck.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script src="https://amourly.peerduck.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.3" id="swv-js"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/amourly.peerduck.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.3" id="contact-form-7-js"></script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5" id="swiper-js"></script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/king-addons/includes/widgets/Feature_List/script.js?ver=24.12.79" id="king-addons-feature-list-script-js"></script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.27.2" id="elementor-webpack-runtime-js"></script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.27.2" id="elementor-frontend-modules-js"></script>
    <script src="https://amourly.peerduck.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.27.2",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "e_swiper_latest": true,
                "e_onboarding": true,
                "home_screen": true,
                "landing-pages": true,
                "editor_v2": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "https:\/\/amourly.peerduck.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/amourly.peerduck.com\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/amourly.peerduck.com\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "3033f51943"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 26755,
                "title": "Fairytale%20Weddings%20%E2%80%93%20Amourly",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.27.2" id="elementor-frontend-js"></script>
    <script src="https://amourly.peerduck.com/wp-content/plugins/king-addons/includes/extensions/Popup_Builder/popup-module.js?ver=24.12.79" id="king-addons-popup-builder-popup-module-script-js"></script>

</body>

</html>