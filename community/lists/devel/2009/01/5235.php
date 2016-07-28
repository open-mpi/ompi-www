<?
$subject_val = "Re: [OMPI devel] When can I use OOB channel?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 10:06:23 2009" -->
<!-- isoreceived="20090120150623" -->
<!-- sent="Tue, 20 Jan 2009 15:06:18 +0000" -->
<!-- isosent="20090120150618" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] When can I use OOB channel?" -->
<!-- id="f6ed2720901200706o9db69f2t6569eaf1101c5ab_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7BF29FC-4A77-4BD4-84EE-708B54AD7829_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] When can I use OOB channel?<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 10:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5236.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5234.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5232.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Reply:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I'm quite embarrassed, I misread the function prototype and was passing in
<br>
the actual proc_name rather than a pointer to it! It didn't complain when I
<br>
was compiling so I didn't think twice. It was silly mistake on my part in
<br>
any case! That RML tip is still handy though, thanks.
<br>
<p>Cheers
<br>
Tim
<br>
<p>2009/1/20 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You sholud be able to use the OOB by that point in the system. However,
</span><br>
<span class="quotelev1">&gt; that is the incorrect entry point for sending messages - you need to enter
</span><br>
<span class="quotelev1">&gt; via the RML. The correct call is to orte_rml.send_nb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, if you are going to send a buffer instead of an iovec, then the call
</span><br>
<span class="quotelev1">&gt; would be to orte_rml.send_buffer_nb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2009, at 1:01 PM, Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm in the midst of writing a BTL component, all is going well although
</span><br>
<span class="quotelev2">&gt;&gt; today I ran into something unexpected. In the
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_base_module_add_procs_fn_t function, I'm trying to call
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_send_nb() which is returning -12 (ORTE_ERR_UNREACH). Is this
</span><br>
<span class="quotelev2">&gt;&gt; normal or have I done something wrong? Is there a way around this? It would
</span><br>
<span class="quotelev2">&gt;&gt; be great if I could call this function in that particular area of code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; Tim Hayes
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5236.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5234.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5232.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Reply:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
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
