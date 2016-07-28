<?
$subject_val = "Re: [OMPI devel] ibm/dynamic/loop_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 16:29:39 2011" -->
<!-- isoreceived="20110815202939" -->
<!-- sent="Mon, 15 Aug 2011 13:29:33 -0700" -->
<!-- isosent="20110815202933" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/dynamic/loop_spawn" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F301949E4898_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E493F85.30305_at_oracle.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 16:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a good idea.
<br>
<p>I have spent a fair amount of time in the past analyzing timeouts from this set of tests.  I had to figure out if it was an actual timeout or if the test was just running very slowly.
<br>
In fact, I see that sometime in the past I throttled back the number of iterations in the loop_spawn.c test for just this reason.
<br>
<p>Therefore, I think your idea would be a nice improvement.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Eugene Loh
</span><br>
<span class="quotelev1">&gt;Sent: Monday, August 15, 2011 11:47 AM
</span><br>
<span class="quotelev1">&gt;To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] ibm/dynamic/loop_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is a question about ompi-tests/ibm/dynamic.  Some of these tests
</span><br>
<span class="quotelev1">&gt;(spawn, spawn_multiple, loop_spawn/child, and no-disconnect) exercise
</span><br>
<span class="quotelev1">&gt;MPI_Comm_spawn* functionality.  Specifically, they spawn additional
</span><br>
<span class="quotelev1">&gt;processes (beyond the initial mpirun launch) and therefore exert a different
</span><br>
<span class="quotelev1">&gt;load on a test system than one might naively expect from the &quot;mpirun -np
</span><br>
<span class="quotelev1">&gt;&lt;np&gt;&quot; command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;One approach to testing is to have the test harness know characteristics about
</span><br>
<span class="quotelev1">&gt;individual tests like this.  E.g., if I have only 8 processors and I don't want to
</span><br>
<span class="quotelev1">&gt;oversubscribe, have the test harness know that particular tests should be
</span><br>
<span class="quotelev1">&gt;launched with fewer processes.  On the other hand, building such generality
</span><br>
<span class="quotelev1">&gt;into a test harness when changes would have to be so pervasive (subjective
</span><br>
<span class="quotelev1">&gt;assessment) and so few tests require it may not make that much sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Another approach would be to manage oversubscription in the tests
</span><br>
<span class="quotelev1">&gt;themselves.  E.g., for spawn.c, instead of spawning np new processes, do the
</span><br>
<span class="quotelev1">&gt;following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- idle np/2 of the processes
</span><br>
<span class="quotelev1">&gt;- have the remaining np/2 processes spawn np/2 new ones
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(Okay, so that leaves open the possibility that the newly spawned processes
</span><br>
<span class="quotelev1">&gt;might not appear on the same nodes where idled processes have &quot;made
</span><br>
<span class="quotelev1">&gt;room&quot; for them.  Each solution seems loaded with shortcomings.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Anyhow, I was interested in some feedback on this topic.  A very small
</span><br>
<span class="quotelev1">&gt;number (1-4) of spawning tests are causing us lots of problems (undue
</span><br>
<span class="quotelev1">&gt;complexity in the test harness as well as a bunch of our time for reasons I find
</span><br>
<span class="quotelev1">&gt;difficult to explain succinctly).  We're inclined to modify the tests so that
</span><br>
<span class="quotelev1">&gt;they're a little more social.  E.g., make decisions about how many of the
</span><br>
<span class="quotelev1">&gt;launched processes should &quot;really&quot; be used, idling some fraction of the
</span><br>
<span class="quotelev1">&gt;processes, and continuing the test only with the remaining fraction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Comments?
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
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
