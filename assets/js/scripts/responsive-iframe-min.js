!function(a){a(document).ready(function(){function t(){a("iframe").each(function(){var t=a(this),o=t.data("proportion"),i=t.attr("width"),n=t.width();o||(o=t.attr("height")/i,t.data("proportion",o)),n!==i&&t.css("height",Math.round(n*o)+"px")})}a(window).on("resize load",t)})}(jQuery);