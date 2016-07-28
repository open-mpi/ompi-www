<?
$subject_val = "Re: [OMPI users] Large TCP cluster timeout issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 12:14:40 2011" -->
<!-- isoreceived="20110921161440" -->
<!-- sent="Wed, 21 Sep 2011 17:13:52 +0100" -->
<!-- isosent="20110921161352" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Large TCP cluster timeout issue" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF070901E6783_at_GVW1341EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C792E88F-DE68-4C89-B8F5-10BD79C9BBE6_at_open-mpi.org" -->
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
<strong>From:</strong> Henderson, Brent (<em>brent.henderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 12:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17369.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The data there would not have helped me too much I'm afraid.  I'm used to working with big IB clusters, but needed help with the TCP side of the house.
<br>
<p>I needed things like the 'mpi_preconnect_all' flag suggestion, sysctl settings for the TCP stack, file descriptor limits for the user and system, how to enable jumbo frames, using ethtool to change various options to see what worked best (like interrupt coalescing, various timeouts, ...), and how to bind the interrupt handlers to cores for most effective processing of the requests from the NIC.  The card vendors themselves have documentation on some of these, but it is not always easy to find.
<br>
<p>I think that the key here is to determine which (if any!) of the things I was looking for can live in a general FAQ entry.  :)  If you do come up with some updates I would certainly review them for you!
<br>
<p>Brent
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 20, 2011 6:55 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Large TCP cluster timeout issue
<br>
<p>Truly am sorry about that - we were just talking today about the need to update and improve our FAQ on running on large clusters. Did you by any chance look at it? Would appreciate any thoughts on how it should be improved from a user's perspective.
<br>
<p><p><p>On Sep 20, 2011, at 3:28 PM, Henderson, Brent wrote:
<br>
<p><p>Nope, but if I didn't that would have saved me about an hour of coding time!
<br>
<p>I'm still curious if it would be beneficial to inject some barriers at certain locations so that if you had a slow node, not everyone would end up connecting to it all at once.  Anyway, if I get access to another large TCP cluster, I'll give it a try.
<br>
<p>Thanks,
<br>
<p>brent
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 20, 2011 4:15 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Large TCP cluster timeout issue
<br>
<p>Hmmm....perhaps you didn't notice the mpi_preconnect_all option? It does precisely what you described - it pushes zero-byte messages around a ring to force all the connections open at MPI_Init.
<br>
<p><p>On Sep 20, 2011, at 3:06 PM, Henderson, Brent wrote:
<br>
<p><p><p>I recently had access to a 200+ node Magny Cours (24 ranks/host) 10G Linux cluster.  I was able to use OpenMPI v1.5.4 with hello world, IMB and HPCC, but there were a couple of issues along the way.  After setting some system tunables up a little bit on all of the nodes a hello_world program worked just fine - it appears that the TCP connections between most or all of the ranks are deferred until they are actually used so the easy test ran reasonably quickly.  I then moved to IMB.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17375.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17369.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
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
