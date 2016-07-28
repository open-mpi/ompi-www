<?
$subject_val = "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:39:28 2016" -->
<!-- isoreceived="20160321203928" -->
<!-- sent="Mon, 21 Mar 2016 20:39:25 +0000" -->
<!-- isosent="20160321203925" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="871t73ftvm.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAFkGP2mvYORDufbhbb44EgvjmEZyZntL8_zGA8bZMNV=mV=3gA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 16:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28777.php">Brian Dobbins: "[OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Dobbins &lt;bdobbins_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   This isn't really a problem, per se, but rather a search for a more
</span><br>
<span class="quotelev1">&gt; elegant solution.  It also isn't specific to OpenMPI, but I figure the
</span><br>
<span class="quotelev1">&gt; experience and knowledge of people here made it a suitable place to ask:
</span><br>
<p>It's also not Fortran specific, though it's probably best asked about in
<br>
a Fortran forum.
<br>
<p><span class="quotelev1">&gt;   I'm working on some code that'll be used and downloaded by others on
</span><br>
<span class="quotelev1">&gt; multiple systems, and this code is using some MPI3 features (neighborhood
</span><br>
<span class="quotelev1">&gt; collectives), but not everyone has the latest MPI libraries, many people
</span><br>
<span class="quotelev1">&gt; will be running the code on systems without these functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   If this were a C/C++ code, it'd be quite easy to deal with this as
</span><br>
<span class="quotelev1">&gt; 'mpi.h' has MPI_VERSION as a #define, so I can use a preprocessor check to
</span><br>
<span class="quotelev1">&gt; conditionally compile either the neighbor routines or the old
</span><br>
<span class="quotelev1">&gt; point-to-point routines.  However, Fortran obviously doesn't use #define
</span><br>
<span class="quotelev1">&gt; natively, and so the mpif.h (or MPI module) simply define MPI_VERSION as a
</span><br>
<span class="quotelev1">&gt; parameter - I can use it in the code, but not at the preprocessor level.
</span><br>
<span class="quotelev1">&gt; So, putting the MPI3 neighborhood collective in the code, even in a
</span><br>
<span class="quotelev1">&gt; non-executed codepath, results in an error when linking with an MPI2
</span><br>
<span class="quotelev1">&gt; library since the routine isn't found.
</span><br>
<p>With which compiler, and even optimized?
<br>
<p>&nbsp;&nbsp;$ `mpif90 --showme` --version | head -n1
<br>
&nbsp;&nbsp;GNU Fortran (GCC) 4.4.7 20120313 (Red Hat 4.4.7-17)
<br>
&nbsp;&nbsp;$ cat a.f90
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;if (mpi_version == 3) call undefined()
<br>
&nbsp;&nbsp;print *, mpi_version
<br>
&nbsp;&nbsp;end
<br>
&nbsp;&nbsp;$ mpif90 a.f90 &amp;&amp; ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
<p><span class="quotelev1">&gt;   Obviously I can just have the user supply the -DMPI_VERSION=3 flag (or a
</span><br>
<span class="quotelev1">&gt; different one, since this *is* a parameter name) *if they know* their MPI
</span><br>
<span class="quotelev1">&gt; is version 3, and I intend to submit a patch to Cmake's FindMPI command to
</span><br>
<span class="quotelev1">&gt; detect this automatically, but is there a *better* way to do this for
</span><br>
<span class="quotelev1">&gt; projects that aren't using Cmake?
</span><br>
<p>Yes, not using cmake is definitely better -- people like me should be
<br>
able to build the result!  With autoconf, you could run the above to get
<br>
mpi_version, or adapt it to produce a link-time error for a specific
<br>
version if cross-compiling.  However, you should test for the routines
<br>
you need in the normal autoconf way.  Presumably checking one is enough
<br>
for a particular standard level.
<br>
<p>There are examples of autoconf tests for MPI3 (at least the
<br>
constification of arguments in C) in several profiling/correctness
<br>
tools, but I can't remember what's where, and I think all in C.
<br>
<p><span class="quotelev1">&gt; Scientists don't typically know what
</span><br>
<span class="quotelev1">&gt; version of MPI they're running, so the more that can be detected and
</span><br>
<span class="quotelev1">&gt; handled automatically the better.
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; (Providing stub versions that link
</span><br>
<span class="quotelev1">&gt; *after* the main library (and thus don't get chosen, I think) also seems
</span><br>
<span class="quotelev1">&gt; less than elegant.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   To make it slightly more broad - if new MPI versions outpace library
</span><br>
<span class="quotelev1">&gt; obsolescence on existing systems, what's the ideal way to write portable
</span><br>
<span class="quotelev1">&gt; Fortran code that uses the most recent features?  Is there a way to use or
</span><br>
<span class="quotelev1">&gt; change MPI_VERSION and MPI_SUBVERSION such that they can be used to
</span><br>
<span class="quotelev1">&gt; conditionally compile code in Fortran built by standard 'Make' processes?
</span><br>
<span class="quotelev1">&gt; Is 'recommending' that the mpif90/mpif77 commands provide them a terrible,
</span><br>
<span class="quotelev1">&gt; terrible idea?
</span><br>
<p>I'd hope you could modularize things and select the right modules to
<br>
link using a configure test and possibly automake.  That's probably
<br>
easier for Fortran than the sort of C I encounter.
<br>
<p>You _can_ use cpp for Fortran with care (.F extension for GNU Fortran),
<br>
but it's intrinsically evil.  The cp2k chemistry code is one that does,
<br>
including for MPI-3 selection, but it isn't autoconfiscated and so is
<br>
relatively awkward to build.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28777.php">Brian Dobbins: "[OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28782.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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
