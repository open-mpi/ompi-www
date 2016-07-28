<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 20:43:28 2014" -->
<!-- isoreceived="20140822004328" -->
<!-- sent="Thu, 21 Aug 2014 17:43:07 -0700" -->
<!-- isosent="20140822004307" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="ED89F41A-2176-46F1-B23F-7A3EA8AFC870_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140822005701.23bb41f0_at_antares" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 20:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think maybe I'm misunderstanding something. This shows that all 48 procs ran and terminated normally.
<br>
<p>From your earlier concerns, I would have expected only to find 32 of them running. Was that not the case in this run?
<br>
<p><p>On Aug 21, 2014, at 4:57 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Whoops, jumped the gun there before the process finished. I'm attaching
</span><br>
<span class="quotelev1">&gt; the new stderr output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...that's even weirder. It thinks it is going to start 48 procs,
</span><br>
<span class="quotelev2">&gt;&gt; and the binding pattern even looks right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hate to keep bothering you, but could you ensure this is a debug
</span><br>
<span class="quotelev2">&gt;&gt; build (i.e., was configured with --enable-debug), and then set -mca
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_verbose 5 --leave-session-attached on the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It'll be a little noisy, but should tell us why the other 16 procs
</span><br>
<span class="quotelev2">&gt;&gt; aren't getting launched
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2014, at 3:27 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How odd - can you run it with --display-devel-map and send that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; along? It will give us a detailed statement of where it thinks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything should run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure thing -- please find it attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;test.std.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15681.php">http://www.open-mpi.org/community/lists/devel/2014/08/15681.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15682.php">http://www.open-mpi.org/community/lists/devel/2014/08/15682.php</a>
</span><br>
<span class="quotelev1">&gt; &lt;test.ste.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15684.php">http://www.open-mpi.org/community/lists/devel/2014/08/15684.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15686.php">Christopher Samuel: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
