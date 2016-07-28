<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 10:52:25 2009" -->
<!-- isoreceived="20090824145225" -->
<!-- sent="Mon, 24 Aug 2009 10:52:07 -0400" -->
<!-- isosent="20090824145207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="BCDA6E39-5EB3-4587-BEE3-B83B29CF5420_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49369.128.165.0.81.1251076061.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 10:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6699.php">Jeff Squyres: "[OMPI devel] Platform acquires HP-MPI"</a>
<li><strong>In reply to:</strong> <a href="6697.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The debug builds already have quite a bit of performance overhead.  It  
<br>
might be desirable to change this RFC to have a similar tri-state as  
<br>
the MPI parameter checking:
<br>
<p>- compiled out
<br>
- compiled in, always check
<br>
- compiled in, use MCA parameter to determine whether to check
<br>
<p>Adapting that to this RFC, perhaps something like this:
<br>
<p>- compiled out
<br>
- compiled in, always convert standard send to sync send
<br>
- compiled in, use MCA parameter to determine whether to convert  
<br>
standard -&gt; sync
<br>
<p>And we can leave the default as &quot;compiled out&quot;.
<br>
<p>Howzat?
<br>
<p><p>On Aug 23, 2009, at 9:07 PM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about exposing this functionality as a run-time parameter that  
</span><br>
<span class="quotelev1">&gt; is only
</span><br>
<span class="quotelev1">&gt; available in debug builds?  This will make debugging easier and won't
</span><br>
<span class="quotelev1">&gt; impact the performance of optimized builds.  Just an idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does anyone have any suggestions?  Or are we stuck
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with compile-time checking?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't see this until now, but I'd be happy with
</span><br>
<span class="quotelev2">&gt; &gt; just a compile time option so we could produce an
</span><br>
<span class="quotelev2">&gt; &gt; install just for debugging purposes and have our
</span><br>
<span class="quotelev2">&gt; &gt; users explicitly select it with modules.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have to say that this is of interest to us as we're
</span><br>
<span class="quotelev2">&gt; &gt; trying to help a researcher at one of our member uni's
</span><br>
<span class="quotelev2">&gt; &gt; to track down a bug where a message appears to go missing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cheers!
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev2">&gt; &gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev2">&gt; &gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev2">&gt; &gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6699.php">Jeff Squyres: "[OMPI devel] Platform acquires HP-MPI"</a>
<li><strong>In reply to:</strong> <a href="6697.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6701.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
