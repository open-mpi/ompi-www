<?
$subject_val = "Re: [OMPI devel] Intermittent mpirun crash?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 11:52:20 2014" -->
<!-- isoreceived="20140130165220" -->
<!-- sent="Thu, 30 Jan 2014 08:51:53 -0800" -->
<!-- isosent="20140130165153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent mpirun crash?" -->
<!-- id="54404A35-62DF-4488-A4EE-D357CF4C3B78_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601917D34C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent mpirun crash?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 11:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13957.php">George Bosilca: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13955.php">Rolf vandeVaart: "[OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13955.php">Rolf vandeVaart: "[OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13958.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13958.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh - not much info there, I'm afraid. I gather you didn't build this with --enable-debug?
<br>
<p>On Jan 30, 2014, at 8:26 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am seeing this happening to me very intermittently.  Looks like mpirun is getting a SEGV.  Is anyone else seeing this?
</span><br>
<span class="quotelev1">&gt; This is 1.7.4 built yesterday.  (Note that I added some stuff to what is being printed out so the message is slightly different than 1.7.4 output)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun - -np 6 -host drossetti-ivy0,drossetti-ivy1,drossetti-ivy2,drossetti-ivy3 --mca btl_openib_warn_default_gid_prefix 0  --  `pwd`/src/MPI_Waitsome_p_c
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting:  MPI_Waitsome_p:  Persistent Waitsome using two nodes
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Waitsome_p:  Persistent Waitsome using two nodes all tests PASSED (742)
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0:10353] *** Process (mpirun)received signal ***
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0:10353] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0:10353] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0:10353] Failing at address: 0x7fd31e5f208d
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0:10353] End of signal information - not sleeping
</span><br>
<span class="quotelev1">&gt; gmake[1]: *** [MPI_Waitsome_p_c] Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; gmake[1]: Leaving directory `/geppetto/home/rvandevaart/public/ompi-tests/trunk/intel_tests'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00007fd31f620807 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x00007fd31f6210b9 in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x00007fd31fb2893e in backtrace () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007fd320b0d622 in opal_backtrace_buffer (message_out=0x7fd31e5e33a0, len_out=0x7fd31e5e33ac)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../opal/mca/backtrace/execinfo/backtrace_execinfo.c:57
</span><br>
<span class="quotelev1">&gt; #4  0x00007fd320b0a794 in show_stackframe (signo=11, info=0x7fd31e5e3930, p=0x7fd31e5e3800) at ../../../opal/util/stacktrace.c:354
</span><br>
<span class="quotelev1">&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00007fd31e5f208d in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00007fd31e5e46d8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #8  0x000000000000c2a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13957.php">George Bosilca: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13955.php">Rolf vandeVaart: "[OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13955.php">Rolf vandeVaart: "[OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13958.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13958.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
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
