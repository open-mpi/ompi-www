<?
$subject_val = "[OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 19:58:38 2010" -->
<!-- isoreceived="20100825235838" -->
<!-- sent="Wed, 25 Aug 2010 16:58:11 -0700" -->
<!-- isosent="20100825235811" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;make check&amp;quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C75AE13.9090202_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 19:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8368.php">Jeff Squyres: "[OMPI devel] bitbucket announced downtime for upgrade"</a>
<li><strong>Previous message:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been able to configure and build both 1.5rc5 and 1.4.3rc1 on 
<br>
Solaris 10 for SPARC, using Sun C 5.10.
<br>
I have also build 1.5rc5 w/ gcc-3.3.2 (and expect 1.4.3rc1 to build w/ 
<br>
gcc as well, once I have time)
<br>
<p>All 3 builds fail &quot;make check&quot; in a way that suggests to me that libtool 
<br>
is not working correctly on this platform.
<br>
<p>The two RC versions fail in different places, but I suspect that is just 
<br>
because they contain different tests.
<br>
<p>Platform:
<br>
<p>$ uname -a
<br>
SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
<br>
<p>$ cc -V
<br>
cc: Sun C 5.10 SunOS_sparc 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>$ gcc --version
<br>
gcc (GCC) 3.3.2
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p>Configure/build/check for 1.4.3rc1 w/ Sun C 5.10
<br>
<p>$ [path_to]/openmpi-1.4.3rc1/configure CC='cc -m32 -xarch=spar'c CXX='CC 
<br>
-m32 -xarch=sparc' F77='f77 -m32 -xarch=sparc' FC='f90 -m32 -xarch=sparc'
<br>
[...Yes, this does pass the V8+/v9 ABI check...]
<br>
<p>$ make
<br>
[...]
<br>
<p>$ make check
<br>
[...]
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/test/datatype'
<br>
source='../../../test/datatype/checksum.c' object='checksum.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../test/datatype 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -I../.. 
<br>
-I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include    -O -DNDEBUG  -mt -c -o checksum.o 
<br>
../../../test/datatype/checksum.c
<br>
&quot;../../../test/datatype/checksum.c&quot;, line 68: warning: assignment type 
<br>
mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to char &quot;=&quot; pointer to int
<br>
&quot;../../../test/datatype/checksum.c&quot;, line 86: warning: assignment type 
<br>
mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to char &quot;=&quot; pointer to int
<br>
&quot;../../../test/datatype/checksum.c&quot;, line 106: warning: assignment type 
<br>
mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to char &quot;=&quot; pointer to int
<br>
/bin/bash ../../libtool --tag=CC   --mode=link cc -m32 -xarch=sparc  -O 
<br>
-DNDEBUG  -mt  -export-dynamic   -o checksum checksum.o 
<br>
../../ompi/libmpi.la -lsocket -lnsl  -lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -O -DNDEBUG -mt -o .libs/checksum 
<br>
checksum.o  ../../ompi/.libs/libmpi.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/orte/.libs/libopen-rte.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/opal/.libs/libopen-pal.so 
<br>
-lsocket -lnsl -lrt -lm -lthread -mt -R/usr/local/lib
<br>
source='../../../test/datatype/position.c' object='position.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../test/datatype 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -I../.. 
<br>
-I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include    -O -DNDEBUG  -mt -c -o position.o 
<br>
../../../test/datatype/position.c
<br>
/bin/bash ../../libtool --tag=CC   --mode=link cc -m32 -xarch=sparc  -O 
<br>
-DNDEBUG  -mt  -export-dynamic   -o position position.o 
<br>
../../ompi/libmpi.la -lsocket -lnsl  -lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -O -DNDEBUG -mt -o .libs/position 
<br>
position.o  ../../ompi/.libs/libmpi.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/orte/.libs/libopen-rte.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/opal/.libs/libopen-pal.so 
<br>
-lsocket -lnsl -lrt -lm -lthread -mt -R/usr/local/lib
<br>
source='../../../test/datatype/to_self.c' object='to_self.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../test/datatype 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -I../.. 
<br>
-I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include    -O -DNDEBUG  -mt -c -o to_self.o 
<br>
../../../test/datatype/to_self.c
<br>
/bin/bash ../../libtool --tag=CC   --mode=link cc -m32 -xarch=sparc  -O 
<br>
-DNDEBUG  -mt  -export-dynamic   -o to_self to_self.o 
<br>
../../ompi/libmpi.la -lsocket -lnsl  -lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -O -DNDEBUG -mt -o .libs/to_self 
<br>
to_self.o  ../../ompi/.libs/libmpi.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/orte/.libs/libopen-rte.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/opal/.libs/libopen-pal.so 
<br>
-lsocket -lnsl -lrt -lm -lthread -mt -R/usr/local/lib
<br>
source='../../../test/datatype/ddt_pack.c' object='ddt_pack.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../test/datatype 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -I../.. 
<br>
-I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include    -O -DNDEBUG  -mt -c -o ddt_pack.o 
<br>
../../../test/datatype/ddt_pack.c
<br>
/bin/bash ../../libtool --tag=CC   --mode=link cc -m32 -xarch=sparc  -O 
<br>
-DNDEBUG  -mt  -export-dynamic   -o ddt_pack ddt_pack.o 
<br>
../../ompi/libmpi.la -lsocket -lnsl  -lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -O -DNDEBUG -mt -o .libs/ddt_pack 
<br>
ddt_pack.o  ../../ompi/.libs/libmpi.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/orte/.libs/libopen-rte.so 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/opal/.libs/libopen-pal.so 
<br>
-lsocket -lnsl -lrt -lm -lthread -mt -R/usr/local/lib
<br>
make[3]: Leaving directory 
<br>
`/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/test/datatype'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/test/datatype'
<br>
ld.so.1: 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/test/datatype/.libs/checksum: 
<br>
fatal: libmpi.so.0: open failed: No such file or directory
<br>
FAIL: checksum
<br>
ld.so.1: 
<br>
/export/home/phargrov/openmpi-1.4.3rc1/BLD-cc-5.10/test/datatype/.libs/position: 
<br>
fatal: libmpi.so.0: open failed: No such file or directory
<br>
FAIL: position
<br>
========================================================
<br>
2 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p>As far as I can tell, the libtool invocations are correct, with 
<br>
&quot;../../ompi/libmpi.la&quot;, but the resulting executables seem to be missing 
<br>
rpath info or some related magic required to find libmpi.so.1;  the sort 
<br>
of thing that libtool is intended to handle.
<br>
<p><p>Here is the failure for 1.5rc5 w/ Sun C 5.10, configured identically to 
<br>
the 1.4.3rc1 case above:
<br>
<p>$ make check V=1
<br>
[...]
<br>
Making check in debuggers
<br>
make[2]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/ompi/debuggers'
<br>
make  predefined_gap_test dlopen_test
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/ompi/debuggers'
<br>
\
<br>
source='../../../ompi/debuggers/predefined_gap_test.c' 
<br>
object='predefined_gap_test.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../ompi/debuggers 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -I../.. 
<br>
-I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include   -DNDEBUG -mt -xldscope=hidden -g -xO0 -c -o 
<br>
predefined_gap_test.o ../../../ompi/debuggers/predefined_gap_test.c
<br>
/bin/bash ../../libtool  --tag=CC   --mode=link cc -m32 -xarch=sparc  
<br>
-DNDEBUG -mt -xldscope=hidden -g -xO0  -export-dynamic  -o 
<br>
predefined_gap_test predefined_gap_test.o ../../ompi/libmpi.la -lsocket 
<br>
-lnsl  -lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -DNDEBUG -mt -xldscope=hidden -g 
<br>
-xO0 -o .libs/predefined_gap_test predefined_gap_test.o  
<br>
../../ompi/.libs/libmpi.so -lsocket -lnsl -lrt -lm -lthread -mt 
<br>
-R/usr/local/lib
<br>
\
<br>
source='dlopen_test.c' object='dlopen_test-dlopen_test.o' libtool=no \
<br>
DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
cc -m32 -xarch=sparc -DHAVE_CONFIG_H -I. -I../../../ompi/debuggers 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa  
<br>
-I../../../opal/libltdl -I../../.. -I../.. -I../../../opal/include 
<br>
-I../../../orte/include -I../../../ompi/include   -DNDEBUG -mt 
<br>
-xldscope=hidden -g -xO0 -c -o dlopen_test-dlopen_test.o `test -f 
<br>
'dlopen_test.c' || echo '../../../ompi/debuggers/'`dlopen_test.c
<br>
/bin/bash ../../libtool  --tag=CC   --mode=link cc -m32 -xarch=sparc  
<br>
-DNDEBUG -mt -xldscope=hidden -g -xO0  -export-dynamic  -o dlopen_test 
<br>
dlopen_test-dlopen_test.o ../../opal/libltdl/libltdlc.la -lsocket -lnsl  
<br>
-lrt -lm -lthread
<br>
libtool: link: cc -m32 -xarch=sparc -DNDEBUG -mt -xldscope=hidden -g 
<br>
-xO0 -o dlopen_test dlopen_test-dlopen_test.o  
<br>
/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/opal/libltdl/./.libs/dlopen.a 
<br>
../../opal/libltdl/.libs/libltdlc.a -lsocket -lnsl -lrt -lm -lthread -mt
<br>
make[3]: Leaving directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/ompi/debuggers'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/ompi/debuggers'
<br>
ld.so.1: 
<br>
/export/home/phargrov/openmpi-1.5rc5/BLD-cc-5.10/ompi/debuggers/.libs/predefined_gap_test: 
<br>
fatal: libmpi.so.0: open failed: No such file or directory
<br>
FAIL: predefined_gap_test
<br>
Trying to lt_dlopen file with dladvise_local: ./libompi_dbg_msgq
<br>
File opened with dladvise_local, all passed
<br>
PASS: dlopen_test
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p>Again, the libtool-built test executable is unable to load libmpi.so.0
<br>
<p><p>Finally, the 1.5rc5 w/ gcc-3.3.2:
<br>
<p>In this case I disabled the build of VT, but that will be the subject of 
<br>
another report.
<br>
I've also disabled f90, since there is no gfortran-3.3.2 and I had no 
<br>
interest in mixing compiler families.
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure --enable-contrib-no-build=vt 
<br>
--disable-mpi-f90 FFLAGS=-mcpu=v9 CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
<br>
<p>$ make
<br>
[...]
<br>
<p>$ make check
<br>
[...]
<br>
Making check in debuggers
<br>
make[2]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc/ompi/debuggers'
<br>
make  predefined_gap_test dlopen_test
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc/ompi/debuggers'
<br>
&nbsp;&nbsp;CC     predefined_gap_test.o
<br>
&nbsp;&nbsp;CCLD   predefined_gap_test
<br>
&nbsp;&nbsp;CC     dlopen_test-dlopen_test.o
<br>
&nbsp;&nbsp;CCLD   dlopen_test
<br>
make[3]: Leaving directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc/ompi/debuggers'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc/ompi/debuggers'
<br>
ld.so.1: 
<br>
/export/home/phargrov/openmpi-1.5rc5/BLD-gcc/ompi/debuggers/.libs/predefined_gap_test: 
<br>
fatal: libmpi.so.0: open failed: No such file or directory
<br>
FAIL: predefined_gap_test
<br>
Trying to lt_dlopen file with dladvise_local: ./libompi_dbg_msgq
<br>
File opened with dladvise_local, all passed
<br>
PASS: dlopen_test
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p><p>This time I didn't include V=1 in the &quot;make check&quot; command, but the 
<br>
failure appears identical to the one seen w/ Sun C.  So, I don't believe 
<br>
the problem is compiler specific.
<br>
<p>-Paul
<br>
<p>P.S.  Temporary access to this host is possible if needed to address 
<br>
this problem.
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
<li><strong>Next message:</strong> <a href="8368.php">Jeff Squyres: "[OMPI devel] bitbucket announced downtime for upgrade"</a>
<li><strong>Previous message:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8372.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
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
