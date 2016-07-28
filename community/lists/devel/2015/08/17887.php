<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 11:59:56 2015" -->
<!-- isoreceived="20150827155956" -->
<!-- sent="Thu, 27 Aug 2015 17:59:53 +0200" -->
<!-- isosent="20150827155953" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="847BE780-93F8-4B48-B4B0-DC78D317042B_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6y5v=Kh=W7vsibBZN9aKdFKw+wOOTowKZhKFXsvMhjog_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-27 11:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17886.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p><span class="quotelev1">&gt; On 27 Aug 2015, at 17:48 , Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think you're hitting an RSIP port limit.
</span><br>
<p>Thats sounds like it indeed.
<br>
<p><span class="quotelev1">&gt;  If you bind to ipogif0 then you should have much better luck, unless 
</span><br>
<span class="quotelev1">&gt; you're trying to have open mpi span outside the cray HPN.
</span><br>
<p><p>Now you get me wondering. I actually played with both oob-tcp-if-include and -exclude , but possibly not in the right context I realize now.
<br>
Let me undo my changes and try with only the configuration changes.
<br>
<p>Thanks!
<br>
<p>Mark
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use the oob mca parameter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oob-tcp-if-include ipogif0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may want to put that in your .openmpi/mca-params.conf file if you have one installed, but
</span><br>
<span class="quotelev1">&gt; don't forget if your home directory is accesible from different machines, some of which may
</span><br>
<span class="quotelev1">&gt; not be Cray XE/XC then probably don't want to do that.  Messed me up with runs on carver
</span><br>
<span class="quotelev1">&gt; system at NERSC for a while.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-08-27 9:42 GMT-06:00 Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason that is currently still beyond me, I can't bind to INADDR_ANY for more than 74 ports on a Cray compute node, without getting EADDRINUSE.
</span><br>
<span class="quotelev1">&gt; This impacts my use of the oob_tcp_listener.c:create_listen() code on that machine (through means of orte-submit).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've implemented a proof of concept that gets the address from a hardcoded interface and uses that for the binding, and then everything is hunky dory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I'm interested in the root cause also, that may likely be outside of my control, so I wonder whether the hack can be turned into something more appropriate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So some questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I can't stop to think that somewhere in the codebase there is probably some portable code to extract addresses from an interface.
</span><br>
<span class="quotelev1">&gt; - Is there already some MCA parameter that can be (re)used to specify the interface to use for this kind of purpose.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17882.php">http://www.open-mpi.org/community/lists/devel/2015/08/17882.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17884.php">http://www.open-mpi.org/community/lists/devel/2015/08/17884.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17886.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
