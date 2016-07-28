<?
$subject_val = "[OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 17:56:34 2011" -->
<!-- isoreceived="20110127225634" -->
<!-- sent="Thu, 27 Jan 2011 15:56:14 -0700" -->
<!-- isosent="20110127225614" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] OFED question" -->
<!-- id="B98E2954-DB9B-42D7-8908-F00A0291D890_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] OFED question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 17:56:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
<br>
<p>[xxx:27545] *** An error occurred in MPI_Scatterv
<br>
[xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
<br>
[xxx:27545] *** MPI_ERR_OTHER: known error not in list
<br>
[xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 27545 on
<br>
node rs1891 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
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
