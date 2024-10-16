<?
$subject_val = "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 15:54:22 2009" -->
<!-- isoreceived="20090914195422" -->
<!-- sent="Mon, 14 Sep 2009 15:54:17 -0400" -->
<!-- isosent="20090914195417" -->
<!-- name="Andreas Haselbacher" -->
<!-- email="haselbac.ufl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on OS X - file is not of required architecture" -->
<!-- id="d71c6d210909141254x35198b3fo4fceb09262b730dc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3FA2D621-D5C7-4579-94B7-8A0BFA040D3D_at_rain.org" -->
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
<strong>Date:</strong> 2009-09-14 15:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10645.php">Brock Palen: "[OMPI users] openmpi+nag/5.1 error with libpthread"</a>
<li><strong>In reply to:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 11, 2009 at 6:35 PM, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Andreas,
</span><br>
<span class="quotelev1">&gt; Have you checked that ifort is creating 64 bit objects. If I remember
</span><br>
<span class="quotelev1">&gt; correctly with 10.1 the default was to create 32 bit objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I have not done so yet. I was under the impression that it was building
<br>
32-bit initially. Then when I ran configure without the -m64 option to
<br>
CFLAGS and CXXFLAGS, I would get the following message:
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether ifort accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking ifort external symbol convention... no underscore
<br>
checking if C and Fortran 77 are link compatible... no
<br>
**********************************************************************
<br>
It appears that your Fortran 77 compiler is unable to link against
<br>
object files created by your C compiler.  This typically indicates
<br>
one of a few possibilities:
<br>
<p>&nbsp;&nbsp;- A conflict between CFLAGS and FFLAGS
<br>
&nbsp;&nbsp;- A problem with your compiler installation(s)
<br>
&nbsp;&nbsp;- Different default build options between compilers (e.g., C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;building for 32 bit and Fortran building for 64 bit)
<br>
&nbsp;&nbsp;- Incompatible compilers
<br>
<p>Such problems can usually be solved by picking compatible compilers
<br>
and/or CFLAGS and FFLAGS.  More information (including exactly what
<br>
command was given to the compilers and what error resulted when the
<br>
commands were executed) is available in the config.log file in this
<br>
directory.
<br>
**********************************************************************
<br>
<p>So I (naively) figured that it had to build 64-bit, added the flags, and ran
<br>
configure successfully (or so I thought). I tried running ifort -V (as
<br>
suggested by Warner Yuen in a follow-up email), but I just discovered that
<br>
maybe something's messed up with my path since I get different results from
<br>
an xterm and the Terminal. I will need to figure out what's going on here
<br>
first...
<br>
<p>Thanks,
<br>
<p>Andreas
<br>
<p><p><span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2009, at 3:25 PM, Andreas Haselbacher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 11, 2009 at 5:10 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2009, at 10:05 AM, Andreas Haselbacher wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've built openmpi version 1.3.3 on a MacPro with OS X 10.5.8 and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel 10.1.006 Fortran compiler and gcc 4.0.  As far as I can tell, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure and make commands completed fine. There are some warnings, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not clear to me that they are critical - or the explanation for what's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not working. After installing, I try to compile a simple F77 hello world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code. The output is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpif77 helloworld_mpi.f -o helloworld_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: warning in /opt/openmpi/lib/libmpi_f77.a, file is not of required
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architecture
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that it skipped that library because it didn't match what you
</span><br>
<span class="quotelev2">&gt;&gt; were trying to compile against.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the output of mpif77 --showme?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort -I/opt/openmpi/include -L/opt/openmpi/lib -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Undefined symbols:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;_mpi_init_&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _MAIN__ in ifortIsUNoZ.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; None of these symbols were found because libmpi_f77.a was skipped.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Here's my configure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi --enable-static --disable-shared CC=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-m64 CXX=g++ CXXFLAGS=-m64 F77=ifort FC=ifort FFLAGS=-assume
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nounderscore FCFLAGS=-assume nounderscore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not have the intel compilers for Mac; do they default to producing 64
</span><br>
<span class="quotelev2">&gt;&gt; bit objects?  I ask because it looks like you forced the C and C++ compilers
</span><br>
<span class="quotelev2">&gt;&gt; to produce 64 bit objects -- do you need to do the same with ifort?  (via
</span><br>
<span class="quotelev2">&gt;&gt; the FCFLAGS and FFLAGS env variables)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, I had to add those flags, otherwise configure
</span><br>
<span class="quotelev1">&gt; claimed that the compilers were not compatible. I can rerun configure if you
</span><br>
<span class="quotelev1">&gt; suspect that this is an issue.  I did not add these flags to the Fortran
</span><br>
<span class="quotelev1">&gt; variables because configure did not complain further, but I can see that
</span><br>
<span class="quotelev1">&gt; this might be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, did you quote the &quot;-assume nounderscore&quot; arguments to
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS/FCFLAGS?  I.e., something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;FFLAGS=-assume nounderscore&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10645.php">Brock Palen: "[OMPI users] openmpi+nag/5.1 error with libpthread"</a>
<li><strong>In reply to:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
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
