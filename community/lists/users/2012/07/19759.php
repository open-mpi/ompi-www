<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 16:55:23 2012" -->
<!-- isoreceived="20120711205523" -->
<!-- sent="Wed, 11 Jul 2012 16:55:06 -0400" -->
<!-- isosent="20120711205506" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="4FFDE82A.2020407_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1342038110.36398.YahooMailNeo_at_web29405.mail.ird.yahoo.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 16:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dugenoux
<br>
<p>On 07/11/2012 04:21 PM, Dugenoux Albert wrote:
<br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To answer the differents remarks :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Code Saturne launch itself embedded python and bash scripts with the
</span><br>
<span class="quotelev1">&gt; mpiexec parameters, but I will test
</span><br>
<span class="quotelev1">&gt; your parameter next week and will give you the result of this benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I already saw other programs which have launching wrappers also.
<br>
They can make it more difficult to change the mpiexec command line
<br>
options directly.  But maybe there is a way to pass mpiexec parameters
<br>
as a string or similar.
<br>
Our cluster have AMD Opterons, and sometimes
<br>
'--bysocket --bind-to-socket' helps.
<br>
However, although it may be worth trying,
<br>
this may or may not be beneficial to the Intel processors,
<br>
I haven't used them for MPI in a while.
<br>
<p><span class="quotelev1">&gt; 2) I do not think there is a problem with the load balancing : Code
</span><br>
<span class="quotelev1">&gt; Saturne partitions itself
</span><br>
<span class="quotelev1">&gt; the mesh with the reliable and well-known Metis library which is the
</span><br>
<span class="quotelev1">&gt; graph partitioner. So CPU
</span><br>
<span class="quotelev1">&gt; are equally busy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Out of mere curiosity, yesterday I briefly checked the Code Saturne
<br>
user guide, and indeed I saw that it uses Metis for graph partitioning.
<br>
Not being familiar to CFD codes related to engineering, and
<br>
to irregular meshes, adaptive meshes, or to Metis, I still wonder
<br>
if Metis [and Code Saturne] may accept some parameters
<br>
to help it do its partitioning job.
<br>
[Here we do Earth Science type of CFD, a.k.a GFD or geophysical fluid 
<br>
dynamics, mostly atmosphere, ocean and climate dynamics,
<br>
but sometimes also solid earth - mantle convection, volcanism, etc -
<br>
However, the Navier-Stokes equation is reduced by a number of
<br>
approximations: Boussinesq, sometimes hydrostatic, turbulence
<br>
is parametrized, small wave numbers are damped, grids/meshes
<br>
are typically fixed and simple, etc.]
<br>
<p><span class="quotelev1">&gt; 3) CPUs are Xeon which have multithreading capabilities. However I have
</span><br>
<span class="quotelev1">&gt; tested it
</span><br>
<span class="quotelev1">&gt; by setting np=24 in the server_priv/nodes file of the PBS server, and
</span><br>
<span class="quotelev1">&gt; compared that
</span><br>
<span class="quotelev1">&gt; with a configuration of np=12. The results are very similar : there is
</span><br>
<span class="quotelev1">&gt; no gain of 20% or 30%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I just wonder if hyperthreading was really turned on during your tests.
<br>
Often times it comes turned on in the computer BIOS, but sometimes
<br>
it is turned off.
<br>
Did you check that out?
<br>
It is not enough to have Intel processors, hyperthreading must be
<br>
enabled, and often times this is done in the BIOS,
<br>
which you can access and change during bootup [pressing F1, F2 or DEL,
<br>
depending on the BIOS manufacturer].
<br>
Hyperthreading won't help with the cost of MPI communication,
<br>
but it may expedite a bit the computation part of the algorithm.
<br>
However, it may well be that Gigabit Ethernet is killing the
<br>
performance.
<br>
<p>Have you tried to run in a single node, avoiding any
<br>
network communication cost, just for kicks?
<br>
That may give you a baseline to compare to runs across nodes.
<br>
<p><span class="quotelev1">&gt; 4) I will examine the hardware options as you have suggested but I will
</span><br>
<span class="quotelev1">&gt; have to convince my
</span><br>
<span class="quotelev1">&gt; office for such investissment !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I know that problem.
<br>
I am always told to 'get the most bang for the buck',
<br>
and I am often given the least buck and required to produce a big bang!
<br>
Rest assured that I hold no stock of that Internet vendor Colfax,
<br>
or manufacturers of Infinband products [Mellanox,
<br>
QLogic=now Intel].
<br>
That was just meant to give you an idea of prices.
<br>
In France you probably have different vendors, but I believe the
<br>
manufacturers are pretty much the same.
<br>
BTW, I forgot to mention that besides the switch and HCA adapters,
<br>
you also need to buy the Infiniband cables!  :)
<br>
<p>I hope that helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *De :* Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *&#192; :* Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Envoy&#233; le :* Mercredi 11 juillet 2012 0h51
</span><br>
<span class="quotelev1">&gt; *Objet :* Re: [OMPI users] Bad parallel scaling using Code Saturne with
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/10/2012 05:31 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; +1. Also, not all Ethernet switches are created equal --
</span><br>
<span class="quotelev2">&gt;  &gt; particularly commodity 1GB Ethernet switches.
</span><br>
<span class="quotelev2">&gt;  &gt; I've seen plenty of crappy Ethernet switches rated for 1GB
</span><br>
<span class="quotelev2">&gt;  &gt; that could not reach that speed when under load.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you perhaps belittling my dear $43 [brand undisclosed]
</span><br>
<span class="quotelev1">&gt; 5-port GigE SoHo switch, that connects my Pentium-III
</span><br>
<span class="quotelev1">&gt; toy cluster, just because it drops a few packages [per microsec]?
</span><br>
<span class="quotelev1">&gt; It looks so good, with all those fiercely blinking green LEDs.
</span><br>
<span class="quotelev1">&gt; Where else could I fool around with cluster setup and test
</span><br>
<span class="quotelev1">&gt; the OpenMPI new releases? :)
</span><br>
<span class="quotelev1">&gt; The production cluster is just too crowded for this,
</span><br>
<span class="quotelev1">&gt; maybe because it has a decent
</span><br>
<span class="quotelev1">&gt; HP GigE switch [IO] and Infiniband [MPI] ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; On Jul 10, 2012, at 10:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; I suspect it mostly reflects communication patterns. I don't know
</span><br>
<span class="quotelev1">&gt; anything about Saturne, but shared memory is a great deal faster than
</span><br>
<span class="quotelev1">&gt; TCP, so the more processes sharing a node the better. You may also be
</span><br>
<span class="quotelev1">&gt; hitting some natural boundary in your model - perhaps with 8
</span><br>
<span class="quotelev1">&gt; processes/node you wind up with more processes that cross the node
</span><br>
<span class="quotelev1">&gt; boundary, further increasing the communication requirement.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Do things continue to get worse if you use all 4 nodes with 6
</span><br>
<span class="quotelev1">&gt; processes/node?
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; Hi.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a
</span><br>
<span class="quotelev1">&gt; Debian 6.0 OS. This server is composed of
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores
</span><br>
<span class="quotelev1">&gt; per system board.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; The boards are linked with a local Gbits switch.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD
</span><br>
<span class="quotelev1">&gt; solver, I have configured the cluster
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom
</span><br>
<span class="quotelev1">&gt; and the 3 others cards. So this leads to
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled
</span><br>
<span class="quotelev1">&gt; with the openmpi 1.6 version.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time
</span><br>
<span class="quotelev1">&gt; is good and network traffic is not full.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores,
</span><br>
<span class="quotelev1">&gt; elapse time is 5 times the previous one.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; I have tested several configurations : binaries in local file
</span><br>
<span class="quotelev1">&gt; system or on a NFS. But results are the same.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; I have visited severals forums (in particular
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I
</span><br>
<span class="quotelev1">&gt; presently do not see where it is wrong !
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; Is it a problem in the configuration of PBS (I have installed it
</span><br>
<span class="quotelev1">&gt; from the deb packages), a subtile compilation options
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; of openMPI, or a bad network configuration ?
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; Regards.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; B. S.
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
