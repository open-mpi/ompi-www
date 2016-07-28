<?
$subject_val = "Re: [OMPI devel] When can I use OOB channel?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 10:13:24 2009" -->
<!-- isoreceived="20090120151324" -->
<!-- sent="Tue, 20 Jan 2009 08:13:15 -0700" -->
<!-- isosent="20090120151315" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] When can I use OOB channel?" -->
<!-- id="AFE36668-0BBE-4B09-B194-D68E159718C2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720901200706o9db69f2t6569eaf1101c5ab_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 10:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Previous message:</strong> <a href="5236.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - no problem! Glad it was simple.
<br>
<p>Be aware that the RML is the layer responsible for routing OOB  
<br>
messages. So if you go through the OOB interface, you lose all message  
<br>
routing - which means forcing open additional connections and  
<br>
potentially confusing the system.
<br>
<p>We should undoubtedly document that somewhere so others don't  
<br>
mistakenly use the OOB interfaces directly.
<br>
<p>Thanks for bringing this up!
<br>
Ralph
<br>
<p>On Jan 20, 2009, at 8:06 AM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm quite embarrassed, I misread the function prototype and was  
</span><br>
<span class="quotelev1">&gt; passing in the actual proc_name rather than a pointer to it! It  
</span><br>
<span class="quotelev1">&gt; didn't complain when I was compiling so I didn't think twice. It was  
</span><br>
<span class="quotelev1">&gt; silly mistake on my part in any case! That RML tip is still handy  
</span><br>
<span class="quotelev1">&gt; though, thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/1/20 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; You sholud be able to use the OOB by that point in the system.  
</span><br>
<span class="quotelev1">&gt; However, that is the incorrect entry point for sending messages -  
</span><br>
<span class="quotelev1">&gt; you need to enter via the RML. The correct call is to  
</span><br>
<span class="quotelev1">&gt; orte_rml.send_nb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, if you are going to send a buffer instead of an iovec, then the  
</span><br>
<span class="quotelev1">&gt; call would be to orte_rml.send_buffer_nb.
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
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm in the midst of writing a BTL component, all is going well  
</span><br>
<span class="quotelev1">&gt; although today I ran into something unexpected. In the  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_module_add_procs_fn_t function, I'm trying to call  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_send_nb() which is returning -12 (ORTE_ERR_UNREACH). Is  
</span><br>
<span class="quotelev1">&gt; this normal or have I done something wrong? Is there a way around  
</span><br>
<span class="quotelev1">&gt; this? It would be great if I could call this function in that  
</span><br>
<span class="quotelev1">&gt; particular area of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; Tim Hayes
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5238.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<li><strong>Previous message:</strong> <a href="5236.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
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
