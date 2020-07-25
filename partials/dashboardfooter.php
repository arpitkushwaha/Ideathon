

	<!-- External JavaScripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendors/counter/waypoints-min.js"></script>
	<script src="../assets/vendors/counter/counterup.min.js"></script>
	<script src='../assets/vendors/scroll/scrollbar.min.js'></script>
	<script src="../assets/vendors/chart/chart.min.js"></script>
	<script src="../assets/js/admin.js"></script>
	<script src='../assets/vendors/calendar/moment.min.js'></script>
	<script src='../assets/vendors/calendar/fullcalendar.js'></script>
	<script src="../assets1/js/admin.js"></script>
	<script src="../oldassets/js/bootstrap-tagsinput.js"></script>

	<script>
		$('#tagPlaces').tagsinput({
			allowDuplicates: true
		});
	</script>



	<script>
		function marketplace() {
			$('#market_place').show();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').hide();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();

		}

		function blog() {
			$('#market_place').hide();
			$('#your_blog').show();
			$('#create_blog').hide();
			$('#main-profile').hide();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
		}

		function myaccount() {
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').show();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').hide();
		}

		function personal_info() {

			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').show();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').hide();
		}

		function account_info() {

			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').hide();
			$('#accountinfo').show();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').hide();
		}

		function edit_personalinfo_btn() {
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').show();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').hide();
		}
		function edit_accountinfo_btn() {
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').show();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').hide();

		}

	
		function youraffiliation() {
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').show();
			$('#ask_forum').hide();
			$('#scratchcard').hide();

		}

		function scratchcard() {
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').show();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
			$('#scratchcard').show();
			
		}
		function createblog()
		{
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').show();
			$('#main-profile').hide();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').hide();
		}

		function askforum()
		{
			$('#market_place').hide();
			$('#your_blog').hide();
			$('#create_blog').hide();
			$('#main-profile').hide();
			$('#personalinfo').hide();
			$('#accountinfo').hide();
			$('#personalinfo-edit').hide();
			$('#accountinfo-edit').hide();
			$('#your-affiliation').hide();
			$('#ask_forum').show();
		}
		function userblog()
		{
			$('#user_blog').show();
			$('#user_forum').hide();
			
		}
		function userforum()
		{
			$('#user_blog').hide();
			$('#user_forum').show();
			
		}
	</script>






<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
$('.select2').select2({
data: ["Dog", "Cat", "Monkey", "Alligator", "Crocodile"],
tags: true,
maximumSelectionLength: 5,
tokenSeparators: [',', ' '],
placeholder: "Select or type keywords",
//minimumInputLength: 1,
//ajax: {
//   url: "you url to data",
//   dataType: 'json',
//  quietMillis: 250,
//  data: function (term, page) {
//     return {
//         q: term, // search term
//    };
//  },
//  results: function (data, page) { 
//  return { results: data.items };
//   },
//   cache: true
// }
});
</script>
</body>

</html>


