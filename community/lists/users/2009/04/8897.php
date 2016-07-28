<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 10:31:03 2009" -->
<!-- isoreceived="20090414143103" -->
<!-- sent="Tue, 14 Apr 2009 10:30:58 -0400" -->
<!-- isosent="20090414143058" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E49E22.9040502_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E3C131.50703_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 10:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8898.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3.1 : mpirun status is 0 after receiving TERM signal"</a>
<li><strong>Previous message:</strong> <a href="8896.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion,
<br>
<p>I have no trouble getting thread support during configure with PGI 8.0-3
<br>
<p>Are there any other compilers in your path before the PGI compilers?
<br>
Even if the PGI compilers come first, try specifying the PGI compilers
<br>
explicitly with these environment variables (bash syntax shown):
<br>
<p>export CC=pgcc
<br>
export CXX=pgCC
<br>
export F77=pgf77
<br>
export FC=pgf90
<br>
<p>also check the value of CPPFLAGS and LDFLAGS, and make sure they are
<br>
correct for your PGI compilers.
<br>
<p><pre>
--
Prentice
Orion Poplawski wrote:
&gt; Seeing the following building openmpi 1.3.1 on CentOS 5.3 with PGI pgf90
&gt; 8.0-5 fortran compiler:
&gt; 
&gt; checking if C compiler and POSIX threads work with -Kthread... no
&gt; checking if C compiler and POSIX threads work with -kthread... no
&gt; checking if C compiler and POSIX threads work with -pthread... yes
&gt; checking if C++ compiler and POSIX threads work with -Kthread... no
&gt; checking if C++ compiler and POSIX threads work with -kthread... no
&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
&gt; checking if F77 compiler and POSIX threads work with -Kthread... no
&gt; checking if F77 compiler and POSIX threads work with -kthread... no
&gt; checking if F77 compiler and POSIX threads work with -pthread... no
&gt; checking if F77 compiler and POSIX threads work with -pthreads... no
&gt; checking if F77 compiler and POSIX threads work with -mt... no
&gt; checking if F77 compiler and POSIX threads work with -mthreads... no
&gt; checking if F77 compiler and POSIX threads work with -lpthreads... no
&gt; checking if F77 compiler and POSIX threads work with -llthread... no
&gt; checking if F77 compiler and POSIX threads work with -lpthread... no
&gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
&gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
&gt; checking for working POSIX threads package... no
&gt; checking if C compiler and Solaris threads work... no
&gt; checking if C++ compiler and Solaris threads work... no
&gt; checking if F77 compiler and Solaris threads work... no
&gt; checking for working Solaris threads package... no
&gt; checking for type of thread support... none found
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8898.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3.1 : mpirun status is 0 after receiving TERM signal"</a>
<li><strong>Previous message:</strong> <a href="8896.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
