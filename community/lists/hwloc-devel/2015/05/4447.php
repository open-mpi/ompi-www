<?
$subject_val = "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 14:49:09 2015" -->
<!-- isoreceived="20150512184909" -->
<!-- sent="Tue, 12 May 2015 20:49:05 +0200" -->
<!-- isosent="20150512184905" -->
<!-- name="Peter Korsgaard" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition" -->
<!-- id="87egmlhbry.fsf_at_dell.be.48ers.dk" -->
<!-- inreplyto="55523B88.1050808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition<br>
<strong>From:</strong> Peter Korsgaard (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 14:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4448.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-572-gf08f462)"</a>
<li><strong>Previous message:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Brice&quot; == Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; writes:
</span><br>
<p>Hi,
<br>
<p><span class="quotelev1"> &gt; For utils/lstopo, we really need the hook to run after install-man. I
</span><br>
<span class="quotelev1"> &gt; think we can use install-data-hook instead, it generates the following code:
</span><br>
<p><span class="quotelev1"> &gt; install-data: install-data-am
</span><br>
<p><span class="quotelev1"> &gt; install-data-am: install-dist_APPLICATIONSDATA install-man
</span><br>
<span class="quotelev1"> &gt;         @$(NORMAL_INSTALL)
</span><br>
<span class="quotelev1"> &gt;         $(MAKE) $(AM_MAKEFLAGS) install-data-hook
</span><br>
<p><span class="quotelev1"> &gt; Looks like it's officially documented that install-data depends on
</span><br>
<span class="quotelev1"> &gt; install-man, so things should just work like this? (patch below)
</span><br>
<p>Yes, looks sensible to me.
<br>
<p><pre>
-- 
Venlig hilsen,
Peter Korsgaard 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4448.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-572-gf08f462)"</a>
<li><strong>Previous message:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4446.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
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
