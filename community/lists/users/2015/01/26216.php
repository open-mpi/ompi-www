<?
$subject_val = "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 17:13:13 2015" -->
<!-- isoreceived="20150119221313" -->
<!-- sent="Mon, 19 Jan 2015 17:13:12 -0500" -->
<!-- isosent="20150119221312" -->
<!-- name="Jonathan Eckstein" -->
<!-- email="jeckstei_at_[hidden]" -->
<!-- subject="[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?" -->
<!-- id="54BD8178.6040404_at_rci.rutgers.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?<br>
<strong>From:</strong> Jonathan Eckstein (<em>jeckstei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 17:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26215.php">Alexander Daryin: "[OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Reply:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPIers:
<br>
<p>I have been using MPI for many years, most recently Open MPI.  But I 
<br>
have just encountered the first situation in which it will be helpful to 
<br>
create communicators (for an unstructured sparse matrix algorithm).
<br>
<p>I have identified two ways I could create the communicators I need.
<br>
Where P denotes the number of MPI processors, Option A is:
<br>
&nbsp;&nbsp;&nbsp;1.  Exchange of messages between processors of adjacent rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[O(1) message rounds (one up, one down)]
<br>
&nbsp;&nbsp;&nbsp;2.  One scan operation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[O(log P) message rounds]
<br>
&nbsp;&nbsp;&nbsp;3.  One or two calls to MPI_COMM_SPLIT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Unknown complexity]
<br>
Option B is:
<br>
&nbsp;&nbsp;&nbsp;1.  Three scan operations (one in reverse direction)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[O(log P) message rounds + time to make reverse communicator]
<br>
&nbsp;&nbsp;&nbsp;2.  Each processor calls MPI_GROUP_RANGE_INCL and MPI_COMM_CREATE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at most twice
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Unknown complexity]
<br>
<p>All the groups/communicators I am creating are stride-1 ranges of 
<br>
contiguous processors from MPI_COMM_WORLD.  Some of them could overlap 
<br>
by one processor, hence the possible need to call MPI_COMM_SPLIT or 
<br>
MPI_COMM_CREATE twice per processor.
<br>
<p>Option A looks easier to code, but I wonder whether it will scale as 
<br>
well, because I am not sure about the complexity of MPI_COMM_SPLIT. 
<br>
What are the parallel message complexities of MPI_COMM_SPLIT and 
<br>
MPI_COMM_CREATE?  I poked around the web but could not find much on this 
<br>
topic.
<br>
<p>For option B, I will need to make a communicator that has the same 
<br>
processes as MPI_COMM_WORLD, but in reverse order.  This looks like it 
<br>
can be done easily with MPI_GROUP_RANGE_INCL with a stride of -1, but 
<br>
again I am not sure how much communication is required to set up the 
<br>
communicator -- I would guess O(log P) rounds of messages.
<br>
<p>Any advice or explanation you can offer would be much appreciated.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Professor Jonathan Eckstein
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rutgers University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26215.php">Alexander Daryin: "[OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Reply:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
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
