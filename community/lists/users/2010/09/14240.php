<?
$subject_val = "Re: [OMPI users] send and receive buffer the same on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 17:02:12 2010" -->
<!-- isoreceived="20100916210212" -->
<!-- sent="Thu, 16 Sep 2010 14:00:59 -0700" -->
<!-- isosent="20100916210059" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive buffer the same on root" -->
<!-- id="1284670859.7222.83.camel_at_alder.reachone.com" -->
<!-- inreplyto="4C928484.7020002_at_aol.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 17:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14241.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>In reply to:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The responsible programmer for this code has conceded the point and we
<br>
will be replacing all offending examples with the MPI_IN_PLACE solution.
<br>
Thanks for the input.
<br>
<p>T. Rosmond
<br>
<p><p><p>On Thu, 2010-09-16 at 13:56 -0700, Tim Prince wrote:
<br>
<span class="quotelev1">&gt; On 9/16/2010 9:58 AM, David Zhang wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; It's compiler specific I think.  I've done this with OpenMPI no
</span><br>
<span class="quotelev2">&gt; &gt; problem, however on one another cluster with ifort I've gotten error
</span><br>
<span class="quotelev2">&gt; &gt; messages about not using MPI_IN_PLACE.  So I think if it compiles,
</span><br>
<span class="quotelev2">&gt; &gt; it should work fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Sep 16, 2010 at 10:01 AM, Tom Rosmond &lt;rosmond_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;         I am working with a Fortran 90 code with many MPI calls like
</span><br>
<span class="quotelev2">&gt; &gt;         this:
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         call mpi_gatherv(x,nsize(rank+1),
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev1">&gt; Compiler can't affect what happens here (unless maybe you use x again
</span><br>
<span class="quotelev1">&gt; somewhere).  Maybe you mean MPI library?  Intel MPI probably checks
</span><br>
<span class="quotelev1">&gt; this at run time and issues an error.  
</span><br>
<span class="quotelev1">&gt; I've dealt with run-time errors (which surfaced along with an ifort
</span><br>
<span class="quotelev1">&gt; upgrade) which caused silent failure (incorrect numerics) on openmpi
</span><br>
<span class="quotelev1">&gt; but a fatal diagnostic from Intel MPI run-time, due to multiple uses
</span><br>
<span class="quotelev1">&gt; of the same buffer.    Moral: even if it works for you now with
</span><br>
<span class="quotelev1">&gt; openmpi, you could be setting up for unexpected failure in the future.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14241.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>In reply to:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
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
