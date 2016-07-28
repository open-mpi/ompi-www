<?
$subject_val = "Re: [OMPI devel] mca_btl_sm_sendi question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 09:34:44 2009" -->
<!-- isoreceived="20090225143444" -->
<!-- sent="Wed, 25 Feb 2009 09:34:38 -0500" -->
<!-- isosent="20090225143438" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_sm_sendi question" -->
<!-- id="63F1CFD7-7574-40FA-B1F0-3979345AF95E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A47DF0.1020002_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_btl_sm_sendi question<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 09:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 18:08 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; (Probably this message only for George, but I'll toss it out to the  
</span><br>
<span class="quotelev1">&gt; alias/archive.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question about the sm sendi() function.  What should happen  
</span><br>
<span class="quotelev1">&gt; if the sendi() function attempts to write to the FIFO, but the FIFO  
</span><br>
<span class="quotelev1">&gt; is full?
</span><br>
<p>The write should not be queued except in the case where the whole data  
<br>
referred by the convertor is copied out of the user memory. If the  
<br>
FIFO is full, the best will be to allocate the descriptor and give it  
<br>
back to the PML.
<br>
<p><span class="quotelev1">&gt; Currently, it appears that the sendi() function returns an error  
</span><br>
<span class="quotelev1">&gt; code to the PML, which assumes that the sendi() tried to send the  
</span><br>
<span class="quotelev1">&gt; message but failed and so just tried to allocate a descriptor.
</span><br>
<p>Yes, this is the expected behavior.
<br>
<p><span class="quotelev1">&gt; But is that what should happen?  The condition of the FIFO being  
</span><br>
<span class="quotelev1">&gt; full is a little misleading since the write is still queued for  
</span><br>
<span class="quotelev1">&gt; further progress -- not in the FIFO itself but in the pending-send  
</span><br>
<span class="quotelev1">&gt; queue.  This distinction should perhaps not matter to the upper  
</span><br>
<span class="quotelev1">&gt; layers.  The upper layers should still view the send as  
</span><br>
<span class="quotelev1">&gt; &quot;completed&quot; (buffered by the MPI implementation to be progressed  
</span><br>
<span class="quotelev1">&gt; later).  I would think that the sendi() function should return a  
</span><br>
<span class="quotelev1">&gt; SUCCESS code.
</span><br>
<p>If the write is queued then this is more or less a bug. We will nicely  
<br>
cope with this case, because we have this sequence number and we will  
<br>
drop a message duplicate, but we will end-up sending the same message  
<br>
twice. The problem is that I don't know which of the copies will be  
<br>
used on the receiver side, I guess the first one reaching the receiver.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Relevent source code is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML, line 496
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c</a> 
</span><br>
<span class="quotelev1">&gt; #496
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTL, line 785
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/</a> 
</span><br>
<span class="quotelev1">&gt; btl_sm.c#785
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FIFO write, line 18
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h">https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h</a> 
</span><br>
<span class="quotelev1">&gt; #18
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
<li><strong>Next message:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
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
