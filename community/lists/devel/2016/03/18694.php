<?
$subject_val = "[OMPI devel] C type of MPI_UNWEIGHTED and MPI_WEIGHTS_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 08:23:23 2016" -->
<!-- isoreceived="20160313122323" -->
<!-- sent="Sun, 13 Mar 2016 15:23:02 +0300" -->
<!-- isosent="20160313122302" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] C type of MPI_UNWEIGHTED and MPI_WEIGHTS_EMPTY" -->
<!-- id="CAEcYPwBah74-YRZ+Q8rxD9bYtaEk8v0pFfPd9q5Jei7PzBffCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] C type of MPI_UNWEIGHTED and MPI_WEIGHTS_EMPTY<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-13 08:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18695.php">Pavel Emelyanov: "[OMPI devel] Invitation to Checkpoint-Restore micro-conference"</a>
<li><strong>Previous message:</strong> <a href="18693.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: disable debug-devel-build-by-default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, from mpi.h
<br>
<p>#define MPI_UNWEIGHTED           ((void *) 2)          /* unweighted graph */
<br>
#define MPI_WEIGHTS_EMPTY        ((void *) 3)          /* empty weights */
<br>
<p>However, according to the MPI-3.1 standard (page 680), they should be
<br>
<p>#define MPI_UNWEIGHTED           ((int *) 2)          /* unweighted graph */
<br>
#define MPI_WEIGHTS_EMPTY        ((int *) 3)          /* empty weights */
<br>
<p>PS: While the current definition is kind of harmless for C, it is
<br>
likely wrong for C++.
<br>
<p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Extreme Computing Research Center (ECRC)
King Abdullah University of Science and Technology (KAUST)
<a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18695.php">Pavel Emelyanov: "[OMPI devel] Invitation to Checkpoint-Restore micro-conference"</a>
<li><strong>Previous message:</strong> <a href="18693.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: disable debug-devel-build-by-default"</a>
<!-- nextthread="start" -->
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
