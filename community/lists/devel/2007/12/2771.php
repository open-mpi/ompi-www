<?
$subject_val = "[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 11:49:09 2007" -->
<!-- isoreceived="20071210164909" -->
<!-- sent="Mon, 10 Dec 2007 11:48:56 -0500" -->
<!-- isosent="20071210164856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used" -->
<!-- id="CFEC407D-C452-47A9-8B64-A8A7BFBC8337_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 11:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2772.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per my prior mail, I just filed a patch on CMR #1198 to print a big  
<br>
warning on MPI_COMM_WORLD rank 0 if MPI_THREAD_MULTIPLE and/or  
<br>
progress threads are used.  We know that this functionality basically  
<br>
doesn't work, so instead of getting lots more mail to the users list,  
<br>
let's at least put a disclaimer message at run time saying that it  
<br>
doesn't work.
<br>
<p>Anyone have any objections to putting this in v1.2.5?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1198">https://svn.open-mpi.org/trac/ompi/ticket/1198</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2772.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
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
