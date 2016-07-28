<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 15:31:39 2011" -->
<!-- isoreceived="20110427193139" -->
<!-- sent="Wed, 27 Apr 2011 15:31:33 -0400" -->
<!-- isosent="20110427193133" -->
<!-- name="Sindhi, Waris             PW" -->
<!-- email="Waris.Sindhi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="F564C25DA8D2AC4091972A6CE1EEA00202A56224_at_PUSMNEG2.pwemail.us" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6332FD6A-A26D-4D35-A668-2F7A085EB4BE_at_open-mpi.org" -->
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
<strong>From:</strong> Sindhi, Waris             PW (<em>Waris.Sindhi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 15:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No we do not have a firewall turned on. I can run smaller 96 slave cases
<br>
on ln10 and ln13 included on the slavelist. 
<br>
<p>Could there be another reason for this to fail ? 
<br>
<p><p>Sincerely,
<br>
<p>Waris Sindhi
<br>
High Performance Computing, TechApps
<br>
Pratt &amp; Whitney, UTC
<br>
(860)-565-8486
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Wednesday, April 27, 2011 2:18 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
<br>
<p>Perhaps a firewall? All it is telling you is that mpirun couldn't
<br>
establish TCP communications with the daemon on ln10.
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
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
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
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
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
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
<span class="quotelev1">&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
retries
<br>
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
