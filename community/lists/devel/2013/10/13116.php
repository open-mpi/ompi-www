<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 17:57:20 2013" -->
<!-- isoreceived="20131021215720" -->
<!-- sent="Mon, 21 Oct 2013 14:57:17 -0700" -->
<!-- isosent="20131021215717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca" -->
<!-- id="D969180A-7071-4729-8438-90A928FCB8C8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F982924_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 17:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<li><strong>Previous message:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>In reply to:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, my bad - I took the wrong branch on the conflict. I reverted it as it is clearly missing something.
<br>
<p>Thanks for catching it
<br>
<p>On Oct 21, 2013, at 1:34 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm.  This looks like a borked patch, then.  According to SVN, you replaced the whole body of fca_close().  This should be backed out -- we don't know if this new fca_close() body is applicable/relevant to the current state of the FCA code on the v1.7 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps there's some other changeset that should have been applied to v1.7 first? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2013, at 3:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The changeset itself was to fix two lines involving
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; item = (mca_coll_fca_c_cache_item_t *)...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why it marked all the rest of that code as having been &quot;added&quot; - it was already present when I looked at the code. I had to resolve a minor conflict, but that didn't significantly change the code content.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2013, at 12:32 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you clarify how this commit is &quot;fix icc warning&quot;?  This seems much more like a feature addition...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 21, 2013, at 3:24 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 29455
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29455">https://svn.open-mpi.org/trac/ompi/changeset/29455</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fixes #3846: Move r29428 to v1.7 branch (fix icc warning)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r29428 [[BR]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix icc warning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fixed by Dinar, reviewed by miked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cmr=v1.7.4:reviewer=ompi-gk1.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Properties modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branches/v1.7/   (props changed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c |    64 ++++++++++++++++++++++++++++++++++++--- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 files changed, 59 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	Sat Oct 19 23:04:19 2013	(r29454)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ branches/v1.7/ompi/mca/coll/fca/coll_fca_component.c	2013-10-21 15:24:35 EDT (Mon, 21 Oct 2013)	(r29455)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -329,11 +329,65 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static int fca_close(void)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	if(mca_coll_fca_component.fca_enable_cache) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(&amp;mca_coll_fca_component.c_cache))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +			OBJ_RELEASE(item);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	if(mca_coll_fca_component.fca_enable_hash &amp;&amp; mca_coll_fca_component.fca_enable_hash) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		int i = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		mca_coll_fca_c_cache_item_t *item;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		for(i = 0; i&lt; mca_coll_fca_component.fca_hash_size; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +			
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +			if(mca_coll_fca_component.fca_hash[i] != NULL) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +				
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +				while(NULL != (item = (mca_coll_fca_c_cache_item_t *)opal_list_remove_first(mca_coll_fca_component.fca_hash[i]))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +					OBJ_RELEASE(item);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +				}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +				OBJ_RELEASE(mca_coll_fca_component.fca_hash[i]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +			}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		free(mca_coll_fca_component.fca_hash);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	} 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	if(mca_coll_fca_component.fca_verbose == 10) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		char file_name[30];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		sprintf(file_name, &quot;rank_%d.txt&quot;, ORTE_PROC_MY_NAME-&gt;vpid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		FILE *fileHandle;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fileHandle = fopen(file_name,&quot;w&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_parallel);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fprintf(fileHandle, &quot;%f\n&quot;, mca_coll_fca_component.fca_work_time_sequency);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		fclose(fileHandle);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_total_work_time %f\n&quot;, mca_coll_fca_component.fca_total_work_time);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_cache_hit %d\n&quot;, mca_coll_fca_component.fca_cache_hit);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_cache_miss %d\n&quot;, mca_coll_fca_component.fca_cache_miss);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_hash_hit %d\n&quot;, mca_coll_fca_component.fca_hash_hit);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_hash_miss %d\n&quot;, mca_coll_fca_component.fca_hash_miss);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(10,&quot;fca_max_deep %d\n&quot;, mca_coll_fca_component.fca_max_deep_in_cache);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	FCA_VERBOSE(2, &quot;==&gt;&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	if (!mca_coll_fca_component.fca_context)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +		return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	mca_coll_fca_close_fca_lib();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +	return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<li><strong>Previous message:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
<li><strong>In reply to:</strong> <a href="13115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29455 - in	branches/v1.7: .	ompi/mca/coll/fca"</a>
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
