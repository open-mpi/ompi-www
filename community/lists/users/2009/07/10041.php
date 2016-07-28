<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:34:34 2009" -->
<!-- isoreceived="20090722173434" -->
<!-- sent="Wed, 22 Jul 2009 13:34:28 -0400" -->
<!-- isosent="20090722173428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="3032307A-2733-47D5-9323-4357FBCC949B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87ab2zv6u7.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 13:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10050.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10050.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2009, at 9:09 AM, Dave Love wrote:
<br>
<p><span class="quotelev2">&gt; &gt; you should compile openmpi with each pf intel and gfortran seperatly
</span><br>
<span class="quotelev2">&gt; &gt; and install each of them in a separate location, and use mpi- 
</span><br>
<span class="quotelev1">&gt; selector
</span><br>
<span class="quotelev2">&gt; &gt; to select one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What, precisely, requires that, at least if you can recompile the MPI
</span><br>
<span class="quotelev1">&gt; program with appropriate options?  (Presumably it's features of the
</span><br>
<span class="quotelev1">&gt; Fortran/C interfacing and/or Fortran runtime, but the former may be
</span><br>
<span class="quotelev1">&gt; influenced by compilation options, and I'd hope the glue didn't  
</span><br>
<span class="quotelev1">&gt; require
</span><br>
<span class="quotelev1">&gt; the compiler runtime -- the Intel compiler is on the list to check.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>See <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/README#257">https://svn.open-mpi.org/source/xref/ompi_1.3/README#257</a>.
<br>
<p><span class="quotelev1">&gt; It's obviously of interest to those of us facing combinatorial  
</span><br>
<span class="quotelev1">&gt; explosion
</span><br>
<span class="quotelev1">&gt; of libraries we're expected to install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed.  In OMPI, we tried to make this as simple as possible.  But  
<br>
unless you use specific compiler options to hide their differences, it  
<br>
isn't possible and is beyond our purview to fix.  :-(  (similar  
<br>
situation with the C++ bindings)
<br>
<p><span class="quotelev1">&gt; Also, is there any reason to use mpi-selector rather than switcher?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Nope -- they do about the same thing.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10050.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10050.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
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
