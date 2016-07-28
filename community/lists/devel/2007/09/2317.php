<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 11:28:53 2007" -->
<!-- isoreceived="20070917152853" -->
<!-- sent="Mon, 17 Sep 2007 11:28:38 -0400" -->
<!-- isosent="20070917152838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Which tests for larger cluster testing" -->
<!-- id="07F6165B-949E-4990-8101-4CDC38C372B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46EE9A0E.7030604_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 11:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2316.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2316.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2319.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Terry was asking about running at larger scale on a regular  
<br>
basis for correctness testing (i.e., nightly snapshot tarballs via MTT).
<br>
<p>I, for one, would love to see the labs run some of our nightly  
<br>
tarballs at larger scale so that we have a more consistent datapoint  
<br>
of what &quot;works&quot; and what &quot;doesn't work&quot; at scale (even if it's a  
<br>
coarse-grained measurement of the tests we have in ompi-tests).  Even  
<br>
if the tests are not run nightly -- running even a subset of them  
<br>
even once a week even at &quot;medium&quot; scale would be great.  I realize  
<br>
that even with large clusters, we're all resource-constrained  
<br>
(needing to let real users run and all that), but any testing on a  
<br>
regular basis (even if it's sparse) would be really, really great/ 
<br>
useful/good for the code/good for the community/etc.
<br>
<p>(yes, this is a not-so-subtle hint :-) )
<br>
<p><p><p>On Sep 17, 2007, at 11:15 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I won't speak for the labs as a whole, but I generally don't run  
</span><br>
<span class="quotelev1">&gt; things
</span><br>
<span class="quotelev1">&gt; at scale unless theres something specific I'm after, ie benchmarks or
</span><br>
<span class="quotelev1">&gt; apps I'm using as a benchmark, rather than test suites.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might look at some of the purple benchmarks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/">http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/</a> 
</span><br>
<span class="quotelev1">&gt; code_list.html
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What about Sandia and LANL?  Is there anything that is ran on their
</span><br>
<span class="quotelev2">&gt;&gt; large clusters to confirm things seem to work at high np's?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco is not yet testing that large, but we plan to shortly start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing at np&gt;=128 (I'm waiting for an internal cluster within Cisco
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be setup properly).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 11, 2007, at 5:31 PM, Rolf.Vandevaart_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am curious which tests are being used when running tests on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; larger
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clusters.  And by larger clusters, I mean anything with np &gt; 128.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Although I realize that is not very large, but it is bigger  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than most
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the clusters I assume tests are being run on)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ask this because I planned on using some of the intel tests, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clearly have limitations starting at np=64.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To avoid mailing list clutter, feel free to just email me and I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; summarize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2316.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2316.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2319.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
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
