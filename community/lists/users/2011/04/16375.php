<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:56:12 2011" -->
<!-- isoreceived="20110428125612" -->
<!-- sent="Thu, 28 Apr 2011 08:56:06 -0400" -->
<!-- isosent="20110428125606" -->
<!-- name="Sindhi, Waris             PW" -->
<!-- email="Waris.Sindhi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="F564C25DA8D2AC4091972A6CE1EEA00202A56227_at_PUSMNEG2.pwemail.us" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC64FBBC-A871-4557-AD52-6050496DDB3F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-28 08:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16374.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes the procgroup file has more than 128 applications in it.
<br>
<p>% wc -l procgroup
<br>
239 procgroup 
<br>
<p>Is 128 the max applications that can be in a procgroup file ? 
<br>
<p>Sincerely,
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
Sent: Wednesday, April 27, 2011 8:09 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
<br>
<p><p>On Apr 27, 2011, at 1:31 PM, Sindhi, Waris PW wrote:
<br>
<p><span class="quotelev1">&gt; No we do not have a firewall turned on. I can run smaller 96 slave
</span><br>
cases
<br>
<span class="quotelev1">&gt; on ln10 and ln13 included on the slavelist. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could there be another reason for this to fail ? 
</span><br>
<p>What is in &quot;procgroup&quot;? Is it a single application?
<br>
<p>Offhand, there is nothing in OMPI that would explain the problem. The
<br>
only possibility I can think of would be if your &quot;procgroup&quot; file
<br>
contains more than 128 applications in it.
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 27, 2011 2:18 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps a firewall? All it is telling you is that mpirun couldn't
</span><br>
<span class="quotelev1">&gt; establish TCP communications with the daemon on ln10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2011, at 11:58 AM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;    I am getting a &quot;oob-tcp: Communication retries exceeded&quot; error
</span><br>
<span class="quotelev2">&gt;&gt; message when I run a 238 MPI slave code
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
</span><br>
<span class="quotelev2">&gt;&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to start the specified application as it
</span><br>
encountered
<br>
<span class="quotelev2">&gt;&gt; an error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Error name: Unknown error: 1
</span><br>
<span class="quotelev2">&gt;&gt; Node: ln10
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when attempting to start process rank 234.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev2">&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev2">&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev1">&gt; retries
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Waris Sindhi
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev2">&gt;&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev2">&gt;&gt; (860)-565-8486
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16374.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
