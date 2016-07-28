<?
$subject_val = "[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 13:18:18 2008" -->
<!-- isoreceived="20081111181818" -->
<!-- sent="Tue, 11 Nov 2008 12:18:13 -0600" -->
<!-- isosent="20081111181813" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers" -->
<!-- id="4919CC65.1060902_at_aem.umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 13:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have recently installed the Intel 10,1 compiler suite on our cluster.
<br>
<p>I built OpenMPI (1.2.7 and 1.2.8) with
<br>
<p>./configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>It configures, builds and installs.
<br>
<p>However, the MPI compiler drivers (mpicc, mpif90, etc) fail immediately 
<br>
with error of the sort
<br>
<p>mpif90: error while loading shared libraries: libimf.so: cannot open 
<br>
shared object file: No such file or directory
<br>
<p>I updated the LD_LIBRARY_PATH to point to the directories that contain 
<br>
the installed copies of libimf.so. (this is not something I have not had 
<br>
to do for other compiler/OpenMpi combinations)
<br>
<p>At that point, the program will compile but I get warnings like:
<br>
<p>[muno_at_titan ~]$ mpif90 test.f
<br>
<p>/share/apps/Intel/fce/10.1.018/lib/libimf.so: warning: warning: 
<br>
feupdateenv is not implemented and will always fail
<br>
<p>In a google search, I found a reference to this in the OpenMPI lists. 
<br>
When I follow the link, it is a different thread. Searching the OpenMPI 
<br>
lists from the web page does not find any matches. Strange.
<br>
<p>I found some references to this at some other sites using OpenMPI on 
<br>
clusters and they said to use
<br>
<p>-i_dynamic
<br>
<p>on the compile line.
<br>
<p>This removes the warning.
<br>
<p>Is there something I should be doing at OpenMPI configure time to take 
<br>
care of these issues?
<br>
<p><pre>
--
Ray Muno
University of Minnesota
Aerospace Engineering
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
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
