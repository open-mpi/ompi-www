<?
$subject_val = "Re: [OMPI devel] F90 open-mpi module bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 14:23:20 2011" -->
<!-- isoreceived="20110521182320" -->
<!-- sent="Sat, 21 May 2011 14:23:14 -0400" -->
<!-- isosent="20110521182314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] F90 open-mpi module bug" -->
<!-- id="4B18C220-4EEB-41C3-8AB2-00D9C0AF4D38_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT136-w36264388F799B70C7096AA1700_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] F90 open-mpi module bug<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-21 14:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2011, at 10:20 AM, Dan Reynolds wrote:
<br>
<p><span class="quotelev1">&gt; Rightly so.  Sorry for posting a bug to the developer list.  It's just that the bug was years old and had compiled on so many systems, plus the gfortran error message was entirely unhelpful, so I hadn't realized to look at the arguments as the cause of the error. My guess is that the F90 module in other distrubutions (MPICH, MVAPICH, IBM, ...) don't declare &quot;intent&quot; on the variables, so it always just went through.
</span><br>
<p>Or they don't have explicit interfaces for all MPI functions.  If they don't have an explicit interface for MPI_ABORT, then it follows the same implicit rules that otherwise apply in Fortran (e.g., what all mpif.h interfaces I know do).
<br>
<p>Indeed, OMPI defaults to only having explicit interfaces for MPI functions that do not take &quot;choice&quot; buffers (e.g., MPI_INIT, but not MPI_SEND) because of various complicates due to that (that will be changing sometime in the not-distant future, though -- stay tuned!).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
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
