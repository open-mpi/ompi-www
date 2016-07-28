<?
$subject_val = "[OMPI devel] Invalid initializers in pml_base_request and bml_base_open";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 00:08:07 2009" -->
<!-- isoreceived="20090803040807" -->
<!-- sent="Sun, 2 Aug 2009 22:07:53 -0600" -->
<!-- isosent="20090803040753" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Invalid initializers in pml_base_request and bml_base_open" -->
<!-- id="A524F970-9837-4E44-994F-2879863210C1_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Invalid initializers in pml_base_request and bml_base_open<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 00:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>The following lines were entered into two files by r21739:
<br>
<p>ompi/mca/pml/base/pml_base_request.c:
<br>
<p>ompi_free_list_t mca_pml_base_send_requests = {0};
<br>
ompi_free_list_t mca_pml_base_recv_requests = {0};
<br>
<p>ompi/mca/bml/bml_base_open.c:
<br>
opal_list_t mca_bml_base_components_available = {0};
<br>
<p>Unfortunately, these are not valid initializers as they do not  
<br>
properly init the object definition items in those objects. As a  
<br>
result, you get the following warnings:
<br>
<p>base/bml_base_open.c:32: warning: missing braces around initializer
<br>
base/bml_base_open.c:32: warning: (near initialization for  
<br>
&#145;mca_bml_base_components_available.super&#146;)
<br>
base/pml_base_request.c:27: warning: missing braces around initializer
<br>
base/pml_base_request.c:27: warning: (near initialization for  
<br>
&#145;mca_pml_base_send_requests.super&#146;)
<br>
base/pml_base_request.c:28: warning: missing braces around initializer
<br>
base/pml_base_request.c:28: warning: (near initialization for  
<br>
&#145;mca_pml_base_recv_requests.super&#146;)
<br>
<p>We have been through this a few times - what you need to do is figure  
<br>
out a multi-stage bracketed init that correctly sets up the object. I  
<br>
played with it a little, but was unable to meet that requirement as it  
<br>
descends into multiple objects, eventually leading to a &quot;initializer  
<br>
element is not computable at load time&quot;.
<br>
<p>George - svn says you committed these changes. Could you (perhaps with  
<br>
suggestions from someone out there?) please figure out a solution?  
<br>
Perhaps you need to find an alternative solution to the problem you  
<br>
were trying to solve.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Previous message:</strong> <a href="6553.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Reply:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
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
