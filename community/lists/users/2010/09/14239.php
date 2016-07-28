<?
$subject_val = "Re: [OMPI users] send and receive buffer the same on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 16:56:46 2010" -->
<!-- isoreceived="20100916205646" -->
<!-- sent="Thu, 16 Sep 2010 13:56:36 -0700" -->
<!-- isosent="20100916205636" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive buffer the same on root" -->
<!-- id="4C928484.7020002_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimz=73gjMQxOdXcdG1hKBK-GFFe8RJP8v5jo890_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive buffer the same on root<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 16:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 9/16/2010 9:58 AM, David Zhang wrote:
<br>
<span class="quotelev1">&gt; It's compiler specific I think.  I've done this with OpenMPI no 
</span><br>
<span class="quotelev1">&gt; problem, however on one another cluster with ifort I've gotten error 
</span><br>
<span class="quotelev1">&gt; messages about not using MPI_IN_PLACE.  So I think if it compiles, it 
</span><br>
<span class="quotelev1">&gt; should work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 16, 2010 at 10:01 AM, Tom Rosmond &lt;rosmond_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rosmond_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am working with a Fortran 90 code with many MPI calls like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call mpi_gatherv(x,nsize(rank+1),
</span><br>
<span class="quotelev1">&gt;         mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Compiler can't affect what happens here (unless maybe you use x again 
<br>
somewhere).  Maybe you mean MPI library?  Intel MPI probably checks this 
<br>
at run time and issues an error.
<br>
I've dealt with run-time errors (which surfaced along with an ifort 
<br>
upgrade) which caused silent failure (incorrect numerics) on openmpi but 
<br>
a fatal diagnostic from Intel MPI run-time, due to multiple uses of the 
<br>
same buffer.    Moral: even if it works for you now with openmpi, you 
<br>
could be setting up for unexpected failure in the future.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14240.php">Tom Rosmond: "Re: [OMPI users] send and receive buffer the same on root"</a>
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
