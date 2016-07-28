<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 15:37:35 2008" -->
<!-- isoreceived="20080903193735" -->
<!-- sent="Wed, 03 Sep 2008 12:40:26 -0700" -->
<!-- isosent="20080903194026" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BEE82A.7060702_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48BECA4A.1070002_at_polytechnique.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 15:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope the following helps, but maybe I'm just repeating myself and Dick.
<br>
<p>Let's say you're stuck in an MPI_Recv, MPI_Bcast, or MPI_Barrier call 
<br>
waiting on someone else.  You want to free up the CPU for more 
<br>
productive purposes.  There are basically two cases:
<br>
<p>1)  If you want to free the CPU up for the calling thread, the main 
<br>
trick is returning program control to the caller.  This requires a 
<br>
non-blocking MPI call.  There is such a thing for MPI_Recv (it's 
<br>
MPI_Irecv, you know how to use it), but no such thing for MPI_Bcast or 
<br>
MPI_Barrier.  Anyhow, given a non-blocking call, you can return control 
<br>
to the caller, who can do productive work while occasionally testing for 
<br>
completion of the original operation.
<br>
<p>2)  If you want to free the CPU up for anyone else, what you want is 
<br>
that the MPI implementation should not poll hard while it's waiting.  
<br>
You can do that in Open MPI with the &quot;mpi_yield_when_idle=1&quot; variable.  
<br>
E.g.,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% setenv OMPI_MCA_mpi_yield_when_idle 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;% mpirun a.out
<br>
<p>or
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --mca mpi_yield_when_idle 1 a.out
<br>
<p>I'm not sure about all systems, but I think yield might sometimes be 
<br>
observable only if there is someone to yield to.  It's like driving into 
<br>
a traffic circle.  You're supposed to yield to cars already in the 
<br>
circle.  This makes a difference only if there is someone in the 
<br>
circle!  Similarly, if you look at whether Open MPI is polling hard, you 
<br>
might see that it is, indeed, polling hard even if you turn yield on.  
<br>
The real test is to have another process compete for the same CPU.  You 
<br>
should see the MPI process and the competing process share the CPU in 
<br>
the default case, but the competing process winning the CPU when yield 
<br>
is turned on.  I tried such a test on my system and confirmed that Open 
<br>
MPI yield does &quot;work&quot;.
<br>
<p>I hope that helps.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
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
