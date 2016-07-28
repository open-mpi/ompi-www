<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 11:29:04 2012" -->
<!-- isoreceived="20120201162904" -->
<!-- sent="Wed, 1 Feb 2012 17:28:49 +0100" -->
<!-- isosent="20120201162849" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="7CEE09C9-D1F3-452F-A9D0-14A934EB24E5_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F03397F9-6A89-41DA-801E-DCA2552FB263_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 11:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18362.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18361.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 01.02.2012 um 17:16 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Could you add --display-allocation to your cmd line? This will tell us if it found/read the default hostfile, or if the problem is with the mapper.
</span><br>
<p>Sure:
<br>
<p>reuti_at_pc15370:~&gt; mpiexec --display-allocation -np 4 ./mpihello
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: pc15370	Num slots: 1	Max slots: 0
<br>
<p>=================================================================
<br>
Hello World from Node 0.
<br>
Hello World from Node 1.
<br>
Hello World from Node 2.
<br>
Hello World from Node 3.
<br>
<p>(Nothing in `strace` about accessing someting with &quot;default&quot;)
<br>
<p><p>reuti_at_pc15370:~&gt; mpiexec --default-hostfile local/openmpi-1.4.4-thread/etc/openmpi-default-hostfile --display-allocation -np 4 ./mpihello
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: pc15370	Num slots: 2	Max slots: 0
<br>
&nbsp;Data for node: Name: pc15381	Num slots: 2	Max slots: 0
<br>
<p>=================================================================
<br>
Hello World from Node 0.
<br>
Hello World from Node 3.
<br>
Hello World from Node 2.
<br>
Hello World from Node 1.
<br>
<p>Specifying it works fine with correct distribution in `ps`.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Feb 1, 2012, at 7:58 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 01.02.2012 um 15:38 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 1, 2012, at 3:49 AM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 31.01.2012 um 21:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 31, 2012, at 12:58 PM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW: is there any default for a hostfile for Open MPI - I mean any in my home directory or /etc? When I check `man orte_hosts`, and all possible optiions are unset (like in a singleton run), it will only run local (Job is co-located with mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yep - it is &lt;prefix&gt;/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thx for replying Ralph.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I spotted it too, but this is not working for me. Neither for mpiexec from the command line, nor any singleton. I also tried a plain /etc as location of this file as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; reuti_at_pc15370:~&gt; which mpicc
</span><br>
<span class="quotelev2">&gt;&gt; /home/reuti/local/openmpi-1.4.4-thread/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; reuti_at_pc15370:~&gt; cat /home/reuti/local/openmpi-1.4.4-thread/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; pc15370 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; pc15381 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; reuti_at_pc15370:~&gt; mpicc -o mpihello mpihello.c
</span><br>
<span class="quotelev2">&gt;&gt; reuti_at_pc15370:~&gt; mpiexec -np 4 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Node 0.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Node 1.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Node 2.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Node 3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But all is local (no spawn here, traditional mpihello):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 19503 ?        Ss     0:00 /usr/sbin/sshd -o PidFile=/var/run/sshd.init.pid
</span><br>
<span class="quotelev2">&gt;&gt; 11583 ?        Ss     0:00  \_ sshd: reuti [priv]                                 
</span><br>
<span class="quotelev2">&gt;&gt; 11585 ?        S      0:00  |   \_ sshd: reuti_at_pts/6                                  
</span><br>
<span class="quotelev2">&gt;&gt; 11587 pts/6    Ss     0:00  |       \_ -bash
</span><br>
<span class="quotelev2">&gt;&gt; 13470 pts/6    S+     0:00  |           \_ mpiexec -np 4 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 13471 pts/6    R+     0:00  |               \_ ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 13472 pts/6    R+     0:00  |               \_ ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 13473 pts/6    R+     0:00  |               \_ ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 13474 pts/6    R+     0:00  |               \_ ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We probably aren't correctly marking the original singleton on that node, and so the mapper thinks there are still two slots available on the original node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay. There is something to discuss/fix. BTW: if started as singleton I get an error at the end with the program the OP provided:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc15381:25502] [[12435,0],1] routed:binomial: Connection to lifeline [[12435,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, I'll take a look at it - but it may take awhile before I can address either issue as other priorities loom.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's not the case if run by mpiexec.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18362.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18361.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18364.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
