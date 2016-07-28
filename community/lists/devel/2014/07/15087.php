<?
$subject_val = "[OMPI devel] [patch] man and FUNC_NAME corrections";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 21:10:01 2014" -->
<!-- isoreceived="20140710011001" -->
<!-- sent="Thu, 10 Jul 2014 01:09:54 +0000" -->
<!-- isosent="20140710010954" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] man and FUNC_NAME corrections" -->
<!-- id="20140710100954.41a098ad41f4d7b1dc1ff7f3_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] man and FUNC_NAME corrections<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 21:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Previous message:</strong> <a href="15086.php">Ralph Castain: "Re: [OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Reply:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The attached patch corrects trivial typos in man files and
<br>
FUNC_NAME variables in ompi/mpi/c/*.c files.
<br>
<p>One note which may not be trivial:
<br>
Before MPI-2.1, MPI standard says MPI_PACKED should be used for
<br>
MPI_{Pack,Unpack}_external. But in MPI-2.1, it was changed to
<br>
use MPI_BYTE. See 'B.3 Changes from Version 2.0 to Version 2.1'
<br>
(page 766) in MPI-3.0.
<br>
<p>Though my patch is for OMPI trunk, I want to see these
<br>
corrections in 1.8 series.
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15087/man-funcname-correction.patch">man-funcname-correction.patch</a>
</ul>
<!-- attachment="man-funcname-correction.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Previous message:</strong> <a href="15086.php">Ralph Castain: "Re: [OMPI devel] segv in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>Reply:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
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
