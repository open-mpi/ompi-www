<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 09:09:13 2015" -->
<!-- isoreceived="20150912130913" -->
<!-- sent="Sat, 12 Sep 2015 13:08:54 +0000" -->
<!-- isosent="20150912130854" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="F755E4D2-87F0-4D66-AC41-A200C8457655_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="57E76D97-6CD4-4318-BB52-0F67782EE705_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remaining MTT errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-12 09:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that your configure line in the MTT tests is this:
<br>

<br>
CC=cc CXX=CC FC=f90 F77=f77 --with-wrapper-cflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2
<br>
-xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot; CFLAGS=&quot;-xtarget=opteron
<br>
-xprefetch -xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
<br>
--with-wrapper-cxxflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib
<br>
-xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot; CXXFLAGS=&quot;-xtarget=opteron -xprefetch
<br>
-xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
<br>
--with-wrapper-fflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib -stackvar
<br>
-xarch=amd64a -xO5&quot; FFLAGS=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib
<br>
-stackvar -xarch=amd64a -xO5&quot; --with-wrapper-fcflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2
<br>
-xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot; FCFLAGS=&quot;-xtarget=opteron -xprefetch
<br>
-xprefetch_level=2 -xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot; 
<br>

<br>
What compiler suite is that?  Is -xO5 really safe to use?
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 11, 2015, at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve closed all the holes I can find in the PMIx integration, and things look pretty good overall. There are a handful of failures still being seen - most of them involving what appear to be unrelated code. I&#226;&#128;&#153;m not entirely sure I understand the source of the errors, and could really use some help to determine (a) if these are in any way related to PMIx, and if so (b) how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors from my MTT run are here:  <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18019.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
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
