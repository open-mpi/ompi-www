<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 13:18:25 2007" -->
<!-- isoreceived="20070713171825" -->
<!-- sent="Fri, 13 Jul 2007 10:15:44 -0700" -->
<!-- isosent="20070713171544" -->
<!-- name="David Prendergast" -->
<!-- email="dgprendergast_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc" -->
<!-- id="4697B340.7070108_at_lbl.gov" -->
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
<strong>From:</strong> David Prendergast (<em>dgprendergast_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-13 13:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>Reply:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I noticed some problem in the compile of openmpi-1.2.3 on a Core 2 Duo 
<br>
processor using intel compilers (icc Version 10.0).
<br>
I have attached the output of make.
<br>
This problem does not exist in openmpi-1.2.2 which I have compiled and 
<br>
run successfully on the same machine with the same compiler.
<br>
David.
<br>
<p><p>
<p>
Making all in config
<br>
make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
<br>
Making all in include
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/include'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/include'
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/libltdl'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/libltdl'
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/libltdl'
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/asm'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/asm'
<br>
Making all in etc
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/etc'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/etc'
<br>
Making all in event
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event'
<br>
Making all in compat
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat'
<br>
Making all in sys
<br>
make[4]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat/sys'
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat/sys'
<br>
make[4]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat'
<br>
make[4]: Nothing to be done for `all-am'.
<br>
make[4]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat'
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event/compat'
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event'
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/event'
<br>
Making all in util
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util'
<br>
Making all in keyval
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util/keyval'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util/keyval'
<br>
make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util'
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/util'
<br>
Making all in mca/base
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/base'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/base'
<br>
Making all in mca/backtrace
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/backtrace'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/backtrace'
<br>
Making all in mca/installdirs
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs'
<br>
Making all in mca/maffinity
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/maffinity'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/maffinity'
<br>
Making all in mca/memcpy
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memcpy'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memcpy'
<br>
Making all in mca/memory
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memory'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memory'
<br>
Making all in mca/paffinity
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/paffinity'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/paffinity'
<br>
Making all in mca/timer
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/timer'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/timer'
<br>
Making all in mca/backtrace/execinfo
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/backtrace/execinfo'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/backtrace/execinfo'
<br>
Making all in mca/installdirs/env
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs/env'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs/env'
<br>
Making all in mca/installdirs/config
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs/config'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/installdirs/config'
<br>
Making all in mca/memory/ptmalloc2
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memory/ptmalloc2'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/memory/ptmalloc2'
<br>
Making all in mca/timer/linux
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/timer/linux'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/timer/linux'
<br>
Making all in .
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
<br>
make[2]: Nothing to be done for `all-am'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
<br>
Making all in mca/maffinity/first_use
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/maffinity/first_use'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/maffinity/first_use'
<br>
Making all in mca/paffinity/linux
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/paffinity/linux'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/mca/paffinity/linux'
<br>
Making all in tools/wrappers
<br>
make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal/tools/wrappers'
<br>
/bin/sh ../../../libtool --tag=CC --mode=link icc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread  -export-dynamic   -o opal_wrapper  opal_wrapper.o ../../../opal/libopen-pal.la -lnsl -lutil  
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: libtool_args+=: not found
<br>
eval: 1: compile_command+=: not found
<br>
eval: 1: finalize_command+=: not found
<br>
libtool: link: icc  -pthread ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath -Wl,/opt/openmpi/lib
<br>
/opt/intel/cce/10.0.023/lib/libimf.so: warning: warning: feupdateenv is not implemented and will always fail
<br>
/usr/lib64/crt1.o: In function `_start':
<br>
(.text+0x20): undefined reference to `main'
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>Reply:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
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
