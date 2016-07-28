<?
$subject_val = "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 06:38:10 2013" -->
<!-- isoreceived="20130918103810" -->
<!-- sent="Wed, 18 Sep 2013 12:18:03 +0200 (CEST)" -->
<!-- isosent="20130918101803" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179" -->
<!-- id="201309181018.r8IAI3rB015978_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 06:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Maybe in reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Reply:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Josh,
<br>
<p>thank you very much for your help. Unfortunately I have still a
<br>
problem to build Open MPI.
<br>
<p><span class="quotelev1">&gt; I pushed a bunch of fixes, can you please try now.
</span><br>
<p>I tried to build /openmpi-1.9a1r29197 on my platforms and now I get
<br>
on all platforms the following error.
<br>
<p><p>linpc1 openmpi-1.9a1r29197-Linux.x86_64.64_cc 117 tail -22 log.make.Linux.x86_64.64_cc
<br>
&nbsp;&nbsp;CC       base/memheap_base_alloc.lo
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 167: warning: statement not reached
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 192: warning: statement not reached
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 217: warning: statement not reached
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/spml/spml.h&quot;, line 76: warning: anonymous union declaration
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 112: warning: argument mismatch
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 119: warning: argument mismatch
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 124: warning: argument mismatch
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 248: warning: pointer to void or function used in arithmetic
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 286: syntax error before or at: |
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, line 300: warning: pointer to void or function used in arithmetic
<br>
cc: acomp failed for ../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c
<br>
make[2]: *** [base/memheap_base_alloc.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29197-Linux.x86_64.64_cc/oshmem/mca/memheap'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29197-Linux.x86_64.64_cc/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 17, 2013 6:37 AM
</span><br>
<span class="quotelev1">&gt; To: Siegmar Gross; Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Cc: Joshua Ladd
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error in openmpi-1.9a1r29179
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...moving over to the devel list...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dave and I looked at this during a break in the EuroMPI conference, and noticed several things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Some of the shmem interfaces are functions (i.e., return non-void) and some are subroutines (i.e., return void).  They're currently all using a single macro 
</span><br>
to declare the interfaces, which assume functions.  So this macro is incorrect for subroutines -- you really need 2 macros.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The macro name is OMPI_GENERATE_FORTRAN_BINDINGS -- why isn't is SHMEM_GENERATE_FORTRAN_BINDINGS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. I notice that none of the Fortran interfaces are prototyped in shmem.fh.  Why not? A shmem person here in Madrid mentioned that there is supposed to be a 
</span><br>
shmem.fh file and a shmem modulefile.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2013, at 8:49 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I tried to install openmpi-1.9a1r29179 on &quot;openSuSE Linux 12.1&quot;, 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 
</span><br>
<span class="quotelev2">&gt; &gt; 64-bit mode. Unfortunately &quot;make&quot; breaks with the same error on all 
</span><br>
<span class="quotelev2">&gt; &gt; platforms.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tail -15 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  CCLD     libshmem_c.la
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
</span><br>
<span class="quotelev2">&gt; &gt; Making all in shmem/fortran
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
</span><br>
<span class="quotelev2">&gt; &gt;  CC       start_pes_f.lo
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev2">&gt; &gt; line 16: void function cannot return value 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev2">&gt; &gt; line 16: void function cannot return value 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev2">&gt; &gt; line 16: void function cannot return value
</span><br>
<span class="quotelev2">&gt; &gt; cc: acomp failed for 
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [start_pes_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I configured with the following command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-1.9a1r29179/configure --prefix=/usr/local/openmpi-1.9_64_cc 
</span><br>
<span class="quotelev2">&gt; &gt; \
</span><br>
<span class="quotelev2">&gt; &gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \  
</span><br>
<span class="quotelev2">&gt; &gt; --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \  
</span><br>
<span class="quotelev2">&gt; &gt; --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
</span><br>
<span class="quotelev2">&gt; &gt;  JAVA_HOME=/usr/local/jdk1.7.0_07-64 \  LDFLAGS=&quot;-m64&quot; \  CC=&quot;cc&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; CXX=&quot;CC&quot; FC=&quot;f95&quot; \  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=&quot;-m64&quot; \  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; \  --enable-mpi-cxx \  --enable-cxx-exceptions \  --enable-mpi-java \  
</span><br>
<span class="quotelev2">&gt; &gt; --enable-heterogeneous \  --enable-opal-multi-threads \  
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-thread-multiple \  --with-threads=posix \  
</span><br>
<span class="quotelev2">&gt; &gt; --with-hwloc=internal \  --without-verbs \  --without-udapl \  
</span><br>
<span class="quotelev2">&gt; &gt; --without-sctp \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful if somebody can fix the bug. Thank you very much 
</span><br>
<span class="quotelev2">&gt; &gt; for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Maybe in reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Reply:</strong> <a href="12925.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
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
