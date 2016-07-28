<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 11:11:48 2009" -->
<!-- isoreceived="20090824151148" -->
<!-- sent="Mon, 24 Aug 2009 09:11:41 -0600" -->
<!-- isosent="20090824151141" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="4A92ADAD.5050500_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BCDA6E39-5EB3-4587-BEE3-B83B29CF5420_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 11:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6700.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6700.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sounds good to me.
<br>
<p>Samuel K. Gutierrez
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The debug builds already have quite a bit of performance overhead.  It 
</span><br>
<span class="quotelev1">&gt; might be desirable to change this RFC to have a similar tri-state as 
</span><br>
<span class="quotelev1">&gt; the MPI parameter checking:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compiled out
</span><br>
<span class="quotelev1">&gt; - compiled in, always check
</span><br>
<span class="quotelev1">&gt; - compiled in, use MCA parameter to determine whether to check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adapting that to this RFC, perhaps something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compiled out
</span><br>
<span class="quotelev1">&gt; - compiled in, always convert standard send to sync send
</span><br>
<span class="quotelev1">&gt; - compiled in, use MCA parameter to determine whether to convert 
</span><br>
<span class="quotelev1">&gt; standard -&gt; sync
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And we can leave the default as &quot;compiled out&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howzat?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2009, at 9:07 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about exposing this functionality as a run-time parameter that is 
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; available in debug builds?  This will make debugging easier and won't
</span><br>
<span class="quotelev2">&gt;&gt; impact the performance of optimized builds.  Just an idea...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Does anyone have any suggestions?  Or are we stuck
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; with compile-time checking?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I didn't see this until now, but I'd be happy with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; just a compile time option so we could produce an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; install just for debugging purposes and have our
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users explicitly select it with modules.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have to say that this is of interest to us as we're
</span><br>
<span class="quotelev3">&gt;&gt; &gt; trying to help a researcher at one of our member uni's
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to track down a bug where a message appears to go missing.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cheers!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev3">&gt;&gt; &gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6700.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6700.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
