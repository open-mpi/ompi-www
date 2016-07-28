<?
$subject_val = "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 00:45:14 2015" -->
<!-- isoreceived="20150609044514" -->
<!-- sent="Tue, 9 Jun 2015 13:45:13 +0900" -->
<!-- isosent="20150609044513" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations" -->
<!-- id="CAAkFZ5s4i=LZB0WRgvu2me4puYzp3LmuU6NeFTq9ZaEfB4GXvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5021E3AB-6171-4CD0-9DC1-594DAAD07F96_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 00:45:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i wrote a reproducer i sent to the GCC folks
<br>
<a href="https://gcc.gnu.org/ml/gcc-bugs/2015-06/msg00757.html">https://gcc.gnu.org/ml/gcc-bugs/2015-06/msg00757.html</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Jun 9, 2015 at 3:20 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 8, 2015, at 11:27 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My suggestion is to try to create a small reproducer program that we can send to the GCC folks with the claim that we believe it to be a buggy optimization.  Then we can see whether they agree and if not, how they defend that behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We probably still need a workaround for now though, and the &quot;volatile&quot; approach seems fine to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27051.php">http://www.open-mpi.org/community/lists/users/2015/06/27051.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
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
