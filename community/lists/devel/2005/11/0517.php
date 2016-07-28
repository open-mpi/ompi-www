<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  4 15:10:32 2005" -->
<!-- isoreceived="20051104201032" -->
<!-- sent="Fri, 4 Nov 2005 15:10:24 -0500 (EST)" -->
<!-- isosent="20051104201024" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re:  MPI_REPLACE: opinion?" -->
<!-- id="Pine.LNX.4.62.0511041505060.32311_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a7e66a610e71f19f7c7007e944471039_at_open-mpi.org" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-04 15:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0518.php">George Bosilca: "Last changes on the datatype"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
<li><strong>In reply to:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; But thinking about this today, I have no idea what MPI_REPLACE is
</span><br>
<span class="quotelev1">&gt; supposed to do in a collective reduction.  Specifically -- what value
</span><br>
<span class="quotelev1">&gt; should end up in the target buffer?  It doesn't make sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this is a grey area in the MPI standard -- MPI_REPLACE is
</span><br>
<span class="quotelev1">&gt; an MPI_Op, but it should *only* be used with MPI_ACCUMULATE, and not
</span><br>
<span class="quotelev1">&gt; with the collective reduction functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comments on this MPI interpretation?  Agree / disagree?
</span><br>
<p>Makes sense to limit its use.. so we should return err_arg if used in a 
<br>
collective reduce op then.
<br>
<p><p>G.
<br>
<p><p>(It has one interesting use, everybody does an allreduce on their rank, 
<br>
and it then acts as an atomic election, except its repeatable and 
<br>
predictable probably)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0518.php">George Bosilca: "Last changes on the datatype"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
<li><strong>In reply to:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
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
