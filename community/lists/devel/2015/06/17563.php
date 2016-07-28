<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 14:19:55 2015" -->
<!-- isoreceived="20150629181955" -->
<!-- sent="Mon, 29 Jun 2015 18:19:52 +0000" -->
<!-- isosent="20150629181952" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="325EF60A-A0DA-489C-AF90-244B7DF14CEF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5V2J6rArSr6-iD4+uNtmjFNusC_LRtEZc9RROnfV05yQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 14:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17564.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>Previous message:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17560.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ahh... it's OMP_PROC_BIND, not OMPI_PROC_BIND.
<br>
<p>Yes, Ralph just added this.
<br>
<p>I chatted with him about this on the phone moments ago; he's pretty sure he knows where to go look to find the problem.
<br>
<p><p><span class="quotelev1">&gt; On Jun 29, 2015, at 12:00 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; laki is also showing the errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the shortened url:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; looks like the badness started with the latest nightly.
</span><br>
<span class="quotelev1">&gt; I think there was some activity in the orte binding area recently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or, if the MTT results are not on the community reporter, can you show a bit more context in the output?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm seeing an error I've not seen before in the MTT runs on the ibm dataplex
</span><br>
<span class="quotelev2">&gt; &gt; at NERSC.  The mpirun launched jobs are failing with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_PROC_BIND value is invalid
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is is for the trivial ring tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is anyone else seeing these types of errors?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17564.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>Previous message:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17560.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
