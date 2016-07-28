<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 15:52:12 2012" -->
<!-- isoreceived="20121031195212" -->
<!-- sent="Wed, 31 Oct 2012 19:51:46 +0000" -->
<!-- isosent="20121031195146" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239DCB36_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17GEAeUGAWFh2p0yuBMDj5E+JRk-E5c9roiE3AP4Wjodg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-31 15:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11717.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11716.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/31/12 1:39 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;No, I don't have specific usage cases that concern me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As I said a minute or two ago in a reply to Ralph, my concern is that the
</span><br>
<span class="quotelev1">&gt;Sandia codes provide an &quot;existence proof&quot; that &quot;really smart people&quot; can
</span><br>
<span class="quotelev1">&gt;write questionable code at times.  So, I fear that a larger-than-expected
</span><br>
<span class="quotelev1">&gt;fraction of real codes would generate warnings.
</span><br>
<p>Not surprisingly, most of the codes I'm concerned about are really old
<br>
(like pre-MPI old).  The authors were dealing with more than one
<br>
communication library, so they wrote wrappers inside their code for
<br>
communication.  The wrappers were for a bunch of different communication
<br>
interfaces and so fairly agnostic, but looked a lot like MPI (because MPI
<br>
looks a lot like NX, PVM, etc.).  Anyway, they squashed down everything to
<br>
either a void* or char* (remember, this is when void* was not always
<br>
supported), passed that to MPI with a datatype, and off we go.
<br>
<p>At present, we're not using clang as the front end.  However, a lot of
<br>
developers of these codes do a lot of development on their Mac laptops,
<br>
meaning that they will be using clang in the not-too-distant future.  And
<br>
since their usage of MPI is not wrong, I'd have some objection to them
<br>
getting warnings.
<br>
<p>That said, if we didn't throw a warning if the pointer is of type void* or
<br>
char*, I think I'd be mostly ok with the patch being on by default.  I'm
<br>
not sure if that's possible or not...
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
<li><strong>Next message:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11717.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11716.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
