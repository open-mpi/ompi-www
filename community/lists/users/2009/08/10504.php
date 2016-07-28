<?
$subject_val = "[OMPI users] build problems - undefined reference to	`lt_libltdlc_LTX_preloaded_symbols and libtool install";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 13:31:39 2009" -->
<!-- isoreceived="20090827173139" -->
<!-- sent="Thu, 27 Aug 2009 13:34:38 -0400" -->
<!-- isosent="20090827173438" -->
<!-- name="Michael Hines" -->
<!-- email="michael.hines_at_[hidden]" -->
<!-- subject="[OMPI users] build problems - undefined reference to	`lt_libltdlc_LTX_preloaded_symbols and libtool install" -->
<!-- id="1251394478.10102.226.camel_at_hines490" -->
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
<strong>Subject:</strong> [OMPI users] build problems - undefined reference to	`lt_libltdlc_LTX_preloaded_symbols and libtool install<br>
<strong>From:</strong> Michael Hines (<em>michael.hines_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 13:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10505.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm building from todays svn co on an x86_64 centos 5
<br>
Linux 2.6.18-128.1.10.el5 #1 SMP
<br>
using
<br>
<p>m4 (GNU M4) 1.4.13
<br>
automake (GNU automake) 1.11
<br>
autoconf (GNU Autoconf) 2.64
<br>
ltmain.sh (GNU libtool) 2.2.6
<br>
gcc (GCC) 4.3.2
<br>
<p>and configured with
<br>
<p>../configure --prefix=$HOME/openmpi --srcdir=.. --disable-mpi-f77
<br>
--disable-mpi-f90
<br>
<p>and get
<br>
<p>libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
<br>
-pthread -fvisibility=hidden -o opal_wrapper
<br>
opal_wrapper.o  ../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil -lm
<br>
-pthread
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o): In function
<br>
`lt_dlinit':
<br>
ltdl.c:(.text+0x10d3): undefined reference to
<br>
`lt_libltdlc_LTX_preloaded_symbols'
<br>
<p>Is anyone familiar with this or what to do about it?
<br>
If I try to avoid with
<br>
<p>../configure --prefix=$HOME/openmpi --srcdir=.. --disable-mpi-f77
<br>
--disable-mpi-f90 --disable-dlopen
<br>
<p>I 'make -j 4' successfully but during 'make install' get
<br>
<p>&nbsp;&nbsp;/bin/sh ../../../libtool   --mode=install /usr/bin/install -c
<br>
opal_wrapper '/home/hines/openmpi/bin'
<br>
./opal_wrapper: line 1: ELF: command not found
<br>
libtool: install: invalid libtool wrapper script `opal_wrapper'
<br>
<p>Hints on how to build on this machine are greatly welcome. I had the
<br>
same problems when using openmpi-1.3.3.tar.gz and my normal development
<br>
environment (less recent m4 and autotools, and gcc-4.1.2)
<br>
<p>Thanks,
<br>
Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10505.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] VMware and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
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
