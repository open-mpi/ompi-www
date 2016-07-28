<?
$subject_val = "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 13:24:42 2014" -->
<!-- isoreceived="20140527172442" -->
<!-- sent="Tue, 27 May 2014 10:24:39 -0700" -->
<!-- isosent="20140527172439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework" -->
<!-- id="1FCEDCF7-741D-4572-B32C-57AA3C893255_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.01.1405271220010.16134_at_tigger.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 13:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, my concern is that we just had a user who was confused by it and thought they needed to build it to use PMI under Slurm - which is totally the wrong thing to do. So I removed it from the 1.8 branch to avoid any further confusion, and don't see any reason to continue carrying it in the trunk (heck, nobody builds it as evidenced by its stale situation).
<br>
<p><p>On May 27, 2014, at 9:22 AM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This component does provide a alternate reference for the ompi-rte
</span><br>
<span class="quotelev1">&gt; framework.  But if it is unused (unmaintained), it seems less useful in
</span><br>
<span class="quotelev1">&gt; practice.  I'll post another RFC for related request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --tjn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, 25 May 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:  remove stale and unmaintained component in ompi/rte framework
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:   because it is unused, unmaintained, and doesn't even compile?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:  without objections, after telecon on June 9
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HOW:   svn del ompi/rte/pmi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This was a component added by Brian as a test of the ompi/rte framework while we developed that system. It never really had any purpose other than to provide an alternative to ORTE while we tested the revised integration. So far as we know, nobody ever used it in an actual installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14838.php">http://www.open-mpi.org/community/lists/devel/2014/05/14838.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14851.php">http://www.open-mpi.org/community/lists/devel/2014/05/14851.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
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
