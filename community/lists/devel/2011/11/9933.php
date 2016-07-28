<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 23:37:57 2011" -->
<!-- isoreceived="20111108043757" -->
<!-- sent="Tue, 8 Nov 2011 04:37:32 +0000" -->
<!-- isosent="20111108043732" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="CADDFE1B.81BF%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A3986FF3-AE4A-4F3F-9A49-277F0C59C544_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 23:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Previous message:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/7/11 8:58 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'll take as an example the atomic operations. They exist only on amd64,
</span><br>
<span class="quotelev1">&gt;and only if the compiler supports gcc-like assembly. However, the atomic
</span><br>
<span class="quotelev1">&gt;operation is defined in a global header with a very exciting name
</span><br>
<span class="quotelev1">&gt;atomic.h. If anybody else start using these atomics (and as they appear
</span><br>
<span class="quotelev1">&gt;in a header file I don't see why not), there is a very high probability
</span><br>
<span class="quotelev1">&gt;of weird build or execution errors. [foot-note: Amazingly, all the
</span><br>
<span class="quotelev1">&gt;productive-quality lovers in this community vanished lately.] I let you
</span><br>
<span class="quotelev1">&gt;imagine what would have been the answer from the community if you had
</span><br>
<span class="quotelev1">&gt;proposed such an RFC before doing the actual commit.
</span><br>
<p>George, get off it already.  Nathan apologized for not putting an RFC out
<br>
for the seg_key.  You've done the same in the past, as have we all.
<br>
Figure out the right solution and move on.
<br>
<p>I would not have done an RFC for the atomics, and neither would you.
<br>
While Nathan needs to fix the non-inline assembly part (which probably
<br>
means sending me an e-mail, since it's not at all intuitive how to do),
<br>
only implementing it on a subset of the platforms is not without
<br>
precedent.  It would have been nice to see ia32 implementation (since
<br>
they're the same instruction), but the rest are platforms that are getting
<br>
harder and harder to find.  Further more, the atomics have a #define
<br>
(which Nathan did set properly) for determining whether swap is / is not
<br>
implemented.  This exists for two reasons: 1) not all platforms can
<br>
support and platforms and 2) it was recognized that one person couldn't
<br>
maintain all the atomics, so some flexibility was required.
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
<li><strong>Next message:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Previous message:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
