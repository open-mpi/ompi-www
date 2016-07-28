<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 11:37:16 2012" -->
<!-- isoreceived="20121026153716" -->
<!-- sent="Fri, 26 Oct 2012 11:37:12 -0400" -->
<!-- isosent="20121026153712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="45D8768C-6B79-40BA-9E57-816CA7B518D8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYdNCpz=EzQ9PWS4o4xhpVH74req0x5co39kE7eWVSXM=g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-26 11:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>In reply to:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2012, at 6:11 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the suggestion, I introduced OMPI_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; into mpi.h.in for this.
</span><br>
<p>Excellent.
<br>
<p><span class="quotelev1">&gt; *** JMS Per my above ramble, CHARACTER and INTEGER (and others) are
</span><br>
<span class="quotelev1">&gt; built-in to Fortran, so we'll always have these if we're building
</span><br>
<span class="quotelev1">&gt; Fortran at all.  So how about simplifying these cases a little;
</span><br>
<span class="quotelev1">&gt; perhaps something like:
</span><br>
<span class="quotelev1">&gt; *** JMS I think these &quot;2foo&quot; types might be able to be simplified per
</span><br>
<span class="quotelev1">&gt; my above ramble...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simplified thanks to OMPI_BUILD_FORTRAN_BINDINGS.
</span><br>
<p>w00t
<br>
<p><span class="quotelev1">&gt; *** JMS Can we do anything with ## to simplify these macros a bit,
</span><br>
<span class="quotelev1">&gt; perchance?  (I haven't thought this through)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC extern struct ompi_predefined_datatype_t ompi_mpi_logical1
</span><br>
<span class="quotelev1">&gt; +#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev1">&gt; +  OMPI_ATTR_TYPE_TAG(ompi_fortran_logical1_t)
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +  ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could not think of anything that could help to simplify that part.
</span><br>
<span class="quotelev1">&gt; All of these attributes are predicated on different conditions.
</span><br>
<p>Ok.  I mucked around a little and couldn't figure out a better way, either.
<br>
<p><span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt;   ompi_fortran_real_t real;
</span><br>
<span class="quotelev1">&gt;   ompi_fortran_real_t imag;
</span><br>
<span class="quotelev1">&gt; -} ompi_fortran_complex_t;
</span><br>
<span class="quotelev1">&gt; +} ompi_fortran_complex_struct_t;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** JMS I was initially curious as to why you renamed these, but now I
</span><br>
<span class="quotelev1">&gt; see: it's because we added the same names into mpi.h.in.  Do we really
</span><br>
<span class="quotelev1">&gt; still need them here in ompi_config.h.in?  I.e., aren't the
</span><br>
<span class="quotelev1">&gt; definitions the same?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are different because macro names in mpi.h.in are defined to
</span><br>
<span class="quotelev1">&gt; expand standard complex types' names (like float _Complex); there is
</span><br>
<span class="quotelev1">&gt; special syntax to access real and imaginary parts of these.  Types in
</span><br>
<span class="quotelev1">&gt; ompi_config.h.in are custom structs that are layout-compatible with
</span><br>
<span class="quotelev1">&gt; standard complex types; real and imaginary parts can be accessed with
</span><br>
<span class="quotelev1">&gt; usual member access operators.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, while we could change op_base_functions.c that uses these structs
</span><br>
<span class="quotelev1">&gt; to use standard syntax (and remove struct declarations), I doubt that
</span><br>
<span class="quotelev1">&gt; it is desirable. As far as I understand, one should be able to build
</span><br>
<span class="quotelev1">&gt; OpenMPI with a compiler that does not support standard complex types.
</span><br>
<p>Correct.
<br>
<p>This all now looks good to me (i.e., v5 of the patch); many thanks for your perseverance and patience.
<br>
<p>For me to commit this, can you do two things:
<br>
<p>1. I hate to do this, but this is more than a &quot;trivial&quot; patch that we could accept without attribution.  Can you do one of two things:
<br>
&nbsp;&nbsp;&nbsp;1a. Sign a contributor agreement (almost identical to the Apache contributor agreement): <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
<br>
&nbsp;&nbsp;&nbsp;1b. Send a v6 of your patch to this public mailing list with a BSD-compatible license at the top, thereby releasing your patch under that license (which is compatible with OMPI's).
<br>
<p>2. Give me a short description that I can use to put into the README / FAQ / etc. about what this functionality does, what prerequisites are needed (e.g., version of clang, etc.). 
<br>
<p>Many thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>In reply to:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
