<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:28:49 2008" -->
<!-- isoreceived="20080423212849" -->
<!-- sent="Wed, 23 Apr 2008 14:28:27 -0700" -->
<!-- isosent="20080423212827" -->
<!-- name="Sharon Brunett" -->
<!-- email="sharon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="480FA9FB.80503_at_cacr.caltech.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04F4D781-F0A3-4AD1-A692-CD23642C9A66_at_open-mpi.org" -->
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
<strong>From:</strong> Sharon Brunett (<em>sharon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 17:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; On Apr 23, 2008, at 4:04 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.3a1r18241 on a 2 node configuration and having  
</span><br>
<span class="quotelev2">&gt;&gt; troubles with the ompi-restart.  I can successfully ompi-checkpoint  
</span><br>
<span class="quotelev2">&gt;&gt; and ompi-restart a 1 way mpi code.
</span><br>
<span class="quotelev2">&gt;&gt; When I try a 2 way job running across 2 nodes, I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-2.05b$ ompi-restart -verbose ompi_global_snapshot_926.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; [shc005:01159] Checking for the existence of (/home/sharon/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev2">&gt;&gt; [shc005:01159] Restarting from file (ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev2">&gt;&gt; [shc005:01159]   Exec in self
</span><br>
<span class="quotelev2">&gt;&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error is coming from BLCR. A few things to check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First take a look at /var/log/messages on the machine(s) you are  
</span><br>
<span class="quotelev1">&gt; trying to restart on. Per:
</span><br>
<span class="quotelev1">&gt;   <a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next check to make sure prelinking is turned off on the two machines  
</span><br>
<span class="quotelev1">&gt; you are using. Per:
</span><br>
<span class="quotelev1">&gt;   <a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those will rule out some common BLCR problems. (more below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I try running as root, using the same snapshot file, the code  
</span><br>
<span class="quotelev2">&gt;&gt; restarts ok, but both tasks and up on the same node, rather than one  
</span><br>
<span class="quotelev2">&gt;&gt; per node (like the original mpirun).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should never have to run as root to restart a process (or to run  
</span><br>
<span class="quotelev1">&gt; Open MPI in any form). So I'm wondering if your user has permissions  
</span><br>
<span class="quotelev1">&gt; to access the checkpoint files that BLCR is generating. You can look  
</span><br>
<span class="quotelev1">&gt; at the permissions for the individual checkpoint files by looking into  
</span><br>
<span class="quotelev1">&gt; the checkpoint handler directory. They are a bit hidden, so something  
</span><br>
<span class="quotelev1">&gt; like the following should expose them:
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/ 
</span><br>
<span class="quotelev1">&gt; opal_snapshot_0.ckpt/
</span><br>
<span class="quotelev1">&gt; total 1756
</span><br>
<span class="quotelev1">&gt; drwx------  2 sharon users    4096 Apr 23 16:29 .
</span><br>
<span class="quotelev1">&gt; drwx------  4 sharon users    4096 Apr 23 16:29 ..
</span><br>
<span class="quotelev1">&gt; -rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context.31849
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/ 
</span><br>
<span class="quotelev1">&gt; opal_snapshot_1.ckpt/
</span><br>
<span class="quotelev1">&gt; total 1756
</span><br>
<span class="quotelev1">&gt; drwx------  2 sharon users    4096 Apr 23 16:29 .
</span><br>
<span class="quotelev1">&gt; drwx------  4 sharon users    4096 Apr 23 16:29 ..
</span><br>
<span class="quotelev1">&gt; -rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context.31850
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The BLCR generated context files are &quot;ompi_blcr_context.PID&quot;, and you  
</span><br>
<span class="quotelev1">&gt; need to check to make sure that you have sufficient permissions to  
</span><br>
<span class="quotelev1">&gt; access to those files (something like above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using BLCR version 0.6.5.
</span><br>
<span class="quotelev2">&gt;&gt; I generate checkpoints via 'ompi-checkpoint pid'
</span><br>
<span class="quotelev2">&gt;&gt; where pid is the pid of the mpirun task below
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -am ft-enable-cr ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you running in a managed environment (e.g., using Torque or  
</span><br>
<span class="quotelev1">&gt; Slurm)? Odds are once you switched to root you lost your environmental  
</span><br>
<span class="quotelev1">&gt; symbols for your allocation (which is how Open MPI detects when to use  
</span><br>
<span class="quotelev1">&gt; an allocation). This would explain why the processes were restarted on  
</span><br>
<span class="quotelev1">&gt; one node instead of two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi-restart uses mpirun underneath to do the process launch in  
</span><br>
<span class="quotelev1">&gt; exactly the same way the normal mpirun. So the mapping of processes  
</span><br>
<span class="quotelev1">&gt; should be the same. That being said there is a bug that I'm tracking  
</span><br>
<span class="quotelev1">&gt; in which they are not. This bug has nothing to do with restarting  
</span><br>
<span class="quotelev1">&gt; processes, and more with a bookkeeping error when using app files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much for any hints you can give on how to resolve either  
</span><br>
<span class="quotelev2">&gt;&gt; of these problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if this helps solve the problem. If not we might be able  
</span><br>
<span class="quotelev1">&gt; to try some other things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
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
Thanks much..
<br>
vmadump: open('/var/run/nscd/passwd', 0x0) failed: -13
<br>
vmadump: mmap failed: /var/run/nscd/passwd
<br>
<p>is indeed the problem, as shown by dmesg.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5469.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
