<?
$subject_val = "Re: [OMPI users] Pinned memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 13:24:29 2009" -->
<!-- isoreceived="20090130182429" -->
<!-- sent="Fri, 30 Jan 2009 13:24:25 -0500 (EST)" -->
<!-- isosent="20090130182425" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pinned memory" -->
<!-- id="alpine.DEB.1.10.0901301322000.3885_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0901290300g422f64c9m50a6365c61fb13d2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pinned memory<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 13:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>In reply to:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jan 2009, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI Developer,
</span><br>
<span class="quotelev1">&gt; i have a doubt regards mpi_leave_pinned parameter. Suppose i have a simple for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for( int i=0; i&lt; 100; i++)
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce(a, b, .......)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: if i set mpi_leave_pinned= 1, buffer memories are
</span><br>
<span class="quotelev1">&gt; pinned in the entire process, or just into the for cycle?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the cycle is finished, a and b memories, are unregistrered?
</span><br>
<p>When mpi_leave_pinned is set to 1, any memory used in long message 
<br>
communication is pinned until it is released back to the OS, the MPI has 
<br>
to unpin it in order to pin some other memory, or until MPI_Finalize, 
<br>
whichever comes first.
<br>
<p>Note that a and b might never have been pinned in your example, if they 
<br>
are short buffers, as the copy protocol is always used for short messages.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7900.php">Brian W. Barrett: "Re: [OMPI users] Rmpi and LAM"</a>
<li><strong>In reply to:</strong> <a href="7871.php">Gabriele Fatigati: "[OMPI users] Pinned memory"</a>
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
