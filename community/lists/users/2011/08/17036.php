<?
$subject_val = "Re: [OMPI users] scaling issue beyond 1024 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 14:02:30 2011" -->
<!-- isoreceived="20110809180230" -->
<!-- sent="Tue, 9 Aug 2011 14:02:25 -0400" -->
<!-- isosent="20110809180225" -->
<!-- name="CB" -->
<!-- email="cbalways_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling issue beyond 1024 processes" -->
<!-- id="CAOAHkMi9iTEB=ZrnMu2-4RcLt8ULBEqycKaJMQqQMTAZm6UkHg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3E6C8A5-113C-4C56-A6C6-249B453255B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling issue beyond 1024 processes<br>
<strong>From:</strong> CB (<em>cbalways_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 14:02:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17035.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>In reply to:</strong> <a href="17035.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Reply:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Yes, you are right. Those nodes were still pointing to an old version.
<br>
I'll check the installation on all nodes and try to run it again.
<br>
<p>Thanks,
<br>
- Chansup
<br>
<p>On Tue, Aug 9, 2011 at 1:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That error makes no sense - line 335 is just a variable declaration. Sure
</span><br>
<span class="quotelev1">&gt; you are not picking up a different version on that node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2011, at 11:37 AM, CB wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently I'm having trouble to scale an MPI job beyond a certain limit.
</span><br>
<span class="quotelev2">&gt; &gt; So I'm running an MPI hello example to test beyond 1024 but it failed
</span><br>
<span class="quotelev1">&gt; with the following error with 2048 processes.
</span><br>
<span class="quotelev2">&gt; &gt; It worked fine with 1024 processes.  I have enough file descriptor limit
</span><br>
<span class="quotelev1">&gt; (65536) defined for each process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I appreciate if anyone gives me any suggestions.
</span><br>
<span class="quotelev2">&gt; &gt; I'm running (Open MPI) 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [x-01-06-a:25989] [[37568,0],69] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev1">&gt; inadequate space in file base/odls_base_default_fns.c at line 335
</span><br>
<span class="quotelev2">&gt; &gt; [x-01-06-b:09532] [[37568,0],74] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev1">&gt; inadequate space in file base/odls_base_default_fns.c at line 335
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] Failing at address: 0x6c
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 0] /lib64/libpthread.so.0 [0x310860ee90]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x230)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbe0c5010]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 2] /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 3] mpirun [0x403bbe]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 4] /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0x99)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbde50e49]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_trigger_event+0x42)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbe0a7ca2]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x22d)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbe0c500d]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 8] /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0x99)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbde50e49]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x23d)
</span><br>
<span class="quotelev1">&gt; [0x7f0dbe0c5ddd]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [11]
</span><br>
<span class="quotelev1">&gt; /usr/local/MPI/openmpi-1.4.3/lib/openmpi/mca_plm_rsh.so [0x7f0dbd41d679]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [12] mpirun [0x40373f]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [13] mpirun [0x402a1c]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [14] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt; [0x3107e1ea2d]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] [15] mpirun [0x402939]
</span><br>
<span class="quotelev2">&gt; &gt; [x-03-20-b:23316] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; [x-01-06-a:25989] [[37568,0],69]-[[37568,0],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt; &gt; [x-01-06-b:09532] [[37568,0],74]-[[37568,0],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt; &gt; ./sge_jsb.sh: line 9: 23316 Segmentation fault      (core dumped) mpirun
</span><br>
<span class="quotelev1">&gt; -np $NSLOTS ./hello_openmpi.exe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17035.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>In reply to:</strong> <a href="17035.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Reply:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
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
