<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 11:56:32 2009" -->
<!-- isoreceived="20090824155632" -->
<!-- sent="Mon, 24 Aug 2009 17:54:34 +0200 (CEST)" -->
<!-- isosent="20090824155434" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="alpine.DEB.2.00.0908241746290.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="55295E81-4C61-436F-B855-662A41B554FC_at_eecs.utk.edu" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 11:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the record, I see an big interest in this.
<br>
<p>Sometimes, you have to answer calls for tender featuring applications that 
<br>
must work with no code change, even if the code is completely not 
<br>
MPI-compliant.
<br>
<p>That's sad, but true (no pun intended :-))
<br>
<p>Sylvain
<br>
<p>On Mon, 24 Aug 2009, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Do people know that there exist tools for checking MPI code correctness? 
</span><br>
<span class="quotelev1">&gt; Many, many tools and most of them are freely available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally I don't see any interest of doing this, absolutely no interest. 
</span><br>
<span class="quotelev1">&gt; There is basically no added value to our MPI, except for a very limited 
</span><br>
<span class="quotelev1">&gt; number of users, and these users if they manage to write a parallel 
</span><br>
<span class="quotelev1">&gt; application that need this checking I'm sure they will greatly benefit from a 
</span><br>
<span class="quotelev1">&gt; real tool to help them correct their MPI code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a side note, a very similar effect can be obtained by decreasing the eager 
</span><br>
<span class="quotelev1">&gt; size of the BTLs to be equal to the size of the match header, which is about 
</span><br>
<span class="quotelev1">&gt; 24 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2009, at 11:11 , Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good to me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The debug builds already have quite a bit of performance overhead.  It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be desirable to change this RFC to have a similar tri-state as the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI parameter checking:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled in, always check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled in, use MCA parameter to determine whether to check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adapting that to this RFC, perhaps something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled in, always convert standard send to sync send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compiled in, use MCA parameter to determine whether to convert standard 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; sync
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And we can leave the default as &quot;compiled out&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howzat?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 23, 2009, at 9:07 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How about exposing this functionality as a run-time parameter that is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available in debug builds?  This will make debugging easier and won't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; impact the performance of optimized builds.  Just an idea...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does anyone have any suggestions?  Or are we stuck
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with compile-time checking?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I didn't see this until now, but I'd be happy with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just a compile time option so we could produce an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; install just for debugging purposes and have our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users explicitly select it with modules.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have to say that this is of interest to us as we're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trying to help a researcher at one of our member uni's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to track down a bug where a message appears to go missing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cheers!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; VPAC is a not-for-profit Registered Research Agency
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6702.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
