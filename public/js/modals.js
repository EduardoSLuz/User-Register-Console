// Modal User
$("#modal-users").on("show.bs.modal", (event) => {
	let btn = $(event.relatedTarget);
	let type = btn.attr("data-type") || 0;
	let us = btn.attr("data-us") || 0;
	let field = $(".user-pass-field");

	if (type) {
		field.removeClass("d-none");
		$("#form-user-content input").val("");
		$("#select-user-genre").val(0);
		$("#select-user-status").val(1);
		$("#form-user-content select").trigger("change");
	} else {
		$("#modal-users-content").load(
			`/console?us=${us} #modal-users-content > *`,
			() => {
				field = $(".user-pass-field");
				field.addClass("d-none");
			}
		);
	}
});

// Buttons Actions Modal User
$(document).on("click", ".btn-edit-address", (event) => {
	let btn = $(event.currentTarget);
	let collapse = $("#form-user-address");
	const bsCollapse = new bootstrap.Collapse("#form-user-address", {
		toggle: false,
	});
	let type = btn.attr("data-type") || 0;

	if (type < 2) {
		if (collapse.hasClass("show")) {
			if (type == 1) {
				console.log("foi");
			} else {
				bsCollapse.hide();
			}
		} else {
			bsCollapse.show();
		}
	}

	if (type == 1) {
		let addr = btn.attr("data-address") || 0;
		collapse.attr("data-address", addr);
	} else {
		collapse.attr("data-address", 0);
	}
});

$(document).on("click", ".btn-remove-address", (event) => {
	event.preventDefault();

	let btn = $(event.currentTarget);
	let addr = btn.attr("data-address") || 0;

	collapse.attr("data-address", 0);

	console.log(addr);
});
