<?
$subject_val = "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:40:21 2015" -->
<!-- isoreceived="20151221144021" -->
<!-- sent="Sat, 19 Dec 2015 13:23:26 -0800" -->
<!-- isosent="20151219212326" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64" -->
<!-- id="CAAvDA17qCF_Wgvj3Unfn4ve3X_8MDD65QzPQ8CwUrc0ibtjxwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14NfYHn5HDJe-6kUFSM2EETjP_uQ-De-EzTBqVLJ_SSNg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 16:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18437.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Previous message:</strong> <a href="18435.php">Paul Hargrove: "[OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While on Solaris the SS12.4 default compiler output is 32-bit, the same
<br>
compiler on Linux defaults to 64-bit.
<br>
So, not surprisingly I see the &quot;complementary&quot; failure with this compiler
<br>
on Linux when configured with FCFLAGS=-m32:
<br>
<p>libtool: compile:  f90 -DHAVE_CONFIG_H -I.
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr
<br>
-I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include -I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
<br>
-I../../../..
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/orte/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/oshmem/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-I../../../../ompi/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
<br>
-I../../../..
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
<br>
-c
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
<br>
&nbsp;-KPIC -o .libs/mpi-ignore-tkr.o
<br>
/bin/sh ../../../../libtool  --tag=FC   --mode=link f90
<br>
-I../../../../ompi/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1/ompi/include
<br>
-I../../../..
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/openmpi-1.10.2rc1
<br>
&nbsp;&nbsp;-version-info 6:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/INST/lib
<br>
mpi-ignore-tkr.lo
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/
<br>
libopen-pal.la -lrt -lm -lutil
<br>
libtool: link: f90 -G  -KPIC  .libs/mpi-ignore-tkr.o   -Qoption ld -rpath
<br>
-Qoption ld
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs
<br>
-Qoption ld -rpath -Qoption ld
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/INST/lib
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs/libopen-pal.so
<br>
-lnuma -ldl -lrt -lm -lutil    -Qoption ld -soname -Qoption ld
<br>
libmpi_usempi_ignore_tkr.so.6 -o .libs/libmpi_usempi_ignore_tkr.so.6.0.0
<br>
/scratch/phargrov/OMPI/openmpi-1.10.2rc1-linux-x86_64-ss12u4-m32/BLD/opal/.libs/libopen-pal.so:
<br>
could not read symbols: File in wrong format
<br>
make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
<br>
<p><p>-Paul
<br>
<p>On Sat, Dec 19, 2015 at 1:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am using the 12.4 release of the Solaris Studio compilers on a Solaris
</span><br>
<span class="quotelev1">&gt; system that was fine with 1.10.1.
</span><br>
<span class="quotelev1">&gt; I am configuring with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 \
</span><br>
<span class="quotelev1">&gt;     CFLAGS=-m64 --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags='-m64
</span><br>
<span class="quotelev1">&gt; -library=stlport4' \
</span><br>
<span class="quotelev1">&gt;     FCFLAGS=-m64 --with-wrapper-fcflags=-m64 \
</span><br>
<span class="quotelev1">&gt;     --with-verbs --enable-mpi-java --with-jdk-dir=/usr/jdk/latest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build fails to link libmpi_usempi_ignore_tkr.la, apparently because
</span><br>
<span class="quotelev1">&gt; &quot;-m64&quot; is missing from the link command (note that the default compiler
</span><br>
<span class="quotelev1">&gt; output is &quot;-m32&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  f90 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr
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
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/orte/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/oshmem/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt; -c
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt;  -KPIC -o .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link f90
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
</span><br>
<span class="quotelev1">&gt;   -version-info 6:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/
</span><br>
<span class="quotelev1">&gt; libopen-pal.la -lm -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt; libtool: link: f90 -G -h libmpi_usempi_ignore_tkr.so.6 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_usempi_ignore_tkr.so.6.0.0  .libs/mpi-ignore-tkr.o
</span><br>
<span class="quotelev1">&gt; -R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs
</span><br>
<span class="quotelev1">&gt; -R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -lsendfile -lpicl -lkstat -llgrp -lpciaccess -lm -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt; ld: fatal: file
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so:
</span><br>
<span class="quotelev1">&gt; wrong ELF class: ELFCLASS64
</span><br>
<span class="quotelev1">&gt; gmake[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18437.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Previous message:</strong> <a href="18435.php">Paul Hargrove: "[OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
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
