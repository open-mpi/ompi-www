<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 10:30:42 2016" -->
<!-- isoreceived="20160727143042" -->
<!-- sent="Wed, 27 Jul 2016 14:30:24 +0000" -->
<!-- isosent="20160727143024" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="4D74C5F4-9839-4B91-AA6E-F5BE0384AF1B_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2Qj5o4pVs6T8RDMWf12Cj1McrCZn2j2LCyzm4SHXK=n7=N9A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Performance analysis proposal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-27 10:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19302.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2016, at 8:27 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you had a chance to check my benchmark? I haven't seen any mentions in the wiki? Should I add the info about it there?
</span><br>

<br>
Yes, please do!  I'm sorry; I meant to ask you to do that in my original email -- I got rushed and neglected to do so.
<br>

<br>
<span class="quotelev1">&gt; In addition to the benchmark described in the wiki I assumed the option to have several multi-threaded processes running on 2 nodes same node (OSU is the corner case here when number of threads is 1).
</span><br>

<br>
I'm not sure what you mean &quot;2 nodes on the same node&quot;...?
<br>

<br>
<span class="quotelev1">&gt; I think that we shouldn't concentrate on Vader only - it might (as well as might not) have  problems.
</span><br>

<br>
I'm not opposed to running with other networks.  We suggested vader for the reasons I listed on the wiki:
<br>

<br>
- it's a good baseline
<br>
- it will definitely show existing performance bottlenecks
<br>
- it can be run everywhere
<br>

<br>
One more reason I didn't put on the wiki: it's a good starting point.  Indeed, if we use fader-based results to fix some issues, we'd clearly want to test with other networks to ensure that the improvements translate to them, too.
<br>

<br>
<span class="quotelev1">&gt; &#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 27 &#208;&#184;&#209;&#142;&#208;&#187;&#209;&#143; 2016 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Jeff Squyres (jsquyres) &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev1">&gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a wiki page containing a proposal for how and what to measure to evaluate threading performance, etc.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please feel free to comment/suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Polyakov
</span><br>
<span class="quotelev1">&gt; (Mobile mail)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19298.php">http://www.open-mpi.org/community/lists/devel/2016/07/19298.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19302.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
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
