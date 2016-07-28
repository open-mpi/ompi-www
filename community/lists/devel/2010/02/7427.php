<?
$subject_val = "Re: [OMPI devel] documenting the PMPI profiling interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 17:31:42 2010" -->
<!-- isoreceived="20100211223142" -->
<!-- sent="Thu, 11 Feb 2010 17:31:36 -0500" -->
<!-- isosent="20100211223136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] documenting the PMPI profiling interface" -->
<!-- id="07B0F0E2-28E6-417E-B8BD-66592484F3E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B7472E5.9060404_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] documenting the PMPI profiling interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 17:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7429.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7429.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 4:13 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In the MPI standard, the portion discussing the PMPI profiling interface says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      3. document the implementation of different language
</span><br>
<span class="quotelev1">&gt;      bindings of the MPI interface if they are layered on top
</span><br>
<span class="quotelev1">&gt;      of each other, so that the profiler developer knows
</span><br>
<span class="quotelev1">&gt;      whether she must implement the profile interface for
</span><br>
<span class="quotelev1">&gt;      each binding, or can economise by implementing it
</span><br>
<span class="quotelev1">&gt;      only for the lowest level routines. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313">http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we have such documentation anywhere?  I don't see this in the OMPI FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I played with this some.  I wrote a Fortran program that called MPI_Send.  I wrote a Fortran wrapper that intercepted MPI_Send and called PMPI_Send.  I wrote a C wrapper that did the same thing.  It appears that both wrappers got called.  So, it looks like we should advise users to provide *only* C wrappers (unless they *also* want to intercept at the Fortran level).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes/no?
</span><br>
<p>Yes.  Mostly.
<br>
<p>I believe there are a small number of exceptions to this... (/me checks...)
<br>
<p>Ah yes, here's one: MPI_ERRHANDLER_CREATE() in Fortran does *not* call MPI_Errhandler_create().  Instead, it calls the back-end ompi_errhandler_create() function.  There's obscure reasons for this that are pretty uninteresting.  To be clear: if you profile this function in both C and Fortran and call it in Fortran, you *won't* see the corresponding C profile function invoked.
<br>
<p>I don't know if there's an easy way to generate a full list of functions like this -- it might involve a troll through ompi/mpi/f77/*_f.c to see which ones call MPI_* functions for their back-end functionality vs. which ones don't.  I think most call MPI_* functions.
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
<li><strong>Next message:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7429.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7429.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
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
