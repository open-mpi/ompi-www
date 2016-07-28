<?
$subject_val = "[OMPI users] Cluster Configuration Issue???";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 13:07:32 2010" -->
<!-- isoreceived="20100201180732" -->
<!-- sent="Mon, 1 Feb 2010 10:07:26 -0800" -->
<!-- isosent="20100201180726" -->
<!-- name="Lee Manko" -->
<!-- email="lmanko_at_[hidden]" -->
<!-- subject="[OMPI users] Cluster Configuration Issue???" -->
<!-- id="e33c0c7d1002011007l6057a4baqb5018b5cb917f026_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Lee Manko (<em>lmanko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-01 13:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11950.php">Timothy G Thompson: "[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores"</a>
<li><strong>Previous message:</strong> <a href="11948.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is my first attempt at configuring a Beowulf cluster running MPI.  ALL
<br>
of the nodes are PS3s running Yellow Dog Linux 6.2 and the host (server) is
<br>
a Dell i686 Quad-core running Fedora Core 12.  Thanks to a couple of members
<br>
on this forum (in a previous question), I learned that I needed to download
<br>
the openmpi code, configure, compile and install it on each of my machines.
<br>
&nbsp;I downloaded v1.4.1.  I configured openmpi for non-heterogeneous and
<br>
compiled and installed individually on each node and the server.  I have an
<br>
NSF shared directory on the host where the application resides after
<br>
building.  All nodes have access to the shared volume and they can see any
<br>
files in the shared volume.  SSH is configured and the server can remote
<br>
into each node without using a password and vice versa.  The built-in
<br>
firewalls (iptables and ip6tables) are disabled.
<br>
<p><p><p>I downloaded and modified a very simple master/slave framework application
<br>
where the slave does a simple computation and gets the processor name.  The
<br>
slave returns both pieces of information to the master who then simply
<br>
displays it in the terminal window.  The master farms out 1024 such tasks to
<br>
the slaves and after finalizing the master exists.
<br>
<p><p><p>I run the application in one of three ways:
<br>
<p><p>&nbsp;&nbsp;&nbsp;1. &#147;mpirun &#150;np 2 host_application&#148; - launched and run locally on the
<br>
server and uses one of it remaining 3 cores as a slave
<br>
<p>&nbsp;&nbsp;&nbsp;2. &#147;mpirun &#150;np 1 node_application&#148; - launched and run locally on the node
<br>
and uses the second slot as a slave
<br>
<p>&nbsp;&nbsp;&nbsp;3. &#147;mpirun &#150;np 1 --host host_name host_application ; -np 1 --host
<br>
hostfile node_application&#148; - runs host_application as master on the Dell
<br>
server and runs node_application as a slave (rank=1) on the first PS3.
<br>
<p><p>host_application and node_application are identical but compiled on their
<br>
respective machines to create loadable executables for that machine.
<br>
<p><p>OK, so methods 1 and 2 run fine and the master farms out 1024 tasks to the
<br>
slave.  The return values look like I expect.  However, when I run method 3,
<br>
the application hangs - no error messages, nothing.
<br>
<p><p>What I have discovered through rudimentary debugging (using files) is that
<br>
the master (Dell) initiates the MPI_Init call and node_application is
<br>
launched on the slave (PS3).  The slave recognizes itself as rank 1 and
<br>
enters the slave code, which is to wait for the first message from the
<br>
master.  However, the message from the master, an MPI_Send, is never
<br>
received by the slave.  Since MPI_Send on the master is blocking and the
<br>
MPI_Recv on the slave is also blocking, the processing simply stalls.
<br>
<p><p>This appears to be some kind of configuration issue between Fedora and YDL.
<br>
&nbsp;Or, I have not set something up properly.
<br>
<p><p>Please keep in mind that when the applications are running locally, they are
<br>
performing the same Init, Send and Recv calls as when farming out to the
<br>
cluster, but just no going off board, so to speak.  Compiling and running
<br>
the application on the native hardware works perfectly (ie: compiled and run
<br>
on the PS3 or compiled and run on the Dell).  So, I know that the code was
<br>
written properly and executing properly locally.
<br>
<p><p>Has anyone else experienced this kind of behavior?  Were you able to solve
<br>
it?  Anyone have any suggestions as to where I might look to resolve this
<br>
issue?
<br>
<p>Thanks.
<br>
<p><p><p>Lee Manko
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11950.php">Timothy G Thompson: "[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores"</a>
<li><strong>Previous message:</strong> <a href="11948.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
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
