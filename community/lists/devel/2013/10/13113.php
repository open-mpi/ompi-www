<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 15:32:08 2013" -->
<!-- isoreceived="20131021193208" -->
<!-- sent="Mon, 21 Oct 2013 19:32:06 +0000" -->
<!-- isosent="20131021193206" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F982679_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131021192435.D94F816104B_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 15:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Previous message:</strong> <a href="13112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI shirts and more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Reply:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox --
<br>
<p>Can you clarify how this commit is &quot;fix icc warning&quot;?  This seems much more like a feature addition...
<br>
<p><p>On Oct 21, 2013, at 3:24 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29455
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29455">https://svn.open-mpi.org/trac/ompi/changeset/29455</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes #3846: Move r29428 to v1.7 branch (fix icc warning)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r29428 [[BR]]
</span><br>
<span class="quotelev1">&gt; fix icc warning
</span><br>
<span class="quotelev1">&gt; fixed by Dinar, reviewed by miked
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=ompi-gk1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;   branches/v1.7/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c |    64 ++++++++++++++++++++++++++++++++++++--- 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 59 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	Sat Oct 19 23:04:19 2013	(r29454)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)	(r29455)
</span><br>
<span class="quotelev1">&gt; @@ -329,11 +329,65 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int fca_close(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev1">&gt; +	if(mca_coll_fca_component.fca_enable_cache) {
</span><br>
<span class="quotelev1">&gt; +		
</span><br>
<span class="quotelev1">&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev1">&gt; +		while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(&amp;mca_coll_fca_component.c_cache))) {
</span><br>
<span class="quotelev1">&gt; +			OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev1">&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +	if(mca_coll_fca_component.fca_enable_hash &amp;&amp; mca_coll_fca_component.fca_enable_hash) {
</span><br>
<span class="quotelev1">&gt; +		int i = 0;
</span><br>
<span class="quotelev1">&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev1">&gt; +		for(i = 0; i&lt; mca_coll_fca_component.fca_hash_size; i++) {
</span><br>
<span class="quotelev1">&gt; +			
</span><br>
<span class="quotelev1">&gt; +			if(mca_coll_fca_component.fca_hash[i] != NULL) {
</span><br>
<span class="quotelev1">&gt; +				
</span><br>
<span class="quotelev1">&gt; +				while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(mca_coll_fca_component.fca_hash[i]))) {
</span><br>
<span class="quotelev1">&gt; +					OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt; +				}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev1">&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +				OBJ_RELEASE(mca_coll_fca_component.fca_hash[i]);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +			}
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; +		free(mca_coll_fca_component.fca_hash);
</span><br>
<span class="quotelev1">&gt; +	} 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if(mca_coll_fca_component.fca_verbose == 10) {
</span><br>
<span class="quotelev1">&gt; +		char file_name[30];
</span><br>
<span class="quotelev1">&gt; +		sprintf(file_name, &quot;rank_%d.txt&quot;, ORTE_PROC_MY_NAME-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; +		FILE *fileHandle;
</span><br>
<span class="quotelev1">&gt; +		fileHandle = fopen(file_name,&quot;w&quot;);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_parallel);
</span><br>
<span class="quotelev1">&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_sequency);
</span><br>
<span class="quotelev1">&gt; +		fclose(fileHandle);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_total_work_time %f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_cache_hit %d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_cache_miss %d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_hash_hit %d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_hash_miss %d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(10,&quot;fca_max_deep %d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev1">&gt; +		return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev1">&gt; +	return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Previous message:</strong> <a href="13112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI shirts and more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>Reply:</strong> <a href="13114.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in branches/v1.7: .	ompi/mca/coll/fca"</a>
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
