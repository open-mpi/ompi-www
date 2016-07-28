<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 11:53:49 2007" -->
<!-- isoreceived="20071017155349" -->
<!-- sent="Wed, 17 Oct 2007 16:53:30 +0100 (BST)" -->
<!-- isosent="20071017155330" -->
<!-- name="Yuan Wan" -->
<!-- email="ywan_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI not work with Intel '-fast' option" -->
<!-- id="Pine.LNX.4.64.0710171628060.4725_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>From:</strong> Yuan Wan (<em>ywan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 11:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Dibyendu Das1: "[OMPI users] Dibyendu Das1 is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>Reply:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm using OpenMPI 1.2.2 with Intel compilers (icc, ifort)
<br>
But I found mpicc and mpif90 cannot work with Intel -fast optimisation.
<br>
<p>------------------------------------------------------------------------
<br>
[ywan_at_frontend01 hello]$ mpif90 -fast -o hello -i-dynamic hello.f90
<br>
<p>IPO: performing single-file optimizations
<br>
IPO: generating object file 
<br>
/tmp/ipo_ifortTdJGQr.o
<br>
ld: cannot find -lmpi_f90
<br>
------------------------------------------------------------------------
<br>
<p>The above command can be expanded as:
<br>
------------------------------------------------------------------------
<br>
[ywan_at_frontend01 hello]$ mpif90 -fast -o hello -i-dynamic hello.f90 -show
<br>
<p>ifort -I/usr/local/Cluster-Apps/openmpi/intel/64/1.2.2//include -pthread 
<br>
-I/usr/local/Cluster-Apps/openmpi/intel/64/1.2.2//lib -fast -o hello 
<br>
-i-dynamic hello.f90 -L/usr/local/Cluster-Apps/openmpi/intel/64/1.2.2//lib 
<br>
-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic 
<br>
-lirc -lstdc++ -lnsl -lutil
<br>
-------------------------------------------------------------------------
<br>
<p>mpif90 can find -lmpi_f90 if I remove -fast from above command.
<br>
<p><p>Anyone knows the reseaon why OpenMPI not works with Intel -fast?
<br>
<p><p><p>--Yuan
<br>
<p><p>Yuan Wan
<br>
<pre>
-- 
Unix Section
Information Services Infrastructure Division
University of Edinburgh
tel: 0131 650 4985
email: ywan_at_[hidden]
2032 Computing Services, JCMB
The King's Buildings,
Edinburgh, EH9 3JZ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Dibyendu Das1: "[OMPI users] Dibyendu Das1 is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>Reply:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
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
