<?
$subject_val = "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:46:20 2015" -->
<!-- isoreceived="20150512144620" -->
<!-- sent="Tue, 12 May 2015 16:46:05 +0200" -->
<!-- isosent="20150512144605" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition" -->
<!-- id="20150512144605.GB15528_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 10:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter Korsgaard, le Tue 12 May 2015 16:09:55 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Make install contains a race condition in utils/hwloc, as both
</span><br>
<span class="quotelev1">&gt; install-exec-hook (through intall-exec) and install-data trigger
</span><br>
<span class="quotelev1">&gt; install-man:
</span><br>
<p>I'm surprised: isn't make supposed to handle this kind of dependency
<br>
concurrency?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Peter Korsgaard: "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4445.php">Peter Korsgaard: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
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
