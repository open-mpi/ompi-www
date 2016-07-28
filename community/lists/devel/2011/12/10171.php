<?
$subject_val = "[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:22:24 2011" -->
<!-- isoreceived="20111220232224" -->
<!-- sent="Tue, 20 Dec 2011 15:22:03 -0800" -->
<!-- isosent="20111220232203" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen" -->
<!-- id="4EF1189B.3080802_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While trying to resolve the gmake-vs-bmake problem I ran autogen.sh and saw:
<br>
<p>/home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 
<br>
701: config/modify-configure-for-sun-fortran.pl: No such file or directory
<br>
<p>I suspect this just requires an addition to EXTRA_DIST in config/Makefile.am
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
<li><strong>Next message:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10172.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: missing file when running autogen"</a>
<li><strong>Reply:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
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
