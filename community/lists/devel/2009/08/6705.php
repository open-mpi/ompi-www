<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:25:57 2009" -->
<!-- isoreceived="20090824172557" -->
<!-- sent="Mon, 24 Aug 2009 13:25:52 -0400" -->
<!-- isosent="20090824172552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="4DA6369B-AD56-49D2-89A3-5FC624BFDAB4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="55295E81-4C61-436F-B855-662A41B554FC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 13:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 11:35 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; As a side note, a very similar effect can be obtained by decreasing
</span><br>
<span class="quotelev1">&gt; the eager size of the BTLs to be equal to the size of the match
</span><br>
<span class="quotelev1">&gt; header, which is about 24 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I disagree with this statement.  ;-)
<br>
<p>We currently don't export the BTL or PML header size, so you can't  
<br>
possibly know what value to set the eager limit to.  And even if we  
<br>
did, as the conversation between you, me, and Brian from the last  
<br>
Chicago Forum meeting proved, the exact definition of &quot;eager_limit&quot; is  
<br>
a fairly nebulous thing.
<br>
<p>My point is that this is a fairly trivial-to-implement feature.  It  
<br>
can even be done in a way that doesn't impact performance at all  
<br>
(default to compile out).  We all know that there are many MPI  
<br>
correctness tools that are available, but it can be difficult to get  
<br>
users to actually use them.  If they can flip a switch a mpirun time  
<br>
to turn on some semantic checking, that's a Good Thing.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
