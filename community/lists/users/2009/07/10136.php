<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 16:58:12 2009" -->
<!-- isoreceived="20090729205812" -->
<!-- sent="Wed, 29 Jul 2009 14:57:58 -0600" -->
<!-- isosent="20090729205758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="98BEA77A-7310-4BC6-89C1-D7B8553E61B5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c19fcadc0907291346o7161065ci2285ed11629f688d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 16:57:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, so there is a firewall involved? That is always a problem. I  
<br>
gather that node 126 has clear access to all other nodes, but nodes  
<br>
122, 123, and 125 do not all have access to each other?
<br>
<p>See if your admin is willing to open at least one port on each node  
<br>
that can reach all other nodes. It is easiest if it is the same port  
<br>
for every node, but not required. Then you can try setting the mca  
<br>
params oob_tcp_port_minv4 and oob_tcp_port_rangev4. This should allow  
<br>
the daemons to communicate.
<br>
<p>Check ompi_info --param oob tcp for info on those (and other) params.
<br>
<p>Ralph
<br>
<p>On Jul 29, 2009, at 2:46 PM, David Doria wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 29, 2009 at 4:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Using direct can cause scaling issues as every process will open a  
</span><br>
<span class="quotelev1">&gt; socket to every other process in the job. You would at least have to  
</span><br>
<span class="quotelev1">&gt; ensure you have enough file descriptors available on every node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most likely cause is either (a) a different OMPI version getting  
</span><br>
<span class="quotelev1">&gt; picked up on one of the nodes, or (b) something blocking  
</span><br>
<span class="quotelev1">&gt; communication between at least one of your other nodes. I would  
</span><br>
<span class="quotelev1">&gt; suspect the latter - perhaps a firewall or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I''m disturbed by your not seeing any error output - that seems  
</span><br>
<span class="quotelev1">&gt; strange. Try adding --debug-daemons to the cmd line. That should  
</span><br>
<span class="quotelev1">&gt; definitely generate output from every daemon (at the least, they  
</span><br>
<span class="quotelev1">&gt; report they are alive).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nifty, I used MPI_Get_processor_name - as you said, this is much  
</span><br>
<span class="quotelev1">&gt; more helpful output. I also check all the versions and they seem to  
</span><br>
<span class="quotelev1">&gt; be fine - 'mpirun -V' says 1.3.3 on all 4 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output with '-mca routed direct' is now (correctly):
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H  
</span><br>
<span class="quotelev1">&gt; 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 -mca routed direct hello- 
</span><br>
<span class="quotelev1">&gt; mpi
</span><br>
<span class="quotelev1">&gt; Process 0 on daviddoria out of 4
</span><br>
<span class="quotelev1">&gt; Process 1 on cloud3 out of 4
</span><br>
<span class="quotelev1">&gt; Process 2 on cloud4 out of 4
</span><br>
<span class="quotelev1">&gt; Process 3 on cloud6 out of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output with --debug-daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a particular port / set of ports I can have my system admin  
</span><br>
<span class="quotelev1">&gt; unblock on the firewall to see if that fixes it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H  
</span><br>
<span class="quotelev1">&gt; 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 --leave-session-attached  
</span><br>
<span class="quotelev1">&gt; --debug-daemons -np 4 hello-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cloud3 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],1] checking in as pid 14707 on host cloud3
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cloud4 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],2] checking in as pid 5987 on host cloud4
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] orted: up and running - waiting for  
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; Daemon was launched on cloud6 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],3] checking in as pid 1037 on host cloud6
</span><br>
<span class="quotelev1">&gt; Daemon [[9461,0],3] not using static ports
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] node[0].name daviddoria daemon 0  
</span><br>
<span class="quotelev1">&gt; arch ffca0200
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] node[1].name 10 daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] node[2].name 10 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] node[3].name 10 daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [cloud6:01037] [[9461,0],3] orted: up and running - waiting for  
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] node[0].name daviddoria daemon 0 arch  
</span><br>
<span class="quotelev1">&gt; ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] node[1].name 10 daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] node[2].name 10 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] node[3].name 10 daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] node[0].name daviddoria daemon 0 arch  
</span><br>
<span class="quotelev1">&gt; ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] node[1].name 10 daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] node[2].name 10 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] node[3].name 10 daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [cloud3:14707] [[9461,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] orted_recv: received sync+nidmap  
</span><br>
<span class="quotelev1">&gt; from local proc [[9461,1],0]
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] orted_recv: received sync+nidmap from  
</span><br>
<span class="quotelev1">&gt; local proc [[9461,1],2]
</span><br>
<span class="quotelev1">&gt; [daviddoria:11061] [[9461,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [cloud4:05987] [[9461,0],2] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any more thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10135.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
