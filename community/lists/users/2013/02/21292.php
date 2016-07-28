<?
$subject_val = "[OMPI users] All_to_allv algorithm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 11:19:39 2013" -->
<!-- isoreceived="20130204161939" -->
<!-- sent="Mon, 04 Feb 2013 16:19:29 +0000" -->
<!-- isosent="20130204161929" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] All_to_allv algorithm patch" -->
<!-- id="510FDF91.4080404_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI users] All_to_allv algorithm patch<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 11:19:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Reply:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll try running this by the mailing list again, before resigning myself 
<br>
to maintaining this privately....
<br>
<p>I've looked in detail at the current two MPI_Alltoallv algorithms and 
<br>
wanted to raise a couple of ideas.
<br>
<p>Firstly, the new default &quot;pairwise&quot; algorithm.
<br>
* There is no optimisation for sparse/empty messages, compare to the old 
<br>
basic &quot;linear&quot; algorithm.
<br>
* The attached &quot;pairwise-nop&quot; patch adds this optimisation and on the 
<br>
test case I first described in this thread (1000's of small, sparse, 
<br>
all-to-all), this cuts runtime by approximately 30%
<br>
* I think the upper bound on the loop counter for pairwise exchange is 
<br>
off-by-one. As the comment notes &quot;starting from 1 since local exhange 
<br>
[sic] is done&quot;; but when step = (size + 1), the sendto/recvfrom both 
<br>
reduce to rank (self-exchange is already handled in earlier code)
<br>
<p>The pairwise algorithm still kills performance on my gigabit ethernet 
<br>
network. My message transmission time must be small compared to latency, 
<br>
and the forced MPI_Comm_size() synchronisation steps introduce a minimum 
<br>
delay (single_link_latency * comm_size), i.e. latency scale linearly 
<br>
with comm_size. The linear algorithm doesn't wait for each exchange, so 
<br>
its minimum latency is just a single transmit/receive.
<br>
<p>Which brings me to the second idea. The problem with the existing 
<br>
implementation of the linear algorithm is that the irecv/isend pattern 
<br>
was identical on all processes, meaning that every process starts by 
<br>
having to wait for process 0 to send to everyone and every process can 
<br>
finish waiting for rank (size-1) to send to everyone.
<br>
<p>It seems preferable to at least post the send/recv requests in the same 
<br>
order as the pairwise algorithm. The attached &quot;linear-alltoallv&quot; patch 
<br>
implements this and, on my test case, shows some modest 5% improvement. 
<br>
I was wondering if it would address the concerns which led to the switch 
<br>
of default algorithm.
<br>
<p>Simon
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21292/openmpi-pairwise-nop.patch">openmpi-pairwise-nop.patch</a>
</ul>
<!-- attachment="openmpi-pairwise-nop.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21292/openmpi-linear-alltoallv.patch">openmpi-linear-alltoallv.patch</a>
</ul>
<!-- attachment="openmpi-linear-alltoallv.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Reply:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
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
