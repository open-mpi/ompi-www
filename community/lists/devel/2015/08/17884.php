<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 11:48:48 2015" -->
<!-- isoreceived="20150827154848" -->
<!-- sent="Thu, 27 Aug 2015 09:48:47 -0600" -->
<!-- isosent="20150827154847" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="CAF1Cqj6y5v=Kh=W7vsibBZN9aKdFKw+wOOTowKZhKFXsvMhjog_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2D4BF221-5AAC-4614-BEB9-9B94C7B1B44D_at_rutgers.edu" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 11:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17885.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17882.php">Mark Santcroos: "[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17887.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17887.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark,
<br>
<p>I think you're hitting an RSIP port limit.  If you bind to ipogif0 then you
<br>
should have much better luck, unless
<br>
you're trying to have open mpi span outside the cray HPN.
<br>
<p>You can use the oob mca parameter:
<br>
<p>oob-tcp-if-include ipogif0
<br>
<p>You may want to put that in your .openmpi/mca-params.conf file if you have
<br>
one installed, but
<br>
don't forget if your home directory is accesible from different machines,
<br>
some of which may
<br>
not be Cray XE/XC then probably don't want to do that.  Messed me up with
<br>
runs on carver
<br>
system at NERSC for a while.
<br>
<p>Howard
<br>
<p><p>2015-08-27 9:42 GMT-06:00 Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some reason that is currently still beyond me, I can't bind to
</span><br>
<span class="quotelev1">&gt; INADDR_ANY for more than 74 ports on a Cray compute node, without getting
</span><br>
<span class="quotelev1">&gt; EADDRINUSE.
</span><br>
<span class="quotelev1">&gt; This impacts my use of the oob_tcp_listener.c:create_listen() code on that
</span><br>
<span class="quotelev1">&gt; machine (through means of orte-submit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've implemented a proof of concept that gets the address from a hardcoded
</span><br>
<span class="quotelev1">&gt; interface and uses that for the binding, and then everything is hunky dory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I'm interested in the root cause also, that may likely be outside
</span><br>
<span class="quotelev1">&gt; of my control, so I wonder whether the hack can be turned into something
</span><br>
<span class="quotelev1">&gt; more appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So some questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I can't stop to think that somewhere in the codebase there is probably
</span><br>
<span class="quotelev1">&gt; some portable code to extract addresses from an interface.
</span><br>
<span class="quotelev1">&gt; - Is there already some MCA parameter that can be (re)used to specify the
</span><br>
<span class="quotelev1">&gt; interface to use for this kind of purpose.
</span><br>
<span class="quotelev1">&gt; - (And why is the &quot;client&quot; listening on a socket in the first place?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17882.php">http://www.open-mpi.org/community/lists/devel/2015/08/17882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17885.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17882.php">Mark Santcroos: "[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17887.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17887.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
