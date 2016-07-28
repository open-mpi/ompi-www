<?
$subject_val = "[hwloc-devel] hwloc compile warnings patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 13:00:03 2009" -->
<!-- isoreceived="20091022170003" -->
<!-- sent="Thu, 22 Oct 2009 11:59:54 -0500" -->
<!-- isosent="20091022165954" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc compile warnings patch" -->
<!-- id="4AE08F8A.5050202_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc compile warnings patch<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 12:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Jeff Squyres: "[hwloc-devel] SVN/trac server needs to reboot, Oct 23, 8am"</a>
<li><strong>Previous message:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
<li><strong>Reply:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have attached a patch against 0.9.1rc2 to get rid of some compilation
<br>
warnings (tested with gcc, but should be fine for other compilers as
<br>
well, AFAICT). Can someone take a look at this and possibly apply some
<br>
variant of it to the 0.9 branch (and trunk)? Please pay specific
<br>
attention to the return values and additional code this patch adds for
<br>
error cases; it is possible they might introduce a bug somewhere because
<br>
of my lack of knowledge on hwloc's internals.
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
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0250/hwloc-warnings.patch">hwloc-warnings.patch</a>
</ul>
<!-- attachment="hwloc-warnings.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Jeff Squyres: "[hwloc-devel] SVN/trac server needs to reboot, Oct 23, 8am"</a>
<li><strong>Previous message:</strong> <a href="0249.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
<li><strong>Reply:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
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
