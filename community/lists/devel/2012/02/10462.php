<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 11:52:00 2012" -->
<!-- isoreceived="20120216165200" -->
<!-- sent="Thu, 16 Feb 2012 17:51:53 +0100" -->
<!-- isosent="20120216165153" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="4F3D3429.4050005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201202161712.59521.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 11:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10461.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/02/2012 17:12, Matthias Jurenz a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks for the hint, Brice.
</span><br>
<span class="quotelev1">&gt; I'll forward this bug report to our cluster vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be the reason for the bad latencies with Open MPI or does it only 
</span><br>
<span class="quotelev1">&gt; affect hwloc/lstopo?
</span><br>
<p>It affects binding. So it may affect the performance you observed when
<br>
using &quot;high-level&quot; binding policies that end up binding on wrong cores
<br>
because of hwloc/kernel problems. If you specify binding manually, it
<br>
shouldn't hurt.
<br>
<p>If the best latency case is supposed to be when L2 is shared, then try:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -np 1 hwloc-bind pu:0 ./all2all : -np 1 hwloc-bind pu:1
<br>
./all2all
<br>
Then, we'll see if you can get the same result with one of OMPI binding
<br>
options.
<br>
<p>Brice
<br>
<p><p><p><p><p><span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 16 February 2012 15:46:46 Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 16/02/2012 15:39, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the output of lstopo from a single compute node. I'm wondering that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fact of L1/L2 sharing isn't visible - also not in the graphical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output...
</span><br>
<span class="quotelev2">&gt;&gt; That's a kernel bug. We're waiting for AMD to tell the kernel that L1i
</span><br>
<span class="quotelev2">&gt;&gt; and L2 are shared across dual-core modules. If you have some contact at
</span><br>
<span class="quotelev2">&gt;&gt; AMD, please tell them to look at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10461.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
