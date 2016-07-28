<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 06:01:32 2007" -->
<!-- isoreceived="20071008100132" -->
<!-- sent="Mon, 8 Oct 2007 12:01:23 +0200" -->
<!-- isosent="20071008100123" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] Indirect calls to wait* and test*" -->
<!-- id="0F33C1EF-9706-40CA-923F-A7E6AC4793A3_at_eecs.utk.edu" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 06:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2400.php">Tim Prins: "[OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Previous message:</strong> <a href="2398.php">Jeff Squyres: "[OMPI devel] COMM_SPAWN communication failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For message logging purpose, we need to interface with wait_any,  
<br>
wait_some, test, test_any, test_some, test_all. It is not possible to  
<br>
use PMPI for this purpose. During the face-to-face meeting in Paris  
<br>
(5-12 october 2007) we discussed this issue and came to the  
<br>
conclusion that the best way to achieve this is to replace direct  
<br>
calls to ompi_request_wait* and test* by indirect calls (same way as  
<br>
PML send, recv, etc).
<br>
<p>Basic idea is to declare a static structure containing the 8 pointers  
<br>
to all the functions. This structure is initialized at compilation  
<br>
time with the current basic wait/test functions. Before end of  
<br>
MPI_init, any component might replace the basics with specialized  
<br>
functions.
<br>
<p>Expected cost is less than .01us latency according to preliminary  
<br>
test. The method is consistent with the way we call pml send/recv.  
<br>
Mechanism could be used later for stripping out grequest from  
<br>
critical path when they are not used.
<br>
<p><pre>
--
Aurelien Bouteiller, PhD
Innovative Computing Laboratory - MPI group
+1 865 974 6321
1122 Volunteer Boulevard
Claxton Education Building Suite 350
Knoxville, TN 37996
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2400.php">Tim Prins: "[OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Previous message:</strong> <a href="2398.php">Jeff Squyres: "[OMPI devel] COMM_SPAWN communication failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
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
