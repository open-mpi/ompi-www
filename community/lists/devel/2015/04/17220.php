<?
$subject_val = "[OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 23:20:31 2015" -->
<!-- isoreceived="20150415032031" -->
<!-- sent="Tue, 14 Apr 2015 20:14:09 -0700" -->
<!-- isosent="20150415031409" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Common symbols warning" -->
<!-- id="521B8753-76E8-4003-8D5B-F8F38BED5E6C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Common symbols warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 23:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17219.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave committed this earlier today, and here is the first error report:
<br>
<p>WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_request.o: 0000000000000068 C ompi_comm_request_mutex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_request.o: 0000000000000001 C ompi_comm_request_progress_active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_request.o: 0000000000000210 C ompi_comm_requests
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_request.o: 0000000000000078 C ompi_comm_requests_active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 00000000000000b0 C ompi_comm_f_to_c_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 0000000000000600 C ompi_mpi_comm_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 0000000000000008 C ompi_mpi_comm_parent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 0000000000000600 C ompi_mpi_comm_self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 00000000000000b0 C ompi_mpi_communicators
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_init.o: 0000000000000600 C ompi_mpi_comm_world
<br>
<p><p>Would someone like to fix these?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17221.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17219.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
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
