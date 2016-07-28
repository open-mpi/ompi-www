<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 15:54:27 2015" -->
<!-- isoreceived="20150629195427" -->
<!-- sent="Mon, 29 Jun 2015 14:54:24 -0500" -->
<!-- isosent="20150629195424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="CAMD57ocGmmfw_9ajWNSxSJz0Hz3gVbg4HMqqP8P5Jz9ho54tOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="325EF60A-A0DA-489C-AF90-244B7DF14CEF_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 15:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...is this some Cray weirdness? I checked the code and it looks right,
<br>
and it runs correctly for me on both Mac and Linux. All it is doing is
<br>
calling &quot;setenv&quot;, so I'm wondering if there is something environ-specific
<br>
going on here?
<br>
<p>I added some debug in cast that might help - can you run it on the Cray
<br>
with &quot;--mca rtc_base_verbose 5&quot; on the cmd line?
<br>
<p><p>On Mon, Jun 29, 2015 at 1:19 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Ahh... it's OMP_PROC_BIND, not OMPI_PROC_BIND.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, Ralph just added this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I chatted with him about this on the phone moments ago; he's pretty sure
</span><br>
<span class="quotelev1">&gt; he knows where to go look to find the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 29, 2015, at 12:00 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; laki is also showing the errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the shortened url:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; looks like the badness started with the latest nightly.
</span><br>
<span class="quotelev2">&gt; &gt; I think there was some activity in the orte binding area recently.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or, if the MTT results are not on the community reporter, can you show a
</span><br>
<span class="quotelev1">&gt; bit more context in the output?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm seeing an error I've not seen before in the MTT runs on the ibm
</span><br>
<span class="quotelev1">&gt; dataplex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; at NERSC.  The mpirun launched jobs are failing with
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OMPI_PROC_BIND value is invalid
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; errors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is is for the trivial ring tests.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is anyone else seeing these types of errors?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17568.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
