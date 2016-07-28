<?
$subject_val = "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 06:22:11 2009" -->
<!-- isoreceived="20090107112211" -->
<!-- sent="Wed, 7 Jan 2009 06:21:57 -0500" -->
<!-- isosent="20090107112157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions" -->
<!-- id="658DDF37-A356-4A05-9DF5-E801C22D0F29_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4964630B.2070302_at_numericalrocks.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 06:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7653.php">Atle Rudshaug: "[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>In reply to:</strong> <a href="7653.php">Atle Rudshaug: "[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, they're erroneous because the MPI spec says that  
<br>
they're erroneous.  MPI-2.1, p250:
<br>
<p>&quot;For dimension i with periods(i) = true, if the coordinate, coords(i),  
<br>
is out of  range, that is, coords(i) &lt; 0 or coords(i)  &#226;&#137;&#165; dims(i), it  
<br>
is shifted back to the interval 0 &#226;&#137;&#164; coords(i) &lt; dims(i)  
<br>
automatically. Out-of-range coordinates are erroneous for non-periodic  
<br>
dimensions.&quot;
<br>
<p>Therefore, we invoke an MPI exception if you ask for something with  
<br>
out-of-range coordinates.
<br>
<p>That being said, you have [at least] 2 alternatives:
<br>
<p>1. Keep meta data around to know the dimensions of your communicator  
<br>
and ensure that you never call CART_RANK with out-of-range coordinates.
<br>
<p>2. Reset the error handler on the communicator in question to  
<br>
MPI_ERRORS_RETURN (or your own handler).  Then when you call CART_RANK  
<br>
with out-of-range coordinates, you'll just get an error back rather  
<br>
than the job aborting.
<br>
<p><p><p>On Jan 7, 2009, at 3:08 AM, Atle Rudshaug wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to find the neighbor ranks in a 3D cartesian  
</span><br>
<span class="quotelev1">&gt; communicator. I use MPI_Cart_shift for 6 of them, but for the 12  
</span><br>
<span class="quotelev1">&gt; diagonals I tried to use MPI_Cart_rank. However, only x-direction is  
</span><br>
<span class="quotelev1">&gt; periodic and my program crashed because of out-of-range coordinates.  
</span><br>
<span class="quotelev1">&gt; Then I found something strange in some MPICH documentation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Out-of-range coordinates are erroneous for non-periodic  
</span><br>
<span class="quotelev1">&gt; dimensions . Versions of MPICH before 1.2.2 returned MPI_PROC_NULL  
</span><br>
<span class="quotelev1">&gt; for the rank in this case.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why doesn't it anymore? Is this the same for OpenMPI? I expected it  
</span><br>
<span class="quotelev1">&gt; to return MPI_PROC_NULL which would make things much easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Atle
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7653.php">Atle Rudshaug: "[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>In reply to:</strong> <a href="7653.php">Atle Rudshaug: "[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
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
