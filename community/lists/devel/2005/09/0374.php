<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 17 13:28:26 2005" -->
<!-- isoreceived="20050917182826" -->
<!-- sent="Sat, 17 Sep 2005 20:28:29 +0200" -->
<!-- isosent="20050917182829" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re:  Group_range_excl question" -->
<!-- id="200509172028.30167.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="f0044b0cef6e8c3b6978c2a7540473dd_at_open-mpi.org" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-17 13:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<li><strong>In reply to:</strong> <a href="0368.php">Brian Barrett: "Group_range_excl question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brian,
<br>
On Friday 16 September 2005 18:41, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; A quick question about MPI_Group_range_excl().  I notice that if for a
</span><br>
<span class="quotelev1">&gt; given triplet, first_rank == last_rank, we error if stride is not 1.  I
</span><br>
<span class="quotelev1">&gt; notice we don't have that test in MPI_Group_range_incl().  Is there a
</span><br>
<span class="quotelev1">&gt; reason that test should be there - the standard doesn't seem to imply
</span><br>
<span class="quotelev1">&gt; that stride must be 1 if first_rank == last_rank.
</span><br>
As said in the other mail, the standard claims, that an MPI_Group_incl(i) / 
<br>
MPI_Group_excl(i) is equivalent to an MPI_Group_range_incl / 
<br>
MPI_Group_range_excl with (i,i,1) -- see p. 142 in the MPI-11 standard.
<br>
So, the test is just for correctness of the supplied data (or against lazyness 
<br>
of the app.-programmer? ,-])
<br>
<p>But then again, the std. is (as always) not too strict in specifying all those 
<br>
marginal cases. So, I don't feel too strong about this test.
<br>
<p>BTW: the intel-tests failing are in MPI_Group_range_excl3_c.c, right?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller             email: keller_at_[hidden]
  High Performance Computing         Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)          Fax: ++49 (0)711-678 7626
  Nobelstrasse 19,  R. O0.030        <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  70550 Stuttgart                      
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<li><strong>In reply to:</strong> <a href="0368.php">Brian Barrett: "Group_range_excl question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0375.php">Brian Barrett: "Re:  Group_range_excl question"</a>
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
