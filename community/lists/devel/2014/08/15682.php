<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 18:31:59 2014" -->
<!-- isoreceived="20140821223159" -->
<!-- sent="Thu, 21 Aug 2014 15:31:38 -0700" -->
<!-- isosent="20140821223138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="4846A1EB-9097-4922-8F6A-2DEB2CCEB252_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140821232751.27c8f153_at_antares" -->
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
<strong>Date:</strong> 2014-08-21 18:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...that's even weirder. It thinks it is going to start 48 procs, and the binding pattern even looks right.
<br>
<p>Hate to keep bothering you, but could you ensure this is a debug build (i.e., was configured with --enable-debug), and then set -mca odls_base_verbose 5 --leave-session-attached on the cmd line?
<br>
<p>It'll be a little noisy, but should tell us why the other 16 procs aren't getting launched
<br>
<p><p>On Aug 21, 2014, at 3:27 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; How odd - can you run it with --display-devel-map and send that
</span><br>
<span class="quotelev2">&gt;&gt; along? It will give us a detailed statement of where it thinks
</span><br>
<span class="quotelev2">&gt;&gt; everything should run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure thing -- please find it attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; &lt;test.std.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15681.php">http://www.open-mpi.org/community/lists/devel/2014/08/15681.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15683.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
