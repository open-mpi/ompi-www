<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 12:29:25 2008" -->
<!-- isoreceived="20081205172925" -->
<!-- sent="Fri, 5 Dec 2008 12:29:19 -0500" -->
<!-- isosent="20081205172919" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="726C4B94-957C-4251-A4A5-8EFA33C24F8D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4939635B.6020300_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 12:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2008, at 12:22 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; I hope you are aware, that *many* tools and application actually  
</span><br>
<span class="quotelev1">&gt; profile the fortran MPI layer by intercepting the C function calls.  
</span><br>
<span class="quotelev1">&gt; This allows them to not have to deal with f2c translation of MPI  
</span><br>
<span class="quotelev1">&gt; objects and not worry about the name mangling issue. Would there be  
</span><br>
<span class="quotelev1">&gt; a way to have both options  e.g. as a configure flag? The current  
</span><br>
<span class="quotelev1">&gt; commit basically breaks all of these applications...
</span><br>
<p>I was unaware of this, actually.
<br>
<p>So it'd be pretty easy to have a configure switch for this (it would  
<br>
be a bunch more work for a run-time switch; I don't know if it's  
<br>
really worth it?).  Should we default to the current behavior, and  
<br>
have the configure switch enable call stacks like this:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank_f
<br>
&nbsp;&nbsp;&nbsp;PMPI_Comm_rank_f
<br>
&nbsp;&nbsp;&nbsp;PMPI_Comm_rank
<br>
<p>?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7418.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
