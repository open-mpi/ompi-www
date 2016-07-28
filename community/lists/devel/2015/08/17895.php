<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 02:53:30 2015" -->
<!-- isoreceived="20150828065330" -->
<!-- sent="Fri, 28 Aug 2015 08:53:26 +0200" -->
<!-- isosent="20150828065326" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="8EF6B10C-BD18-44E3-AED7-DF76CB12AB13_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55DFB182.3060809_at_rist.or.jp" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 02:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17892.php">Gilles Gouaillardet: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; On 28 Aug 2015, at 2:55 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; what about :
</span><br>
<span class="quotelev1">&gt; - if only one interface is specified (e.g. *_if_include eth0), then bind to that interface
</span><br>
<span class="quotelev1">&gt; - otherwise, bind to all interfaces
</span><br>
<p>I agree, with the notion that you don't really bind to interfaces, but to addresses.
<br>
<p><span class="quotelev1">&gt; Mark, would that solve your issue ?
</span><br>
<p>This probably would have solved my issue too, but as you might have seen my issue is solved already by Ralph, by not listening/binding in the first place for orte-submit.
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17892.php">Gilles Gouaillardet: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
