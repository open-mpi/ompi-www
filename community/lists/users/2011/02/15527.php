<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 10:38:54 2011" -->
<!-- isoreceived="20110208153854" -->
<!-- sent="Tue, 8 Feb 2011 08:38:44 -0700" -->
<!-- isosent="20110208153844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="1E26385B-E9D3-4D90-9E29-2BF678A5524B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B50568F9-8F28-4F48-84B7-68684EFC4065_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-08 10:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15528.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another possibility to check - are you sure you are getting the same OMPI version on the backend nodes? When I see it work on local node, but fail multi-node, the most common problem is that you are picking up a different OMPI version due to path differences on the backend nodes.
<br>
<p><p>On Feb 8, 2011, at 8:17 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may have tried to send some debug information to the list, but it appears to have been blocked.  Compressed text output of the backtrace text is sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2011, at 8:38 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A detailed backtrace from a core dump may help us debug this.  Would you be willing to provide that information for us?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2011, at 6:36 PM, Michael Curtis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/02/2011, at 9:35 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just tried to reproduce the problem that you are experiencing and was unable to.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM 2.1.15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI 1.4.3 configured with: --with-platform=./contrib/platform/lanl/tlcc/debug-nopanasas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled OpenMPI 1.4.3 (vanilla from source tarball) with the same platform file (the only change was to re-enable btl-tcp).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, the result is the same:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ServerAdmin/mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc: Granted job allocation 145
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: eng-ipc4.{FQDN}		Num procs: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: ipc3	Num procs: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Process OMPI jobid: [6932,1] Process rank: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] Failing at address: 0x8012eb748
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f81ce4bf8f0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 1] ~/../openmpi/lib/libopen-rte.so.0(+0x7f869) [0x7f81cf262869]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 2] ~/../openmpi/lib/libopen-pal.so.0(+0x22338) [0x7f81cef93338]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 3] ~/../openmpi/lib/libopen-pal.so.0(+0x2297e) [0x7f81cef9397e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 4] ~/../openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f) [0x7f81cef9356f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 5] ~/../openmpi/lib/libopen-pal.so.0(opal_progress+0x89) [0x7f81cef87916]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 6] ~/../openmpi/lib/libopen-rte.so.0(orte_plm_base_daemon_callback+0x13f) [0x7f81cf262e20]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 7] ~/../openmpi/lib/libopen-rte.so.0(+0x84ed7) [0x7f81cf267ed7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 8] ~/../home/../openmpi/bin/mpirun() [0x403f46]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [ 9] ~/../home/../openmpi/bin/mpirun() [0x402fb4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [10] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f81ce14bc4d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] [11] ~/../openmpi/bin/mpirun() [0x402ed9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eng-ipc4:31754] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc: Relinquishing job allocation 145
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc: Job allocation 145 has been revoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zsh: exit 1     salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ServerAdmin/mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've anonymised the paths and domain, otherwise pasted verbatim.  The only odd thing I notice is that the launching machine uses its full domain name, whereas the other machine is referred to by the short name.  Despite the FQDN, the domain does not exist in the DNS (for historical reasons), but does exist in the /etc/hosts file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any further clues would be appreciated.  In case it may be relevant, core system versions are: glibc 2.11, gcc 4.4.3, kernel 2.6.32.  One other point of difference may be that our environment is tcp (ethernet) based whereas the LANL test environment is not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15528.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
