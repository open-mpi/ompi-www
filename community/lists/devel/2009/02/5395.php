<?
$subject_val = "[OMPI devel] PML/ob1 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 01:01:05 2009" -->
<!-- isoreceived="20090211060105" -->
<!-- sent="Wed, 11 Feb 2009 08:01:00 +0200" -->
<!-- isosent="20090211060100" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] PML/ob1 problem" -->
<!-- id="b20b52800902102201o15b115d0k3e85ff04de24fb99_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] PML/ob1 problem<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 01:01:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5396.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p>I'm running some experimental tcp btl which implements rdma GET method and
<br>
advertises it in its flags of the btl API.
<br>
The btl`s send() method returns rc=1 to select fast path for PML. (this
<br>
optimization was added in revision 18551 in v1.3)
<br>
<p>It seems that in PML/ob1, mca_pml_ob1_send_request_start_rdma() function
<br>
does not treat right such combination (btl GET + fastpath rc&gt;0) and going
<br>
into deadlock, i.e.
<br>
<p>+++ pml_ob1_sendreq.c +670
<br>
At this line, sendreq-&gt;req_state is 0
<br>
<p>+++ pml_ob1_sendreq.c +800
<br>
At this line, if btl has GET method and btl`s send() returned fastpath hint
<br>
- the call to mca_pml_ob1_rndv_completion_request() will decrement
<br>
sendreq-&gt;req_state by one, leaving it to -1.
<br>
<p>This value of -1 will keep send_request_pml_complete_check() from completing
<br>
request on PML level.
<br>
<p>The PML logic (in mca_pml_ob1_send_request_start_rdma) for PUT operation
<br>
initializes req_state to &quot;2&quot; in pml_ob1_sendreq.c +791, but leaves req_state
<br>
to 0 for GET operations.
<br>
<p>Please suggest.
<br>
<p>Thanks
<br>
<p>Mike.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5396.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
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
