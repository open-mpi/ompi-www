<?
$subject_val = "[OMPI users] using multiple IB connections between hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 19:45:02 2015" -->
<!-- isoreceived="20150129004502" -->
<!-- sent="Wed, 28 Jan 2015 18:45:02 -0600" -->
<!-- isosent="20150129004502" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="[OMPI users] using multiple IB connections between hosts" -->
<!-- id="CAFGXdkxAJ6f1Jq_dWe5Y5s8i3Qk8NOxZPRNQ6AajKWE-2jcN0Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] using multiple IB connections between hosts<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 19:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26244.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I ran some aggregate bandwidth tests between 2 hosts connected by
<br>
both QDR InfiniBand and RoCE enabled 10 Gbps Mellanox cards.  The tests
<br>
measured the aggregate performance for 16 cores on one host communicating
<br>
with 16 on the second host.  I saw the same performance as with the QDR
<br>
InfiniBand alone, so it appears that the addition of the 10 Gbps RoCE cards
<br>
is
<br>
not helping.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Should OpenMPI be using both in this case by default, or is there
<br>
something
<br>
I need to configure to allow for this?  I suppose this is the same question
<br>
as
<br>
how to make use of 2 identical IB connections on each node, or is the system
<br>
simply ignoring the 10 Gbps cards because they are the slower option.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any clarification on this would be helpful.  The only posts I've found
<br>
are very
<br>
old and discuss mostly channel bonding of 1 Gbps cards.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26244.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26250.php">Gilles Gouaillardet: "Re: [OMPI users] using multiple IB connections between hosts"</a>
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
