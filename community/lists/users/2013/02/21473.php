<?
$subject_val = "[OMPI users] Option -cpus-per-proc 2 not working with given machinefile?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 18:15:42 2013" -->
<!-- isoreceived="20130227231542" -->
<!-- sent="Thu, 28 Feb 2013 00:15:29 +0100" -->
<!-- isosent="20130227231529" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="[OMPI users] Option -cpus-per-proc 2 not working with given machinefile?" -->
<!-- id="90349FB1-7669-49CD-9E9A-95C4EF78165B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 18:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have an issue using the option -cpus-per-proc 2. As I have Bulldozer machines and I want only one process per FP core, I thought using -cpus-per-proc 2 would be the way to go. Initially I had this issue inside GridEngine but then tried it outside any queuingsystem and face exactly the same behavior.
<br>
<p>@) Each machine has 4 CPUs with each having 16 integer cores, hence 64 integer cores per machine in total. Used Open MPI is 1.6.4.
<br>
<p><p>a) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
<br>
<p>and a hostfile containing only the two lines listing the machines:
<br>
<p>node006
<br>
node007
<br>
<p>This works as I would like it (see working.txt) when initiated on node006.
<br>
<p><p>b) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
<br>
<p>But changing the hostefile so that it is having a slot count which might mimic the behavior in case of a parsed machinefile out of any queuing system:
<br>
<p>node006 slots=64
<br>
node007 slots=64
<br>
<p>This fails with:
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor on node:
<br>
<p>&nbsp;Node: node006
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M), or that the node has an unexpectedly different topology.
<br>
<p>Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host, and that all nodes
<br>
have identical topologies.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
<p>(see failed.txt)
<br>
<p><p>b1) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 32 ./mpihello
<br>
<p>This works and the found universe is 128 as expected (see only32.txt).
<br>
<p><p>c) Maybe the used machinefile is not parsed in the correct way, so I checked:
<br>
<p>c1) mpiexec -hostfile machines -np 64 ./mpihello =&gt; works
<br>
<p>c2) mpiexec -hostfile machines -np 128 ./mpihello =&gt; works
<br>
<p>c3) mpiexec -hostfile machines -np 129 ./mpihello =&gt; fails as expected
<br>
<p>So, it got the slot counts in the correct way.
<br>
<p>What do I miss?
<br>
<p>-- Reuti
<br>
<p><p>
<p>
reuti_at_node006:~&gt; mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
<br>
--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor on node:
<br>
<p>&nbsp;&nbsp;Node: node006
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M), or that the node has an unexpectedly different topology.
<br>
<p>Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host, and that all nodes
<br>
have identical topologies.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
[node006:44140] MCW rank 0 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 1 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 2 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 3 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 4 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 5 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 6 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 7 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 8 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 9 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 10 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 11 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 12 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 13 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 14 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 15 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 16 bound to socket 2[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 17 bound to socket 2[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 18 bound to socket 2[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 19 bound to socket 2[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 20 bound to socket 2[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 21 bound to socket 2[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 22 bound to socket 2[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 23 bound to socket 2[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 24 bound to socket 3[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 25 bound to socket 3[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
<br>
[node006:44140] MCW rank 26 bound to socket 3[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
<br>
[node006:44140] MCW rank 27 bound to socket 3[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
<br>
[node006:44140] MCW rank 28 bound to socket 3[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
<br>
[node006:44140] MCW rank 29 bound to socket 3[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
<br>
[node006:44140] MCW rank 30 bound to socket 3[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
<br>
[node006:44140] MCW rank 31 bound to socket 3[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered an error
<br>
on node node006. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
64 total processes failed to start
<br>
reuti_at_node006:~&gt; 
<br>
<p>
<p>
reuti_at_node006:~&gt; mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 32 ./mpihello
<br>
[node006:44897] MCW rank 20 bound to socket 2[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 21 bound to socket 2[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 22 bound to socket 2[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 23 bound to socket 2[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 24 bound to socket 3[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 25 bound to socket 3[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 26 bound to socket 3[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
<br>
[node006:44897] MCW rank 27 bound to socket 3[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
<br>
[node006:44897] MCW rank 28 bound to socket 3[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
<br>
[node006:44897] MCW rank 29 bound to socket 3[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
<br>
[node006:44897] MCW rank 30 bound to socket 3[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
<br>
[node006:44897] MCW rank 31 bound to socket 3[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
<br>
[node006:44897] MCW rank 0 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 1 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 2 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 3 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 4 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 5 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 6 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 7 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 8 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 9 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 10 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 11 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 12 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 13 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 14 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 15 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 16 bound to socket 2[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 17 bound to socket 2[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 18 bound to socket 2[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:44897] MCW rank 19 bound to socket 2[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
Total: 32
<br>
Universe: 128
<br>
Hello World from Node 0.
<br>
Hello World from Node 1.
<br>
Hello World from Node 2.
<br>
Hello World from Node 3.
<br>
Hello World from Node 4.
<br>
Hello World from Node 5.
<br>
Hello World from Node 6.
<br>
Hello World from Node 7.
<br>
Hello World from Node 8.
<br>
Hello World from Node 9.
<br>
Hello World from Node 10.
<br>
Hello World from Node 11.
<br>
Hello World from Node 12.
<br>
Hello World from Node 13.
<br>
Hello World from Node 14.
<br>
Hello World from Node 15.
<br>
Hello World from Node 16.
<br>
Hello World from Node 17.
<br>
Hello World from Node 18.
<br>
Hello World from Node 19.
<br>
Hello World from Node 20.
<br>
Hello World from Node 22.
<br>
Hello World from Node 23.
<br>
Hello World from Node 21.
<br>
Hello World from Node 24.
<br>
Hello World from Node 25.
<br>
Hello World from Node 26.
<br>
Hello World from Node 27.
<br>
Hello World from Node 28.
<br>
Hello World from Node 29.
<br>
Hello World from Node 30.
<br>
Hello World from Node 31.
<br>
reuti_at_node006:~&gt; 
<br>
<p>
<p>
reuti_at_node006:~&gt; mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
<br>
[node006:43869] MCW rank 24 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 26 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 28 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 30 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 32 bound to socket 2[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 34 bound to socket 2[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 36 bound to socket 2[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 38 bound to socket 2[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 40 bound to socket 2[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 42 bound to socket 2[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 44 bound to socket 2[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 46 bound to socket 2[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 48 bound to socket 3[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 50 bound to socket 3[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 52 bound to socket 3[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
<br>
[node006:43869] MCW rank 54 bound to socket 3[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
<br>
[node006:43869] MCW rank 56 bound to socket 3[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
<br>
[node006:43869] MCW rank 58 bound to socket 3[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
<br>
[node006:43869] MCW rank 60 bound to socket 3[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
<br>
[node006:43869] MCW rank 62 bound to socket 3[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
<br>
[node006:43869] MCW rank 0 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 2 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 4 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 6 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 8 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 10 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 12 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 14 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 16 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 18 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 20 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node006:43869] MCW rank 22 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 33 bound to socket 2[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 35 bound to socket 2[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 37 bound to socket 2[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 39 bound to socket 2[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 41 bound to socket 2[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 43 bound to socket 2[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 45 bound to socket 2[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 47 bound to socket 2[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 49 bound to socket 3[core 0-1]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 51 bound to socket 3[core 2-3]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 53 bound to socket 3[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
<br>
[node007:40674] MCW rank 55 bound to socket 3[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
<br>
[node007:40674] MCW rank 57 bound to socket 3[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
<br>
[node007:40674] MCW rank 59 bound to socket 3[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
<br>
[node007:40674] MCW rank 61 bound to socket 3[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
<br>
[node007:40674] MCW rank 63 bound to socket 3[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
<br>
[node007:40674] MCW rank 1 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 3 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 5 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 7 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 9 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 11 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 13 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 15 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 17 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 19 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 21 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 23 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 25 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 27 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 29 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[node007:40674] MCW rank 31 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
Total: 64
<br>
Universe: 2
<br>
Hello World from Node 0.
<br>
Hello World from Node 2.
<br>
Hello World from Node 4.
<br>
Hello World from Node 6.
<br>
Hello World from Node 8.
<br>
Hello World from Node 10.
<br>
Hello World from Node 12.
<br>
Hello World from Node 14.
<br>
Hello World from Node 16.
<br>
Hello World from Node 18.
<br>
Hello World from Node 20.
<br>
Hello World from Node 22.
<br>
Hello World from Node 24.
<br>
Hello World from Node 26.
<br>
Hello World from Node 28.
<br>
Hello World from Node 30.
<br>
Hello World from Node 32.
<br>
Hello World from Node 34.
<br>
Hello World from Node 36.
<br>
Hello World from Node 38.
<br>
Hello World from Node 42.
<br>
Hello World from Node 44.
<br>
Hello World from Node 46.
<br>
Hello World from Node 48.
<br>
Hello World from Node 50.
<br>
Hello World from Node 52.
<br>
Hello World from Node 54.
<br>
Hello World from Node 56.
<br>
Hello World from Node 58.
<br>
Hello World from Node 60.
<br>
Hello World from Node 62.
<br>
Hello World from Node 40.
<br>
Hello World from Node 1.
<br>
Hello World from Node 3.
<br>
Hello World from Node 9.
<br>
Hello World from Node 11.
<br>
Hello World from Node 13.
<br>
Hello World from Node 15.
<br>
Hello World from Node 21.
<br>
Hello World from Node 23.
<br>
Hello World from Node 29.
<br>
Hello World from Node 39.
<br>
Hello World from Node 5.
<br>
Hello World from Node 7.
<br>
Hello World from Node 17.
<br>
Hello World from Node 19.
<br>
Hello World from Node 25.
<br>
Hello World from Node 27.
<br>
Hello World from Node 31.
<br>
Hello World from Node 33.
<br>
Hello World from Node 35.
<br>
Hello World from Node 41.
<br>
Hello World from Node 37.
<br>
Hello World from Node 43.
<br>
Hello World from Node 45.
<br>
Hello World from Node 47.
<br>
Hello World from Node 49.
<br>
Hello World from Node 51.
<br>
Hello World from Node 53.
<br>
Hello World from Node 55.
<br>
Hello World from Node 57.
<br>
Hello World from Node 59.
<br>
Hello World from Node 61.
<br>
Hello World from Node 63.
<br>
reuti_at_node006:~&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21472.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenFabrics (openib)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
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
