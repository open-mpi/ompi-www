<?
$subject_val = "Re: [OMPI devel] Intermittent mpirun crash?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 12:35:44 2014" -->
<!-- isoreceived="20140130173544" -->
<!-- sent="Thu, 30 Jan 2014 09:35:22 -0800" -->
<!-- isosent="20140130173522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent mpirun crash?" -->
<!-- id="5F8241B1-886E-4F00-A77E-1E5F6D15F13B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36019A607CB_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2014-01-30 12:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13959.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13959.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That option might explain why your test process is failing (which segfaulted as well), but obviously wouldn't have anything to do with mpirun
<br>
<p>On Jan 30, 2014, at 9:29 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just retested with --mca mpi_leave_pinned 0 and that made no difference.  I still see the mpirun crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev2">&gt;&gt; Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, January 30, 2014 11:59 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Intermittent mpirun crash?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got something similar 2 days ago, with a large software package abusing of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitany/MPI_Waitsome (that was working seamlessly a month ago). I
</span><br>
<span class="quotelev2">&gt;&gt; had to find a quick fix. Upon figuring out that turning the leave_pinned off
</span><br>
<span class="quotelev2">&gt;&gt; fixes the problem, I did not investigate any further.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you see a similar behavior?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2014, at 17:26 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am seeing this happening to me very intermittently.  Looks like mpirun is
</span><br>
<span class="quotelev2">&gt;&gt; getting a SEGV.  Is anyone else seeing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is 1.7.4 built yesterday.  (Note that I added some stuff to what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is being printed out so the message is slightly different than 1.7.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun - -np 6 -host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drossetti-ivy0,drossetti-ivy1,drossetti-ivy2,drossetti-ivy3 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_warn_default_gid_prefix 0  --  `pwd`/src/MPI_Waitsome_p_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST info  (0): Starting:  MPI_Waitsome_p:  Persistent Waitsome
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using two nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Waitsome_p:  Persistent Waitsome using two nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all tests PASSED (742) [drossetti-ivy0:10353] *** Process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mpirun)received signal *** [drossetti-ivy0:10353] Signal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (11) [drossetti-ivy0:10353] Signal code: Address
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not mapped (1) [drossetti-ivy0:10353] Failing at address:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x7fd31e5f208d [drossetti-ivy0:10353] End of signal information - not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sleeping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake[1]: *** [MPI_Waitsome_p_c] Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake[1]: Leaving directory `/geppetto/home/rvandevaart/public/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; tests/trunk/intel_tests'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fd31f620807 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fd31f6210b9 in _Unwind_Backtrace () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fd31fb2893e in backtrace () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fd320b0d622 in opal_backtrace_buffer
</span><br>
<span class="quotelev2">&gt;&gt; (message_out=0x7fd31e5e33a0, len_out=0x7fd31e5e33ac)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../opal/mca/backtrace/execinfo/backtrace_execinfo.c:57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fd320b0a794 in show_stackframe (signo=11,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info=0x7fd31e5e3930, p=0x7fd31e5e3800) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/util/stacktrace.c:354
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00007fd31e5f208d in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x00007fd31e5e46d8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x000000000000c2a8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13959.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13959.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Reply:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
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
