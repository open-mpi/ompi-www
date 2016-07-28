<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 11:15:30 2007" -->
<!-- isoreceived="20070917151530" -->
<!-- sent="Mon, 17 Sep 2007 08:15:26 -0700" -->
<!-- isosent="20070917151526" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Which tests for larger cluster testing" -->
<!-- id="46EE9A0E.7030604_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46EE9409.5030506_at_sun.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 11:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I won't speak for the labs as a whole, but I generally don't run things 
<br>
at scale unless theres something specific I'm after, ie benchmarks or 
<br>
apps I'm using as a benchmark, rather than test suites.
<br>
<p>You might look at some of the purple benchmarks:
<br>
<p><a href="http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/code_list.html">http://www.llnl.gov/asci/platforms/purple/rfp/benchmarks/limited/code_list.html</a>
<br>
<p>Andrew
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; What about Sandia and LANL?  Is there anything that is ran on their 
</span><br>
<span class="quotelev1">&gt; large clusters to confirm things seem to work at high np's?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Cisco is not yet testing that large, but we plan to shortly start  
</span><br>
<span class="quotelev2">&gt;&gt; testing at np&gt;=128 (I'm waiting for an internal cluster within Cisco  
</span><br>
<span class="quotelev2">&gt;&gt; to be setup properly).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2007, at 5:31 PM, Rolf.Vandevaart_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am curious which tests are being used when running tests on larger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clusters.  And by larger clusters, I mean anything with np &gt; 128.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Although I realize that is not very large, but it is bigger than most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the clusters I assume tests are being run on)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask this because I planned on using some of the intel tests, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clearly have limitations starting at np=64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To avoid mailing list clutter, feel free to just email me and I will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; summarize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Reply:</strong> <a href="2317.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
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
