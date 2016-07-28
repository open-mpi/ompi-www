<?
$subject_val = "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 17:10:32 2009" -->
<!-- isoreceived="20090911211032" -->
<!-- sent="Fri, 11 Sep 2009 17:10:26 -0400" -->
<!-- isosent="20090911211026" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on OS X - file is not of required architecture" -->
<!-- id="AF3AEA8D-FA21-412E-B7CD-44E0EAFCF223_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C10FCED-3DC3-46BE-A730-A6948A5D9F54_at_ufl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on OS X - file is not of required architecture<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 17:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10623.php">Andreas Haselbacher: "[OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2009, at 10:05 AM, Andreas Haselbacher wrote:
<br>
<p><span class="quotelev1">&gt; I've built openmpi version 1.3.3 on a MacPro with OS X 10.5.8 and  
</span><br>
<span class="quotelev1">&gt; the Intel 10.1.006 Fortran compiler and gcc 4.0.  As far as I can  
</span><br>
<span class="quotelev1">&gt; tell, the configure and make commands completed fine. There are some  
</span><br>
<span class="quotelev1">&gt; warnings, but it's not clear to me that they are critical - or the  
</span><br>
<span class="quotelev1">&gt; explanation for what's not working. After installing, I try to  
</span><br>
<span class="quotelev1">&gt; compile a simple F77 hello world code. The output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpif77 helloworld_mpi.f -o helloworld_mpi
</span><br>
<span class="quotelev1">&gt; ld: warning in /opt/openmpi/lib/libmpi_f77.a, file is not of  
</span><br>
<span class="quotelev1">&gt; required architecture
</span><br>
<p>This means that it skipped that library because it didn't match what  
<br>
you were trying to compile against.
<br>
<p>Can you send the output of mpif77 --showme?
<br>
<p><span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;   &quot;_mpi_init_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _MAIN__ in ifortIsUNoZ.o
</span><br>
<p>None of these symbols were found because libmpi_f77.a was skipped.
<br>
<p><span class="quotelev1">&gt; Here's my configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi --enable-static --disable-shared  
</span><br>
<span class="quotelev1">&gt; CC=gcc CFLAGS=-m64 CXX=g++ CXXFLAGS=-m64 F77=ifort FC=ifort FFLAGS=- 
</span><br>
<span class="quotelev1">&gt; assume nounderscore FCFLAGS=-assume nounderscore
</span><br>
<p>I do not have the intel compilers for Mac; do they default to  
<br>
producing 64 bit objects?  I ask because it looks like you forced the  
<br>
C and C++ compilers to produce 64 bit objects -- do you need to do the  
<br>
same with ifort?  (via the FCFLAGS and FFLAGS env variables)
<br>
<p>Also, did you quote the &quot;-assume nounderscore&quot; arguments to FFLAGS/ 
<br>
FCFLAGS?  I.e., something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;FFLAGS=-assume nounderscore&quot;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10623.php">Andreas Haselbacher: "[OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
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
