<?
$subject_val = "Re: [OMPI devel] When can I use OOB channel?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 09:23:07 2009" -->
<!-- isoreceived="20090120142307" -->
<!-- sent="Tue, 20 Jan 2009 07:22:59 -0700" -->
<!-- isosent="20090120142259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] When can I use OOB channel?" -->
<!-- id="A7BF29FC-4A77-4BD4-84EE-708B54AD7829_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720901191201x6555bb6fj99f8cb0fd594b334_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-01-20 09:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5231.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Reply:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You sholud be able to use the OOB by that point in the system.  
<br>
However, that is the incorrect entry point for sending messages - you  
<br>
need to enter via the RML. The correct call is to orte_rml.send_nb.
<br>
<p>Or, if you are going to send a buffer instead of an iovec, then the  
<br>
call would be to orte_rml.send_buffer_nb.
<br>
<p>Ralph
<br>
<p><p>On Jan 19, 2009, at 1:01 PM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Hello
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5231.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Reply:</strong> <a href="5235.php">Timothy Hayes: "Re: [OMPI devel] When can I use OOB channel?"</a>
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
