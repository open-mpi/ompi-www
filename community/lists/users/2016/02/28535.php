<?
$subject_val = "Re: [OMPI users] readv failed How to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 19:04:03 2016" -->
<!-- isoreceived="20160216000403" -->
<!-- sent="Tue, 16 Feb 2016 09:03:58 +0900" -->
<!-- isosent="20160216000358" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readv failed How to debug?" -->
<!-- id="56C2676E.8080005_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56C2512A.2050703_at_txcorp.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 19:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28536.php">Diego Avesani: "[OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>Previous message:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28539.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John,
<br>
<p>the readv error is likely a consequence of the abort, and not the root 
<br>
cause of the issue.
<br>
<p>an obvious user error is if not all MPI tasks MPI_Bcast with non 
<br>
compatible signatures.
<br>
<p>coll/tuned module is known to be broken when using different but 
<br>
compatible signatures.
<br>
for example, one process MPI_Bcast one vector of N MPI_DOUBLE, and one 
<br>
other process MPI_Bcast N MPI_DOUBLE.
<br>
<p>you can try to
<br>
<p>mpirun --mca coll ^tuned ...
<br>
<p>and see if it helps
<br>
<p>fwiw, OpenMPI 1.6.5 is quite old nowadays...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 2/16/2016 7:28 AM, JR Cary wrote:
<br>
<span class="quotelev1">&gt; We have distributed a binary to a person with a Linux cluster. When
</span><br>
<span class="quotelev1">&gt; he runs our binary, he gets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [server1:10978] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [server1:10978] *** on communicator MPI COMMUNICATOR 8 DUP FROM 7
</span><br>
<span class="quotelev1">&gt; [server1:10978] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [server1:10978] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [server2][[14125,1],2][/..../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any ideas on how to debug this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks......John Cary
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28534.php">http://www.open-mpi.org/community/lists/users/2016/02/28534.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28536.php">Diego Avesani: "[OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>Previous message:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28534.php">JR Cary: "[OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28538.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28539.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
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
