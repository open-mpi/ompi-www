<?
$subject_val = "[OMPI users] TEST UPPER MATRIX -- NOT PASSED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 02:01:09 2008" -->
<!-- isoreceived="20080729060109" -->
<!-- sent="Tue, 29 Jul 2008 08:00:54 +0200" -->
<!-- isosent="20080729060054" -->
<!-- name="Martin Horvat" -->
<!-- email="martin.horvat_at_[hidden]" -->
<!-- subject="[OMPI users] TEST UPPER MATRIX -- NOT PASSED" -->
<!-- id="20080729080054.407b8364_at_rheia" -->
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
<strong>Subject:</strong> [OMPI users] TEST UPPER MATRIX -- NOT PASSED<br>
<strong>From:</strong> Martin Horvat (<em>martin.horvat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 02:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p>I wanted to install a fresh copy of the OpenMPI-1.2.6 on a testing Ubuntu 8.04
<br>
machine. I have compiled openmpi using the Intel compiler 10.1 (C++, Fortran). It compiled without any problems. By doing
<br>
<p>make check
<br>
<p>most of the checks PASS, but (I think) only the following does not PASS:
<br>
<p>#
<br>
&nbsp;* TEST UPPER MATRIX
<br>
&nbsp;#
<br>
<p>test upper matrix
<br>
complete unpacking in 1131 microsec
<br>
error in position (1, 1) expect 1397811857.000000 and find 0.000000
<br>
hex 41d4d43aa4400000 != 0
<br>
decode [NOT PASSED]
<br>
<p>#
<br>
&nbsp;* TEST MATRIX BORDERS
<br>
&nbsp;#
<br>
<p><p><p>#
<br>
&nbsp;* TEST CONTIGUOUS
<br>
&nbsp;#
<br>
<p>test contiguous (alignement)
<br>
<p><p>Could somebody indicate what I am doing wrong.
<br>
<p>Regards,
<br>
<p>Martin
<br>
<p><pre>
-- 
Faculty of Mathematics and Physics,
Department of Physics,
University of Ljubljana
Slovenia, Europe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6175.php">Dirk Eddelbuettel: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
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
