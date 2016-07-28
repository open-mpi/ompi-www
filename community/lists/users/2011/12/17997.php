<?
$subject_val = "[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 18 18:43:24 2011" -->
<!-- isoreceived="20111218234324" -->
<!-- sent="Sun, 18 Dec 2011 23:43:07 +0000 (UTC)" -->
<!-- isosent="20111218234307" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh" -->
<!-- id="loom.20111219T003147-733_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh<br>
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-18 18:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Previous message:</strong> <a href="17996.php">Mudassar Majeed: "[OMPI users] OpenMPI and valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have reported this before. We are still not able to do it, fully.
<br>
<p>However partially successful, now. We have used a machine with static IP address
<br>
and modified the router settings by opening all ssh ports. Master runs on this
<br>
machine and the slaves on EC2. 
<br>
<p>Now we can run the &quot;Hello world&quot; over internet using ssh. It starts MPI
<br>
executables in EC2 (we can see on 'top') and print back &quot;hello&quot; to our
<br>
home/master machine. 
<br>
<p>But send/recv doesnt work. send/recv hang between master(home PC)&lt;-&gt;slave(EC2),
<br>
both ways. 
<br>
<p>What are the port settings for send/recv? Do we need to modify anything?
<br>
<p>Any help is very much appreciated. 
<br>
<p>Jaison
<br>
Australian National Uni
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Previous message:</strong> <a href="17996.php">Mudassar Majeed: "[OMPI users] OpenMPI and valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
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
