<?
$subject_val = "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 15:22:30 2015" -->
<!-- isoreceived="20150120202230" -->
<!-- sent="Tue, 20 Jan 2015 14:22:34 -0600" -->
<!-- isosent="20150120202234" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?" -->
<!-- id="54BEB90A.6000102_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54BD8178.6040404_at_rci.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-20 15:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Reply:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the communication operations occurring in the best case 
<br>
scenario in Open MPI right now:
<br>
<p>Comm_create:
<br>
&nbsp;&nbsp;&nbsp;- Communicator ID allocation: 2 Allreduce operations per round of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;negotiations
<br>
&nbsp;&nbsp;&nbsp;- 1 Allreduce operation for 'activating' the communicator
<br>
<p>Comm_split:
<br>
&nbsp;&nbsp;&nbsp;- 1 Allgather operation for collecting all color keys
<br>
&nbsp;&nbsp;&nbsp;- Communicator ID allocation: 2 Allreduce operations per round of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;negotiations
<br>
&nbsp;&nbsp;&nbsp;- 1 Allreduce operation for 'activating' the communicator
<br>
<p>As the description above suggests, you might need more than one round 
<br>
for the comunicator id allocation, depending on the history of the 
<br>
application and which IDs have already been used.
<br>
<p>The details for how the operations are implemented can vary. We could 
<br>
assume however a binary tree for the reduce and the broadcast portion of 
<br>
the Allreduce operation, each being O(log P). For Allgather we could a 
<br>
combination of a linear gather (O(P)) and a binary tree broadcast (O(log 
<br>
P)).
<br>
<p>So as of today, Comm_split is more expensive than Comm_create.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 1/19/2015 4:13 PM, Jonathan Eckstein wrote:
<br>
<span class="quotelev1">&gt; Dear Open MPIers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using MPI for many years, most recently Open MPI.  But I
</span><br>
<span class="quotelev1">&gt; have just encountered the first situation in which it will be helpful to
</span><br>
<span class="quotelev1">&gt; create communicators (for an unstructured sparse matrix algorithm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have identified two ways I could create the communicators I need.
</span><br>
<span class="quotelev1">&gt; Where P denotes the number of MPI processors, Option A is:
</span><br>
<span class="quotelev1">&gt;    1.  Exchange of messages between processors of adjacent rank
</span><br>
<span class="quotelev1">&gt;        [O(1) message rounds (one up, one down)]
</span><br>
<span class="quotelev1">&gt;    2.  One scan operation
</span><br>
<span class="quotelev1">&gt;        [O(log P) message rounds]
</span><br>
<span class="quotelev1">&gt;    3.  One or two calls to MPI_COMM_SPLIT
</span><br>
<span class="quotelev1">&gt;        [Unknown complexity]
</span><br>
<span class="quotelev1">&gt; Option B is:
</span><br>
<span class="quotelev1">&gt;    1.  Three scan operations (one in reverse direction)
</span><br>
<span class="quotelev1">&gt;        [O(log P) message rounds + time to make reverse communicator]
</span><br>
<span class="quotelev1">&gt;    2.  Each processor calls MPI_GROUP_RANGE_INCL and MPI_COMM_CREATE
</span><br>
<span class="quotelev1">&gt;        at most twice
</span><br>
<span class="quotelev1">&gt;        [Unknown complexity]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the groups/communicators I am creating are stride-1 ranges of
</span><br>
<span class="quotelev1">&gt; contiguous processors from MPI_COMM_WORLD.  Some of them could overlap
</span><br>
<span class="quotelev1">&gt; by one processor, hence the possible need to call MPI_COMM_SPLIT or
</span><br>
<span class="quotelev1">&gt; MPI_COMM_CREATE twice per processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option A looks easier to code, but I wonder whether it will scale as
</span><br>
<span class="quotelev1">&gt; well, because I am not sure about the complexity of MPI_COMM_SPLIT. What
</span><br>
<span class="quotelev1">&gt; are the parallel message complexities of MPI_COMM_SPLIT and
</span><br>
<span class="quotelev1">&gt; MPI_COMM_CREATE?  I poked around the web but could not find much on this
</span><br>
<span class="quotelev1">&gt; topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For option B, I will need to make a communicator that has the same
</span><br>
<span class="quotelev1">&gt; processes as MPI_COMM_WORLD, but in reverse order.  This looks like it
</span><br>
<span class="quotelev1">&gt; can be done easily with MPI_GROUP_RANGE_INCL with a stride of -1, but
</span><br>
<span class="quotelev1">&gt; again I am not sure how much communication is required to set up the
</span><br>
<span class="quotelev1">&gt; communicator -- I would guess O(log P) rounds of messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice or explanation you can offer would be much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Professor Jonathan Eckstein
</span><br>
<span class="quotelev1">&gt;     Rutgers University
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26216.php">http://www.open-mpi.org/community/lists/users/2015/01/26216.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Reply:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
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
