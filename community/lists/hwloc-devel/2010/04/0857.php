<?
$subject_val = "Re: [hwloc-devel] getting check failures on osx";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 21:33:41 2010" -->
<!-- isoreceived="20100402013341" -->
<!-- sent="Thu, 1 Apr 2010 21:33:35 -0400" -->
<!-- isosent="20100402013335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] getting check failures on osx" -->
<!-- id="2815B400-6A6D-4A8C-9843-7F7476E67B3D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EB8C328-DFD4-47F2-BB02-B5E159829601_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] getting check failures on osx<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 21:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Jeff Squyres: "[hwloc-devel] Kerrighed?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Jeff Squyres: "[hwloc-devel] getting check failures on osx"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Jeff Squyres: "[hwloc-devel] getting check failures on osx"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disregard -- upgrading to libxml2-2.7.7 on my mac fixed it (I did a port upgrade of something else today; my ports tree may have been inconsistent).
<br>
<p>All tests are passing now.
<br>
<p><p>On Apr 1, 2010, at 9:21 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; At the SVN trunk HEAD:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making check in xml
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; /Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58651 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
</span><br>
<span class="quotelev1">&gt; FAIL: 16amd64-8n2c-cpusets.xml
</span><br>
<span class="quotelev1">&gt; /Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58676 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
</span><br>
<span class="quotelev1">&gt; FAIL: 16em64t-4s2c2t.xml
</span><br>
<span class="quotelev1">&gt; /Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58700 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
</span><br>
<span class="quotelev1">&gt; FAIL: 16em64t-4s2c2t-offlines.xml
</span><br>
<span class="quotelev1">&gt; /Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58724 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
</span><br>
<span class="quotelev1">&gt; FAIL: 8em64t-2mi2ma2c.xml
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 4 of 4 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Jeff Squyres: "[hwloc-devel] Kerrighed?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Jeff Squyres: "[hwloc-devel] getting check failures on osx"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Jeff Squyres: "[hwloc-devel] getting check failures on osx"</a>
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
