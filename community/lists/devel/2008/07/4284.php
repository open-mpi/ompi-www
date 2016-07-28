<?
$subject_val = "[OMPI devel] latency and increasing number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 10:57:36 2008" -->
<!-- isoreceived="20080707145736" -->
<!-- sent="Mon, 07 Jul 2008 10:57:22 -0400" -->
<!-- isosent="20080707145722" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] latency and increasing number of processes" -->
<!-- id="48722ED2.3050907_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] latency and increasing number of processes<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 10:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>Previous message:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>Reply:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious has anyone done comparisons of latency measurements as one 
<br>
changes the size of a job.  That is changing the size of the job (and 
<br>
number of nodes used) and just taking the half roundtrip latency of two 
<br>
of the processes in the job.  I am roughly seeing an addition of 5% to 
<br>
the latency for each node added.  This is with the TCP and Udapl BTLs.  
<br>
I am curious whether other BTLs have similar issues and if doing some 
<br>
sort of directed polling would help matters?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>Previous message:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
<li><strong>Reply:</strong> <a href="4285.php">Brian W. Barrett: "Re: [OMPI devel] latency and increasing number of processes"</a>
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
