<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 12 09:41:43 2007" -->
<!-- isoreceived="20070912134143" -->
<!-- sent="Wed, 12 Sep 2007 09:41:38 -0400" -->
<!-- isosent="20070912134138" -->
<!-- name="Resat Umit Payli" -->
<!-- email="rupayli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Which tests for larger cluster testing" -->
<!-- id="ae3afb330709120641y41ece39bpcc1b26e6b6d635eb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7802A83-2C77-4839-94AD-BCA79E9C3230_at_cisco.com" -->
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
<strong>From:</strong> Resat Umit Payli (<em>rupayli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-12 09:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi;
<br>
<p>I am not sure this is relavent to your question. I do have an computational
<br>
fluid dynamics application which solves fluid flow problems.
<br>
<p>Recently I was able to run this code up to 2048 processors on the Indiana
<br>
University's IBM e1350 BigRed cluster. I did use 1.2.3 version of the
<br>
OpenMPI. I am happy about the preformance I did get. (I am using
<br>
point-to-point sendrecv in this code).
<br>
<p>Thank you
<br>
<p>On 9/12/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cisco is not yet testing that large, but we plan to shortly start
</span><br>
<span class="quotelev1">&gt; testing at np&gt;=128 (I'm waiting for an internal cluster within Cisco
</span><br>
<span class="quotelev1">&gt; to be setup properly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2007, at 5:31 PM, Rolf.Vandevaart_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am curious which tests are being used when running tests on larger
</span><br>
<span class="quotelev2">&gt; &gt; clusters.  And by larger clusters, I mean anything with np &gt; 128.
</span><br>
<span class="quotelev2">&gt; &gt; (Although I realize that is not very large, but it is bigger than most
</span><br>
<span class="quotelev2">&gt; &gt; of the clusters I assume tests are being run on)
</span><br>
<span class="quotelev2">&gt; &gt; I ask this because I planned on using some of the intel tests, but
</span><br>
<span class="quotelev2">&gt; &gt; they
</span><br>
<span class="quotelev2">&gt; &gt; clearly have limitations starting at np=64.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To avoid mailing list clutter, feel free to just email me and I will
</span><br>
<span class="quotelev2">&gt; &gt; summarize.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rolf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
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
