<?
$subject_val = "[OMPI users] mpirun only works when -np &lt;4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 11:30:26 2009" -->
<!-- isoreceived="20091208163026" -->
<!-- sent="Tue, 8 Dec 2009 08:30:16 -0800" -->
<!-- isosent="20091208163016" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun only works when -np &amp;lt;4" -->
<!-- id="A948C182-06DF-4CCB-88DC-955C95C18F59_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun only works when -np &lt;4<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 11:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11453.php">Number Cruncher: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All, 
<br>
<p>I am having a problem running a couple of programs, ABySS and MrBayes in parallel. I am using Linux Ubuntu 9.10 with a dual socket (Xeon 5520) machine. There are 8 physical cores, or 16 with hyperthreading enabled. 
<br>
<p>I use openMPI version 1.3.4, plus a few other packages downloaded via &quot;apt-get install &lt;program name&gt;&quot;
<br>
<p>1st of all, let me say that when I specify that -np is less than 4 processors (1, 2, or 3), both programs seem to work as expected. Also, the non-mpi version of each of them works fine. Thus, I am pretty sure that this is a problem with MPI rather that with the program code or something else.  
<br>
<p>What happens is simply that the program hangs.. There are no error messages, and there is no clue from anything else (system working fine otherwise- no RAM issues, etc). It does not hang at the same place everytime, sometimes in the very beginning, sometime near the middle..  
<br>
<p>Could this an issue with hyperthreading? A conflict with something?  I can give you all more info if that would be helpful in troubleshooting. I'm not sure if there are any diagnostics for mpirun, so that would be helpful to know about if there were.
<br>
<p>Thanks. Matt
<br>
_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11453.php">Number Cruncher: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
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
