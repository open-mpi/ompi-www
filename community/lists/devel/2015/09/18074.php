<?
$subject_val = "[OMPI devel] PMIX vs Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 01:34:14 2015" -->
<!-- isoreceived="20150918053414" -->
<!-- sent="Thu, 17 Sep 2015 22:34:11 -0700" -->
<!-- isosent="20150918053411" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] PMIX vs Solaris" -->
<!-- id="CAAvDA15WNi58BO3noibg0qEuJbG2Sb5W1C5iWG8cHxdZYPuB3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] PMIX vs Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 01:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18073.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tried tonight's master tarball on Solaris 11.2 on x86-64 with the Studio
<br>
Compilers  (default ILP32 output) and saw the following result
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
Error opening /devices/pci_at_0,0:reg: Permission denied
<br>
[pcp-d-4:00492] PMIX ERROR: ERROR in file
<br>
/export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client.c
<br>
at line 181
<br>
[pcp-d-4:00491] PMIX ERROR: UNREACHABLE in file
<br>
/export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
<br>
at line 463
<br>
<p>I don't know if the Permission denied error is related to the subsequent
<br>
PMIX errors, but any message that says &quot;UNREACHABLE&quot; is clearly worth
<br>
reporting.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18073.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
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
