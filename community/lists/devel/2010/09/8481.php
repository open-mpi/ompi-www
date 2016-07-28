<?
$subject_val = "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 14 03:07:41 2010" -->
<!-- isoreceived="20100914070741" -->
<!-- sent="Tue, 14 Sep 2010 09:07:33 +0200" -->
<!-- isosent="20100914070733" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5: VT integration &amp;quot;issue&amp;quot; on Solaris/SPARC" -->
<!-- id="201009140907.34251.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C75E9EB.60509_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-14 03:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8482.php">’≈æß: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8371.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Paul,
<br>
<p>the default option behavior of VT makes not sense in Open MPI, so it will be 
<br>
disabled in v1.5[rc7].
<br>
<p>Thanks for the hint!
<br>
<p>Matthias
<br>
<p>On Thursday 26 August 2010 06:13:31 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I've encountered an interesting situation on Solaris/SPARC where Open
</span><br>
<span class="quotelev1">&gt; MPI defaults to CC=gcc but the contrib'ed VampirTrace is defaulting to
</span><br>
<span class="quotelev1">&gt; CC=cc.  Additionally, Open MPI on SPARC requires CFLAGS be set to get a
</span><br>
<span class="quotelev1">&gt; non-default ABI from the compiler.  This leads to two different failure
</span><br>
<span class="quotelev1">&gt; modes for me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Platform:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a; echo; cc -V; echo; gcc --version
</span><br>
<span class="quotelev1">&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.10 SunOS_sparc 2009/06/03
</span><br>
<span class="quotelev1">&gt; usage: cc [ options] files.  Use 'cc -flags' for details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As detailed elsewhere
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8365.php">http://www.open-mpi.org/community/lists/devel/2010/08/8365.php</a>) my
</span><br>
<span class="quotelev1">&gt; gcc-3.3.2 will work with either of the following:
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;     CFLAGS=-mcpu=v9
</span><br>
<span class="quotelev1">&gt; Where and CXXFLAGS, FFLAGS and FCFLAGS are set to match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting with the first option...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ [path_to]/openmpi-1.5rc5/configure --disable-mpi-f90 CFLAGS='-mv8plus
</span><br>
<span class="quotelev1">&gt; -Wa,-xarch=v8plus' CXXFLAGS='-mv8plus -Wa,-xarch=v8plus'
</span><br>
<span class="quotelev1">&gt; FFLAGS='-mv8plus -Wa,-xarch=v8plus'
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; --- vt (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: running /bin/bash
</span><br>
<span class="quotelev1">&gt; '../../../../../ompi/contrib/vt/vt/configure' --disable-option-checking
</span><br>
<span class="quotelev1">&gt; --with-openmpi-inside '--disable-mpi-f90' 'CFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt; -Wa,-xarch=v8plus' 'CXXFLAGS=-mv8plus -Wa,-xarch=v8plus'
</span><br>
<span class="quotelev1">&gt; 'FFLAGS=-mv8plus -Wa,-xarch=v8plus'  --cache-file=/dev/null
</span><br>
<span class="quotelev1">&gt; --srcdir=../../../../../ompi/contrib/vt/vt --disable-option-checking
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/install-sh -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; checking for gawk... no
</span><br>
<span class="quotelev1">&gt; checking for mawk... no
</span><br>
<span class="quotelev1">&gt; checking for nawk... nawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking build system type... sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt; checking host system type... sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt; checking for platform... sun
</span><br>
<span class="quotelev1">&gt; checking for options file...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/defaults/sun
</span><br>
<span class="quotelev1">&gt; configure: loading options from
</span><br>
<span class="quotelev1">&gt; '../../../../../ompi/contrib/vt/vt/config/defaults/sun'
</span><br>
<span class="quotelev1">&gt; CC=&quot;cc&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;CC&quot;
</span><br>
<span class="quotelev1">&gt; F77=&quot;f77&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;f95&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; OPENMP_CFLAGS=&quot;-xopenmp -xO3 -D_REENTRANT&quot;
</span><br>
<span class="quotelev1">&gt; PTHREAD_CFLAGS=&quot;-D_REENTRANT&quot;
</span><br>
<span class="quotelev1">&gt; PTHREAD_LIBS=&quot;-lpthread&quot;
</span><br>
<span class="quotelev1">&gt; enable_memtrace=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt; enable_cpuidtrace=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt; configure: builddir:
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt2/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /export/home/phargrov/openmpi-1.5rc5/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: detected VPATH build
</span><br>
<span class="quotelev1">&gt; checking if build filesystem is case sensitive... yes
</span><br>
<span class="quotelev1">&gt; checking for gcc... cc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev1">&gt; configure: error: in
</span><br>
<span class="quotelev1">&gt; `/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt2/ompi/contrib/vt/vt':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; configure: /bin/bash '../../../../../ompi/contrib/vt/vt/configure'
</span><br>
<span class="quotelev1">&gt; *failed* for ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; checking if contributed component vt can compile... no
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The VT configure script has tried to us CC=cc and CFLAGS='-mv8plus
</span><br>
<span class="quotelev1">&gt; -Wa,-xarch=v8plus', with the unsurprising result:
</span><br>
<span class="quotelev1">&gt;   checking whether the C compiler works... no
</span><br>
<span class="quotelev1">&gt; So, VT has been disabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the second CFLAGS option and corresponding failure mode:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ [path_to]/openmpi-1.5rc5/configure --disable-mpi-f90 CFLAGS=-mcpu=v9
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-mcpu=v9 FFLAGS=-mcpu=v9
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; --- vt (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: running /bin/bash
</span><br>
<span class="quotelev1">&gt; '../../../../../ompi/contrib/vt/vt/configure' --disable-option-checking
</span><br>
<span class="quotelev1">&gt; --with-openmpi-inside '--disable-mpi-f90' 'CFLAGS=-mcpu=v9'
</span><br>
<span class="quotelev1">&gt; 'CXXFLAGS=-mcpu=v9' 'FFLAGS=-mcpu=v9'  --cache-file=/dev/null
</span><br>
<span class="quotelev1">&gt; --srcdir=../../../../../ompi/contrib/vt/vt --disable-option-checking
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/install-sh -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/install-sh -c -d
</span><br>
<span class="quotelev1">&gt; checking for gawk... no
</span><br>
<span class="quotelev1">&gt; checking for mawk... no
</span><br>
<span class="quotelev1">&gt; checking for nawk... nawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking build system type... sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt; checking host system type... sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt; checking for platform... sun
</span><br>
<span class="quotelev1">&gt; checking for options file...
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/contrib/vt/vt/config/defaults/sun
</span><br>
<span class="quotelev1">&gt; configure: loading options from
</span><br>
<span class="quotelev1">&gt; '../../../../../ompi/contrib/vt/vt/config/defaults/sun'
</span><br>
<span class="quotelev1">&gt; CC=&quot;cc&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;CC&quot;
</span><br>
<span class="quotelev1">&gt; F77=&quot;f77&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;f95&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-xO3&quot;
</span><br>
<span class="quotelev1">&gt; OPENMP_CFLAGS=&quot;-xopenmp -xO3 -D_REENTRANT&quot;
</span><br>
<span class="quotelev1">&gt; PTHREAD_CFLAGS=&quot;-D_REENTRANT&quot;
</span><br>
<span class="quotelev1">&gt; PTHREAD_LIBS=&quot;-lpthread&quot;
</span><br>
<span class="quotelev1">&gt; enable_memtrace=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt; enable_cpuidtrace=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt; configure: builddir:
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /export/home/phargrov/openmpi-1.5rc5/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; configure: detected VPATH build
</span><br>
<span class="quotelev1">&gt; checking if build filesystem is case sensitive... yes
</span><br>
<span class="quotelev1">&gt; checking for gcc... cc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is not obvious from the output above is that VT has selected
</span><br>
<span class="quotelev1">&gt;    CC=cc
</span><br>
<span class="quotelev1">&gt;    CFLAGS=-mcpu=v9
</span><br>
<span class="quotelev1">&gt; where CC came from the file ompi/contrib/vt/vt/config/defaults/sun,
</span><br>
<span class="quotelev1">&gt; while CFLAGS came from the configure command line.  Here, now, is the
</span><br>
<span class="quotelev1">&gt; part that surprised me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ggrep -A67 'checking whether the C compiler works'
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/config.log
</span><br>
<span class="quotelev1">&gt; configure:4841: checking whether the C compiler works
</span><br>
<span class="quotelev1">&gt; configure:4863: cc -mcpu=v9 -I$(top_srcdir) -DINSIDE_OPENMPI
</span><br>
<span class="quotelev1">&gt; conftest.c -lsocket -lnsl  -lrt -lm -lthread &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; cc: Warning: Option -mcpu=v9 passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt;                 LINK EDITOR MEMORY MAP
</span><br>
<span class="quotelev1">&gt; [...link map removed...]
</span><br>
<span class="quotelev1">&gt; configure:4867: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:4916: result: yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the gcc &quot;-mcpu=v9&quot; in CFLAGS just happened, by luck, to NOT break
</span><br>
<span class="quotelev1">&gt; the &quot;C compiler works&quot; test and this time VT is ENabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...
</span><br>
<span class="quotelev1">&gt;  Even though build completed w/o error, every object compiled under
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt generates
</span><br>
<span class="quotelev1">&gt;   cc: Warning: Option -mcpu=v9 passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt;  and any link steps print a Link Map as well.
</span><br>
<span class="quotelev1">&gt; ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt; [... also OKAY...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; [... OK except the issue reported in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8370.php">http://www.open-mpi.org/community/lists/devel/2010/08/8370.php</a> ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But one gets the MPI and VT wrappers using different compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /usr/local/pkg/ompi-1.5rc5/bin/vtcc -V
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.10 SunOS_sparc 2009/06/03
</span><br>
<span class="quotelev1">&gt; usage: cc [ options] files.  Use 'cc -flags' for details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /usr/local/pkg/ompi-1.5rc5/bin/mpicc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And thus mpicc and mpicc-vt accept different options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -save-temps mpi_hello.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc-vt -save-temps mpi_hello.c
</span><br>
<span class="quotelev1">&gt; ld: fatal: option -dy and -a are incompatible
</span><br>
<span class="quotelev1">&gt; ld: fatal: Flags processing errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've not tried, but I am assuming one can probably resolve these
</span><br>
<span class="quotelev1">&gt; problems by explicitly setting the compilers by adding the following to
</span><br>
<span class="quotelev1">&gt; configure:  CC=gcc CXX=g++ F77=g77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, while the situation is not impossible, it is highly inconvenient and
</span><br>
<span class="quotelev1">&gt; probably not obvious to may users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this does NOT occur with 1.4.3rc1 because the are no VT
</span><br>
<span class="quotelev1">&gt; &quot;defaults&quot; files loaded, and VT thus uses the same CC=gcc, etc. as Open
</span><br>
<span class="quotelev1">&gt; MPI does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8482.php">’≈æß: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8371.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
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
