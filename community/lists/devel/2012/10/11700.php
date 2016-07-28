<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 03:45:54 2012" -->
<!-- isoreceived="20121031074554" -->
<!-- sent="Wed, 31 Oct 2012 09:45:29 +0200" -->
<!-- isosent="20121031074529" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYeq5RKx=9CEw-fbDqAWMMyZiN5koFSpQ3UwhYSYbP-21Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20862D41-8886-41EE-9658-995DDA131443_at_cisco.com" -->
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
<strong>Date:</strong> 2012-10-31 03:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Previous message:</strong> <a href="11699.php">Paul Hargrove: "Re: [OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2012 at 4:25 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 28, 2012, at 10:28 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the feedback!  Hopefully the attached patch fixes both of these.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. There are two helper structs with complex numbers.  I predicated
</span><br>
<span class="quotelev2">&gt;&gt; the struct declarations and use to appear only in C99.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. These macros were indeed missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did a few tests and this now looks good; no more warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I brought up this functionality on the weekly OMPI dev telecon today and got an important piece of feedback: apparently there are a large class of apps that wrap their messages as transparent blobs, and then use either non-blob-like or derived MPI datatypes.  (I said something similar to this earlier in the thread, but I didn't know that there was a large class of apps that actually did it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A very simple example is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char *foo = malloc(...);
</span><br>
<span class="quotelev1">&gt;     // ...fill foo...
</span><br>
<span class="quotelev1">&gt;     MPI_Send(foo, x, MPI_INT, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another not-uncommon example is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char *foo = malloc(...);
</span><br>
<span class="quotelev1">&gt;     // Receive some INTEGERs from a Fortran sender
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(foo, x, MPI_INTEGER, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this patch, they'd get warnings about these uses, even though they are completely valid according to MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A suggestion was that this functionality could be disabled by default, and enabled with a magic macro.  Perhaps something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpicc -DOMPI_DDT_CHECKING ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or something like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<p>This is a vaild concern and a good idea for a FAQ entry.
<br>
<p>Q: How to silence warnings about buffer type/type tag mismatch?
<br>
<p>A: There are multiple ways for an MPI application to silence these
<br>
warnings.  To silence a particular warning, change the type of the
<br>
buffer to 'void *' or explicitly cast it to 'void *':
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *foo = malloc(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ...fill foo...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(foo, x, MPI_INT, ...);
<br>
<p>or:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *foo = malloc(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ...fill foo...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send((void *) foo, x, MPI_INT, ...);
<br>
<p>To turn off all warnings of this kind in clang, use the
<br>
-Wno-type-safety command line option.
<br>
<p>It is also possible to completely remove annotations from mpi.h by
<br>
defining a macro OMPI_NO_ATTR_TYPE_TAGS in the source code or on the
<br>
compiler's command line.
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
<li><strong>Next message:</strong> <a href="11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Previous message:</strong> <a href="11699.php">Paul Hargrove: "Re: [OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
