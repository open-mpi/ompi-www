<?
$subject_val = "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 11:23:23 2015" -->
<!-- isoreceived="20150622152323" -->
<!-- sent="Mon, 22 Jun 2015 10:23:02 -0500" -->
<!-- isosent="20150622152302" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY" -->
<!-- id="CAEcYPwA6PAGqQEn26_qA6hOG3bE7p2+h=iJQfjDdw82PZPqnJg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 11:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17519.php">Ralph Castain: "[OMPI devel] PMIx 2.0: seeking input"</a>
<li><strong>Previous message:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached test code used to work in 1.8.5 and below, but they are
<br>
failing in 1.8.6 with MPI_ERR_INTERN (tested in OS X).
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17518/win_post_wait.c">win_post_wait.c</a>
</ul>
<!-- attachment="win_post_wait.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17518/win_start_complete.c">win_start_complete.c</a>
</ul>
<!-- attachment="win_start_complete.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17519.php">Ralph Castain: "[OMPI devel] PMIx 2.0: seeking input"</a>
<li><strong>Previous message:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="17523.php">Gilles Gouaillardet: "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
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
