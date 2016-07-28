<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 18:12:10 2012" -->
<!-- isoreceived="20121019221210" -->
<!-- sent="Sat, 20 Oct 2012 01:11:44 +0300" -->
<!-- isosent="20121019221144" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYdNCpz=EzQ9PWS4o4xhpVH74req0x5co39kE7eWVSXM=g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6A9B94FD-0347-4990-80F2-29B01A903DBE_at_cisco.com" -->
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
<strong>Date:</strong> 2012-10-19 18:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 18, 2012 at 7:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 7, 2012, at 2:25 PM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I tried to follow your advice about Fortran datatypes and updated the
</span><br>
<span class="quotelev2">&gt;&gt; patch accordingly (attached).  This patch is against OpenMPI 1.9.
</span><br>
<span class="quotelev2">&gt;&gt; Please review.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments in the attached.  Look for &quot;*** JMS&quot;.
</span><br>
<p>Thank you for the review!  Please find attached an updated patch.
<br>
<p>*** JMS The thought occurs to me that Fortran's built-in types
<br>
CHARACTER, COMPLEX, LOGICAL, INTEGER, REAL, DOUBLE COMPLEX, and DOUBLE
<br>
PRECISION will *always* exist if we are including Fortran support.
<br>
The other (LOGICAL1, LOGICAL4, ...etc.) are optional/compiler
<br>
extensions and may or may not exist.  Regardless, the point is that I
<br>
wonder if we don't need these extra #defines (E.g.,
<br>
OMPI_HAVE_FORTRAN_CHARACTER) -- we could just use #if
<br>
(OMPI_BUILD_FORTRAN_MPIFH_BINDINGS ||
<br>
OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS ||
<br>
OMPI_BUILD_FORTRAN_USEMPI_BINDINGS) (or have an abbreviation for
<br>
that)...
<br>
<p>Thank you for the suggestion, I introduced OMPI_BUILD_FORTRAN_BINDINGS
<br>
into mpi.h.in for this.
<br>
<p>*** JMS Per my above ramble, CHARACTER and INTEGER (and others) are
<br>
built-in to Fortran, so we'll always have these if we're building
<br>
Fortran at all.  So how about simplifying these cases a little;
<br>
perhaps something like:
<br>
*** JMS I think these &quot;2foo&quot; types might be able to be simplified per
<br>
my above ramble...?
<br>
<p>Simplified thanks to OMPI_BUILD_FORTRAN_BINDINGS.
<br>
<p>*** JMS Can we do anything with ## to simplify these macros a bit,
<br>
perchance?  (I haven't thought this through)
<br>
<p>+OMPI_DECLSPEC extern struct ompi_predefined_datatype_t ompi_mpi_logical1
<br>
+#if OMPI_HAVE_FORTRAN_LOGICAL1
<br>
+  OMPI_ATTR_TYPE_TAG(ompi_fortran_logical1_t)
<br>
+#endif
<br>
+  ;
<br>
<p>I could not think of anything that could help to simplify that part.
<br>
All of these attributes are predicated on different conditions.
<br>
<p>&nbsp;typedef struct {
<br>
&nbsp;&nbsp;&nbsp;ompi_fortran_real_t real;
<br>
&nbsp;&nbsp;&nbsp;ompi_fortran_real_t imag;
<br>
-} ompi_fortran_complex_t;
<br>
+} ompi_fortran_complex_struct_t;
<br>
&nbsp;#endif
<br>
<p>*** JMS I was initially curious as to why you renamed these, but now I
<br>
see: it's because we added the same names into mpi.h.in.  Do we really
<br>
still need them here in ompi_config.h.in?  I.e., aren't the
<br>
definitions the same?
<br>
<p>They are different because macro names in mpi.h.in are defined to
<br>
expand standard complex types' names (like float _Complex); there is
<br>
special syntax to access real and imaginary parts of these.  Types in
<br>
ompi_config.h.in are custom structs that are layout-compatible with
<br>
standard complex types; real and imaginary parts can be accessed with
<br>
usual member access operators.
<br>
<p>So, while we could change op_base_functions.c that uses these structs
<br>
to use standard syntax (and remove struct declarations), I doubt that
<br>
it is desirable. As far as I understand, one should be able to build
<br>
OpenMPI with a compiler that does not support standard complex types.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11621/ompi-v5.patch">ompi-v5.patch</a>
</ul>
<!-- attachment="ompi-v5.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
