<?
$subject_val = "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 18:25:47 2009" -->
<!-- isoreceived="20090911222547" -->
<!-- sent="Fri, 11 Sep 2009 18:25:42 -0400" -->
<!-- isosent="20090911222542" -->
<!-- name="Andreas Haselbacher" -->
<!-- email="haselbac.ufl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on OS X - file is not of required architecture" -->
<!-- id="d71c6d210909111525r642fb47fu3f2e32ae11b3b213_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF3AEA8D-FA21-412E-B7CD-44E0EAFCF223_at_cisco.com" -->
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
<strong>From:</strong> Andreas Haselbacher (<em>haselbac.ufl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 18:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 11, 2009 at 5:10 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 11, 2009, at 10:05 AM, Andreas Haselbacher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've built openmpi version 1.3.3 on a MacPro with OS X 10.5.8 and the
</span><br>
<span class="quotelev2">&gt;&gt; Intel 10.1.006 Fortran compiler and gcc 4.0.  As far as I can tell, the
</span><br>
<span class="quotelev2">&gt;&gt; configure and make commands completed fine. There are some warnings, but
</span><br>
<span class="quotelev2">&gt;&gt; it's not clear to me that they are critical - or the explanation for what's
</span><br>
<span class="quotelev2">&gt;&gt; not working. After installing, I try to compile a simple F77 hello world
</span><br>
<span class="quotelev2">&gt;&gt; code. The output is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpif77 helloworld_mpi.f -o helloworld_mpi
</span><br>
<span class="quotelev2">&gt;&gt; ld: warning in /opt/openmpi/lib/libmpi_f77.a, file is not of required
</span><br>
<span class="quotelev2">&gt;&gt; architecture
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that it skipped that library because it didn't match what you
</span><br>
<span class="quotelev1">&gt; were trying to compile against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the output of mpif77 --showme?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>ifort -I/opt/openmpi/include -L/opt/openmpi/lib -lmpi_f77 -lmpi -lopen-rte
<br>
-lopen-pal -lutil
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;_mpi_init_&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;      _MAIN__ in ifortIsUNoZ.o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of these symbols were found because libmpi_f77.a was skipped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Here's my configure command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi --enable-static --disable-shared CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-m64 CXX=g++ CXXFLAGS=-m64 F77=ifort FC=ifort FFLAGS=-assume
</span><br>
<span class="quotelev2">&gt;&gt; nounderscore FCFLAGS=-assume nounderscore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have the intel compilers for Mac; do they default to producing 64
</span><br>
<span class="quotelev1">&gt; bit objects?  I ask because it looks like you forced the C and C++ compilers
</span><br>
<span class="quotelev1">&gt; to produce 64 bit objects -- do you need to do the same with ifort?  (via
</span><br>
<span class="quotelev1">&gt; the FCFLAGS and FFLAGS env variables)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If I remember correctly, I had to add those flags, otherwise configure
<br>
claimed that the compilers were not compatible. I can rerun configure if you
<br>
suspect that this is an issue.  I did not add these flags to the Fortran
<br>
variables because configure did not complain further, but I can see that
<br>
this might be an issue.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, did you quote the &quot;-assume nounderscore&quot; arguments to FFLAGS/FCFLAGS?
</span><br>
<span class="quotelev1">&gt;  I.e., something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    &quot;FFLAGS=-assume nounderscore&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, I did.
<br>
<p>Andreas
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
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
