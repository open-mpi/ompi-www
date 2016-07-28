<?
$subject_val = "[OMPI users] Tuned Collective MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 08:48:25 2008" -->
<!-- isoreceived="20081003124825" -->
<!-- sent="Fri, 03 Oct 2008 08:48:21 -0400" -->
<!-- isosent="20081003124821" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] Tuned Collective MCA params" -->
<!-- id="48E61495.1030302_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Tuned Collective MCA params<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 08:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6844.php">Ralph Castain: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6842.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Reply:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I am currently profiling a simple case where I replace multiple S/R 
<br>
calls with Allgather calls and it would _seem_ the simple S/R calls are 
<br>
faster. Now, *before* I come to any conclusion on this, one of the 
<br>
pieces I am missing is more details on how /if/when the tuned coll MCA 
<br>
is selected. In other words, can I assume the tuned versions are used by 
<br>
default? I skimmed through the well documented source code but before I 
<br>
can even start to analyze the replacement's impact (in a small cluster), 
<br>
I need to know how and when the tuned coll MCA is used/selected.
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6844.php">Ralph Castain: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6842.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Reply:</strong> <a href="6847.php">George Bosilca: "Re: [OMPI users] Tuned Collective MCA params"</a>
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
