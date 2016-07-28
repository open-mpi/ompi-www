<?
$subject_val = "Re: [OMPI devel] 32 bit udapl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 08:58:43 2008" -->
<!-- isoreceived="20080131135843" -->
<!-- sent="Thu, 31 Jan 2008 15:58:33 +0200" -->
<!-- isosent="20080131135833" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit udapl warnings" -->
<!-- id="20080131135832.GA15381_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47A1D112.8030508_at_sun.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 08:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 31, 2008 at 08:45:54AM -0500, Don Kerr wrote:
<br>
<span class="quotelev1">&gt; This was brought to my attention once before but I don't see this 
</span><br>
<span class="quotelev1">&gt; message so I just plain forgot about it. :-(
</span><br>
<span class="quotelev1">&gt; uDAPL defines its pointers as uint64, &quot;typedef DAT_UINT64 DAT_VADDR&quot;, 
</span><br>
<span class="quotelev1">&gt; and pval is a &quot;void *&quot; which is why the message comes up.  If I remove 
</span><br>
<span class="quotelev1">&gt; the cast I believe I get a different warning and I just haven't stopped 
</span><br>
<span class="quotelev1">&gt; to think of a way around this.
</span><br>
dat_pointer = (DAT_VADDR)(uintptr_t)void_pointer;
<br>
<p>This is not just a warning. This is a real bug. If MSB of a void pointer
<br>
will be 1 it will be sign extended.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am seeing some warnings on the trunk when compiling udapl in 32 bit 
</span><br>
<span class="quotelev2">&gt; &gt; mode with OFED 1.2.5.1:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c: In function 'udapl_reg_mr':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c:95: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c: In function 'mca_btl_udapl_alloc':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c:852: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c: In function 'mca_btl_udapl_prepare_src':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c:959: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl.c:1008: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_component.c: In function 'mca_btl_udapl_component_progress':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_component.c:871: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev2">&gt; &gt; different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_write_eager':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c:130: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev2">&gt; &gt; different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_finish_max':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c:775: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev2">&gt; &gt; different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_post_recv':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c:864: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev2">&gt; &gt; different size
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c: In function 
</span><br>
<span class="quotelev2">&gt; &gt; 'mca_btl_udapl_endpoint_initialize_control_message':
</span><br>
<span class="quotelev2">&gt; &gt; btl_udapl_endpoint.c:1012: warning: cast from pointer to integer of 
</span><br>
<span class="quotelev2">&gt; &gt; different size
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
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
