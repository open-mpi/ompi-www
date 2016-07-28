<?
$subject_val = "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 12:31:55 2009" -->
<!-- isoreceived="20090803163155" -->
<!-- sent="Mon, 3 Aug 2009 12:31:50 -0400" -->
<!-- isosent="20090803163150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open" -->
<!-- id="7D7E0962-C4F3-438D-AA59-CFFEA38FD108_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="A524F970-9837-4E44-994F-2879863210C1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 12:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>In reply to:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6567.php">George Bosilca: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6567.php">George Bosilca: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks icky.
<br>
<p>George -- can you please fix?
<br>
<p><p><p>On Aug 3, 2009, at 12:07 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following lines were entered into two files by r21739:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/base/pml_base_request.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_free_list_t mca_pml_base_send_requests = {0};
</span><br>
<span class="quotelev1">&gt; ompi_free_list_t mca_pml_base_recv_requests = {0};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/bml/bml_base_open.c:
</span><br>
<span class="quotelev1">&gt; opal_list_t mca_bml_base_components_available = {0};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, these are not valid initializers as they do not  
</span><br>
<span class="quotelev1">&gt; properly init the object definition items in those objects. As a  
</span><br>
<span class="quotelev1">&gt; result, you get the following warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; base/bml_base_open.c:32: warning: missing braces around initializer
</span><br>
<span class="quotelev1">&gt; base/bml_base_open.c:32: warning: (near initialization for  
</span><br>
<span class="quotelev1">&gt; &#145;mca_bml_base_components_available.super&#146;)
</span><br>
<span class="quotelev1">&gt; base/pml_base_request.c:27: warning: missing braces around initializer
</span><br>
<span class="quotelev1">&gt; base/pml_base_request.c:27: warning: (near initialization for  
</span><br>
<span class="quotelev1">&gt; &#145;mca_pml_base_send_requests.super&#146;)
</span><br>
<span class="quotelev1">&gt; base/pml_base_request.c:28: warning: missing braces around initializer
</span><br>
<span class="quotelev1">&gt; base/pml_base_request.c:28: warning: (near initialization for  
</span><br>
<span class="quotelev1">&gt; &#145;mca_pml_base_recv_requests.super&#146;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been through this a few times - what you need to do is  
</span><br>
<span class="quotelev1">&gt; figure out a multi-stage bracketed init that correctly sets up the  
</span><br>
<span class="quotelev1">&gt; object. I played with it a little, but was unable to meet that  
</span><br>
<span class="quotelev1">&gt; requirement as it descends into multiple objects, eventually leading  
</span><br>
<span class="quotelev1">&gt; to a &quot;initializer element is not computable at load time&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George - svn says you committed these changes. Could you (perhaps  
</span><br>
<span class="quotelev1">&gt; with suggestions from someone out there?) please figure out a  
</span><br>
<span class="quotelev1">&gt; solution? Perhaps you need to find an alternative solution to the  
</span><br>
<span class="quotelev1">&gt; problem you were trying to solve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6564.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>In reply to:</strong> <a href="6554.php">Ralph Castain: "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6567.php">George Bosilca: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6567.php">George Bosilca: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
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
