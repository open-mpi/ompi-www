<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 00:23:39 2016" -->
<!-- isoreceived="20160526042339" -->
<!-- sent="Thu, 26 May 2016 09:53:38 +0530" -->
<!-- isosent="20160526042338" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc2" -->
<!-- id="CANi1EtNizA0uNXC+gWauDTrf5-+Oe9ok=XiYx66=47+=KWJU9g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj5XYkrJF45F3LZHf8Pz6QxMG8OL1UTb+K9XzTz9QjomJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v2.0.0rc2<br>
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 00:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="19034.php">Ralph Castain: "Re: [OMPI devel] [1.10.3.rc3] test results summary"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; - Improved support for MPI_THREAD_MULTIPLE (when configured with
</span><br>
&nbsp;--enable-mpi-thread-multiple).
<br>
<p>Just curious to know why this is not enabled by default.  Are there any
<br>
known issues ?
<br>
<p>I was able to run HPCC benchmark with np=56, without any issues.  Hence,
<br>
wondering.
<br>
<p>Please let me know.
<br>
<p>Thanks!
<br>
- Sreenidhi.
<br>
<p><p><p>On Sat, Apr 30, 2016 at 8:29 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's just update the MPI_THREAD_MULTIPLE comment to say that
</span><br>
<span class="quotelev1">&gt; enable-mpi-thread-multiple is still required as part of config.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-04-29 22:20 GMT-06:00 Orion Poplawski &lt;orion_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/28/2016 05:01 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At long last, here's the next v2.0.0 release candidate: 2.0.0rc2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We didn't keep a good list of all the things that have changed since rc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- but it's many things.  Here's a link to the NEWS file for v2.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS">https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please test test test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see that --enable-mpi-cxx appears to default to disabled now, but I
</span><br>
<span class="quotelev2">&gt;&gt; don't see any mention of it in the NEWS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809">https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect I'll keep this enabled in the Fedora openmpi builds just
</span><br>
<span class="quotelev2">&gt;&gt; because.  But I could be persuaded otherwise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I see mention of improved MPI_THREAD_MULTIPLE support but that it
</span><br>
<span class="quotelev2">&gt;&gt; still defaults to disabled, so I assume it probably should still be
</span><br>
<span class="quotelev2">&gt;&gt; disabled in the basic fedora package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also filed <a href="https://github.com/open-mpi/ompi/issues/1609">https://github.com/open-mpi/ompi/issues/1609</a> for failing to
</span><br>
<span class="quotelev2">&gt;&gt; find system pmix library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that's it for me so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18859.php">http://www.open-mpi.org/community/lists/devel/2016/04/18859.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18863.php">http://www.open-mpi.org/community/lists/devel/2016/04/18863.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="19034.php">Ralph Castain: "Re: [OMPI devel] [1.10.3.rc3] test results summary"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
