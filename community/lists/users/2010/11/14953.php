<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 10:50:21 2010" -->
<!-- isoreceived="20101130155021" -->
<!-- sent="Tue, 30 Nov 2010 15:50:11 +0000" -->
<!-- isosent="20101130155011" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C094D6CCD_at_MERCMBX02D.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002801cb8c22$615f8de0$241ea9a0$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_split<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 10:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14952.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The tree is not symmetrical in that the valid values for the 10th
</span><br>
<span class="quotelev1">&gt; parameter depends on the values selected in the 0th to 9th parameter
</span><br>
<span class="quotelev1">&gt; (all the ancestry in the tree), for e.g., we may have a lot of nodes in
</span><br>
<span class="quotelev1">&gt; the left of the tree than in the right, see attachment ( I hope they're
</span><br>
<span class="quotelev1">&gt; allowed )
</span><br>
<p>Which is why you don't have the master hand out all the work at once.  Instead, it hands out a small(er) piece of work to each node from a large list where the length of the list is significantly larger than the number of nodes.  As each node finishes processing the bit of work it was given, it sends a message back to the master with its results and asks for more work.  You repeat until all data has been processes.
<br>
<p>Eg, say you are looking to search through all possible combinations for 10 parameters (n0,...,n9).  The master would generate all possible combinations for the first 3 parameters (n0,n1,n2) and then for every element in that list, start sending them to the slave process who will use that as a basis vector for searching the rest of the space (n3,...,n9).  As each slave finishes, it asks the master for another basis vector to work on.
<br>
<p>Lather, rinse, repeat until finished.
<br>
<p>If you keep the number of basis vectors much higher than the number of slaves (like 100x bigger) the code sill load-balance itself, since it really doesn't matter the order in which they finish processing a single basis as long as they are all kept busy.
<br>
<p>I used this approach many years ago searching for numerical sequences known as Golomb Rulers.  Email me off list and I can give you some pointers to references.
<br>
<p>Good luck,
<br>
<p>-bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14952.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
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
