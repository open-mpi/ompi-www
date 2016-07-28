<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 16:08:56 2014" -->
<!-- isoreceived="20141217210856" -->
<!-- sent="Wed, 17 Dec 2014 21:33:09 +0100 (CET)" -->
<!-- isosent="20141217203309" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="201412172033.sBHKX9bb018938_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] ERROR: C_FUNLOC function" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: C_FUNLOC function<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 15:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26013.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26011.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; This fix was just pushed to the OMPI master.  A new master tarball
</span><br>
<span class="quotelev1">&gt; should be available shortly (probably within an hour or so -- look
</span><br>
<span class="quotelev1">&gt; for a tarball dated Dec 17 at <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>).
</span><br>
<p>Yes, I could build it now. Thank you very much to everybody who helped
<br>
to fix the problem. I get an error for &quot;make check&quot; on Solaris 10 Sparc,
<br>
Solaris 10 x86_64, and OpenSUSE Linux with both gcc-4.9.2 and Sun C 5.13.
<br>
Hopefully I have some time tomorrow to to test this version with some
<br>
simple programs.
<br>
<p>Linux, Sun C 5.13:
<br>
==================
<br>
...
<br>
PASS: opal_bit_ops
<br>
&nbsp;Failure : Mismatch: input &quot;/home&quot;, expected:0 got:1
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/net&quot;, expected:0 got:1
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/misc&quot;, expected:0 got:1
<br>
<p>SUPPORT: OMPI Test failed: opal_path_nfs() (3 of 20 failed)
<br>
Test usage: ./opal_path_nfs [DIR]
<br>
On Linux interprets output from mount(8) to check for nfs and verify opal_path_nfs()
<br>
Additionally, you may specify multiple DIR on the cmd-line, of which you the output
<br>
get_mounts: dirs[0]:/dev fs:devtmpfs nfs:No
<br>
get_mounts: dirs[1]:/dev/shm fs:tmpfs nfs:No
<br>
get_mounts: dirs[2]:/run fs:tmpfs nfs:No
<br>
get_mounts: dirs[3]:/dev/pts fs:devpts nfs:No
<br>
get_mounts: dirs[4]:/ fs:ext4 nfs:No
<br>
get_mounts: dirs[5]:/proc fs:proc nfs:No
<br>
get_mounts: dirs[6]:/sys fs:sysfs nfs:No
<br>
get_mounts: dirs[7]:/sys/kernel/debug fs:debugfs nfs:No
<br>
get_mounts: dirs[8]:/sys/kernel/security fs:securityfs nfs:No
<br>
get_mounts: dirs[9]:/local fs:ext4 nfs:No
<br>
get_mounts: dirs[10]:/var/lock fs:tmpfs nfs:No
<br>
get_mounts: dirs[11]:/var/run fs:tmpfs nfs:No
<br>
get_mounts: dirs[12]:/media fs:tmpfs nfs:No
<br>
get_mounts: dirs[13]:/usr/local fs:nfs nfs:Yes
<br>
get_mounts: dirs[14]:/opt/global fs:nfs nfs:Yes
<br>
get_mounts: already know dir[13]:/usr/local
<br>
get_mounts: dirs[13]:/usr/local fs:nfs nfs:Yes
<br>
get_mounts: dirs[15]:/export2 fs:nfs nfs:Yes
<br>
get_mounts: already know dir[14]:/opt/global
<br>
get_mounts: dirs[14]:/opt/global fs:nfs nfs:Yes
<br>
get_mounts: dirs[16]:/misc fs:autofs nfs:No
<br>
get_mounts: dirs[17]:/net fs:autofs nfs:No
<br>
get_mounts: dirs[18]:/home fs:autofs nfs:No
<br>
get_mounts: dirs[19]:/home/fd1026 fs:nfs nfs:Yes
<br>
test(): file:/home/fd1026 bool:1
<br>
test(): file:/home bool:0
<br>
test(): file:/net bool:0
<br>
test(): file:/misc bool:0
<br>
test(): file:/export2 bool:1
<br>
test(): file:/opt/global bool:1
<br>
test(): file:/usr/local bool:1
<br>
test(): file:/media bool:0
<br>
test(): file:/var/run bool:0
<br>
test(): file:/var/lock bool:0
<br>
test(): file:/local bool:0
<br>
test(): file:/sys/kernel/security bool:0
<br>
test(): file:/sys/kernel/debug bool:0
<br>
test(): file:/sys bool:0
<br>
test(): file:/proc bool:0
<br>
test(): file:/ bool:0
<br>
test(): file:/dev/pts bool:0
<br>
test(): file:/run bool:0
<br>
test(): file:/dev/shm bool:0
<br>
test(): file:/dev bool:0
<br>
FAIL: opal_path_nfs
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test/util'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test/util'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test'
<br>
make: *** [check-recursive] Error 1
<br>
tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 133 dtmail_ssh &amp;
<br>
[1] 17531
<br>
tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 134 libSDtMail: Warning: Xt Warning: Missing charsets in 
<br>
String to FontSet conversion
<br>
libSDtMail: Warning: Xt Warning: Cannot convert string &quot;-dt-interface 
<br>
user-medium-r-normal-s*-*-*-*-*-*-*-*-*&quot; to type FontSet
<br>
<p>tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 134 
<br>
<p><p><p>Linux, gcc-4.9.2:
<br>
=================
<br>
...
<br>
&nbsp;&nbsp;CC       opal_lifo.o
<br>
&nbsp;&nbsp;CCLD     opal_lifo
<br>
&nbsp;&nbsp;CC       opal_fifo.o
<br>
&nbsp;&nbsp;CCLD     opal_fifo
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
<br>
SUPPORT: OMPI Test Passed: opal_rb_tree_t: (21 tests)
<br>
PASS: ompi_rb_tree
<br>
SUPPORT: OMPI Test Passed: opal_bitmap_t: (17 tests)
<br>
PASS: opal_bitmap
<br>
SUPPORT: OMPI Test Passed: opal_hash_table_t: (57 tests)
<br>
PASS: opal_hash_table
<br>
SUPPORT: OMPI Test Passed: opal_proc_table_t: (9 tests)
<br>
PASS: opal_proc_table
<br>
SUPPORT: OMPI Test Passed: opal_tree_t: (12 tests)
<br>
PASS: opal_tree
<br>
SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
<br>
PASS: opal_list
<br>
SUPPORT: OMPI Test Passed: opal_value_array_t: (45 tests)
<br>
PASS: opal_value_array
<br>
SUPPORT: OMPI Test Passed: opal_pointer_array: (14 tests)
<br>
PASS: opal_pointer_array
<br>
/bin/sh: line 5:  5746 Illegal instruction     ${dir}$tst
<br>
FAIL: opal_lifo
<br>
/bin/sh: line 5:  5776 Illegal instruction     ${dir}$tst
<br>
FAIL: opal_fifo
<br>
========================================================
<br>
2 of 10 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test'
<br>
make: *** [check-recursive] Error 1
<br>
tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc 146 
<br>
<p><p>Solaris 10 Sparc and x86_64, Sun C 5.13 and gcc-4.9.2:
<br>
======================================================
<br>
...
<br>
&nbsp;&nbsp;CC       opal_lifo.o
<br>
&quot;../../../openmpi-dev-557-g01a24c4/test/class/opal_lifo.c&quot;, line 45: warning: implicit function 
<br>
declaration: timersub
<br>
&nbsp;&nbsp;CCLD     opal_lifo
<br>
Undefined                       first referenced
<br>
&nbsp;symbol                             in file
<br>
timersub                            opal_lifo.o
<br>
ld: fatal: symbol referencing errors. No output written to .libs/opal_lifo
<br>
make[3]: *** [opal_lifo] Error 2
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test/class'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test/class'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test'
<br>
make: *** [check-recursive] Error 1
<br>
tyr openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc 136 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; I anticipate that this fix will also make it in for the v1.8.4 
</span><br>
<span class="quotelev1">&gt; release (see <a href="https://github.com/open-mpi/ompi-release/pull/136">https://github.com/open-mpi/ompi-release/pull/136</a>);
</span><br>
<span class="quotelev1">&gt; Ralph will be making a new RC tarball sometime this morning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2014, at 1:22 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a similar issue was reported in mpich with xlf compilers :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/2144">http://trac.mpich.org/projects/mpich/ticket/2144</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; They concluded this is a compiler issue (e.g. the compiler does not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implement TS 29113 subclause 8.1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much. I'll report the problem to Oracle and perhaps
</span><br>
<span class="quotelev2">&gt; &gt; they can and will fix their compiler problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i made PR 315 <a href="https://github.com/open-mpi/ompi/pull/315">https://github.com/open-mpi/ompi/pull/315</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; f08 binding support is disabled if TS29113 subclause 8.1 is not implemented
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could you please review/comment on this ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2014/12/12 2:28, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will you have the time to fix the Fortran problem for the new Oracle
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 
</span><br>
<span class="quotelev2">&gt; &gt; log.make.SunOS.sparc.64_cc 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 ^                   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
<span class="quotelev2">&gt; &gt; must be 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a procedure that is interoperable or a procedure pointer associated with an 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; interoperable procedure.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25963.php">http://www.open-mpi.org/community/lists/users/2014/12/25963.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25993.php">http://www.open-mpi.org/community/lists/users/2014/12/25993.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26013.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26011.php">Ralph Castain: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
