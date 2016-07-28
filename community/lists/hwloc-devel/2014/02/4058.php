<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 20:48:09 2014" -->
<!-- isoreceived="20140213014809" -->
<!-- sent="Thu, 13 Feb 2014 01:48:07 +0000" -->
<!-- isosent="20140213014807" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52FC2457.4050903_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FA144B.2020808_at_inria.fr" -->
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
<strong>Date:</strong> 2014-02-12 20:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4057.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-81-g5e9ebe7)"</a>
<li><strong>In reply to:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/02/2014 12:15, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just pushed some changes to the new &quot;x86-common&quot; branch in hwloc's git.
</span><br>
<span class="quotelev1">&gt; You should be able to use it from the Xen component with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   hwloc_x86_discovery(topology, nbprocs /* total number of PUs */, HWLOC_X86_DISC_FLAG_CPUINFO|HWLOC_X86_DISC_FLAG_CACHES, func, data);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; func must be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int hwloc_x86_xen_cpuid(void *data, unsigned pu,
</span><br>
<span class="quotelev1">&gt;                             unsigned *eax, unsigned *ebx, unsigned *ecx, unsigned *edx)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   /* PU is the physical PU number */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; data will likely be the Xen handle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's fantastic! I was expecting to have to attempt to code this up myself.
<br>
<p>I hereby present v4 of the series, available from:
<br>
<p><a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4</a>
<br>
<a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2</a>
<br>
<p>Where the hwloc-xen-topology-v4 branch is now based on x86-common rather
<br>
than master.
<br>
<p>hwloc-support-experimental-v2 in the Xen tree now contains two changes. 
<br>
In addition to the *_bounced() functions, there is a new SYSCTL
<br>
hypercall for Xen to allow the toolstack to request execution of an
<br>
arbitrary cpuid instruction on a specific processor.  It seems to work
<br>
in each of the usecases I had before, and now provides substantially
<br>
more information.
<br>
<p>I suspect that the new cpuid function call needs to be properly guarded
<br>
by the configure script; While the previous code was common to all Xen
<br>
architectures, the cpuid sysctl is very definitely x86 specific.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4057.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-81-g5e9ebe7)"</a>
<li><strong>In reply to:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
