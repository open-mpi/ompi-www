<?
$subject_val = "[OMPI users] message truncated error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 02:26:52 2010" -->
<!-- isoreceived="20101101062652" -->
<!-- sent="Mon, 1 Nov 2010 00:26:47 -0600" -->
<!-- isosent="20101101062647" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] message truncated error" -->
<!-- id="SNT134-w284740F5DBC5086DB82282CB480_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] message truncated error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 02:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14663.php">Sudarshan Wadkar: "[OMPI users] random error : btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect connection refused (111)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Maybe reply:</strong> <a href="14672.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI, 
<br>
In my MPI program, master send many msaages to another worker with the same tag. 
<br>
The worker uses sMPI::COMM_WORLD.Recv(&amp;message_para_to_one_worker, 1, message_para_to_workers_type, 0, downStreamTaskTag);
<br>
to receive the messages 
<br>
I got error: 
<br>
<p>n36:94880] *** An error occurred in MPI_Recv[n36:94880] *** on communicator MPI_COMM_WORLD[n36:94880] *** MPI_ERR_TRUNCATE: message truncated[n36:94880] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)[n36:94880] *** Process received signal ***[n36:94880] Signal: Segmentation fault (11)[n36:94880] Signal code: Address not mapped (1)
<br>
<p>Is this (the same tag) the reason for the errors ? 
<br>
ANy help is appreciated. 
<br>
thanks
<br>
Jack 
<br>
Oct. 31 2010 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14663.php">Sudarshan Wadkar: "[OMPI users] random error : btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect connection refused (111)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14665.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Maybe reply:</strong> <a href="14672.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
