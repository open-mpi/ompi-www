<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 02:56:41 2014" -->
<!-- isoreceived="20140926065641" -->
<!-- sent="Fri, 26 Sep 2014 15:56:36 +0900" -->
<!-- isosent="20140926065636" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="54250E24.4000304_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B40C763E-1368-408D-8D59-64DBBFC6A844_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in oob/tcp<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 02:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15921.php">Kawashima, Takahiro: "Re: [OMPI devel] 1.8.3rc2 available"</a>
<li><strong>Previous message:</strong> <a href="15919.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>In reply to:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i just commited r32799 in order to fix this issue.
<br>
i cmr'ed (#4923) and set the target for 1.8.4
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/09/23 22:55, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks! I won't have time to work on it this week, but appreciate your effort. Also, thanks for clarifying the race condition vis 1.8 - I agree it is not a blocker for that release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2014, at 4:49 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the patch i am using so far.
</span><br>
<span class="quotelev2">&gt;&gt; i will resume working on this from Wednesday (there is at least one remaining race condition yet) unless you have the time to take care of it today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so far, the race condition has only been observed in real life with the grpcomm/rcd module, and this is not the default in v1.8, so imho this is not a blocker for v1.8.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 23, 2014 at 7:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles - please let me know if/when you think you'll do this. I'm debating about adding it to 1.8.3, but don't want to delay that release too long. Alternatively, I can take care of it if you don't have time (I'm asking if you can do it solely because you have the reproducer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 21, 2014, at 6:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds fine with me - please go ahead, and thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 20, 2014, at 10:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the pointer George !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sat, Sep 20, 2014 at 5:46 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or copy the handshake protocol design of the TCP BTL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the main difference between oob/tcp and btl/tcp is the way we resolve the situation in which two processes send their first message to each other at the same time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in oob/tcp, all (e.g. one or two) sockets are closed and the higher vpid is directed to retry establishing a connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in btl/tcp, the useless socket is closed (e.g. the one that was connect-ed on the lower vpid and the one that was accept-ed on the higher vpid.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my first impression is that oob/tcp is un-necessary complex and it should use the simpler and most efficient protocol of btl/tcp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that being said, this conclusion could be too naive and for some good reasons i ignore, the btl/tcp handshake protocol might not be a good fit for oob/tcp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i will revamp oob/tcp in order to use the same btl/tcp handshake protocol from tomorrow unless indicated otherwise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15885.php">http://www.open-mpi.org/community/lists/devel/2014/09/15885.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15895.php">http://www.open-mpi.org/community/lists/devel/2014/09/15895.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;oobtcp2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15897.php">http://www.open-mpi.org/community/lists/devel/2014/09/15897.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15900.php">http://www.open-mpi.org/community/lists/devel/2014/09/15900.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15921.php">Kawashima, Takahiro: "Re: [OMPI devel] 1.8.3rc2 available"</a>
<li><strong>Previous message:</strong> <a href="15919.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>In reply to:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15922.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
