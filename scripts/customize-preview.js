/* global jQuery, _, wp, kkcp */
/* jshint unused: false */

(function (window, $, wp, api) {
  'use strict';

  var wpApi = wp.customize;

  var $body = $('body');
  var $previewsContainer = $('.previews');
  var $toScroll = $('html, body');

  /**
   * jQuery utility to highlight the just changed setting
   * @type {Array}
   */
  $.fn.flash = function (duration) {

    this.parent().prependTo($previewsContainer);

    this.addClass('flash');
    setTimeout(function () {
      this.removeClass('flash');
    }.bind(this), 300);

    var offset = this.offset();
    if (!offset) {
      return this;
    }
    // @@doubt, scroll or not in preview \\
    $toScroll.animate({
      scrollTop: offset.top -120
    }, 300);

    return this;
  };

  /**
   * Settings to preview as colors
   *
   * @type {Array}
   */
  var settingsToColor = [
    // Customize Plus controls
    'color',
    'color-no-transparent',
    'color-alpha',
    'color-palette1',
    'color-palette2',
    'color-palette3'
  ];

  /**
   * Settings to preview as sizes
   *
   * @type {Array}
   */
  var settingsToWidth = [
    // Customize Plus controls
    'slider',
    'slider-em',
    'slider-px-percent',
  ];

  /**
   * Settings to preview as text
   *
   * @type {Array}
   */
  var settingsToText = [
    // Customize Plus controls
    'api-theme_mod',
    // this is managed not as an `option` instead of as a `theme_mod` therefore
    // it gets a prefix, see below
    api.getOptionId('api-option'),
    'radio',
    'buttonset',
    'buttonset-three',
    'buttonset-four',
    'radio-image',
    'radio-image-custom',
    'text',
    'text-max-length',
    'text-optional',
    'text-url',
    'text-email',
    'textarea',
    'number',
    'number-float',
    'number-min',
    'number-max',
    'number-step',
    'slider-no-units',
    'checkbox',
    'toggle',
    'toggle-with-labels',
    'multicheck',
    'multicheck-sortable',
    'multicheck-sortable-max',
    'select',
    'select-selectize',
    'select-selectize-options',
    'select-selectize-more-items',
    'select-selectize-tags-plugins',
    'tags',
    'tags-removable',
    'tags-sortable-removable',
    'tags-max-items',
    'sortable',
    'font-family',
    'font-family-with-options',
    'font-family-just-one-monospace',
    'font-weight',
    'dashicon',
    'dashicons-max',
    'dashicons-max-from',
    // Customize Plus Premium controls
    'knob',
    'knob-options',
    'date',
    'date-inline',
    'color-dynamic-active',
    'color-dynamic-passive',
    'color-dynamic-hidetab-active',
    'color-dynamic-hidetab-passive',
    'size-dynamic-active',
    'size-dynamic-passive',
    'size-dynamic-hidetab-active',
    'size-dynamic-hidetab-passive',
    // WordPress controls
    'wp-color',
    'wp-media',
    'wp-image',
    'wp-background',
    'wp-upload',
    'wp-cropped',
    'wp-site',
    'wp-header'
  ].concat(settingsToColor, settingsToWidth);

  /**
   * Settings to preview as HMTL
   *
   * @type {Array}
   */
  var settingsToHtml = [
    'textarea-html',
    'textarea-wp_editor',
    'textarea-wp_editor-options',
    'textarea-wp_editor-no-quicktags'
  ];

  /**
   * Ids of the settings managed by the Options API instead of Theme Mods one
   *
   * @type {object}
   */
  var settingsApiKeys = {};
  settingsApiKeys[ api.getOptionId('api-option') ] = 'api-option';

  /**
   * Bind live previews for all settings
   */
  _.each(settingsToColor, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        $('#' + setting).css('background', to).flash();
      });
    });
  });

  _.each(settingsToWidth, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        $('#' + setting).css('width', to).flash();
      });
    });
  });

  _.each(settingsToText, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        if (_.isArray(to) || _.isObject(to)) {
          to = JSON.stringify(to);
        }
        if (settingsApiKeys[setting]) {
          setting = api.getOptionIdAttr(settingsApiKeys[setting]);
        }
        $('#' + setting).text(to).flash();
      });
    });
  });

  _.each(settingsToHtml, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
      $('#color').text(setting + '....' + to).flash();
        if (_.isArray(to) || _.isObject(to)) {
          to = JSON.stringify(to);
        }
        if (settingsApiKeys.indexOf(setting) !== -1) {
          setting = api.getOptionIdAttr(setting);
        }
        $('#' + setting).html(to).flash();
      });
    });
  });


})(window, jQuery, wp, kkcp);