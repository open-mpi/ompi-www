<?
$subject_val = "Re: [OMPI users] readv failed How to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 09:39:13 2016" -->
<!-- isoreceived="20160216143913" -->
<!-- sent="Tue, 16 Feb 2016 06:39:05 -0800" -->
<!-- isosent="20160216143905" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readv failed How to debug?" -->
<!-- id="56C33489.8040800_at_txcorp.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56C2676E.8080005_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] readv failed How to debug?<br>
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-16 09:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28540.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Gilles,
<br>
<p>Yes, this binary was built a few years ago.
<br>
<p>You mention a user error, but do you mean developer error?  I.e., it
<br>
would have to be in the code?
<br>
<p>What does &quot;--mca coll ^tuned&quot; do?
<br>
<p>Thx....John
<br>
<p>On 2/15/16 4:03 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the readv error is likely a consequence of the abort, and not the root 
</span><br>
<span class="quotelev1">&gt; cause of the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an obvious user error is if not all MPI tasks MPI_Bcast with non 
</span><br>
<span class="quotelev1">&gt; compatible signatures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll/tuned module is known to be broken when using different but 
</span><br>
<span class="quotelev1">&gt; compatible signatures.
</span><br>
<span class="quotelev1">&gt; for example, one process MPI_Bcast one vector of N MPI_DOUBLE, and one 
</span><br>
<span class="quotelev1">&gt; other process MPI_Bcast N MPI_DOUBLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can try to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll ^tuned ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see if it helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, OpenMPI 1.6.5 is quite old nowadays...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 2/16/2016 7:28 AM, JR Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have distributed a binary to a person with a Linux cluster. When
</span><br>
<span class="quotelev2">&gt;&gt; he runs our binary, he gets
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [server1:10978] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; [server1:10978] *** on communicator MPI COMMUNICATOR 8 DUP FROM 7
</span><br>
<span class="quotelev2">&gt;&gt; [server1:10978] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt;&gt; [server1:10978] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; [server2][[14125,1],2][/..../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone have any ideas on how to debug this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks......John Cary
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28534.php">http://www.open-mpi.org/community/lists/users/2016/02/28534.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28535.php">http://www.open-mpi.org/community/lists/users/2016/02/28535.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28540.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28535.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
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
