<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 18:04:44 2015" -->
<!-- isoreceived="20150827220444" -->
<!-- sent="Thu, 27 Aug 2015 15:04:37 -0700" -->
<!-- isosent="20150827220437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="4EE1657C-64AE-462C-A11E-94BECCA0A02A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="14926575-8228-4F19-A393-34853835BA1B_at_rutgers.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 18:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17890.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;well, that isn&#226;&#128;&#153;t right either :-)
<br>
<p>I&#226;&#128;&#153;ll fix this stuff tonight
<br>
<p><span class="quotelev1">&gt; On Aug 27, 2015, at 2:49 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 27 Aug 2015, at 17:59 , Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you bind to ipogif0 then you should have much better luck, unless 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're trying to have open mpi span outside the cray HPN.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now you get me wondering. I actually played with both oob-tcp-if-include and -exclude , but possibly not in the right context I realize now.
</span><br>
<span class="quotelev2">&gt;&gt; Let me undo my changes and try with only the configuration changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That doesn't seem to work. But by looking at the code at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/orte/mca/oob/tcp/oob_tcp_listener.c#L279">https://github.com/open-mpi/ompi/blob/master/orte/mca/oob/tcp/oob_tcp_listener.c#L279</a>
</span><br>
<span class="quotelev1">&gt; I also think that it still binds to all interfaces/addresses there regardless of the interfaces one configures with oob_tcp_if_include.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gr,
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17888.php">http://www.open-mpi.org/community/lists/devel/2015/08/17888.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17890.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17888.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
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
