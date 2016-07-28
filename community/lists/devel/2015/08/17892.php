<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 20:55:37 2015" -->
<!-- isoreceived="20150828005537" -->
<!-- sent="Fri, 28 Aug 2015 09:55:30 +0900" -->
<!-- isosent="20150828005530" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="55DFB182.3060809_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F4EEC110-F655-4787-9A37-93572B4C5237_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 20:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>what about :
<br>
- if only one interface is specified (e.g. *_if_include eth0), then bind 
<br>
to that interface
<br>
- otherwise, bind to all interfaces
<br>
<p>Mark, would that solve your issue ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/28/2015 9:50 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I committed the change that prevents orte-submit from binding a listener - seems to work fine for me, so please let me know how it works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other issue - binding to all interfaces instead of only the ones specified - is a little more troublesome. If we don&#226;&#128;&#153;t bind to all interfaces, then we have to consume a socket for each interface we are going to bind to - which means we trade-off binding one socket to all interfaces for consuming one socket per interface we are using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that binding to all interfaces doesn&#226;&#128;&#153;t hurt us given that we will only attempt to connect on the specified interfaces, whereas consuming even more file descriptors can be a problem, but maybe I&#226;&#128;&#153;m not seeing something. Anyone have an opinion here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2015, at 3:14 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 27 Aug 2015, at 17:58 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, let me take a look
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph, please let me know if I can be of any assistance!
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17890.php">http://www.open-mpi.org/community/lists/devel/2015/08/17890.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17891.php">http://www.open-mpi.org/community/lists/devel/2015/08/17891.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
