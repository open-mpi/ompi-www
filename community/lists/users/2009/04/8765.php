<?
$subject_val = "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 11:16:58 2009" -->
<!-- isoreceived="20090403151658" -->
<!-- sent="Fri, 03 Apr 2009 11:16:17 -0400" -->
<!-- isosent="20090403151617" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12" -->
<!-- id="49D62841.8090204_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Problems Compiling OpenMPI with Sun Studio 12" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 11:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8766.php">Francesco Pietra: "[OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of the Sun Studio compilers are you using also which 
<br>
version of OMPI are you trying to build.  I am successful with building 
<br>
OMPI with the Sun Studio Express release 200811 on Linux systems if I 
<br>
don't use the C++ compiler.  Prior releases we did suffer from some 
<br>
issues.  A &quot;cc -V&quot; will give you the exact version of Sun Studio you are 
<br>
using.
<br>
<p>I noticed in your configure line below you don't have a space between 
<br>
&quot;--enable-shared&quot; and &quot;--enable-orterun-prefix-by-default &quot;.  Not sure 
<br>
this has anything to do with your problem but it might cause unintended 
<br>
results.
<br>
<p>--td
<br>
<p><p><span class="quotelev1">&gt; Date: Fri, 03 Apr 2009 10:58:00 -0300 From: &quot;Segovia, Andrea&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;SegoviaA_at_[hidden]&gt; Subject: [OMPI users] Problems Compiling 
</span><br>
<span class="quotelev1">&gt; OpenMPI with Sun Studio 12 compilers on RHEL 5 To: users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Message-ID: 
</span><br>
<span class="quotelev1">&gt; &lt;AA70C242FCB6FD4286597BD88BCB3F3F0C4683A0_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to compile OpenMPI on a Red Hat Enterprise Linux 5 platform with the Sun Studio 12 compiler suite. (I currently have the Red Hat-bundled OpenMPI w/GNU compilers running). 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have already encountered and addressed the problem of the C++ compiler not working in 64 bit mode with the Red Hat-bundled GNU ld by not including sunCC in the OpenMPI compilation, since we do not need C++ support.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, I have encountered another problem when attempting to compile (at the &quot;make all&quot; stage):
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; asm/.libs/libasm.a(atomic-asm.o): In function `opal_atomic_mb':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (.text+0x0): multiple definition of `opal_atomic_mb'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x0): first defined here
</span><br>
<span class="quotelev3">&gt;&gt; &gt; asm/.libs/libasm.a(atomic-asm.o): In function `opal_atomic_rmb':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (.text+0x6): multiple definition of `opal_atomic_rmb'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x10): first defined here
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ..(small excerpt)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sun has published bug information about a similar error here:  <a href="http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405">http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405</a> but I don't know if it applies. Besides, their suggested fix is to change the source code, something I would be extremely reluctant to do.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The OpenMPI users mailing list has at one reference to this problem here: <a href="http://www.open-mpi.org/community/lists/users/2008/10/6908.php">http://www.open-mpi.org/community/lists/users/2008/10/6908.php</a> but I have not been able to find a solution.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am enclosing a gzipped tar file with the configure output, config.log and make output as suggested.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  &lt;&lt;ompi_output.tar.gz&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am using the following options to configure (based on the recommendations on the OpenMPI FAQ here: <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a> )This section references the errors found above but does not provide a work-around. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;   $ ./configure CC=suncc F77=sunf77 FC=sunf90 --prefix=/export/home/segovia/RunTime_Environ/ --enable-heterogeneous --enable-shared--enable-orterun-prefix-by-default --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads --disable-progress-threads --disable-debug --with-openib --without-udapl --disable-openib-ibcm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Has anyone been successful with this build? What options/workarounds were necessary to compile?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any help or information would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Andrea Segovia
</span><br>
<span class="quotelev3">&gt;&gt; &gt; IM&amp;TS,  Data Centre Services, East / GIST, Services du Centre de traitement des donn?es de l' est
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fisheries and Oceans Canada | P?ches et Oc?ans Canada
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8766.php">Francesco Pietra: "[OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
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
