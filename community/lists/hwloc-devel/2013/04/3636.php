<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 16:26:58 2013" -->
<!-- isoreceived="20130423202658" -->
<!-- sent="Tue, 23 Apr 2013 22:26:51 +0200" -->
<!-- isosent="20130423202651" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="20130423202651.GI6807_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5176C0B3.3040009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 16:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 23 Apr 2013 19:12:08 +0200, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I assume that libtool doesn't add a rpath when you install in standard
</span><br>
<span class="quotelev1">&gt; directories?
</span><br>
<p>Yes, it's doing stuff to detect with paths are actually already in the
<br>
standard search dirs.
<br>
<p><span class="quotelev1">&gt; If /usr/lib64 is the default path for 64bits libs on Fedora, shouldn't somebody
</span><br>
<span class="quotelev1">&gt; take care of removing the corresponding rpath too?
</span><br>
<p>libtool should be already doing that.
<br>
<p><span class="quotelev1">&gt; This is likely related (but the reversed case) to the comment about Fedora in
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.debian.org/RpathIssue">http://wiki.debian.org/RpathIssue</a>. One link on that page says that rerunning
</span><br>
<span class="quotelev1">&gt; libtoolize before configure may help. Can you try that? (maybe compare the new
</span><br>
<span class="quotelev1">&gt; libtool script with the one from the hwloc tarball to check that some lib64
</span><br>
<span class="quotelev1">&gt; things appeared?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       &#226;&#150;&#161; If the application uses a local copy of libtool, add the following
</span><br>
<span class="quotelev1">&gt;         lines to the spec after&#194;&#160;%configure:=&gt; it will make tests FAIL (without
</span><br>
<span class="quotelev1">&gt;         this change, it runs just fine - all tests are PASSED)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     FAIL: test-hwloc-annotate.sh
</span><br>
<span class="quotelev1">&gt;     FAIL: test-hwloc-assembler.sh
</span><br>
<span class="quotelev1">&gt;     PASS: test-hwloc-calc.sh
</span><br>
<span class="quotelev1">&gt;     PASS: test-hwloc-distances.sh
</span><br>
<span class="quotelev1">&gt;     PASS: test-hwloc-distrib.sh
</span><br>
<span class="quotelev1">&gt;     FAIL: test-hwloc-info.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure why some fail while the other succeed. You may need to set
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH to fix this?
</span><br>
<p>The libtool script is supposed to automatically add it.
<br>
<p>It would probably be worth running by hand to see what actually fails.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3635.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
