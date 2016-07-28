<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 12:20:41 2007" -->
<!-- isoreceived="20071029162041" -->
<!-- sent="Mon, 29 Oct 2007 11:20:34 -0500" -->
<!-- isosent="20071029162034" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON" -->
<!-- id="OF3719D0A6.85B7ECA8-ON86257383.0051626F-86257383.0059C69A_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-29 12:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2520.php">David Erukhimovich: "Re: [OMPI devel] Hostfile param: was Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was issuing an MPI_Bcast in a sample program and was hitting an unknown 
<br>
error; at least that was what MPI was telling me. I traced through the 
<br>
code to find my error and came upon MCA_PML_CM_REQUEST_INIT_COMMON macro 
<br>
function in pml_cm_sendreq.h. I looked at the function and noticed that in 
<br>
this function the elements of req_status were getting initialized; 
<br>
however, req_status.MPI_ERROR was not. I thought that maybe MPI_ERROR must 
<br>
also require initialization because if the value of MPI_ERROR was some 
<br>
arbitrary value not equal to MPI_SUCCESS then my program will definitely 
<br>
die. Unless, MPI_ERROR is propragating from upper layers to signify an 
<br>
error, but I wasn't sure. Anyway, I assumed that MPI_ERROR was not 
<br>
propagating from upper layers, so then I set req_status.MPI_ERROR to 
<br>
MPI_SUCCUSS and reran my test program. My program worked. Now, having 
<br>
gotten my program to work, I thought I should run this by you to make sure 
<br>
that MPI_ERROR was not propagating from upper layers. Is it ok that I did 
<br>
a:
<br>
&quot;(req_send)-&gt;req_base.req_ompi.req_status.MPI_ERROR = MPI_SUCCESS;&quot; in 
<br>
MCA_PML_CM_REQUEST_INIT_COMMON?
<br>
<p>Thank You,
<br>
<p>Sajjad Tabib
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2520.php">David Erukhimovich: "Re: [OMPI devel] Hostfile param: was Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2518.php">Brian Barrett: "Re: [OMPI devel] bml_btl-&gt;btl_alloc() instead of mca_bml_base_alloc() in OSC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Reply:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
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
