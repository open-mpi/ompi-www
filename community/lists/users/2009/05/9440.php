<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 10:41:37 2009" -->
<!-- isoreceived="20090527144137" -->
<!-- sent="Wed, 27 May 2009 07:41:08 -0700" -->
<!-- isosent="20090527144108" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1D5104.7090501_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905271309.27914.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 10:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
vasilis wrote:
<br>
<p><span class="quotelev1">&gt;Thank you Eugene for your suggestion. I used different tags for each variable, 
</span><br>
<span class="quotelev1">&gt;and now I do not get this error. 
</span><br>
<span class="quotelev1">&gt;The problem now is that I am getting a different solution when I use more than 
</span><br>
<span class="quotelev1">&gt;2 CPUs. I checked the matrices and I found that they differ by a very small 
</span><br>
<span class="quotelev1">&gt;amount  of the order 10^(-10). Actually, I am getting a different solution if I 
</span><br>
<span class="quotelev1">&gt;use 4CPUs or 16CPUs!!!
</span><br>
<span class="quotelev1">&gt;Do you have any idea what could cause this behavior?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure.
<br>
<p>Rank 0 accumulates all the res_cpu values into a single array, res.  It 
<br>
starts with its own res_cpu and then adds all other processes.  When 
<br>
np=2, that means the order is prescribed.  When np&gt;2, the order is no 
<br>
longer prescribed and some floating-point rounding variations can start 
<br>
to occur.
<br>
<p>If you want results to be more deterministic, you need to fix the order 
<br>
in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE, loop 
<br>
over the peer processes in a specific order.
<br>
<p><p><p>P.S.  It seems to me that you could use MPI collective operations to 
<br>
implement what you're doing.  E.g., something like:
<br>
<p>call MPI_Reduce(res_cpu, res, total_unknown, MPI_DOUBLE_PRECISION, 
<br>
MPI_SUM, 0, MPI_COMM_WORLD, ierr)
<br>
<p>call MPI_Gather(jacob_cpu, total_elem_cpu * unique, MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jacob    , total_elem_cpu * unique, 
<br>
MPI_DOUBLE_PRECISION, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  row_cpu, total_elem_cpu * unique, MPI_INTEGER         , &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row    , total_elem_cpu * unique, MPI_INTEGER         
<br>
, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  col_cpu, total_elem_cpu * unique, MPI_INTEGER         , &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;col    , total_elem_cpu * unique, MPI_INTEGER         
<br>
, 0, MPI_COMM_WORLD, ierr)
<br>
<p>I think the res part is right.  The jacob/row/col parts are not quite 
<br>
right since you don't just want to gather the elements, but add them 
<br>
into particular arrays.  Not sure if you really want to allocate a new 
<br>
scratch array to use for this purpose or what.  Nor would this solve the 
<br>
res_cpu indeterministic problem you had.  I just wanted to make sure you 
<br>
knew about the MPI collective operations as an alternative to your 
<br>
point-to-point implementation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9439.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
