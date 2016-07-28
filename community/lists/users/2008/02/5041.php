<?
$subject_val = "[OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 14:53:10 2008" -->
<!-- isoreceived="20080219195310" -->
<!-- sent="Tue, 19 Feb 2008 11:52:56 -0800" -->
<!-- isosent="20080219195256" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="[OMPI users] mpi.h macro naming" -->
<!-- id="20080219195256.GA8847_at_dancer.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4711EBB-09AC-4F41-A36F-8B2C7DD0C75F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi.h macro naming<br>
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 14:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5042.php">Adams, Samuel D AFRL/RHDR: "[OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks in advance if this is already fixed in a later release I've not caught up to,
<br>
I'm at 1.2.3.
<br>
<p>Is there some subtle reason that ompi's mpi.h
<br>
leaves the following macros both 
<br>
unguarded with an ifndef and un-prefixed with OMPI_ ?
<br>
<p>This produces considerable amounts of compiler whinage for other
<br>
codes that include mpi.h. As always, extraneous whinage makes real
<br>
errors harder to find. (And yes, those other codes also need
<br>
*their* definitions of HAVE_LONG_LONG, etc properly protected).
<br>
And of course who knows how the answer was defined for any given
<br>
unprotected appearance of these macros?
<br>
<p>/* Define to 1 if the system has the type `long long'. */
<br>
#undef HAVE_LONG_LONG
<br>
<p>/* The size of a `bool', as computed by sizeof. */
<br>
#undef SIZEOF_BOOL
<br>
<p>/* The size of a `int', as computed by sizeof. */
<br>
#undef SIZEOF_INT
<br>
<p>If it's simply a matter of developer hours, I can post a patch
<br>
somewhere to address this. It appears that of these, only
<br>
sizeof_int affects more than a few source files.
<br>
<p>thanks,
<br>
Ben Allan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5042.php">Adams, Samuel D AFRL/RHDR: "[OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
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
