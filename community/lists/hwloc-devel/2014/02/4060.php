<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 06:03:38 2014" -->
<!-- isoreceived="20140213110338" -->
<!-- sent="Thu, 13 Feb 2014 11:03:37 +0000" -->
<!-- isosent="20140213110337" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52FCA689.2000301_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FCA3DE.4060509_at_inria.fr" -->
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
<strong>Date:</strong> 2014-02-13 06:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13/02/14 10:52, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 13/02/2014 02:48, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; That's fantastic! I was expecting to have to attempt to code this up myself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hereby present v4 of the series, available from:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v4</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=shortlog;h=refs/heads/hwloc-support-experimental-v2</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where the hwloc-xen-topology-v4 branch is now based on x86-common rather
</span><br>
<span class="quotelev2">&gt;&gt; than master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-support-experimental-v2 in the Xen tree now contains two changes. 
</span><br>
<span class="quotelev2">&gt;&gt; In addition to the *_bounced() functions, there is a new SYSCTL
</span><br>
<span class="quotelev2">&gt;&gt; hypercall for Xen to allow the toolstack to request execution of an
</span><br>
<span class="quotelev2">&gt;&gt; arbitrary cpuid instruction on a specific processor.  It seems to work
</span><br>
<span class="quotelev2">&gt;&gt; in each of the usecases I had before, and now provides substantially
</span><br>
<span class="quotelev2">&gt;&gt; more information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that the new cpuid function call needs to be properly guarded
</span><br>
<span class="quotelev2">&gt;&gt; by the configure script; While the previous code was common to all Xen
</span><br>
<span class="quotelev2">&gt;&gt; architectures, the cpuid sysctl is very definitely x86 specific.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I just *rebased* and repushed the x86-common branch. You now need to
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_X86_CPUID before calling the cpuid function. I have
</span><br>
<span class="quotelev1">&gt; also cleaned the namespace (to avoid possible conflicts with non-x86
</span><br>
<span class="quotelev1">&gt; cpuid-similar functions in the future). So you should replace &quot;x86&quot; with
</span><br>
<span class="quotelev1">&gt; &quot;x86_cpuid&quot; in the function name and in the flags.
</span><br>
<p>I will take a look at rebasing on top of your rebase, but probably
<br>
tomorrow at this rate.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you see anything to change before I merge this into the
</span><br>
<span class="quotelev1">&gt; master branch.
</span><br>
<p>Will do.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where are you on your side? Your code looks fine to me, but there was
</span><br>
<span class="quotelev1">&gt; some discussion about switching to another xen lib, and some possible
</span><br>
<span class="quotelev1">&gt; issue with the API/ABI changing without version numbers to check against.
</span><br>
<p>Still pending.  Xen is currently on code freeze pending the release of
<br>
Xen-4.4 so my changes arn't going anywhere immediately.  Following that,
<br>
there is no grantee my changes will be accepted in their current form,
<br>
so more work might be needed when xen-unstable opens up again.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want to merge something in hwloc soon?
</span><br>
<p>Would you mind merging your two patches that I am carrying?
<br>
<p>&quot;plugins: export hwloc_alloc_root_sets()&quot;
<br>
&quot;plugins: cleanup hwloc_setup_pu_level() and export it to plugins&quot;
<br>
<p>Neither of them are explicitly Xen specific, and from a lazy point of
<br>
view it would be nicer to have a sorter branch to look after.  (I am
<br>
fairly sure I have rebased them properly going forwards over the other
<br>
changes recently)
<br>
<p><span class="quotelev1">&gt;  I am thinking of releasing
</span><br>
<span class="quotelev1">&gt; hwloc v1.9 within one month or two. I am not against releasing the hwloc
</span><br>
<span class="quotelev1">&gt; Xen backend as long as we do not cause failures to build for many
</span><br>
<span class="quotelev1">&gt; people. If it's too hard, we could also keep it disabled by default
</span><br>
<span class="quotelev1">&gt; until hwloc v1.10?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Until the library and hypervisor support is present in Xen-unstable,
<br>
releasing anything in hwloc seems premature.  Getting anything properly
<br>
sorted for v1.9 seems unlikely, but v1.10 seems reasonable.  I will of
<br>
course keep my xen and hwlock trees with working code in, so people can
<br>
play if they wish.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
