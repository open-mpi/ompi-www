<?
$subject_val = "[OMPI users] openmpi+nag/5.1 error with libpthread";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 15:00:39 2009" -->
<!-- isoreceived="20090914190039" -->
<!-- sent="Mon, 14 Sep 2009 15:00:33 -0400" -->
<!-- isosent="20090914190033" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi+nag/5.1 error with libpthread" -->
<!-- id="9793993A-32CB-488E-B3B6-4A61171A84AD_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi+nag/5.1 error with libpthread<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 15:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We built openmpi/1.3.2  with nagware 5.1,  to make it build we used  
<br>
the following options:
<br>
<p>./configure --prefix=/home/software/rhel5/openmpi-1.3.2/nag-5.1 --with- 
<br>
tm=/usr/local/torque --with-openib=/usr CC=gcc CXX=g++ FC=f95 F77=f95  
<br>
FCFLAGS=-w -dusty --disable-shared --enable-static --mandir=/home/ 
<br>
software/rhel5/openmpi-1.3.2/nag-5.1/man/
<br>
<p>Problem is the resulting link puts -lpthread before -lmpi, which is  
<br>
out of order for linking (undefined pthread_atfork()).
<br>
<p>Example:
<br>
mpif90 -showme
<br>
f95 -I/home/software/rhel5/openmpi-1.3.2/nag-5.1/include -lpthread -I/ 
<br>
home/software/rhel5/openmpi-1.3.2/nag-5.1/lib -L/usr/local/torque/lib - 
<br>
L/home/software/rhel5/openmpi-1.3.2/nag-5.1/lib -lmpi_f90 -lmpi_f77 - 
<br>
lmpi -lopen-rte -lopen-pal -libverbs -ltorque -ldl -Wl,--export- 
<br>
dynamic -lnsl -lutil -lm -ldl
<br>
<p>We modified (by hand) mpif90-wrapper-data.txt  to change:
<br>
<p>compiler_flags=-lpthread -&gt;  compiler_flags=
<br>
<p>libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -libverbs - 
<br>
ltorque -ldl   -Wl,--export-dynamic -lnsl -lutil  -lm -ldl
<br>
<p>-&gt;
<br>
libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -libverbs - 
<br>
ltorque -ldl   -Wl,--export-dynamic -lnsl -lutil -lpthread -lm -ldl
<br>
<p>Which matches our builds for the PGI compilers, and linking works fine  
<br>
now.  Don't know why this happened,  Just passing it along.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
