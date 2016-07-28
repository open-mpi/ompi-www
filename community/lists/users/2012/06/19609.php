<?
$subject_val = "Re: [OMPI users] Naming MPI_Spawn children";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:10:42 2012" -->
<!-- isoreceived="20120618141042" -->
<!-- sent="Mon, 18 Jun 2012 08:10:35 -0600" -->
<!-- isosent="20120618141035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Naming MPI_Spawn children" -->
<!-- id="D02DD5EB-9638-4C9F-BF72-7BDE6F5C6B0F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20120618T055805-855_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Naming MPI_Spawn children<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>In reply to:</strong> <a href="19602.php">Jaison Paul Mulerikkal: "[OMPI users] Naming MPI_Spawn children"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you could resolve this by specifying the interfaces to use in the order you want them checked. In other words, you might try this:
<br>
<p>-mca btl_tcp_if_include eth1,eth0
<br>
<p>where eth1 is the NIC connecting the internal subnet in the cloud, and eth0 is the NIC connecting them to the Internet. I believe OMPI will check comm in that order, meaning that eth1 will get picked first.
<br>
<p>Of course, that presumes something about the interfaces on your parent machine. It doesn't matter if eth1 doesn't exist - what matters is that one of those names is the right one to reach your cloud. If so, then this should help resolve your problem.
<br>
<p><p>On Jun 17, 2012, at 10:01 PM, Jaison Paul Mulerikkal wrote:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running openmpi on Rackspace cloud over Internet using MPI_Spawn. IT means,
</span><br>
<span class="quotelev1">&gt; I run the parent on my PC and the children on Rackspace cloud machines.
</span><br>
<span class="quotelev1">&gt; Rackspace provides direct IP addresses of the machines (no NAT), that is why it
</span><br>
<span class="quotelev1">&gt; is possible. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, there is a communicator involving only the children and some communications
</span><br>
<span class="quotelev1">&gt; involve only communication between children (on Rackspace cloud, in this
</span><br>
<span class="quotelev1">&gt; scenario). When we conducted experiments, we experienced more than expected
</span><br>
<span class="quotelev1">&gt; delays in this operation - communication between children alone. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My assumption is that openMPI is looking at the direct IP addresses at the
</span><br>
<span class="quotelev1">&gt; hostfile and try to communicate between Rackspace children over Internet. What I
</span><br>
<span class="quotelev1">&gt; would want/expect is the Rackspace children communicate between themselves
</span><br>
<span class="quotelev1">&gt; internally, using the internal Rackspace hostnames. Rackspace provide internal
</span><br>
<span class="quotelev1">&gt; IP addresses. But if I use that in the hostfile at my home PC, the parent wont
</span><br>
<span class="quotelev1">&gt; be able to access the children (there is a communicator involving parent and
</span><br>
<span class="quotelev1">&gt; children).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I anyway tell openMPI to look into the internal IP addresses of Rackspace
</span><br>
<span class="quotelev1">&gt; machines (another hostfile, may be) for the sub-group (communicator) involving
</span><br>
<span class="quotelev1">&gt; Rackspace children? In that case we will get performance improvement, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your valuable suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison
</span><br>
<span class="quotelev1">&gt; Australian National University. 
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
<li><strong>Next message:</strong> <a href="19610.php">Dmitry N. Mikushin: "[OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19608.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<li><strong>In reply to:</strong> <a href="19602.php">Jaison Paul Mulerikkal: "[OMPI users] Naming MPI_Spawn children"</a>
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
