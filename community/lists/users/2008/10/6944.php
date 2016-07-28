<?
$subject_val = "[OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 18:17:09 2008" -->
<!-- isoreceived="20081010221709" -->
<!-- sent="Fri, 10 Oct 2008 16:17:05 -0600" -->
<!-- isosent="20081010221705" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="48EFD461.30202_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48EECA71.2080408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Passing LD_LIBRARY_PATH to orted<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 18:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having problems launching openmpi jobs on my system.  I support multiple versions
<br>
of MPI and compilers using GNU Modules.  For the default compiler, everything is fine.
<br>
For non-default, I am having problems.
<br>
<p>I built Openmpi-1.2.6 (and 1.2.7) with the following configure options:
<br>
<p># module load intel/10.1
<br>
# ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort --prefix=/opt/openmpi/1.2.7-intel-10.1 --without-
<br>
gridengine --enable-io-romio --with-io-romio-flags=--with-file-sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
<br>
<p>When I launch a job, I run the module command for the right compiler/MPI version to set the paths
<br>
correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am launching, but not orted.
<br>
<p>When orted is launched on the remote system, the LD_LIBRARY_PATH
<br>
doesn't come with, and the Intel 10.1 libraries can't be found.
<br>
<p>/opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading shared libraries: libintlc.so.5: cannot open shared object file: No 
<br>
such file or directory
<br>
<p>How do others solve this problem?
<br>
<p>Thanks,
<br>
Craig
<br>
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
