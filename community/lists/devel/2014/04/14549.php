<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: 1-question developer poll";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 11:24:25 2014" -->
<!-- isoreceived="20140416152425" -->
<!-- sent="Wed, 16 Apr 2014 11:24:24 -0400" -->
<!-- isosent="20140416152424" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: 1-question developer poll" -->
<!-- id="CA+ssbKWoRTx8vWSjpiTwQsHGPmG46hX96+4J=AwZ_-Dqg12csA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CF73F8F1.B0B0%regrant_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: 1-question developer poll<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 11:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14550.php">Edgar Gabriel: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14548.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re:  1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14548.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re:  1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14550.php">Edgar Gabriel: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We went through the same situation in our lab (SVN to Git) and here are few
<br>
thoughts,
<br>
<p>1. We wanted Git primarily to get the benefits of Github
<br>
2. Also, as it gives the option to locally version code (plus local
<br>
branches).
<br>
<p>The downside of Git as I felt is its initial learning curve. Another is
<br>
that in SVN you could work (checkout) on subfolders, but with Git model
<br>
this is not encouraged although something similar could be done with
<br>
<a href="http://git-scm.com/docs/git-submodule">http://git-scm.com/docs/git-submodule</a>
<br>
<p>Thanks,
<br>
Saliya
<br>
<p><p>On Wed, Apr 16, 2014 at 11:10 AM, Grant, Ryan Eric (-EXP) &lt;
<br>
regrant_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Sandia uses a mix of Git and SVN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --Ryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   On 4/16/14 9:01 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   We ate using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mainly mercurial.
</span><br>
<span class="quotelev1">&gt; Svn only for ompi.
</span><br>
<span class="quotelev1">&gt; Rarely git.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;  On Apr 16, 2014 10:36 AM, &quot;Rolf vandeVaart&quot; &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SVN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Hjelm
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Sent: Wednesday, April 16, 2014 10:35 AM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Subject: Re: [OMPI devel] 1-question developer poll
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;* PGP Signed by an unknown key
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Git
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;On Wed, Apr 16, 2014 at 10:32:10AM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; What source code repository technology(ies) do you use for Open MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt;development? (indicate all that apply)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - SVN
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - Mercurial
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - Git
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I ask this question because there's serious discussions afoot to switch
</span><br>
<span class="quotelev3">&gt;&gt; &gt;OMPI's main SVN repo to Git, and I want to get a feel for the current
</span><br>
<span class="quotelev3">&gt;&gt; &gt;landscape out there.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt;&gt; &gt;mpi.org/community/lists/devel/2014/04/14537.php
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;* Unknown Key
</span><br>
<span class="quotelev3">&gt;&gt; &gt;* 0x9AC22B15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev2">&gt;&gt; may contain
</span><br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev2">&gt;&gt; distribution
</span><br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev2">&gt;&gt; sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14546.php">http://www.open-mpi.org/community/lists/devel/2014/04/14546.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14548.php">http://www.open-mpi.org/community/lists/devel/2014/04/14548.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14550.php">Edgar Gabriel: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14548.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re:  1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14548.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re:  1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14550.php">Edgar Gabriel: "Re: [OMPI devel] 1-question developer poll"</a>
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
