<?
$subject_val = "Re: [OMPI devel] make check failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:45:09 2008" -->
<!-- isoreceived="20080304144509" -->
<!-- sent="Tue, 04 Mar 2008 07:44:50 -0700" -->
<!-- isosent="20080304144450" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make check failing" -->
<!-- id="C3F2AE72.C7C8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47CD5F0A.8090409_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 09:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<li><strong>Previous message:</strong> <a href="3344.php">Tim Prins: "[OMPI devel] make check failing"</a>
<li><strong>In reply to:</strong> <a href="3344.php">Tim Prins: "[OMPI devel] make check failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Carto select failing if it doesn't find any modules was called out in an
<br>
earlier message (might have been a commit log) when we set an mca-no-build
<br>
flag on that framework. This should probably be fixed - there are times when
<br>
someone may not wish to build any carto modules.
<br>
<p>Is there some reason why carto absolutely must find a module? Can we crate a
<br>
default &quot;none available&quot; module in the base?
<br>
<p><p>On 3/4/08 7:39 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have been having a problem lately with our MTT runs where make check
</span><br>
<span class="quotelev1">&gt; would fail when mpi threads were enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns out the problem is that opal_init now calls
</span><br>
<span class="quotelev1">&gt; opal_base_carto_select, which cannot find any carto modules since we
</span><br>
<span class="quotelev1">&gt; have not done an install yet. So it returns a failure. This causes
</span><br>
<span class="quotelev1">&gt; opal_init to abort before initializing the event engine. So when we try
</span><br>
<span class="quotelev1">&gt; to do the threading tests, the event engine is uninitialized and fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this is why it fails, but I do not know how best to fix it. Any
</span><br>
<span class="quotelev1">&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<li><strong>Previous message:</strong> <a href="3344.php">Tim Prins: "[OMPI devel] make check failing"</a>
<li><strong>In reply to:</strong> <a href="3344.php">Tim Prins: "[OMPI devel] make check failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
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
