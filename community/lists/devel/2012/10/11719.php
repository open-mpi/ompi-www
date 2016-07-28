<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 15:57:58 2012" -->
<!-- isoreceived="20121031195758" -->
<!-- sent="Wed, 31 Oct 2012 21:57:34 +0200" -->
<!-- isosent="20121031195734" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYeoLtGqCObzi-VcHU3wyOtzNfQ-wpgc0e4QmkTLywhz2Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD239DCB36_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 15:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11720.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2012 at 9:51 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 10/31/12 1:39 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;No, I don't have specific usage cases that concern me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As I said a minute or two ago in a reply to Ralph, my concern is that the
</span><br>
<span class="quotelev2">&gt;&gt;Sandia codes provide an &quot;existence proof&quot; that &quot;really smart people&quot; can
</span><br>
<span class="quotelev2">&gt;&gt;write questionable code at times.  So, I fear that a larger-than-expected
</span><br>
<span class="quotelev2">&gt;&gt;fraction of real codes would generate warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not surprisingly, most of the codes I'm concerned about are really old
</span><br>
<span class="quotelev1">&gt; (like pre-MPI old).  The authors were dealing with more than one
</span><br>
<span class="quotelev1">&gt; communication library, so they wrote wrappers inside their code for
</span><br>
<span class="quotelev1">&gt; communication.  The wrappers were for a bunch of different communication
</span><br>
<span class="quotelev1">&gt; interfaces and so fairly agnostic, but looked a lot like MPI (because MPI
</span><br>
<span class="quotelev1">&gt; looks a lot like NX, PVM, etc.).  Anyway, they squashed down everything to
</span><br>
<span class="quotelev1">&gt; either a void* or char* (remember, this is when void* was not always
</span><br>
<span class="quotelev1">&gt; supported), passed that to MPI with a datatype, and off we go.
</span><br>
<p>Thank you for sharing the context.
<br>
<p><span class="quotelev1">&gt; That said, if we didn't throw a warning if the pointer is of type void* or
</span><br>
<span class="quotelev1">&gt; char*, I think I'd be mostly ok with the patch being on by default.  I'm
</span><br>
<span class="quotelev1">&gt; not sure if that's possible or not...
</span><br>
<p>It is certainly possible to do that.  However, we would lose the
<br>
ability to diagnose type mismatches for MPI_CHARACTER, but it is a
<br>
rarely-used type tag (is it?).
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
<li><strong>Next message:</strong> <a href="11720.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
