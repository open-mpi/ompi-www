<?
$subject_val = "[OMPI devel] Intermittent mpirun crash?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 11:26:46 2014" -->
<!-- isoreceived="20140130162646" -->
<!-- sent="Thu, 30 Jan 2014 08:26:44 -0800" -->
<!-- isosent="20140130162644" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Intermittent mpirun crash?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601917D34C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Intermittent mpirun crash?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 11:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13954.php">Shamis, Pavel: "Re: [OMPI devel] Still getting 100% trunk failure on 32 bit platform: coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13957.php">George Bosilca: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing this happening to me very intermittently.  Looks like mpirun is getting a SEGV.  Is anyone else seeing this?
<br>
This is 1.7.4 built yesterday.  (Note that I added some stuff to what is being printed out so the message is slightly different than 1.7.4 output)
<br>
<p>mpirun - -np 6 -host drossetti-ivy0,drossetti-ivy1,drossetti-ivy2,drossetti-ivy3 --mca btl_openib_warn_default_gid_prefix 0  --  `pwd`/src/MPI_Waitsome_p_c
<br>
MPITEST info  (0): Starting:  MPI_Waitsome_p:  Persistent Waitsome using two nodes
<br>
MPITEST_results: MPI_Waitsome_p:  Persistent Waitsome using two nodes all tests PASSED (742)
<br>
[drossetti-ivy0:10353] *** Process (mpirun)received signal ***
<br>
[drossetti-ivy0:10353] Signal: Segmentation fault (11)
<br>
[drossetti-ivy0:10353] Signal code: Address not mapped (1)
<br>
[drossetti-ivy0:10353] Failing at address: 0x7fd31e5f208d
<br>
[drossetti-ivy0:10353] End of signal information - not sleeping
<br>
gmake[1]: *** [MPI_Waitsome_p_c] Segmentation fault (core dumped)
<br>
gmake[1]: Leaving directory `/geppetto/home/rvandevaart/public/ompi-tests/trunk/intel_tests'
<br>
<p>(gdb) where
<br>
#0  0x00007fd31f620807 in ?? () from /lib64/libgcc_s.so.1
<br>
#1  0x00007fd31f6210b9 in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
<br>
#2  0x00007fd31fb2893e in backtrace () from /lib64/libc.so.6
<br>
#3  0x00007fd320b0d622 in opal_backtrace_buffer (message_out=0x7fd31e5e33a0, len_out=0x7fd31e5e33ac)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../opal/mca/backtrace/execinfo/backtrace_execinfo.c:57
<br>
#4  0x00007fd320b0a794 in show_stackframe (signo=11, info=0x7fd31e5e3930, p=0x7fd31e5e3800) at ../../../opal/util/stacktrace.c:354
<br>
#5  &lt;signal handler called&gt;
<br>
#6  0x00007fd31e5f208d in ?? ()
<br>
#7  0x00007fd31e5e46d8 in ?? ()
<br>
#8  0x000000000000c2a8 in ?? ()
<br>
#9  0x0000000000000000 in ?? ()
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13954.php">Shamis, Pavel: "Re: [OMPI devel] Still getting 100% trunk failure on 32 bit platform: coll ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13956.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13957.php">George Bosilca: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
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
