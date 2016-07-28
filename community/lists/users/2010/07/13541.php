<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 10:07:17 2010" -->
<!-- isoreceived="20100708140717" -->
<!-- sent="Thu, 08 Jul 2010 16:09:03 +0200" -->
<!-- isosent="20100708140903" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="87tyoaoykg.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="09B6A689-1751-4873-889F-035BA7211460_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 10:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 8 Jul 2010 09:53:11 -0400, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; Do you &quot;use mpi&quot; or the F77 interface?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It shouldn't matter; both the Fortran module and mpif.h interfaces are the same.
</span><br>
<p>Yes, but only the F90 version can do type checking, the function
<br>
prototypes are not present in mpif.h.  The truncation is an internal
<br>
issue, unrelated to user code having compatible types (since I can
<br>
reproduce the issue from C).  I'm just confused by how passing an int64
<br>
when an int32 is expected could work from Fortran on a big-endian system
<br>
(it would likely work from C when the argument is passed by value in a
<br>
register), using the F90 module would enable the compiler to do type
<br>
checking and should hilight any type mismatches.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
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
