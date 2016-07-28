<?
$subject_val = "[OMPI devel] Crash in orte_iof_hnp_read_local_handler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 14:43:02 2016" -->
<!-- isoreceived="20160226194302" -->
<!-- sent="Fri, 26 Feb 2016 11:42:53 -0800" -->
<!-- isosent="20160226194253" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sjeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Crash in orte_iof_hnp_read_local_handler" -->
<!-- id="56D0AABD.9030108_at_nvidia.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Crash in orte_iof_hnp_read_local_handler<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sjeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 14:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Reply:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got this strange crash on master this night running nv/mpix_test :
<br>
<p>Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: 0x50
<br>
[ 0] /lib64/libpthread.so.0(+0xf710)[0x7f9f19a80710]
<br>
[ 1] 
<br>
/ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-rte.so.0(orte_util_compare_name_fields+0x81)[0x7f9f1a88f6d7]
<br>
[ 2] 
<br>
/ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/openmpi/mca_iof_hnp.so(orte_iof_hnp_read_local_handler+0x247)[0x7f9f1109b4ab]
<br>
[ 3] 
<br>
/ivylogin/home/sjeaugey/tests/mtt/scratches/mtt-scratch-4/installs/eGXW/install/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0xbf1)[0x7f9f1a5b68f1]
<br>
[ 4] mpirun[0x405649][drossetti-ivy4:31651] [ 5] mpirun[0x403a48]
<br>
[ 6] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9f196fbd1d]
<br>
[ 7] mpirun[0x4038e9]
<br>
*** End of error message ***
<br>
<p>This test is not even calling MPI_Init/Finalize, only 
<br>
MPIX_Query_cuda_support. So it is really an ORTE race condition, and the 
<br>
problem is hard to reproduce. It takes sometimes more than 50 runs with 
<br>
random sleep between runs to see the problem.
<br>
<p>I don't even know if we want to fix that -- what do you think ?
<br>
<p>Sylvain
<br>
<p><p><p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Reply:</strong> <a href="18636.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
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
