<?
$subject_val = "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 18:11:28 2016" -->
<!-- isoreceived="20160228231128" -->
<!-- sent="Sun, 28 Feb 2016 15:11:24 -0800" -->
<!-- isosent="20160228231124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler" -->
<!-- id="D00B9BD9-0B97-41E0-BC81-20E54F3F3E3C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D0B978.20308_at_nvidia.com" -->
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
<strong>Date:</strong> 2016-02-28 18:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18641.php">Jeff Squyres (jsquyres): "[OMPI devel] Enabled threading tests in Cisco MTT"</a>
<li><strong>Previous message:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should now be fixed in master
<br>
<p><span class="quotelev1">&gt; On Feb 26, 2016, at 12:45 PM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, the child processes are only calling MPIX_Query_cuda_support which is just &quot;return OPAL_CUDA_SUPPORT&quot;. I can reproduce the problem with &quot;ls&quot; (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have the line numbers, but from the calling stack, the only way it could segfault is that &quot;&amp;proct-&gt;stdinev-&gt;daemon&quot; is wrong in orte_iof_hnp_read_local_handler (orte/mca/iof/hnp/iof_hnp_read.c:145).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which means that the cbdata passed from libevent to orte_iof_hnp_read_local_handler() is wrong or was destroyed, freed, .... The crash seems to happen after some ranks already finished (but others didn't start yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, I found how to reproduce it easily. You need to have orted do 3 things at the same time : process stdout (child processes writing to stdout), stdin (I'm hitting enter to produce stdin to mpirun) and tcp connections (mpirun between multiple nodes). If run within the node, I get no crash, if I don't hit &quot;enter&quot;, no crash. If I call &quot;sleep 1&quot; instead of &quot;ls /&quot;, no crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I run this loop :
</span><br>
<span class="quotelev1">&gt;  while mpirun -host &lt;two nodes at least&gt; -np 6 ls /; do true; done
</span><br>
<span class="quotelev1">&gt;  &lt;works fine until you hit enter and you get the crash&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why MTT is reproducing the error ... does it write to mpirun stdin ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/26/2016 11:46 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So the child processes are not calling orte_init or anything like that? I can check it - any chance you can give me a line number via a debug build?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 26, 2016, at 11:42 AM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got this strange crash on master this night running nv/mpix_test :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Failing at address: 0x50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 0] /lib64/libpthread.so.0(+0xf710)[0x7f9f19a80710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 1] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-rte.so.0(orte_util_compare_name_fields+0x81)[0x7f9f1a88f6d7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 2] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/openmpi/mca_iof_hnp.so(orte_iof_hnp_read_local_handler+0x247)[0x7f9f1109b4ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 3] /ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0xbf1)[0x7f9f1a5b68f1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 4] mpirun[0x405649][drossetti-ivy4:31651] [ 5] mpirun[0x403a48]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 6] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9f196fbd1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 7] mpirun[0x4038e9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This test is not even calling MPI_Init/Finalize, only MPIX_Query_cuda_support. So it is really an ORTE race condition, and the problem is hard to reproduce. It takes sometimes more than 50 runs with random sleep between runs to see the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't even know if we want to fix that -- what do you think ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18635.php">http://www.open-mpi.org/community/lists/devel/2016/02/18635.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18636.php">http://www.open-mpi.org/community/lists/devel/2016/02/18636.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18637.php">http://www.open-mpi.org/community/lists/devel/2016/02/18637.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18641.php">Jeff Squyres (jsquyres): "[OMPI devel] Enabled threading tests in Cisco MTT"</a>
<li><strong>Previous message:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
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
