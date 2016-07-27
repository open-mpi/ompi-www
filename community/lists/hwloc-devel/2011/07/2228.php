<?
$subject_val = "[hwloc-devel] hwloc_distances as utility?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 17:55:43 2011" -->
<!-- isoreceived="20110703215543" -->
<!-- sent="Sun, 3 Jul 2011 23:55:35 +0200" -->
<!-- isosent="20110703215535" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc_distances as utility?" -->
<!-- id="CALT_uBRfbcrqy-gsQ1BGsfYuS1gzxxsQGdirp726=k3gbQhZ3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc_distances as utility?<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-03 17:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Previous message:</strong> <a href="2227.php">Samuel Thibault: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Maybe reply:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2329.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have come across tests/hwloc_distances test and I believe that it would be
<br>
great to convert this into the utility &quot;hwloc-report-instances&quot; published
<br>
under utils/ directory. Please let me know what you think about it.
<br>
<p>It would take the same input as hwloc-info (read topology from different
<br>
formats instead of discovering the topology on the local machine), support
<br>
both logical and physical indexes (-l and -p) switch.
<br>
<p>I have used stream memory bandwidth benchmark (
<br>
<a href="http://www.cs.virginia.edu/stream/">http://www.cs.virginia.edu/stream/</a>) in the past to produce the similar
<br>
output as tests/hwloc_distances. It was interesting to see that numactl and
<br>
kernel scheduler are both using number of hopes instead of memory bandwidth.
<br>
On some systems number of hops does not represent memory bandwidth. I have
<br>
reported this in BZ 655041
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=655041">https://bugzilla.redhat.com/show_bug.cgi?id=655041</a>
<br>
<p>In any case I believe that hwloc-report-instances would be useful utility.
<br>
Please let me know your opinion.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2229.php">Jiri Hladky: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<li><strong>Previous message:</strong> <a href="2227.php">Samuel Thibault: "Re: [hwloc-devel] Fedora's rpm for v1.2, missing two man3 pages in install step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Maybe reply:</strong> <a href="2230.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2329.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
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
