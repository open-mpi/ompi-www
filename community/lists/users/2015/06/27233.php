<?
$subject_val = "Re: [OMPI users] Running with native ugni on a Cray XC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 20:06:33 2015" -->
<!-- isoreceived="20150701000633" -->
<!-- sent="Tue, 30 Jun 2015 18:06:32 -0600" -->
<!-- isosent="20150701000632" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running with native ugni on a Cray XC" -->
<!-- id="CAF1Cqj7Ya9+NY79o3VTB1YHjHUZc8gR9r8A_o6+DA2m585amTQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="431FBD479B82074EA4C9DC37E413F4F32505B7C2_at_CFWEX01.americas.cray.com" -->
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
<strong>Date:</strong> 2015-06-30 20:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>In reply to:</strong> <a href="27230.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick
<br>
<p>No.  Have to use mpirun in this case.  You need. to ask for a larger batch
<br>
allocation than the initial mpirun requires.  You do need to ask for batch
<br>
alloc though.  Also note that mpirun doesnt currently work with nativized
<br>
slurm.  Its on my todo list to fix.
<br>
<p>Howard
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Jun 30, 2015 3:51 PM, &quot;Nick Radcliffe&quot; &lt;nradclif_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have one more question. Is it possible to use MPI_Comm_spawn when
</span><br>
<span class="quotelev1">&gt; launching an OpenMPI job with aprun? I'm getting this error when I try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nradclif_at_kay:/lus/scratch/nradclif&gt; aprun -n 1 -N 1 ./manager
</span><br>
<span class="quotelev1">&gt; [nid00036:21772] [[14952,0],0] ORTE_ERROR_LOG: Not available in file
</span><br>
<span class="quotelev1">&gt; dpm_orte.c at line 1190
</span><br>
<span class="quotelev1">&gt; [36:21772] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [36:21772] *** reported by process [979894272,0]
</span><br>
<span class="quotelev1">&gt; [36:21772] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [36:21772] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev1">&gt; [36:21772] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
</span><br>
<span class="quotelev1">&gt; now abort,
</span><br>
<span class="quotelev1">&gt; [36:21772] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; aborting job:
</span><br>
<span class="quotelev1">&gt; N/A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nick Radcliffe
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; Cray, Inc.
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Howard Pritchard [
</span><br>
<span class="quotelev1">&gt; hppritcha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 25, 2015 11:00 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Running with native ugni on a Cray XC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi Nick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I will endeavor to put together a wiki for the master/v2.x series
</span><br>
<span class="quotelev1">&gt; specific to Cray systems
</span><br>
<span class="quotelev1">&gt; (sans those customers who choose to neither 1) use Cray supported eslogin
</span><br>
<span class="quotelev1">&gt; setup nor 2)  permit users to directly log in to and build apps on service
</span><br>
<span class="quotelev1">&gt; nodes)  that explains best practices for
</span><br>
<span class="quotelev1">&gt; using Open MPI on Cray XE/XK/XC systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A significant  amount of work went in to master, and now the v2.x release
</span><br>
<span class="quotelev1">&gt; stream to rationalize support for Open MPI on Cray XE/XK/XC systems using
</span><br>
<span class="quotelev1">&gt; either aprun
</span><br>
<span class="quotelev1">&gt; or native slurm launch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  General advice for all on this mailing list, do not use the Open MPI
</span><br>
<span class="quotelev1">&gt; 1.8.X release
</span><br>
<span class="quotelev1">&gt; series with direct ugni access enabled on Cray XE/XK/XC .  Rather use
</span><br>
<span class="quotelev1">&gt; master, or as soon as
</span><br>
<span class="quotelev1">&gt; a release is available, from v2.x.   Note that if you are using CCM,  the
</span><br>
<span class="quotelev1">&gt; performance
</span><br>
<span class="quotelev1">&gt; of Open MPI 1.8.X over the Cray IAA (simulated ibverbs) is pretty good.  I
</span><br>
<span class="quotelev1">&gt; suggest this
</span><br>
<span class="quotelev1">&gt; as the preferred route for using the 1.8.X release stream on Cray XE/XK/XC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-25 19:35 GMT-06:00 Nick Radcliffe &lt;nradclif_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks Howard, using master worked for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nick Radcliffe
</span><br>
<span class="quotelev2">&gt;&gt; Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Cray, Inc.
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Howard Pritchard
</span><br>
<span class="quotelev2">&gt;&gt; [hppritcha_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Thursday, June 25, 2015 5:11 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] Running with native ugni on a Cray XC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hi Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; use master not 1.8.x. for cray xc.  also for config do not pay attention
</span><br>
<span class="quotelev2">&gt;&gt; to cray/lanl platform files.  just do config.  also if using nativized
</span><br>
<span class="quotelev2">&gt;&gt; slurm launch with srun not mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2015 2:56 PM, &quot;Nick Radcliffe&quot; &lt;nradclif_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to build and run Open MPI 1.8.5 with native ugni on a Cray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XC. The build works, but I'm getting this error when I run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nradclif_at_kay:/lus/scratch/nradclif&gt; aprun -n 2 -N 1 ./osu_latency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00014:28784] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00014:28784] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [db_pmi.c:174:pmi_commit_packed] PMI_KVS_Put: Operation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [db_pmi.c:457:commit] PMI_KVS_Commit: Operation failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Latency Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size            Latency (us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assertion `0' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 0] /lib64/libpthread.so.0(+0xf850)[0x2aaaab42b850]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2aaaab66b885]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 2] /lib64/libc.so.6(abort+0x181)[0x2aaaab66ce61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__assert_fail+0xf0)[0x2aaaab664740]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_ep_connect_progress+0x6c9)[0x2aaaaaff9869]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x5ae32)[0x2aaaaaf46e32]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_btl_ugni_sendi+0x8bd)[0x2aaaaaffaf7d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(+0x1f0c17)[0x2aaaab0dcc17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(mca_pml_ob1_isend+0xa8)[0x2aaaab0dd488]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(ompi_coll_tuned_barrier_intra_two_procs+0x11b)[0x2aaaab07e84b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lus/scratch/nradclif/openmpi_install/lib/libmpi.so.1(PMPI_Barrier+0xb6)[0x2aaaaaf8a7c6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [11] ./osu_latency[0x401114]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x2aaaab657c36]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] [13] ./osu_latency[0x400dd9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nid00012:12788] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; osu_latency: btl_ugni_endpoint.c:87: mca_btl_ugni_ep_connect_start:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assertion `0' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's how I build:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export FC=ftn         (I'm not using Fortran, but the configure fails if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it can't find a Fortran compiler)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/lus/scratch/nradclif/openmpi_install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-fortran=none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-platform=contrib/platform/lanl/cray_xe6/debug-lustre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't modify the debug-lustre file, but I did change cray-common to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove the hard-coding, e.g., rather than using the gemini-specific path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;with_pmi=/opt/cray/pmi/2.1.4-1.0000.8596.8.9.gem&quot;, I used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;with_pmi=/opt/cray/pmi/default&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried running different executables with different numbers of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks/nodes, but they all seem to run into problems with PMI_KVS_Put.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas what could be going wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27197.php">http://www.open-mpi.org/community/lists/users/2015/06/27197.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27199.php">http://www.open-mpi.org/community/lists/users/2015/06/27199.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>In reply to:</strong> <a href="27230.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27928.php">Tim Mattox: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
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
