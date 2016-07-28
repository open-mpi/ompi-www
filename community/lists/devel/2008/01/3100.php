<?
$subject_val = "Re: [OMPI devel] 32 bit udapl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 08:46:04 2008" -->
<!-- isoreceived="20080131134604" -->
<!-- sent="Thu, 31 Jan 2008 08:45:54 -0500" -->
<!-- isosent="20080131134554" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit udapl warnings" -->
<!-- id="47A1D112.8030508_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A1C44E.4000006_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 32 bit udapl warnings<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 08:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Previous message:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3098.php">Tim Prins: "[OMPI devel] 32 bit udapl warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Reply:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was brought to my attention once before but I don't see this 
<br>
message so I just plain forgot about it. :-(
<br>
uDAPL defines its pointers as uint64, &quot;typedef DAT_UINT64 DAT_VADDR&quot;, 
<br>
and pval is a &quot;void *&quot; which is why the message comes up.  If I remove 
<br>
the cast I believe I get a different warning and I just haven't stopped 
<br>
to think of a way around this.
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing some warnings on the trunk when compiling udapl in 32 bit 
</span><br>
<span class="quotelev1">&gt; mode with OFED 1.2.5.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_udapl.c: In function 'udapl_reg_mr':
</span><br>
<span class="quotelev1">&gt; btl_udapl.c:95: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; btl_udapl.c: In function 'mca_btl_udapl_alloc':
</span><br>
<span class="quotelev1">&gt; btl_udapl.c:852: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; btl_udapl.c: In function 'mca_btl_udapl_prepare_src':
</span><br>
<span class="quotelev1">&gt; btl_udapl.c:959: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; btl_udapl.c:1008: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; btl_udapl_component.c: In function 'mca_btl_udapl_component_progress':
</span><br>
<span class="quotelev1">&gt; btl_udapl_component.c:871: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_write_eager':
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c:130: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_finish_max':
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c:775: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_post_recv':
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c:864: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c: In function 
</span><br>
<span class="quotelev1">&gt; 'mca_btl_udapl_endpoint_initialize_control_message':
</span><br>
<span class="quotelev1">&gt; btl_udapl_endpoint.c:1012: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Previous message:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3098.php">Tim Prins: "[OMPI devel] 32 bit udapl warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Reply:</strong> <a href="3101.php">Gleb Natapov: "Re: [OMPI devel] 32 bit udapl warnings"</a>
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
