<?
$subject_val = "Re: [OMPI devel] sm BTL question: frag alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 20:37:22 2009" -->
<!-- isoreceived="20090218013722" -->
<!-- sent="Tue, 17 Feb 2009 20:37:17 -0500" -->
<!-- isosent="20090218013717" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL question: frag alloc" -->
<!-- id="8E639343-CD18-4F38-804F-2DE18B1D313C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499B60D9.60208_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL question: frag alloc<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 20:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5458.php">Mike Dubman: "Re: [OMPI devel] SVN-specific tools?"</a>
<li><strong>Previous message:</strong> <a href="5456.php">Eugene Loh: "[OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>In reply to:</strong> <a href="5456.php">Eugene Loh: "[OMPI devel] sm BTL question: frag alloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>It appears this is a sm BTL problem. The prepare_src function can be  
<br>
called with any size. The BTL should check the size against the eager  
<br>
and return a descriptor that match the size requested.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 17, 2009, at 20:14 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; (Rich:  same question as I asked you in private e-mail.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should the first fragment of a message be an eager fragment even  
</span><br>
<span class="quotelev1">&gt; when the message is long and a rendezvous protocol is employed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far as I can tell, a long MPI_Send starts like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Send()
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_send()
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_send_request_start()
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_send_request_start_btl()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h?r=20298#340">http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h?r=20298#340</a>
</span><br>
<span class="quotelev1">&gt; Here we see (e.g., line 368) that if we're over the eager limit, we  
</span><br>
<span class="quotelev1">&gt; try to send the first fragment with &quot;eager&quot; size.  Then,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_send_request_start_rndv()
</span><br>
<span class="quotelev1">&gt;    mca_bml_base_prepare_src()
</span><br>
<span class="quotelev1">&gt;    mca_btl_sm_prepare_src()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if we look at <a href="http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_prepare_src">http://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_prepare_src</a> 
</span><br>
<span class="quotelev1">&gt;  it appears to alloc a &quot;MAX&quot; (not EAGER) fragment.  Is this a  
</span><br>
<span class="quotelev1">&gt; &quot;bug&quot;?  Should the BTL be allocating an EAGER fragment instead?  Or,  
</span><br>
<span class="quotelev1">&gt; could this function possibly be called with size&gt;eager?  Or, should  
</span><br>
<span class="quotelev1">&gt; the BTL alloc a MAX *or* EAGER fragment depending on what size is  
</span><br>
<span class="quotelev1">&gt; requested?
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
<li><strong>Next message:</strong> <a href="5458.php">Mike Dubman: "Re: [OMPI devel] SVN-specific tools?"</a>
<li><strong>Previous message:</strong> <a href="5456.php">Eugene Loh: "[OMPI devel] sm BTL question: frag alloc"</a>
<li><strong>In reply to:</strong> <a href="5456.php">Eugene Loh: "[OMPI devel] sm BTL question: frag alloc"</a>
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
