<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 12:01:15 2015" -->
<!-- isoreceived="20150629160115" -->
<!-- sent="Mon, 29 Jun 2015 10:00:11 -0600" -->
<!-- isosent="20150629160011" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="CAF1Cqj5V2J6rArSr6-iD4+uNtmjFNusC_LRtEZc9RROnfV05yQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FD78A63D-0C20-4A33-AEA6-6FD74EC5ED65_at_cisco.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 12:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>Previous message:</strong> <a href="17559.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17559.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
laki is also showing the errors:
<br>
<p><p>Here's the shortened url:
<br>
<p><a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>
<br>
<p>looks like the badness started with the latest nightly.
<br>
I think there was some activity in the orte binding area recently.
<br>
<p>Howard
<br>
<p><p><p><p>2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, if the MTT results are not on the community reporter, can you show a
</span><br>
<span class="quotelev1">&gt; bit more context in the output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm seeing an error I've not seen before in the MTT runs on the ibm
</span><br>
<span class="quotelev1">&gt; dataplex
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>Previous message:</strong> <a href="17559.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17559.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
