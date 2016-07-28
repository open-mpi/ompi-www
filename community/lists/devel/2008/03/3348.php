<?
$subject_val = "Re: [OMPI devel] make check failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 12:12:27 2008" -->
<!-- isoreceived="20080304171227" -->
<!-- sent="Tue, 04 Mar 2008 12:12:27 -0500" -->
<!-- isosent="20080304171227" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make check failing" -->
<!-- id="47CD82FB.5030202_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE35D43E-1089-4C69-B09F-229A37B1D2EC_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 12:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3349.php">Jeff Squyres: "[OMPI devel] new plpa"</a>
<li><strong>Previous message:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple, because the test that eventually segfaults only runs if ompi is 
<br>
configured with threading. Otherwise it is a no-op.
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think another important question is: why is this related to  
</span><br>
<span class="quotelev1">&gt; threads?  (i.e., why does it work in non-threaded builds)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2008, at 9:44 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Carto select failing if it doesn't find any modules was called out  
</span><br>
<span class="quotelev2">&gt;&gt; in an
</span><br>
<span class="quotelev2">&gt;&gt; earlier message (might have been a commit log) when we set an mca-no- 
</span><br>
<span class="quotelev2">&gt;&gt; build
</span><br>
<span class="quotelev2">&gt;&gt; flag on that framework. This should probably be fixed - there are  
</span><br>
<span class="quotelev2">&gt;&gt; times when
</span><br>
<span class="quotelev2">&gt;&gt; someone may not wish to build any carto modules.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some reason why carto absolutely must find a module? Can we  
</span><br>
<span class="quotelev2">&gt;&gt; crate a
</span><br>
<span class="quotelev2">&gt;&gt; default &quot;none available&quot; module in the base?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/4/08 7:39 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have been having a problem lately with our MTT runs where make  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would fail when mpi threads were enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Turns out the problem is that opal_init now calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_base_carto_select, which cannot find any carto modules since we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have not done an install yet. So it returns a failure. This causes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_init to abort before initializing the event engine. So when we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do the threading tests, the event engine is uninitialized and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So this is why it fails, but I do not know how best to fix it. Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3349.php">Jeff Squyres: "[OMPI devel] new plpa"</a>
<li><strong>Previous message:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3346.php">Jeff Squyres: "Re: [OMPI devel] make check failing"</a>
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
