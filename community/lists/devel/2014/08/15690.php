<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 06:49:30 2014" -->
<!-- isoreceived="20140822104930" -->
<!-- sent="Fri, 22 Aug 2014 11:49:26 +0100" -->
<!-- isosent="20140822104926" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140822114926.226235e0_at_antares" -->
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
<strong>Date:</strong> 2014-08-22 06:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I generated a video that demonstrates the problem; for brevity I did
<br>
not run a full process, but I'm providing the timing below. If you'd
<br>
like me to record a full process, just let me know -- but as I said in
<br>
my previous email, 32 procs drop to 1 after about a minute and the
<br>
computation then rests on a single processor to complete the job.
<br>
<p>With openmpi-1.6.5:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real	1m13.186s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user	0m0.044s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys	0m0.059s
<br>
<p>With openmpi-1.8.2rc4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real	13m42.998s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user	0m0.070s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys	0m0.066s
<br>
<p>Exact invocation both times, exact same job submitted. Here's a link to
<br>
the video:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://clusty.ast.villanova.edu/aprsa/files/test.ogv">http://clusty.ast.villanova.edu/aprsa/files/test.ogv</a>
<br>
<p>Please let me know if I can provide you with anything further.
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
<li><strong>Next message:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
