<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 13:14:08 2007" -->
<!-- isoreceived="20070727171408" -->
<!-- sent="Fri, 27 Jul 2007 13:13:46 -0400" -->
<!-- isosent="20070727171346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque and openmpi" -->
<!-- id="2D030087-47BE-4EF5-9111-0DC2424C87CE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1D769C6_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 13:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3781.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3781.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you not using the built-in OMPI support for Torque?  The ssh keys  
<br>
should be irrelevant if using the TM API in Torque (i.e., OMPI won't  
<br>
be using ssh to launch remote processes; we use the internal TM API  
<br>
in Torque).
<br>
<p><p>On Jul 27, 2007, at 11:38 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I deleted all of the entries out of the know_hosts file, but that  
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev1">&gt; seem to help.  I can run jobs just fine without torque on multiple
</span><br>
<span class="quotelev1">&gt; nodes.  I can also ssh to all nodes without using passwords, so I  
</span><br>
<span class="quotelev1">&gt; am not
</span><br>
<span class="quotelev1">&gt; sure what the deal is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, I found the problem.  The keys that I had in know_hosts were for
</span><br>
<span class="quotelev1">&gt; only the hostname i.e. prodnode2; whereas, the hostname that torque  
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; using were fully qualified names i.e. prodnode2.brooks.af.mil and the
</span><br>
<span class="quotelev1">&gt; keys did not exist for the fully qualified names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 27, 2007 10:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] torque and openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The key is in the first line of the provided output. One of the
</span><br>
<span class="quotelev1">&gt; connection failed because a wrong ssh key. Clean your .ssh/
</span><br>
<span class="quotelev1">&gt; known_hosts and the problem will vanish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2007, at 11:01 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run jobs with torque, I get this error message.  Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sam_at_prodnode1 all]$ cat script.sh.err
</span><br>
<span class="quotelev2">&gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1164
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: A daemon on node
</span><br>
<span class="quotelev2">&gt;&gt; prodnode2.brooks.af.mil failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: There may be more information
</span><br>
<span class="quotelev2">&gt;&gt; available from
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: The daemon exited unexpectedly
</span><br>
<span class="quotelev2">&gt;&gt; with status 255.
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sam Adams
</span><br>
<span class="quotelev2">&gt;&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 210.536.5945
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3781.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3781.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
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
