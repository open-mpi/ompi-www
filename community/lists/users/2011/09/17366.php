<?
$subject_val = "[OMPI users] Large TCP cluster timeout issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 17:07:58 2011" -->
<!-- isoreceived="20110920210758" -->
<!-- sent="Tue, 20 Sep 2011 22:06:52 +0100" -->
<!-- isosent="20110920210652" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="[OMPI users] Large TCP cluster timeout issue" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF070901E6599_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> [OMPI users] Large TCP cluster timeout issue<br>
<strong>From:</strong> Henderson, Brent (<em>brent.henderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 17:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Reply:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently had access to a 200+ node Magny Cours (24 ranks/host) 10G Linux cluster.  I was able to use OpenMPI v1.5.4 with hello world, IMB and HPCC, but there were a couple of issues along the way.  After setting some system tunables up a little bit on all of the nodes a hello_world program worked just fine - it appears that the TCP connections between most or all of the ranks are deferred until they are actually used so the easy test ran reasonably quickly.  I then moved to IMB.
<br>
<p>I typically don't care about the small rank counts, so I add the -npmin 99999 option to just run the 'big' number of ranks.  This ended with an abort after MPI_Init(), but before running any tests.  Lots (possibly all) of ranks emitted messages that looked like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;'[n112][[13200,1],1858][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 172.23.4.1 failed: Connection timed out (110)'
<br>
<p>Where n112 is one of the nodes in the job, and 172.23.4.1 is the first node in the job.  One of the first things that IMB does before running a test is create a communicator for each specific rank count it is testing.  Apparently this collective operation causes a large number of connections to be made.  The abort messages (one example shown above) all show the connect failure to a single node, so it would appear that a very large number of nodes attempt to connect to that one at the same time and overwhelmed it.  (Or it was slow and everyone ganged up on it as they worked their way around the ring.  :)  Is there a supported/suggested way to work around this?  It was very repeatable.
<br>
<p>I was able to work around this by using the primary definitions for MPI_Init() and MPI_Init_thread() by calling the 'P' version of the routine, and then having each rank send its rank number to the rank one to the right, then two to the right, and so-on around the ring.  I added a MPI_Barrier( MPI_COMM_WORLD ), call every N messages to keep things at a controlled pace.  N was 64 by default, but settable via environment variable in case that number didn't work well for some reason.  This fully connected the mesh (110k socket connections per host!) and allowed the tests to run.  Not a great solution, I know, but I'll throw it out there until I know the right way.
<br>
<p>Once I had this in place, I used the workaround with HPCC as well.  Without it, it would not get very far at all.  With it, I was able to make it through the entire test.
<br>
<p>Looking forward to getting the experts thoughts about the best way to handle big TCP clusters - thanks!
<br>
<p>Brent
<br>
<p>P.S.  v1.5.4 worked *much* better that v1.4.3 on this cluster - not sure why, but kudos to those working on changes since then!
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17366/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Reply:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
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
