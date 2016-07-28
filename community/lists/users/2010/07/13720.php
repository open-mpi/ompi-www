<?
$subject_val = "[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 10:07:40 2010" -->
<!-- isoreceived="20100721140740" -->
<!-- sent="Wed, 21 Jul 2010 10:07:30 -0400" -->
<!-- isosent="20100721140730" -->
<!-- name="Brian Smith" -->
<!-- email="brs_at_[hidden]" -->
<!-- subject="[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1" -->
<!-- id="1279721250.13917.13.camel_at_daemon.rc.usf.edu" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1<br>
<strong>From:</strong> Brian Smith (<em>brs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 10:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13721.php">Jed Brown: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13719.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Reply:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, All,
<br>
<p>A couple of applications that I'm using -- VASP and Charmm -- end up
<br>
&quot;stuck&quot; (for lack of a better word) during a waitall call after some
<br>
non-blocking send/recv action.  This only happens when utilizing the
<br>
openib btl.  I've followed a couple of bugs where this seemed to happen
<br>
in some previous revisions and tried the work-arounds provided, but to
<br>
no avail.  I'm going to try running against a previous version to see if
<br>
its a regression of some sort, but this problem didn't seem to exist in
<br>
1.4.1 until our systems were updated to OFED &gt;= 1.4.  Any suggestions
<br>
besides the obvious, &quot;well, down-grade from &gt;= 1.4&quot;?  What additional
<br>
info can I provide to help?
<br>
<p>Thanks,
<br>
-Brian
<br>
<p><pre>
-- 
Brian Smith
Senior Systems Administrator
IT Research Computing, University of South Florida
4202 E. Fowler Ave. ENB204
Office Phone: +1 813 974-1467
Organization URL: <a href="http://rc.usf.edu">http://rc.usf.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13721.php">Jed Brown: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13719.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Reply:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
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
