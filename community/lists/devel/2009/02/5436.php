<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 07:35:41 2009" -->
<!-- isoreceived="20090217123541" -->
<!-- sent="Tue, 17 Feb 2009 07:35:35 -0500" -->
<!-- isosent="20090217123535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="527622BB-4100-4F53-8E40-1CAF986BA4D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="528E4575-5B45-4E9E-A4EC-F11C3BFFCF8F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 07:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="5435.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5435.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2009, at 9:16 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Based on several man pages, free is capable of handling a NULL  
</span><br>
<span class="quotelev1">&gt; argument. What is really puzzling is that on your system it  
</span><br>
<span class="quotelev1">&gt; doesn't ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried on two system a 64 bits Debian and on my MAC OS X with all  
</span><br>
<span class="quotelev1">&gt; memory allocator options on, and I'm unable to get such a warning :(
</span><br>
<p>Remember that the warning is in our code -- opal/util/malloc.c:
<br>
<p>-----
<br>
void opal_free(void *addr, const char *file, int line)
<br>
{
<br>
#if OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (opal_malloc_debug_level &gt; 1 &amp;&amp; NULL == addr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(opal_malloc_output, &quot;Invalid free (%s, %d)&quot;,  
<br>
file, line);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif  /* OMPI_ENABLE_DEBUG */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(addr);
<br>
}
<br>
-----
<br>
<p>Are you saying that we should remove this warning?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="5435.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5435.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
