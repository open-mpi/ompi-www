<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 15:01:19 2012" -->
<!-- isoreceived="20120201200119" -->
<!-- sent="Wed, 1 Feb 2012 15:01:14 -0500" -->
<!-- isosent="20120201200114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="1A636A98-6616-4A8F-A84F-90DA9AAE6E79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYe8+4Y4wN+xFJid7rE+UcKtarNiyB0EFQS2=_ydE9zfSA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-02-01 15:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10306.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="10306.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2012, at 6:07 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; My colleague and I want to implement a compile-time check (warning)
</span><br>
<span class="quotelev1">&gt; for clang compiler that specified buffer type matches passed
</span><br>
<span class="quotelev1">&gt; MPI_Datatype.
</span><br>
<p>Interesting!
<br>
<p><span class="quotelev1">&gt; Here's what is required on the OpenMPI part: all MPI functions that
</span><br>
<span class="quotelev1">&gt; accept a buffer and MPI_Datatype should be annotated with
</span><br>
<span class="quotelev1">&gt; mpi_typed_arg(buffer-arg-index, type-arg-index) attribute.  For
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Send(void *buf, ...etc...) __attribute__(( mpi_typed_arg(1,3) ));
</span><br>
<p>This isn't terrible; we do similar things throughout the code base.
<br>
<p>Will you be able to do this for MPI functions that take 2 choice buffers?  E.g., MPI_Gather.
<br>
<p><span class="quotelev1">&gt; Predefined datatypes should be annotated with corresponding C types:
</span><br>
<span class="quotelev1">&gt; mpi_datatype(var-decl-with-corresponding-type):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; extern int ompi_mpi_int_dummy;
</span><br>
<span class="quotelev1">&gt; extern struct ompi_predefined_datatype_t ompi_mpi_int
</span><br>
<span class="quotelev1">&gt;    __attribute__(( mpi_datatype(ompi_mpi_int_dummy) ));
</span><br>
<p>Just to make sure I understand this syntax: is ompi_mpi_int_dummy just to indicate the *type* that is congruent with the ompi_predefined_datatype_t?  I.e., I'd do something like this for MPI_DOUBLE:
<br>
<p>extern double ompi_mpi_double_dummy;
<br>
extern struct ompi_predefined_datatype_t ompi_mpi_double
<br>
&nbsp;&nbsp;&nbsp;__attribute__(( mpi_datatype(ompi_mpi_double_dummy) ));
<br>
<p>?
<br>
<p><span class="quotelev1">&gt; Users can annotate their types too:
</span><br>
<span class="quotelev1">&gt; int my_int_dummy;
</span><br>
<span class="quotelev1">&gt; MPI_Datatype my_int_type __attribute__(( mpi_datatype(my_int_dummy) ));
</span><br>
<p>More importantly, can they do:
<br>
<p>struct my_struct_t my_struct_dummy;
<br>
MPI_Datatype my_struct_type __attribute__(( mpi_datatype(my_struct_dummy) ));
<br>
<p>?
<br>
<p><span class="quotelev1">&gt; This design is not final, I'd really like to have mpi_datatype(type)
</span><br>
<span class="quotelev1">&gt; (e.g., mpi_datatype(long long)) but clang doesn't currently have
</span><br>
<span class="quotelev1">&gt; support for parsing that.  (But I think that clang developers won't
</span><br>
<span class="quotelev1">&gt; accept the patch unless we implement that).  So type annotations will
</span><br>
<span class="quotelev1">&gt; probably look like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; extern struct ompi_predefined_datatype_t ompi_mpi_int
</span><br>
<span class="quotelev1">&gt;    __attribute__(( mpi_datatype(int) ));
</span><br>
<p>That would certainly be better.
<br>
<p><span class="quotelev1">&gt; The attributes can be hidden with macros from compilers that don't
</span><br>
<span class="quotelev1">&gt; support them, so compatibility should not be a problem.
</span><br>
<p>Yep -- we have a bunch of those already.
<br>
<p><span class="quotelev1">&gt; I would like to hear if there is any issue with this idea or
</span><br>
<span class="quotelev1">&gt; implementation design that could prevent the corresponding patch for
</span><br>
<span class="quotelev1">&gt; mpi.h to be accepted.
</span><br>
<p>I'm supportive of this (mpi.h.in, you mean :-) ).
<br>
<p>Depending on the patch, however, we might need a signed Open MPI contribution agreement from you/your employer (it's essentially the Apache Foundation agreement with s/Apache/Open MPI/g).  It's annoying, I know :-(, but we have to keep the intellectual property of Open MPI &quot;clean&quot; so that it can guaranteed to remain BSD:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10306.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="10306.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
