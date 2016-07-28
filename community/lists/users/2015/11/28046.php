<?
$subject_val = "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 08:10:01 2015" -->
<!-- isoreceived="20151118131001" -->
<!-- sent="Wed, 18 Nov 2015 14:09:56 +0100" -->
<!-- isosent="20151118130956" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer" -->
<!-- id="564C78A4.3090001_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5616340C.6090606_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-18 08:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28045.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27842.php">&#195;&#133;ke Sandgren: "[OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did anyone take notice of this?
<br>
<p>I haven't seen any respons.
<br>
<p>On 10/08/2015 11:14 AM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached code shows a problem when using mmap:ed buffer with
</span><br>
<span class="quotelev1">&gt; MPI_Send and vader btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With OMPI_MCA_btl='^vader' it works in all cases i have tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel MPI also have problems with this, failing to receive the complete
</span><br>
<span class="quotelev1">&gt; data, getting a NULL at position 6116 when the receiver is on another node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Haven't had time to build 1.10 yet...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27842.php">http://www.open-mpi.org/community/lists/users/2015/10/27842.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28047.php">Ibrahim Ikhlawi: "[OMPI users] mpijavac doesn't compile any thing"</a>
<li><strong>Previous message:</strong> <a href="28045.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27842.php">&#195;&#133;ke Sandgren: "[OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
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
