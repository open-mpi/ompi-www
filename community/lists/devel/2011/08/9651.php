<?
$subject_val = "Re: [OMPI devel] ibm/dynamic/loop_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 20:48:02 2011" -->
<!-- isoreceived="20110816004802" -->
<!-- sent="Mon, 15 Aug 2011 18:47:48 -0600" -->
<!-- isosent="20110816004748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/dynamic/loop_spawn" -->
<!-- id="E6199261-6661-43FA-89F7-6DB15674330B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F301949E4898_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm/dynamic/loop_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 20:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't really care, but note that loop_spawn was created by me to test a very specific user-reported problem. It should &quot;self-throttle&quot; - i.e., the entire idea is that comm_spawn &quot;blocks&quot; until the system has room for another process, and then starts it. If that isn't working correctly, then OMPI isn't behaving properly.
<br>
<p>If you are having problems with the test, we should determine the origin of the problem - if it truly is a test harness issue, and not something in the code, then no problem with dialing things back.
<br>
<p><p>On Aug 15, 2011, at 2:29 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; I think this is a good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have spent a fair amount of time in the past analyzing timeouts from this set of tests.  I had to figure out if it was an actual timeout or if the test was just running very slowly.
</span><br>
<span class="quotelev1">&gt; In fact, I see that sometime in the past I throttled back the number of iterations in the loop_spawn.c test for just this reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, I think your idea would be a nice improvement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Eugene Loh
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 15, 2011 11:47 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] ibm/dynamic/loop_spawn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a question about ompi-tests/ibm/dynamic.  Some of these tests
</span><br>
<span class="quotelev2">&gt;&gt; (spawn, spawn_multiple, loop_spawn/child, and no-disconnect) exercise
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn* functionality.  Specifically, they spawn additional
</span><br>
<span class="quotelev2">&gt;&gt; processes (beyond the initial mpirun launch) and therefore exert a different
</span><br>
<span class="quotelev2">&gt;&gt; load on a test system than one might naively expect from the &quot;mpirun -np
</span><br>
<span class="quotelev2">&gt;&gt; &lt;np&gt;&quot; command line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One approach to testing is to have the test harness know characteristics about
</span><br>
<span class="quotelev2">&gt;&gt; individual tests like this.  E.g., if I have only 8 processors and I don't want to
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribe, have the test harness know that particular tests should be
</span><br>
<span class="quotelev2">&gt;&gt; launched with fewer processes.  On the other hand, building such generality
</span><br>
<span class="quotelev2">&gt;&gt; into a test harness when changes would have to be so pervasive (subjective
</span><br>
<span class="quotelev2">&gt;&gt; assessment) and so few tests require it may not make that much sense.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another approach would be to manage oversubscription in the tests
</span><br>
<span class="quotelev2">&gt;&gt; themselves.  E.g., for spawn.c, instead of spawning np new processes, do the
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - idle np/2 of the processes
</span><br>
<span class="quotelev2">&gt;&gt; - have the remaining np/2 processes spawn np/2 new ones
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (Okay, so that leaves open the possibility that the newly spawned processes
</span><br>
<span class="quotelev2">&gt;&gt; might not appear on the same nodes where idled processes have &quot;made
</span><br>
<span class="quotelev2">&gt;&gt; room&quot; for them.  Each solution seems loaded with shortcomings.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, I was interested in some feedback on this topic.  A very small
</span><br>
<span class="quotelev2">&gt;&gt; number (1-4) of spawning tests are causing us lots of problems (undue
</span><br>
<span class="quotelev2">&gt;&gt; complexity in the test harness as well as a bunch of our time for reasons I find
</span><br>
<span class="quotelev2">&gt;&gt; difficult to explain succinctly).  We're inclined to modify the tests so that
</span><br>
<span class="quotelev2">&gt;&gt; they're a little more social.  E.g., make decisions about how many of the
</span><br>
<span class="quotelev2">&gt;&gt; launched processes should &quot;really&quot; be used, idling some fraction of the
</span><br>
<span class="quotelev2">&gt;&gt; processes, and continuing the test only with the remaining fraction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
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
