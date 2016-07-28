<?
$subject_val = "[hwloc-devel] hwloc and c89/c99";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 21:15:00 2013" -->
<!-- isoreceived="20130506011500" -->
<!-- sent="Sun, 05 May 2013 20:14:55 -0500" -->
<!-- isosent="20130506011455" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc and c89/c99" -->
<!-- id="5187040F.3050607_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc and c89/c99<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 21:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3693.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5585)"</a>
<li><strong>Previous message:</strong> <a href="3691.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5584)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is hwloc supposed to support c89 only (no c99)?  I remember having this
<br>
discussion earlier and the hwloc developers said that hwloc assumes c99.
<br>
&nbsp;At that point we ensured that there was a configure check for c99
<br>
support and hwloc was disabled if c99 support was not found (by failing
<br>
in HWLOC_SETUP_CORE).  I don't see such a check in the current code.
<br>
Was this accidentally dropped at some point?
<br>
<p>When we build mpich with c89 support, it is entering hwloc and failing
<br>
to build.  Before I go tracking this, I want to make sure I'm not
<br>
missing something more straightforward.
<br>
<p>Thanks,
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3693.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5585)"</a>
<li><strong>Previous message:</strong> <a href="3691.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5584)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
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
