<?
$subject_val = "Re: [OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:12:08 2015" -->
<!-- isoreceived="20151221141208" -->
<!-- sent="Sat, 19 Dec 2015 14:25:19 -0800" -->
<!-- isosent="20151219222519" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64" -->
<!-- id="CAAvDA14Vn247HXn2Ma-zr+fW-X2hsbqW3Ko-WpNU+93-P=cPhw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 17:25:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18431.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[note corrected &quot;rc2&quot; -&gt; &quot;rc1&quot; in the subject line]
<br>
<p>I tried the same configure arguments with the 2.0.0rc1 and master tarballs.
<br>
The result is a failure at configure time similar to the problem I reported
<br>
already with respect to xlc.
<br>
<p>Specifically, the configure fails with
<br>
<p>checking for working POSIX threads package... no
<br>
configure: WARNING: &quot;*** POSIX threads are not&quot;
<br>
configure: WARNING: &quot;*** available on your system &quot;
<br>
configure: error: &quot;*** Can not continue&quot;
<br>
<p><p>Which is occurring because $FCFLAGS (&quot;-m32&quot; in this case) is missing from
<br>
some or all of the Fortran + pthreads probes:
<br>
<p>configure:64262: checking if Fortran compiler and POSIX threads work as is
<br>
configure:64344: cc -m32 -g -I. -c conftest.c
<br>
&quot;conftest.c&quot;, line 28: warning: improper pointer/integer combination: arg #1
<br>
configure:64351: $? = 0
<br>
configure:64361: f90  conftestf.f conftest.o -o conftest  -lrt -lm -lutil
<br>
conftest.o: could not read symbols: File in wrong format
<br>
<p><p>So, it appears that FCFLAGS is getting &quot;dropped&quot; in multiple locations in
<br>
all three of 1.10.2rc1, 2.0.0rc1 and master.
<br>
<p>-Paul
<br>
<p>On Sat, Dec 19, 2015 at 1:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While on Solaris the SS12.4 default compiler output is 32-bit, the same
</span><br>
<span class="quotelev1">&gt; compiler on Linux defaults to 64-bit.
</span><br>
<span class="quotelev1">&gt; So, not surprisingly I see the &quot;complementary&quot; failure with this compiler
</span><br>
<span class="quotelev1">&gt; on Linux when configured with FCFLAGS=-m32:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  f90 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/orte/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/oshmem/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt; -c
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt;  -KPIC -o .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link f90
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt;   -version-info 6:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/INST/lib
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/
</span><br>
<span class="quotelev1">&gt; libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: f90 -G  -KPIC  .libs/mpi-ignore-tkr.o   -Qoption ld -rpath
</span><br>
<span class="quotelev1">&gt; -Qoption ld
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs
</span><br>
<span class="quotelev1">&gt; -Qoption ld -rpath -Qoption ld
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/INST/lib
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -lnuma -ldl -lrt -lm -lutil    -Qoption ld -soname -Qoption ld
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.so.6 -o .libs/libmpi_usempi_ignore_tkr.so.6.0.0
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs/libopen-pal.so:
</span><br>
<span class="quotelev1">&gt; could not read symbols: File in wrong format
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Dec 19, 2015 at 1:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the 12.4 release of the Solaris Studio compilers on a Solaris
</span><br>
<span class="quotelev2">&gt;&gt; system that was fine with 1.10.1.
</span><br>
<span class="quotelev2">&gt;&gt; I am configuring with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 \
</span><br>
<span class="quotelev2">&gt;&gt;     CFLAGS=-m64 --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev2">&gt;&gt;     CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags='-m64
</span><br>
<span class="quotelev2">&gt;&gt; -library=stlport4' \
</span><br>
<span class="quotelev2">&gt;&gt;     FCFLAGS=-m64 --with-wrapper-fcflags=-m64 \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-verbs --enable-mpi-java --with-jdk-dir=/usr/jdk/latest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build fails to link libmpi_usempi_ignore_tkr.la, apparently because
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-m64&quot; is missing from the link command (note that the default compiler
</span><br>
<span class="quotelev2">&gt;&gt; output is &quot;-m32&quot;):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  f90 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../ompi/include -I../../../../oshmem/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/orte/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/oshmem/include
</span><br>
<span class="quotelev2">&gt;&gt; -D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev2">&gt;&gt; -c
</span><br>
<span class="quotelev2">&gt;&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
</span><br>
<span class="quotelev2">&gt;&gt;  -KPIC -o .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link f90
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev2">&gt;&gt;   -version-info 6:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
</span><br>
<span class="quotelev2">&gt;&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; mpi-ignore-tkr.lo
</span><br>
<span class="quotelev2">&gt;&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.la -lm -lsocket -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: f90 -G -h libmpi_usempi_ignore_tkr.so.6 -o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/libmpi_usempi_ignore_tkr.so.6.0.0  .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev2">&gt;&gt; -R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs
</span><br>
<span class="quotelev2">&gt;&gt; -R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev2">&gt;&gt; -lsendfile -lpicl -lkstat -llgrp -lpciaccess -lm -lsocket -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: file
</span><br>
<span class="quotelev2">&gt;&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so:
</span><br>
<span class="quotelev2">&gt;&gt; wrong ELF class: ELFCLASS64
</span><br>
<span class="quotelev2">&gt;&gt; gmake[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18431.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2rc1 available"</a>
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
