<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 15:44:21 2013" -->
<!-- isoreceived="20131021194421" -->
<!-- sent="Mon, 21 Oct 2013 12:44:18 -0700" -->
<!-- isosent="20131021194418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca" -->
<!-- id="CB967EE9-324A-4D99-896A-A2A3D048E4CF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F982679_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 15:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Previous message:</strong> <a href="13113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>In reply to:</strong> <a href="13113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Reply:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The changeset itself was to fix two lines involving
<br>
<p>item = (mca_coll_fca_c_cache_item_t *)...
<br>
<p>I'm not sure why it marked all the rest of that code as having been &quot;added&quot; - it was already present when I looked at the code. I had to resolve a minor conflict, but that didn't significantly change the code content.
<br>
<p><p>On Oct 21, 2013, at 12:32 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mellanox --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you clarify how this commit is &quot;fix icc warning&quot;?  This seems much more like a feature addition...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2013, at 3:24 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 29455
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29455">https://svn.open-mpi.org/trac/ompi/changeset/29455</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #3846: Move r29428 to v1.7 branch (fix icc warning)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r29428 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; fix icc warning
</span><br>
<span class="quotelev2">&gt;&gt; fixed by Dinar, reviewed by miked
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.7.4:reviewer=ompi-gk1.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Properties modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  branches/v1.7/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c |    64 ++++++++++++++++++++++++++++++++++++--- 
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 59 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	Sat Oct 19 23:04:19 2013	(r29454)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)	(r29455)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -329,11 +329,65 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static int fca_close(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +	if(mca_coll_fca_component.fca_enable_cache) {
</span><br>
<span class="quotelev2">&gt;&gt; +		
</span><br>
<span class="quotelev2">&gt;&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt; +		while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(&amp;mca_coll_fca_component.c_cache))) {
</span><br>
<span class="quotelev2">&gt;&gt; +			OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt; +		}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev2">&gt;&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +	if(mca_coll_fca_component.fca_enable_hash &amp;&amp; mca_coll_fca_component.fca_enable_hash) {
</span><br>
<span class="quotelev2">&gt;&gt; +		int i = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt; +		for(i = 0; i&lt; mca_coll_fca_component.fca_hash_size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +			
</span><br>
<span class="quotelev2">&gt;&gt; +			if(mca_coll_fca_component.fca_hash[i] != NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; +				
</span><br>
<span class="quotelev2">&gt;&gt; +				while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(mca_coll_fca_component.fca_hash[i]))) {
</span><br>
<span class="quotelev2">&gt;&gt; +					OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt; +				}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev2">&gt;&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +				OBJ_RELEASE(mca_coll_fca_component.fca_hash[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +			}
</span><br>
<span class="quotelev2">&gt;&gt; +		}
</span><br>
<span class="quotelev2">&gt;&gt; +		free(mca_coll_fca_component.fca_hash);
</span><br>
<span class="quotelev2">&gt;&gt; +	} 
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +	if(mca_coll_fca_component.fca_verbose == 10) {
</span><br>
<span class="quotelev2">&gt;&gt; +		char file_name[30];
</span><br>
<span class="quotelev2">&gt;&gt; +		sprintf(file_name, &quot;rank_%d.txt&quot;, ORTE_PROC_MY_NAME-&gt;vpid);
</span><br>
<span class="quotelev2">&gt;&gt; +		FILE *fileHandle;
</span><br>
<span class="quotelev2">&gt;&gt; +		fileHandle = fopen(file_name,&quot;w&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_parallel);
</span><br>
<span class="quotelev2">&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_sequency);
</span><br>
<span class="quotelev2">&gt;&gt; +		fclose(fileHandle);
</span><br>
<span class="quotelev2">&gt;&gt; +	}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_total_work_time %f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_cache_hit %d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_cache_miss %d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_hash_hit %d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_hash_miss %d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev2">&gt;&gt; +	
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_max_deep %d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +	FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +	if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev2">&gt;&gt; +		return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +	mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev2">&gt;&gt; +	return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Previous message:</strong> <a href="13113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>In reply to:</strong> <a href="13113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Reply:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
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
