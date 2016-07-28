<?
$subject_val = "[OMPI users] some warnings and failures building and testing openmpi-1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 06:04:23 2010" -->
<!-- isoreceived="20101021100423" -->
<!-- sent="Thu, 21 Oct 2010 11:56:15 +0200 (CEST)" -->
<!-- isosent="20101021095615" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] some warnings and failures building and testing openmpi-1.5" -->
<!-- id="201010210956.o9L9uFZv017787_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] some warnings and failures building and testing openmpi-1.5<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 05:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built Open MPI 1.5 on SunOS Sparc with the Oracle/Sun Studio C
<br>
compiler and gcc-4.2.0 in 32- and 64-bit mode. A small test program
<br>
works, but I got some warnings and errors building and checking the
<br>
installation as you can see below. Perhaps somebody knows how to fix
<br>
these things and has the time to do it.
<br>
<p>tyr small_prog 105 cc -V
<br>
cc: Sun C 5.9 SunOS_sparc Patch 124867-16 2010/08/11
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>tyr small_prog 108 gcc -v
<br>
Using built-in specs.
<br>
Target: sparc-sun-solaris2.10
<br>
Configured with: /.../configure --prefix=/usr/local/gcc-4.2.0
<br>
&nbsp;&nbsp;--enable-languages=c,c++,java,fortran,objc --enable-java-gc=boehm
<br>
&nbsp;&nbsp;--enable-nls --enable-libgcj --enable-threads=posix
<br>
Thread model: posix
<br>
gcc version 4.2.0
<br>
<p>tyr small_prog 106 uname -a
<br>
SunOS tyr.informatik.hs-fulda.de 5.10 Generic_141444-09 sun4u sparc
<br>
&nbsp;&nbsp;SUNW,A70 Solaris
<br>
<p><p>cc, 32-bit:
<br>
-----------
<br>
<p>tyr small_prog 107 mpicc -show
<br>
cc -I/usr/local/openmpi-1.5_32_cc/include -mt
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_32_cc/lib -lmpi -lsocket -lnsl -lrt -lm
<br>
<p>A small test program works. &quot;make&quot; returns some warnings and
<br>
&quot;make check&quot; returns a failure.
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.32_cc 113 grep -i warning:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.32_cc
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: netinet/sctp.h: present but cannot be compiled
<br>
configure: WARNING: netinet/sctp.h:     check for missing prerequisite headers?
<br>
configure: WARNING: netinet/sctp.h: see the Autoconf documentation
<br>
configure: WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: netinet/sctp.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 114 grep -i error:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.32_cc
<br>
configure: error: no vtf3.h found; check path for VTF3 package first...
<br>
configure: error: no BPatch.h found; check path for Dyninst package first...
<br>
configure: error: no f2c.h found; check path for CLAPACK package first...
<br>
configure: error: MPI Correctness Checking support cannot be built inside Open 
<br>
MPI
<br>
configure: error: PAPI version could not be determined and/or is incompatible (&lt; 
<br>
3)
<br>
configure: error: no ctool/ctool.h found; check path for CTool package first...
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 115 grep -i warning:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.32_cc 
<br>
&quot;../opal/mca/crs/none/crs_none_module.c&quot;, line 136:
<br>
&nbsp;&nbsp;warning: statement not reached
<br>
&quot;../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982:
<br>
&nbsp;&nbsp;warning: assignment type mismatch:
<br>
&quot;../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023:
<br>
&nbsp;&nbsp;warning: assignment type mismatch:
<br>
&quot;../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877:
<br>
&nbsp;&nbsp;warning: assignment type mismatch:
<br>
&quot; ../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918:
<br>
&nbsp;&nbsp;warning: assignment type mismatch:
<br>
&quot;../orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning: initializer
<br>
&nbsp;&nbsp;does not fit or is out of range: 0xfffffffe
<br>
&quot;../orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning: initializer
<br>
&nbsp;&nbsp;does not fit or is out of range: 0xfffffffe
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked,
<br>
&nbsp;&nbsp;ignored otherwise
<br>
... (some more)
<br>
CC: Warning: Specify a supported level of optimization when
<br>
&nbsp;&nbsp;using -xopenmp, -xopenmp will not set an optimization level
<br>
&nbsp;&nbsp;in a future release. Optimization level changed to 3 to support
<br>
&nbsp;&nbsp;-xopenmp.
<br>
... (very often)
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 116 grep -i error:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.32_cc
<br>
tyr openmpi-1.5-SunOS.sparc.32_cc 117 
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 107 grep -i warning:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.32_cc 
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked,
<br>
&nbsp;&nbsp;ignored otherwise
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked,
<br>
&nbsp;&nbsp;ignored otherwise
<br>
libtool: install: warning: relinking `libmpi_f77.la'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
libtool: install: warning: relinking `mca_btl_sm.la'
<br>
libtool: install: warning: relinking `mca_coll_sm.la'
<br>
libtool: install: warning: relinking `mca_mpool_sm.la'
<br>
libtool: install: warning: relinking `libvt.la'
<br>
libtool: install: warning: relinking `libvt-mpi.la'
<br>
libtool: install: warning: relinking `libvt-mt.la'
<br>
libtool: install: warning: relinking `libvt-hyb.la'
<br>
libtool: install: warning: relinking `libvt-java.la'
<br>
tyr openmpi-1.5-SunOS.sparc.32_cc 108 grep -i error:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.32_cc
<br>
tyr openmpi-1.5-SunOS.sparc.32_cc 109 
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.32_cc 120 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_cc
<br>
FAIL: atomic_cmpset
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 121 grep PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_cc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset_noinline
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_cc 111 grep -i warning:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_cc 
<br>
tyr openmpi-1.5-SunOS.sparc.32_cc 112 grep -i failed:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_cc
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
... (some more)
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.32_cc 126 tail -35
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_cc
<br>
--&gt; Testing atomic_cmpset
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  2927 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  2928 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  2929 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  2930 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  2931 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Failed
<br>
FAIL: atomic_cmpset
<br>
--&gt; Testing atomic_cmpset_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset_noinline
<br>
========================================================
<br>
1 of 8 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory `/.../test/asm'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory `/.../test/asm'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/.../test'
<br>
make: *** [check-recursive] Error 1
<br>
tyr openmpi-1.5-SunOS.sparc.32_cc 127 
<br>
<p><p><p><p>gcc, 32-bit:
<br>
-----------
<br>
<p>tyr small_prog 104 mpicc -show
<br>
gcc -I/usr/local/openmpi-1.5_32_gcc/include -fexceptions -pthread
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_32_gcc/lib -lmpi -lsocket -lnsl -lrt -lm
<br>
<p>A small test program works. &quot;make&quot;, &quot;make install&quot;, and &quot;make check&quot;
<br>
return some warnings. One test did not pass.
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.32_gcc 111 grep -i warning:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.32_gcc 
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: netinet/sctp.h: present but cannot be compiled
<br>
configure: WARNING: netinet/sctp.h:     check for missing prerequisite headers?
<br>
configure: WARNING: netinet/sctp.h: see the Autoconf documentation
<br>
configure: WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: netinet/sctp.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 112 grep -i error:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.32_gcc
<br>
configure: error: no vtf3.h found; check path for VTF3 package first...
<br>
configure: error: no BPatch.h found; check path for Dyninst package first...
<br>
configure: error: no f2c.h found; check path for CLAPACK package first...
<br>
configure: error: MPI Correctness Checking support cannot be built inside Open 
<br>
MPI
<br>
configure: error: PAPI version could not be determined and/or is incompatible (&lt; 
<br>
3)
<br>
configure: error: no ctool/ctool.h found; check path for CTool package first...
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 113 grep -i warning:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.32_gcc 
<br>
.../opal/class/opal_atomic_lifo.h:75: warning: passing argument 2 of
<br>
&nbsp;&nbsp;'opal_atomic_cmpset_ptr' discards qualifiers from pointer target type
<br>
.../opal/class/opal_atomic_lifo.h:102: warning: passing argument 3 of
<br>
&nbsp;&nbsp;'opal_atomic_cmpset_ptr' discards qualifiers from pointer target type
<br>
... (very often)
<br>
ld: warning: symbol `mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
ld: warning: file /usr/local/gcc-4.2.0/lib/gcc/.../libgfortran.so:
<br>
&nbsp;&nbsp;linked to /usr/local/gcc-4.2.0/lib/libgfortran.so: attempted multiple
<br>
&nbsp;&nbsp;inclusion of file
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 114 grep -i error:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.32_gcc
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 115 grep -i warning:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.32_gcc 
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
libtool: install: warning: relinking `libmpi_f77.la'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
ld: warning: symbol `mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
libtool: install: warning: relinking `mca_btl_sm.la'
<br>
libtool: install: warning: relinking `mca_coll_sm.la'
<br>
libtool: install: warning: relinking `mca_mpool_sm.la'
<br>
libtool: install: warning: relinking `libvt.la'
<br>
libtool: install: warning: relinking `libvt-mpi.la'
<br>
libtool: install: warning: relinking `libvt-mt.la'
<br>
libtool: install: warning: relinking `libvt-hyb.la'
<br>
libtool: install: warning: relinking `libvt-java.la'
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 116 grep -i error:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.32_gcc
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.32_gcc 119 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_gcc
<br>
tyr openmpi-1.5-SunOS.sparc.32_gcc 120 grep PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_gcc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset
<br>
PASS: atomic_cmpset_noinline
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test
<br>
PASS: checksum
<br>
PASS: position
<br>
decode [PASSED]
<br>
PASS: ddt_test
<br>
decode [NOT PASSED]
<br>
PASS: ddt_raw
<br>
PASS: opal_path_nfs
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 121 grep -i warning:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_gcc
<br>
.../opal/class/opal_atomic_lifo.h:75: warning:
<br>
&nbsp;&nbsp;passing argument 2 of 'opal_atomic_cmpset_ptr' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../opal/class/opal_atomic_lifo.h:102: warning:
<br>
&nbsp;&nbsp;passing argument 3 of 'opal_atomic_cmpset_ptr' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../test/datatype/opal_ddt_lib.h:52:33: warning: no newline at end of file
<br>
.../test/datatype/opal_datatype_test.c:431: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_datatype_test.c:533: warning: passing
<br>
&nbsp;&nbsp;argument 1 of 'test_create_blacs_type1' discards qualifiers from
<br>
&nbsp;&nbsp;pointer target type
<br>
.../test/datatype/opal_datatype_test.c:534: warning: passing
<br>
&nbsp;&nbsp;argument 1 of 'test_create_blacs_type2' discards qualifiers from
<br>
&nbsp;&nbsp;pointer target type
<br>
../../../openmpi-1.5/test/datatype/opal_ddt_lib.h:52:33: warning:
<br>
&nbsp;&nbsp;no newline at end of file
<br>
.../test/datatype/opal_ddt_lib.c:154: warning: passing argument 4 of
<br>
&nbsp;&nbsp;'opal_datatype_create_struct' from incompatible pointer type
<br>
.../test/datatype/opal_ddt_lib.c:173: warning: initialization discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:642: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:662: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:694: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:695: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:696: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:774: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:775: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:776: warning: assignment discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../test/datatype/checksum.c:68: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
.../test/datatype/checksum.c:86: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
.../test/datatype/checksum.c:106: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
<p>tyr openmpi-1.5-SunOS.sparc.32_gcc 114 grep -i failed:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.32_gcc 
<br>
<p><p><p><p>cc, 64-bit:
<br>
-----------
<br>
<p>tyr small_prog 104 mpicc -show
<br>
cc -I/usr/local/openmpi-1.5_64_cc/include -mt
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_64_cc/lib64 -lmpi -lsocket -lnsl -lrt -lm
<br>
<p>A small test program works. &quot;make&quot;, &quot;make install&quot;, and &quot;make check&quot;
<br>
return some warnings. One test failed.
<br>
<p><p><p>tyr openmpi-1.5-SunOS.sparc.64_cc 116 grep -i warning:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.64_cc 
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: netinet/sctp.h: present but cannot be compiled
<br>
configure: WARNING: netinet/sctp.h:     check for missing prerequisite headers?
<br>
configure: WARNING: netinet/sctp.h: see the Autoconf documentation
<br>
configure: WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: netinet/sctp.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 117 grep -i error:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.64_cc
<br>
configure: error: no vtf3.h found; check path for VTF3 package first...
<br>
configure: error: no BPatch.h found; check path for Dyninst package first...
<br>
configure: error: no f2c.h found; check path for CLAPACK package first...
<br>
configure: error: MPI Correctness Checking support cannot be built inside Open 
<br>
MPI
<br>
configure: error: no libpapi found; check path for PAPI package first...
<br>
configure: error: no ctool/ctool.h found; check path for CTool package first...
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 118 grep -i warning:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_cc
<br>
&quot;.../opal/mca/crs/none/crs_none_module.c&quot;, line 136: warning:
<br>
&nbsp;&nbsp;statement not reached
<br>
&quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;../../../../openmpi-1.5/orte/tools/orte-ps/orte-ps.c&quot;, line 288:
<br>
&nbsp;&nbsp;warning: initializer does not fit or is out of range: 0xfffffffe
<br>
&quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning: initializer
<br>
&nbsp;&nbsp;does not fit or is out of range: 0xfffffffe
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked, ignored otherwise
<br>
... (some more)
<br>
CC: Warning: Specify a supported level of optimization when using
<br>
&nbsp;&nbsp;-xopenmp, -xopenmp will not set an optimization level in a future
<br>
&nbsp;&nbsp;release. Optimization level changed to 3 to support -xopenmp.
<br>
... (a lot more)
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 119 grep -i error:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_cc
<br>
tyr openmpi-1.5-SunOS.sparc.64_cc 120 grep -i warning:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.64_cc
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked,
<br>
&nbsp;&nbsp;ignored otherwise
<br>
CC: Warning: Option -pthread passed to ld, if ld is invoked,
<br>
&nbsp;&nbsp;ignored otherwise
<br>
libtool: install: warning: relinking `libmpi_f77.la'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
libtool: install: warning: relinking `mca_btl_sm.la'
<br>
libtool: install: warning: relinking `mca_coll_sm.la'
<br>
libtool: install: warning: relinking `mca_mpool_sm.la'
<br>
libtool: install: warning: relinking `libvt.la'
<br>
libtool: install: warning: relinking `libvt-mpi.la'
<br>
libtool: install: warning: relinking `libvt-mt.la'
<br>
libtool: install: warning: relinking `libvt-hyb.la'
<br>
libtool: install: warning: relinking `libvt-java.la'
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 121 grep -i error:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.64_cc
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 122 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_cc 
<br>
FAIL: atomic_cmpset
<br>
tyr openmpi-1.5-SunOS.sparc.64_cc 123 grep PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_cc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset_noinline
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_cc 124 grep -i warning:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_cc
<br>
tyr openmpi-1.5-SunOS.sparc.64_cc 125 grep -i failed:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_cc
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
... (some more)
<br>
<p><p>tyr openmpi-1.5-SunOS.sparc.64_cc 126 tail -35
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_cc 
<br>
--&gt; Testing atomic_cmpset
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  3629 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  3630 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  3631 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  3632 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
Assertion failed: volptr == newptr,
<br>
&nbsp;&nbsp;file ../../../openmpi-1.5/test/asm/atomic_cmpset.c, line 199
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8:  3633 Abort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Failed
<br>
FAIL: atomic_cmpset
<br>
--&gt; Testing atomic_cmpset_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset_noinline
<br>
========================================================
<br>
1 of 8 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory `/.../test/asm'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory `/.../test/asm'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/.../test'
<br>
make: *** [check-recursive] Error 1
<br>
tyr openmpi-1.5-SunOS.sparc.64_cc 127 
<br>
<p><p><p><p><p>gcc, 64-bit:
<br>
-----------
<br>
<p>tyr small_prog 104 mpicc -show
<br>
gcc -I/usr/local/openmpi-1.5_64_gcc/include -fexceptions -pthread
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_64_gcc/lib64 -lmpi -lsocket -lnsl -lrt -lm
<br>
<p>A small test program works. &quot;make&quot;, &quot;make install&quot;, and &quot;make check&quot;
<br>
return some warnings. One test did not pass.
<br>
<p><p><p>tyr openmpi-1.5-SunOS.sparc.64_gcc 12 grep -i warning:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.64_gcc
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: *** Corresponding Fortran 77 type (INTEGER*16) not supported
<br>
configure: WARNING: *** Skipping Fortran 90 type (INTEGER*16)
<br>
configure: WARNING: netinet/sctp.h: present but cannot be compiled
<br>
configure: WARNING: netinet/sctp.h:     check for missing prerequisite headers?
<br>
configure: WARNING: netinet/sctp.h: see the Autoconf documentation
<br>
configure: WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: netinet/sctp.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## 
<br>
------------------------------------------------------ ##
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 13 grep -i error:
<br>
&nbsp;&nbsp;log.configure.SunOS.sparc.64_gcc
<br>
configure: error: no vtf3.h found; check path for VTF3 package first...
<br>
configure: error: no BPatch.h found; check path for Dyninst package first...
<br>
configure: error: no f2c.h found; check path for CLAPACK package first...
<br>
configure: error: MPI Correctness Checking support cannot be built inside Open 
<br>
MPI
<br>
configure: error: no libpapi found; check path for PAPI package first...
<br>
configure: error: no ctool/ctool.h found; check path for CTool package first...
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 14 grep -i warning:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_gcc 
<br>
.../opal/class/opal_atomic_lifo.h:75: warning:
<br>
&nbsp;&nbsp;passing argument 2 of 'opal_atomic_cmpset_ptr' discards
<br>
&nbsp;&nbsp;qualifiers from pointer target type
<br>
.../opal/class/opal_atomic_lifo.h:102: warning: passing
<br>
&nbsp;&nbsp;argument 3 of 'opal_atomic_cmpset_ptr' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
... (some more of the last two warnings)
<br>
ld: warning: symbol `mpi_fortran_errcodes_ignore_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
ld: warning: file /.../lib/sparcv9/libgfortran.so: attempted
<br>
&nbsp;&nbsp;multiple inclusion of file
<br>
... (a lot more of the above warnings for opal_atomic_lifo.h)
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 15 grep -i error:
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_gcc
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 16 grep -i warning:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.64_gcc
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
libtool: install: warning: relinking `libmpi_f77.la'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
ld: warning: symbol `mpi_fortran_errcodes_ignore_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
libtool: install: warning: relinking `mca_btl_sm.la'
<br>
libtool: install: warning: relinking `mca_coll_sm.la'
<br>
libtool: install: warning: relinking `mca_mpool_sm.la'
<br>
libtool: install: warning: relinking `libvt.la'
<br>
libtool: install: warning: relinking `libvt-mpi.la'
<br>
libtool: install: warning: relinking `libvt-mt.la'
<br>
libtool: install: warning: relinking `libvt-hyb.la'
<br>
libtool: install: warning: relinking `libvt-java.la'
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 17 grep -i error:
<br>
&nbsp;&nbsp;log.make-install.SunOS.sparc.64_gcc
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 18 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_gcc 
<br>
tyr openmpi-1.5-SunOS.sparc.64_gcc 19 grep PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_gcc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset
<br>
PASS: atomic_cmpset_noinline
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test
<br>
PASS: checksum
<br>
PASS: position
<br>
decode [PASSED]
<br>
PASS: ddt_test
<br>
decode [NOT PASSED]
<br>
PASS: ddt_raw
<br>
PASS: opal_path_nfs
<br>
<p>tyr openmpi-1.5-SunOS.sparc.64_gcc 20 grep -i warning:
<br>
&nbsp;&nbsp;log.make-check.SunOS.sparc.64_gcc 
<br>
.../test/class/ompi_rb_tree.c:347: warning: cast to pointer
<br>
&nbsp;&nbsp;from integer of different size
<br>
.../test/class/ompi_rb_tree.c:365: warning: cast from pointer
<br>
&nbsp;&nbsp;to integer of different size
<br>
.../test/class/ompi_rb_tree.c:373: warning: cast from pointer
<br>
&nbsp;&nbsp;to integer of different size
<br>
.../opal/class/opal_atomic_lifo.h:75: warning: passing
<br>
&nbsp;&nbsp;argument 2 of 'opal_atomic_cmpset_ptr' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../opal/class/opal_atomic_lifo.h:102: warning: passing
<br>
&nbsp;&nbsp;argument 3 of 'opal_atomic_cmpset_ptr' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../test/datatype/opal_ddt_lib.h:52:33: warning: no newline
<br>
&nbsp;&nbsp;at end of file
<br>
.../test/datatype/opal_datatype_test.c:431: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_datatype_test.c:533: warning: passing
<br>
&nbsp;&nbsp;argument 1 of 'test_create_blacs_type1' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../test/datatype/opal_datatype_test.c:534: warning: passing 
<br>
&nbsp;argument 1 of 'test_create_blacs_type2' discards qualifiers
<br>
&nbsp;&nbsp;from pointer target type
<br>
.../test/datatype/opal_ddt_lib.h:52:33: warning: no newline
<br>
&nbsp;&nbsp;at end of file
<br>
.../test/datatype/opal_ddt_lib.c:154: warning: passing
<br>
&nbsp;&nbsp;argument 4 of 'opal_datatype_create_struct' from incompatible
<br>
&nbsp;&nbsp;pointer type
<br>
.../test/datatype/opal_ddt_lib.c:173: warning: initialization
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:642: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:662: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:694: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:695: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:696: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:774: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:775: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/opal_ddt_lib.c:776: warning: assignment
<br>
&nbsp;&nbsp;discards qualifiers from pointer target type
<br>
.../test/datatype/checksum.c:68: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
.../test/datatype/checksum.c:86: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
.../test/datatype/checksum.c:106: warning: assignment from
<br>
&nbsp;&nbsp;incompatible pointer type
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
