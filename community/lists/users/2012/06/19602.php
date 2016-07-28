<?
$subject_val = "[OMPI users] Naming MPI_Spawn children";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 00:02:07 2012" -->
<!-- isoreceived="20120618040207" -->
<!-- sent="Mon, 18 Jun 2012 04:01:51 +0000 (UTC)" -->
<!-- isosent="20120618040151" -->
<!-- name="Jaison Paul Mulerikkal" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="[OMPI users] Naming MPI_Spawn children" -->
<!-- id="loom.20120618T055805-855_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Naming MPI_Spawn children<br>
<strong>From:</strong> Jaison Paul Mulerikkal (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 00:01:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Reply:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>I'm running openmpi on Rackspace cloud over Internet using MPI_Spawn. IT means,
<br>
I run the parent on my PC and the children on Rackspace cloud machines.
<br>
Rackspace provides direct IP addresses of the machines (no NAT), that is why it
<br>
is possible. 
<br>
<p>Now, there is a communicator involving only the children and some communications
<br>
involve only communication between children (on Rackspace cloud, in this
<br>
scenario). When we conducted experiments, we experienced more than expected
<br>
delays in this operation - communication between children alone. 
<br>
<p>My assumption is that openMPI is looking at the direct IP addresses at the
<br>
hostfile and try to communicate between Rackspace children over Internet. What I
<br>
would want/expect is the Rackspace children communicate between themselves
<br>
internally, using the internal Rackspace hostnames. Rackspace provide internal
<br>
IP addresses. But if I use that in the hostfile at my home PC, the parent wont
<br>
be able to access the children (there is a communicator involving parent and
<br>
children).
<br>
<p>Can I anyway tell openMPI to look into the internal IP addresses of Rackspace
<br>
machines (another hostfile, may be) for the sub-group (communicator) involving
<br>
Rackspace children? In that case we will get performance improvement, I guess.
<br>
<p>Thanks in advance for your valuable suggestions.
<br>
<p>Jaison
<br>
Australian National University. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19601.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
<li><strong>Reply:</strong> <a href="19609.php">Ralph Castain: "Re: [OMPI users] Naming MPI_Spawn children"</a>
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
