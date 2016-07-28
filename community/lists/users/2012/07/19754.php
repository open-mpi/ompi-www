<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 18:51:10 2012" -->
<!-- isoreceived="20120710225110" -->
<!-- sent="Tue, 10 Jul 2012 18:51:01 -0400" -->
<!-- isosent="20120710225101" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="4FFCB1D5.8000804_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37B64486-3B73-4EA0-8664-232421313DAE_at_cisco.com" -->
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
<strong>Date:</strong> 2012-07-10 18:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19755.php">Siegmar Gross: "[OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/10/2012 05:31 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; +1.  Also, not all Ethernet switches are created equal --
</span><br>
<span class="quotelev1">&gt; particularly commodity 1GB Ethernet switches.
</span><br>
<span class="quotelev1">&gt; I've seen plenty of crappy Ethernet switches rated for 1GB
</span><br>
<span class="quotelev1">&gt; that could not reach that speed when under load.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you perhaps belittling my dear $43 [brand undisclosed]
<br>
5-port GigE SoHo switch, that connects my Pentium-III
<br>
toy cluster, just because it drops a few packages [per microsec]?
<br>
It looks so good, with all those fiercely blinking green LEDs.
<br>
Where else could I fool around with cluster setup and test
<br>
the OpenMPI new releases? :)
<br>
The production cluster is just too crowded for this,
<br>
maybe because it has a decent
<br>
HP GigE switch [IO] and Infiniband [MPI] ...
<br>
<p>Gus
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2012, at 10:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect it mostly reflects communication patterns. I don't know anything about Saturne, but shared memory is a great deal faster than TCP, so the more processes sharing a node the better. You may also be hitting some natural boundary in your model - perhaps with 8 processes/node you wind up with more processes that cross the node boundary, further increasing the communication requirement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do things continue to get worse if you use all 4 nodes with 6 processes/node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores per system board.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The boards are linked with a local Gbits switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD solver, I have configured the cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom and the 3 others cards. So this leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time is good and network traffic is not full.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tested several configurations : binaries in local file system or on a NFS. But results are the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I presently do not see where it is wrong !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of openMPI, or a bad network configuration ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; B. S.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19755.php">Siegmar Gross: "[OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
