<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 08:36:03 2016" -->
<!-- isoreceived="20160727123603" -->
<!-- sent="Wed, 27 Jul 2016 18:36:00 +0600" -->
<!-- isosent="20160727123600" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="CAJ2Qj5oRav=Gh=DECs7m24t6oWDSR1=8PBDnoyyMyaGA5WzPBA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-27 08:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
P.S. Right now my Bmark disallow smp config described in the wiki, but
<br>
consider extending it with the special flag saying that you explicitly want
<br>
to test intranode performance.
<br>
<p>&#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 27 &#208;&#184;&#209;&#142;&#208;&#187;&#209;&#143; 2016 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Artem Polyakov &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
<br>
<p><span class="quotelev1">&gt; Thank you, Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you had a chance to check my benchmark? I haven't seen any mentions
</span><br>
<span class="quotelev1">&gt; in the wiki? Should I add the info about it there?
</span><br>
<span class="quotelev1">&gt; In addition to the benchmark described in the wiki I assumed the option to
</span><br>
<span class="quotelev1">&gt; have several multi-threaded processes running on 2 nodes same node (OSU is
</span><br>
<span class="quotelev1">&gt; the corner case here when number of threads is 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that we shouldn't concentrate on Vader only - it might (as well as
</span><br>
<span class="quotelev1">&gt; might not) have  problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 27 &#208;&#184;&#209;&#142;&#208;&#187;&#209;&#143; 2016 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Jeff Squyres (jsquyres) &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per discussion on the Webex weekly meeting yesterday, Arm and I made a
</span><br>
<span class="quotelev2">&gt;&gt; wiki page containing a proposal for how and what to measure to evaluate
</span><br>
<span class="quotelev2">&gt;&gt; threading performance, etc.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Request-refactoring-test">https://github.com/open-mpi/ompi/wiki/Request-refactoring-test</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please feel free to comment/suggest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19296.php">http://www.open-mpi.org/community/lists/devel/2016/07/19296.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
-----
Best regards, Artem Polyakov
(Mobile mail)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19300.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
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
