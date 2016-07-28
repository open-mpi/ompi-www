<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 10:05:41 2012" -->
<!-- isoreceived="20120403140541" -->
<!-- sent="Tue, 3 Apr 2012 16:05:33 +0200" -->
<!-- isosent="20120403140533" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="zarafa.4f7b03ad.0883.2c9a0926606df961_at_mail.fft" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CBA07823.13F9B%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 10:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18919.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18918.php">Tom Bryan: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18919.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,

 
I'm using orterun to launch the computation.

 
Basically, I use the qsub  from Sge to submit a  run to our cluster. The booked resources will be read and used by orterun whe the job will be launched ( using tight-integration).

 
I might be wrong, but this would mean that the issue observed is somehow different than the one you mentioned here.

 
Regards,

Eloi

 
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Tom Bryan
Sent: mardi 3 avril 2012 15:49
To: Open MPI Users
Subject: Re: [OMPI users] sge tight intregration leads to bad allocation

 
How are you launching the application?

I had an app that did an Spawn_multiple with tight SGE integration, and there was a difference in behavior depending on whether or not an app was launched via mpiexec.  I'm not sure whether it's the same issue as you're seeing, but Reuti describes the problem here: <a href="http://www.open-mpi.org/community/lists/users/2012/01/18348.php">http://www.open-mpi.org/community/lists/users/2012/01/18348.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2012/01/18348.php">http://www.open-mpi.org/community/lists/users/2012/01/18348.php</a>&gt; 

It will be resolved at some point, but I imagine that the fix will only go into new releases: <a href="http://www.open-mpi.org/community/lists/users/2012/02/18399.php">http://www.open-mpi.org/community/lists/users/2012/02/18399.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2012/02/18399.php">http://www.open-mpi.org/community/lists/users/2012/02/18399.php</a>&gt; 

In my case, the workaround was just to launch the app with mpiexec, and the allocation is handled correctly.

---Tom

On 4/3/12 9:23 AM, &quot;Eloi Gaudry&quot; &lt;eloi.gaudry_at_[hidden]&gt; wrote:

Hi,



I've observed a strange behavior during rank allocation on a distributed run schedule and submitted using Sge (Son of Grid Egine 8.0.0d) and OpenMPI-1.4.4.

Briefly, there is a one-slot difference between allocated rank/slot for Sge and OpenMPI. The issue here is that one node becomes oversubscribed at runtime.



Here is the output of the allocation done for gridengine:



======================   ALLOCATED NODES   ======================



Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: [[22904,0],0]  Daemon launched: True

              Num slots: 1      Slots in use: 0

              Num slots allocated: 1   Max slots: 0

              Username on node: NULL

              Num procs: 0     Next node_rank: 0

Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: Not defined   Daemon launched: False

              Num slots: 1      Slots in use: 0

              Num slots allocated: 1   Max slots: 0

              Username on node: NULL

              Num procs: 0     Next node_rank: 0

Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: Not defined   Daemon launched: False

              Num slots: 2      Slots in use: 0

              Num slots allocated: 2   Max slots: 0

              Username on node: NULL

              Num procs: 0     Next node_rank: 0





And here is the allocation finally used:

=================================================================



Map generated by mapping policy: 0200

              Npernode: 0      Oversubscribe allowed: TRUE   CPU Lists: FALSE

              Num new daemons: 2  New daemon starting vpid 1

              Num nodes: 3



Data for node: Name: barney                 Launch id: -1      Arch: ffc91200   State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: [[22904,0],0]  Daemon launched: True

              Num slots: 1      Slots in use: 2

              Num slots allocated: 1   Max slots: 0

              Username on node: NULL

              Num procs: 2     Next node_rank: 2

              Data for proc: [[22904,1],0]

                             Pid: 0     Local rank: 0       Node rank: 0

                             State: 0                App_context: 0                Slot list: NULL

              Data for proc: [[22904,1],3]

                             Pid: 0     Local rank: 1       Node rank: 1

                             State: 0                App_context: 0                Slot list: NULL



Data for node: Name: carl.fft                  Launch id: -1      Arch: 0  State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: [[22904,0],1]  Daemon launched: False

              Num slots: 1      Slots in use: 1

              Num slots allocated: 1   Max slots: 0

              Username on node: NULL

              Num procs: 1     Next node_rank: 1

              Data for proc: [[22904,1],1]

                             Pid: 0     Local rank: 0       Node rank: 0

                             State: 0                App_context: 0                Slot list: NULL



Data for node: Name: charlie.fft                            Launch id: -1      Arch: 0  State: 2

              Num boards: 1  Num sockets/board: 2  Num cores/socket: 2

              Daemon: [[22904,0],2]  Daemon launched: False

              Num slots: 2      Slots in use: 1

              Num slots allocated: 2   Max slots: 0

              Username on node: NULL

              Num procs: 1     Next node_rank: 1

              Data for proc: [[22904,1],2]

                             Pid: 0     Local rank: 0       Node rank: 0

                             State: 0                App_context: 0                Slot list: NULL



Has anyone already encounter the same behavior ?

Is there a simple fix than not using the tight integration mode between Sge and OpenMPI ?



Eloi

 
--------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; 


<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18921.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18919.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18918.php">Tom Bryan: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18919.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
