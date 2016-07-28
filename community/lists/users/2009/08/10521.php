<?
$subject_val = "[OMPI users] problems with one sided MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 10:57:17 2009" -->
<!-- isoreceived="20090831145717" -->
<!-- sent="Mon, 31 Aug 2009 08:57:13 -0600" -->
<!-- isosent="20090831145713" -->
<!-- name="Marcus Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="[OMPI users] problems with one sided MPI" -->
<!-- id="4A9BE4C9.9010101_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] problems with one sided MPI<br>
<strong>From:</strong> Marcus Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 10:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10522.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10520.php">J.S. van Bethlehem: "[OMPI users] connection problem in btl_tcp_endpoint.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to do passive one-sided communication, unlocking a receive 
<br>
buffer when it is safe and then re-locking it when data has arrived.  
<br>
Locking also occurs for the duration of a send.
<br>
I also tried using post/wait and start/put/complete, but with that I see 
<br>
hangs on the complete. 
<br>
<p>What would cause an error like this? 
<br>
<p>[snout.lanl.gov:713] *** An error occurred in MPI_Win_lock
<br>
[snout.lanl.gov:713] *** on win 5
<br>
[snout.lanl.gov:713] *** MPI_ERR_RMA_SYNC: error executing rma sync
<br>
[snout.lanl.gov:713] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[snout.lanl.gov:713] Delaying for 30 seconds before aborting
<br>
[snout.lanl.gov:712] Delaying for 30 seconds before aborting
<br>
[snout.lanl.gov:00711] 1 more process has sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[snout.lanl.gov:00711] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 
<br>
to see all help / error messages
<br>
<p>Is one sided communication well-tested?   I'm doing these experiments on 
<br>
one machine (a Mac).
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10522.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10520.php">J.S. van Bethlehem: "[OMPI users] connection problem in btl_tcp_endpoint.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
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
