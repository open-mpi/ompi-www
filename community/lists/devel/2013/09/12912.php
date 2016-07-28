<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI users] Error in openmpi-1.9a1r29179";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 09:32:20 2013" -->
<!-- isoreceived="20130917133220" -->
<!-- sent="Tue, 17 Sep 2013 13:31:34 +0000" -->
<!-- isosent="20130917133134" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI users] Error in openmpi-1.9a1r29179" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD4410FF6B_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI users] Error in openmpi-1.9a1r29179<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 09:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12913.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12911.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12913.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree on the shmem.fh statements.  There are a couple of really painful interfaces to prototype, but for the most part, it should be straight forward.

There's nothing in the OpenSHMEM specification that suggests providing a Fortran module, so I believe you got bad advice there.

Brian


--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
Sent: Tuesday, September 17, 2013 4:37 AM
To: Siegmar Gross; Open MPI Developers List
Subject: [EXTERNAL] Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179

...moving over to the devel list...

Dave and I looked at this during a break in the EuroMPI conference, and noticed several things:

1. Some of the shmem interfaces are functions (i.e., return non-void) and some are subroutines (i.e., return void).  They're currently all using a single macro to declare the interfaces, which assume functions.  So this macro is incorrect for subroutines -- you really need 2 macros.

2. The macro name is OMPI_GENERATE_FORTRAN_BINDINGS -- why isn't is SHMEM_GENERATE_FORTRAN_BINDINGS?

3. I notice that none of the Fortran interfaces are prototyped in shmem.fh.  Why not? A shmem person here in Madrid mentioned that there is supposed to be a shmem.fh file and a shmem modulefile.


On Sep 17, 2013, at 8:49 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:

&gt; Hi,
&gt;
&gt; I tried to install openmpi-1.9a1r29179 on &quot;openSuSE Linux 12.1&quot;,
&gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in
&gt; 64-bit mode. Unfortunately &quot;make&quot; breaks with the same error on
&gt; all platforms.
&gt;
&gt; tail -15 log.make.Linux.x86_64.64_cc
&gt;
&gt;  CCLD     libshmem_c.la
&gt; make[3]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/c'
&gt; Making all in shmem/fortran
&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
&gt;  CC       start_pes_f.lo
&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
&gt; &quot;../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c&quot;, line 16: void function cannot return value
&gt; cc: acomp failed for ../../../../openmpi-1.9a1r29179/oshmem/shmem/fortran/start_pes_f.c
&gt; make[2]: *** [start_pes_f.lo] Error 1
&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem/shmem/fortran'
&gt; make[1]: *** [all-recursive] Error 1
&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29179-Linux.x86_64.64_cc/oshmem'
&gt; make: *** [all-recursive] Error 1
&gt;
&gt;
&gt; I configured with the following command.
&gt;
&gt; ../openmpi-1.9a1r29179/configure --prefix=/usr/local/openmpi-1.9_64_cc \
&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
&gt;  --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \
&gt;  --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
&gt;  JAVA_HOME=/usr/local/jdk1.7.0_07-64 \
&gt;  LDFLAGS=&quot;-m64&quot; \
&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
&gt;  --enable-mpi-cxx \
&gt;  --enable-cxx-exceptions \
&gt;  --enable-mpi-java \
&gt;  --enable-heterogeneous \
&gt;  --enable-opal-multi-threads \
&gt;  --enable-mpi-thread-multiple \
&gt;  --with-threads=posix \
&gt;  --with-hwloc=internal \
&gt;  --without-verbs \
&gt;  --without-udapl \
&gt;  --without-sctp \
&gt;  --with-wrapper-cflags=-m64 \
&gt;  --enable-debug \
&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
&gt;
&gt;
&gt;
&gt; I would be grateful if somebody can fix the bug. Thank you very
&gt; much for any help in advance.
&gt;
&gt;
&gt; Kind regards
&gt;
&gt; Siegmar
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12913.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12911.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12913.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
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
