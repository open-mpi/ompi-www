<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 03:26:14 2014" -->
<!-- isoreceived="20140822072614" -->
<!-- sent="Fri, 22 Aug 2014 08:26:11 +0100" -->
<!-- isosent="20140822072611" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140822082611.530e794a_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0DCF095-2B59-45B3-96F7-7B349F149C28_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 03:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, Chris,
<br>
<p>You guys are both correct:
<br>
<p>(1) The output that I passed along /is/ exemplary of only 32 processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;running (provided htop reports things correctly). The job I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;submitted is the exact same process called 48 times (well, np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;times), so all procs should take about the same time, ~1 minute.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The execution is notably slower than with 1.6.5 (I will time it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shortly, but offhand I'd say it's ~5x slower), and it seems that,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for the fraction of the time, 32 processors do all the work, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;then 1 processor finishes the remaining work -- i.e. htop shows 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;procs working, 16 idling, then 32 goes down to 1 and stays that way
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for a while, then it drops to 0 and the job finishes. This behavior
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is apparent in /all/ mpi jobs, not just this particular test case.
<br>
<p>(2) I suspected that hwloc might be a culprit; before I posted here, I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reported it on hwloc mailing list, where I was told that it seems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to be a cache reporting problem and that I should be fine ignoring
<br>
&nbsp;&nbsp;&nbsp;&nbsp;it, or that I should load the topology from XML. I figured I'd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mention the buggy bios in my first post just in case it rang any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bells.
<br>
<p>Is there a way to add timestamps to the debug output? That may
<br>
demonstrate better what I'm trying to say in (1) above.
<br>
<p>If it helps, I'd be more than happy to provide access to the affected
<br>
machine so that you can see what's going on first hand, or capture a
<br>
small movie of htop while the process is running.
<br>
<p>Thanks,
<br>
Andrej
<br>
<p><span class="quotelev1">&gt; Ah, that sheds some light. There is indeed a significant change
</span><br>
<span class="quotelev1">&gt; between earlier releases and the 1.8.1 and above that might explain
</span><br>
<span class="quotelev1">&gt; what he is seeing. Specifically, we no longer hammer the cpu while in
</span><br>
<span class="quotelev1">&gt; MPI_Finalize. So if 16 of the procs are finishing early (which the
</span><br>
<span class="quotelev1">&gt; output would suggest), then they will go into a &quot;lazy&quot; finalize state
</span><br>
<span class="quotelev1">&gt; while they wait for the rest of the procs to complete their work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast, prior releases would continue at 100% cpu while they
</span><br>
<span class="quotelev1">&gt; polled to see if the other procs were done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We did this to help save power/energy, and because users had asked
</span><br>
<span class="quotelev1">&gt; why the cpu utilization remained at 100% even though procs were
</span><br>
<span class="quotelev1">&gt; waiting in finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 5:55 PM, Christopher Samuel
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 22/08/14 10:43, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From your earlier concerns, I would have expected only to find 32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of them running. Was that not the case in this run?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I understand it in his original email he mentioned that with
</span><br>
<span class="quotelev2">&gt; &gt; 1.6.5 all 48 processes were running at 100% CPU and was wondering
</span><br>
<span class="quotelev2">&gt; &gt; if the buggy BIOS that caused hwloc the issues he reported on the
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users list might be the cause for this regression in
</span><br>
<span class="quotelev2">&gt; &gt; performance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; All the best,
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15686.php">http://www.open-mpi.org/community/lists/devel/2014/08/15686.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15687.php">http://www.open-mpi.org/community/lists/devel/2014/08/15687.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
