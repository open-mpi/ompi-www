<?
$subject_val = "[OMPI users] How to show outputs from MPI program that runs on a cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 19:28:28 2010" -->
<!-- isoreceived="20100519232828" -->
<!-- sent="Wed, 19 May 2010 19:28:21 -0400" -->
<!-- isosent="20100519232821" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="[OMPI users] How to show outputs from MPI program that runs on a cluster?" -->
<!-- id="60A64243-791E-4A7D-8FCD-94F5B4BFB728_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to show outputs from MPI program that runs on a cluster?<br>
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 19:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Previous message:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Reply:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am wondering if there is a way to run a particular process among multiple processes on the console of a linux cluster.
<br>
<p>I want to see the screen output (standard output) of a particular process (using a particular ID of a process) on the console screen while the MPI program is running.  I think that if I run a MPI program on a linux cluster using Sun Grid Engine, the particular process that prints out to standard output could run on the console or computing node.   And, it would be hard to see screen output of the particular process.  Is there a way to to set one process aside and to run it on the console in Sun Grid Engine?
<br>
<p>When I run the MPI program on my desktop with quad cores, I can set aside one process using an ID to print information that I need.  I do not know how I could do that in much larger scale like using Sun Grid Engine.  I could let one process print out in a file and then I could see it.  I do not know how I could let one process to print out on the console screen by setting it to run on the console using Sun Grid Engine or any other similar thing such as PBS.  I doubt that a cluster would allow jobs to run on the console because then others users would have to be in trouble in submitting jobs.  If this is the case, there seem no way to print out on the console.   Then, do I have to have a separate (non-MPI) program that can communicate with MPI program using TCP/IP by running the separate program on the master node of a cluster?  This separate non-MPI program may then communicate sporadically with the MPI program.  I do not know if this is a general approach or a peculiar way.
<br>
<p>I will appreciate any of input.
<br>
<p>Thank you,
<br>
<p>Sang Chul
<br>
<p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Previous message:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Reply:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
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
