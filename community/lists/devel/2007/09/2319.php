<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 13:00:26 2007" -->
<!-- isoreceived="20070917170026" -->
<!-- sent="Mon, 17 Sep 2007 13:00:05 -0400" -->
<!-- isosent="20070917170005" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Which tests for larger cluster testing" -->
<!-- id="46EEB295.2010007_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07F6165B-949E-4990-8101-4CDC38C372B8_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 13:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think Terry was asking about running at larger scale on a regular  
</span><br>
<span class="quotelev1">&gt; basis for correctness testing (i.e., nightly snapshot tarballs via MTT).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I was even hoping for a not so regular basis like when certain people go 
<br>
down to Sandia to see if they
<br>
can start up an np=4096 job. 
<br>
<p>--td
<br>
<span class="quotelev1">&gt; I, for one, would love to see the labs run some of our nightly  
</span><br>
<span class="quotelev1">&gt; tarballs at larger scale so that we have a more consistent datapoint  
</span><br>
<span class="quotelev1">&gt; of what &quot;works&quot; and what &quot;doesn't work&quot; at scale (even if it's a  
</span><br>
<span class="quotelev1">&gt; coarse-grained measurement of the tests we have in ompi-tests).  Even  
</span><br>
<span class="quotelev1">&gt; if the tests are not run nightly -- running even a subset of them  
</span><br>
<span class="quotelev1">&gt; even once a week even at &quot;medium&quot; scale would be great.  I realize  
</span><br>
<span class="quotelev1">&gt; that even with large clusters, we're all resource-constrained  
</span><br>
<span class="quotelev1">&gt; (needing to let real users run and all that), but any testing on a  
</span><br>
<span class="quotelev1">&gt; regular basis (even if it's sparse) would be really, really great/ 
</span><br>
<span class="quotelev1">&gt; useful/good for the code/good for the community/etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (yes, this is a not-so-subtle hint :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2007, at 11:15 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I won't speak for the labs as a whole, but I generally don't run  
</span><br>
<span class="quotelev2">&gt;&gt; things
</span><br>
<span class="quotelev2">&gt;&gt; at scale unless theres something specific I'm after, ie benchmarks or
</span><br>
<span class="quotelev2">&gt;&gt; apps I'm using as a benchmark, rather than test suites.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might look at some of the purple benchmarks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/">http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; code_list.html
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about Sandia and LANL?  Is there anything that is ran on their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large clusters to confirm things seem to work at high np's?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco is not yet testing that large, but we plan to shortly start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing at np&gt;=128 (I'm waiting for an internal cluster within Cisco
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be setup properly).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 11, 2007, at 5:31 PM, Rolf.Vandevaart_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am curious which tests are being used when running tests on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; larger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clusters.  And by larger clusters, I mean anything with np &gt; 128.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Although I realize that is not very large, but it is bigger  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the clusters I assume tests are being run on)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I ask this because I planned on using some of the intel tests, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clearly have limitations starting at np=64.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To avoid mailing list clutter, feel free to just email me and I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; summarize.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2318.php">Andrew Friedley: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
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
