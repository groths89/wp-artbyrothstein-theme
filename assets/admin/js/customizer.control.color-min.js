jQuery(document).ready((function(c){c(".color-picker-wrapper-curly").each((function(){const r=this;c(".color-picker",this).wpColorPicker({change:function(o,e){c(".curly_color",r).val(e.color.to_s("rgba")).trigger("change")}})}))}));