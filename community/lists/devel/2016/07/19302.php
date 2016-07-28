<?
$subject_val = "Re: [OMPI devel] Performance analysis proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 10:27:55 2016" -->
<!-- isoreceived="20160727142755" -->
<!-- sent="Wed, 27 Jul 2016 14:27:52 +0000" -->
<!-- isosent="20160727142752" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Performance analysis proposal" -->
<!-- id="647C2A2D-A600-4A09-BD48-184B8CFBE49F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANi1EtNsU_YFk+WnUPkdZqnqi-Sx1FMDYK3ONoocGUNqk9MZQw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-27 10:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19297.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2016, at 7:32 AM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is interesting topic.  Just FYI, we were thinking of evaluating threading performance using the following:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~thakur/thread-tests/thread-tests-1.1.tar.gz">http://www.mcs.anl.gov/~thakur/thread-tests/thread-tests-1.1.tar.gz</a>  ; OSU MB also seems good to measure.
</span><br>
<p>Some of those tests are good, some are not.  Some of them are more of a test of unexpected messages, for example -- and don't really do a good job of isolating threading effects from other effects.
<br>
<p><span class="quotelev1">&gt; 1. How about evaluating FUNNELED and SERIALIZED performance ?
</span><br>
<p>For Open MPI, it's basically THREAD_MULTIPLE and not-THREAD_MULTIPLE.  I.e., there's no real difference between SINGLE, SERIALIZED, FUNNELED.
<br>
<p><span class="quotelev1">&gt; 2. Is there any discussion or proposal on optimizing / improving thread performance ?
</span><br>
<p>That's what this is all about.  THREAD_MULTIPLE support has been... &quot;nominal&quot; in Open MPI for a few years.  v2.0.0 took some major leaps forward in terms of MPI_THREAD_MULITIPLE correctness and performance in its core infrastructure.  As part of that effort, the MPI_Request handling was revamped.
<br>
<p>Solid, performant THREAD_MULTIPLE support is new ground in many ways.  This is a journey that will take some time (i.e., improve over the span of multiple releases).  We took several important steps forward in v2.0.0, and now we need to a) quantify those steps, and b) decide what the next steps will be.
<br>
<p>Over the past 3-4 weeks on the weekly webex, we've been discussing improving both of these things:
<br>
<p>- quantifying our current THREAD_MULTIPLE performance
<br>
- quantifying exactly what the MPI_Request revamp improves (and doesn't improve)
<br>
<p>Yesterday on the webex, we had a lengthy discussion about exactly these issues.  
<br>
<p>The action item that Arm+I took from that conversation was to run some thread performance measurement tests.  ...but when Arm started running tests yesterday afternoon, it quickly became evident that we didn't know exactly *what* data to collect, and what the *specific* end goals were for collecting that data.
<br>
<p>So Arm and I stopped running tests, and instead sat down for 2-3 hours and came up with the proposal that we published on the wiki for discussion / comment.
<br>
<p>Does that make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19303.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>Previous message:</strong> <a href="19301.php">Saliya Ekanayake: "Re: [OMPI devel] Performance analysis proposal"</a>
<li><strong>In reply to:</strong> <a href="19297.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Performance analysis proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19298.php">Artem Polyakov: "Re: [OMPI devel] Performance analysis proposal"</a>
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
