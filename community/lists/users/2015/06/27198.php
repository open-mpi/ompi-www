<?
$subject_val = "Re: [OMPI users] Running with native ugni on a Cray XC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 18:11:28 2015" -->
<!-- isoreceived="20150625221128" -->
<!-- sent="Thu, 25 Jun 2015 16:11:26 -0600" -->
<!-- isosent="20150625221126" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running with native ugni on a Cray XC" -->
<!-- id="CAF1Cqj5ay3yO0Rt1tEXSygBgY-se-55KNQBMim_Bm_HpEuOK3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="431FBD479B82074EA4C9DC37E413F4F32505B27E_at_CFWEX01.americas.cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running with native ugni on a Cray XC<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 18:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>In reply to:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Reply:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick
<br>
<p>use master not 1.8.x. for cray xc.  also for config do not pay attention to
<br>
cray/lanl platform files.  just do config.  also if using nativized slurm
<br>
launch with srun not mpirun.
<br>
<p>howard
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Jun 25, 2015 2:56 PM, &quot;Nick Radcliffe&quot; &lt;nradclif_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build and run Open MPI 1.8.5 with native ugni on a Cray XC.
</span><br>
<span class="quotelev1">&gt; The build works, but I'm getting this error when I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nradclif_at_kay:/lus/scratch/nradclif&gt; aprun -n 2 -N 1 ./osu_latency
</span><br>
<span class="quotelev1">&gt; [nid00014:28784] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; [nid00014:28784] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start:
</span><br>
<span class="quotelev1">&gt; Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 0] /lib64/libpthread.so.0(+0xf850)[0x2aaaab42b850]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2aaaab66b885]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 2] /lib64/libc.so.6(abort+0x181)[0x2aaaab66ce61]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x2aaaab664740]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 4]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_ep_connect_progress+0x6c9)[0x2aaaaaff9869]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 5]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x5ae32)[0x2aaaaaf46e32]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 6]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_sendi+0x8bd)[0x2aaaaaffaf7d]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 7]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x1f0c17)[0x2aaaab0dcc17]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 8]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_pml_ob1_isend+0xa8)[0x2aaaab0dd488]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [ 9]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(ompi_coll_tuned_barrier_intra_two_procs+0x11b)[0x2aaaab07e84b]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [10]
</span><br>
<span class="quotelev1">&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(PMPI_Barrier+0xb6)[0x2aaaaaf8a7c6]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [11] ./osu_latency[0x401114]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x2aaaab657c36]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] [13] ./osu_latency[0x400dd9]
</span><br>
<span class="quotelev1">&gt; [nid00012:12788] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start:
</span><br>
<span class="quotelev1">&gt; Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's how I build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export FC=ftn         (I'm not using Fortran, but the configure fails if
</span><br>
<span class="quotelev1">&gt; it can't find a Fortran compiler)
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/lus/scratch/nradclif/openmpi_install
</span><br>
<span class="quotelev1">&gt; --enable-mpi-fortran=none
</span><br>
<span class="quotelev1">&gt; --with-platform=contrib/platform/lanl/cray_xe6/debug-lustre
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't modify the debug-lustre file, but I did change cray-common to
</span><br>
<span class="quotelev1">&gt; remove the hard-coding, e.g., rather than using the gemini-specific path
</span><br>
<span class="quotelev1">&gt; &quot;with_pmi=/opt/cray/pmi/2.1.4-1.0000.8596.8.9.gem&quot;, I used
</span><br>
<span class="quotelev1">&gt; &quot;with_pmi=/opt/cray/pmi/default&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried running different executables with different numbers of
</span><br>
<span class="quotelev1">&gt; ranks/nodes, but they all seem to run into problems with PMI_KVS_Put.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas what could be going wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27197.php">http://www.open-mpi.org/community/lists/users/2015/06/27197.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>In reply to:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Reply:</strong> <a href="27199.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
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
