<?
$subject_val = "Re: [OMPI users] Large TCP cluster timeout issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 17:15:13 2011" -->
<!-- isoreceived="20110920211513" -->
<!-- sent="Tue, 20 Sep 2011 15:15:03 -0600" -->
<!-- isosent="20110920211503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Large TCP cluster timeout issue" -->
<!-- id="DBE35211-5F94-4DC7-A645-449A5F6F3044_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF070901E6599_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Large TCP cluster timeout issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 17:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17366.php">Henderson, Brent: "[OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>In reply to:</strong> <a href="17366.php">Henderson, Brent: "[OMPI users] Large TCP cluster timeout issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Reply:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....perhaps you didn't notice the mpi_preconnect_all option? It does precisely what you described - it pushes zero-byte messages around a ring to force all the connections open at MPI_Init.
<br>
<p><p>On Sep 20, 2011, at 3:06 PM, Henderson, Brent wrote:
<br>
<p><span class="quotelev1">&gt; I recently had access to a 200+ node Magny Cours (24 ranks/host) 10G Linux cluster.  I was able to use OpenMPI v1.5.4 with hello world, IMB and HPCC, but there were a couple of issues along the way.  After setting some system tunables up a little bit on all of the nodes a hello_world program worked just fine &#150; it appears that the TCP connections between most or all of the ranks are deferred until they are actually used so the easy test ran reasonably quickly.  I then moved to IMB. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I typically don&#146;t care about the small rank counts, so I add the &#150;npmin 99999 option to just run the &#145;big&#146; number of ranks.  This ended with an abort after MPI_Init(), but before running any tests.  Lots (possibly all) of ranks emitted messages that looked like:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     &#145;[n112][[13200,1],1858][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 172.23.4.1 failed: Connection timed out (110)&#146;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Where n112 is one of the nodes in the job, and 172.23.4.1 is the first node in the job.  One of the first things that IMB does before running a test is create a communicator for each specific rank count it is testing.  Apparently this collective operation causes a large number of connections to be made.  The abort messages (one example shown above) all show the connect failure to a single node, so it would appear that a very large number of nodes attempt to connect to that one at the same time and overwhelmed it.  (Or it was slow and everyone ganged up on it as they worked their way around the ring.  J  Is there a supported/suggested way to work around this?  It was very repeatable.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I was able to work around this by using the primary definitions for MPI_Init() and MPI_Init_thread() by calling the &#145;P&#146; version of the routine, and then having each rank send its rank number to the rank one to the right, then two to the right, and so-on around the ring.  I added a MPI_Barrier( MPI_COMM_WORLD ), call every N messages to keep things at a controlled pace.  N was 64 by default, but settable via environment variable in case that number didn&#146;t work well for some reason.  This fully connected the mesh (110k socket connections per host!) and allowed the tests to run.  Not a great solution, I know, but I&#146;ll throw it out there until I know the right way.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Once I had this in place, I used the workaround with HPCC as well.  Without it, it would not get very far at all.  With it, I was able to make it through the entire test.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Looking forward to getting the experts thoughts about the best way to handle big TCP clusters &#150; thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Brent
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; P.S.  v1.5.4 worked *much* better that v1.4.3 on this cluster &#150; not sure why, but kudos to those working on changes since then!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17367/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Previous message:</strong> <a href="17366.php">Henderson, Brent: "[OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>In reply to:</strong> <a href="17366.php">Henderson, Brent: "[OMPI users] Large TCP cluster timeout issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<li><strong>Reply:</strong> <a href="17368.php">Henderson, Brent: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
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
