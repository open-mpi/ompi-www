<?
$subject_val = "Re: [OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 20:47:47 2010" -->
<!-- isoreceived="20100225014747" -->
<!-- sent="Thu, 25 Feb 2010 12:47:36 +1100" -->
<!-- isosent="20100225014736" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems on parallel writing" -->
<!-- id="1267062456.5836.54.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="870f08a61002241040w6d871f51jb4b3f27a1d168a89_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems on parallel writing<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 20:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>Previous message:</strong> <a href="12143.php">Ralph Castain: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>In reply to:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-02-24 at 13:40 -0500, w k wrote:
<br>
<span class="quotelev1">&gt; Hi Jordy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this part caused the problem. For fortran, it doesn't
</span><br>
<span class="quotelev1">&gt; matter if the pointer is NULL as long as the count requested from the
</span><br>
<span class="quotelev1">&gt; processor is 0. Actually I tested the code and it passed this part
</span><br>
<span class="quotelev1">&gt; without problem. I believe it aborted at MPI_FILE_SET_VIEW part.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>For the record:  A pointer is not NULL unless you've nullified it.
<br>
IIRC, the Fortran standard says that any non-assigning reference to an
<br>
unassigned, unnullified pointer is undefined (or maybe illegal... check
<br>
the standard).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>Previous message:</strong> <a href="12143.php">Ralph Castain: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>In reply to:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
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
