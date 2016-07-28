<?
$subject_val = "[OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 00:13:42 2010" -->
<!-- isoreceived="20100826041342" -->
<!-- sent="Wed, 25 Aug 2010 21:13:31 -0700" -->
<!-- isosent="20100826041331" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5: VT integration &amp;quot;issue&amp;quot; on Solaris/SPARC" -->
<!-- id="4C75E9EB.60509_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 00:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've encountered an interesting situation on Solaris/SPARC where Open 
<br>
MPI defaults to CC=gcc but the contrib'ed VampirTrace is defaulting to 
<br>
CC=cc.  Additionally, Open MPI on SPARC requires CFLAGS be set to get a 
<br>
non-default ABI from the compiler.  This leads to two different failure 
<br>
modes for me...
<br>
<p>Platform:
<br>
<p>$ uname -a; echo; cc -V; echo; gcc --version
<br>
SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
<br>
<p>cc: Sun C 5.10 SunOS_sparc 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>gcc (GCC) 3.3.2
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p>As detailed elsewhere 
<br>
(<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8365.php">http://www.open-mpi.org/community/lists/devel/2010/08/8365.php</a>) my 
<br>
gcc-3.3.2 will work with either of the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
<br>
or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-mcpu=v9
<br>
Where and CXXFLAGS, FFLAGS and FCFLAGS are set to match.
<br>
<p>Starting with the first option...
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure --disable-mpi-f90 CFLAGS='-mv8plus 
<br>
-Wa,-xarch=v8plus' CXXFLAGS='-mv8plus -Wa,-xarch=v8plus' 
<br>
FFLAGS='-mv8plus -Wa,-xarch=v8plus'
<br>
[...]
<br>
--- vt (m4 configuration macro)
<br>
configure: OMPI configuring in ompi/contrib/vt/vt
<br>
configure: running /bin/bash 
<br>
'../../../../../ompi/contrib/vt/vt/configure' --disable-option-checking 
<br>
--with-openmpi-inside '--disable-mpi-f90' 'CFLAGS=-mv8plus 
<br>
-Wa,-xarch=v8plus' 'CXXFLAGS=-mv8plus -Wa,-xarch=v8plus' 
<br>
'FFLAGS=-mv8plus -Wa,-xarch=v8plus'  --cache-file=/dev/null 
<br>
--srcdir=../../../../../ompi/contrib/vt/vt --disable-option-checking
<br>
checking for a BSD-compatible install... 
<br>
../../../../../ompi/contrib/vt/vt/config/install-sh -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... 
<br>
../../../../../ompi/contrib/vt/vt/config/install-sh -c -d
<br>
checking for gawk... no
<br>
checking for mawk... no
<br>
checking for nawk... nawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking build system type... sparc-sun-solaris2.10
<br>
checking host system type... sparc-sun-solaris2.10
<br>
checking for platform... sun
<br>
checking for options file... 
<br>
../../../../../ompi/contrib/vt/vt/config/defaults/sun
<br>
configure: loading options from 
<br>
'../../../../../ompi/contrib/vt/vt/config/defaults/sun'
<br>
CC=&quot;cc&quot;
<br>
CXX=&quot;CC&quot;
<br>
F77=&quot;f77&quot;
<br>
FC=&quot;f95&quot;
<br>
CFLAGS=&quot;-xO3&quot;
<br>
CXXFLAGS=&quot;-xO3&quot;
<br>
FFLAGS=&quot;-xO3&quot;
<br>
FCFLAGS=&quot;-xO3&quot;
<br>
OPENMP_CFLAGS=&quot;-xopenmp -xO3 -D_REENTRANT&quot;
<br>
PTHREAD_CFLAGS=&quot;-D_REENTRANT&quot;
<br>
PTHREAD_LIBS=&quot;-lpthread&quot;
<br>
enable_memtrace=&quot;no&quot;
<br>
enable_cpuidtrace=&quot;no&quot;
<br>
configure: builddir: 
<br>
/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt2/ompi/contrib/vt/vt
<br>
configure: srcdir: /export/home/phargrov/openmpi-1.5rc5/ompi/contrib/vt/vt
<br>
configure: detected VPATH build
<br>
checking if build filesystem is case sensitive... yes
<br>
checking for gcc... cc
<br>
checking whether the C compiler works... no
<br>
configure: error: in 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt2/ompi/contrib/vt/vt':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
configure: /bin/bash '../../../../../ompi/contrib/vt/vt/configure' 
<br>
*failed* for ompi/contrib/vt/vt
<br>
checking if contributed component vt can compile... no
<br>
[...]
<br>
<p>The VT configure script has tried to us CC=cc and CFLAGS='-mv8plus 
<br>
-Wa,-xarch=v8plus', with the unsurprising result:
<br>
&nbsp;&nbsp;checking whether the C compiler works... no
<br>
So, VT has been disabled.
<br>
<p><p><p>Now the second CFLAGS option and corresponding failure mode:
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure --disable-mpi-f90 CFLAGS=-mcpu=v9 
<br>
CXXFLAGS=-mcpu=v9 FFLAGS=-mcpu=v9
<br>
[...]
<br>
--- vt (m4 configuration macro)
<br>
configure: OMPI configuring in ompi/contrib/vt/vt
<br>
configure: running /bin/bash 
<br>
'../../../../../ompi/contrib/vt/vt/configure' --disable-option-checking 
<br>
--with-openmpi-inside '--disable-mpi-f90' 'CFLAGS=-mcpu=v9' 
<br>
'CXXFLAGS=-mcpu=v9' 'FFLAGS=-mcpu=v9'  --cache-file=/dev/null 
<br>
--srcdir=../../../../../ompi/contrib/vt/vt --disable-option-checking
<br>
checking for a BSD-compatible install... 
<br>
../../../../../ompi/contrib/vt/vt/config/install-sh -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... 
<br>
../../../../../ompi/contrib/vt/vt/config/install-sh -c -d
<br>
checking for gawk... no
<br>
checking for mawk... no
<br>
checking for nawk... nawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking build system type... sparc-sun-solaris2.10
<br>
checking host system type... sparc-sun-solaris2.10
<br>
checking for platform... sun
<br>
checking for options file... 
<br>
../../../../../ompi/contrib/vt/vt/config/defaults/sun
<br>
configure: loading options from 
<br>
'../../../../../ompi/contrib/vt/vt/config/defaults/sun'
<br>
CC=&quot;cc&quot;
<br>
CXX=&quot;CC&quot;
<br>
F77=&quot;f77&quot;
<br>
FC=&quot;f95&quot;
<br>
CFLAGS=&quot;-xO3&quot;
<br>
CXXFLAGS=&quot;-xO3&quot;
<br>
FFLAGS=&quot;-xO3&quot;
<br>
FCFLAGS=&quot;-xO3&quot;
<br>
OPENMP_CFLAGS=&quot;-xopenmp -xO3 -D_REENTRANT&quot;
<br>
PTHREAD_CFLAGS=&quot;-D_REENTRANT&quot;
<br>
PTHREAD_LIBS=&quot;-lpthread&quot;
<br>
enable_memtrace=&quot;no&quot;
<br>
enable_cpuidtrace=&quot;no&quot;
<br>
configure: builddir: 
<br>
/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt/ompi/contrib/vt/vt
<br>
configure: srcdir: /export/home/phargrov/openmpi-1.5rc5/ompi/contrib/vt/vt
<br>
configure: detected VPATH build
<br>
checking if build filesystem is case sensitive... yes
<br>
checking for gcc... cc
<br>
checking whether the C compiler works... yes
<br>
[...]
<br>
<p>What is not obvious from the output above is that VT has selected
<br>
&nbsp;&nbsp;&nbsp;CC=cc
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=-mcpu=v9
<br>
where CC came from the file ompi/contrib/vt/vt/config/defaults/sun, 
<br>
while CFLAGS came from the configure command line.  Here, now, is the 
<br>
part that surprised me...
<br>
<p>$ ggrep -A67 'checking whether the C compiler works' 
<br>
ompi/contrib/vt/vt/config.log
<br>
configure:4841: checking whether the C compiler works
<br>
configure:4863: cc -mcpu=v9 -I$(top_srcdir) -DINSIDE_OPENMPI   
<br>
conftest.c -lsocket -lnsl  -lrt -lm -lthread &gt;&amp;5
<br>
cc: Warning: Option -mcpu=v9 passed to ld, if ld is invoked, ignored 
<br>
otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LINK EDITOR MEMORY MAP
<br>
[...link map removed...]
<br>
configure:4867: $? = 0
<br>
configure:4916: result: yes
<br>
<p>So, the gcc &quot;-mcpu=v9&quot; in CFLAGS just happened, by luck, to NOT break 
<br>
the &quot;C compiler works&quot; test and this time VT is ENabled.
<br>
<p>$ make
<br>
[...
<br>
&nbsp;Even though build completed w/o error, every object compiled under 
<br>
ompi/contrib/vt generates
<br>
&nbsp;&nbsp;cc: Warning: Option -mcpu=v9 passed to ld, if ld is invoked, ignored 
<br>
otherwise
<br>
&nbsp;and any link steps print a Link Map as well.
<br>
...]
<br>
<p>$ make check
<br>
[... also OKAY...]
<br>
<p>$ make install
<br>
[... OK except the issue reported in  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8370.php">http://www.open-mpi.org/community/lists/devel/2010/08/8370.php</a> ...]
<br>
<p>But one gets the MPI and VT wrappers using different compilers:
<br>
<p>$ /usr/local/pkg/ompi-1.5rc5/bin/vtcc -V
<br>
cc: Sun C 5.10 SunOS_sparc 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>$ /usr/local/pkg/ompi-1.5rc5/bin/mpicc --version
<br>
gcc (GCC) 3.3.2
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>And thus mpicc and mpicc-vt accept different options:
<br>
<p>$ mpicc -save-temps mpi_hello.c
<br>
<p>$ mpicc-vt -save-temps mpi_hello.c
<br>
ld: fatal: option -dy and -a are incompatible
<br>
ld: fatal: Flags processing errors
<br>
<p><p>I've not tried, but I am assuming one can probably resolve these 
<br>
problems by explicitly setting the compilers by adding the following to 
<br>
configure:  CC=gcc CXX=g++ F77=g77
<br>
<p>So, while the situation is not impossible, it is highly inconvenient and 
<br>
probably not obvious to may users.
<br>
<p><p>Note that this does NOT occur with 1.4.3rc1 because the are no VT 
<br>
&quot;defaults&quot; files loaded, and VT thus uses the same CC=gcc, etc. as Open 
<br>
MPI does.
<br>
<p><p>-Paul
<br>
&nbsp;&nbsp;
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
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
