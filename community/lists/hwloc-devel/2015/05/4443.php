<?
$subject_val = "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:34:14 2015" -->
<!-- isoreceived="20150512143414" -->
<!-- sent="Tue, 12 May 2015 16:34:12 +0200" -->
<!-- isosent="20150512143412" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition" -->
<!-- id="55520F64.9030408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1431439795-2068-1-git-send-email-peter_at_korsgaard.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 10:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
Unfortunately we likely have the same problem under utils/lstopo where
<br>
the exec-hook needs that dependency :/
<br>
(everything was under utils/ in the past, and the dependency was
<br>
duplicated when splitting into utils/lstopo and utils/hwloc)
<br>
<p>Brice
<br>
<p><p><p>Le 12/05/2015 16:09, Peter Korsgaard a &#233;crit :
<br>
<span class="quotelev1">&gt; Make install contains a race condition in utils/hwloc, as both
</span><br>
<span class="quotelev1">&gt; install-exec-hook (through intall-exec) and install-data trigger
</span><br>
<span class="quotelev1">&gt; install-man:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://autobuild.buildroot.net/results/414/41403f8ce4751a27dd1bb9c43f5a97895dea3980/build-end.log">http://autobuild.buildroot.net/results/414/41403f8ce4751a27dd1bb9c43f5a97895dea3980/build-end.log</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The install-exec-hook target doesn't do anything with the manual pages, so
</span><br>
<span class="quotelev1">&gt; fix the race condition by dropping the dependency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Peter Korsgaard &lt;peter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  utils/hwloc/Makefile.am | 2 +-
</span><br>
<span class="quotelev1">&gt;  1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/utils/hwloc/Makefile.am b/utils/hwloc/Makefile.am
</span><br>
<span class="quotelev1">&gt; index b7f78d3..f20e58c 100644
</span><br>
<span class="quotelev1">&gt; --- a/utils/hwloc/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/utils/hwloc/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -106,7 +106,7 @@ endif HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt;  	  -e 's/#HWLOC_DATE#/@HWLOC_RELEASE_DATE@/g' \
</span><br>
<span class="quotelev2">&gt;  	  &gt; $@ &lt; $&lt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -install-exec-hook: install-man
</span><br>
<span class="quotelev1">&gt; +install-exec-hook:
</span><br>
<span class="quotelev1">&gt;  	$(SED) -e 's/HWLOC_top_builddir\/utils\/hwloc/bindir/' -e 's/HWLOC_top_builddir\/utils\/lstopo/bindir/' -e '/HWLOC_top_builddir/d' $(DESTDIR)$(bindir)/hwloc-compress-dir &gt; $(DESTDIR)$(bindir)/hwloc-compress-dir.tmp &amp;&amp; mv -f $(DESTDIR)$(bindir)/hwloc-compress-dir.tmp $(DESTDIR)$(bindir)/hwloc-compress-dir
</span><br>
<span class="quotelev1">&gt;  	chmod +x $(DESTDIR)$(bindir)/hwloc-compress-dir
</span><br>
<span class="quotelev1">&gt;  if HWLOC_HAVE_LINUX
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
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
