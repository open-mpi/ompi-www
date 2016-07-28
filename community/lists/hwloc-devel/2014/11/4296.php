<?
$subject_val = "[hwloc-devel] hwloc failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 16:26:54 2014" -->
<!-- isoreceived="20141119212654" -->
<!-- sent="Wed, 19 Nov 2014 21:26:46 +0000" -->
<!-- isosent="20141119212646" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc failures" -->
<!-- id="89477D52-1559-4E79-9766-21A553DBBDB9_at_anl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc failures<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-19 16:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Previous message:</strong> <a href="4295.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-12-g1da4b76)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Reply:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
I&#226;&#128;&#153;m seeing the following failure with hwloc on the mac (yosemite):
<br>

<br>
&nbsp;&nbsp;CC       topology-xml-libxml.lo
<br>
../../../../../../../../../mpich/src/pm/hydra/tools/topo/hwloc/hwloc/src/topology-xml-libxml.c:17:27: fatal error: libxml/parser.h: No such file or directory
<br>
&nbsp;#include &lt;libxml/parser.h&gt;
<br>

<br>
This is GNU compilers and the latest hwloc release.  I have libxml2 installed.
<br>

<br>
Do I need to install a different package?  Why is configure not able to detect it?  What files can I send to help diagnose this?
<br>

<br>
&nbsp;&nbsp;&#226;&#128;&#148; Pavan
<br>

<br>
--
<br>
Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
<br>
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Previous message:</strong> <a href="4295.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-12-g1da4b76)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Reply:</strong> <a href="4297.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
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
