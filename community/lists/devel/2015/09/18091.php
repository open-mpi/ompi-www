<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 00:16:43 2015" -->
<!-- isoreceived="20150921041643" -->
<!-- sent="Sun, 20 Sep 2015 21:16:39 -0700" -->
<!-- isosent="20150921041639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch" -->
<!-- id="A9B1B7A8-E2BE-4B04-9B3B-DECE7076DE0A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABwOO=cecWdcGHM4QqqqDGh0YY5Xp-aMH87_5upHCDvLRpWCMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 00:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18092.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18090.php">Kevin Buckley: "[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>In reply to:</strong> <a href="18090.php">Kevin Buckley: "[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, we tried to catch all those, but obviously must have missed this one. I&#226;&#128;&#153;ll add it to the mix
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Sep 20, 2015, at 9:01 PM, Kevin Buckley &lt;kevin.buckley.ecs.vuw.ac.nz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Watcha,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we recently updated the OpenMPI installation on our School's ArchLinux
</span><br>
<span class="quotelev1">&gt; machines, where OpenMPI is built as a PkgSrc package, to 1.10.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In running through the build, we were told that PkgSrc wasn't too keen on
</span><br>
<span class="quotelev1">&gt; the use of the == with a single &quot;if test&quot; construct and so I needed to apply
</span><br>
<span class="quotelev1">&gt; the following patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- configure.orig      2015-08-24 23:33:14.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ configure
</span><br>
<span class="quotelev1">&gt; @@ -60570,8 +60570,8 @@ _ACEOF
</span><br>
<span class="quotelev1">&gt; $as_echo &quot;$MPI_OFFSET_DATATYPE&quot; &gt;&amp;6; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; &amp;&amp; \
</span><br>
<span class="quotelev1">&gt; -       test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; +    if test &quot;$ompi_fortran_happy&quot; = &quot;1&quot; &amp;&amp; \
</span><br>
<span class="quotelev1">&gt; +       test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Get the kind value for Fortran MPI_INTEGER_KIND (corresponding
</span><br>
<span class="quotelev1">&gt;     # to whatever is the same size as a F77 INTEGER -- for the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seem to recall that this is &quot;good practice&quot; and indeed, can see that
</span><br>
<span class="quotelev1">&gt; other &quot;if test&quot; stanzas in the configure script have been fixed to match,
</span><br>
<span class="quotelev1">&gt; so perhaps this one has just slipped through the net and/or not been
</span><br>
<span class="quotelev1">&gt; reported by anyone else as yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eScience Consultant
</span><br>
<span class="quotelev1">&gt; School of Engineering and Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18090.php">http://www.open-mpi.org/community/lists/devel/2015/09/18090.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18092.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18090.php">Kevin Buckley: "[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
<li><strong>In reply to:</strong> <a href="18090.php">Kevin Buckley: "[OMPI devel] OpenMPI 1.10.0: Arch Linux PkgSrc build suggests configure script patch"</a>
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
