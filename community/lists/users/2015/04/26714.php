<?
$subject_val = "[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 05:40:09 2015" -->
<!-- isoreceived="20150414094009" -->
<!-- sent="Tue, 14 Apr 2015 17:39:52 +0800" -->
<!-- isosent="20150414093952" -->
<!-- name="Chen Sijie" -->
<!-- email="kevinsouldew_at_[hidden]" -->
<!-- subject="[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d" -->
<!-- id="7040D86E-96E6-42D7-81B3-84DC3D6E6ECC_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d<br>
<strong>From:</strong> Chen Sijie (<em>kevinsouldew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 05:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26715.php">Li Li: "[OMPI users] hello world can't run in Ubuntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I posted my question at <a href="http://stackoverflow.com/questions/29620730/strange-behaviour-of-fftw-mpi-plan-dft-r2c-3d">http://stackoverflow.com/questions/29620730/strange-behaviour-of-fftw-mpi-plan-dft-r2c-3d</a> &lt;<a href="http://stackoverflow.com/questions/29620730/strange-behaviour-of-fftw-mpi-plan-dft-r2c-3d">http://stackoverflow.com/questions/29620730/strange-behaviour-of-fftw-mpi-plan-dft-r2c-3d</a>&gt;.
<br>
And was told to report my question here.
<br>
<p>Besides information provided in that link, here is some extra hopefully useful information:
<br>
<p>1. L, M and N can be exchanged, the program give the same error/result.
<br>
2. The last flag does not affect the problem.
<br>
3. Whether _rin_ and _cout_ point to the same area of memory does not affect the problem, too.
<br>
4. The signal is usually received by high rank process, like rank 23 when running 24 processes or rank 46 running 48 processes.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26715.php">Li Li: "[OMPI users] hello world can't run in Ubuntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="26713.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
