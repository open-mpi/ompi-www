<?
$subject_val = "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 00:20:01 2010" -->
<!-- isoreceived="20100825042001" -->
<!-- sent="Tue, 24 Aug 2010 21:19:44 -0700" -->
<!-- isosent="20100825041944" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)" -->
<!-- id="4C7499E0.9000907_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 00:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Previous message:</strong> <a href="8340.php">Paul H. Hargrove: "[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With both recent RCs I get the following suspicious warnings from 
<br>
gcc-4.5.0 on Linux/ia64
<br>
<p>1.4.3rc1:
<br>
<p>../../../../../ompi/mca/dpm/orte/dpm_orte.c:963:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_comm_null'
<br>
../../../../../ompi/mca/dpm/orte/dpm_orte.c:965:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_group_null'
<br>
../../../../../ompi/mca/dpm/orte/dpm_orte.c:967:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_errors_are_fatal'
<br>
<p><p>1.5rc5:
<br>
<p>../../../../../ompi/mca/dpm/orte/dpm_orte.c:990:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_comm_null'
<br>
../../../../../ompi/mca/dpm/orte/dpm_orte.c:992:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_group_null'
<br>
../../../../../ompi/mca/dpm/orte/dpm_orte.c:994:5: warning: attempt to 
<br>
free a non-heap object 'ompi_mpi_errors_are_fatal'
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
<li><strong>Next message:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Previous message:</strong> <a href="8340.php">Paul H. Hargrove: "[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Reply:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
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
