<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 08:17:24 2014" -->
<!-- isoreceived="20140823121724" -->
<!-- sent="Sat, 23 Aug 2014 12:17:23 +0000" -->
<!-- isosent="20140823121723" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="E71F6A91-6A1F-4038-AF60-BEAE87DC1460_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140822114926.226235e0_at_antares" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-23 08:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15700.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>In reply to:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The video you provided was most helpful -- thank you!
<br>
<p>I confirm that the hwloc message you sent (and your posts to the hwloc-users list) indicate that hwloc is getting confused by a buggy BIOS, but it's only dealing with the L3 cache, and that shouldn't affect the binding that OMPI is doing.
<br>
<p>Can I ask you to do two more tests:
<br>
<p>1. Run with &quot;--report-bindings&quot; and send the output.  It'll prettyprint-render where OMPI thinks it is binding each process.  Ralph asked you to run a few test already, and the output you sent may simply confirm what you sent previously, but he's more of an ORTE expert than I am -- the --reporting-bindings output shows easily parseable output for the rest of us.  :-)
<br>
<p>2. Run with &quot;--bind-to none&quot; and see if that helps.  I.e., if, per #1, OMPI thinks it is binding correctly (i.e., each of the 48 processes is being bound to a unique core), then perhaps hwloc is doing something wrong in the actual binding (i.e., binding the 48 processes only among the lower 32 cores).
<br>
<p><p><p>On Aug 22, 2014, at 6:49 AM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I generated a video that demonstrates the problem; for brevity I did
</span><br>
<span class="quotelev1">&gt; not run a full process, but I'm providing the timing below. If you'd
</span><br>
<span class="quotelev1">&gt; like me to record a full process, just let me know -- but as I said in
</span><br>
<span class="quotelev1">&gt; my previous email, 32 procs drop to 1 after about a minute and the
</span><br>
<span class="quotelev1">&gt; computation then rests on a single processor to complete the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With openmpi-1.6.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	real	1m13.186s
</span><br>
<span class="quotelev1">&gt; 	user	0m0.044s
</span><br>
<span class="quotelev1">&gt; 	sys	0m0.059s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With openmpi-1.8.2rc4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	real	13m42.998s
</span><br>
<span class="quotelev1">&gt; 	user	0m0.070s
</span><br>
<span class="quotelev1">&gt; 	sys	0m0.066s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exact invocation both times, exact same job submitted. Here's a link to
</span><br>
<span class="quotelev1">&gt; the video:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://clusty.ast.villanova.edu/aprsa/files/test.ogv">http://clusty.ast.villanova.edu/aprsa/files/test.ogv</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if I can provide you with anything further.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah, that sheds some light. There is indeed a significant change
</span><br>
<span class="quotelev2">&gt;&gt; between earlier releases and the 1.8.1 and above that might explain
</span><br>
<span class="quotelev2">&gt;&gt; what he is seeing. Specifically, we no longer hammer the cpu while in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize. So if 16 of the procs are finishing early (which the
</span><br>
<span class="quotelev2">&gt;&gt; output would suggest), then they will go into a &quot;lazy&quot; finalize state
</span><br>
<span class="quotelev2">&gt;&gt; while they wait for the rest of the procs to complete their work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In contrast, prior releases would continue at 100% cpu while they
</span><br>
<span class="quotelev2">&gt;&gt; polled to see if the other procs were done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We did this to help save power/energy, and because users had asked
</span><br>
<span class="quotelev2">&gt;&gt; why the cpu utilization remained at 100% even though procs were
</span><br>
<span class="quotelev2">&gt;&gt; waiting in finalize
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2014, at 5:55 PM, Christopher Samuel
</span><br>
<span class="quotelev2">&gt;&gt; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 22/08/14 10:43, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From your earlier concerns, I would have expected only to find 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of them running. Was that not the case in this run?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I understand it in his original email he mentioned that with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.5 all 48 processes were running at 100% CPU and was wondering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the buggy BIOS that caused hwloc the issues he reported on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users list might be the cause for this regression in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15686.php">http://www.open-mpi.org/community/lists/devel/2014/08/15686.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15687.php">http://www.open-mpi.org/community/lists/devel/2014/08/15687.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15690.php">http://www.open-mpi.org/community/lists/devel/2014/08/15690.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15700.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15698.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>In reply to:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
