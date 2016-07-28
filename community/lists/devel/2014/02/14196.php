<?
$subject_val = "[OMPI devel] MPI_Comm_spawn under Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 10:56:59 2014" -->
<!-- isoreceived="20140220155659" -->
<!-- sent="Thu, 20 Feb 2014 16:56:54 +0100" -->
<!-- isosent="20140220155654" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn under Torque" -->
<!-- id="007D44A2-B3F1-4AAE-ACAB-8FF2D3BE6B28_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_spawn under Torque<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 10:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14197.php">Brian Barrett: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Reply:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I am having problem using MPI_Comm_spawn under torque. It doesn't work when spawning more than 12 processes on various nodes. To be more precise, &quot;sometimes&quot; it works, and &quot;sometimes&quot; it doesn't!
<br>
<p>Here is my case. I obtain 5 nodes, 3 cores per node and my $PBS_NODEFILE looks like below.
<br>
<p>node1
<br>
node1
<br>
node1
<br>
node2
<br>
node2
<br>
node2
<br>
node3
<br>
node3
<br>
node3
<br>
node4
<br>
node4
<br>
node4
<br>
node5
<br>
node5
<br>
node5
<br>
<p>I started a hello program (which just spawns itself and of course, the children don't spawn), with 
<br>
<p>mpiexec -np 3 ./hello
<br>
<p>Spawning 3 more processes (on node 2) - works!
<br>
spawning 6 more processes (node 2 and 3) - works!
<br>
spawning 9 processes (node 2,3,4) - &quot;sometimes&quot; OK, &quot;sometimes&quot; not!
<br>
spawning 12 processes (node 2,3,4,5) - &quot;mostly&quot; not!
<br>
<p>I ideally want to spawn about 32 processes with large number of nodes, but this is at the moment impossible. I have attached my hello program to this email. 
<br>
<p>I will be happy to provide any more info or verbose outputs if you could please tell me what exactly you would like to see.
<br>
<p>Best,
<br>
Suraj
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14196/hello.c">hello.c</a>
</ul>
<!-- attachment="hello.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14197.php">Brian Barrett: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Reply:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
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
