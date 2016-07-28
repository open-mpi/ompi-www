<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:22:58 2012" -->
<!-- isoreceived="20120531112258" -->
<!-- sent="Thu, 31 May 2012 14:22:33 +0300" -->
<!-- isosent="20120531112233" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYd-kSp5RfYVBnZgMRwM37F_UL2Ajpo85iTuMER3fKp7dw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="34265234-A19C-46DD-B87C-DE453B7FF850_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-31 07:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 31, 2012 at 2:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 30, 2012, at 7:04 PM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;li&gt;&lt;tt&gt;must_be_null&lt;/tt&gt; specifies that the expression should be a null
</span><br>
<span class="quotelev2">&gt;&gt; +pointer constant, for example:
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;blockquote&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;pre&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/* In mpi.h */
</span><br>
<span class="quotelev2">&gt;&gt; +extern struct mpi_datatype mpi_datatype_null
</span><br>
<span class="quotelev2">&gt;&gt; + &#194;&#160; &#194;&#160;__attribute__(( type_tag_for_datatype(mpi, void, must_be_null) ));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#define MPI_DATATYPE_NULL ((MPI_Datatype) &amp;amp;mpi_datatype_null)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* In user code */
</span><br>
<span class="quotelev2">&gt;&gt; +MPI_Send(buffer, 1, MPI_DATATYPE_NULL /*, ... */); // warning:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DATATYPE_NULL
</span><br>
<span class="quotelev2">&gt;&gt; + &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; // was specified but buffer
</span><br>
<span class="quotelev2">&gt;&gt; + &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; // is not a null pointer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure that this is a warning we want to set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_&lt;foo&gt;_NULL constants are defined as &quot;invalid handles&quot; -- in most cases, it's an error to pass them to an MPI function (e.g., the MPI_Send example, above, would generate an MPI exception). &#194;&#160;They're usually used for comparison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't think of a case offhand where it's acceptable to pass MPI_DATATYPE_NULL to an MPI function. &#194;&#160;I could be missing something, though... &#194;&#160;(actually, I guess I can think of some cases -- we have some regression test programs that specifically pass MPI_DATATYPE_NULL, just to ensure that it properly invokes an MPI exception)
</span><br>
<p>I usually pass &lt;NULL, MPI_DATATYPE_NULL&gt; as arguments which are
<br>
&quot;significant only at root&quot; and that function call is not in the root
<br>
process code path.
<br>
<p><span class="quotelev1">&gt; But even so, if one passes MPI_DATATYPE_NULL, the buffer and count arguments will be ignored. &#194;&#160;So I don't think that we want to require that MPI_DATATYPE_NULL *requires* a NULL pointer.
</span><br>
<p>It just doesn't make sense to pass non-null pointer and
<br>
MPI_DATATYPE_NULL (because null pointer will be ignored).  Hence the
<br>
warning.
<br>
<p><span class="quotelev2">&gt;&gt; *** JMS I'm a bit confused as to why 2int got a tag, but the others
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;did not. &#194;&#160;We do have C equivalents for all types -- do you need a
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;listing of the configure results where we figured out all the C
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;equivalents? &#194;&#160;(i.e., I can look them up for you -- our configury
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;is a bit... deep :-) )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did not annotate them because those are Fortran types. &#194;&#160;If there are
</span><br>
<span class="quotelev2">&gt;&gt; some known C equivalents in OpenMPI, I will happily add them. &#194;&#160;But
</span><br>
<span class="quotelev2">&gt;&gt; please note that if these equivalents are discovered during configure,
</span><br>
<span class="quotelev2">&gt;&gt; we can not hardcode them into mpi.h.in. &#194;&#160;Some autoconf macros will be
</span><br>
<span class="quotelev2">&gt;&gt; needed probably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should have AC macros for all of these already.
</span><br>
<p>OK, I'll try find them to support (1) usecase described below.
<br>
<p><span class="quotelev1">&gt; The point of this is because all MPI datatypes are available in all languages, meaning that I could MPI_Send an MPI_INTEGER from fortran and receive it in C code (that MPI_Recv's an MPI_INTEGER). &#194;&#160;FWIW, I've seen apps do this in two general cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Fortran sends to C, C just holds the blob without looking at/understanding the value, C eventually sends the blob back to Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Fortran sends to C, and C interprets the value because it knows the interoperable type (e.g., sends MPI_INTEGER, receives into a C int).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the app doesn't know the exact equivalent C type corresponding to the Fortran type (e.g., case 1), they may need one of the examples I provided above (e.g., cast the buffer to (void*)).
</span><br>
<p>Agreed.
<br>
<p>Dmitri
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
<li><strong>Next message:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11064.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11066.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
