<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  4 14:58:21 2005" -->
<!-- isoreceived="20051104195821" -->
<!-- sent="Fri, 4 Nov 2005 14:58:04 -0500" -->
<!-- isosent="20051104195804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="MPI_REPLACE: opinion?" -->
<!-- id="a7e66a610e71f19f7c7007e944471039_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-04 14:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Tim S. Woodall: "tcp performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<li><strong>Reply:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I just noticed something -- a long time ago, I thought I was 
<br>
being clever and forward-thinking by ensuring to define MPI_REPLACE as 
<br>
a valid reduction operator for MPI_REDUCE (and friends).  The careful 
<br>
reader will remember that MPI_REPLACE is the MPI-2 MPI_Op added for 
<br>
MPI_ACCUMULATE (the one-sided, non-collective operation).  All MPI-2 
<br>
says that is MPI_REPLACE is a new MPI_Op -- MPI-2 does not limit its 
<br>
use to MPI_ACCUMULATE.  So I merrily added MPI_REPLACE to the general 
<br>
reduction tables, and bingo -- you can use MPI_REPLACE in MPI_REDUCE.  
<br>
Woo hoo!
<br>
<p>But thinking about this today, I have no idea what MPI_REPLACE is 
<br>
supposed to do in a collective reduction.  Specifically -- what value 
<br>
should end up in the target buffer?  It doesn't make sense.
<br>
<p>I think that this is a grey area in the MPI standard -- MPI_REPLACE is 
<br>
an MPI_Op, but it should *only* be used with MPI_ACCUMULATE, and not 
<br>
with the collective reduction functions.
<br>
<p>Any comments on this MPI interpretation?  Agree / disagree?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Tim S. Woodall: "tcp performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
<li><strong>Reply:</strong> <a href="0517.php">Graham E Fagg: "Re:  MPI_REPLACE: opinion?"</a>
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
