// Inicio
$(function(){
	$("#search").keyup(function(){
		if($(this).val() != ""){
			$("#table_result #rows").hide();
			$("#table_result td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else{
			$("#table_result #rows").show();
		}
	});
});

$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});