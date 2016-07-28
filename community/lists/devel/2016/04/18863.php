<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 10:59:39 2016" -->
<!-- isoreceived="20160430145939" -->
<!-- sent="Sat, 30 Apr 2016 08:59:38 -0600" -->
<!-- isosent="20160430145938" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc2" -->
<!-- id="CAF1Cqj5XYkrJF45F3LZHf8Pz6QxMG8OL1UTb+K9XzTz9QjomJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57243282.6030300_at_cora.nwra.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-30 10:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18864.php">Ralph Castain: "[OMPI devel] v2.0.0rc issues"</a>
<li><strong>Previous message:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>In reply to:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Let's just update the MPI_THREAD_MULTIPLE comment to say that
<br>
enable-mpi-thread-multiple is still required as part of config.
<br>
<p>Howard
<br>
<p>2016-04-29 22:20 GMT-06:00 Orion Poplawski &lt;orion_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On 04/28/2016 05:01 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At long last, here's the next v2.0.0 release candidate: 2.0.0rc2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We didn't keep a good list of all the things that have changed since rc1
</span><br>
<span class="quotelev2">&gt;&gt; -- but it's many things.  Here's a link to the NEWS file for v2.0.0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS">https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please test test test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I see that --enable-mpi-cxx appears to default to disabled now, but I
</span><br>
<span class="quotelev1">&gt; don't see any mention of it in the NEWS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809">https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect I'll keep this enabled in the Fedora openmpi builds just
</span><br>
<span class="quotelev1">&gt; because.  But I could be persuaded otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I see mention of improved MPI_THREAD_MULTIPLE support but that it
</span><br>
<span class="quotelev1">&gt; still defaults to disabled, so I assume it probably should still be
</span><br>
<span class="quotelev1">&gt; disabled in the basic fedora package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also filed <a href="https://github.com/open-mpi/ompi/issues/1609">https://github.com/open-mpi/ompi/issues/1609</a> for failing to
</span><br>
<span class="quotelev1">&gt; find system pmix library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that's it for me so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18859.php">http://www.open-mpi.org/community/lists/devel/2016/04/18859.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18864.php">Ralph Castain: "[OMPI devel] v2.0.0rc issues"</a>
<li><strong>Previous message:</strong> <a href="18862.php">Gilles Gouaillardet: "Re: [OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>In reply to:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
