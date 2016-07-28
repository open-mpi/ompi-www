<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 16:54:32 2011" -->
<!-- isoreceived="20110428205432" -->
<!-- sent="Thu, 28 Apr 2011 16:54:25 -0400" -->
<!-- isosent="20110428205425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="3B970860-88FA-4771-BB97-22B8863FB73D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F564C25DA8D2AC4091972A6CE1EEA00202A56230_at_PUSMNEG2.pwemail.us" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 16:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16390.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16388.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16388.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We can probably put it in 1.5.4.  The 1.4 RM's will have to speak for the 1.4 series...
<br>
<p>On Apr 28, 2011, at 4:45 PM, Sindhi, Waris PW wrote:
<br>
<p><span class="quotelev1">&gt; Do you know when this fix is slated for an official release ?  
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 28, 2011 9:03 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2011, at 6:56 AM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes the procgroup file has more than 128 applications in it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % wc -l procgroup
</span><br>
<span class="quotelev2">&gt;&gt; 239 procgroup 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is 128 the max applications that can be in a procgroup file ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep - this limitation is lifted in the developer's trunk, but not yet in
</span><br>
<span class="quotelev1">&gt; a release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 27, 2011 8:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2011, at 1:31 PM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No we do not have a firewall turned on. I can run smaller 96 slave
</span><br>
<span class="quotelev2">&gt;&gt; cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on ln10 and ln13 included on the slavelist. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could there be another reason for this to fail ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is in &quot;procgroup&quot;? Is it a single application?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Offhand, there is nothing in OMPI that would explain the problem. The
</span><br>
<span class="quotelev2">&gt;&gt; only possibility I can think of would be if your &quot;procgroup&quot; file
</span><br>
<span class="quotelev2">&gt;&gt; contains more than 128 applications in it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Waris Sindhi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (860)-565-8486
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, April 27, 2011 2:18 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps a firewall? All it is telling you is that mpirun couldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; establish TCP communications with the daemon on ln10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 27, 2011, at 11:58 AM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I am getting a &quot;oob-tcp: Communication retries exceeded&quot; error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message when I run a 238 MPI slave code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl
</span><br>
<span class="quotelev1">&gt; ^tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt;&gt; encountered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error name: Unknown error: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node: ln10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when attempting to start process rank 234.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Waris Sindhi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Performance Computing, TechApps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pratt &amp; Whitney, UTC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (860)-565-8486
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16390.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16388.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16388.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
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
