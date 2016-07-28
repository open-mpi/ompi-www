<?
$subject_val = "Re: [OMPI devel] Question regarding recently common shared-memory component";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 12:31:39 2010" -->
<!-- isoreceived="20100920163139" -->
<!-- sent="Mon, 20 Sep 2010 10:31:33 -0600" -->
<!-- isosent="20100920163133" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding recently common shared-memory component" -->
<!-- id="85CDAFE0-D8D1-44B4-BDD0-45094E989EB5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7085D6BB0_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question regarding recently common shared-memory component<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 12:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8511.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me take a look at it.  How did you configure your build?
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Sep 20, 2010, at 10:14 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
 &gt; wrote:
&gt; Hi
&gt;
&gt; I believe the new common shared memory component was committed to  
&gt; the trunk sometime towards the later part of August. I had not tried  
&gt; this trunk version until last week and I have seen some discrepancy  
&gt; with this component specifically related to checkpoint  
&gt; functionality. I am not able to checkpoint any program with the  
&gt; latest trunk version. Am I missing something here? Should I be using  
&gt; any other options to enable checkpoint functionality for shared  
&gt; memory component?
&gt;
&gt; However if I disable shared memory component and use only self, tcp,  
&gt; and openib (--mca btl self,tcp,openib), I can checkpoint  
&gt; successfully!!
&gt;
&gt; Following are the options I have used with mpirun:
&gt;
&gt; mpirun -am ft-enable-cr --mca opal_cr_enable_timer 1 --mca  
&gt; sstore_stage_global_is_shared 1 --mca  
&gt; sstore_base_global_snapshot_dir /scratch/hpl005/UIT_test/amudar/FWI  
&gt; --mca mpi_paffinity_alone 1  -np 32 -hostfile hostfile-32 ../hellompi
&gt;
&gt; Please note that hellompi is a very simple program without any  
&gt; collective calls. When I issue checkpoint, this program fails with  
&gt; the following messages:
&gt;
&gt; hplcnlj158:13937] Signal: Segmentation fault (11)
&gt; [hplcnlj158:13937] Signal code: Address not mapped (1)
&gt; [hplcnlj158:13937] Failing at address: 0x2aaa00000001
&gt; [hplcnlj158:13937] [ 0] /lib64/libpthread.so.0 [0x2b4019a064c0]
&gt; [hplcnlj158:13937] [ 1] /users/amudar/openmpi-1.7/lib/ 
&gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)  
&gt; [0x2aaaad96628a]
&gt; [hplcnlj158:13937] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; [hplcnlj158:13937] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b4018c3c11b]
&gt; [hplcnlj158:13937] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_base_components_open+0x3ef) [0x2b4018c3b70b]
&gt; [hplcnlj158:13937] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_btl_base_open+0xfd) [0x2b4018b620fe]
&gt; [hplcnlj158:13937] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; [hplcnlj158:13937] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; [hplcnlj158:13937] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; [hplcnlj158:13937] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b4018b01a0d]
&gt; [hplcnlj158:13937] [10] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(ompi_cr_coord+0xc0) [0x2b4018b017ba]
&gt; [hplcnlj158:13937] [11] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_inc_core_recover+0xed) [0x2b4018c0efab]
&gt; [hplcnlj158:13937] [12] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; [hplcnlj158:13937] [13] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b4018c0ecd3]
&gt; [hplcnlj158:13937] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b4018c0f6e7]
&gt; [hplcnlj158:13937] [15] /lib64/libpthread.so.0 [0x2b40199fe367]
&gt; [hplcnlj158:13937] [16] /lib64/libc.so.6(clone+0x6d) [0x2b4019ce5f7d]
&gt; [hplcnlj158:13937] *** End of error message ***
&gt; [hplcnlj161:00637] *** Process received signal ***
&gt; [hplcnlj161:00637] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00637] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00637] Failing at address: 0x2aaa00000001
&gt; [hplcnlj161:00649] *** Process received signal ***
&gt; [hplcnlj161:00649] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00649] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00649] Failing at address: 0x2aaa00000001
&gt; /users/amudar/Fix_for_pidinuse/cr_restart: line 5: 14012  
&gt; Segmentation fault      /usr/blcr/bin/cr_restart --no-restore-pid &quot;$@&quot;
&gt; [hplcnlj161:00643] *** Process received signal ***
&gt; [hplcnlj161:00643] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00643] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00643] Failing at address: 0x2aaa00000001
&gt; [hplcnlj161:00640] *** Process received signal ***
&gt; [hplcnlj161:00640] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00640] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00640] Failing at address: 0x2aaa00000001
&gt; [hplcnlj161:00636] *** Process received signal ***
&gt; [hplcnlj161:00652] *** Process received signal ***
&gt; [hplcnlj161:00652] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00652] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00652] Failing at address: 0x2aaa00000001
&gt; [hplcnlj161:00636] Signal: Segmentation fault (11)
&gt; [hplcnlj161:00636] Signal code: Address not mapped (1)
&gt; [hplcnlj161:00636] Failing at address: 0x2aaa00000001
&gt; [hplcnlj161:00637] [ 0] /lib64/libpthread.so.0 [0x2b86c74694c0]
&gt; [hplcnlj161:00637] [ 1] /users/amudar/openmpi-1.7/lib/ 
&gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)  
&gt; [0x2aaaad96628a]
&gt; [hplcnlj161:00637] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; [hplcnlj161:00637] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b86c669f11b]
&gt; [hplcnlj161:00637] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_base_components_open+0x3ef) [0x2b86c669e70b]
&gt; [hplcnlj161:00637] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_btl_base_open+0xfd) [0x2b86c65c50fe]
&gt; [hplcnlj161:00637] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; [hplcnlj161:00637] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; [hplcnlj161:00637] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; [hplcnlj161:00637] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b86c6564a0d]
&gt; [hplcnlj161:00637] [10] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(ompi_cr_coord+0xc0) [0x2b86c65647ba]
&gt; [hplcnlj161:00637] [11] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_inc_core_recover+0xed) [0x2b86c6671fab]
&gt; [hplcnlj161:00637] [12] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; [hplcnlj161:00637] [13] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b86c6671cd3]
&gt; [hplcnlj161:00637] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b86c66726e7]
&gt; [hplcnlj161:00637] [15] /lib64/libpthread.so.0 [0x2b86c7461367]
&gt; [hplcnlj161:00637] [16] /lib64/libc.so.6(clone+0x6d) [0x2b86c7748f7d]
&gt; [hplcnlj161:00637] *** End of error message ***
&gt; [hplcnlj161:00649] [ 0] /lib64/libpthread.so.0 [0x2b7bfa6204c0]
&gt; [hplcnlj161:00649] [ 1] /users/amudar/openmpi-1.7/lib/ 
&gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)  
&gt; [0x2aaaad96628a]
&gt; [hplcnlj161:00649] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; [hplcnlj161:00649] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b7bf985611b]
&gt; [hplcnlj161:00649] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_base_components_open+0x3ef) [0x2b7bf985570b]
&gt; [hplcnlj161:00649] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(mca_btl_base_open+0xfd) [0x2b7bf977c0fe]
&gt; [hplcnlj161:00649] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; [hplcnlj161:00649] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; [hplcnlj161:00649] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; [hplcnlj161:00649] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b7bf971ba0d]
&gt; [hplcnlj161:00649] [10] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(ompi_cr_coord+0xc0) [0x2b7bf971b7ba]
&gt; [hplcnlj161:00649] [11] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_inc_core_recover+0xed) [0x2b7bf9828fab]
&gt; [hplcnlj161:00649] [12] /users/amudar/openmpi-1.7/lib/openmpi/ 
&gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; [hplcnlj161:00649] [13] /users/amudar/openmpi-1.7/lib/libmpi.so. 
&gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b7bf9828cd3]
&gt; [hplcnlj161:00649] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0  
&gt; [0x2b7bf98296e7]
&gt; [hplcnlj161:00649] [15] /lib64/libpthread.so.0 [0x2b7bfa618367]
&gt; [hplcnlj161:00649] [16] /lib64/libc.so.6(clone+0x6d) [0x2b7bfa8fff7d]
&gt; [hplcnlj161:00649] *** End of error message ***
&gt;
&gt;
&gt; Thanks
&gt; Ananda
&gt;
&gt; Ananda B Mudar, PMP
&gt; Senior Technical Architect
&gt; Wipro Technologies
&gt; Ph: 972 765 8093
&gt; ananda.mudar_at_[hidden]
&gt;
&gt; Please do not print this email unless it is absolutely necessary.
&gt;
&gt; The information contained in this electronic message and any  
&gt; attachments to this message are intended for the exclusive use of  
&gt; the addressee(s) and may contain proprietary, confidential or  
&gt; privileged information. If you are not the intended recipient, you  
&gt; should not disseminate, distribute or copy this e-mail. Please  
&gt; notify the sender immediately and destroy all copies of this message  
&gt; and any attachments.
&gt;
&gt; WARNING: Computer viruses can be transmitted via email. The  
&gt; recipient should check this email and any attachments for the  
&gt; presence of viruses. The company accepts no liability for any damage  
&gt; caused by any virus transmitted by this email.
&gt;
&gt; www.wipro.com
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8511.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
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
