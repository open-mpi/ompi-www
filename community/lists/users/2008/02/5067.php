<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 12:09:16 2008" -->
<!-- isoreceived="20080222170916" -->
<!-- sent="Fri, 22 Feb 2008 11:09:05 -0600 (CST)" -->
<!-- isosent="20080222170905" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="Pine.LNX.4.64.0802221100140.31457_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EDAC7166-4810-48AF-B7E2-F40340B0ADCF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h macro naming<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-22 12:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5066.php">John Markus Bj&#248;rndalen: "[OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 21 Feb 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; While I agree that having AC actually define them to a value is a Good
</span><br>
<span class="quotelev1">&gt; Thing (better than just defining it to be empty), I do see the pickle
</span><br>
<span class="quotelev1">&gt; that it has put us in.  :-\  I don't see an obvious solution.
</span><br>
<p>I do :).  Try the attached patch.  It sneaks in at the last minute and 
<br>
defines (for example) both SIZEOF_BOOL and OMPI_SIZEOF_BOOL.  mpi.h only 
<br>
has the define for OMPI_SIZEOF_BOOL.  opal_config.h has both, but a note 
<br>
saying not to use the OMPI_ version.  Seems to work.
<br>
<p>Brian
<br>
<p>
<br><hr>
<ul>
<li>TEXT/X-DIFF attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5067/ompi_mpi_h_no_ac.diff">ompi_mpi_h_no_ac.diff</a>
</ul>
<!-- attachment="ompi_mpi_h_no_ac.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5066.php">John Markus Bj&#248;rndalen: "[OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
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
