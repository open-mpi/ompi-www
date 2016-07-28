<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 02:29:28 2011" -->
<!-- isoreceived="20111214072928" -->
<!-- sent="Tue, 13 Dec 2011 23:29:03 -0800" -->
<!-- isosent="20111214072903" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure" -->
<!-- id="4EE8503F.7030902_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A23B6CCA-353C-4E7D-92EB-638DB6C87180_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 02:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Reply:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attempted the build on MacOS 10.4 (Tiger) on x86-64, I hit the same 
<br>
hwloc issue I've encountered on {Free,Open,Net}BSD.
<br>
The build fails with
<br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _opal_hwloc122_hwloc_backend_sysfs_exit
</span><br>
<span class="quotelev1">&gt; _opal_hwloc122_hwloc_backend_sysfs_init
</span><br>
<span class="quotelev1">&gt; _opal_hwloc122_hwloc_look_linux
</span><br>
<span class="quotelev1">&gt; _opal_hwloc122_hwloc_set_linux_hooks
</span><br>
So, I am repeating my urging NOT to build hwloc by default when 
<br>
configure can't recognize the target system.
<br>
AND, please document --without-hwloc in README.
<br>
<p>-Paul
<br>
<p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!  I would really like to get this out by the end of the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev1">&gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They would both need to be fixed in the *immediate future* to be considered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Reply:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
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
