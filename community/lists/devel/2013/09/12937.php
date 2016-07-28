<?
$subject_val = "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 05:36:53 2013" -->
<!-- isoreceived="20130919093653" -->
<!-- sent="Thu, 19 Sep 2013 11:30:04 +0200 (CEST)" -->
<!-- isosent="20130919093004" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179" -->
<!-- id="201309190930.r8J9U4DW029188_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2013-09-19 05:30:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12938.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12936.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Maybe in reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12938.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Josh,
<br>
<p><span class="quotelev1">&gt; Try now, please.
</span><br>
<p>I can build openmpi-1.9a1r29209 with my Sun C compiler on my platforms.
<br>
Thank you very much for your help! I can even use it on Linux and
<br>
I still get a Bus Error on Solaris, but that is a different problem.
<br>
I'm happy that I have at least one working platform again.
<br>
<p>Kind regards and thank you very much once more
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Siegmar Gross [mailto:Siegmar.Gross_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 18, 2013 6:32 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Siegmar.Gross_at_[hidden]; Joshua Ladd
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] Error in openmpi-1.9a1r29179
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your help. Unfortunately I have still a problem to 
</span><br>
build Open MPI.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I pushed a bunch of fixes, can you please try now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build /openmpi-1.9a1r29197 on my platforms and now I get on all 
</span><br>
platforms the following error.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9a1r29197-Linux.x86_64.64_cc 117 tail -22 
</span><br>
log.make.Linux.x86_64.64_cc
<br>
<span class="quotelev1">&gt;   CC       base/memheap_base_alloc.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 
</span><br>
136: warning: parameter in inline asm statement unused: %3 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 
<br>
182: warning: parameter in inline asm statement unused: %2 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 
<br>
203: warning: parameter in inline asm statement unused: %2 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 
<br>
224: warning: parameter in inline asm statement unused: %2 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/amd64/atomic.h&quot;, line 
<br>
245: warning: parameter in inline asm statement unused: %2 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 167: 
<br>
warning: statement not reached 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 192: 
<br>
warning: statement not reached 
<br>
&quot;../../../../openmpi-1.9a1r29197/opal/include/opal/sys/atomic_impl.h&quot;, line 217: 
<br>
warning: statement not reached 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/spml/spml.h&quot;, line 76: warning: 
<br>
anonymous union declaration 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 112: warning: argument mismatch 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 119: warning: argument mismatch 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 124: warning: argument mismatch 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 248: warning: pointer to void or function used in arithmetic 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 286: syntax error before or at: | 
<br>
&quot;../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c&quot;, 
<br>
line 300: warning: pointer to void or function used in arithmetic
<br>
<span class="quotelev1">&gt; cc: acomp failed for 
</span><br>
../../../../openmpi-1.9a1r29197/oshmem/mca/memheap/base/memheap_base_alloc.c
<br>
<span class="quotelev1">&gt; make[2]: *** [base/memheap_base_alloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29197-Linux.x86_64.64_cc/oshmem/mca/memh
<br>
eap'
<br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29197-Linux.x86_64.64_cc/oshmem'
<br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, September 17, 2013 6:37 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Siegmar Gross; Open MPI Developers List
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Joshua Ladd
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Error in openmpi-1.9a1r29179
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...moving over to the devel list...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dave and I looked at this during a break in the EuroMPI conference, and 
</span><br>
noticed several things:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. Some of the shmem interfaces are functions (i.e., return non-void) 
</span><br>
<span class="quotelev2">&gt; &gt; and some are subroutines (i.e., return void).  They're currently all 
</span><br>
<span class="quotelev2">&gt; &gt; using a single macro
</span><br>
<span class="quotelev1">&gt; to declare the interfaces, which assume functions.  So this macro is incorrect 
</span><br>
for subroutines -- you really need 2 macros.
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. The macro name is OMPI_GENERATE_FORTRAN_BINDINGS -- why isn't is 
</span><br>
SHMEM_GENERATE_FORTRAN_BINDINGS?
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. I notice that none of the Fortran interfaces are prototyped in 
</span><br>
<span class="quotelev2">&gt; &gt; shmem.fh.  Why not? A shmem person here in Madrid mentioned that there 
</span><br>
<span class="quotelev2">&gt; &gt; is supposed to be a
</span><br>
<span class="quotelev1">&gt; shmem.fh file and a shmem modulefile.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 17, 2013, at 8:49 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to install openmpi-1.9a1r29179 on &quot;openSuSE Linux 12.1&quot;, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 64-bit mode. Unfortunately &quot;make&quot; breaks with the same error on all 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; platforms.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tail -15 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  CCLD     libshmem_c.la
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
<br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
<br>
<span class="quotelev3">&gt; &gt; &gt; Making all in shmem/fortran
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Entering directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fo
<br>
rtran'
<br>
<span class="quotelev3">&gt; &gt; &gt;  CC       start_pes_f.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; , line 16: void function cannot return value 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; , line 16: void function cannot return value 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; , line 16: void function cannot return value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cc: acomp failed for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [start_pes_f.lo] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fo
<br>
rtran'
<br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem'
<br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I configured with the following command.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../openmpi-1.9a1r29179/configure 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --prefix=/usr/local/openmpi-1.9_64_cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  JAVA_HOME=/usr/local/jdk1.7.0_07-64 \  LDFLAGS=&quot;-m64&quot; \  CC=&quot;cc&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CXX=&quot;CC&quot; FC=&quot;f95&quot; \  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FCFLAGS=&quot;-m64&quot; \  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \  --enable-mpi-cxx \  --enable-cxx-exceptions \  --enable-mpi-java 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \ --enable-heterogeneous \  --enable-opal-multi-threads \ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-mpi-thread-multiple \  --with-threads=posix \ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-hwloc=internal \  --without-verbs \  --without-udapl \ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --without-sctp \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  --enable-debug \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would be grateful if somebody can fix the bug. Thank you very much 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12938.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12936.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Maybe in reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12938.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
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
