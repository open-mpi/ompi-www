<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 10:38:30 2011" -->
<!-- isoreceived="20110207153830" -->
<!-- sent="Mon, 7 Feb 2011 08:38:25 -0700" -->
<!-- isosent="20110207153825" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="18390C8F-8AEB-486D-97A3-D395C0A99466_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EBC6D046-0D0E-40F3-9C82-53B600A4BA0A_at_monash.edu" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 10:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15525.php">Nguyen Toan: "[OMPI users]  Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A detailed backtrace from a core dump may help us debug this.  Would  
<br>
you be willing to provide that information for us?
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Feb 6, 2011, at 6:36 PM, Michael Curtis wrote:
&gt;
&gt; On 04/02/2011, at 9:35 AM, Samuel K. Gutierrez wrote:
&gt;
&gt; Hi,
&gt;
&gt;&gt; I just tried to reproduce the problem that you are experiencing and  
&gt;&gt; was unable to.
&gt;&gt;
&gt;&gt; SLURM 2.1.15
&gt;&gt; Open MPI 1.4.3 configured with: --with-platform=./contrib/platform/ 
&gt;&gt; lanl/tlcc/debug-nopanasas
&gt;
&gt; I compiled OpenMPI 1.4.3 (vanilla from source tarball) with the same  
&gt; platform file (the only change was to re-enable btl-tcp).
&gt;
&gt; Unfortunately, the result is the same:
&gt; salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ServerAdmin/mpi
&gt; salloc: Granted job allocation 145
&gt;
&gt; ========================   JOB MAP   ========================
&gt;
&gt; Data for node: Name: eng-ipc4.{FQDN}		Num procs: 8
&gt; 	Process OMPI jobid: [6932,1] Process rank: 0
&gt; 	Process OMPI jobid: [6932,1] Process rank: 1
&gt; 	Process OMPI jobid: [6932,1] Process rank: 2
&gt; 	Process OMPI jobid: [6932,1] Process rank: 3
&gt; 	Process OMPI jobid: [6932,1] Process rank: 4
&gt; 	Process OMPI jobid: [6932,1] Process rank: 5
&gt; 	Process OMPI jobid: [6932,1] Process rank: 6
&gt; 	Process OMPI jobid: [6932,1] Process rank: 7
&gt;
&gt; Data for node: Name: ipc3	Num procs: 8
&gt; 	Process OMPI jobid: [6932,1] Process rank: 8
&gt; 	Process OMPI jobid: [6932,1] Process rank: 9
&gt; 	Process OMPI jobid: [6932,1] Process rank: 10
&gt; 	Process OMPI jobid: [6932,1] Process rank: 11
&gt; 	Process OMPI jobid: [6932,1] Process rank: 12
&gt; 	Process OMPI jobid: [6932,1] Process rank: 13
&gt; 	Process OMPI jobid: [6932,1] Process rank: 14
&gt; 	Process OMPI jobid: [6932,1] Process rank: 15
&gt;
&gt; =============================================================
&gt; [eng-ipc4:31754] *** Process received signal ***
&gt; [eng-ipc4:31754] Signal: Segmentation fault (11)
&gt; [eng-ipc4:31754] Signal code: Address not mapped (1)
&gt; [eng-ipc4:31754] Failing at address: 0x8012eb748
&gt; [eng-ipc4:31754] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f81ce4bf8f0]
&gt; [eng-ipc4:31754] [ 1] ~/../openmpi/lib/libopen-rte.so.0(+0x7f869)  
&gt; [0x7f81cf262869]
&gt; [eng-ipc4:31754] [ 2] ~/../openmpi/lib/libopen-pal.so.0(+0x22338)  
&gt; [0x7f81cef93338]
&gt; [eng-ipc4:31754] [ 3] ~/../openmpi/lib/libopen-pal.so.0(+0x2297e)  
&gt; [0x7f81cef9397e]
&gt; [eng-ipc4:31754] [ 4] ~/../openmpi/lib/libopen-pal.so. 
&gt; 0(opal_event_loop+0x1f) [0x7f81cef9356f]
&gt; [eng-ipc4:31754] [ 5] ~/../openmpi/lib/libopen-pal.so.0(opal_progress 
&gt; +0x89) [0x7f81cef87916]
&gt; [eng-ipc4:31754] [ 6] ~/../openmpi/lib/libopen-rte.so. 
&gt; 0(orte_plm_base_daemon_callback+0x13f) [0x7f81cf262e20]
&gt; [eng-ipc4:31754] [ 7] ~/../openmpi/lib/libopen-rte.so.0(+0x84ed7)  
&gt; [0x7f81cf267ed7]
&gt; [eng-ipc4:31754] [ 8] ~/../home/../openmpi/bin/mpirun() [0x403f46]
&gt; [eng-ipc4:31754] [ 9] ~/../home/../openmpi/bin/mpirun() [0x402fb4]
&gt; [eng-ipc4:31754] [10] /lib/libc.so.6(__libc_start_main+0xfd)  
&gt; [0x7f81ce14bc4d]
&gt; [eng-ipc4:31754] [11] ~/../openmpi/bin/mpirun() [0x402ed9]
&gt; [eng-ipc4:31754] *** End of error message ***
&gt; salloc: Relinquishing job allocation 145
&gt; salloc: Job allocation 145 has been revoked.
&gt; zsh: exit 1     salloc -n16 ~/../openmpi/bin/mpirun --display-map ~/ 
&gt; ServerAdmin/mpi
&gt;
&gt; I've anonymised the paths and domain, otherwise pasted verbatim.   
&gt; The only odd thing I notice is that the launching machine uses its  
&gt; full domain name, whereas the other machine is referred to by the  
&gt; short name.  Despite the FQDN, the domain does not exist in the DNS  
&gt; (for historical reasons), but does exist in the /etc/hosts file.
&gt;
&gt; Any further clues would be appreciated.  In case it may be relevant,  
&gt; core system versions are: glibc 2.11, gcc 4.4.3, kernel 2.6.32.  One  
&gt; other point of difference may be that our environment is tcp  
&gt; (ethernet) based whereas the LANL test environment is not?
&gt;
&gt; Michael
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15525.php">Nguyen Toan: "[OMPI users]  Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
