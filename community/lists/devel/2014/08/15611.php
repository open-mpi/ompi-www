<?
$subject_val = "Re: [OMPI devel] errors and warnings with show_help() usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 09:56:21 2014" -->
<!-- isoreceived="20140811135621" -->
<!-- sent="Mon, 11 Aug 2014 06:55:38 -0700" -->
<!-- isosent="20140811135538" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] errors and warnings with show_help() usage" -->
<!-- id="B31E1E1A-CE26-4519-8F82-AB6BC00ADAC2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53E85D9D.3000400_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] errors and warnings with show_help() usage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 09:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Previous message:</strong> <a href="15610.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not worrying about 1.8.2, but we can take a look at this for 1.8.3 or beyond.
<br>
<p>Thanks for working on the trunk!
<br>
<p><p>On Aug 10, 2014, at 11:07 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i fixed the trivial errors in the trunk, there are now 11 non trivial
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt; (commits r32490 to r32497)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i ran the script vs the v1.8 branch and found 54 errors
</span><br>
<span class="quotelev1">&gt; (first, you need to
</span><br>
<span class="quotelev1">&gt; touch Makefile.ompi-rules
</span><br>
<span class="quotelev1">&gt; in the top-level Open MPI directory in order to make the script happy)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/08/08 22:43, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; SHORT VERSION
</span><br>
<span class="quotelev2">&gt;&gt; =============
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The ./contrib/check-help-strings.pl script is showing ***47 coding errors*** with regards to using show_help() in components.  Here's a summary of the offenders:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - ORTE (lumped together because there's a single maintainer :-) )
</span><br>
<span class="quotelev2">&gt;&gt; - smcuda and cuda
</span><br>
<span class="quotelev2">&gt;&gt; - common/verbs
</span><br>
<span class="quotelev2">&gt;&gt; - bcol
</span><br>
<span class="quotelev2">&gt;&gt; - mxm
</span><br>
<span class="quotelev2">&gt;&gt; - openib
</span><br>
<span class="quotelev2">&gt;&gt; - oshmem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could the owners of these portions of the code base please run ./contrib/check-help-strings.pl and fix the ERRORs that are shown?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first part of ./contrib/check-help-strings.pl's output shows ERRORs -- referring to help files that do not exist, or referring to help topics that do not exist.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm only calling out the ERRORs in this mail -- but the second part of the output shows a bazillion WARNINGs, too.  These are help topics that are probably unused -- they don't seem to be referenced by the code anywhere.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would be good to clean up all the WARNINGs, too, but the ERRORs are more worrisome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15602.php">http://www.open-mpi.org/community/lists/devel/2014/08/15602.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Previous message:</strong> <a href="15610.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
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
