<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 21:20:52 2012" -->
<!-- isoreceived="20120712012052" -->
<!-- sent="Thu, 12 Jul 2012 03:20:37 +0200" -->
<!-- isosent="20120712012037" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="1342056037.15125.23.camel_at_stardock" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.19.1341936003.8149.users_at_open-mpi.org" -->
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
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 21:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="19748.php">Dugenoux Albert: "[OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of 
</span><br>
<span class="quotelev1">&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores?per system board.
</span><br>
<span class="quotelev1">&gt; The boards are linked with a local Gbits switch. 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; In order to?parallelize the software Code Saturne, which is a CFD solver, I have configured?the cluster
</span><br>
<span class="quotelev1">&gt; such that there are?a pbs server/mom on 1 system board and?3 mom and the?3 others cards. So this leads to 
</span><br>
<span class="quotelev1">&gt; 48 cores dispatched on?4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; When I launch a simulation using 2 nodes?with 12 cores,?elapse time is good and network traffic is not full.
</span><br>
<span class="quotelev1">&gt; But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
</span><br>
<span class="quotelev1">&gt; I?both cases, I use 24 cores and network seems not to be satured. 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; I have tested several configurations : binaries in local file system or?on a NFS. But results are the same.
</span><br>
<span class="quotelev1">&gt; I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev1">&gt; and read lots of threads, but as I am not an expert at clusters, I presently do not see where it?is wrong !
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
</span><br>
<span class="quotelev1">&gt; of openMPI, or a bad?network configuration??
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; B. S.
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<p>Hello,
<br>
<p>I am a Code_Saturne developer, so I can confirm a few comments from
<br>
others on this list:
<br>
<p>- Most of the communication of the code is latency-bound: we use
<br>
iterative linear solvers, which make a heavy use of MPI_Allreduce, with
<br>
only 1 to 3 double precision values per reduction. I do not know if
<br>
modern &quot;fast&quot; Ethernet variants on a small number of switches make a big
<br>
difference, but tests made a few years ago on a Cluster using a a SCALI
<br>
network (fast/low latency at the time) led to the conclusion that the
<br>
code performance was divided by 2 on an Ethernet network. These tests
<br>
need to be updated, but your results seem consistent.
<br>
<p>- Actually, on an Infiniband cluster using Open MPI 1.4.3 (such as the
<br>
one described here: <a href="http://i.top500.org/system/177030">http://i.top500.org/system/177030</a>), performance
<br>
tends to be better in some cases when spreading a constant number of
<br>
cores on more nodes, as the code is quite memory-bandwidth intensive.
<br>
Depending on the data size on each node, this may be significant or lead
<br>
to only minor performance differences.
<br>
The network topology may also affect performance (tests using SLURMS
<br>
--switches options confirms this), as well as binding processes to
<br>
cores.
<br>
<p>- In recent years, the code has been used and tested mainly on
<br>
workstations (shared memory), Infiniband clusters, or IBM Blue Gene (L,
<br>
P, and Q) or a Cray XT (5 and 6) then XE-6 machine. I am interested in
<br>
trying to improve or at least try to improve performance on Ethernet
<br>
clusters, and I may have a few suggestions for options you can test, but
<br>
this conversation should probably move to the Code_Saturne forum
<br>
(<a href="http://code-saturne.org">http://code-saturne.org</a>), as we will go into some options of our linear
<br>
solvers which are specific to that code, not to Open MPI.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;Yvan Fournier
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19759.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="19748.php">Dugenoux Albert: "[OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19779.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
