<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 14:11:28 2006" -->
<!-- isoreceived="20060531181128" -->
<!-- sent="Wed, 31 May 2006 14:11:25 -0400" -->
<!-- isosent="20060531181125" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447DDC4D.8030302_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-31 14:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe reply:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When I run a spawn program over rsh/ssh, I notice that each time the
<br>
child program gets spawned, it will need to establish a new rsh/ssh
<br>
connection to the remote node to launch orted on that node, even the
<br>
parent executable and the orted are running on that node.
<br>
<p>So I wonder if there is any way that we can use the parent orted to
<br>
launch the child program if they happen to be on the same node?
<br>
<p>I try to compare to the spawn program to the scenario where I run 
<br>
multiple executables in one mpirun command. For this run, I only 
<br>
establish one connection to the remote node only, and both executables 
<br>
shared the same remote connection.
<br>
<p>% ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : -np 2
<br>
sleep 10
<br>
Password:
<br>
<p>15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
<br>
--bootprox
<br>
&nbsp;&nbsp;&nbsp;15017 sleep 12
<br>
&nbsp;&nbsp;&nbsp;15019 sleep 12
<br>
&nbsp;&nbsp;&nbsp;15021 sleep 10
<br>
&nbsp;&nbsp;&nbsp;15023 sleep 10
<br>
<p>The reason that I want to find out if it is possible for orted to launch 
<br>
child executable(s) without having to establish a new connection, is 
<br>
because the number of times that I can run 'qrsh' in SGE (or N1GE) is 
<br>
actually depended on the number of slots that the user initially 
<br>
allocated. That the slot number corresponds to the number of CPUs on a 
<br>
node. Each slot allows one 'qrsh' connection.
<br>
<p>The issue is when I try to run a spawn job on a single node, or a 
<br>
cluster of many 1-cpu nodes under SGE. The number of times that the 
<br>
program can spawn is limited by 'qrsh', that it forbids the child 
<br>
program to connect to the same node where the parent executable's orted 
<br>
might be already running there.
<br>
<p>I am curious to see if I can find some solution to the problem here. I 
<br>
am also looking to see if there are some tricks in SGE to get around 
<br>
this issue, but workaround I can see aren't pretty though. So I welcome 
<br>
your questions, comments or suggestions on this.
<br>
<p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0906.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe reply:</strong> <a href="0908.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
