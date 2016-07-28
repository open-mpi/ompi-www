<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 19:49:31 2014" -->
<!-- isoreceived="20140922234931" -->
<!-- sent="Tue, 23 Sep 2014 08:49:28 +0900" -->
<!-- isosent="20140922234928" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="CAAkFZ5taK0PBbo1A5ZSAMxCOHO8o38rxp05m2u4EV_72egAKRQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B6EC8EB6-9111-462F-B614-FA8391F2F1F3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-22 19:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15896.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>here is the patch i am using so far.
<br>
i will resume working on this from Wednesday (there is at least one
<br>
remaining race condition yet) unless you have the time to take care of it
<br>
today.
<br>
<p>so far, the race condition has only been observed in real life with the
<br>
grpcomm/rcd module, and this is not the default in v1.8, so imho this is
<br>
not a blocker for v1.8.3
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Sep 23, 2014 at 7:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles - please let me know if/when you think you'll do this. I'm debating
</span><br>
<span class="quotelev1">&gt; about adding it to 1.8.3, but don't want to delay that release too long.
</span><br>
<span class="quotelev1">&gt; Alternatively, I can take care of it if you don't have time (I'm asking if
</span><br>
<span class="quotelev1">&gt; you can do it solely because you have the reproducer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2014, at 6:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds fine with me - please go ahead, and thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2014, at 10:26 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the pointer George !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 20, 2014 at 5:46 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or copy the handshake protocol design of the TCP BTL...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; the main difference between oob/tcp and btl/tcp is the way we resolve the
</span><br>
<span class="quotelev1">&gt; situation in which two processes send their first message to each other at
</span><br>
<span class="quotelev1">&gt; the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in oob/tcp, all (e.g. one or two) sockets are closed and the higher vpid
</span><br>
<span class="quotelev1">&gt; is directed to retry establishing a connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in btl/tcp, the useless socket is closed (e.g. the one that was connect-ed
</span><br>
<span class="quotelev1">&gt; on the lower vpid and the one that was accept-ed on the higher vpid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my first impression is that oob/tcp is un-necessary complex and it should
</span><br>
<span class="quotelev1">&gt; use the simpler and most efficient protocol of btl/tcp.
</span><br>
<span class="quotelev1">&gt; that being said, this conclusion could be too naive and for some good
</span><br>
<span class="quotelev1">&gt; reasons i ignore, the btl/tcp handshake protocol might not be a good fit
</span><br>
<span class="quotelev1">&gt; for oob/tcp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will revamp oob/tcp in order to use the same btl/tcp handshake protocol
</span><br>
<span class="quotelev1">&gt; from tomorrow unless indicated otherwise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15885.php">http://www.open-mpi.org/community/lists/devel/2014/09/15885.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15895.php">http://www.open-mpi.org/community/lists/devel/2014/09/15895.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15897/oobtcp2.patch">oobtcp2.patch</a>
</ul>
<!-- attachment="oobtcp2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15898.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15896.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
