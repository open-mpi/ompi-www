<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 09:54:54 2014" -->
<!-- isoreceived="20140921135454" -->
<!-- sent="Sun, 21 Sep 2014 06:54:43 -0700" -->
<!-- isosent="20140921135443" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="7672F8EA-E8A6-4375-AAA8-3B9324B81EF4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vO_2HKa8xQc-PRmy2Fc=dJFV0jXpdkj=sAfWS8j5h4bg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-21 09:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15885.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15885.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds fine with me - please go ahead, and thanks
<br>
<p>On Sep 20, 2014, at 10:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the pointer George !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 20, 2014 at 5:46 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Or copy the handshake protocol design of the TCP BTL...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the main difference between oob/tcp and btl/tcp is the way we resolve the situation in which two processes send their first message to each other at the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in oob/tcp, all (e.g. one or two) sockets are closed and the higher vpid is directed to retry establishing a connection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in btl/tcp, the useless socket is closed (e.g. the one that was connect-ed on the lower vpid and the one that was accept-ed on the higher vpid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my first impression is that oob/tcp is un-necessary complex and it should use the simpler and most efficient protocol of btl/tcp.
</span><br>
<span class="quotelev1">&gt; that being said, this conclusion could be too naive and for some good reasons i ignore, the btl/tcp handshake protocol might not be a good fit for oob/tcp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will revamp oob/tcp in order to use the same btl/tcp handshake protocol from tomorrow unless indicated otherwise
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15885.php">http://www.open-mpi.org/community/lists/devel/2014/09/15885.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15885.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15885.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15895.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
