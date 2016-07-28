<?
$subject_val = "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 10:19:26 2009" -->
<!-- isoreceived="20090403141926" -->
<!-- sent="Fri, 3 Apr 2009 10:19:22 -0400 (EDT)" -->
<!-- isosent="20090403141922" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5" -->
<!-- id="alpine.DEB.1.10.0904031016190.21430_at_marvin.we-be-smart.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AA70C242FCB6FD4286597BD88BCB3F3F0C4683A0_at_marbioexc01.mar.dfo-mpo.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 10:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>Unfortunately, as the bug at Sun's web site points out, their compiler is 
<br>
borked.  There's not a lot we can do about that fact, without causing a 
<br>
whole host of other problems.
<br>
<p>If you aren't using C++, I'd recommend compiling Open MPI with GCC and 
<br>
then reseting the wrapper compilers to invoke the Sun C compiler for 
<br>
applications.  The two compilers are link-time compatible, so this won't 
<br>
cause any problems and you're unlikely to see any performance difference 
<br>
depending on which compiler you use to compile Open MPI (applications are, 
<br>
of course, a different story).  Have a look at the following FAQ entry for 
<br>
a quick how-to.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p>Brian
<br>
<p><p>On Fri, 3 Apr 2009, Segovia, Andrea wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI on a Red Hat Enterprise Linux 5 platform
</span><br>
<span class="quotelev1">&gt; with the Sun Studio 12 compiler suite. (I currently have the Red
</span><br>
<span class="quotelev1">&gt; Hat-bundled OpenMPI w/GNU compilers running).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have already encountered and addressed the problem of the C++ compiler
</span><br>
<span class="quotelev1">&gt; not working in 64 bit mode with the Red Hat-bundled GNU ld by not
</span><br>
<span class="quotelev1">&gt; including sunCC in the OpenMPI compilation, since we do not need C++
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have encountered another problem when attempting to compile
</span><br>
<span class="quotelev1">&gt; (at the &quot;make all&quot; stage):
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
<span class="quotelev1">&gt; Sun has published bug information about a similar error here:&#160;
</span><br>
<span class="quotelev1">&gt; <a href="http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405">http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=6567405</a> but I don't
</span><br>
<span class="quotelev1">&gt; know if it applies. Besides, their suggested fix is to change the source
</span><br>
<span class="quotelev1">&gt; code, something I would be extremely reluctant to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI users mailing list has at one reference to this problem here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/10/6908.php">http://www.open-mpi.org/community/lists/users/2008/10/6908.php</a> but I have
</span><br>
<span class="quotelev1">&gt; not been able to find a solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am enclosing a gzipped tar file with the configure output, config.log
</span><br>
<span class="quotelev1">&gt; and make output as suggested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;ompi_output.tar.gz&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the following options to configure (based on the
</span><br>
<span class="quotelev1">&gt; recommendations on the OpenMPI FAQ here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a> )This
</span><br>
<span class="quotelev1">&gt; section references the errors found above but does not provide a
</span><br>
<span class="quotelev1">&gt; work-around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160; $ ./configure CC=suncc F77=sunf77 FC=sunf90
</span><br>
<span class="quotelev1">&gt; --prefix=/export/home/segovia/RunTime_Environ/ --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --enable-shared--enable-orterun-prefix-by-default --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=small --disable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --disable-progress-threads --disable-debug --with-openib --without-udapl
</span><br>
<span class="quotelev1">&gt; --disable-openib-ibcm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone been successful with this build? What options/workarounds were
</span><br>
<span class="quotelev1">&gt; necessary to compile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help or information would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrea Segovia
</span><br>
<span class="quotelev1">&gt; IM&amp;TS,&#160; Data Centre Services, East / GIST, Services du Centre de
</span><br>
<span class="quotelev1">&gt; traitement des donn&#233;es de l' est
</span><br>
<span class="quotelev1">&gt; Fisheries and Oceans Canada | P&#234;ches et Oc&#233;ans Canada
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
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
