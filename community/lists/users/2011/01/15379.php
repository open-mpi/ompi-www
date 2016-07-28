<?
$subject_val = "[OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 10:11:35 2011" -->
<!-- isoreceived="20110120151135" -->
<!-- sent="Thu, 20 Jan 2011 16:11:29 +0100" -->
<!-- isosent="20110120151129" -->
<!-- name="Olivier SANNIER" -->
<!-- email="Olivier.SANNIER_at_[hidden]" -->
<!-- subject="[OMPI users] Help with some fundamentals" -->
<!-- id="CACA1C4D94C3374F81C530763A09DBF036A85DFAA9_at_ex-adg-01.addinggroup.lan" -->
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
<strong>Subject:</strong> [OMPI users] Help with some fundamentals<br>
<strong>From:</strong> Olivier SANNIER (<em>Olivier.SANNIER_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 10:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15378.php">Bowen Zhou: "Re: [OMPI users] Concerning infiniband support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am currently working on a Win32 program that makes some intensive calculation, and is already written to be multithreaded. As a result, it uses all the available cores on the PC it runs on.
<br>
The basic behavior is for the user to open a model, click the &quot;start&quot; button, then the threads are spawned, and once all is finished, control is given back to the user.
<br>
While this works great, we have found that for larger models, the computation time is limited by the number of cores as the pool of tasks that could run in parallel is not empty.
<br>
As a result, we are investigating the possibility to use grid computing to somehow multiply the number of available cores.
<br>
This, of course, has technical challenges and reading documentation on various websites led me to the OpenMPI one and to this list.
<br>
I'm not sure it's the appropriate place to ask my questions, but should it not be the case, please tell me what an appropriate place might be.
<br>
<p>I understand that MPI is a framework that would facilitate the communication between the user's computer and the nodes that perform the distributed tasks.
<br>
What I have a hard time grasping are these :
<br>
<p>What communication layer is used? How do I choose it?
<br>
<p>What is the behavior in case a node dies or becomes unreachable?
<br>
<p>What makes any given machine become a node available for tasks?
<br>
<p>Is there some sort of load balancing ?
<br>
<p>Is there a monitoring tool that would give me indications of the status and health of the nodes?
<br>
<p>How does the &quot;MPI enabled&quot; code gets transferred to the nodes? If I understand things correctly, I would have to write a separate command line exe that takes care of the tasks and this would be the exe that gets sent over to node.
<br>
<p>I'm quite sure all these are trivial questions for those with more experience, but I'm having a hard time finding resources that would answer those.
<br>
<p>Thanks in advance for your help
<br>
Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15378.php">Bowen Zhou: "Re: [OMPI users] Concerning infiniband support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
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
