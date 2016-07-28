<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 13:09:16 2008" -->
<!-- isoreceived="20080429170916" -->
<!-- sent="Tue, 29 Apr 2008 10:09:07 -0700" -->
<!-- isosent="20080429170907" -->
<!-- name="Sharon Brunett" -->
<!-- email="sharon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="48175633.8080507_at_cacr.caltech.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1783A328-BB22-444B-BD32-4623B341E34D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-04-29 13:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>In reply to:</strong> <a href="5556.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
Thanks for your inputs.
<br>
Yes, I'm able to restart properly outside the hostfile issues. The 
<br>
problems were with the permissions on
<br>
&nbsp;&nbsp;&nbsp;/var/run/nscd/passwd
<br>
The hostfile issues have now also been resolved...the problem was 
<br>
interactions with maui/torque's hostfile and getting a proper hostfile 
<br>
pushed to mpirun properly.
<br>
<p>thanks for your help!
<br>
Sharon
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; On Apr 25, 2008, at 6:12 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt; I'm responding to some outstanding questions about the env. I'm  
</span><br>
<span class="quotelev2">&gt;&gt; trying to ompi-restart in.
</span><br>
<span class="quotelev2">&gt;&gt; My answers to your questions are sprinkled below, and include a few  
</span><br>
<span class="quotelev2">&gt;&gt; more questions based on attempts I've made to get a multi-node  
</span><br>
<span class="quotelev2">&gt;&gt; restart working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sharon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sharon Brunett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 23, 2008, at 4:04 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using openmpi-1.3a1r18241 on a 2 node configuration and having
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; troubles with the ompi-restart.  I can successfully ompi-checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and ompi-restart a 1 way mpi code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I try a 2 way job running across 2 nodes, I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bash-2.05b$ ompi-restart -verbose ompi_global_snapshot_926.ckpt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shc005:01159] Checking for the existence of (/home/sharon/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shc005:01159] Restarting from file (ompi_global_snapshot_926.ckpt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shc005:01159]   Exec in self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Restart failed: Permission denied
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This error is coming from BLCR. A few things to check.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First take a look at /var/log/messages on the machine(s) you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trying to restart on. Per:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#eperm</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Next check to make sure prelinking is turned off on the two machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are using. Per:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">http://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Those will rule out some common BLCR problems. (more below)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I try running as root, using the same snapshot file, the code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restarts ok, but both tasks and up on the same node, rather than  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; per node (like the original mpirun).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You should never have to run as root to restart a process (or to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI in any form). So I'm wondering if your user has permissions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to access the checkpoint files that BLCR is generating. You can look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at the permissions for the individual checkpoint files by looking  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the checkpoint handler directory. They are a bit hidden, so  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like the following should expose them:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_snapshot_0.ckpt/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; total 1756
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drwx------  2 sharon users    4096 Apr 23 16:29 .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drwx------  4 sharon users    4096 Apr 23 16:29 ..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 31849
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ ls -la /home/sharon/ompi_global_snapshot_926.ckpt/0/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_snapshot_1.ckpt/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; total 1756
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drwx------  2 sharon users    4096 Apr 23 16:29 .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drwx------  4 sharon users    4096 Apr 23 16:29 ..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -rw-------  1 sharon users 1780180 Apr 23 16:29 ompi_blcr_context. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 31850
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -rw-r--r--  1 sharon users      35 Apr 23 16:29 snapshot_meta.data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The BLCR generated context files are &quot;ompi_blcr_context.PID&quot;, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to check to make sure that you have sufficient permissions to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; access to those files (something like above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using BLCR version 0.6.5.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I generate checkpoints via 'ompi-checkpoint pid'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where pid is the pid of the mpirun task below
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 -am ft-enable-cr ./xhpl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you running in a managed environment (e.g., using Torque or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Slurm)? Odds are once you switched to root you lost your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environmental
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbols for your allocation (which is how Open MPI detects when to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an allocation). This would explain why the processes were  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restarted on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one node instead of two.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maui/torque is the scheduler/resource manager combo being used. I  
</span><br>
<span class="quotelev2">&gt;&gt; have been trying, to no avail, to push a machinefile (listing the  
</span><br>
<span class="quotelev2">&gt;&gt; hostnames of the nodes given to me by maui/torque) at ompi-restart  
</span><br>
<span class="quotelev2">&gt;&gt; which can in turn pass this on to mpirun. Any suggestions on how to  
</span><br>
<span class="quotelev2">&gt;&gt; do this? --verbose passed to ompi-restart isn't very verbose about  
</span><br>
<span class="quotelev2">&gt;&gt; what's going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you pass '--help' to ompi-restart it will show you all the command  
</span><br>
<span class="quotelev1">&gt; line options for that command (following UNIX convention). To pass a  
</span><br>
<span class="quotelev1">&gt; hostfile to ompi-restart just use either the --hostfile or -- 
</span><br>
<span class="quotelev1">&gt; machinefile options the same way you would orterun. ompi-restart will  
</span><br>
<span class="quotelev1">&gt; pass this to the orterun it starts up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is one bug I'm trying to track at the moment with app context  
</span><br>
<span class="quotelev1">&gt; files. In the current trunk processes are not being mapped quite as  
</span><br>
<span class="quotelev1">&gt; consistently as they should be. You may be running into this problem,  
</span><br>
<span class="quotelev1">&gt; but I can't say for sure at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-restart uses mpirun underneath to do the process launch in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exactly the same way the normal mpirun. So the mapping of processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be the same. That being said there is a bug that I'm tracking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in which they are not. This bug has nothing to do with restarting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes, and more with a bookkeeping error when using app files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, I doubt the bug has anything to do with my basic problems of  
</span><br>
<span class="quotelev2">&gt;&gt; not launching the mpi tasks across 2 nodes rather than just the node  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is sitting on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you check the permissions of the resulting checkpoint files to  
</span><br>
<span class="quotelev1">&gt; make sure that you have the proper access to them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So am I a little confused, are you now able to restart properly now  
</span><br>
<span class="quotelev1">&gt; outside of the hostfile issue described above?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sharon
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>In reply to:</strong> <a href="5556.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
