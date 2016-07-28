<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 16:48:33 2008" -->
<!-- isoreceived="20080423204833" -->
<!-- sent="Wed, 23 Apr 2008 16:48:27 -0400" -->
<!-- isosent="20080423204827" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="04F4D781-F0A3-4AD1-A692-CD23642C9A66_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480F965D.9030205_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 16:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5467.php">Sharon Brunett: "[OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5467.php">Sharon Brunett: "[OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5470.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5470.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2008, at 4:04 PM, Sharon Brunett wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.3a1r18241 on a 2 node configuration and having  
</span><br>
<span class="quotelev1">&gt; troubles with the ompi-restart.  I can successfully ompi-checkpoint  
</span><br>
<span class="quotelev1">&gt; and ompi-restart a 1 way mpi code.
</span><br>
<span class="quotelev1">&gt; When I try a 2 way job running across 2 nodes, I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash-2.05b$ ompi-restart -verbose ompi_global_snapshot_926.ckpt
</span><br>
<span class="quotelev1">&gt; [shc005:01159] Checking for the existence of (/home/sharon/ 
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev1">&gt; [shc005:01159] Restarting from file (ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev1">&gt; [shc005:01159]   Exec in self
</span><br>
<span class="quotelev1">&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev1">&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This error is coming from BLCR. A few things to check.
<br>
<p>First take a look at /var/log/messages on the machine(s) you are  
<br>
trying to restart on. Per:
<br>
&nbsp;&nbsp;<a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm</a>
<br>
<p>Next check to make sure prelinking is turned off on the two machines  
<br>
you are using. Per:
<br>
&nbsp;&nbsp;<a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>Those will rule out some common BLCR problems. (more below)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try running as root, using the same snapshot file, the code  
</span><br>
<span class="quotelev1">&gt; restarts ok, but both tasks and up on the same node, rather than one  
</span><br>
<span class="quotelev1">&gt; per node (like the original mpirun).
</span><br>
<p>You should never have to run as root to restart a process (or to run  
<br>
Open MPI in any form). So I'm wondering if your user has permissions  
<br>
to access the checkpoint files that BLCR is generating. You can look  
<br>
at the permissions for the individual checkpoint files by looking into  
<br>
the checkpoint handler directory. They are a bit hidden, so something  
<br>
like the following should expose them:
<br>
-------------------
<br>
shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/ 
<br>
opal_snapshot_0.ckpt/
<br>
total 1756
<br>
drwx------  2 sharon users    4096 Apr 23 16:29 .
<br>
drwx------  4 sharon users    4096 Apr 23 16:29 ..
<br>
-rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context.31849
<br>
-rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
<br>
shell$
<br>
shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/ 
<br>
opal_snapshot_1.ckpt/
<br>
total 1756
<br>
drwx------  2 sharon users    4096 Apr 23 16:29 .
<br>
drwx------  4 sharon users    4096 Apr 23 16:29 ..
<br>
-rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context.31850
<br>
-rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
<br>
-------------------
<br>
<p>The BLCR generated context files are &quot;ompi_blcr_context.PID&quot;, and you  
<br>
need to check to make sure that you have sufficient permissions to  
<br>
access to those files (something like above).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using BLCR version 0.6.5.
</span><br>
<span class="quotelev1">&gt; I generate checkpoints via 'ompi-checkpoint pid'
</span><br>
<span class="quotelev1">&gt; where pid is the pid of the mpirun task below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you running in a managed environment (e.g., using Torque or  
<br>
Slurm)? Odds are once you switched to root you lost your environmental  
<br>
symbols for your allocation (which is how Open MPI detects when to use  
<br>
an allocation). This would explain why the processes were restarted on  
<br>
one node instead of two.
<br>
<p>ompi-restart uses mpirun underneath to do the process launch in  
<br>
exactly the same way the normal mpirun. So the mapping of processes  
<br>
should be the same. That being said there is a bug that I'm tracking  
<br>
in which they are not. This bug has nothing to do with restarting  
<br>
processes, and more with a bookkeeping error when using app files.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for any hints you can give on how to resolve either  
</span><br>
<span class="quotelev1">&gt; of these problems.
</span><br>
<p>Let me know if this helps solve the problem. If not we might be able  
<br>
to try some other things.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5467.php">Sharon Brunett: "[OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5467.php">Sharon Brunett: "[OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5470.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5470.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
