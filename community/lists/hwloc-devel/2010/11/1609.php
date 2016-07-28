<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 17:21:50 2010" -->
<!-- isoreceived="20101124222150" -->
<!-- sent="Wed, 24 Nov 2010 23:21:44 +0100" -->
<!-- isosent="20101124222144" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED8FF8.1030604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CED8CD6.6090408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 17:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/11/2010 23:08, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/24/2010 09:14 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Disable doxygen builds by default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree with Brice on this one; you should be using embedded mode to
</span><br>
<span class="quotelev2">&gt;&gt; disable a bunch of stuff by default. This will save you lots of
</span><br>
<span class="quotelev2">&gt;&gt; hassles; not just doxygen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question -- per prior email -- is: why not use
</span><br>
<span class="quotelev2">&gt;&gt; --disable-embedded-mode, and --disable-shared --enable-static? (vs.
</span><br>
<span class="quotelev2">&gt;&gt; patching) IIRC, I put --disable-embedded-mode there exactly for the
</span><br>
<span class="quotelev2">&gt;&gt; case of projects that want to embed but don't want to call our m4
</span><br>
<span class="quotelev2">&gt;&gt; directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use an AC_CONFIG_SUBDIR-style macro for launching the hwloc
</span><br>
<span class="quotelev1">&gt; configure (but slightly modified to do a sandbox-configure so we can
</span><br>
<span class="quotelev1">&gt; catch errors). So, the configure arguments come from what the user
</span><br>
<span class="quotelev1">&gt; specified. We have capability to internally add extra configure
</span><br>
<span class="quotelev1">&gt; arguments specifically for hwloc, but I was trying to avoid that.
</span><br>
<span class="quotelev1">&gt; Besides, other projects might not have the same macros that MPICH2 has.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With respect to using embedded mode, the reason is the same as above
</span><br>
<span class="quotelev1">&gt; -- if hwloc's configure fails, we don't want MPICH2's configure to
</span><br>
<span class="quotelev1">&gt; fail as well. Using a sandbox configure allows us to catch hwloc's
</span><br>
<span class="quotelev1">&gt; configure errors and disable it for cases where it doesn't work.
</span><br>
<p>Jeff knows more about this, but from I see in
<br>
tests/embedded/configure.ac, you can catch errors:
<br>
&nbsp;&nbsp;HWLOC_SETUP_CORE([hwloc], [hwloc_setup=happy], [hwloc_setup=unhappy])
<br>
and then do what you want depending on $hwloc_setup.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1610.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
