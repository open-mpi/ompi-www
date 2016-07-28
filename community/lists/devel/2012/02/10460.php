<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 11:13:05 2012" -->
<!-- isoreceived="20120216161305" -->
<!-- sent="Thu, 16 Feb 2012 17:12:59 +0100" -->
<!-- isosent="20120216161259" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202161712.59521.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F3D16D6.8090109_at_inria.fr" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 11:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10461.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the hint, Brice.
<br>
I'll forward this bug report to our cluster vendor.
<br>
<p>Could this be the reason for the bad latencies with Open MPI or does it only 
<br>
affect hwloc/lstopo?
<br>
<p>Matthias
<br>
<p>On Thursday 16 February 2012 15:46:46 Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 16/02/2012 15:39, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Here the output of lstopo from a single compute node. I'm wondering that
</span><br>
<span class="quotelev2">&gt; &gt; the fact of L1/L2 sharing isn't visible - also not in the graphical
</span><br>
<span class="quotelev2">&gt; &gt; output...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a kernel bug. We're waiting for AMD to tell the kernel that L1i
</span><br>
<span class="quotelev1">&gt; and L2 are shared across dual-core modules. If you have some contact at
</span><br>
<span class="quotelev1">&gt; AMD, please tell them to look at
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10461.php">Matthias Jurenz: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10459.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10454.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
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
