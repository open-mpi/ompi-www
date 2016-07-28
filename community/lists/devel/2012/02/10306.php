<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 17:36:52 2012" -->
<!-- isoreceived="20120201223652" -->
<!-- sent="Thu, 2 Feb 2012 00:36:27 +0200" -->
<!-- isosent="20120201223627" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYdztmUhQwXxDD_SBt5_de5kL=RmyQ2z5hwG-kF6qGKw3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1A636A98-6616-4A8F-A84F-90DA9AAE6E79_at_cisco.com" -->
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
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 17:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 1, 2012 at 10:01 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 28, 2012, at 6:07 PM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here's what is required on the OpenMPI part: all MPI functions that
</span><br>
<span class="quotelev2">&gt;&gt; accept a buffer and MPI_Datatype should be annotated with
</span><br>
<span class="quotelev2">&gt;&gt; mpi_typed_arg(buffer-arg-index, type-arg-index) attribute. &#194;&#160;For
</span><br>
<span class="quotelev2">&gt;&gt; example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Send(void *buf, ...etc...) __attribute__(( mpi_typed_arg(1,3) ));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This isn't terrible; we do similar things throughout the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will you be able to do this for MPI functions that take 2 choice buffers? &#194;&#160;E.g., MPI_Gather.
</span><br>
<p>Yes, just put two attributes: __attribute__(( mpi_typed_arg(1,3),
<br>
mpi_typed_arg(4,6) ))
<br>
<p><span class="quotelev2">&gt;&gt; Predefined datatypes should be annotated with corresponding C types:
</span><br>
<span class="quotelev2">&gt;&gt; mpi_datatype(var-decl-with-corresponding-type):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; extern int ompi_mpi_int_dummy;
</span><br>
<span class="quotelev2">&gt;&gt; extern struct ompi_predefined_datatype_t ompi_mpi_int
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;__attribute__(( mpi_datatype(ompi_mpi_int_dummy) ));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure I understand this syntax: is ompi_mpi_int_dummy just to indicate the *type* that is congruent with the ompi_predefined_datatype_t?
</span><br>
<p>Yes, I did it that way because parsing a type-name as attribute
<br>
argument is not possible currently in clang, but I wanted to check how
<br>
it will work as quickly as possible.  But I'm now hacking the parser
<br>
to support the cleaner syntax.
<br>
<p><span class="quotelev1">&gt; I.e., I'd do something like this for MPI_DOUBLE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern double ompi_mpi_double_dummy;
</span><br>
<span class="quotelev1">&gt; extern struct ompi_predefined_datatype_t ompi_mpi_double
</span><br>
<span class="quotelev1">&gt; &#194;&#160; __attribute__(( mpi_datatype(ompi_mpi_double_dummy) ));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<p>Right, but I'm going for the cleaner syntax anyway.
<br>
<p><span class="quotelev2">&gt;&gt; Users can annotate their types too:
</span><br>
<span class="quotelev2">&gt;&gt; int my_int_dummy;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype my_int_type __attribute__(( mpi_datatype(my_int_dummy) ));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More importantly, can they do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct my_struct_t my_struct_dummy;
</span><br>
<span class="quotelev1">&gt; MPI_Datatype my_struct_type __attribute__(( mpi_datatype(my_struct_dummy) ));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<p>Yes, specifying any type is possible.
<br>
<p><span class="quotelev2">&gt;&gt; I would like to hear if there is any issue with this idea or
</span><br>
<span class="quotelev2">&gt;&gt; implementation design that could prevent the corresponding patch for
</span><br>
<span class="quotelev2">&gt;&gt; mpi.h to be accepted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm supportive of this (mpi.h.in, you mean :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the patch, however, we might need a signed Open MPI contribution agreement from you/your employer
</span><br>
<p>That's fine for us.
<br>
<p>Dmitri Gribenko
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="10307.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
