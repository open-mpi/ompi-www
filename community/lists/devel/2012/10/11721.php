<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 16:02:21 2012" -->
<!-- isoreceived="20121031200221" -->
<!-- sent="Wed, 31 Oct 2012 20:01:56 +0000" -->
<!-- isosent="20121031200156" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239DCB80_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYeoLtGqCObzi-VcHU3wyOtzNfQ-wpgc0e4QmkTLywhz2Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 16:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11720.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/31/12 1:57 PM, &quot;Dmitri Gribenko&quot; &lt;gribozavr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, Oct 31, 2012 at 9:51 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 10/31/12 1:39 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;No, I don't have specific usage cases that concern me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;As I said a minute or two ago in a reply to Ralph, my concern is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Sandia codes provide an &quot;existence proof&quot; that &quot;really smart people&quot; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;write questionable code at times.  So, I fear that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;larger-than-expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;fraction of real codes would generate warnings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not surprisingly, most of the codes I'm concerned about are really old
</span><br>
<span class="quotelev2">&gt;&gt; (like pre-MPI old).  The authors were dealing with more than one
</span><br>
<span class="quotelev2">&gt;&gt; communication library, so they wrote wrappers inside their code for
</span><br>
<span class="quotelev2">&gt;&gt; communication.  The wrappers were for a bunch of different communication
</span><br>
<span class="quotelev2">&gt;&gt; interfaces and so fairly agnostic, but looked a lot like MPI (because
</span><br>
<span class="quotelev2">&gt;&gt;MPI
</span><br>
<span class="quotelev2">&gt;&gt; looks a lot like NX, PVM, etc.).  Anyway, they squashed down everything
</span><br>
<span class="quotelev2">&gt;&gt;to
</span><br>
<span class="quotelev2">&gt;&gt; either a void* or char* (remember, this is when void* was not always
</span><br>
<span class="quotelev2">&gt;&gt; supported), passed that to MPI with a datatype, and off we go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you for sharing the context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That said, if we didn't throw a warning if the pointer is of type void*
</span><br>
<span class="quotelev2">&gt;&gt;or
</span><br>
<span class="quotelev2">&gt;&gt; char*, I think I'd be mostly ok with the patch being on by default.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure if that's possible or not...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is certainly possible to do that.  However, we would lose the
</span><br>
<span class="quotelev1">&gt;ability to diagnose type mismatches for MPI_CHARACTER, but it is a
</span><br>
<span class="quotelev1">&gt;rarely-used type tag (is it?).
</span><br>
<p>My experience is that MPI_CHAR / MPI_CHARACTER are frequently used when
<br>
MPI_BYTE should be used.  So this is yet another mismatch that it's
<br>
probably not a bad idea to complain too much about :).
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11720.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
