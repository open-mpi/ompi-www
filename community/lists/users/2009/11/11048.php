<?
$subject_val = "[OMPI users] using specific algorithm for collective communication, and knowing the root cpu?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 08:53:07 2009" -->
<!-- isoreceived="20091102135307" -->
<!-- sent="Mon, 02 Nov 2009 14:52:23 +0100" -->
<!-- isosent="20091102135223" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] using specific algorithm for collective communication, and knowing the root cpu?" -->
<!-- id="4AEEE417.7090105_at_markomanolis.com" -->
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
<strong>Subject:</strong> [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 08:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11049.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<li><strong>Reply:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I would like to ask about collective communication. With debug mode 
<br>
enabled, I can see many info during the execution which algorithm is 
<br>
used etc. But my question is that I would like to use a specific 
<br>
algorithm (the simplest I suppose). I am profiling some applications and 
<br>
I want to simulate them with another program so I must be able to know 
<br>
for example what the mpi_allreduce is doing. I saw many algorithms that 
<br>
depend on the message size and the number of processors, so I would like 
<br>
to ask:
<br>
<p>1) what is the way to say at open mpi to use a simple algorithm for 
<br>
allreduce (is there any way to say to use the simplest algorithm for all 
<br>
the collective communication?). Basically I would like to know the root 
<br>
cpu for every collective communication. What are the disadvantages for 
<br>
demanding the simplest algorithm?
<br>
<p>2) Is there any overhead because I installed open mpi with debug mode 
<br>
even if I just run a program without any flag with --mca?
<br>
<p>3) How you could describe allreduce by words? Can we say that the root 
<br>
cpu does reduce and then broadcast? I mean is that right for your 
<br>
implementation? I saw that it depends on the algorithm which cpu is the 
<br>
root, so is it possible to use an algorithm that I will know every time 
<br>
that cpu with rank 0 is the root?
<br>
<p>Thanks a lot,
<br>
George
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11049.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<li><strong>Reply:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
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
