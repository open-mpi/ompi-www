<?
$subject_val = "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 11:56:55 2009" -->
<!-- isoreceived="20090924155655" -->
<!-- sent="Thu, 24 Sep 2009 11:56:49 -0400" -->
<!-- isosent="20090924155649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support." -->
<!-- id="A5F43242-D906-42EC-8355-2AAC4B9DB2A9_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4AB9E4E2.10203_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 11:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="6885.php">Chris Samuel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6879.php">Vasily Filipov: "[OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch.  A few comments:
<br>
<p>--- a/ompi/mca/btl/openib/btl_openib_endpoint.h	Mon Aug 31 00:00:16  
<br>
2009 -0700
<br>
+++ b/ompi/mca/btl/openib/btl_openib_endpoint.h	Thu Sep 17 18:23:58  
<br>
2009 +0300
<br>
@@ -246,6 +246,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Whether we've send out CTS to the peer or not (only used in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CTS protocol) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool endpoint_cts_sent;
<br>
+
<br>
+    uint32_t vendor_id;
<br>
+    uint32_t vendor_part_id;
<br>
+
<br>
+    uint32_t max_inline_data;
<br>
+
<br>
&nbsp;&nbsp;};
<br>
<p>The vendor_id and vendor_part_id actually the *remote* values of this  
<br>
information.  Shouldn't that go in endpoint.rem_info?
<br>
<p>Is there a reason to put the max_inline_data on the endpoint rather  
<br>
than accessing it through endpoint-&gt;endpoint_btl-&gt;device-&gt;ib_dev?   
<br>
(I'm a little confused on how it is used / assigned -- I could be  
<br>
missing something here)
<br>
<p>What testing has been done to see that this stuff works?
<br>
<p>Has an equivalent patch been made for Pasha's ofacm work?
<br>
<p><p><p>On Sep 23, 2009, at 5:05 AM, Vasily Filipov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some time ago Mellanox proposed design that should improve current  
</span><br>
<span class="quotelev1">&gt; support for heterogeneous clusters (see Design.txt).The design was  
</span><br>
<span class="quotelev1">&gt; accepted by IB vendors, and now we propose patch that adds a  
</span><br>
<span class="quotelev1">&gt; heterogeneous cluster support. The path leaves one issue that we do  
</span><br>
<span class="quotelev1">&gt; not resolve completely. If 2 different procs have different QPs  
</span><br>
<span class="quotelev1">&gt; configuration (P/S/X) we print nice warning message that describes  
</span><br>
<span class="quotelev1">&gt; that such configuration is not supported and it propose way to  
</span><br>
<span class="quotelev1">&gt; resolve the issue.  Theoretically it will be best to provide  
</span><br>
<span class="quotelev1">&gt; solution that automatically will resolve the problem, but it will  
</span><br>
<span class="quotelev1">&gt; require significant changes on openib blt that we don&#146;t want to  
</span><br>
<span class="quotelev1">&gt; introduce in this stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Vasily
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; Design 
</span><br>
<span class="quotelev1">&gt; .txt&gt;&lt;btl_openib.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="6885.php">Chris Samuel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6879.php">Vasily Filipov: "[OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7120.php">Vasily Philipov: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusters support."</a>
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
