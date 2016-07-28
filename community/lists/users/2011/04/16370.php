<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:04:46 2011" -->
<!-- isoreceived="20110428120446" -->
<!-- sent="Thu, 28 Apr 2011 08:04:29 -0400" -->
<!-- isosent="20110428120429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="8986668C-1FFB-4359-BE4E-59F0F6936A09_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 08:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16371.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16369.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_create prevents external socket connections"</a>
<li><strong>In reply to:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do note that you are using an ancient version of Open MPI (1.2.8).  Is there any way you can upgrade to a (much) later version, such as 1.4.3?  That might improve your TCP connectivity -- we made improvements in those portions of the code over the years.
<br>
<p>On Apr 27, 2011, at 8:09 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2011, at 1:31 PM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No we do not have a firewall turned on. I can run smaller 96 slave cases
</span><br>
<span class="quotelev2">&gt;&gt; on ln10 and ln13 included on the slavelist. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could there be another reason for this to fail ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is in &quot;procgroup&quot;? Is it a single application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Offhand, there is nothing in OMPI that would explain the problem. The only possibility I can think of would be if your &quot;procgroup&quot; file contains more than 128 applications in it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 27, 2011 2:18 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI out of band TCP retry exceeded
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps a firewall? All it is telling you is that mpirun couldn't
</span><br>
<span class="quotelev2">&gt;&gt; establish TCP communications with the daemon on ln10.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2011, at 11:58 AM, Sindhi, Waris PW wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I am getting a &quot;oob-tcp: Communication retries exceeded&quot; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message when I run a 238 MPI slave code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error name: Unknown error: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: ln10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when attempting to start process rank 234.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication
</span><br>
<span class="quotelev2">&gt;&gt; retries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be greatly appreciated.
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
<li><strong>Next message:</strong> <a href="16371.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16369.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_create prevents external socket connections"</a>
<li><strong>In reply to:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
