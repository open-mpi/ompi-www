<?
$subject_val = "Re: [OMPI devel] 1.4.4 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 17:22:28 2011" -->
<!-- isoreceived="20110429212228" -->
<!-- sent="Fri, 29 Apr 2011 17:22:23 -0400" -->
<!-- isosent="20110429212223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4 .so version numbers" -->
<!-- id="5FE8B437-FF7E-45A8-84AE-A5B34D6E94F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DBB1AF3.9080401_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4 .so version numbers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 17:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2011, at 4:09 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; lib_mpif90.so had changes for the upcoming 1.4.4 release that requires a .so version bump.  Specifically, some MPI F90 bindings used to have some parameters of type INTEGER.  In 1.4.4, those parameter types were corrected to be INTEGER(KIND=MPI_ADDRESS_KIND).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are thinking of the so-versions problem as if the change above is an ABI change.  However, one could claim at a stretch that the entire 1.3.x and 1.4.x series implements the ABI present in the specification/documentation and in 1.4.4; and thus that the older versions contain a BUGGY implementation of the always-intended INTEGER(KIND=MPI_ADDRESS_KIND) ABI for the &quot;large&quot; F90  bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Under that reasoning I would endorse:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Go with 0:2:0.
</span><br>
<p>Good reasoning.  I think it would actually be 0:2:1 in that case...?
<br>
<p><span class="quotelev2">&gt;&gt;    IMPACT: Same as above.  A binary using the old/wrong interfaces (e.g., compiled against 1.4.3) could still run-time link against OMPI 1.4.4 and possibly segv because the parameters are different sizes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am unclear on how a binary linked to &lt;=1.4.3 that was truncating the arguments would have worked in the first place.
</span><br>
<p>If someone called MPI_SCATTERV with INTEGER sendcounts and displs arguments, it would have compiled / worked with 1.4.3.  But if they then change their LD_LIBRARY_PATH to 1.4.4 and re-run the same binary, their actual argument memory should be shorter than what is necessary because the 1.4.4 sendcounts / displs type is INTEGER(KIND=MPI_ADDRESS_KIND).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="9228.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
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
