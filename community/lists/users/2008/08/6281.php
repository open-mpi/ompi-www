<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 12:38:05 2008" -->
<!-- isoreceived="20080806163805" -->
<!-- sent="Wed, 06 Aug 2008 18:37:54 +0200" -->
<!-- isosent="20080806163754" -->
<!-- name="Jan Ploski" -->
<!-- email="Jan.Ploski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="4899D362.3050207_at_offis.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15344E3D-655A-47E0-8989-7C4EF8B53D7B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jan Ploski (<em>Jan.Ploski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 12:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>In reply to:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Jan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the latest of Open MPI compiled with debug turned on, and 
</span><br>
<span class="quotelev1">&gt; valgrind 3.3.0. From your trace it looks like there is a conflict 
</span><br>
<span class="quotelev1">&gt; between two memory managers. I'm not having the same problem as I 
</span><br>
<span class="quotelev1">&gt; disable the Open MPI memory manager on my builds (configure option 
</span><br>
<span class="quotelev1">&gt; --without-memory-manager).
</span><br>
<p>Thanks for the tip! I confirm that the problem goes away after 
<br>
rebuilding --without-memory-manager.
<br>
<p>As I also have the same problem in another cluster, I'd like to know 
<br>
what side effects using this configuration option might have before 
<br>
suggesting it as a solution to that cluster's admin. I didn't find an 
<br>
explanation of what it does in the FAQ (beyond a recommendation to use 
<br>
it for static builds). Could you please explain this option, especially 
<br>
why one might want to *not* use it?
<br>
<p>Regards,
<br>
Jan Ploski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>In reply to:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
