<?
$subject_val = "[OMPI devel] Question regarding recently common shared-memory component";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 12:15:06 2010" -->
<!-- isoreceived="20100920161506" -->
<!-- sent="Mon, 20 Sep 2010 09:14:33 -0700" -->
<!-- isosent="20100920161433" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Question regarding recently common shared-memory component" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7085D6BB0_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> [OMPI devel] Question regarding recently common shared-memory component<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20regarding%20recently%20common%20shared-memory%20component"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-20 12:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Reply:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>I believe the new common shared memory component was committed to the
<br>
trunk sometime towards the later part of August. I had not tried this
<br>
trunk version until last week and I have seen some discrepancy with this
<br>
component specifically related to checkpoint functionality. I am not
<br>
able to checkpoint any program with the latest trunk version. Am I
<br>
missing something here? Should I be using any other options to enable
<br>
checkpoint functionality for shared memory component?
<br>
<p>&nbsp;
<br>
<p>However if I disable shared memory component and use only self, tcp, and
<br>
openib (--mca btl self,tcp,openib), I can checkpoint successfully!!
<br>
<p>&nbsp;
<br>
<p>Following are the options I have used with mpirun:
<br>
<p>&nbsp;
<br>
<p>mpirun -am ft-enable-cr --mca opal_cr_enable_timer 1 --mca
<br>
sstore_stage_global_is_shared 1 --mca sstore_base_global_snapshot_dir
<br>
/scratch/hpl005/UIT_test/amudar/FWI --mca mpi_paffinity_alone 1  -np 32
<br>
-hostfile hostfile-32 ../hellompi
<br>
<p>&nbsp;
<br>
<p>Please note that hellompi is a very simple program without any
<br>
collective calls. When I issue checkpoint, this program fails with the
<br>
following messages:
<br>
<p>&nbsp;
<br>
<p>hplcnlj158:13937] Signal: Segmentation fault (11)
<br>
[hplcnlj158:13937] Signal code: Address not mapped (1)
<br>
[hplcnlj158:13937] Failing at address: 0x2aaa00000001
<br>
[hplcnlj158:13937] [ 0] /lib64/libpthread.so.0 [0x2b4019a064c0]
<br>
[hplcnlj158:13937] [ 1]
<br>
/users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_
<br>
register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj158:13937] [ 2]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj158:13937] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b4018c3c11b]
<br>
[hplcnlj158:13937] [ 4]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef
<br>
) [0x2b4018c3b70b]
<br>
[hplcnlj158:13937] [ 5]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd)
<br>
[0x2b4018b620fe]
<br>
[hplcnlj158:13937] [ 6]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj158:13937] [ 7]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj158:13937] [ 8]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj158:13937] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b4018b01a0d]
<br>
[hplcnlj158:13937] [10]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0)
<br>
[0x2b4018b017ba]
<br>
[hplcnlj158:13937] [11]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed)
<br>
[0x2b4018c0efab]
<br>
[hplcnlj158:13937] [12]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj158:13937] [13]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_rea
<br>
dy+0x11b) [0x2b4018c0ecd3]
<br>
[hplcnlj158:13937] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b4018c0f6e7]
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
/users/amudar/Fix_for_pidinuse/cr_restart: line 5: 14012 Segmentation
<br>
fault      /usr/blcr/bin/cr_restart --no-restore-pid &quot;$@&quot;
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
[hplcnlj161:00637] [ 1]
<br>
/users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_
<br>
register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj161:00637] [ 2]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj161:00637] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b86c669f11b]
<br>
[hplcnlj161:00637] [ 4]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef
<br>
) [0x2b86c669e70b]
<br>
[hplcnlj161:00637] [ 5]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd)
<br>
[0x2b86c65c50fe]
<br>
[hplcnlj161:00637] [ 6]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj161:00637] [ 7]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj161:00637] [ 8]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj161:00637] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b86c6564a0d]
<br>
[hplcnlj161:00637] [10]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0)
<br>
[0x2b86c65647ba]
<br>
[hplcnlj161:00637] [11]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed)
<br>
[0x2b86c6671fab]
<br>
[hplcnlj161:00637] [12]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj161:00637] [13]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_rea
<br>
dy+0x11b) [0x2b86c6671cd3]
<br>
[hplcnlj161:00637] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b86c66726e7]
<br>
[hplcnlj161:00637] [15] /lib64/libpthread.so.0 [0x2b86c7461367]
<br>
[hplcnlj161:00637] [16] /lib64/libc.so.6(clone+0x6d) [0x2b86c7748f7d]
<br>
[hplcnlj161:00637] *** End of error message ***
<br>
[hplcnlj161:00649] [ 0] /lib64/libpthread.so.0 [0x2b7bfa6204c0]
<br>
[hplcnlj161:00649] [ 1]
<br>
/users/amudar/openmpi-1.7/lib/libmca_common_sm.so.0(mca_common_sm_param_
<br>
register+0x262) [0x2aaaad96628a]
<br>
[hplcnlj161:00649] [ 2]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_btl_sm.so [0x2aaaaf0a55e8]
<br>
[hplcnlj161:00649] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b7bf985611b]
<br>
[hplcnlj161:00649] [ 4]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_base_components_open+0x3ef
<br>
) [0x2b7bf985570b]
<br>
[hplcnlj161:00649] [ 5]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(mca_btl_base_open+0xfd)
<br>
[0x2b7bf977c0fe]
<br>
[hplcnlj161:00649] [ 6]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_bml_r2.so [0x2aaaadd9e4fb]
<br>
[hplcnlj161:00649] [ 7]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_ob1.so [0x2aaaae5fa429]
<br>
[hplcnlj161:00649] [ 8]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_pml_crcpw.so [0x2aaaadfadce6]
<br>
[hplcnlj161:00649] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b7bf971ba0d]
<br>
[hplcnlj161:00649] [10]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(ompi_cr_coord+0xc0)
<br>
[0x2b7bf971b7ba]
<br>
[hplcnlj161:00649] [11]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_inc_core_recover+0xed)
<br>
[0x2b7bf9828fab]
<br>
[hplcnlj161:00649] [12]
<br>
/users/amudar/openmpi-1.7/lib/openmpi/mca_snapc_full.so [0x2aaaabd280fc]
<br>
[hplcnlj161:00649] [13]
<br>
/users/amudar/openmpi-1.7/lib/libmpi.so.0(opal_cr_test_if_checkpoint_rea
<br>
dy+0x11b) [0x2b7bf9828cd3]
<br>
[hplcnlj161:00649] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
<br>
[0x2b7bf98296e7]
<br>
[hplcnlj161:00649] [15] /lib64/libpthread.so.0 [0x2b7bfa618367]
<br>
[hplcnlj161:00649] [16] /lib64/libc.so.6(clone+0x6d) [0x2b7bfa8fff7d]
<br>
[hplcnlj161:00649] *** End of error message ***
<br>
<p><p><p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Reply:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Maybe reply:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
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
