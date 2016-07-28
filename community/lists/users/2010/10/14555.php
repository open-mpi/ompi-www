<?
$subject_val = "[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 10:59:06 2010" -->
<!-- isoreceived="20101022145906" -->
<!-- sent="Fri, 22 Oct 2010 16:43:39 +0200 (CEST)" -->
<!-- isosent="20101022144339" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9" -->
<!-- id="201010221443.o9MEhd6J006846_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 10:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build Open MPI 1.5 on SunOS x86_64 with the Oracle/Sun
<br>
Studio C compiler and gcc-4.2.0 in 32- and 64-bit mode. I couldn't
<br>
built the package with Oracle/Sun C 5.9 in 32-bit mode with thread
<br>
support.
<br>
<p>sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 110 tail -15
<br>
&nbsp;&nbsp;log.make.SunOS.x86_64.32_cc 
<br>
make[3]: Leaving directory `/.../ompi/include'
<br>
make[2]: Leaving directory `/.../ompi/include'
<br>
Making all in datatype
<br>
make[2]: Entering directory `/.../ompi/datatype'
<br>
&nbsp;&nbsp;CC     ompi_datatype_args.lo
<br>
&quot;ompi_datatype_args.c&quot;, [ompi_datatype_set_args]:ube: error:
<br>
&nbsp;&nbsp;Unsupported constraint 'y' in GASM Inlining
<br>
&quot;ompi_datatype_args.c&quot;, [ompi_datatype_set_args]:ube: error:
<br>
&nbsp;&nbsp;Unsupported constraint 'y' in GASM Inlining
<br>
&quot;ompi_datatype_args.c&quot;, [ompi_datatype_set_args]:ube: error:
<br>
&nbsp;&nbsp;Unsupported constraint 'y' in GASM Inlining
<br>
&quot;ompi_datatype_args.c&quot;, [ompi_datatype_set_args]:ube: error:
<br>
&nbsp;&nbsp;Unsupported constraint 'y' in GASM Inlining
<br>
cc: ube failed for ../../../openmpi-1.5/ompi/datatype/ompi_datatype_args.c
<br>
make[2]: *** [ompi_datatype_args.lo] Error 1
<br>
make[2]: Leaving directory `/.../ompi/datatype'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [all-recursive] Error 1
<br>
sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 111 
<br>
<p><p>Does anybody know how to solve the problem? Thank you very much
<br>
for any suggestions in advance. I could built the package without
<br>
thread support. &quot;make check&quot; reports the following warnings and
<br>
when I run any program it blocks without any output.
<br>
<p>sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 27 grep -i warning:
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_barrier_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 43: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_sub_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_barrier_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 43: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_add_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_spinlock_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 135: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_sub_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_spinlock_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 135: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_add_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_math_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 147: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_sub_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_math_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 147: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_add_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_cmpset_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 291: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_sub_32()
<br>
&quot;../../../openmpi-1.5/test/asm/atomic_cmpset_noinline.c&quot;,
<br>
&nbsp;&nbsp;line 291: warning: static function called but not defined:
<br>
&nbsp;&nbsp;opal_atomic_add_32()
<br>
<p><p>Some tests didn't pass.
<br>
<p>sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 30 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc 
<br>
FAIL: atomic_cmpset
<br>
sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 31 grep SKIP
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
SKIP: atomic_spinlock
<br>
SKIP: atomic_spinlock_noinline
<br>
sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 32 grep PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset_noinline
<br>
<p><p>One test results in a segmentation fault.
<br>
<p>sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 34 tail -40
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Skipped
<br>
PASS: atomic_math
<br>
--&gt; Testing atomic_math_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Skipped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Skipped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Skipped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Skipped
<br>
PASS: atomic_math_noinline
<br>
--&gt; Testing atomic_cmpset
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8: 14573 Segmentation Fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8: 14574 Segmentation Fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8: 14575 Segmentation Fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Failed
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8: 14576 Segmentation Fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
../../../openmpi-1.5/test/asm/run_tests: line 8: 14577 Segmentation Fault
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
1 of 6 tests failed
<br>
(2 tests were not run)
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
sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 35 
<br>
<p><p><p><p>I add a short summary about my successes and failures. &quot;ok&quot; means
<br>
I could install the package and successfully run two small programs
<br>
(one is a simple matrix multiplication with MPI and OpenMP, 1-4
<br>
processes and 8 threads). For PCs with SunOS &quot;make&quot; breaks with the
<br>
above error and for PCs with Linux with the error which I reported
<br>
yesterday. I configured Open MPI with thread support for all versions
<br>
with &quot;ok&quot;. For all other versions it didn't matter if I used thread
<br>
support or not, because &quot;make&quot; broke in both cases with the same
<br>
error or the resulting programs were useless because they blocked.
<br>
<p>SunOS sparc,  32-bit, cc: ok
<br>
SunOS sparc,  64-bit, cc: ok
<br>
SunOS x86,    32-bit, cc: with thread support: &quot;make&quot; breaks
<br>
SunOS x86,    32-bit, cc: without thread support: problems in &quot;make check&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;could built everything, but programs block
<br>
SunOS x86_64, 32-bit, cc: with thread support: &quot;make&quot; breaks
<br>
SunOS x86_64, 32-bit, cc: without thread support: problems in &quot;make check&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;could built everything, but programs block
<br>
SunOS x86_64, 64-bit, cc: could built everything, but programs block
<br>
Linux x86,    32-bit, cc: &quot;make&quot; breaks
<br>
Linux x86_64, 32-bit, cc: &quot;make&quot; breaks
<br>
Linux x86_64, 64-bit, cc: &quot;make&quot; breaks
<br>
<p>SunOS sparc,  32-bit, gcc: ok
<br>
SunOS sparc,  64-bit, gcc: ok
<br>
SunOS x86,    32-bit, gcc: ok
<br>
SunOS x86_64, 32-bit, gcc: ok
<br>
SunOS x86_64, 64-bit, gcc: ok
<br>
Linux x86,    32-bit, gcc: ok
<br>
Linux x86_64, 32-bit, gcc: ok
<br>
Linux x86_64, 64-bit, gcc: ok
<br>
<p>Does anybody know when Open MPI will be available for Cygwin? Is
<br>
anybody interested in error reports for Cygwin?
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
