<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 13:56:11 2007" -->
<!-- isoreceived="20071018175611" -->
<!-- sent="Thu, 18 Oct 2007 13:55:55 -0400" -->
<!-- isosent="20071018175555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="3543F834-4815-472E-B991-0417039EFFA7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0710180942v2ff22ae1s516caac35e71e4cc_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 13:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see the real problem: your C and Fortran compilers are not  
<br>
generating compatible code.  Here's the relevant snipit from config.log:
<br>
<p>configure:33849: checking size of Fortran 90 LOGICAL
<br>
configure:33918: gcc -DNDEBUG -O2 -g -pipe -m32 -march=i386 - 
<br>
mtune=pentium4 -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33925: $? = 0
<br>
configure:33935: gfortran   conftestf.f90 conftest.o -o conftest
<br>
/usr/bin/ld: warning: i386 architecture of input file `conftest.o' is  
<br>
incompatible with i386:x86-64 output
<br>
configure:33942: $? = 0
<br>
configure:33990: ./conftest
<br>
configure:33997: $? = 139
<br>
configure:34006: error: Could not determine size of LOGICAL
<br>
<p>Specifically, when OMPI's configure is checking the size of various  
<br>
Fortran types, it compiles a simple C object file and then compiles/ 
<br>
links a simple fortran program against that C object file.
<br>
<p>In this case, you're using different flags for C and fortran, and  
<br>
they're not compatible -- so it fails to compile properly.  However,  
<br>
the fun part is that gfortran still gives a return status of 0, so  
<br>
configure thinks that the compile succeeded and tries to run the  
<br>
resulting executable.  The resulting executable seg faults (not  
<br>
gfortran), and things go downhill from there.
<br>
<p>&nbsp;From the top of your config.log, you invoked configure with the  
<br>
following command line:
<br>
<p>./configure --build=x86_64-redhat-linux-gnu --host=x86_64-redhat- 
<br>
linux-gnu --target=i386-redhat-linux-gnu --program-prefix= --prefix=/ 
<br>
usr --exec-prefix=/usr --bindir=/usr/bin --sbindir=/usr/sbin -- 
<br>
sysconfdir=/etc --datadir=/usr/share --includedir=/usr/include -- 
<br>
libdir=/usr/lib64 --libexecdir=/usr/libexec --localstatedir=/var -- 
<br>
sharedstatedir=/usr/com --mandir=/usr/share/man --infodir=/usr/share/ 
<br>
info
<br>
<p>I don't see you overriding CFLAGS in there anywhere, but it's  
<br>
possible you set that CFLAGS environment variable before invoking  
<br>
configure.
<br>
<p>The solution here is to make the compiler flags for all 4 compilers  
<br>
(C, C++, F77, F90) produce object code for the same bitness/etc.  So  
<br>
if you're using -m32 for the C compiler, then you also need to setenv  
<br>
FCFLAGS and FFLAGS to -m32 (I'm pretty sure that's the right flag for  
<br>
gfortran; RTFM if it's not).
<br>
<p>Let me know if that works.
<br>
<p><p><p>On Oct 18, 2007, at 12:42 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Attached is the requested info.  There's not much here, though...it
</span><br>
<span class="quotelev1">&gt; dies pretty early in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/17/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2007, at 12:35 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking size of Fortran 90 LOGICAL... ./configure: line 34070:   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7262
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awesome!  It looks like gfortran itself is seg faulting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send all the information listed on the getting help page?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That will help confirm/deny whether it's gfortran itself that is seg
</span><br>
<span class="quotelev2">&gt;&gt; faulting.  If it's gfortran that's seg faulting, there's not much
</span><br>
<span class="quotelev2">&gt;&gt; that Open MPI can do...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;output.tgz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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
