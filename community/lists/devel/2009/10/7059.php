<?
$subject_val = "Re: [OMPI devel] btl_sm_component_progress return code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:45:20 2009" -->
<!-- isoreceived="20091030204520" -->
<!-- sent="Fri, 30 Oct 2009 12:46:27 -0800" -->
<!-- isosent="20091030204627" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_sm_component_progress return code" -->
<!-- id="4AEB50A3.40602_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB81D181-F4B8-45AA-AB08-7CFA7E1BF90D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_sm_component_progress return code<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 16:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Reply:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  So, you'll put back the change?
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The progress functions do not need to return an error code. If there  
</span><br>
<span class="quotelev1">&gt; is an error they should propagate it back through the descriptors. 
</span><br>
<span class="quotelev1">&gt; The  only meaning of the return code of the progress functions is to 
</span><br>
<span class="quotelev1">&gt; know  if any event had happened during this round of progress. The  
</span><br>
<span class="quotelev1">&gt; opal_output use it to trigger the yield (if one if necessary).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, this is a good catch. We're doing a big mixup there. Attached  
</span><br>
<span class="quotelev1">&gt; you will find a patch that clean this problem. As expected, there is  
</span><br>
<span class="quotelev1">&gt; no performance impact ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- btl_sm_component.c    (revision 22176)
</span><br>
<span class="quotelev1">&gt; +++ btl_sm_component.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -361,7 +361,7 @@
</span><br>
<span class="quotelev1">&gt;       sm_fifo_t *fifo = NULL;
</span><br>
<span class="quotelev1">&gt;       mca_btl_sm_hdr_t *hdr;
</span><br>
<span class="quotelev1">&gt;       int my_smp_rank = mca_btl_sm_component.my_smp_rank;
</span><br>
<span class="quotelev1">&gt; -    int peer_smp_rank, j, rc = 0;
</span><br>
<span class="quotelev1">&gt; +    int peer_smp_rank, j, rc = 0, events = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* first, deal with any pending sends */
</span><br>
<span class="quotelev1">&gt;       /* This check should be fast since we only need to check one  
</span><br>
<span class="quotelev1">&gt; variable. */
</span><br>
<span class="quotelev1">&gt; @@ -399,7 +399,7 @@
</span><br>
<span class="quotelev1">&gt;               continue;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        rc++;
</span><br>
<span class="quotelev1">&gt; +        events++;
</span><br>
<span class="quotelev1">&gt;           /* dispatch fragment by type */
</span><br>
<span class="quotelev1">&gt;           switch(((uintptr_t)hdr) &amp; MCA_BTL_SM_FRAG_TYPE_MASK) {
</span><br>
<span class="quotelev1">&gt;               case MCA_BTL_SM_FRAG_SEND:
</span><br>
<span class="quotelev1">&gt; @@ -480,5 +480,5 @@
</span><br>
<span class="quotelev1">&gt;                   break;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; -    return rc;
</span><br>
<span class="quotelev1">&gt; +    return events;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Reply:</strong> <a href="7060.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
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
