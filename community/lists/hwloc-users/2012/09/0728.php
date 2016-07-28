<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 10:36:24 2012" -->
<!-- isoreceived="20120919143624" -->
<!-- sent="Wed, 19 Sep 2012 16:36:20 +0200" -->
<!-- isosent="20120919143620" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="20120919143620.GC5547_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJNPZUXrfsgaTUkrLOtYCvZ_F1Z0gv2wwCe+XYyn2BdqUM7rCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-19 10:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/10/0729.php">Sebastian Kuzminsky: "[hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Anyway, having 65000 mempolicies in use is a lot. And that would somehow
</span><br>
<span class="quotelev1">&gt;     correspond to the number of set_area_membind that succeeed before one
</span><br>
<span class="quotelev1">&gt;     fails. So the kernel might indeed fail to merge those.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     That said, these objects are small (24bytes here if I am reading things
</span><br>
<span class="quotelev1">&gt;     correctly), so we're talking about 1,6MB only here. So there's still
</span><br>
<span class="quotelev1">&gt;     something else eating all the memory. /proc/meminfo (MemFree) and numactl
</span><br>
<span class="quotelev1">&gt;     -H should again help.
</span><br>
<p>Gabriele Fatigati, le Fri 07 Sep 2012 09:45:55 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Are you able to reproduce the error using my attached code?&#160;
</span><br>
<p>Indeed, and numactl -H shows that memory *is* available. So I guess that
<br>
we are actually hitting some limitation in the kernel structures.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/10/0729.php">Sebastian Kuzminsky: "[hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
