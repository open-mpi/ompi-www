<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 08:14:13 2011" -->
<!-- isoreceived="20110520121413" -->
<!-- sent="Fri, 20 May 2011 08:14:07 -0400" -->
<!-- isosent="20110520121407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="42DB03B3-9CF4-4ACB-AA20-B857E5F76087_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A5B121E9-E664-49D0-AE54-2CFE527129D2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with MPI-IO<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 08:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16592.php">AMARNATH, Balachandar: "[OMPI users] Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>In reply to:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 20, 2011, at 6:23 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
</span><br>
<p>Ok, if I convert ijlena and ijdisp to 1D arrays, I don't get the compile error (even though they're allocatable -- so allocate was a red herring, sorry).  That's all that &quot;use mpi&quot; is complaining about -- that the function signatures didn't match.
<br>
<p>use mpi is your friend -- even if you don't use F90 constructs much.  Compile-time checking is Very Good Thing (you were effectively &quot;getting lucky&quot; by passing in the 2D arrays, I think).
<br>
<p>Attached is my final version.  And with this version, I see the hang when running it with the &quot;T&quot; parameter.
<br>
<p>That being said, I'm not an expert on the MPI IO stuff -- your code *looks* right to me, but I could be missing something subtle in the interpretation of MPI_FILE_SET_VIEW.  I tried running your code with MPICH 1.3.2p1 and it also hung.
<br>
<p>Rob (ROMIO guy) -- can you comment this code?  Is it correct?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16591/x.f90">x.f90</a>
</ul>
<!-- attachment="x.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16592.php">AMARNATH, Balachandar: "[OMPI users] Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16590.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only sometimes..."</a>
<li><strong>In reply to:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
