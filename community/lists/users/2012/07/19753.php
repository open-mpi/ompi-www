<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 18:06:26 2012" -->
<!-- isoreceived="20120710220626" -->
<!-- sent="Tue, 10 Jul 2012 18:06:16 -0400" -->
<!-- isosent="20120710220616" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="4FFCA758.9020409_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FFC888D.7090804_at_atmos.washington.edu" -->
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
<strong>Date:</strong> 2012-07-10 18:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/10/2012 03:54 PM, David Warren wrote:
<br>
<span class="quotelev1">&gt; Your problem may not be related to bandwidth. It may be latency or
</span><br>
<span class="quotelev1">&gt; division of the problem. We found significant improvements running wrf
</span><br>
<span class="quotelev1">&gt; and other atmospheric code (CFD) over IB. The problem was not so much
</span><br>
<span class="quotelev1">&gt; the amount of data communicated, but how long it takes to send it. Also,
</span><br>
<span class="quotelev1">&gt; is your model big enough to split up as much as you are trying? If there
</span><br>
<span class="quotelev1">&gt; is not enough work for each core to do between edge exchanges, you will
</span><br>
<span class="quotelev1">&gt; spend all of your time spinning waiting for the network. If you are
</span><br>
<span class="quotelev1">&gt; running a demo benchmark it is likely too small for the number of
</span><br>
<span class="quotelev1">&gt; processors. At least that is what we find with most weather model demo
</span><br>
<span class="quotelev1">&gt; problems. One other thing to look at is how it is being split up.
</span><br>
<span class="quotelev1">&gt; Depending on what the algorithm does, you may want more x points, more y
</span><br>
<span class="quotelev1">&gt; points or completely even divisions. We found that we can significantly
</span><br>
<span class="quotelev1">&gt; speed up wrf for our particular domain by not lett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/10/12 08:48, Dugenoux Albert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your answer.You are right.
</span><br>
<span class="quotelev2">&gt;&gt; I've tried upon 4 nodes with 6 processes and things are worst.
</span><br>
<span class="quotelev2">&gt;&gt; So do you suggest that unique thing to do is to order an infiniband
</span><br>
<span class="quotelev2">&gt;&gt; switch or is there a possibility to enhance
</span><br>
<span class="quotelev2">&gt;&gt; something by tuning mca parameters ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *De :* Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *&#192; :* Dugenoux Albert &lt;dugenouxa_at_[hidden]&gt;; Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Envoy&#233; le :* Mardi 10 juillet 2012 16h47
</span><br>
<span class="quotelev2">&gt;&gt; *Objet :* Re: [OMPI users] Bad parallel scaling using Code Saturne
</span><br>
<span class="quotelev2">&gt;&gt; with openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect it mostly reflects communication patterns. I don't know
</span><br>
<span class="quotelev2">&gt;&gt; anything about Saturne, but shared memory is a great deal faster than
</span><br>
<span class="quotelev2">&gt;&gt; TCP, so the more processes sharing a node the better. You may also be
</span><br>
<span class="quotelev2">&gt;&gt; hitting some natural boundary in your model - perhaps with 8
</span><br>
<span class="quotelev2">&gt;&gt; processes/node you wind up with more processes that cross the node
</span><br>
<span class="quotelev2">&gt;&gt; boundary, further increasing the communication requirement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do things continue to get worse if you use all 4 nodes with 6
</span><br>
<span class="quotelev2">&gt;&gt; processes/node?
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
<span class="quotelev3">&gt;&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debian 6.0 OS. This server is composed of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system board.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The boards are linked with a local Gbits switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solver, I have configured the cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 3 others cards. So this leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the openmpi 1.6 version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is good and network traffic is not full.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; elapse time is 5 times the previous one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tested several configurations : binaries in local file system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or on a NFS. But results are the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have visited severals forums (in particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; presently do not see where it is wrong !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it a problem in the configuration of PBS (I have installed it from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the deb packages), a subtile compilation options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of openMPI, or a bad network configuration ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards.
</span><br>
<p>Hi Albert
<br>
<p>1) Have you tried to bind processes to cores:
<br>
<p>mpiexec -bycore -bind-to-core -np ...
<br>
<p>Sometimes it improves performance.
<br>
<p>2) Packing as much work as possible in the fewest nodes
<br>
[and reducing MPI communication to mostly shared memory]
<br>
always helps, as Ralph said.
<br>
<p>3) Infinband low latency and bandwith helps, as David said.
<br>
It will cost you a switch plus a HCA card adapter for each node.
<br>
This can give you an idea of prices:
<br>
<a href="http://www.colfaxdirect.com/store/pc/viewCategories.asp?idCategory=7">http://www.colfaxdirect.com/store/pc/viewCategories.asp?idCategory=7</a>
<br>
<a href="http://www.colfaxdirect.com/store/pc/viewCategories.asp?idCategory=6">http://www.colfaxdirect.com/store/pc/viewCategories.asp?idCategory=6</a>
<br>
<p>4) Not all code scales well with the number of processors.
<br>
The norm is to be sub-linear, even when the problem is large enough
<br>
to avoid the 'too much communication per computation' situation that
<br>
David referred to.
<br>
Some have humps and bumps and sweet spots in the scaling curve,
<br>
which may depend on the specifics of domain dimensions, etc.
<br>
<p>5) However, your CFD code may have some parameters/knobs to
<br>
control the way the mesh is decomposed, and how the subdomains
<br>
are distributed across the processors,
<br>
which may help you find the load balance for
<br>
each problem type and size. This comes part by trial-and-error,
<br>
part by educated guesses.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>PS - Are your processors Intel [Nehalem or later]?
<br>
Is hyperthreading turned on [on BIOS perhaps]?
<br>
This would give you 24 virtual cores per node.
<br>
With hyperthreading turned on
<br>
you may need to adjust your $TORQUE_PBS/server_priv/nodes
<br>
file to read something like:
<br>
node01 np=24
<br>
instead of np=12, and then restart the pbs_server.
<br>
It may be worth testing the code both ways,
<br>
as sometimes hyperthreading sucks,
<br>
sometimes it shines, depending on the code.
<br>
[Or better, it may not give you
<br>
twice the speed, but may give you 20-30% more speed,
<br>
which is not negligible.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
