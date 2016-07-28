<?
$subject_val = "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 16:47:51 2015" -->
<!-- isoreceived="20150120214751" -->
<!-- sent="Tue, 20 Jan 2015 16:47:49 -0500" -->
<!-- isosent="20150120214749" -->
<!-- name="Jonathan Eckstein" -->
<!-- email="jeckstei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?" -->
<!-- id="54BECD05.9030109_at_rci.rutgers.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54BEB90A.6000102_at_cs.uh.edu" -->
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
<strong>From:</strong> Jonathan Eckstein (<em>jeckstei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-20 16:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks very much, Edgar.  I will definitely go with mpi_comm_create, 
<br>
then.  I will need two extra scans to get set up for those operations, 
<br>
but that sounds much better than an Allgather (after some reflection, I 
<br>
was guessing that you would be doing an Allgather to organize the color 
<br>
keys).
<br>
<p>I will be calling MPI_Comm_create simultaneously across all processors 
<br>
in MPI_COMM_WORLD, but with the group arguments set up in such a way 
<br>
that I make multiple disjoint sub-communicators in the process.  I'd 
<br>
appreciate it if you'd let me know if that's not OK to do.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks again!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jonathan
<br>
<p><p>On 1/20/2015 3:22 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Here are the communication operations occurring in the best case
</span><br>
<span class="quotelev1">&gt; scenario in Open MPI right now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comm_create:
</span><br>
<span class="quotelev1">&gt;    - Communicator ID allocation: 2 Allreduce operations per round of
</span><br>
<span class="quotelev1">&gt;      negotiations
</span><br>
<span class="quotelev1">&gt;    - 1 Allreduce operation for 'activating' the communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comm_split:
</span><br>
<span class="quotelev1">&gt;    - 1 Allgather operation for collecting all color keys
</span><br>
<span class="quotelev1">&gt;    - Communicator ID allocation: 2 Allreduce operations per round of
</span><br>
<span class="quotelev1">&gt;      negotiations
</span><br>
<span class="quotelev1">&gt;    - 1 Allreduce operation for 'activating' the communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the description above suggests, you might need more than one round
</span><br>
<span class="quotelev1">&gt; for the comunicator id allocation, depending on the history of the
</span><br>
<span class="quotelev1">&gt; application and which IDs have already been used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The details for how the operations are implemented can vary. We could
</span><br>
<span class="quotelev1">&gt; assume however a binary tree for the reduce and the broadcast portion of
</span><br>
<span class="quotelev1">&gt; the Allreduce operation, each being O(log P). For Allgather we could a
</span><br>
<span class="quotelev1">&gt; combination of a linear gather (O(P)) and a binary tree broadcast (O(log
</span><br>
<span class="quotelev1">&gt; P)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So as of today, Comm_split is more expensive than Comm_create.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/19/2015 4:13 PM, Jonathan Eckstein wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPIers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been using MPI for many years, most recently Open MPI.  But I
</span><br>
<span class="quotelev2">&gt;&gt; have just encountered the first situation in which it will be helpful to
</span><br>
<span class="quotelev2">&gt;&gt; create communicators (for an unstructured sparse matrix algorithm).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have identified two ways I could create the communicators I need.
</span><br>
<span class="quotelev2">&gt;&gt; Where P denotes the number of MPI processors, Option A is:
</span><br>
<span class="quotelev2">&gt;&gt;    1.  Exchange of messages between processors of adjacent rank
</span><br>
<span class="quotelev2">&gt;&gt;        [O(1) message rounds (one up, one down)]
</span><br>
<span class="quotelev2">&gt;&gt;    2.  One scan operation
</span><br>
<span class="quotelev2">&gt;&gt;        [O(log P) message rounds]
</span><br>
<span class="quotelev2">&gt;&gt;    3.  One or two calls to MPI_COMM_SPLIT
</span><br>
<span class="quotelev2">&gt;&gt;        [Unknown complexity]
</span><br>
<span class="quotelev2">&gt;&gt; Option B is:
</span><br>
<span class="quotelev2">&gt;&gt;    1.  Three scan operations (one in reverse direction)
</span><br>
<span class="quotelev2">&gt;&gt;        [O(log P) message rounds + time to make reverse communicator]
</span><br>
<span class="quotelev2">&gt;&gt;    2.  Each processor calls MPI_GROUP_RANGE_INCL and MPI_COMM_CREATE
</span><br>
<span class="quotelev2">&gt;&gt;        at most twice
</span><br>
<span class="quotelev2">&gt;&gt;        [Unknown complexity]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All the groups/communicators I am creating are stride-1 ranges of
</span><br>
<span class="quotelev2">&gt;&gt; contiguous processors from MPI_COMM_WORLD.  Some of them could overlap
</span><br>
<span class="quotelev2">&gt;&gt; by one processor, hence the possible need to call MPI_COMM_SPLIT or
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_CREATE twice per processor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option A looks easier to code, but I wonder whether it will scale as
</span><br>
<span class="quotelev2">&gt;&gt; well, because I am not sure about the complexity of MPI_COMM_SPLIT. What
</span><br>
<span class="quotelev2">&gt;&gt; are the parallel message complexities of MPI_COMM_SPLIT and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_CREATE?  I poked around the web but could not find much on this
</span><br>
<span class="quotelev2">&gt;&gt; topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For option B, I will need to make a communicator that has the same
</span><br>
<span class="quotelev2">&gt;&gt; processes as MPI_COMM_WORLD, but in reverse order.  This looks like it
</span><br>
<span class="quotelev2">&gt;&gt; can be done easily with MPI_GROUP_RANGE_INCL with a stride of -1, but
</span><br>
<span class="quotelev2">&gt;&gt; again I am not sure how much communication is required to set up the
</span><br>
<span class="quotelev2">&gt;&gt; communicator -- I would guess O(log P) rounds of messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice or explanation you can offer would be much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Professor Jonathan Eckstein
</span><br>
<span class="quotelev2">&gt;&gt;     Rutgers University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26216.php">http://www.open-mpi.org/community/lists/users/2015/01/26216.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26217.php">http://www.open-mpi.org/community/lists/users/2015/01/26217.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26217.php">Edgar Gabriel: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<!-- nextthread="start" -->
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
