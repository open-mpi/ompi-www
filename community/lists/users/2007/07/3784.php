<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 14:48:41 2007" -->
<!-- isoreceived="20070727184841" -->
<!-- sent="Fri, 27 Jul 2007 12:48:18 -0600" -->
<!-- isosent="20070727184818" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque and openmpi" -->
<!-- id="A2456D10-6ADE-4855-BCC1-9151BC32A58C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1D76A4B_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 14:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2007, at 12:23 PM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I set up ompi before I configured Torque.  Do I need to recompile ompi
</span><br>
<span class="quotelev1">&gt; with appropriate torque configure options to get better integration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If libtorque wasn't present on the machine at configure then yes, you  
<br>
need to run:
<br>
<p>./configure --with-tm=&lt;path&gt;
<br>
<p><p><p><span class="quotelev1">&gt; Sam Adams
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
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 27, 2007 12:14 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] torque and openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you not using the built-in OMPI support for Torque?  The ssh keys
</span><br>
<span class="quotelev1">&gt; should be irrelevant if using the TM API in Torque (i.e., OMPI won't
</span><br>
<span class="quotelev1">&gt; be using ssh to launch remote processes; we use the internal TM API
</span><br>
<span class="quotelev1">&gt; in Torque).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2007, at 11:38 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I deleted all of the entries out of the know_hosts file, but that
</span><br>
<span class="quotelev2">&gt;&gt; didn't
</span><br>
<span class="quotelev2">&gt;&gt; seem to help.  I can run jobs just fine without torque on multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes.  I can also ssh to all nodes without using passwords, so I
</span><br>
<span class="quotelev2">&gt;&gt; am not
</span><br>
<span class="quotelev2">&gt;&gt; sure what the deal is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I found the problem.  The keys that I had in know_hosts were  
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; only the hostname i.e. prodnode2; whereas, the hostname that torque
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt; using were fully qualified names i.e. prodnode2.brooks.af.mil and the
</span><br>
<span class="quotelev2">&gt;&gt; keys did not exist for the fully qualified names.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help.
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
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, July 27, 2007 10:13 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] torque and openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The key is in the first line of the provided output. One of the
</span><br>
<span class="quotelev2">&gt;&gt; connection failed because a wrong ssh key. Clean your .ssh/
</span><br>
<span class="quotelev2">&gt;&gt; known_hosts and the problem will vanish.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 27, 2007, at 11:01 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run jobs with torque, I get this error message.  Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sam_at_prodnode1 all]$ cat script.sh.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c at line 1164
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: A daemon on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prodnode2.brooks.af.mil failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: There may be more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] ERROR: The daemon exited  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unexpectedly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with status 255.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam Adams
</span><br>
<span class="quotelev3">&gt;&gt;&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: 210.536.5945
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3783.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
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
