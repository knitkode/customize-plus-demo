/* global jQuery, _, wp, PWPcp */
/* jshint unused: false */

(function (window, $, wp, api) {
  'use strict';

  var wpApi = wp.customize;
  var _toCSS = api.toCSS;

  var $body = $('body');
  var $toScroll = $('html, body');

  $.fn.flash = function (duration) {
    var offset = this.offset();
    if (!offset) {
      return this;
    }
    this.addClass('flash');
    setTimeout(function () {
      this.removeClass('flash');
    }.bind(this), 300);

    // @@doubt, scroll or not in preview \\
    // $toScroll.animate({
    //   scrollTop: offset.top -100
    // }, 300);

    return this;
  };

  var settingsToColor = [
    // Customize Plus controls
    'color',
    'color-no-transparent',
    'color-alpha',
    'color-palette1',
    'color-palette2',
    'color-palette3'
  ];
  _.each(settingsToColor, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        $('#' + setting).css('background', to).flash();
      });
    });
  });

  var settingsToWidth = [
    // Customize Plus controls
    'slider',
    'slider-em',
    'slider-px-percent',
  ];
  _.each(settingsToWidth, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        $('#' + setting).css('width', to).flash();
      });
    });
  });

  var settingsToText = [
    // Customize Plus controls
    'api-theme_mod',
    'api-option',
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
    'toggle',
    'multicheck',
    'multicheck-sortable',
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
    'font-weight',
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
   * Ids of the settings managed by the Options API instead of Theme Mods one
   * @type {Array}
   */
  var settingsApiKeys = [
    'api-option'
  ];

  /**
   * Replace
   * @@todo, move this to API, like isOptionsApi ? and api.isThemeModsAPI
   * @param  {[type]} var i             [description]
   * @return {[type]}     [description]
   */
  for (var i = settingsApiKeys.length - 1; i >= 0; i--) {
    var idToChange = settingsApiKeys[i];
    var indexInSettingsToText = settingsToText.indexOf(idToChange);
    if (indexInSettingsToText !== -1) {
      var idChanged = api.getOptionId(idToChange);
      settingsToText.splice(indexInSettingsToText, 0, idChanged);
    }
  }

  _.each(settingsToText, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        var el = document.getElementById(setting);
        $(el).text(to).flash();
      });
    });
  });

  var settingsToHtml = [
    'textarea-html',
    'textarea-wp_editor',
    'textarea-wp_editor-options',
  ];
  _.each(settingsToHtml, function (setting) {
    wpApi(setting, function (value) {
      value.bind(function (to) {
        $('#' + setting).html(to).flash();
      });
    });
  });


})(window, jQuery, wp, PWPcp);