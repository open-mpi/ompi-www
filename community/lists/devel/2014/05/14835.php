<?
$subject_val = "[OMPI devel] *neighbor_alltoall* are broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 00:45:41 2014" -->
<!-- isoreceived="20140523044541" -->
<!-- sent="Fri, 23 May 2014 13:45:40 +0900" -->
<!-- isosent="20140523044540" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] *neighbor_alltoall* are broken" -->
<!-- id="CAAkFZ5vYm3S8NVVzzPJYuQ9E4D2ZED6eop2-mZSwYn1t37M4hA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] *neighbor_alltoall* are broken<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 00:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14834.php">Rolf vandeVaart: "[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i noticed that *neighbor_alltoall* are now broken.
<br>
<p>the bug is in the way parameters are checked (i revamped this and did the
<br>
wrong thing for neighbor communications :-()
<br>
<p>this bug is only visible when the number of tasks become large
<br>
(this can explain why i did not detect this on my VM ...)
<br>
<p>i am sorry for the mess and now working on a fix
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14834.php">Rolf vandeVaart: "[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions"</a>
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
