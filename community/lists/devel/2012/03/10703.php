<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 15:16:57 2012" -->
<!-- isoreceived="20120309201657" -->
<!-- sent="Fri, 9 Mar 2012 15:16:52 -0500" -->
<!-- isosent="20120309201652" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="A450C9D0-F6B0-4D22-99E7-C69765F70D30_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203091127080.711_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 15:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10704.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10702.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10700.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10707.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Depending on the timing, this might go to 1.6 (1.5.5 has waited for too long, and this is not a regression).  Keep in mind that the problem has been around for *a long, long time*, which is why I approved the diag message (i.e., because a real solution is still nowhere in sight).  The real issue is that we can still run out of registered memory *and there is nothing left to deregister*.  The real solution there is that the PML should fall back to a different protocol, but I'm told that doesn't happen and will require a bunch of work to make work properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An mpool that is aware of local processes lru's will solve the problem in most cases (all that I have seen) but yes, we need to rework the pml to handle the remaining cases. There are two things that need to be changed (from what I can tell):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1) allow rget to fallback to send/put depending on the failure (I have fallback on put implemented in my branch-- and in my btl).
</span><br>
<span class="quotelev1">&gt;  2) need to devise new criteria on when we should progress the rdma_pending list to avoid deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1  is fairly simple and I haven't given much though to #2.
</span><br>
<p><p>But #1 will be good start in right direction.Agree about #2.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="10704.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10702.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10700.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10707.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
