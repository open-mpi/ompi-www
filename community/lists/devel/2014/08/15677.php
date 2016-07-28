<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 15:51:00 2014" -->
<!-- isoreceived="20140821195100" -->
<!-- sent="Thu, 21 Aug 2014 12:50:40 -0700" -->
<!-- isosent="20140821195040" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="504276C8-F392-4BDE-A428-287915E9AA38_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140821204514.6075028e_at_antares" -->
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
<strong>Date:</strong> 2014-08-21 15:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15676.php">Andrej Prsa: "[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15676.php">Andrej Prsa: "[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting early in the 1.7 series, we began to bind procs by default to cores when -np &lt;= 2, and to sockets if np &gt; 2. Is it possible this is what you are seeing?
<br>
<p><p>On Aug 21, 2014, at 12:45 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear devels,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been trying out 1.8.2rcs recently and found a show-stopping
</span><br>
<span class="quotelev1">&gt; problem on our cluster. Running any job with any number of processors
</span><br>
<span class="quotelev1">&gt; larger than 32 will always employ only 32 cores per node (our nodes
</span><br>
<span class="quotelev1">&gt; have 48 cores). We are seeing identical behavior with 1.8.2rc4,
</span><br>
<span class="quotelev1">&gt; 1.8.2rc2, and 1.8.1. Running identical programs shows no such issues
</span><br>
<span class="quotelev1">&gt; with version 1.6.5, where all 48 cores per node are working. While our
</span><br>
<span class="quotelev1">&gt; system is running torque/maui, the problem is evident by running mpirun
</span><br>
<span class="quotelev1">&gt; directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attaching hwloc topology in case that helps -- I am aware of a
</span><br>
<span class="quotelev1">&gt; buggy bios code that trips hwloc, but I don't know if that might be an
</span><br>
<span class="quotelev1">&gt; issue or not. I am happy to help debugging if you can provide me with
</span><br>
<span class="quotelev1">&gt; guidance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; &lt;cluster.output&gt;&lt;cluster.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15676.php">http://www.open-mpi.org/community/lists/devel/2014/08/15676.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15676.php">Andrej Prsa: "[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15676.php">Andrej Prsa: "[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
