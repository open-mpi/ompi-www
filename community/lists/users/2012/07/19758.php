<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 16:21:56 2012" -->
<!-- isoreceived="20120711202156" -->
<!-- sent="Wed, 11 Jul 2012 21:21:50 +0100 (BST)" -->
<!-- isosent="20120711202150" -->
<!-- name="Dugenoux Albert" -->
<!-- email="dugenouxa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="1342038110.36398.YahooMailNeo_at_web29405.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FFCB1D5.8000804_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi<br>
<strong>From:</strong> Dugenoux Albert (<em>dugenouxa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 16:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>In reply to:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.

To answer the differents remarks :

1) Code Saturne launch itself embedded python and bash scripts with the mpiexec parameters, but I will test
your parameter next week and will give you the result of this benchmark.


2) I do not think there is a problem with the load balancing : Code Saturne partitions itself
the mesh with the reliable and well-known Metis library which is the graph partitioner. So CPU
are equally busy. 


3) CPUs are Xeon which have multithreading capabilities. However I have tested it
by setting np=24 in the server_priv/nodes file of the PBS server, and compared that
with a configuration of np=12. The results are very similar : there is no gain of 20% or 30%

4) I will examine the hardware options as you have suggested but I will have to convince my
office for such investissment !


________________________________
 De&#160;: Gus Correa &lt;gus_at_[hidden]&gt;
&#192;&#160;: Open MPI Users &lt;users_at_[hidden]&gt; 
Envoy&#233; le : Mercredi 11 juillet 2012 0h51
Objet&#160;: Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi
 
On 07/10/2012 05:31 PM, Jeff Squyres wrote:
&gt; +1.&#160; Also, not all Ethernet switches are created equal --
&gt; particularly commodity 1GB Ethernet switches.
&gt; I've seen plenty of crappy Ethernet switches rated for 1GB
&gt; that could not reach that speed when under load.
&gt;

Are you perhaps belittling my dear $43 [brand undisclosed]
5-port GigE SoHo switch, that connects my Pentium-III
toy cluster, just because it drops a few packages [per microsec]?
It looks so good, with all those fiercely blinking green LEDs.
Where else could I fool around with cluster setup and test
the OpenMPI new releases? :)
The production cluster is just too crowded for this,
maybe because it has a decent
HP GigE switch [IO] and Infiniband [MPI] ...

Gus


&gt;
&gt;
&gt; On Jul 10, 2012, at 10:47 AM, Ralph Castain wrote:
&gt;
&gt;&gt; I suspect it mostly reflects communication patterns. I don't know anything about Saturne, but shared memory is a great deal faster than TCP, so the more processes sharing a node the better. You may also be hitting some natural boundary in your model - perhaps with 8 processes/node you wind up with more processes that cross the node boundary, further increasing the communication requirement.
&gt;&gt;
&gt;&gt; Do things continue to get worse if you use all 4 nodes with 6 processes/node?
&gt;&gt;
&gt;&gt;
&gt;&gt; On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:
&gt;&gt;
&gt;&gt;&gt; Hi.
&gt;&gt;&gt;
&gt;&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of
&gt;&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores per system board.
&gt;&gt;&gt; The boards are linked with a local Gbits switch.
&gt;&gt;&gt;
&gt;&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD solver, I have configured the cluster
&gt;&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom and the 3 others cards. So this leads to
&gt;&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
&gt;&gt;&gt;
&gt;&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time is good and network traffic is not full.
&gt;&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
&gt;&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
&gt;&gt;&gt;
&gt;&gt;&gt; I have tested several configurations : binaries in local file system or on a NFS. But results are the same.
&gt;&gt;&gt; I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
&gt;&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I presently do not see where it is wrong !
&gt;&gt;&gt;
&gt;&gt;&gt; Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
&gt;&gt;&gt; of openMPI, or a bad network configuration ?
&gt;&gt;&gt;
&gt;&gt;&gt; Regards.
&gt;&gt;&gt;
&gt;&gt;&gt; B. S.
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>In reply to:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
