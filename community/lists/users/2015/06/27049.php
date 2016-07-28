<?
$subject_val = "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 11:27:48 2015" -->
<!-- isoreceived="20150608152748" -->
<!-- sent="Mon, 8 Jun 2015 15:27:45 +0000" -->
<!-- isosent="20150608152745" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations" -->
<!-- id="267FE9A5-E628-459E-8FDA-4F96388DAEAA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tZL_3kzYGhd_k-XAbggtj3XJO5CzQPPY7ugqHK7QCq4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 11:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2015, at 8:47 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i did not use the term &quot;pure&quot; properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please read instead &quot;posix_memalign is a function that does not modify any user variable&quot;
</span><br>
<span class="quotelev1">&gt; that assumption is correct when there is no wrapper, and incorrect in our case.
</span><br>
<p>My suggestion is to try to create a small reproducer program that we can send to the GCC folks with the claim that we believe it to be a buggy optimization.  Then we can see whether they agree and if not, how they defend that behavior.
<br>
<p>We probably still need a workaround for now though, and the &quot;volatile&quot; approach seems fine to me.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
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
