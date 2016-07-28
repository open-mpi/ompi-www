<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 11:51:26 2012" -->
<!-- isoreceived="20121119165126" -->
<!-- sent="Mon, 19 Nov 2012 11:51:22 -0500" -->
<!-- isosent="20121119165122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="063C287F-9A4A-4BC5-A452-8571E154B476_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYfhdijkueBJRoQPtr3MQU2_38ABaT97kf4d9NWP-QV=Bg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 11:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 19, 2012, at 11:47 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 3. the warnings are disabled for buffer types of (char*) or (void*)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that disabling warnings for char* might make sense.  But
</span><br>
<span class="quotelev1">&gt; during the LLVM developer meeting I talked with Hal Finkel (MPICH2
</span><br>
<span class="quotelev1">&gt; developer) about this.  These annotations are already integrated into
</span><br>
<span class="quotelev1">&gt; MPICH2.  Hal said that he found real bugs with these warnings
</span><br>
<span class="quotelev1">&gt; involving char* buffers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it really not an option for the codebase in question to build with
</span><br>
<span class="quotelev1">&gt; -D... or -Wno-...?
</span><br>
<p><p>It is pedantic, but I can still side with: it's valid MPI (and those who do it usually do it for a reason), so we shouldn't warn about it.
<br>
<p>How about a phased implementation:
<br>
<p>3a. Have an option to *also* warn about (char*) mismatches?
<br>
3b. Over time (perhaps in coordination with MPICH?), and polling once this initial implementation has been out in the world for a while: if user want, we can change the default to warn about (char*) mismatches by default
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
<li><strong>Next message:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11807.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
