<?
$subject_val = "Re: [OMPI devel] make check failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 10:29:36 2008" -->
<!-- isoreceived="20080304152936" -->
<!-- sent="Tue, 4 Mar 2008 10:29:27 -0500" -->
<!-- isosent="20080304152927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make check failing" -->
<!-- id="DE35D43E-1089-4C69-B09F-229A37B1D2EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3F2AE72.C7C8%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] make check failing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 10:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>In reply to:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3348.php">Tim Prins: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3348.php">Tim Prins: "Re: [OMPI devel] make check failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think another important question is: why is this related to  
<br>
threads?  (i.e., why does it work in non-threaded builds)
<br>
<p><p>On Mar 4, 2008, at 9:44 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Carto select failing if it doesn't find any modules was called out  
</span><br>
<span class="quotelev1">&gt; in an
</span><br>
<span class="quotelev1">&gt; earlier message (might have been a commit log) when we set an mca-no- 
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; flag on that framework. This should probably be fixed - there are  
</span><br>
<span class="quotelev1">&gt; times when
</span><br>
<span class="quotelev1">&gt; someone may not wish to build any carto modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some reason why carto absolutely must find a module? Can we  
</span><br>
<span class="quotelev1">&gt; crate a
</span><br>
<span class="quotelev1">&gt; default &quot;none available&quot; module in the base?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/4/08 7:39 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been having a problem lately with our MTT runs where make  
</span><br>
<span class="quotelev2">&gt;&gt; check
</span><br>
<span class="quotelev2">&gt;&gt; would fail when mpi threads were enabled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Turns out the problem is that opal_init now calls
</span><br>
<span class="quotelev2">&gt;&gt; opal_base_carto_select, which cannot find any carto modules since we
</span><br>
<span class="quotelev2">&gt;&gt; have not done an install yet. So it returns a failure. This causes
</span><br>
<span class="quotelev2">&gt;&gt; opal_init to abort before initializing the event engine. So when we  
</span><br>
<span class="quotelev2">&gt;&gt; try
</span><br>
<span class="quotelev2">&gt;&gt; to do the threading tests, the event engine is uninitialized and  
</span><br>
<span class="quotelev2">&gt;&gt; fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So this is why it fails, but I do not know how best to fix it. Any
</span><br>
<span class="quotelev2">&gt;&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>In reply to:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3348.php">Tim Prins: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3348.php">Tim Prins: "Re: [OMPI devel] make check failing"</a>
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
