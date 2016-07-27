<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 07:15:10 2014" -->
<!-- isoreceived="20140211121510" -->
<!-- sent="Tue, 11 Feb 2014 13:15:07 +0100" -->
<!-- isosent="20140211121507" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52FA144B.2020808_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52ECCB40.5020208_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 07:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4057.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-81-g5e9ebe7)"</a>
<li><strong>Previous message:</strong> <a href="4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>In reply to:</strong> <a href="4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just pushed some changes to the new &quot;x86-common&quot; branch in hwloc's git.
<br>
You should be able to use it from the Xen component with:
<br>
<p>&nbsp;&nbsp;hwloc_x86_discovery(topology, nbprocs /* total number of PUs */, HWLOC_X86_DISC_FLAG_CPUINFO|HWLOC_X86_DISC_FLAG_CACHES, func, data);
<br>
<p><p>func must be something like:
<br>
<p>static int hwloc_x86_xen_cpuid(void *data, unsigned pu,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned *eax, unsigned *ebx, unsigned *ecx, unsigned *edx)
<br>
{
<br>
&nbsp;&nbsp;/* PU is the physical PU number */
<br>
}
<br>
<p><p>data will likely be the Xen handle.
<br>
<p>Brice
<br>
<p><p><p><p><p><p>Le 01/02/2014 11:24, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 29/01/2014 18:47, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; This would be nice, although it would involve some more selection on the
</span><br>
<span class="quotelev2">&gt;&gt; exclusions.  Currently, running Xen excludes all other cpu detection
</span><br>
<span class="quotelev2">&gt;&gt; methods as they are more likely than not to be wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One solution to this would be to have a &quot;generic&quot; x86 cpuid topology
</span><br>
<span class="quotelev2">&gt;&gt; generator which must be parametrised with a structure, at which point
</span><br>
<span class="quotelev2">&gt;&gt; both Xen and the fallback x86 methods can supply appropriate function
</span><br>
<span class="quotelev2">&gt;&gt; pointers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would allow Xen to use the generic topology code while still
</span><br>
<span class="quotelev2">&gt;&gt; preventing fallback to the x86 topology detection method.
</span><br>
<span class="quotelev1">&gt; Right, that'd work better, and the code would be nicer.
</span><br>
<span class="quotelev1">&gt; I'll look at this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4057.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-81-g5e9ebe7)"</a>
<li><strong>Previous message:</strong> <a href="4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>In reply to:</strong> <a href="4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
