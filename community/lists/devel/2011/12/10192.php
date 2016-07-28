<?
$subject_val = "[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 00:42:07 2011" -->
<!-- isoreceived="20111221054207" -->
<!-- sent="Tue, 20 Dec 2011 21:41:33 -0800" -->
<!-- isosent="20111221054133" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2" -->
<!-- id="4EF1718D.1040803_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 00:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10193.php">TERRY DONTJE: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building openmpi-1.5.5rc1 on Solaris10/UltraSPARC-T2 (with -mcpu=v9 as 
<br>
README requires) I see the following from &quot;make check&quot;:
<br>
<span class="quotelev1">&gt; --&gt; Testing atomic_cmpset
</span><br>
<span class="quotelev1">&gt; Assertion failed: volptr == newptr, file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/atomic_cmpset.c, 
</span><br>
<span class="quotelev1">&gt; line 199
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 19487 Abort
</span><br>
<span class="quotelev1">&gt;    (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;     - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: volptr == newptr, file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/atomic_cmpset.c, 
</span><br>
<span class="quotelev1">&gt; line 199
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 19488 Abort
</span><br>
<span class="quotelev1">&gt;    (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;     - 2 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: volptr == newptr, file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/atomic_cmpset.c, 
</span><br>
<span class="quotelev1">&gt; line 199
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 19489 Abort
</span><br>
<span class="quotelev1">&gt;    (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;     - 4 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: volptr == newptr, file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/atomic_cmpset.c, 
</span><br>
<span class="quotelev1">&gt; line 199
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 19490 Abort
</span><br>
<span class="quotelev1">&gt;    (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;     - 5 threads: Failed
</span><br>
<span class="quotelev1">&gt; Assertion failed: volptr == newptr, file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/atomic_cmpset.c, 
</span><br>
<span class="quotelev1">&gt; line 199
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/test/asm/run_tests: 
</span><br>
<span class="quotelev1">&gt; line 8: 19491 Abort
</span><br>
<span class="quotelev1">&gt;    (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;     - 8 threads: Failed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_cmpset
</span><br>
<p>The vital stats:
<br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS [hostname] 5.10 Generic_137111-07 sun4v sparc SUNW,T5240
</span><br>
<span class="quotelev1">&gt; $ which gcc
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; sparc-sun-solaris2.10-gcc (GCC) 4.0.4 (gccfss)
</span><br>
Note that &quot;gccfss&quot; is a GCC front-end grafted onto Sun's own back-end.
<br>
<p>Configured with &quot;CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9 --disable-mpi-f77 
<br>
--disable-mpi-f90 --without-hwloc&quot;
<br>
Which results in
<br>
<span class="quotelev1">&gt; $ grep  -i atomic config.log
</span><br>
<span class="quotelev1">&gt; configure:27700: result: yes (atomic-sparcv9-32-solaris.s)
</span><br>
<span class="quotelev1">&gt; configure:27757: checking for atomic assembly filename
</span><br>
<span class="quotelev1">&gt; configure:27764: result: atomic-sparcv9-32-solaris.s
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_file=atomic-sparcv9-32-solaris.s
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_FILE='atomic-sparcv9-32-solaris.s'
</span><br>
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
<li><strong>Next message:</strong> <a href="10193.php">TERRY DONTJE: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
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
