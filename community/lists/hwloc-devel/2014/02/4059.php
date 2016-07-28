<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 05:52:24 2014" -->
<!-- isoreceived="20140213105224" -->
<!-- sent="Thu, 13 Feb 2014 11:52:14 +0100" -->
<!-- isosent="20140213105214" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52FCA3DE.4060509_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FC2457.4050903_at_citrix.com" -->
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
<strong>Date:</strong> 2014-02-13 05:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/02/2014 02:48, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev1">&gt; That's fantastic! I was expecting to have to attempt to code this up myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hereby present v4 of the series, available from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where the hwloc-xen-topology-v4 branch is now based on x86-common rather
</span><br>
<span class="quotelev1">&gt; than master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-support-experimental-v2 in the Xen tree now contains two changes. 
</span><br>
<span class="quotelev1">&gt; In addition to the *_bounced() functions, there is a new SYSCTL
</span><br>
<span class="quotelev1">&gt; hypercall for Xen to allow the toolstack to request execution of an
</span><br>
<span class="quotelev1">&gt; arbitrary cpuid instruction on a specific processor.  It seems to work
</span><br>
<span class="quotelev1">&gt; in each of the usecases I had before, and now provides substantially
</span><br>
<span class="quotelev1">&gt; more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that the new cpuid function call needs to be properly guarded
</span><br>
<span class="quotelev1">&gt; by the configure script; While the previous code was common to all Xen
</span><br>
<span class="quotelev1">&gt; architectures, the cpuid sysctl is very definitely x86 specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I just *rebased* and repushed the x86-common branch. You now need to
<br>
#ifdef HWLOC_HAVE_X86_CPUID before calling the cpuid function. I have
<br>
also cleaned the namespace (to avoid possible conflicts with non-x86
<br>
cpuid-similar functions in the future). So you should replace &quot;x86&quot; with
<br>
&quot;x86_cpuid&quot; in the function name and in the flags.
<br>
<p>Let me know if you see anything to change before I merge this into the
<br>
master branch.
<br>
<p>Where are you on your side? Your code looks fine to me, but there was
<br>
some discussion about switching to another xen lib, and some possible
<br>
issue with the API/ABI changing without version numbers to check against.
<br>
<p>Do you want to merge something in hwloc soon? I am thinking of releasing
<br>
hwloc v1.9 within one month or two. I am not against releasing the hwloc
<br>
Xen backend as long as we do not cause failures to build for many
<br>
people. If it's too hard, we could also keep it disabled by default
<br>
until hwloc v1.10?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4058.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4060.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
