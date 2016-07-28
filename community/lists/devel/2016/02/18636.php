<?
$subject_val = "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 14:46:56 2016" -->
<!-- isoreceived="20160226194656" -->
<!-- sent="Fri, 26 Feb 2016 11:46:53 -0800" -->
<!-- isosent="20160226194653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler" -->
<!-- id="0A639AD8-D664-473B-A0D8-9F214C003F06_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D0AABD.9030108_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 14:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>In reply to:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Reply:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the child processes are not calling orte_init or anything like that? I can check it - any chance you can give me a line number via a debug build?
<br>
<p><span class="quotelev1">&gt; On Feb 26, 2016, at 11:42 AM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got this strange crash on master this night running nv/mpix_test :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [ 0] /lib64/libpthread.so.0(+0xf710)[0x7f9f19a80710]
</span><br>
<span class="quotelev1">&gt; [ 1] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-rte.so.0(orte_util_compare_name_fields+0x81)[0x7f9f1a88f6d7]
</span><br>
<span class="quotelev1">&gt; [ 2] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/openmpi/mca_iof_hnp.so(orte_iof_hnp_read_local_handler+0x247)[0x7f9f1109b4ab]
</span><br>
<span class="quotelev1">&gt; [ 3] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0xbf1)[0x7f9f1a5b68f1]
</span><br>
<span class="quotelev1">&gt; [ 4] mpirun[0x405649][drossetti-ivy4:31651] [ 5] mpirun[0x403a48]
</span><br>
<span class="quotelev1">&gt; [ 6] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9f196fbd1d]
</span><br>
<span class="quotelev1">&gt; [ 7] mpirun[0x4038e9]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This test is not even calling MPI_Init/Finalize, only MPIX_Query_cuda_support. So it is really an ORTE race condition, and the problem is hard to reproduce. It takes sometimes more than 50 runs with random sleep between runs to see the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't even know if we want to fix that -- what do you think ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18635.php">http://www.open-mpi.org/community/lists/devel/2016/02/18635.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>In reply to:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Reply:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
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
