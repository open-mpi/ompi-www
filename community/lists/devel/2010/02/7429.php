<?
$subject_val = "Re: [OMPI devel] documenting the PMPI profiling interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 18:08:47 2010" -->
<!-- isoreceived="20100211230847" -->
<!-- sent="Thu, 11 Feb 2010 15:08:46 -0800" -->
<!-- isosent="20100211230846" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] documenting the PMPI profiling interface" -->
<!-- id="4B748DFE.70209_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07B0F0E2-28E6-417E-B8BD-66592484F3E1_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 18:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7430.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Feb 11, 2010, at 4:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In the MPI standard, the portion discussing the PMPI profiling interface says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     3. document the implementation of different language
</span><br>
<span class="quotelev2">&gt;&gt;     bindings of the MPI interface if they are layered on top
</span><br>
<span class="quotelev2">&gt;&gt;     of each other, so that the profiler developer knows
</span><br>
<span class="quotelev2">&gt;&gt;     whether she must implement the profile interface for
</span><br>
<span class="quotelev2">&gt;&gt;     each binding, or can economise by implementing it
</span><br>
<span class="quotelev2">&gt;&gt;     only for the lowest level routines. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313">http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Do we have such documentation anywhere?  I don't see this in the OMPI FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I played with this some.  I wrote a Fortran program that called MPI_Send.  I wrote a Fortran wrapper that intercepted MPI_Send and called PMPI_Send.  I wrote a C wrapper that did the same thing.  It appears that both wrappers got called.  So, it looks like we should advise users to provide *only* C wrappers (unless they *also* want to intercept at the Fortran level).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Yes/no?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Yes.  Mostly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I believe there are a small number of exceptions to this... (/me checks...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ah yes, here's one: MPI_ERRHANDLER_CREATE() in Fortran does *not* call MPI_Errhandler_create().  Instead, it calls the back-end ompi_errhandler_create() function.  There's obscure reasons for this that are pretty uninteresting.  To be clear: if you profile this function in both C and Fortran and call it in Fortran, you *won't* see the corresponding C profile function invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't know if there's an easy way to generate a full list of functions like this -- it might involve a troll through ompi/mpi/f77/*_f.c to see which ones call MPI_* functions for their back-end functionality vs. which ones don't.  I think most call MPI_* functions.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
And I can imagine there are cases where you'd rather write the wrapper 
<br>
in the native language (e.g., Fortran) than C if handles are handled 
<br>
differently or something.
<br>
<p>Back to the opening question:  is this documented anywhere?  (Such 
<br>
documentation *is* a requirement of the standard and OMPI is standard 
<br>
conforming, y'know.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7430.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
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
