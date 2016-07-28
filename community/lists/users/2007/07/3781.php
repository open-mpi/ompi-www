<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 11:38:23 2007" -->
<!-- isoreceived="20070727153823" -->
<!-- sent="Fri, 27 Jul 2007 10:38:32 -0500" -->
<!-- isosent="20070727153832" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque and openmpi" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1D769C6_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E280EA79-1490-4529-9BAD-9E00570ABF79_at_cs.utk.edu" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 11:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I deleted all of the entries out of the know_hosts file, but that didn't
<br>
seem to help.  I can run jobs just fine without torque on multiple
<br>
nodes.  I can also ssh to all nodes without using passwords, so I am not
<br>
sure what the deal is.
<br>
<p>...
<br>
<p>Okay, I found the problem.  The keys that I had in know_hosts were for
<br>
only the hostname i.e. prodnode2; whereas, the hostname that torque was
<br>
using were fully qualified names i.e. prodnode2.brooks.af.mil and the
<br>
keys did not exist for the fully qualified names.  
<br>
<p>Thanks for the help.  
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Friday, July 27, 2007 10:13 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] torque and openmpi
<br>
<p>The key is in the first line of the provided output. One of the  
<br>
connection failed because a wrong ssh key. Clean your .ssh/ 
<br>
known_hosts and the problem will vanish.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 27, 2007, at 11:01 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; When I run jobs with torque, I get this error message.  Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 all]$ cat script.sh.err
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1164
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] ERROR: A daemon on node
</span><br>
<span class="quotelev1">&gt; prodnode2.brooks.af.mil failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] ERROR: There may be more information
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] ERROR: The daemon exited unexpectedly
</span><br>
<span class="quotelev1">&gt; with status 255.
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
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
<p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3782.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
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
