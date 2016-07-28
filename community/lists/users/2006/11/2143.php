<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 04:32:15 2006" -->
<!-- isoreceived="20061107093215" -->
<!-- sent="Tue, 7 Nov 2006 15:02:09 +0530" -->
<!-- isosent="20061107093209" -->
<!-- name="Chevchenkovic Chevchenkovic" -->
<!-- email="chevchenkovic_at_[hidden]" -->
<!-- subject="[OMPI users] efficient memory to memory transfer" -->
<!-- id="1c16cdf90611070132x2e8a5196oc73140c4b11e140e_at_mail.gmail.com" -->
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
<strong>From:</strong> Chevchenkovic Chevchenkovic (<em>chevchenkovic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 04:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;I had the following setup:
<br>
&nbsp;Rank 0 process on node 1 wants to send an array of particular size to Rank
<br>
1 process on same node.
<br>
1. What are the optimisations that can be done/invoked while running mpirun
<br>
to perform this memory to memory transfer efficiently?
<br>
2. Is there any performance gain  if 2 processes that are exchanging data
<br>
arrays are kept on the same node rather than on different nodes connected by
<br>
infiniband?
<br>
&nbsp;Awaiting a reply,
<br>
-Chev
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
