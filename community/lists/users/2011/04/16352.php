<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 14:18:14 2011" -->
<!-- isoreceived="20110427181814" -->
<!-- sent="Wed, 27 Apr 2011 12:18:04 -0600" -->
<!-- isosent="20110427181804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="6332FD6A-A26D-4D35-A668-2F7A085EB4BE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F564C25DA8D2AC4091972A6CE1EEA00202A56222_at_PUSMNEG2.pwemail.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI out of band TCP retry exceeded<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 14:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16351.php">Sindhi, Waris             PW: "[OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16351.php">Sindhi, Waris             PW: "[OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps a firewall? All it is telling you is that mpirun couldn't establish TCP communications with the daemon on ln10.
<br>
<p><p>On Apr 27, 2011, at 11:58 AM, Sindhi, Waris PW wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     I am getting a &quot;oob-tcp: Communication retries exceeded&quot; error
</span><br>
<span class="quotelev1">&gt; message when I run a 238 MPI slave code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
</span><br>
<span class="quotelev1">&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Unknown error: 1
</span><br>
<span class="quotelev1">&gt; Node: ln10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 234.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
</span><br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Waris Sindhi
</span><br>
<span class="quotelev1">&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev1">&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev1">&gt; (860)-565-8486
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16353.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16351.php">Sindhi, Waris             PW: "[OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16351.php">Sindhi, Waris             PW: "[OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
