<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:18:30 2009" -->
<!-- isoreceived="20090217161830" -->
<!-- sent="Tue, 17 Feb 2009 11:18:25 -0500" -->
<!-- isosent="20090217161825" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="77371CAC-AF44-438D-876D-B94F77AD208D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="527622BB-4100-4F53-8E40-1CAF986BA4D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 11:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5443.php">Eugene Loh: "[OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
<li><strong>In reply to:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess that if the free function supports the NULL pointer we should  
<br>
do the same...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 17, 2009, at 07:35 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 16, 2009, at 9:16 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Based on several man pages, free is capable of handling a NULL  
</span><br>
<span class="quotelev2">&gt;&gt; argument. What is really puzzling is that on your system it  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried on two system a 64 bits Debian and on my MAC OS X with all  
</span><br>
<span class="quotelev2">&gt;&gt; memory allocator options on, and I'm unable to get such a warning :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember that the warning is in our code -- opal/util/malloc.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; void opal_free(void *addr, const char *file, int line)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;    if (opal_malloc_debug_level &gt; 1 &amp;&amp; NULL == addr) {
</span><br>
<span class="quotelev1">&gt;        opal_output(opal_malloc_output, &quot;Invalid free (%s, %d)&quot;,  
</span><br>
<span class="quotelev1">&gt; file, line);
</span><br>
<span class="quotelev1">&gt;        return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; #endif  /* OMPI_ENABLE_DEBUG */
</span><br>
<span class="quotelev1">&gt;    free(addr);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you saying that we should remove this warning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5443.php">Eugene Loh: "[OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
<li><strong>In reply to:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
