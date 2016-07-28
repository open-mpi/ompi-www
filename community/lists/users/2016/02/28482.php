<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 21:47:46 2016" -->
<!-- isoreceived="20160210024746" -->
<!-- sent="Wed, 10 Feb 2016 11:47:45 +0900" -->
<!-- isosent="20160210024745" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="56BAA4D1.4060405_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="87pow59al2.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 21:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28481.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed,
<br>
<p>On 2/10/2016 12:18 AM, Jed Brown wrote:
<br>
<span class="quotelev1">&gt; Did anyone suggest violating the standard? 
</span><br>
if i understand correctly what George wrote earlier, then yes, removing 
<br>
predefined datatypes from the header files can be seen as a violation of 
<br>
the standard
<br>
<span class="quotelev2">&gt;&gt; in your configure script, you can simply try to compile a simple fortran
</span><br>
<span class="quotelev2">&gt;&gt; MPI hello world.
</span><br>
<span class="quotelev2">&gt;&gt; if it fails, then you can assume fortran bindings are not available, and
</span><br>
<span class="quotelev2">&gt;&gt; not use fortran types in your application.
</span><br>
<span class="quotelev1">&gt; With which compiler?  Remember that we're talking about the C macros --
</span><br>
<span class="quotelev1">&gt; the user of those might not have any Fortran in their code.  Like
</span><br>
<span class="quotelev1">&gt; suppose I have a C library that implements a custom reduction.  I'll
</span><br>
<span class="quotelev1">&gt; need to be checking the datatype to dispatch to a concrete
</span><br>
<span class="quotelev1">&gt; implementation.  Must I compile in support for being called with
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_COMPLEX?
</span><br>
<span class="quotelev1">&gt;
</span><br>
does that really matter ?
<br>
<p>i assume your library and the user code are built with the same OpenMPI.
<br>
if there is no Fortran support, then you are compiling code that cannot 
<br>
be invoked (e.g. dead code),
<br>
and though that is not the most elegant thing to do, that does not sound 
<br>
like a showstopper to me.
<br>
<p>so yes, compile in support for being called with Fortran predefined 
<br>
datatypes,
<br>
worst case scenario is you generate broken dead code.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28481.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
