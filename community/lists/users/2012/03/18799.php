<?
$subject_val = "[OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 07:05:09 2012" -->
<!-- isoreceived="20120319110509" -->
<!-- sent="Mon, 19 Mar 2012 10:57:15 +0000 (UTC)" -->
<!-- isosent="20120319105715" -->
<!-- name="Toufik" -->
<!-- email="h_toufik7_at_[hidden]" -->
<!-- subject="[OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="loom.20120319T115404-196_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] configuration of openmpi-1.5.4 with visual studio<br>
<strong>From:</strong> Toufik (<em>h_toufik7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 06:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I'm trying lately to configure openmpi with visual studio 2010, 
<br>
i did all the linking staff but i keep getting this message :
<br>
<p>[Toufik-PC:05628] [[21037,0],0] ORTE_ERROR_LOG: Error in file 
<br>
..\..\..\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 215
<br>
--------------------------------------------------------------------
<br>
------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>could anybody tell me what the problem could be 'cause i don't really 
<br>
know what to do.
<br>
<p>Thanks &amp; regards,
<br>
Toufik
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18800.php">Jens Glaser: "[OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18830.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
