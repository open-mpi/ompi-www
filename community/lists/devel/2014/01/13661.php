<?
$subject_val = "[OMPI devel] MX and PSM in 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 20:52:14 2014" -->
<!-- isoreceived="20140110015214" -->
<!-- sent="Thu, 9 Jan 2014 17:52:13 -0800" -->
<!-- isosent="20140110015213" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] MX and PSM in 1.7.4" -->
<!-- id="CAAvDA140mwn7W39UfEZyriVW1nBrHJQ-R+xwJ1PgNP_yPufx4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MX and PSM in 1.7.4<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 20:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13660.php">Paul Hargrove: "[OMPI devel] Portals vs Portals4 in 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>Reply:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is anybody still testing MX and PSM?
<br>
They are both still present in ompi/mca/mtl/
<br>
<p>I have access to a system w/ QLogic HCAs w/ PSM and have verified that I
<br>
can:
<br>
$ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
<br>
<p>I have an x86 (32-bit) system w/ MX headers and libs that I have
<br>
successfully configured and built on.
<br>
However, I no longer have Myrinet h/w (well, there is some in a box in the
<br>
machine room but my dedication to Open MPI rc testing doesn't extend far
<br>
enough to install the h/w).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13660.php">Paul Hargrove: "[OMPI devel] Portals vs Portals4 in 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
<li><strong>Reply:</strong> <a href="13670.php">Ralph Castain: "Re: [OMPI devel] MX and PSM in 1.7.4"</a>
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
