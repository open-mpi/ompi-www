<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 17:39:07 2014" -->
<!-- isoreceived="20141217223907" -->
<!-- sent="Wed, 17 Dec 2014 22:39:02 +0000" -->
<!-- isosent="20141217223902" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="A8297688-AA0A-4CAC-8815-D255D44E80DE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201412172033.sBHKX9bb018938_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 17:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26016.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26014.php">George Bosilca: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26030.php">Mike Dubman: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26030.php">Mike Dubman: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>I filed <a href="https://github.com/open-mpi/ompi/issues/317">https://github.com/open-mpi/ompi/issues/317</a> and <a href="https://github.com/open-mpi/ompi/issues/318">https://github.com/open-mpi/ompi/issues/318</a>.
<br>
<p><p><p>On Dec 17, 2014, at 3:33 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This fix was just pushed to the OMPI master.  A new master tarball
</span><br>
<span class="quotelev2">&gt;&gt; should be available shortly (probably within an hour or so -- look
</span><br>
<span class="quotelev2">&gt;&gt; for a tarball dated Dec 17 at <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I could build it now. Thank you very much to everybody who helped
</span><br>
<span class="quotelev1">&gt; to fix the problem. I get an error for &quot;make check&quot; on Solaris 10 Sparc,
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64, and OpenSUSE Linux with both gcc-4.9.2 and Sun C 5.13.
</span><br>
<span class="quotelev1">&gt; Hopefully I have some time tomorrow to to test this version with some
</span><br>
<span class="quotelev1">&gt; simple programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux, Sun C 5.13:
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; PASS: opal_bit_ops
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/home&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/net&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/misc&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (3 of 20 failed)
</span><br>
<span class="quotelev1">&gt; Test usage: ./opal_path_nfs [DIR]
</span><br>
<span class="quotelev1">&gt; On Linux interprets output from mount(8) to check for nfs and verify opal_path_nfs()
</span><br>
<span class="quotelev1">&gt; Additionally, you may specify multiple DIR on the cmd-line, of which you the output
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[0]:/dev fs:devtmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[1]:/dev/shm fs:tmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[2]:/run fs:tmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[3]:/dev/pts fs:devpts nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[4]:/ fs:ext4 nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[5]:/proc fs:proc nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[6]:/sys fs:sysfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[7]:/sys/kernel/debug fs:debugfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[8]:/sys/kernel/security fs:securityfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[9]:/local fs:ext4 nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[10]:/var/lock fs:tmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[11]:/var/run fs:tmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[12]:/media fs:tmpfs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[13]:/usr/local fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[14]:/opt/global fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; get_mounts: already know dir[13]:/usr/local
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[13]:/usr/local fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[15]:/export2 fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; get_mounts: already know dir[14]:/opt/global
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[14]:/opt/global fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[16]:/misc fs:autofs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[17]:/net fs:autofs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[18]:/home fs:autofs nfs:No
</span><br>
<span class="quotelev1">&gt; get_mounts: dirs[19]:/home/fd1026 fs:nfs nfs:Yes
</span><br>
<span class="quotelev1">&gt; test(): file:/home/fd1026 bool:1
</span><br>
<span class="quotelev1">&gt; test(): file:/home bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/net bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/misc bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/export2 bool:1
</span><br>
<span class="quotelev1">&gt; test(): file:/opt/global bool:1
</span><br>
<span class="quotelev1">&gt; test(): file:/usr/local bool:1
</span><br>
<span class="quotelev1">&gt; test(): file:/media bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/var/run bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/var/lock bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/local bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/sys/kernel/security bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/sys/kernel/debug bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/sys bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/proc bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/ bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/dev/pts bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/run bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/dev/shm bool:0
</span><br>
<span class="quotelev1">&gt; test(): file:/dev bool:0
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test/util'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test/util'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc/test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 133 dtmail_ssh &amp;
</span><br>
<span class="quotelev1">&gt; [1] 17531
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 134 libSDtMail: Warning: Xt Warning: Missing charsets in 
</span><br>
<span class="quotelev1">&gt; String to FontSet conversion
</span><br>
<span class="quotelev1">&gt; libSDtMail: Warning: Xt Warning: Cannot convert string &quot;-dt-interface 
</span><br>
<span class="quotelev1">&gt; user-medium-r-normal-s*-*-*-*-*-*-*-*-*&quot; to type FontSet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_cc 134 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux, gcc-4.9.2:
</span><br>
<span class="quotelev1">&gt; =================
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       opal_lifo.o
</span><br>
<span class="quotelev1">&gt;  CCLD     opal_lifo
</span><br>
<span class="quotelev1">&gt;  CC       opal_fifo.o
</span><br>
<span class="quotelev1">&gt;  CCLD     opal_fifo
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_rb_tree_t: (21 tests)
</span><br>
<span class="quotelev1">&gt; PASS: ompi_rb_tree
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_bitmap_t: (17 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_bitmap
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_hash_table_t: (57 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_hash_table
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_proc_table_t: (9 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_proc_table
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_tree_t: (12 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_tree
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_list
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_value_array_t: (45 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_value_array
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_pointer_array: (14 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_pointer_array
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5:  5746 Illegal instruction     ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: opal_lifo
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5:  5776 Illegal instruction     ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: opal_fifo
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 10 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test/class'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc/test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-557-g01a24c4-Linux.x86_64.64_gcc 146 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris 10 Sparc and x86_64, Sun C 5.13 and gcc-4.9.2:
</span><br>
<span class="quotelev1">&gt; ======================================================
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       opal_lifo.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../openmpi-dev-557-g01a24c4/test/class/opal_lifo.c&quot;, line 45: warning: implicit function 
</span><br>
<span class="quotelev1">&gt; declaration: timersub
</span><br>
<span class="quotelev1">&gt;  CCLD     opal_lifo
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt; symbol                             in file
</span><br>
<span class="quotelev1">&gt; timersub                            opal_lifo.o
</span><br>
<span class="quotelev1">&gt; ld: fatal: symbol referencing errors. No output written to .libs/opal_lifo
</span><br>
<span class="quotelev1">&gt; make[3]: *** [opal_lifo] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test/class'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test/class'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc/test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-557-g01a24c4-SunOS.sparc.64_cc 136 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I anticipate that this fix will also make it in for the v1.8.4 
</span><br>
<span class="quotelev2">&gt;&gt; release (see <a href="https://github.com/open-mpi/ompi-release/pull/136">https://github.com/open-mpi/ompi-release/pull/136</a>);
</span><br>
<span class="quotelev2">&gt;&gt; Ralph will be making a new RC tarball sometime this morning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2014, at 1:22 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a similar issue was reported in mpich with xlf compilers :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/2144">http://trac.mpich.org/projects/mpich/ticket/2144</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They concluded this is a compiler issue (e.g. the compiler does not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implement TS 29113 subclause 8.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much. I'll report the problem to Oracle and perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they can and will fix their compiler problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i made PR 315 <a href="https://github.com/open-mpi/ompi/pull/315">https://github.com/open-mpi/ompi/pull/315</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; f08 binding support is disabled if TS29113 subclause 8.1 is not implemented
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you please review/comment on this ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/12/12 2:28, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will you have the time to fix the Fortran problem for the new Oracle
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.make.SunOS.sparc.64_cc 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ^                   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a procedure that is interoperable or a procedure pointer associated with an 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interoperable procedure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25963.php">http://www.open-mpi.org/community/lists/users/2014/12/25963.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25993.php">http://www.open-mpi.org/community/lists/users/2014/12/25993.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26012.php">http://www.open-mpi.org/community/lists/users/2014/12/26012.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26016.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26014.php">George Bosilca: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26030.php">Mike Dubman: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26030.php">Mike Dubman: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
