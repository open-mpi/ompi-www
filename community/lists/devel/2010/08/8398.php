<?
$subject_val = "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 17:13:08 2010" -->
<!-- isoreceived="20100826211308" -->
<!-- sent="Thu, 26 Aug 2010 14:12:55 -0700" -->
<!-- isosent="20100826211255" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76D8D7.5060603_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 17:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8397.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the platforms I've been testing is a Linux/PPC64 (which happens 
<br>
to be the front-end to a BG/P, but don't be confused by that - I am NOT 
<br>
trying to build for the BG/P).  On the system are IBM's XLC compilers 
<br>
(also sold under the ABSoft name).  When passing &quot;-q64&quot; to the xlc 
<br>
compilers to get an LP64 ABI (default is ILP32), it seems that the 
<br>
scripts for constricting the F90 bindings somehow end up passing the 
<br>
&quot;-q64&quot; to /usr/bin/ld, which is not happy.
<br>
<p>If I don't set {C,CXX,F,FC}FLAGS=-q64 then there is no problem building 
<br>
the F90 bindings (for ILP32 ABI).
<br>
<p>If I --disable-mpi-f90 the build is fine (except for the atomic test 
<br>
failure from &quot;make check&quot;, reported in  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8369.php">http://www.open-mpi.org/community/lists/devel/2010/08/8369.php</a>)
<br>
<p>Here are the details of the platform:
<br>
<p>$ uname -a
<br>
Linux login1 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010
<br>
ppc64 ppc64 ppc64 GNU/Linux
<br>
<p>$ which xlc
<br>
/soft/apps/ibmcmp-aug2010/vac/bg/9.0/bin/xlc
<br>
$ xlc -qversion
<br>
IBM XL C/C++ Advanced Edition for Blue Gene/P, V9.0
<br>
Version: 09.00.0000.0009
<br>
<p>$ /lib64/libc.so.6
<br>
GNU C Library stable release version 2.4 (20090904), by Roland McGrath
<br>
et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Configured for ppc64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2009-09-04.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>Here is the configure command:
<br>
<p>$ [path_to]/configure --with-contrib-vt-flags=--with-platform=linux 
<br>
CC=xlc_r CXX=xlC_r F77=xlf FC=xlf90 CFLAGS=-q64 CXXFLAGS=-q64 
<br>
FFLAGS=-q64 FCFLAGS=-q64
<br>
<p>The problem exists with both 1.5rc5 and 1.4.3rc1.
<br>
<p>Here is the failure from 1.4.3.rc1:
<br>
<p>$ make
<br>
[...]
<br>
make[4]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
<br>
/bin/sh ../../../libtool   --mode=link xlf90 -I../../../ompi/include 
<br>
-I../../../../ompi/include -I. -I../../../../ompi/mpi/f90 
<br>
-I../../../ompi/mpi/f90  -q64 -version-info 0:0:0  -export-dynamic   -o 
<br>
libmpi_f90.la -rpath /usr/local/lib mpi.lo mpi_sizeof.lo 
<br>
mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo 
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo 
<br>
mpi_wtime_f90.lo   ../../../ompi/libmpi.la -lnsl -lutil
<br>
libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
<br>
-L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/orte/.libs 
<br>
-L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so 
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/orte/.libs/libopen-rte.so 
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o 
<br>
.libs/libmpi_f90.so.0.0.0
<br>
/usr/bin/ld: unrecognized option '-q64'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
make[4]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>Here is the failure from 1.5rc5 (including re-run w/ V=1)
<br>
<p>$ make
<br>
[...]
<br>
make[4]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
&nbsp;&nbsp;FCLD   libmpi_f90.la
<br>
/usr/bin/ld: unrecognized option '-q64'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
make[4]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
$ make V=1
<br>
[...]
<br>
make[4]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
/bin/sh ../../../libtool  --tag=FC   --mode=link xlf90 
<br>
-I../../../ompi/include -I../../../../ompi/include -I. 
<br>
-I../../../../ompi/mpi/f90 -I../../../ompi/mpi/f90  -q64 -version-info 
<br>
0:0:0  -export-dynamic  -o libmpi_f90.la -rpath /usr/local/lib mpi.lo 
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo 
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo 
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo   ../../../ompi/mpi/f77/libmpi_f77.la 
<br>
-lnsl  -lutil
<br>
libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
<br>
-L/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/.libs 
<br>
../../../ompi/mpi/f77/.libs/libmpi_f77.so 
<br>
/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/.libs/libmpi.so -ldl 
<br>
-lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
/usr/bin/ld: unrecognized option '-q64'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
make[4]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Based on the make output this might be a libtool issue.
<br>
<p>However, I noticed the following comment in ompi/mpi/f90/Makefile.am:
<br>
# This Makefile.am is quite complex and confusing.  Part of the
<br>
# problem is that Libtool (v1.5.18) does not understand F90, so we
<br>
# have to do a few things manually (and no shared libraries). Here's a
<br>
# summary of what is happening:
<br>
[...]
<br>
<p>Which suggests to me that the problem might come from how libtool is 
<br>
USED in this case.
<br>
<p>I did see that the Libool configure logic already found the proper ld flags:
<br>
<p>*** Libtool configuration
<br>
[...]
<br>
checking whether the xlc_r -q64 linker (/usr/bin/ld -m elf64ppc) 
<br>
supports shared libraries... yes
<br>
[...]
<br>
checking whether the xlC_r -q64 linker (/usr/bin/ld -m elf64ppc) 
<br>
supports shared libraries... yes
<br>
[...]
<br>
checking whether the xlC_r -q64 linker (/usr/bin/ld -m elf64ppc) 
<br>
supports shared libraries... yes
<br>
[...]
<br>
checking whether the xlf -q64 linker (/usr/bin/ld -m elf64ppc) supports 
<br>
shared libraries... yes
<br>
[...]
<br>
checking whether the xlf90 -q64 linker (/usr/bin/ld -m elf64ppc) 
<br>
supports shared libraries... yes
<br>
<p><p><p>I know the FAQ entry (singular) in the Libtool manual suggests trying 
<br>
something like CC='xlc_r -q64' instead of CFLAGS-q64 if one has problems 
<br>
with flags used to link a shared library.  However, I tried that and 
<br>
just reach a slightly different instance of the same error:
<br>
<p>[...]
<br>
/bin/sh ../../../libtool   --mode=link xlf90 -q64 
<br>
-I../../../ompi/include -I../../../../ompi/include -I. 
<br>
-I../../../../ompi/mpi/f90 -I../../../ompi/mpi/f90   -version-info 
<br>
0:0:0  -export-dynamic   -o libmpi_f90.la -rpath /usr/local/lib mpi.lo 
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo 
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo 
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo   ../../../ompi/libmpi.la -lnsl -lutil 
<br>
libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
<br>
-L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/orte/.libs 
<br>
-L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so 
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/orte/.libs/libopen-rte.so 
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o 
<br>
.libs/libmpi_f90.so.0.0.0
<br>
/usr/bin/ld: unrecognized option '-q64'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
[...]
<br>
<p>So, at this point my best guess is that libtool believes that the -q64 
<br>
argument is a linker flag, when in fact it is not.
<br>
<p>-Paul
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
<li><strong>Next message:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8397.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
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
