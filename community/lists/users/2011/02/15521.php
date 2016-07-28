<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  6 20:37:07 2011" -->
<!-- isoreceived="20110207013707" -->
<!-- sent="Mon, 7 Feb 2011 12:36:56 +1100" -->
<!-- isosent="20110207013656" -->
<!-- name="Michael Curtis" -->
<!-- email="michael.curtis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="EBC6D046-0D0E-40F3-9C82-53B600A4BA0A_at_monash.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16F3B218-33D9-4ED4-99DC-4D5076DDFF5E_at_lanl.gov" -->
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
<strong>From:</strong> Michael Curtis (<em>michael.curtis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-06 20:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15520.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>In reply to:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/02/2011, at 9:35 AM, Samuel K. Gutierrez wrote:
<br>
<p>Hi,
<br>
<p><span class="quotelev1">&gt; I just tried to reproduce the problem that you are experiencing and was unable to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLURM 2.1.15
</span><br>
<span class="quotelev1">&gt; Open MPI 1.4.3 configured with: --with-platform=./contrib/platform/lanl/tlcc/debug-nopanasas
</span><br>
<p>I compiled OpenMPI 1.4.3 (vanilla from source tarball) with the same platform file (the only change was to re-enable btl-tcp).
<br>
<p>Unfortunately, the result is the same:
<br>
salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ServerAdmin/mpi
<br>
salloc: Granted job allocation 145
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: eng-ipc4.{FQDN}		Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 7
<br>
<p>&nbsp;Data for node: Name: ipc3	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6932,1] Process rank: 15
<br>
<p>&nbsp;=============================================================
<br>
[eng-ipc4:31754] *** Process received signal ***
<br>
[eng-ipc4:31754] Signal: Segmentation fault (11)
<br>
[eng-ipc4:31754] Signal code: Address not mapped (1)
<br>
[eng-ipc4:31754] Failing at address: 0x8012eb748
<br>
[eng-ipc4:31754] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f81ce4bf8f0]
<br>
[eng-ipc4:31754] [ 1] ~/../openmpi/lib/libopen-rte.so.0(+0x7f869) [0x7f81cf262869]
<br>
[eng-ipc4:31754] [ 2] ~/../openmpi/lib/libopen-pal.so.0(+0x22338) [0x7f81cef93338]
<br>
[eng-ipc4:31754] [ 3] ~/../openmpi/lib/libopen-pal.so.0(+0x2297e) [0x7f81cef9397e]
<br>
[eng-ipc4:31754] [ 4] ~/../openmpi/lib/libopen-pal.so.0(opal_event_loop+0x1f) [0x7f81cef9356f]
<br>
[eng-ipc4:31754] [ 5] ~/../openmpi/lib/libopen-pal.so.0(opal_progress+0x89) [0x7f81cef87916]
<br>
[eng-ipc4:31754] [ 6] ~/../openmpi/lib/libopen-rte.so.0(orte_plm_base_daemon_callback+0x13f) [0x7f81cf262e20]
<br>
[eng-ipc4:31754] [ 7] ~/../openmpi/lib/libopen-rte.so.0(+0x84ed7) [0x7f81cf267ed7]
<br>
[eng-ipc4:31754] [ 8] ~/../home/../openmpi/bin/mpirun() [0x403f46]
<br>
[eng-ipc4:31754] [ 9] ~/../home/../openmpi/bin/mpirun() [0x402fb4]
<br>
[eng-ipc4:31754] [10] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f81ce14bc4d]
<br>
[eng-ipc4:31754] [11] ~/../openmpi/bin/mpirun() [0x402ed9]
<br>
[eng-ipc4:31754] *** End of error message ***
<br>
salloc: Relinquishing job allocation 145
<br>
salloc: Job allocation 145 has been revoked.
<br>
zsh: exit 1     salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ServerAdmin/mpi
<br>
<p>I've anonymised the paths and domain, otherwise pasted verbatim.  The only odd thing I notice is that the launching machine uses its full domain name, whereas the other machine is referred to by the short name.  Despite the FQDN, the domain does not exist in the DNS (for historical reasons), but does exist in the /etc/hosts file.  
<br>
<p>Any further clues would be appreciated.  In case it may be relevant, core system versions are: glibc 2.11, gcc 4.4.3, kernel 2.6.32.  One other point of difference may be that our environment is tcp (ethernet) based whereas the LANL test environment is not?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15520.php">Massimo Cafaro: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>In reply to:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
