<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 05:31:46 2009" -->
<!-- isoreceived="20091216103146" -->
<!-- sent="Wed, 16 Dec 2009 12:29:48 +0200" -->
<!-- isosent="20091216102948" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313" -->
<!-- id="4B28B69C.1080805_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B82EFDA0-928F-4C91-8926-E21C7189B894_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 05:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7247.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7245.php">George Bosilca: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
To Jeff:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I thought that if there are no replies it means OK.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thank you for your comments, I fixed it, you can see the patch below. 
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 8:56 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I'm a little disappointed that this was applied without answering my questions first...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7187.php">http://www.open-mpi.org/community/lists/devel/2009/12/7187.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WRONG.  You *did* answer -- somehow my mail client ate it (I see the reply in the web archives, but not in my local mail client -- #$@!$@!#$!!!!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My bad...  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you add some of your explanations as comments in the code?  The rationale here is that if I had those questions while reading your patch, someone else (including me, months from now) will likely have the same questions while reading the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another minor quibble in a help message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +[SRQ doesn't found]
</span><br>
<span class="quotelev1">&gt; +The srq doesn't found.
</span><br>
<span class="quotelev1">&gt; +Below is some information about the host that raised the error:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Local host:   %s
</span><br>
<span class="quotelev1">&gt; +    Local device: %s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not correct grammar and is fairly unhelpful to the user -- please change to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [SRQ not found]
</span><br>
<span class="quotelev1">&gt; Open MPI tried to access a shared receive queue (SRQ) that was not found.  This should not happen, and is a fatal error.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Local host:   %s
</span><br>
<span class="quotelev1">&gt;     Local device: %s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +  - When the number of not used receive buffers will decreased to 8
</span><br>
<span class="quotelev1">&gt; +    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
</span><br>
<span class="quotelev1">&gt; +    of receive buffers that we can pre-post will be increased.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think users know what IBV_EVENT_... is.  Perhaps it should read:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +  - When the number of unused shared receive buffers reaches 8, more
</span><br>
<span class="quotelev1">&gt; +    buffers will be posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (how many more buffers will be posted, BTW?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>
<p>
Index: ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/help-mpi-btl-openib.txt	(revision 22318)
<br>
+++ ompi/mca/btl/openib/help-mpi-btl-openib.txt	(working copy)
<br>
@@ -168,9 +168,9 @@
<br>
&nbsp;You may need to consult with your system administrator to get this
<br>
&nbsp;problem fixed.
<br>
&nbsp;#
<br>
-[SRQ doesn't found]
<br>
-The srq doesn't found.
<br>
-Below is some information about the host that raised the error:
<br>
+[SRQ not found]
<br>
+Open MPI tried to access a shared receive queue (SRQ) that was not found.
<br>
+This should not happen, and is a fatal error.  Your MPI job will now abort.
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local host:   %s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local device: %s
<br>
@@ -411,9 +411,8 @@
<br>
&nbsp;&nbsp;&nbsp;- A sender will not send to a peer unless it has less than 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding sends to that peer.
<br>
&nbsp;&nbsp;&nbsp;- 32 receive buffers will be preposted.
<br>
-  - When the number of not used receive buffers will decreased to 8
<br>
-    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
<br>
-    of receive buffers that we can pre-post will be increased.
<br>
+  - When the number of unused shared receive buffers reaches 8, more
<br>
+    buffers (32 in this case) will be posted.
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;Local host: %s
<br>
&nbsp;&nbsp;&nbsp;Bad queue specification: %s
<br>
Index: ompi/mca/btl/openib/btl_openib.h
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib.h	(revision 22318)
<br>
+++ ompi/mca/btl/openib/btl_openib.h	(working copy)
<br>
@@ -381,6 +381,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** The flag points if we want to get the 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool srq_limit_event_flag;
<br>
+    /**&lt; In difference of the &quot;--mca enable_srq_resize&quot; parameter that says, if we want(or no)
<br>
+         to start with small num of pre-posted receive buffers (rd_curr_num) and to increase this number by needs
<br>
+         (the max of this value is rd_num &#150; the whole size of SRQ), the &quot;srq_limit_event_flag&quot; says if we want to get limit event
<br>
+         from device if the defined srq limit was reached (signal to the main thread) and we put off this flag if the rd_curr_num
<br>
+         was increased up to rd_num.
<br>
+         In order to prevent lock/unlock operation in the critical path we prefer only put-on
<br>
+         the srq_limit_event_flag in asynchronous thread, because in this way we post receive buffers
<br>
+         in the main thread only and only after posting we set (if srq_limit_event_flag is true)
<br>
+         the limit for IBV_EVENT_SRQ_LIMIT_REACHED event. */
<br>
&nbsp;}; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_module_qp_t {
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7247.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7245.php">George Bosilca: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
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
