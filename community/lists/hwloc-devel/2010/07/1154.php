<?
$subject_val = "Re: [hwloc-devel] How to create a patch file?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 17:59:07 2010" -->
<!-- isoreceived="20100712215907" -->
<!-- sent="Mon, 12 Jul 2010 23:58:57 +0200" -->
<!-- isosent="20100712215857" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to create a patch file?" -->
<!-- id="201007122358.57846.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C3B88DC.3060304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to create a patch file?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 17:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Reply:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, July 12, 2010 11:27:56 pm you wrote:
<br>
<span class="quotelev1">&gt; Le 12/07/2010 23:17, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks for backporting patch to the 1.0 branch:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- Comment #16 from Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; 2010-07-12
</span><br>
<span class="quotelev2">&gt; &gt; 16:41:53 EDT ---
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FYI, upstream patch backported to the 1.0 branch in commit r2304
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2304">https://svn.open-mpi.org/trac/hwloc/changeset/2304</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would need to advice what would be the best way to create a patch
</span><br>
<span class="quotelev2">&gt; &gt; file against 1.0.1. I'm familiar with this method:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff -rupN hwloc-1.0.1/ 2304/ &gt; original.patch
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How can I download complete hwloc dir for commit r2304?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there some better way how to create a patch file?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jirka
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should give you a patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   svn diff <a href="http://svn.open-mpi.org/svn/hwloc/tags/hwloc-1.0.1">http://svn.open-mpi.org/svn/hwloc/tags/hwloc-1.0.1</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/hwloc/branches/v1.0">http://svn.open-mpi.org/svn/hwloc/branches/v1.0</a> &gt; my.patch
</span><br>
<p>I have tried it but no luck (or perhaps I have done some mistake):
<br>
tar zxvf ~/tests/performance/hwloc/hwloc-1.0.1.tar.gz
<br>
cd hwloc-1.0.1/
<br>
$patch -p0 -i ../my.patch 
<br>
patching file include/private/private.h
<br>
..........stripped......... upto this error message:
<br>
<p>patching file utils/Makefile.am
<br>
can't find file to patch at input line 822
<br>
Perhaps you used the wrong -p or --strip option?
<br>
The text leading up to this was:
<br>
--------------------------
<br>
|Index: tests/embedded/Makefile.am
<br>
|===================================================================
<br>
|--- tests/embedded/Makefile.am (.../tags/hwloc-1.0.1)  (revision 2305)
<br>
|+++ tests/embedded/Makefile.am (.../branches/v1.0)     (revision 2305)
<br>
<p><p><p><span class="quotelev1">&gt; However, we have some binaries (images) that were added in there, so I
</span><br>
<span class="quotelev1">&gt; am not sure the patch will handle them fine. Do you absolutely need a
</span><br>
<span class="quotelev1">&gt; patch? Or would it be ok if we gave you an updated tarball that we'd
</span><br>
<span class="quotelev1">&gt; call hwloc-1.0.2a1-20100712-2034 or whatever?
</span><br>
I would in fact prefer this solution!
<br>
<p><p><span class="quotelev1">&gt; Obviously, if we release 1.0.2 very soon, it would be much easier for
</span><br>
<span class="quotelev1">&gt; you. We already have quite a lot of fixes queued in the 1.0 branch. I
</span><br>
<span class="quotelev1">&gt; added Jeff and Samuel to CC in case they have an opinion about it.
</span><br>
It would be really great to have 1.0.2 released (or even 1.1 :-) ) however, I 
<br>
don't want to create any stress on you. 
<br>
<p>I think hwloc-1.0.2a1-20100712-2034 would work best for me.
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Reply:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
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
