<?
$subject_val = "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 13:35:25 2009" -->
<!-- isoreceived="20090803173525" -->
<!-- sent="Mon, 3 Aug 2009 13:35:15 -0400" -->
<!-- isosent="20090803173515" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open" -->
<!-- id="511F66A8-E411-4B61-80E6-0C5F6C445C0C_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="7D7E0962-C4F3-438D-AA59-CFFEA38FD108_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 13:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6568.php">Kenneth Lloyd: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>In reply to:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6569.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6569.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not before I get an email from every developer in the Open MPI  
<br>
project !!!
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 3, 2009, at 12:31 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This looks icky.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George -- can you please fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 12:07 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following lines were entered into two files by r21739:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/pml/base/pml_base_request.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_free_list_t mca_pml_base_send_requests = {0};
</span><br>
<span class="quotelev2">&gt;&gt; ompi_free_list_t mca_pml_base_recv_requests = {0};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/bml/bml_base_open.c:
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_t mca_bml_base_components_available = {0};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, these are not valid initializers as they do not  
</span><br>
<span class="quotelev2">&gt;&gt; properly init the object definition items in those objects. As a  
</span><br>
<span class="quotelev2">&gt;&gt; result, you get the following warnings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; base/bml_base_open.c:32: warning: missing braces around initializer
</span><br>
<span class="quotelev2">&gt;&gt; base/bml_base_open.c:32: warning: (near initialization for  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;mca_bml_base_components_available.super&#146;)
</span><br>
<span class="quotelev2">&gt;&gt; base/pml_base_request.c:27: warning: missing braces around  
</span><br>
<span class="quotelev2">&gt;&gt; initializer
</span><br>
<span class="quotelev2">&gt;&gt; base/pml_base_request.c:27: warning: (near initialization for  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;mca_pml_base_send_requests.super&#146;)
</span><br>
<span class="quotelev2">&gt;&gt; base/pml_base_request.c:28: warning: missing braces around  
</span><br>
<span class="quotelev2">&gt;&gt; initializer
</span><br>
<span class="quotelev2">&gt;&gt; base/pml_base_request.c:28: warning: (near initialization for  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;mca_pml_base_recv_requests.super&#146;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been through this a few times - what you need to do is  
</span><br>
<span class="quotelev2">&gt;&gt; figure out a multi-stage bracketed init that correctly sets up the  
</span><br>
<span class="quotelev2">&gt;&gt; object. I played with it a little, but was unable to meet that  
</span><br>
<span class="quotelev2">&gt;&gt; requirement as it descends into multiple objects, eventually  
</span><br>
<span class="quotelev2">&gt;&gt; leading to a &quot;initializer element is not computable at load time&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George - svn says you committed these changes. Could you (perhaps  
</span><br>
<span class="quotelev2">&gt;&gt; with suggestions from someone out there?) please figure out a  
</span><br>
<span class="quotelev2">&gt;&gt; solution? Perhaps you need to find an alternative solution to the  
</span><br>
<span class="quotelev2">&gt;&gt; problem you were trying to solve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6568.php">Kenneth Lloyd: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>In reply to:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6569.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6569.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
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
