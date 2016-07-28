<?
$subject_val = "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 18:35:39 2009" -->
<!-- isoreceived="20090911223539" -->
<!-- sent="Fri, 11 Sep 2009 15:35:34 -0700" -->
<!-- isosent="20090911223534" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on OS X - file is not of required architecture" -->
<!-- id="3FA2D621-D5C7-4579-94B7-8A0BFA040D3D_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d71c6d210909111525r642fb47fu3f2e32ae11b3b213_at_mail.gmail.com" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 18:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas,
<br>
<p>Have you checked that ifort is creating 64 bit objects. If I remember  
<br>
correctly with 10.1 the default was to create 32 bit objects.
<br>
<p>Doug Reeder
<br>
On Sep 11, 2009, at 3:25 PM, Andreas Haselbacher wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Sep 11, 2009 at 5:10 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2009, at 10:05 AM, Andreas Haselbacher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built openmpi version 1.3.3 on a MacPro with OS X 10.5.8 and  
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that it skipped that library because it didn't match what  
</span><br>
<span class="quotelev1">&gt; you were trying to compile against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the output of mpif77 --showme?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort -I/opt/openmpi/include -L/opt/openmpi/lib -lmpi_f77 -lmpi - 
</span><br>
<span class="quotelev1">&gt; lopen-rte -lopen-pal -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;  &quot;_mpi_init_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      _MAIN__ in ifortIsUNoZ.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of these symbols were found because libmpi_f77.a was skipped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi --enable-static --disable-shared  
</span><br>
<span class="quotelev1">&gt; CC=gcc CFLAGS=-m64 CXX=g++ CXXFLAGS=-m64 F77=ifort FC=ifort FFLAGS=- 
</span><br>
<span class="quotelev1">&gt; assume nounderscore FCFLAGS=-assume nounderscore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have the intel compilers for Mac; do they default to  
</span><br>
<span class="quotelev1">&gt; producing 64 bit objects?  I ask because it looks like you forced  
</span><br>
<span class="quotelev1">&gt; the C and C++ compilers to produce 64 bit objects -- do you need to  
</span><br>
<span class="quotelev1">&gt; do the same with ifort?  (via the FCFLAGS and FFLAGS env variables)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, I had to add those flags, otherwise  
</span><br>
<span class="quotelev1">&gt; configure claimed that the compilers were not compatible. I can  
</span><br>
<span class="quotelev1">&gt; rerun configure if you suspect that this is an issue.  I did not add  
</span><br>
<span class="quotelev1">&gt; these flags to the Fortran variables because configure did not  
</span><br>
<span class="quotelev1">&gt; complain further, but I can see that this might be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, did you quote the &quot;-assume nounderscore&quot; arguments to FFLAGS/ 
</span><br>
<span class="quotelev1">&gt; FCFLAGS?  I.e., something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    &quot;FFLAGS=-assume nounderscore&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10627/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10626.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
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
