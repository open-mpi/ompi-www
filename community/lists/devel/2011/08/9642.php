<?
$subject_val = "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1835";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 18:10:10 2011" -->
<!-- isoreceived="20110810221010" -->
<!-- sent="Wed, 10 Aug 2011 18:10:05 -0400" -->
<!-- isosent="20110810221005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1835" -->
<!-- id="3769243F-B3FE-421F-91CB-7F0B6C27FBF5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108102203.p7AM3b2d018552_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1835<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 18:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9643.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1836"</a>
<li><strong>Previous message:</strong> <a href="9641.php">Jeff Squyres: "[OMPI devel] 1.5.4rc2 is now posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Er...
<br>
<p>A loop of 1 isn't much of a loop.  The whole point of this test is to spawn a boatload of times to stress the ORTE/OMPI spawn integration.
<br>
<p>If you want control to make it a shorter test, how about default to looping a bagillion times (I don't remember how 1300 was chosen), but if argv[1] != NULL, do an atoi() on that and use that for the loop count.
<br>
<p>How's that?
<br>
<p><p>On Aug 10, 2011, at 6:03 PM, eugene_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: eugene
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-10 18:03:36 EDT (Wed, 10 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 1835
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Cut iterations to dynamic/loop_spawn.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ibm/dynamic/loop_spawn.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ibm/dynamic/loop_spawn.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ibm/dynamic/loop_spawn.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ibm/dynamic/loop_spawn.c	2011-08-10 18:03:36 EDT (Wed, 10 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define EXE_TEST  &quot;loop_child&quot;
</span><br>
<span class="quotelev1">&gt; -#define NUM_TESTS 1300
</span><br>
<span class="quotelev1">&gt; +#define NUM_TESTS 1 /* 300 */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-docs-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-docs-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9643.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1836"</a>
<li><strong>Previous message:</strong> <a href="9641.php">Jeff Squyres: "[OMPI devel] 1.5.4rc2 is now posted"</a>
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
