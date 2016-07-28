<?
$subject_val = "Re: [OMPI devel] Question regarding recently common shared-memory component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 11:44:16 2010" -->
<!-- isoreceived="20100921154416" -->
<!-- sent="Tue, 21 Sep 2010 09:44:11 -0600" -->
<!-- isosent="20100921154411" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding recently common shared-memory component" -->
<!-- id="62B2CDEE-0084-497E-8761-47D1CB8DEC59_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E708659710_at_usa-mv-msg.wipro.com" -->
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
<strong>Date:</strong> 2010-09-21 11:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just to be clear - do you see similar checkpoint performance  
<br>
differences in 1.5rc6 and 1.4.2 with and without shared memory enabled?
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Sep 21, 2010, at 9:35 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
 &gt; wrote:
&gt; Hello Samuel
&gt; This problem seems to be resolved after I moved to r23781. However,  
&gt; I see another discrepancy in checkpoint image creation time when I  
&gt; disable shared memory (--mca btl self,tcp,openib) vs using it. I  
&gt; mean the time to create checkpoint image for this simple program is  
&gt; about 0.4 seconds if I disable shared memory while it is close to  
&gt; 6.5 seconds when I use shared memory component. I have not seen this  
&gt; behavior earlier. Do I have to tune any other parameter to reduce  
&gt; the time?
&gt; Thanks
&gt; Ananda
&gt; Hi Ananda,
&gt;
&gt; This issue should be resolved in r23781. Please let me know if it is
&gt; not.
&gt;
&gt; Thanks!
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt; On Sep 20, 2010, at 11:26 AM, &lt;ananda.mudar_at_[hidden]&gt;  
&gt; &lt;ananda.mudar_at_[hidden]
&gt;  &gt; wrote:
&gt; &gt; I have used following options to build:
&gt; &gt; ./configure CC=/usr/bin/gcc CXX=/usr/bin/c++ F77=/usr/bin/gfortran
&gt; &gt; FC=/usr/bin/gfortran --prefix /users/amudar/openmpi-1.7 --with-tm=/
&gt; &gt; usr/local/pbs --with-openib --with-threads=posix --enable-mpi- 
&gt; thread-
&gt; &gt; multiple --enable-ft-thread --enable-debug --with-ft=cr --with- 
&gt; blcr=/
&gt; &gt; usr/blcr --with-blcr-libdir=/usr/blcr/lib
&gt; &gt;
&gt; &gt; Alsop please note that this is with r23756 build.
&gt; &gt;
&gt; &gt; Let me know if you need any other information.
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt; Ananda
&gt; &gt; Let me take a look at it. How did you configure your build?
&gt; &gt; Thanks,
&gt; &gt;
&gt; &gt; --
&gt; &gt; Samuel K. Gutierrez
&gt; &gt; Los Alamos National Laboratory
&gt; &gt; On Sep 20, 2010, at 10:14 AM, &lt;ananda.mudar_at_[hidden]&gt;
&gt; &gt; &lt;ananda.mudar_at_[hidden]
&gt; &gt;  &gt; wrote:
&gt; &gt; &gt; Hi
&gt; &gt; &gt;
&gt; &gt; &gt; I believe the new common shared memory component was committed to
&gt; &gt; &gt; the trunk sometime towards the later part of August. I had not  
&gt; tried
&gt; &gt; &gt; this trunk version until last week and I have seen some  
&gt; discrepancy
&gt; &gt; &gt; with this component specifically related to checkpoint
&gt; &gt; &gt; functionality. I am not able to checkpoint any program with the
&gt; &gt; &gt; latest trunk version. Am I missing something here? Should I be  
&gt; using
&gt; &gt; &gt; any other options to enable checkpoint functionality for shared
&gt; &gt; &gt; memory component?
&gt; &gt; &gt;
&gt; &gt; &gt; However if I disable shared memory component and use only self,  
&gt; tcp,
&gt; &gt; &gt; and openib (--mca btl self,tcp,openib), I can checkpoint
&gt; &gt; &gt; successfully!!
&gt; &gt; &gt;
&gt; &gt; &gt; Following are the options I have used with mpirun:
&gt; &gt; &gt;
&gt; &gt; &gt; mpirun -am ft-enable-cr --mca opal_cr_enable_timer 1 --mca
&gt; &gt; &gt; sstore_stage_global_is_shared 1 --mca
&gt; &gt; &gt; sstore_base_global_snapshot_dir /scratch/hpl005/UIT_test/amudar/ 
&gt; FWI
&gt; &gt; &gt; --mca mpi_paffinity_alone 1  -np 32 -hostfile hostfile-32 ../
&gt; &gt; hellompi
&gt; &gt; &gt;
&gt; &gt; &gt; Please note that hellompi is a very simple program without any
&gt; &gt; &gt; collective calls. When I issue checkpoint, this program fails with
&gt; &gt; &gt; the following messages:
&gt; &gt; &gt;
&gt; &gt; &gt; hplcnlj158:13937] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj158:13937] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj158:13937] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj158:13937] [ 0] /lib64/libpthread.so.0 [0x2b4019a064c0]
&gt; &gt; &gt; [hplcnlj158:13937] [ 1] /users/amudar/openmpi-1.7/lib/
&gt; &gt; &gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)
&gt; &gt; &gt; [0x2aaaad96628a]
&gt; &gt; &gt; [hplcnlj158:13937] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; &gt; &gt; [hplcnlj158:13937] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b4018c3c11b]
&gt; &gt; &gt; [hplcnlj158:13937] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_base_components_open+0x3ef) [0x2b4018c3b70b]
&gt; &gt; &gt; [hplcnlj158:13937] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_btl_base_open+0xfd) [0x2b4018b620fe]
&gt; &gt; &gt; [hplcnlj158:13937] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; &gt; &gt; [hplcnlj158:13937] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; &gt; &gt; [hplcnlj158:13937] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; &gt; &gt; [hplcnlj158:13937] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b4018b01a0d]
&gt; &gt; &gt; [hplcnlj158:13937] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(ompi_cr_coord+0xc0) [0x2b4018b017ba]
&gt; &gt; &gt; [hplcnlj158:13937] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_inc_core_recover+0xed) [0x2b4018c0efab]
&gt; &gt; &gt; [hplcnlj158:13937] [12] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; &gt; &gt; [hplcnlj158:13937] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b4018c0ecd3]
&gt; &gt; &gt; [hplcnlj158:13937] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b4018c0f6e7]
&gt; &gt; &gt; [hplcnlj158:13937] [15] /lib64/libpthread.so.0 [0x2b40199fe367]
&gt; &gt; &gt; [hplcnlj158:13937] [16] /lib64/libc.so.6(clone+0x6d)
&gt; &gt; [0x2b4019ce5f7d]
&gt; &gt; &gt; [hplcnlj158:13937] *** End of error message ***
&gt; &gt; &gt; [hplcnlj161:00637] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00637] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00637] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00637] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj161:00649] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00649] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00649] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00649] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; /users/amudar/Fix_for_pidinuse/cr_restart: line 5: 14012
&gt; &gt; &gt; Segmentation fault      /usr/blcr/bin/cr_restart --no-restore-pid
&gt; &gt; &quot;$@&quot;
&gt; &gt; &gt; [hplcnlj161:00643] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00643] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00643] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00643] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj161:00640] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00640] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00640] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00640] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj161:00636] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00652] *** Process received signal ***
&gt; &gt; &gt; [hplcnlj161:00652] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00652] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00652] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj161:00636] Signal: Segmentation fault (11)
&gt; &gt; &gt; [hplcnlj161:00636] Signal code: Address not mapped (1)
&gt; &gt; &gt; [hplcnlj161:00636] Failing at address: 0x2aaa00000001
&gt; &gt; &gt; [hplcnlj161:00637] [ 0] /lib64/libpthread.so.0 [0x2b86c74694c0]
&gt; &gt; &gt; [hplcnlj161:00637] [ 1] /users/amudar/openmpi-1.7/lib/
&gt; &gt; &gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)
&gt; &gt; &gt; [0x2aaaad96628a]
&gt; &gt; &gt; [hplcnlj161:00637] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; &gt; &gt; [hplcnlj161:00637] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b86c669f11b]
&gt; &gt; &gt; [hplcnlj161:00637] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_base_components_open+0x3ef) [0x2b86c669e70b]
&gt; &gt; &gt; [hplcnlj161:00637] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_btl_base_open+0xfd) [0x2b86c65c50fe]
&gt; &gt; &gt; [hplcnlj161:00637] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; &gt; &gt; [hplcnlj161:00637] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; &gt; &gt; [hplcnlj161:00637] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; &gt; &gt; [hplcnlj161:00637] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b86c6564a0d]
&gt; &gt; &gt; [hplcnlj161:00637] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(ompi_cr_coord+0xc0) [0x2b86c65647ba]
&gt; &gt; &gt; [hplcnlj161:00637] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_inc_core_recover+0xed) [0x2b86c6671fab]
&gt; &gt; &gt; [hplcnlj161:00637] [12] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; &gt; &gt; [hplcnlj161:00637] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b86c6671cd3]
&gt; &gt; &gt; [hplcnlj161:00637] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b86c66726e7]
&gt; &gt; &gt; [hplcnlj161:00637] [15] /lib64/libpthread.so.0 [0x2b86c7461367]
&gt; &gt; &gt; [hplcnlj161:00637] [16] /lib64/libc.so.6(clone+0x6d)
&gt; &gt; [0x2b86c7748f7d]
&gt; &gt; &gt; [hplcnlj161:00637] *** End of error message ***
&gt; &gt; &gt; [hplcnlj161:00649] [ 0] /lib64/libpthread.so.0 [0x2b7bfa6204c0]
&gt; &gt; &gt; [hplcnlj161:00649] [ 1] /users/amudar/openmpi-1.7/lib/
&gt; &gt; &gt; libmca_common_sm.so.0(mca_common_sm_param_register+0x262)
&gt; &gt; &gt; [0x2aaaad96628a]
&gt; &gt; &gt; [hplcnlj161:00649] [ 2] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_btl_sm.so [0x2aaaaf0a55e8]
&gt; &gt; &gt; [hplcnlj161:00649] [ 3] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b7bf985611b]
&gt; &gt; &gt; [hplcnlj161:00649] [ 4] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_base_components_open+0x3ef) [0x2b7bf985570b]
&gt; &gt; &gt; [hplcnlj161:00649] [ 5] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(mca_btl_base_open+0xfd) [0x2b7bf977c0fe]
&gt; &gt; &gt; [hplcnlj161:00649] [ 6] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_bml_r2.so [0x2aaaadd9e4fb]
&gt; &gt; &gt; [hplcnlj161:00649] [ 7] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_ob1.so [0x2aaaae5fa429]
&gt; &gt; &gt; [hplcnlj161:00649] [ 8] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_pml_crcpw.so [0x2aaaadfadce6]
&gt; &gt; &gt; [hplcnlj161:00649] [ 9] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b7bf971ba0d]
&gt; &gt; &gt; [hplcnlj161:00649] [10] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(ompi_cr_coord+0xc0) [0x2b7bf971b7ba]
&gt; &gt; &gt; [hplcnlj161:00649] [11] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_inc_core_recover+0xed) [0x2b7bf9828fab]
&gt; &gt; &gt; [hplcnlj161:00649] [12] /users/amudar/openmpi-1.7/lib/openmpi/
&gt; &gt; &gt; mca_snapc_full.so [0x2aaaabd280fc]
&gt; &gt; &gt; [hplcnlj161:00649] [13] /users/amudar/openmpi-1.7/lib/libmpi.so.
&gt; &gt; &gt; 0(opal_cr_test_if_checkpoint_ready+0x11b) [0x2b7bf9828cd3]
&gt; &gt; &gt; [hplcnlj161:00649] [14] /users/amudar/openmpi-1.7/lib/libmpi.so.0
&gt; &gt; &gt; [0x2b7bf98296e7]
&gt; &gt; &gt; [hplcnlj161:00649] [15] /lib64/libpthread.so.0 [0x2b7bfa618367]
&gt; &gt; &gt; [hplcnlj161:00649] [16] /lib64/libc.so.6(clone+0x6d)
&gt; &gt; [0x2b7bfa8fff7d]
&gt; &gt; &gt; [hplcnlj161:00649] *** End of error message ***
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; Thanks
&gt; &gt; &gt; Ananda
&gt; &gt; &gt;
&gt; &gt; &gt; Ananda B Mudar, PMP
&gt; &gt; &gt; Senior Technical Architect
&gt; &gt; &gt; Wipro Technologies
&gt; &gt; &gt; Ph: 972 765 8093              972 765 8093
&gt; &gt; &gt; ananda.mudar_at_[hidden]
&gt; &gt; &gt;
&gt; &gt; &gt; Please do not print this email unless it is absolutely necessary.
&gt; &gt; &gt;
&gt; &gt; &gt; The information contained in this electronic message and any
&gt; &gt; &gt; attachments to this message are intended for the exclusive use of
&gt; &gt; &gt; the addressee(s) and may contain proprietary, confidential or
&gt; &gt; &gt; privileged information. If you are not the intended recipient, you
&gt; &gt; &gt; should not disseminate, distribute or copy this e-mail. Please
&gt; &gt; &gt; notify the sender immediately and destroy all copies of this  
&gt; message
&gt; &gt; &gt; and any attachments.
&gt; &gt; &gt;
&gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The
&gt; &gt; &gt; recipient should check this email and any attachments for the
&gt; &gt; &gt; presence of viruses. The company accepts no liability for any  
&gt; damage
&gt; &gt; &gt; caused by any virus transmitted by this email.
&gt; &gt; &gt;
&gt; &gt; &gt; www.wipro.com
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; devel mailing list
&gt; &gt; &gt; devel_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; Please do not print this email unless it is absolutely necessary.
&gt; &gt;
&gt; &gt; The information contained in this electronic message and any
&gt; &gt; attachments to this message are intended for the exclusive use of
&gt; &gt; the addressee(s) and may contain proprietary, confidential or
&gt; &gt; privileged information. If you are not the intended recipient, you
&gt; &gt; should not disseminate, distribute or copy this e-mail. Please
&gt; &gt; notify the sender immediately and destroy all copies of this message
&gt; &gt; and any attachments.
&gt; &gt;
&gt; &gt; WARNING: Computer viruses can be transmitted via email. The
&gt; &gt; recipient should check this email and any attachments for the
&gt; &gt; presence of viruses. The company accepts no liability for any damage
&gt; &gt; caused by any virus transmitted by this email.
&gt; &gt;
&gt; &gt; www.wipro.com
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8514.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
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
