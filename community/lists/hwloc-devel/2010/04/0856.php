<?
$subject_val = "[hwloc-devel] getting check failures on osx";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 21:21:09 2010" -->
<!-- isoreceived="20100402012109" -->
<!-- sent="Thu, 1 Apr 2010 21:21:03 -0400" -->
<!-- isosent="20100402012103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] getting check failures on osx" -->
<!-- id="8EB8C328-DFD4-47F2-BB02-B5E159829601_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] getting check failures on osx<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 21:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
<li><strong>Previous message:</strong> <a href="0855.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1897)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
<li><strong>Reply:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the SVN trunk HEAD:
<br>
<p>Making check in xml
<br>
make  check-TESTS
<br>
/Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58651 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 16amd64-8n2c-cpusets.xml
<br>
/Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58676 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 16em64t-4s2c2t.xml
<br>
/Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58700 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 16em64t-4s2c2t-offlines.xml
<br>
/Users/jsquyres/svn/hwloc/tests/xml/test-topology.sh: line 42: 58724 Segmentation fault      $lstopo --xml &quot;$srcdir&quot;/&quot;$1&quot; &quot;$file&quot;
<br>
FAIL: 8em64t-2mi2ma2c.xml
<br>
========================================================
<br>
4 of 4 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
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
<li><strong>Next message:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
<li><strong>Previous message:</strong> <a href="0855.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1897)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
<li><strong>Reply:</strong> <a href="0857.php">Jeff Squyres: "Re: [hwloc-devel] getting check failures on osx"</a>
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
