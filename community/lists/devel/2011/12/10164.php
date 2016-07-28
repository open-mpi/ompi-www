<?
$subject_val = "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 22:07:54 2011" -->
<!-- isoreceived="20111217030754" -->
<!-- sent="Fri, 16 Dec 2011 19:07:31 -0800" -->
<!-- isosent="20111217030731" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms" -->
<!-- id="4EEC0773.4060107_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 22:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
<li><strong>Previous message:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
<li><strong>Reply:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I said I didn't have the patience to retest until rc2, but a bit of 
<br>
scripting has changed that.
<br>
It not only gave me the patience to re-test, but to expand my testing to 
<br>
15 non-linux machines.
<br>
<p>I've tested the 1.5.5rc1 tarball on a pile of non-linix systems with 2 
<br>
fixes in place:
<br>
&nbsp;&nbsp;&nbsp;+ Added #includes of sys/types.h and sys/wait.h to 
<br>
ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp
<br>
&nbsp;&nbsp;&nbsp;+ Deleted 
<br>
opal/mca/hwloc/hwloc122ompi/hwloc/include/hwloc/autogen/config.h
<br>
Both have been the subject of previous posts and I'll not elaborate on 
<br>
them here.
<br>
<p>With those in place, I have been able to &quot;(g)make all install check&quot; on 
<br>
the following:
<br>
<p>&nbsp;&nbsp;&nbsp;MacOS 10.4 on PPC
<br>
&nbsp;&nbsp;&nbsp;MacOS 10.5 on PPC
<br>
&nbsp;&nbsp;&nbsp;MacOS 10.4 on x86-64
<br>
&nbsp;&nbsp;&nbsp;MacOS 10.5 on x86-64
<br>
&nbsp;&nbsp;&nbsp;MacOS 10.6 on x86-64
<br>
&nbsp;&nbsp;&nbsp;MacOS 10.7 on x86-64
<br>
&nbsp;&nbsp;&nbsp;FreeBSD 6.3-RELEASE on amd64
<br>
&nbsp;&nbsp;&nbsp;FreeBSD 7.2-RELEASE on amd64
<br>
&nbsp;&nbsp;&nbsp;FreeBSD 8.2-RELEASE on amd64
<br>
&nbsp;&nbsp;&nbsp;FreeBSD 8.2-RELEASE on x86
<br>
&nbsp;&nbsp;&nbsp;NetBSD-5.1 on amd64
<br>
&nbsp;&nbsp;&nbsp;NetBSD-5.1 on x86
<br>
&nbsp;&nbsp;&nbsp;OpenBSD-5.0 on amd64
<br>
&nbsp;&nbsp;&nbsp;OpenBSD-5.0 on x86
<br>
&nbsp;&nbsp;&nbsp;Solaris-11 on amd64 (incl. OFUD, OPENIB and UDAPL)
<br>
<p>Note that the *BSD platforms all required gmake (in place of the system 
<br>
default Berkeley Make).
<br>
Other than --prefix, the only configure argument used was 
<br>
&quot;--disable-io-romio&quot; on the BSD platforms.
<br>
<p>I have slow Solaris10 boxes (1 each x86 and sparc) that I will test as 
<br>
time allows.
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
<li><strong>Next message:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
<li><strong>Previous message:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
<li><strong>Reply:</strong> <a href="10165.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures"</a>
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
