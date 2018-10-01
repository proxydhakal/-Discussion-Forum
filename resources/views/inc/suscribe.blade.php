<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header bg-white text-black">
				<h5 class="modal-title" id="exampleModalLongTitle">Subscribe to our newsletter!</h5>
				<button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
				<span class="text-black" aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ url('newsletter') }}" method="post">
					<div class="form-group">
						<label for="exampleInputEmail">Email</label>
						<input type="email" name="user_email" id="exampleInputEmail" placeholder="Enter Your Email!!" class="form-control">
					</div>
					{{ csrf_field() }}
					<button type="submit" class="btn btn-md btn-primary">Subcribe</button>
				</form>
			</div>
		</div>
	</div>
	<script src="/js/bootstrap.js" ></script>
	<script>
	
	var store = sessionStorage.getItem("popup");
	
	if (store ==  null) {
		sessionStorage.setItem("popup","true");
		$(window).on('load',function(){
			showNotices();
		});
	}
	console.log(store);
	function showNotices()
	{
	setTimeout(function(){
	$("#myModal").modal('show');
	},3000);
	}
	</script>