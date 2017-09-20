function toggleMenu(){
	if ($("#menu-list").css("display") == "none") {
		$("#container").addClass("col-sm-9");
		$("#container").removeClass("col-sm-12");
	var heght = ($("body").outerHeight()-40);
	$("#menu-list").css("height", "$(heght)px");
	$("#menu-list").css("display", "block");
} else {
	$("#container").removeClass("col-sm-9");
	$("#container").addClass("col-sm-12");
	$("#menu-list").css("display", "none");
}
}

function selectAvailableProducts(){
	var query = $("#product_search-text-box").val();
	if (query === ""){
		alert("Caixa de busca nao pode ficar vazia!");
		return false;
	} else {
		$("#search_result_container").load("show_matches.php", {search: query});
	}
}

function buyOperation(id, qty){
	var newqty = qty - 1;
	var selector = "#buttonselector_".$id
	$(selector).load("buy_op.php", {productid: id, quantity: newqty});
}