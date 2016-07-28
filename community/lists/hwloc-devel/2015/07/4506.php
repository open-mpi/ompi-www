<?
$subject_val = "[hwloc-devel] whelk warning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 13:07:12 2015" -->
<!-- isoreceived="20150721170712" -->
<!-- sent="Tue, 21 Jul 2015 17:07:10 +0000" -->
<!-- isosent="20150721170710" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] whelk warning" -->
<!-- id="06E591F6-EED6-4303-830C-648BA9F5FA74_at_anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] whelk warning<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 13:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4511.php">Brice Goglin: "Re: [hwloc-devel] whelk warning"</a>
<li><strong>Reply:</strong> <a href="4511.php">Brice Goglin: "Re: [hwloc-devel] whelk warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>

<br>
We see a warning about assignment from a const string to a regular string (CFLAGS=&quot;-Wall -Werror&quot;).  Please see the fix we are maintaining for this:
<br>

<br>
<a href="http://git.mpich.org/mpich.git/commitdiff/5ce7102445fe0f6fbcf3fac0e49b092bf3069778">http://git.mpich.org/mpich.git/commitdiff/5ce7102445fe0f6fbcf3fac0e49b092bf3069778</a>
<br>

<br>

<br>
Could you consider including this or an alternative (e.g., direct typecast of the const string to &quot;char *&quot;) in the next hwloc release?
<br>

<br>
Thanks,
<br>

<br>
&nbsp;&nbsp;-- Pavan
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4511.php">Brice Goglin: "Re: [hwloc-devel] whelk warning"</a>
<li><strong>Reply:</strong> <a href="4511.php">Brice Goglin: "Re: [hwloc-devel] whelk warning"</a>
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
