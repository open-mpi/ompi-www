<?
$subject_val = "[OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:58:10 2015" -->
<!-- isoreceived="20151221145810" -->
<!-- sent="Sat, 19 Dec 2015 13:17:31 -0800" -->
<!-- isosent="20151219211731" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64" -->
<!-- id="CAAvDA14NfYHn5HDJe-6kUFSM2EETjP_uQ-De-EzTBqVLJ_SSNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 16:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18443.php">Ralph Castain: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18441.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Reply:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using the 12.4 release of the Solaris Studio compilers on a Solaris
<br>
system that was fine with 1.10.1.
<br>
I am configuring with
<br>
<p>configure --prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-m64 --with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags='-m64
<br>
-library=stlport4' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=-m64 --with-wrapper-fcflags=-m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-verbs --enable-mpi-java --with-jdk-dir=/usr/jdk/latest
<br>
<p><p>The build fails to link libmpi_usempi_ignore_tkr.la, apparently because
<br>
&quot;-m64&quot; is missing from the link command (note that the default compiler
<br>
output is &quot;-m32&quot;):
<br>
<p>libtool: compile:  f90 -DHAVE_CONFIG_H -I.
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr
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
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
<br>
-I../../../..
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/orte/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/oshmem/include
<br>
-D_REENTRANT
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/opal/mca/event/libevent2021/libevent/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-I../../../../ompi/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
<br>
-I../../../..
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
<br>
-c
<br>
/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
<br>
&nbsp;-KPIC -o .libs/mpi-ignore-tkr.o
<br>
/bin/sh ../../../../libtool  --tag=FC   --mode=link f90
<br>
-I../../../../ompi/include
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1/ompi/include
<br>
-I../../../..
<br>
-I/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/openmpi-1.10.2rc1
<br>
&nbsp;&nbsp;-version-info 6:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
<br>
/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
<br>
mpi-ignore-tkr.lo
<br>
/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/
<br>
libopen-pal.la -lm -lsocket -lnsl
<br>
libtool: link: f90 -G -h libmpi_usempi_ignore_tkr.so.6 -o
<br>
.libs/libmpi_usempi_ignore_tkr.so.6.0.0  .libs/mpi-ignore-tkr.o
<br>
-R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs
<br>
-R/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/INST/lib
<br>
/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so
<br>
-lsendfile -lpicl -lkstat -llgrp -lpciaccess -lm -lsocket -lnsl
<br>
ld: fatal: file
<br>
/shared/OMPI/openmpi-1.10.2rc1-solaris11-x64-ib-ss12u4/BLD/opal/.libs/libopen-pal.so:
<br>
wrong ELF class: ELFCLASS64
<br>
gmake[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18443.php">Ralph Castain: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18441.php">Paul Hargrove: "Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Reply:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
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
