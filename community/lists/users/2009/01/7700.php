<?
$subject_val = "Re: [OMPI users] MPI flavor-agnostic libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 10:01:01 2009" -->
<!-- isoreceived="20090114150101" -->
<!-- sent="Wed, 14 Jan 2009 15:00:54 +0000" -->
<!-- isosent="20090114150054" -->
<!-- name="Mattijs Janssens" -->
<!-- email="m.janssens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI flavor-agnostic libraries" -->
<!-- id="200901141500.55028.m.janssens_at_opencfd.co.uk" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="OF30AFFC2D.54157A4C-ON8525753E.005048EA-8525753E.005175B5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI flavor-agnostic libraries<br>
<strong>From:</strong> Mattijs Janssens (<em>m.janssens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 10:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7701.php">Hana Milani: "[OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>Previous message:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We did something similar in OpenFOAM by encapsulating our communications 
<br>
routines into a separate shared library which gets loaded through 
<br>
LD_LIBRARY_PATH.
<br>
<p>The api of this library does not expose any mpi specifics so for a new MPI 
<br>
version we only have to recompile our small communications library against 
<br>
the new MPI and the rest of the code works as normal.
<br>
<p>Then we can just use LD_LIBRARY_PATH to pick which communications library to 
<br>
load and hence which mpi to use.
<br>
<p>On Wednesday 14 January 2009 14:49, Gregory D Abram wrote:
<br>
<span class="quotelev1">&gt; I'd like to release binary libraries that use MPI but are agnostic as to
</span><br>
<span class="quotelev1">&gt; which flavor or MPI (eg. OpenMPI, MVAPICH, LAM...) that is used by the
</span><br>
<span class="quotelev1">&gt; application linking the libraries.  I've seen that there are some
</span><br>
<span class="quotelev1">&gt; significant differences that stand in the way, for example that MPI_Comm is
</span><br>
<span class="quotelev1">&gt; a pointer on OpenMPI and an integer on MVAPICH.  I can see some ways that
</span><br>
<span class="quotelev1">&gt; might work, but they are pretty complex - for example, I could create an
</span><br>
<span class="quotelev1">&gt; intercept library that loads a real MPI library explicitly and do whatever
</span><br>
<span class="quotelev1">&gt; needs be done (for example, translating MPI_Comm parameters).  Does anyone
</span><br>
<span class="quotelev1">&gt; know of anything that might help?
</span><br>
<p><pre>
-- 
Mattijs Janssens
OpenCFD Ltd.
9 Albert Road,
Caversham,
Reading RG4 7AN.
Tel: +44 (0)118 9471030
Email: M.Janssens_at_[hidden]
URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7701.php">Hana Milani: "[OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>Previous message:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
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
