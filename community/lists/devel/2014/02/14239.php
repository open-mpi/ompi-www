<?
$subject_val = "Re: [OMPI devel] oshmem warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 20:03:53 2014" -->
<!-- isoreceived="20140227010353" -->
<!-- sent="Thu, 27 Feb 2014 01:03:51 +0000" -->
<!-- isosent="20140227010351" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem warning" -->
<!-- id="66FFA60A-1D4F-4C98-885E-A11AAFD017B1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2AC734C-426C-4B62-B0B7-40E5B349220B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem warning<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 20:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14238.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem warning"</a>
<li><strong>In reply to:</strong> <a href="14238.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also getting a bunch of these from clang:
<br>
<p>scoll_mpi_ops.c:21:46: warning: must specify at least one argument for '...'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter of variadic macro [-Wgnu]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_COLL_VERBOSE(20,&quot;RUNNING MPI BARRIER&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
./scoll_mpi_debug.h:20:9: note: macro 'MPI_COLL_VERBOSE' defined here
<br>
<p><p><p><p>On Feb 26, 2014, at 4:54 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Getting a bunch of these on the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../oshmem/mca/memheap/memheap.h:142:5: warning: &quot;MCA_oshmem_memheap_DIRECT_CALL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone investigate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14238.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem warning"</a>
<li><strong>In reply to:</strong> <a href="14238.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem warning"</a>
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
