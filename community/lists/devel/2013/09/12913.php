<?
$subject_val = "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 12:44:30 2013" -->
<!-- isoreceived="20130917164430" -->
<!-- sent="Tue, 17 Sep 2013 16:44:21 +0000" -->
<!-- isosent="20130917164421" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A2209AB9D_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8B264A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 12:44:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12914.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12912.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12924.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>I pushed a bunch of fixes, can you please try now.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>-----Original Message-----
<br>
From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]] 
<br>
Sent: Tuesday, September 17, 2013 6:37 AM
<br>
To: Siegmar Gross; Open MPI Developers List
<br>
Cc: Joshua Ladd
<br>
Subject: Re: [OMPI users] Error in openmpi-1.9a1r29179
<br>
<p>...moving over to the devel list...
<br>
<p>Dave and I looked at this during a break in the EuroMPI conference, and noticed several things:
<br>
<p>1. Some of the shmem interfaces are functions (i.e., return non-void) and some are subroutines (i.e., return void).  They're currently all using a single macro to declare the interfaces, which assume functions.  So this macro is incorrect for subroutines -- you really need 2 macros.
<br>
<p>2. The macro name is OMPI_GENERATE_FORTRAN_BINDINGS -- why isn't is SHMEM_GENERATE_FORTRAN_BINDINGS?
<br>
<p>3. I notice that none of the Fortran interfaces are prototyped in shmem.fh.  Why not? A shmem person here in Madrid mentioned that there is supposed to be a shmem.fh file and a shmem modulefile.
<br>
<p><p>On Sep 17, 2013, at 8:49 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.9a1r29179 on &quot;openSuSE Linux 12.1&quot;, 
</span><br>
<span class="quotelev1">&gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 
</span><br>
<span class="quotelev1">&gt; 64-bit mode. Unfortunately &quot;make&quot; breaks with the same error on all 
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tail -15 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CCLD     libshmem_c.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
</span><br>
<span class="quotelev1">&gt; Making all in shmem/fortran
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
</span><br>
<span class="quotelev1">&gt;  CC       start_pes_f.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 16: void function cannot return value 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 16: void function cannot return value 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 16: void function cannot return value
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [start_pes_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured with the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r29179/configure --prefix=/usr/local/openmpi-1.9_64_cc 
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \  
</span><br>
<span class="quotelev1">&gt; --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \  
</span><br>
<span class="quotelev1">&gt; --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.7.0_07-64 \  LDFLAGS=&quot;-m64&quot; \  CC=&quot;cc&quot; 
</span><br>
<span class="quotelev1">&gt; CXX=&quot;CC&quot; FC=&quot;f95&quot; \  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; 
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-m64&quot; \  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; 
</span><br>
<span class="quotelev1">&gt; \  --enable-mpi-cxx \  --enable-cxx-exceptions \  --enable-mpi-java \  
</span><br>
<span class="quotelev1">&gt; --enable-heterogeneous \  --enable-opal-multi-threads \  
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple \  --with-threads=posix \  
</span><br>
<span class="quotelev1">&gt; --with-hwloc=internal \  --without-verbs \  --without-udapl \  
</span><br>
<span class="quotelev1">&gt; --without-sctp \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the bug. Thank you very much 
</span><br>
<span class="quotelev1">&gt; for any help in advance.
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12914.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12912.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12924.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
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
