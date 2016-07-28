<?
$subject_val = "Re: [OMPI users] Crash in _int_malloc via MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 15 15:53:44 2008" -->
<!-- isoreceived="20080615195344" -->
<!-- sent="Sun, 15 Jun 2008 15:53:20 -0400" -->
<!-- isosent="20080615195320" -->
<!-- name="Andreas Kl&#195;&#182;ckner" -->
<!-- email="lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crash in _int_malloc via MPI_Init" -->
<!-- id="200806151553.23126.lists_at_informa.tiker.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="200805141408.54940.lists_at_informa.tiker.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crash in _int_malloc via MPI_Init<br>
<strong>From:</strong> Andreas Kl&#195;&#182;ckner (<em>lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-15 15:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5668.php">Andreas Kl&#195;&#182;ckner: "[OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mittwoch 14 Mai 2008, Andreas Kl&#195;&#182;ckner wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to put this crash bug [1] that Sam Adams pointed out back on
</span><br>
<span class="quotelev1">&gt; the radar--I ran into this, and there's also an Ubuntu bug [2] (which also
</span><br>
<span class="quotelev1">&gt; contains my stack trace).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody have an idea what could cause this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.open-mpi.org/community/lists/users/2007/08/3844.php">http://www.open-mpi.org/community/lists/users/2007/08/3844.php</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="https://bugs.launchpad.net/bugs/210273">https://bugs.launchpad.net/bugs/210273</a>
</span><br>
<p>Dirk Eddelbuettel has pinpointed this to (likely) be a binutils issue (in 
<br>
Ubuntu, among others, not in Debian)
<br>
<p>See <a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
<br>
<p>Andreas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5668.php">Andreas Kl&#195;&#182;ckner: "[OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
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
