<?
$subject_val = "[OMPI devel] Checkpoint is broken in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 10:15:16 2010" -->
<!-- isoreceived="20100917141516" -->
<!-- sent="Fri, 17 Sep 2010 07:14:53 -0700" -->
<!-- isosent="20100917141453" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Checkpoint is broken in trunk" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E717D712_at_usa-mv-msg.wipro.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Checkpoint is broken in trunk<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Checkpoint%20is%20broken%20in%20trunk"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-17 10:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I downloaded the nightly build of the trunk (r23756) and found that the checkpoint functionality is broken. My MPI program is a simple helloworld program incrementing and printing the number every few seconds once.
<br>
&nbsp;
<br>
Following are the steps:
<br>
1. mpirun with NP set to 32
<br>
2. call ompi-checkpoint with &quot;-term&quot; option and it terminate the program after successful checkpoint image creation
<br>
3. call ompi-restart using the checkpoint image and it terminates with segmentation fault
<br>
&nbsp;
<br>
I tried these steps with 1.5rc6 and 1.4.2 and I am able to restart the process using the checkpoint image. Am I missing any steps here? Reducing the number of processes didn't change the behavior.
<br>
&nbsp;
<br>
Following is the output from my checkpoint attempt:
<br>
&nbsp;
<br>
=== Output START ==================================
<br>
mpirun -am ft-enable-cr --mca opal_cr_enable_timer 1 --mca sstore_stage_global_is_shared 1 --mca sstore_base_global_snapshot_dir /scratch/hpl005/UIT_test/amudar/FWI --mca mpi_paffinity_alone 1  -np 32 -hostfile hostfile-32 ../hellompi
<br>
Hello, world, I am 0 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 4 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 5 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 1 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 9 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 8 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 2 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 7 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 16 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 10 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 14 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 3 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 11 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 13 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 15 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 20 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 18 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 17 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 23 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 24 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 22 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 19 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 21 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 28 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 6 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 26 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 27 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 25 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 30 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 31 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 29 of 32
<br>
&nbsp;&nbsp;1 Hello, world, I am 12 of 32
<br>
&nbsp;&nbsp;1   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   2   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   3   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   4   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   5   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   6   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   7   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   8   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9 [hplcnlj158:13937] OPAL CR Timing: ******************** Summary Begin
<br>
[hplcnlj158:13937] opal_cr: timing: Start Entry Point    =       0.01 s       1.22 s      0.57
<br>
[hplcnlj158:13937] opal_cr: timing: CRCP Protocol        =       0.43 s       1.22 s     35.45
<br>
[hplcnlj158:13937] opal_cr: timing: P2P Suspend          =       0.00 s       1.22 s      0.34
<br>
[hplcnlj158:13937] opal_cr: timing: Checkpoint           =       0.64 s       1.22 s     52.87
<br>
[hplcnlj158:13937] opal_cr: timing: P2P Reactivation     = -1284678958.98 s          1.22 s     -105438618322.51
<br>
[hplcnlj158:13937] opal_cr: timing: CRCP Cleanup         =       0.00 s       1.22 s      0.00
<br>
[hplcnlj158:13937] opal_cr: timing: Finish Entry Point   = 1284678959.11 s           1.22 s     105438618333.28
<br>
[hplcnlj158:13937] OPAL CR Timing: ******************** Summary End
<br>
hplcnlj158&gt; ompi-restart -am ft-enable-cr --mca opal_cr_enable_timer 1 -hostfile hostfile-32 --mca sstore_stage_global_is_shared 1 --mca sstore_base_global_snapshot_dir /scratch/hpl005/UIT_test/amudar/FWI ompi_global_snapshot_13933.ckpt
<br>
&nbsp;&nbsp;9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9   9 [hplcnlj158:13937] *** Process received signal ***
<br>
[hplcnlj158:13937] Signal: Segmentation fault (11)
<br>
[hplcnlj158:13937] Signal code: Address not mapped (1)
<br>
[hplcnlj158:13937] Failing at address: 0x2aaa00000001
<br>
[hplcnlj158:13937] [ 0] /lib64/libpthread.so.0 [0x2b4019a064c0]
<br>
[hplcnlj158:13937] [ 1] /users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj158:13937] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj158:13937] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b4018c3c11b]
<br>
[hplcnlj158:13937] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef) [0x2b4018c3b70b]
<br>
[hplcnlj158:13937] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd) [0x2b4018b620fe]
<br>
[hplcnlj158:13937] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj158:13937] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj158:13937] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj158:13937] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b4018b01a0d]
<br>
[hplcnlj158:13937] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0) [0x2b4018b017ba]
<br>
[hplcnlj158:13937] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed) [0x2b4018c0efab]
<br>
[hplcnlj158:13937] [12] /users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj158:13937] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b4018c0ecd3]
<br>
[hplcnlj158:13937] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b4018c0f6e7]
<br>
[hplcnlj158:13937] [15] /lib64/libpthread.so.0 [0x2b40199fe367]
<br>
[hplcnlj158:13937] [16] /lib64/libc.so.6(clone+0x6d) [0x2b4019ce5f7d]
<br>
[hplcnlj158:13937] *** End of error message ***
<br>
[hplcnlj161:00637] *** Process received signal ***
<br>
[hplcnlj161:00637] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00637] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00637] Failing at address: 0x2aaa00000001
<br>
[hplcnlj161:00649] *** Process received signal ***
<br>
[hplcnlj161:00649] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00649] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00649] Failing at address: 0x2aaa00000001
<br>
/users/amudar/Fix_for_pidinuse/cr_restart: line 5: 14012 Segmentation fault      /usr/blcr/bin/cr_restart --no-restore-pid &quot;$@&quot;
<br>
[hplcnlj161:00643] *** Process received signal ***
<br>
[hplcnlj161:00643] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00643] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00643] Failing at address: 0x2aaa00000001
<br>
[hplcnlj161:00640] *** Process received signal ***
<br>
[hplcnlj161:00640] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00640] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00640] Failing at address: 0x2aaa00000001
<br>
[hplcnlj161:00636] *** Process received signal ***
<br>
[hplcnlj161:00652] *** Process received signal ***
<br>
[hplcnlj161:00652] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00652] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00652] Failing at address: 0x2aaa00000001
<br>
[hplcnlj161:00636] Signal: Segmentation fault (11)
<br>
[hplcnlj161:00636] Signal code: Address not mapped (1)
<br>
[hplcnlj161:00636] Failing at address: 0x2aaa00000001
<br>
[hplcnlj161:00637] [ 0] /lib64/libpthread.so.0 [0x2b86c74694c0]
<br>
[hplcnlj161:00637] [ 1] /users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj161:00637] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj161:00637] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b86c669f11b]
<br>
[hplcnlj161:00637] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef) [0x2b86c669e70b]
<br>
[hplcnlj161:00637] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd) [0x2b86c65c50fe]
<br>
[hplcnlj161:00637] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj161:00637] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj161:00637] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj161:00637] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b86c6564a0d]
<br>
[hplcnlj161:00637] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0) [0x2b86c65647ba]
<br>
[hplcnlj161:00637] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed) [0x2b86c6671fab]
<br>
[hplcnlj161:00637] [12] /users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj161:00637] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b86c6671cd3]
<br>
[hplcnlj161:00637] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b86c66726e7]
<br>
[hplcnlj161:00637] [15] /lib64/libpthread.so.0 [0x2b86c7461367]
<br>
[hplcnlj161:00637] [16] /lib64/libc.so.6(clone+0x6d) [0x2b86c7748f7d]
<br>
[hplcnlj161:00637] *** End of error message ***
<br>
[hplcnlj161:00649] [ 0] /lib64/libpthread.so.0 [0x2b7bfa6204c0]
<br>
[hplcnlj161:00649] [ 1] /users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj161:00649] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj161:00649] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b7bf985611b]
<br>
[hplcnlj161:00649] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef) [0x2b7bf985570b]
<br>
[hplcnlj161:00649] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd) [0x2b7bf977c0fe]
<br>
[hplcnlj161:00649] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj161:00649] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj161:00649] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj161:00649] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b7bf971ba0d]
<br>
[hplcnlj161:00649] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0) [0x2b7bf971b7ba]
<br>
[hplcnlj161:00649] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed) [0x2b7bf9828fab]
<br>
[hplcnlj161:00649] [12] /users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj161:00649] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b7bf9828cd3]
<br>
[hplcnlj161:00649] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0 [0x2b7bf98296e7]
<br>
[hplcnlj161:00649] [15] /lib64/libpthread.so.0 [0x2b7bfa618367]
<br>
[hplcnlj161:00649] [16] /lib64/libc.so.6(clone+0x6d) [0x2b7bfa8fff7d]
<br>
[hplcnlj161:00649] *** End of error message ***
<br>
======= Output END =======================
<br>
Ananda B Mudar, PMP 
<br>
Senior Technical Architect 
<br>
Wipro Technologies 
<br>
Ph: 972 765 8093 
<br>
<p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
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
