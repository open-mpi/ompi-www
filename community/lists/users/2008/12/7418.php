<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 12:36:50 2008" -->
<!-- isoreceived="20081205173650" -->
<!-- sent="Fri, 05 Dec 2008 11:36:50 -0600" -->
<!-- isosent="20081205173650" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="493966B2.9050005_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="726C4B94-957C-4251-A4A5-8EFA33C24F8D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with Profiling Fortran code<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 12:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7419.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7417.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7417.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7419.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
actually I am wondering whether my previous statement was correct. If 
<br>
you do not intercept the fortran MPI call, than it still goes to the C 
<br>
MPI call, which you can intercept. Only if you intercept the fortran MPI 
<br>
call we do not call the C MPI but the C PMPI call, correct? So in 
<br>
theory, it could still work...
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 12:22 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope you are aware, that *many* tools and application actually 
</span><br>
<span class="quotelev2">&gt;&gt; profile the fortran MPI layer by intercepting the C function calls. 
</span><br>
<span class="quotelev2">&gt;&gt; This allows them to not have to deal with f2c translation of MPI 
</span><br>
<span class="quotelev2">&gt;&gt; objects and not worry about the name mangling issue. Would there be a 
</span><br>
<span class="quotelev2">&gt;&gt; way to have both options  e.g. as a configure flag? The current commit 
</span><br>
<span class="quotelev2">&gt;&gt; basically breaks all of these applications...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was unaware of this, actually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it'd be pretty easy to have a configure switch for this (it would be 
</span><br>
<span class="quotelev1">&gt; a bunch more work for a run-time switch; I don't know if it's really 
</span><br>
<span class="quotelev1">&gt; worth it?).  Should we default to the current behavior, and have the 
</span><br>
<span class="quotelev1">&gt; configure switch enable call stacks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank_f
</span><br>
<span class="quotelev1">&gt;   PMPI_Comm_rank_f
</span><br>
<span class="quotelev1">&gt;   PMPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7419.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7417.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7417.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7419.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
