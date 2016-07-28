<?
$subject_val = "Re: [OMPI devel] Deadlock on openib when using hindexed types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 07:59:18 2009" -->
<!-- isoreceived="20090904115918" -->
<!-- sent="Fri, 04 Sep 2009 07:59:13 -0400" -->
<!-- isosent="20090904115913" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlock on openib when using hindexed types" -->
<!-- id="4AA10111.6080405_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0909031636530.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlock on openib when using hindexed types<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 07:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Reply:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you are running into a bug that we saw also and we recently 
<br>
fixed.  We would see a hang when we were sending from a contiguous type 
<br>
to a non-contiguous type using a single port over openib.  The problem 
<br>
was that the state of the request on the sending side was not being 
<br>
properly updated in that case. The reason we see it with only one port 
<br>
vs two is because different protocols are used depending on the number 
<br>
of ports.
<br>
<p>Don Kerr found and fixed the problem in both the trunk and the branch.
<br>
<p>Trunk:      <a href="https://svn.open-mpi.org/trac/ompi/changeset/21775">https://svn.open-mpi.org/trac/ompi/changeset/21775</a>
<br>
1.3 Branch: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21833">https://svn.open-mpi.org/trac/ompi/changeset/21833</a>
<br>
<p>If you are running the latest bits and still seeing the problem, then I 
<br>
guess it is something else.
<br>
<p>Rolf
<br>
<p>On 09/04/09 04:40, Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're currently working with romio and we hit a problem when exchanging 
</span><br>
<span class="quotelev1">&gt; data with hindexed types with the openib btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached reproducer (adapted from romio) is working fine on tcp, 
</span><br>
<span class="quotelev1">&gt; blocks on openib when using 1 port but works if we use 2 ports (!). I 
</span><br>
<span class="quotelev1">&gt; tested it against the trunk and the 1.3.3 release with the same 
</span><br>
<span class="quotelev1">&gt; conclusions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The basic idea is : processes 0..3 send contiguous data to process 0. 0 
</span><br>
<span class="quotelev1">&gt; receives these buffers with an hindexed datatype which scatters data at 
</span><br>
<span class="quotelev1">&gt; different offsets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Receiving in a contiguous manner works, but receiving with an hindexed 
</span><br>
<span class="quotelev1">&gt; datatype makes the remote sends block. Yes, the remote send, not the 
</span><br>
<span class="quotelev1">&gt; receive. The receive is working fine and data is correctly scattered on 
</span><br>
<span class="quotelev1">&gt; the buffer, but the senders on the other node are stuck in the Wait().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried not using MPI_BOTTOM, which changed nothing. It seems that the 
</span><br>
<span class="quotelev1">&gt; problem only occurs when STRIPE*NB (the size of the send) is higher than 
</span><br>
<span class="quotelev1">&gt; 12k -namely the RDMA threshold- but I didn't manage to remove the 
</span><br>
<span class="quotelev1">&gt; deadlock by increasing the RDMA threshold.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried to do some debugging, but I'm a bit lost on where the 
</span><br>
<span class="quotelev1">&gt; non-contiguous types are handled and how they affect btl communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, if anyone has a clue on where I should look at, I'm interested !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Reply:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
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
