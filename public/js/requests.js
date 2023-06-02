// Calleds Actions
// document
// 	.getElementById("modal-calleds")
// 	.addEventListener("show.bs.modal", (event) => {
// 		let parent = $(event.relatedTarget).parents("div")[0] || undefined;
// 		let id = $(parent).attr("data-ref") || undefined;

// 		if (!id) return;

// 		$.ajax({
// 			url: `/api/calleds/${id}`,
// 			method: "GET",
// 		})
// 			.done((response) => {
// 				let data = response.data.called || undefined;

// 				if (response.status !== "success" || !data)
// 					return console.error(response);

// 				console.log(data);

// 				$("#txa-calleds-description").val(data.description);
// 				$("#select-calleds-problems").val(data.problems);
// 				$("#select-calleds-companies").val(data.problems);
// 				$("#select-calleds-user").val(data.tech);
// 				$("#select-calleds-status").val(data.status);
// 				$("#input-calleds-data-initial").val(data.date);
// 				$("#form-modal-calleds select").trigger("change");
// 			})
// 			.fail((err) => {
// 				console.error(err);
// 			});
// 	});

$("#select-support-status").on("change", (event) => {
	let status = $(event.target).val();
	let url = "/console";

	if (status >= 0 && status <= 1) {
		url += `?status=${status}`;
	}

	$("#v-user-table").load(`${url} #v-user-table > *`, () => {
		window.history.pushState("new content", "News users table", url);
	});
});
