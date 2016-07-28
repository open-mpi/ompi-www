<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:08:00 2012" -->
<!-- isoreceived="20120531110800" -->
<!-- sent="Thu, 31 May 2012 07:07:55 -0400" -->
<!-- isosent="20120531110755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="34265234-A19C-46DD-B87C-DE453B7FF850_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYd0X9g3tK0UU11tT+uB_nFifgpMMsj_bVVch5RvxUh-cw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-05-31 07:07:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2012, at 7:04 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; +&lt;li&gt;&lt;tt&gt;must_be_null&lt;/tt&gt; specifies that the expression should be a null
</span><br>
<span class="quotelev1">&gt; +pointer constant, for example:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;blockquote&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;pre&gt;
</span><br>
<span class="quotelev1">&gt; +/* In mpi.h */
</span><br>
<span class="quotelev1">&gt; +extern struct mpi_datatype mpi_datatype_null
</span><br>
<span class="quotelev1">&gt; +    __attribute__(( type_tag_for_datatype(mpi, void, must_be_null) ));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define MPI_DATATYPE_NULL ((MPI_Datatype) &amp;amp;mpi_datatype_null)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* In user code */
</span><br>
<span class="quotelev1">&gt; +MPI_Send(buffer, 1, MPI_DATATYPE_NULL /*, ... */); // warning:
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL
</span><br>
<span class="quotelev1">&gt; +                                                   // was specified but buffer
</span><br>
<span class="quotelev1">&gt; +                                                   // is not a null pointer
</span><br>
<p>I'm not sure that this is a warning we want to set.
<br>
<p>MPI_&lt;foo&gt;_NULL constants are defined as &quot;invalid handles&quot; -- in most cases, it's an error to pass them to an MPI function (e.g., the MPI_Send example, above, would generate an MPI exception).  They're usually used for comparison.
<br>
<p>I can't think of a case offhand where it's acceptable to pass MPI_DATATYPE_NULL to an MPI function.  I could be missing something, though...  (actually, I guess I can think of some cases -- we have some regression test programs that specifically pass MPI_DATATYPE_NULL, just to ensure that it properly invokes an MPI exception)  
<br>
<p>But even so, if one passes MPI_DATATYPE_NULL, the buffer and count arguments will be ignored.  So I don't think that we want to require that MPI_DATATYPE_NULL *requires* a NULL pointer.
<br>
<p><span class="quotelev1">&gt; *** JMS What happens if the argument type is (void*)?  Does that match
</span><br>
<span class="quotelev1">&gt;    the tag type?  E.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...snipped...]
</span><br>
<span class="quotelev1">&gt; If a function is passed a type tag (that is, MPI_Datatype) that does
</span><br>
<span class="quotelev1">&gt; not have an annotation, then that function call is not checked.  That
</span><br>
<span class="quotelev1">&gt; is, in MPI_Send(buf, 1, MPI_BYTE, ...) buf can be of any pointer type.
</span><br>
<p>All the above sounds good.
<br>
<p><span class="quotelev1">&gt; *** JMS I'm a bit confused as to why 2int got a tag, but the others
</span><br>
<span class="quotelev1">&gt;    did not.  We do have C equivalents for all types -- do you need a
</span><br>
<span class="quotelev1">&gt;    listing of the configure results where we figured out all the C
</span><br>
<span class="quotelev1">&gt;    equivalents?  (i.e., I can look them up for you -- our configury
</span><br>
<span class="quotelev1">&gt;    is a bit... deep :-) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not annotate them because those are Fortran types.  If there are
</span><br>
<span class="quotelev1">&gt; some known C equivalents in OpenMPI, I will happily add them.  But
</span><br>
<span class="quotelev1">&gt; please note that if these equivalents are discovered during configure,
</span><br>
<span class="quotelev1">&gt; we can not hardcode them into mpi.h.in.  Some autoconf macros will be
</span><br>
<span class="quotelev1">&gt; needed probably.
</span><br>
<p>We should have AC macros for all of these already.
<br>
<p>The point of this is because all MPI datatypes are available in all languages, meaning that I could MPI_Send an MPI_INTEGER from fortran and receive it in C code (that MPI_Recv's an MPI_INTEGER).  FWIW, I've seen apps do this in two general cases:
<br>
<p>1. Fortran sends to C, C just holds the blob without looking at/understanding the value, C eventually sends the blob back to Fortran.
<br>
<p>2. Fortran sends to C, and C interprets the value because it knows the interoperable type (e.g., sends MPI_INTEGER, receives into a C int).
<br>
<p>If the app doesn't know the exact equivalent C type corresponding to the Fortran type (e.g., case 1), they may need one of the examples I provided above (e.g., cast the buffer to (void*)).
<br>
<p><span class="quotelev1">&gt; *** JMS Per my question on MPI_Alltoallw, I'm not quite sure how these
</span><br>
<span class="quotelev1">&gt;    tags work with arrays of datatypes...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I removed the incorrect attribute on PMPI_Alltoallw.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev1">&gt; *** What happens if we're compiling C and std::complex&lt;foo&gt; isn't
</span><br>
<span class="quotelev1">&gt;    defined?  I see that &lt;complex&gt; is only defined above #if __cplusplus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then OMPI_ATTR_TYPE_TAG_CXX(type) is defined to be empty and these
</span><br>
<span class="quotelev1">&gt; type tags are not checked.
</span><br>
<p>Ah!  I missed that it was a different macro (OMPI_ATTR_TYPE_TAG_CPP/CXX).  Got it.
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
<li><strong>Next message:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11063.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
