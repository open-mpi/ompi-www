<?
$subject_val = "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 10:47:17 2009" -->
<!-- isoreceived="20090618144717" -->
<!-- sent="Thu, 18 Jun 2009 10:47:08 -0400" -->
<!-- isosent="20090618144708" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem" -->
<!-- id="4A3A536C.40400_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A39549F.1070600_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 10:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6269.php">Jeff Squyres: "Re: [OMPI devel] Just a suggestion about a formation of new openMPIstudent mailing list"</a>
<li><strong>Previous message:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; Erm -- that's weird.  So when you extract the tarballs, 
</span><br>
<span class="quotelev2">&gt;&gt; atomic-amd64-linux.s is non-empty (as it should be), but after a 
</span><br>
<span class="quotelev2">&gt;&gt; failed build, it's file length 0?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Notice that during the build process, we sym link atomic-amd64-linux.s 
</span><br>
<span class="quotelev2">&gt;&gt; to atomic-asm.S (I see that happening in your build output as well).  
</span><br>
<span class="quotelev2">&gt;&gt; So if the compiler is barfing when compiling atomic-asm.S, perhaps 
</span><br>
<span class="quotelev2">&gt;&gt; it's also wiping out the file...?  That would be darn weird, though...
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  Not a solution to the original problem, but might I suggest that 
</span><br>
<span class="quotelev1">&gt; any case where the build might over-write a source file is a serious 
</span><br>
<span class="quotelev1">&gt; problem.  Two possible ways come to mind to address that:
</span><br>
<span class="quotelev1">&gt; 1) Either the configure or make process might write-protect the source 
</span><br>
<span class="quotelev1">&gt; file at some time prior to making the symlink.
</span><br>
<span class="quotelev1">&gt; 2) The make process could copy, rather than symlink, the file (w/ a 
</span><br>
<span class="quotelev1">&gt; dependency that would trigger a re-copy if the source file is updated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The write-protect approach has the advantage that it would let us see a 
</span><br>
<span class="quotelev1">&gt; make failure at the point that something is trying (erroneously) to 
</span><br>
<span class="quotelev1">&gt; write/truncate the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I found the solution. For reasons I have not yet determined, I had 
<br>
version of cpp from 2005 in my ~/bin directory which was before /usr/bin 
<br>
in my path. I have no idea where it came from or why it was there but 
<br>
once I removed it Open MPI compiled and tested fine. Many thanks to both 
<br>
Jeff and Paul for their suggestions which led me to the solution.
<br>
<p>Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6269.php">Jeff Squyres: "Re: [OMPI devel] Just a suggestion about a formation of new openMPIstudent mailing list"</a>
<li><strong>Previous message:</strong> <a href="6267.php">Ralph Castain: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
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
