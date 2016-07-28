<?
$subject_val = "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:23:46 2015" -->
<!-- isoreceived="20151021122346" -->
<!-- sent="Wed, 21 Oct 2015 14:23:39 +0200" -->
<!-- isosent="20151021122339" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK" -->
<!-- id="562783CB.4070602_at_in.tum.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56264E05.1000607_at_in.tum.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 08:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Previous message:</strong> <a href="27903.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>In reply to:</strong> <a href="27900.php">Sebastian Rettenberger: "[OMPI users] Multiple MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Reply:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The title was actually not correct. I first thought that happens when 
<br>
using multiple tasks/threads, but I could reproduce this with one task 
<br>
and thread as well.
<br>
<p>Sebastian
<br>
<p>On 10/20/2015 04:21 PM, Sebastian Rettenberger wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there seems to be a bug in MPI_Win_lock/MPI_Win_unlock in OpenMPI 1.10.
</span><br>
<span class="quotelev1">&gt; The same code runs fine with OpenMPI 1.8.7 and Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens when using MPI_Win_lock with MPI_MODE_CHECK. I could
</span><br>
<span class="quotelev1">&gt; reproduce this with the attached code with one rank and
</span><br>
<span class="quotelev1">&gt; MPI_LOCK_EXCLUSIVE as well as MPI_LOCK_SHARED. OpenMPI is compiled with
</span><br>
<span class="quotelev1">&gt; &quot;--enable-mpi-thread-multiple&quot; (not sure if this is important).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the error message:
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/bin/mpicxx test.cpp &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/bin/mpiexec -np 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] Failing at address: 0x3c
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36d40)[0x7fe8585ccd40]
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_process_flush_ack+0x53)[0x7fe84e51a303]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(+0x132bc)[0x7fe84e5162bc]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_request_progress_match+0x393)[0x7fe84f1915e3]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_req_start+0x21b)[0x7fe84f194a8b]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_start+0x90)[0x7fe84f19bd40]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_irecv_w_cb+0x55)[0x7fe84e5133b5]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_frag_start_receive+0x57)[0x7fe84e514977]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(+0x13176)[0x7fe84e516176]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_callback_match+0x1dc)[0x7fe84f18daac]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_btl_self.so(mca_btl_self_send+0x40)[0x7fe8542a48e0]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_prepare+0xcd)[0x7fe84f199e8d]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [12]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_start+0x411)[0x7fe84f19c0c1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [13]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_isend_w_cb+0x50)[0x7fe84e513250]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [14]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(+0x13db6)[0x7fe84e516db6]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [15]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(+0x160c7)[0x7fe84e5190c7]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [16]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/openmpi/mca_osc_pt2pt.so(+0x16935)[0x7fe84e519935]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [17]
</span><br>
<span class="quotelev2">&gt;&gt; /work/local/openmpi/lib/libmpi.so.12(PMPI_Win_unlock+0xa7)[0x7fe858ef5a57]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [18] ./a.out[0x40873a]
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [19]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fe8585b7ec5]
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] [20] ./a.out[0x408589]
</span><br>
<span class="quotelev2">&gt;&gt; [hpcsccs4:29012] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 0 with PID 29012 on node hpcsccs4
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27900.php">http://www.open-mpi.org/community/lists/users/2015/10/27900.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sebastian Rettenberger, M.Sc.
Technische Universit&#195;&#164;t M&#195;&#188;nchen
Department of Informatics
Chair of Scientific Computing
Boltzmannstrasse 3, 85748 Garching, Germany
<a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27904/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Previous message:</strong> <a href="27903.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>In reply to:</strong> <a href="27900.php">Sebastian Rettenberger: "[OMPI users] Multiple MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Reply:</strong> <a href="27905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
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
