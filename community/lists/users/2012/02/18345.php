<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 09:58:55 2012" -->
<!-- isoreceived="20120201145855" -->
<!-- sent="Wed, 1 Feb 2012 15:58:41 +0100" -->
<!-- isosent="20120201145841" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="3DD432C7-917B-4FF8-8199-B46C5ED6EEA3_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83477B63-7E86-4740-8A20-80DCADF7FECA_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 09:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Previous message:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 01.02.2012 um 15:38 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; On Feb 1, 2012, at 3:49 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 31.01.2012 um 21:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 31, 2012, at 12:58 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW: is there any default for a hostfile for Open MPI - I mean any in my home directory or /etc? When I check `man orte_hosts`, and all possible optiions are unset (like in a singleton run), it will only run local (Job is co-located with mpirun).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep - it is &lt;prefix&gt;/etc/openmpi-default-hostfile
</span><br>
<p>Thx for replying Ralph.
<br>
<p>I spotted it too, but this is not working for me. Neither for mpiexec from the command line, nor any singleton. I also tried a plain /etc as location of this file as well.
<br>
<p>reuti_at_pc15370:~&gt; which mpicc
<br>
/home/reuti/local/openmpi-1.4.4-thread/bin/mpicc
<br>
reuti_at_pc15370:~&gt; cat /home/reuti/local/openmpi-1.4.4-thread/etc/openmpi-default-hostfile
<br>
pc15370 slots=2
<br>
pc15381 slots=2
<br>
reuti_at_pc15370:~&gt; mpicc -o mpihello mpihello.c
<br>
reuti_at_pc15370:~&gt; mpiexec -np 4 ./mpihello
<br>
Hello World from Node 0.
<br>
Hello World from Node 1.
<br>
Hello World from Node 2.
<br>
Hello World from Node 3.
<br>
<p>But all is local (no spawn here, traditional mpihello):
<br>
<p>19503 ?        Ss     0:00 /usr/sbin/sshd -o PidFile=/var/run/sshd.init.pid
<br>
11583 ?        Ss     0:00  \_ sshd: reuti [priv]                                 
<br>
11585 ?        S      0:00  |   \_ sshd: reuti_at_pts/6                                  
<br>
11587 pts/6    Ss     0:00  |       \_ -bash
<br>
13470 pts/6    S+     0:00  |           \_ mpiexec -np 4 ./mpihello
<br>
13471 pts/6    R+     0:00  |               \_ ./mpihello
<br>
13472 pts/6    R+     0:00  |               \_ ./mpihello
<br>
13473 pts/6    R+     0:00  |               \_ ./mpihello
<br>
13474 pts/6    R+     0:00  |               \_ ./mpihello
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; We probably aren't correctly marking the original singleton on that node, and so the mapper thinks there are still two slots available on the original node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay. There is something to discuss/fix. BTW: if started as singleton I get an error at the end with the program the OP provided:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:25502] [[12435,0],1] routed:binomial: Connection to lifeline [[12435,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, I'll take a look at it - but it may take awhile before I can address either issue as other priorities loom.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not the case if run by mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Previous message:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
