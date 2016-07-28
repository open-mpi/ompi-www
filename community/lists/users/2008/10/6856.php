<?
$subject_val = "[OMPI users] Problem building OpenMPi with SunStudio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  4 11:04:20 2008" -->
<!-- isoreceived="20081004150420" -->
<!-- sent="Sat, 04 Oct 2008 10:04:12 -0500" -->
<!-- isosent="20081004150412" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building OpenMPi with SunStudio compilers" -->
<!-- id="48E785EC.4090409_at_aem.umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] Problem building OpenMPi with SunStudio compilers<br>
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-04 11:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are implementing a new cluster that is InfiniBand based.  I am 
<br>
working on getting OpenMPI built for our various compile environments. 
<br>
So far it is working for PGI 7.2 and PathScale 3.1.  I found some 
<br>
workarounds for issues with the Pathscale compilers (seg faults) in the 
<br>
OpenMPI FAQ.
<br>
<p>When I try to build with SunStudio, I cannot even get past the configure 
<br>
stage. It dies in th estage that checks for C++.
<br>
<p>*** C++ compiler and preprocessor
<br>
checking whether we are using the GNU C++ compiler... no
<br>
checking whether CC accepts -g... yes
<br>
checking dependency style of CC... none
<br>
checking how to run the C++ preprocessor... CC -E
<br>
checking for the C++ compiler vendor... sun
<br>
checking if C++ compiler works... no
<br>
**********************************************************************
<br>
* It appears that your C++ compiler is unable to produce working
<br>
* executables.  A simple test application failed to properly
<br>
* execute.  Note that this is likely not a problem with Open MPI,
<br>
* but a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compiler and what error resulted when the command was executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: Could not run a simple C++ program.  Aborting.
<br>
<p>The section in config.log looks to be
<br>
<p>================
<br>
configure:21722: CC -c -DNDEBUG   conftest.cpp &gt;&amp;5
<br>
configure:21728: $? = 0
<br>
configure:21907: result: sun
<br>
configure:21929: checking if C++ compiler works
<br>
configure:22006: CC -o conftest -DNDEBUG    conftest.cpp  &gt;&amp;5
<br>
/usr/lib64/libm.so: file not recognized: File format not recognized
<br>
configure:22009: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
=================
<br>
<p>The attempt to configure was done with.
<br>
<p>./configure CC=cc CXX=CC F77=f77 FC=f90 --prefix=path_to_install
<br>
<p>All the SunStudio binaries are at the front of the path. 
<br>
<p>I find this entry in the FAQthe SunStudio compilers
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
<br>
<p>and followed that as well, with no success.  It still dies at the 
<br>
configure step. 
<br>
<p>The SunStudio version is 12. The target (and compilation) platform is 
<br>
AMD Opteron, Barcelona.  We have been using the SunStudio compilers on 
<br>
this cluster on a routine basis and have not had issues.  
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Reply:</strong> <a href="6857.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
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
