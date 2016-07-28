<?
$subject_val = "[OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 09:49:35 2011" -->
<!-- isoreceived="20111214144935" -->
<!-- sent="Wed, 14 Dec 2011 09:49:26 -0500" -->
<!-- isosent="20111214144926" -->
<!-- name="Micah Sklut" -->
<!-- email="micahs2005_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="CAKRSGb8OD9-zk1HRbDp4pRH1J4=MmyCZ_Qqo_OyDQv++QmwiSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Micah Sklut (<em>micahs2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 09:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I have installed openmpi for gfortran, but am now attempting to install
<br>
openmpi as ifort.
<br>
<p>I have run the following configuration:
<br>
./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
<br>
<p>The install works successfully, but when I run
<br>
/opt/openmpi/intel/bin/mpif90, it runs as gfortran.
<br>
Oddly, when I am user: root, the same mpif90 runs as ifort.
<br>
<p>Can someone please alleviate my confusion as to why I mpif90 is not running
<br>
as ifort?
<br>
<p>Thank you for your suggestions,
<br>
<p><pre>
-- 
Micah
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
