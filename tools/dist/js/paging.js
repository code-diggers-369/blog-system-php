!(function (a, b) {
	a.fn.bootpag = function (b) {
		function e(b, e) {
			e = parseInt(e, 10);
			var g,
				h = 0 == d.maxVisible ? 1 : d.maxVisible,
				i = 1 == d.maxVisible ? 0 : 1,
				j = Math.floor((e - 1) / h) * h,
				k = b.find("li");
			(d.page = e = e < 0 ? 0 : e > d.total ? d.total : e),
				k.removeClass(d.activeClass),
				(g =
					e - 1 < 1
						? 1
						: d.leaps && e - 1 >= d.maxVisible
						? Math.floor((e - 1) / h) * h
						: e - 1),
				d.firstLastUse && k.first().toggleClass(d.disabledClass, 1 === e);
			var l = k.first();
			d.firstLastUse && (l = l.next()),
				l
					.toggleClass(d.disabledClass, 1 === e)
					.attr("data-lp", g)
					.find("a")
					.attr("href", f(g));
			var i = 1 == d.maxVisible ? 0 : 1;
			g =
				e + 1 > d.total
					? d.total
					: d.leaps && e + 1 < d.total - d.maxVisible
					? j + d.maxVisible + i
					: e + 1;
			var m = k.last();
			d.firstLastUse && (m = m.prev()),
				m
					.toggleClass(d.disabledClass, e === d.total)
					.attr("data-lp", g)
					.find("a")
					.attr("href", f(g)),
				k.last().toggleClass(d.disabledClass, e === d.total);
			var n = k.filter("[data-lp=" + e + "]"),
				o =
					"." +
					[d.nextClass, d.prevClass, d.firstClass, d.lastClass].join(",.");
			if (!n.not(o).length) {
				var p = e <= j ? -d.maxVisible : 0;
				k.not(o).each(function (b) {
					(g = b + 1 + j + p),
						a(this)
							.attr("data-lp", g)
							.toggle(g <= d.total)
							.find("a")
							.html(g)
							.attr("href", f(g));
				}),
					(n = k.filter("[data-lp=" + e + "]"));
			}
			n.not(o).addClass(d.activeClass), c.data("settings", d);
		}
		function f(a) {
			return d.href.replace(d.hrefVariable, a);
		}
		var c = this,
			d = a.extend(
				{
					total: 0,
					page: 1,
					maxVisible: null,
					leaps: !0,
					href: "javascript:void(0);",
					hrefVariable: "{{number}}",
					next: "&raquo;",
					prev: "&laquo;",
					firstLastUse: !1,
					first: '<span aria-hidden="true">&larr;</span>',
					last: '<span aria-hidden="true">&rarr;</span>',
					wrapClass: "pagination",
					activeClass: "active",
					disabledClass: "disabled",
					nextClass: "next",
					prevClass: "prev",
					lastClass: "last",
					firstClass: "first",
				},
				c.data("settings") || {},
				b || {}
			);
		return d.total <= 0
			? this
			: (a.isNumeric(d.maxVisible) ||
					d.maxVisible ||
					(d.maxVisible = parseInt(d.total, 10)),
			  c.data("settings", d),
			  this.each(function () {
					var b,
						g,
						h = a(this),
						i = ['<nav><ul class="', d.wrapClass, ' bootpag">'];
					d.firstLastUse &&
						(i = i.concat([
							'<li data-lp="1" class="',
							d.firstClass,
							' page-item"><a class="page-link" href="',
							f(1),
							'">',
							d.first,
							"</a></li>",
						])),
						d.prev &&
							(i = i.concat([
								'<li data-lp="1" class="',
								d.prevClass,
								' page-item"><a class="page-link" href="',
								f(1),
								'">',
								d.prev,
								"</a></li>",
							]));
					for (var j = 1; j <= Math.min(d.total, d.maxVisible); j++)
						i = i.concat([
							'<li data-lp="',
							j,
							'" class="page-item"><a class="page-link" href="',
							f(j),
							'">',
							j,
							"</a></li>",
						]);
					d.next &&
						((g =
							d.leaps && d.total > d.maxVisible
								? Math.min(d.maxVisible + 1, d.total)
								: 2),
						(i = i.concat([
							'<li data-lp="',
							g,
							'" class="',
							d.nextClass,
							' page-item"><a class="page-link" href="',
							f(g),
							'">',
							d.next,
							"</a></li>",
						]))),
						d.firstLastUse &&
							(i = i.concat([
								'<li data-lp="',
								d.total,
								'" class="last page-item"><a class="page-link" href="',
								f(d.total),
								'">',
								d.last,
								"</a></li>",
							])),
						i.push("</ul></nav>"),
						h.find("ul.bootpag").remove(),
						h.append(i.join("")),
						(b = h.find("ul.bootpag")),
						h.find("li").click(function () {
							var f = a(this);
							if (!f.hasClass(d.disabledClass) && !f.hasClass(d.activeClass)) {
								var g = parseInt(f.attr("data-lp"), 10);
								c.find("ul.bootpag").each(function () {
									e(a(this), g);
								}),
									c.trigger("page", g);
							}
						}),
						e(b, d.page);
			  }));
	};
})(jQuery, window);
