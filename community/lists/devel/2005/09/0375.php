<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 17 17:46:47 2005" -->
<!-- isoreceived="20050917224647" -->
<!-- sent="Sat, 17 Sep 2005 17:46:33 -0500" -->
<!-- isosent="20050917224633" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Group_range_excl question" -->
<!-- id="0903B28C-372E-4181-9E87-9148A183AAC1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200509172028.30167.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-17 17:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<li><strong>In reply to:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2005, at 1:28 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; On Friday 16 September 2005 18:41, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A quick question about MPI_Group_range_excl().  I notice that if  
</span><br>
<span class="quotelev2">&gt;&gt; for a
</span><br>
<span class="quotelev2">&gt;&gt; given triplet, first_rank == last_rank, we error if stride is not  
</span><br>
<span class="quotelev2">&gt;&gt; 1.  I
</span><br>
<span class="quotelev2">&gt;&gt; notice we don't have that test in MPI_Group_range_incl().  Is there a
</span><br>
<span class="quotelev2">&gt;&gt; reason that test should be there - the standard doesn't seem to imply
</span><br>
<span class="quotelev2">&gt;&gt; that stride must be 1 if first_rank == last_rank.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; As said in the other mail, the standard claims, that an  
</span><br>
<span class="quotelev1">&gt; MPI_Group_incl(i) /
</span><br>
<span class="quotelev1">&gt; MPI_Group_excl(i) is equivalent to an MPI_Group_range_incl /
</span><br>
<span class="quotelev1">&gt; MPI_Group_range_excl with (i,i,1) -- see p. 142 in the MPI-11  
</span><br>
<span class="quotelev1">&gt; standard.
</span><br>
<span class="quotelev1">&gt; So, the test is just for correctness of the supplied data (or  
</span><br>
<span class="quotelev1">&gt; against lazyness
</span><br>
<span class="quotelev1">&gt; of the app.-programmer? ,-])
</span><br>
<p>But it only says that calling MPI_Goup_excl() is equivalent to  
<br>
calling MPI_Group_range_excl(), with every rank i given to  
<br>
MPI_Group_excl() becoming a triple (i, i, 1).  It says nothing of the  
<br>
behavior of the function if the triple (i, i, X) if X is not 1...
<br>
<p><span class="quotelev1">&gt; But then again, the std. is (as always) not too strict in  
</span><br>
<span class="quotelev1">&gt; specifying all those
</span><br>
<span class="quotelev1">&gt; marginal cases. So, I don't feel too strong about this test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: the intel-tests failing are in MPI_Group_range_excl3_c.c, right?
</span><br>
<p>correct.
<br>
<p><p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0376.php">Jeff Squyres: "Re:  MPI question"</a>
<li><strong>Previous message:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<li><strong>In reply to:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
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
