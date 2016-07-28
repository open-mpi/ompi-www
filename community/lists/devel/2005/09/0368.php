<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 11:41:32 2005" -->
<!-- isoreceived="20050916164132" -->
<!-- sent="Fri, 16 Sep 2005 11:41:31 -0500" -->
<!-- isosent="20050916164131" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Group_range_excl question" -->
<!-- id="f0044b0cef6e8c3b6978c2a7540473dd_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-09-16 11:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>A quick question about MPI_Group_range_excl().  I notice that if for a 
<br>
given triplet, first_rank == last_rank, we error if stride is not 1.  I 
<br>
notice we don't have that test in MPI_Group_range_incl().  Is there a 
<br>
reason that test should be there - the standard doesn't seem to imply 
<br>
that stride must be 1 if first_rank == last_rank.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re:  Group_range_excl question"</a>
<li><strong>Reply:</strong> <a href="0374.php">Rainer Keller: "Re:  Group_range_excl question"</a>
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
