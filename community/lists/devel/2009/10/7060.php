<?
$subject_val = "Re: [OMPI devel] btl_sm_component_progress return code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:55:41 2009" -->
<!-- isoreceived="20091030205541" -->
<!-- sent="Fri, 30 Oct 2009 16:55:32 -0400" -->
<!-- isosent="20091030205532" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_sm_component_progress return code" -->
<!-- id="07A7906C-78DB-4E8A-BAA2-7A47442F29D4_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AEB50A3.40602_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 16:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7061.php">Jeff Squyres: "[OMPI devel] Trac changes for MPI Forum members"</a>
<li><strong>Previous message:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Feel free to do so.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 30, 2009, at 16:46 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.  So, you'll put back the change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The progress functions do not need to return an error code. If  
</span><br>
<span class="quotelev2">&gt;&gt; there  is an error they should propagate it back through the  
</span><br>
<span class="quotelev2">&gt;&gt; descriptors. The  only meaning of the return code of the progress  
</span><br>
<span class="quotelev2">&gt;&gt; functions is to know  if any event had happened during this round  
</span><br>
<span class="quotelev2">&gt;&gt; of progress. The  opal_output use it to trigger the yield (if one  
</span><br>
<span class="quotelev2">&gt;&gt; if necessary).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, this is a good catch. We're doing a big mixup there.  
</span><br>
<span class="quotelev2">&gt;&gt; Attached  you will find a patch that clean this problem. As  
</span><br>
<span class="quotelev2">&gt;&gt; expected, there is  no performance impact ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the patch:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: btl_sm_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- btl_sm_component.c    (revision 22176)
</span><br>
<span class="quotelev2">&gt;&gt; +++ btl_sm_component.c    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -361,7 +361,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      sm_fifo_t *fifo = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_sm_hdr_t *hdr;
</span><br>
<span class="quotelev2">&gt;&gt;      int my_smp_rank = mca_btl_sm_component.my_smp_rank;
</span><br>
<span class="quotelev2">&gt;&gt; -    int peer_smp_rank, j, rc = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    int peer_smp_rank, j, rc = 0, events = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* first, deal with any pending sends */
</span><br>
<span class="quotelev2">&gt;&gt;      /* This check should be fast since we only need to check one   
</span><br>
<span class="quotelev2">&gt;&gt; variable. */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -399,7 +399,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;              continue;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -        rc++;
</span><br>
<span class="quotelev2">&gt;&gt; +        events++;
</span><br>
<span class="quotelev2">&gt;&gt;          /* dispatch fragment by type */
</span><br>
<span class="quotelev2">&gt;&gt;          switch(((uintptr_t)hdr) &amp; MCA_BTL_SM_FRAG_TYPE_MASK) {
</span><br>
<span class="quotelev2">&gt;&gt;              case MCA_BTL_SM_FRAG_SEND:
</span><br>
<span class="quotelev2">&gt;&gt; @@ -480,5 +480,5 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  break;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    return events;
</span><br>
<span class="quotelev2">&gt;&gt;  }
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
<li><strong>Next message:</strong> <a href="7061.php">Jeff Squyres: "[OMPI devel] Trac changes for MPI Forum members"</a>
<li><strong>Previous message:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
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
