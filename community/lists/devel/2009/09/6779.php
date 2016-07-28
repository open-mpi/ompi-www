<?
$subject_val = "Re: [OMPI devel] Deadlock on openib when using hindexed types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:04:13 2009" -->
<!-- isoreceived="20090904150413" -->
<!-- sent="Fri, 4 Sep 2009 17:01:47 +0200 (CEST)" -->
<!-- isosent="20090904150147" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlock on openib when using hindexed types" -->
<!-- id="alpine.DEB.2.00.0909041657160.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0909041451480.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 11:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Previous message:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I was wrong, the fix works.
<br>
<p>Actually, I rebuilt with the latest trunk but openib support was somehow 
<br>
dropped. I was running on tcp.
<br>
<p>Which brings us to the next issue : tcp is actually not working (I don't 
<br>
know why I was convinced that tcp worked). The fix fixed the problem for 
<br>
openib, but if I'm not mistaken (again !) tcp still hangs.
<br>
<p>Sylvain
<br>
<p>On Fri, 4 Sep 2009, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was indeed running a more than 4 weeks old trunk, but after pulling the 
</span><br>
<span class="quotelev1">&gt; latest version (and checking the patch was in the code), it seems to make no 
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I know where to look at now, thanks !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 4 Sep 2009, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you are running into a bug that we saw also and we recently fixed. 
</span><br>
<span class="quotelev2">&gt;&gt; We would see a hang when we were sending from a contiguous type to a 
</span><br>
<span class="quotelev2">&gt;&gt; non-contiguous type using a single port over openib.  The problem was that 
</span><br>
<span class="quotelev2">&gt;&gt; the state of the request on the sending side was not being properly updated 
</span><br>
<span class="quotelev2">&gt;&gt; in that case. The reason we see it with only one port vs two is because 
</span><br>
<span class="quotelev2">&gt;&gt; different protocols are used depending on the number of ports.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don Kerr found and fixed the problem in both the trunk and the branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Trunk:      <a href="https://svn.open-mpi.org/trac/ompi/changeset/21775">https://svn.open-mpi.org/trac/ompi/changeset/21775</a>
</span><br>
<span class="quotelev2">&gt;&gt; 1.3 Branch: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21833">https://svn.open-mpi.org/trac/ompi/changeset/21833</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are running the latest bits and still seeing the problem, then I 
</span><br>
<span class="quotelev2">&gt;&gt; guess it is something else.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 09/04/09 04:40, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're currently working with romio and we hit a problem when exchanging 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data with hindexed types with the openib btl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached reproducer (adapted from romio) is working fine on tcp, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocks on openib when using 1 port but works if we use 2 ports (!). I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested it against the trunk and the 1.3.3 release with the same 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conclusions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The basic idea is : processes 0..3 send contiguous data to process 0. 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receives these buffers with an hindexed datatype which scatters data at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different offsets.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Receiving in a contiguous manner works, but receiving with an hindexed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype makes the remote sends block. Yes, the remote send, not the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive. The receive is working fine and data is correctly scattered on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the buffer, but the senders on the other node are stuck in the Wait().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried not using MPI_BOTTOM, which changed nothing. It seems that the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem only occurs when STRIPE*NB (the size of the send) is higher than 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12k -namely the RDMA threshold- but I didn't manage to remove the deadlock 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by increasing the RDMA threshold.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to do some debugging, but I'm a bit lost on where the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-contiguous types are handled and how they affect btl communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, if anyone has a clue on where I should look at, I'm interested !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Previous message:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- nextthread="start" -->
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
