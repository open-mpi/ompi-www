<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 12:47:35 2014" -->
<!-- isoreceived="20140129174735" -->
<!-- sent="Wed, 29 Jan 2014 17:47:15 +0000" -->
<!-- isosent="20140129174715" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52E93EA3.3060703_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E9187D.6040800_at_inria.fr" -->
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
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 12:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4048.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-58-g5ef4bd1)"</a>
<li><strong>Previous message:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29/01/14 15:04, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I've been thinking about how to use the cpuid hypercall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now the x86 backend does
</span><br>
<span class="quotelev1">&gt; foreach proc
</span><br>
<span class="quotelev1">&gt;   bind on this proc
</span><br>
<span class="quotelev1">&gt;   do a lot of cpuid calls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would do instead
</span><br>
<span class="quotelev1">&gt; foreach proc
</span><br>
<span class="quotelev1">&gt;   cpuid hypercall on this proc
</span><br>
<p>One alternative is to intercept both the bind and cpuid function calls,
<br>
and have the Xen module remember which cpu was last bound to, and fill
<br>
in the appropriate hypercall.
<br>
<p>This would avoid any major restructuring of the code, if that were the
<br>
preferred way to go.
<br>
<p>Having said that...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we would
</span><br>
<span class="quotelev1">&gt; 1) add a cpuid(topology, cpu, inputbuffer, outputbuffer) hook pointer in
</span><br>
<span class="quotelev1">&gt; the topology structure
</span><br>
<span class="quotelev1">&gt; 2) have xen define that hook (using a new function since the topology
</span><br>
<span class="quotelev1">&gt; internals are not visible to plugins). It could be in the xen discover()
</span><br>
<span class="quotelev1">&gt; callback. Or it could be in the instantiate() callback if we want the
</span><br>
<span class="quotelev1">&gt; x86 backend to work when used before the xen backend. I think we just
</span><br>
<span class="quotelev1">&gt; have to be sure we don't enable that hook before we're sure the Xen
</span><br>
<span class="quotelev1">&gt; backend will work.
</span><br>
<span class="quotelev1">&gt; 3) when this hook is defined, the x86 backend doesn't need to bind
</span><br>
<span class="quotelev1">&gt; anymore, but it uses that cpuid hook instead of raw cpuid instructions.
</span><br>
<p>This would be nice, although it would involve some more selection on the
<br>
exclusions.  Currently, running Xen excludes all other cpu detection
<br>
methods as they are more likely than not to be wrong.
<br>
<p>One solution to this would be to have a &quot;generic&quot; x86 cpuid topology
<br>
generator which must be parametrised with a structure, at which point
<br>
both Xen and the fallback x86 methods can supply appropriate function
<br>
pointers.
<br>
<p>This would allow Xen to use the generic topology code while still
<br>
preventing fallback to the x86 topology detection method.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We may want to make inputbuffer and outputbuffer generic enough (void* +
</span><br>
<span class="quotelev1">&gt; length) so that the model works for other architectures one day? Xen
</span><br>
<span class="quotelev1">&gt; will know that they correspond to inputbuffer=one-register and
</span><br>
<span class="quotelev1">&gt; outputbuffer=four-registers when running on x86.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>As correctly indicated by Samuel, x86 cpuid already has ecx as an input
<br>
parameter for certain cpuid leaves. (cache information, xsave size
<br>
calculations)
<br>
<p>I would have though that cpuid is architecturally-specific enough that
<br>
just hard coding 4 input and output parameters would be sufficient.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4048.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-58-g5ef4bd1)"</a>
<li><strong>Previous message:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4050.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
