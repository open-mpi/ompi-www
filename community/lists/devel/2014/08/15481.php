<?
$subject_val = "[OMPI devel] trunk warnings on x86";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 23:12:20 2014" -->
<!-- isoreceived="20140803031220" -->
<!-- sent="Sat, 2 Aug 2014 20:12:19 -0700" -->
<!-- isosent="20140803031219" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk warnings on x86" -->
<!-- id="CAAvDA141XTDhS9GxQ57CvEyNL1L8gvm_R6+-mFvMnJzgHiiqDg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk warnings on x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-02 23:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15480.php">Paul Hargrove: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like on a 32-bit platform a (uintptr_t) cast is desired in the
<br>
OMPI_CAST_RTE_NAME() macro.
<br>
<p>Warnings from current trunk tarball attributable to the missing case
<br>
include:
<br>
<p>/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:89:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/runtime/ompi_mpi_abort.c:97:
<br>
warning: cast to pointer from integer of different size
<br>
/home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gcc/openmpi-1.9a1r32406/ompi/mca/pml/bfo/pml_bfo_failover.c:1417:
<br>
warning: cast to pointer from integer of different size
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15481/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15480.php">Paul Hargrove: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
<li><strong>Reply:</strong> <a href="15482.php">Ralph Castain: "Re: [OMPI devel] trunk warnings on x86"</a>
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
