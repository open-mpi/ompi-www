<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 25 03:09:01 2008" -->
<!-- isoreceived="20081025070901" -->
<!-- sent="Sat, 25 Oct 2008 12:38:57 +0530" -->
<!-- isosent="20081025070857" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="cb60cbc40810250008y34ee043fv71280c347d25c6c5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40810250003j75302970lf8dad436cfd3dff7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-25 03:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7092.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7092.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct 25, 2008 at 12:33 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Oct 24, 2008 at 11:26 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh B wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reinstalled all softwares with -O3 optimization. Following are the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance numbers for a 4 process job on a single node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2:     26 m 54 s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI:   24 m 39 s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I'm following.  OMPI is faster here, but is that a result of
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 slowing down?  The original post at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/10/6891.php">http://www.open-mpi.org/community/lists/users/2008/10/6891.php</a> had:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 - 15 m 53 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, did MPICH2 slow down, or can one not compare these timings?
</span><br>
No. Initial benchmark result was on 2 nodes. Later the benchmark was
<br>
done on only one node.
<br>
&nbsp;OpenMPI - 25 m 39 s.
<br>
&nbsp;MPICH2 - 15 m 53 s.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This job is run with 8 processes i.e. on 2 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;MPICH2:     26 m 54 s
<br>
&nbsp;OpenMPI:   24 m 39 s
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This job is run with 4 processes i.e. on 1 node
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7092.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7092.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6920.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
