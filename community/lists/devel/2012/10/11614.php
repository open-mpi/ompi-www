<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 12:32:49 2012" -->
<!-- isoreceived="20121018163249" -->
<!-- sent="Thu, 18 Oct 2012 12:32:41 -0400" -->
<!-- isosent="20121018163241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="6A9B94FD-0347-4990-80F2-29B01A903DBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYfXHck5uJiG+fZrTd8B700dCK-u2-yNOAwA+2YzCVUrSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 12:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11613.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2012, at 2:25 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ok, this might get a little complicated.  You'll probably need to use a pair of them (this is trunk only; it's different in v1.6 because we wholly revamped the trunk's Fortran support recently):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. You can see all the OMPI_HAVE_FORTRAN_&lt;type&gt;'s at the top of mpi.h.in.  These indicate whether the Fortran compiler supports these types or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. We currently define *one* Fortran type in mpi.h.in: ompi_fortran_integer_t.  It looks like we need to add the rest of them: ompi_fortran_&lt;type&gt;_t (these are all in opal/include/opal_config.h, but mpi.h is a standalone, user-includeable file, which is why it replicates a subset of all the configure-generated results).  Here's a first stab at what I think will be needed in mpi.h.in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Jeff,
</span><br>
<p>I'm *so* sorry for the delay; I'm literally buried in SC deadlines.  It's that time of year again...  :-(
<br>
<p><span class="quotelev1">&gt; I would like to continue this discussion.  Corresponding changes in
</span><br>
<span class="quotelev1">&gt; Clang are already in SVN and the feature should be released with the
</span><br>
<span class="quotelev1">&gt; upcoming Clang 3.2.
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; I tried to follow your advice about Fortran datatypes and updated the
</span><br>
<span class="quotelev1">&gt; patch accordingly (attached).  This patch is against OpenMPI 1.9.
</span><br>
<span class="quotelev1">&gt; Please review.
</span><br>
<p>Comments in the attached.  Look for &quot;*** JMS&quot;.
<br>
<p><span class="quotelev1">&gt; Is there any chance we can get a less invasive (header-only, without
</span><br>
<span class="quotelev1">&gt; autotools magic for Fortran datatypes support) change in the OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.7?
</span><br>
<p>Hmm.  I'm not sure how to do that -- I don't know of any C compiler that has built-in #defines for what Fortran types exist.
<br>
<p>I'm open to suggestions, though -- can you suggest an easier solution?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11614/ompi-v4-jms.patch">ompi-v4-jms.patch</a>
</ul>
<!-- attachment="ompi-v4-jms.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11613.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11615.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
