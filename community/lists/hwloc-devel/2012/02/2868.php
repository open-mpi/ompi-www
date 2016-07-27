<?
$subject_val = "Re: [hwloc-devel] hwloc 1.3.2rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 00:04:18 2012" -->
<!-- isoreceived="20120214050418" -->
<!-- sent="Mon, 13 Feb 2012 21:04:06 -0800" -->
<!-- isosent="20120214050406" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.3.2rc2 released" -->
<!-- id="4F39EB46.2070305_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B255698D-DE0E-4C87-B4D2-7ACF8CDF1B81_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.3.2rc2 released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 00:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2869.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1a1r4302)"</a>
<li><strong>Previous message:</strong> <a href="2867.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc3r4299)"</a>
<li><strong>In reply to:</strong> <a href="2866.php">Jeff Squyres: "[hwloc-devel] hwloc 1.3.2rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/13/2012 1:30 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Due to the volume of off-list emails, I'm kinda expecting this rc to be good / final.  However, please do at least some cursory testing so that we can be sure.
</span><br>
<p>I disregarded the &quot;cursory&quot; and ran on 61 arch/os/compiler combinations.
<br>
I can see only 2 problems at this point:
<br>
+ known libnuma issues on a &quot;wierd&quot; virtual node - NOT expected to fix 
<br>
in 1.3.x
<br>
+ &quot;make check&quot; failure w/ icc-8.0 on x86/Linux - BUT icc-9.0 and gcc are 
<br>
both fine on the same node (so probably a compiler bug).
<br>
<p>So, I agree this looks &quot;final&quot; to me.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2869.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1a1r4302)"</a>
<li><strong>Previous message:</strong> <a href="2867.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc3r4299)"</a>
<li><strong>In reply to:</strong> <a href="2866.php">Jeff Squyres: "[hwloc-devel] hwloc 1.3.2rc2 released"</a>
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
