<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 16:13:21 2015" -->
<!-- isoreceived="20151029201321" -->
<!-- sent="Thu, 29 Oct 2015 21:13:17 +0100" -->
<!-- isosent="20151029201317" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="56327DDD.8040702_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56327BB6.2080206_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 16:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/10/2015 21:04, Fabian Wein a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; If you're compiling Open MPI from source, you need the -devel package
</span><br>
<span class="quotelev2">&gt;&gt; so that the libnuma header files are installed (and therefore Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI [i.e., the hwloc embedded in Open MPI] can include those header
</span><br>
<span class="quotelev2">&gt;&gt; files and then compile support for libnuma).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I also test the numa capability via a hwloc command line tool? I
</span><br>
<span class="quotelev1">&gt; tried it also with configuring open-mpi to use my manually built
</span><br>
<span class="quotelev1">&gt; hwloc, it didn't change anything.
</span><br>
<p>If your hwloc was built without libnuma support, you will get the
<br>
following error:
<br>
<p>$ hwloc-bind --membind node:0 -- echo foo
<br>
hwloc_set_membind 0x0000000f failed (errno 38 Function not implemented)
<br>
<p><p>The summary at the very end of configur would also say:
<br>
<p>libnuma memory support:      no
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
