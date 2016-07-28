<?
$subject_val = "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 09:58:13 2009" -->
<!-- isoreceived="20090403135813" -->
<!-- sent="Fri, 03 Apr 2009 10:58:00 -0300" -->
<!-- isosent="20090403135800" -->
<!-- name="Segovia, Andrea" -->
<!-- email="SegoviaA_at_[hidden]" -->
<!-- subject="[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5" -->
<!-- id="AA70C242FCB6FD4286597BD88BCB3F3F0C4683A0_at_marbioexc01.mar.dfo-mpo.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5<br>
<strong>From:</strong> Segovia, Andrea (<em>SegoviaA_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 09:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Reply:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI on a Red Hat Enterprise Linux 5 platform with the Sun Studio 12 compiler suite. (I currently have the Red Hat-bundled OpenMPI w/GNU compilers running). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have already encountered and addressed the problem of the C++ compiler not working in 64 bit mode with the Red Hat-bundled GNU ld by not including sunCC in the OpenMPI compilation, since we do not need C++ support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have encountered another problem when attempting to compile (at the &quot;make all&quot; stage):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(atomic-asm.o): In function `opal_atomic_mb':
</span><br>
<span class="quotelev1">&gt; (.text+0x0): multiple definition of `opal_atomic_mb'
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x0): first defined here
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(atomic-asm.o): In function `opal_atomic_rmb':
</span><br>
<span class="quotelev1">&gt; (.text+0x6): multiple definition of `opal_atomic_rmb'
</span><br>
<span class="quotelev1">&gt; asm/.libs/libasm.a(asm.o):asm.c:(.text+0x10): first defined here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ..(small excerpt)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun has published bug information about a similar error here:  <a href="http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405">http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405</a> but I don't know if it applies. Besides, their suggested fix is to change the source code, something I would be extremely reluctant to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI users mailing list has at one reference to this problem here: <a href="http://www.open-mpi.org/community/lists/users/2008/10/6908.php">http://www.open-mpi.org/community/lists/users/2008/10/6908.php</a> but I have not been able to find a solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am enclosing a gzipped tar file with the configure output, config.log and make output as suggested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  &lt;&lt;ompi_output.tar.gz&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the following options to configure (based on the recommendations on the OpenMPI FAQ here: <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a> )This section references the errors found above but does not provide a work-around. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
&nbsp;&nbsp;$ ./configure CC=suncc F77=sunf77 FC=sunf90 --prefix=/export/home/segovia/RunTime_Environ/ --enable-heterogeneous --enable-shared--enable-orterun-prefix-by-default --enable-mpi-f90 --with-mpi-f90-size=small --disable-mpi-threads --disable-progress-threads --disable-debug --with-openib --without-udapl --disable-openib-ibcm
<br>
<p><span class="quotelev1">&gt; Has anyone been successful with this build? What options/workarounds were necessary to compile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help or information would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrea Segovia
</span><br>
<span class="quotelev1">&gt; IM&amp;TS,  Data Centre Services, East / GIST, Services du Centre de traitement des donn&#233;es de l' est
</span><br>
<span class="quotelev1">&gt; Fisheries and Oceans Canada | P&#234;ches et Oc&#233;ans Canada
</span><br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8761/ompi_output.tar.gz">ompi_output.tar.gz</a>
</ul>
<!-- attachment="ompi_output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Reply:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
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
