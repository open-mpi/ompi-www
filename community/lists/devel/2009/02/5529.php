<?
$subject_val = "Re: [OMPI devel] mca_btl_sm_sendi question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 10:36:42 2009" -->
<!-- isoreceived="20090225153642" -->
<!-- sent="Wed, 25 Feb 2009 07:36:12 -0800" -->
<!-- isosent="20090225153612" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_sm_sendi question" -->
<!-- id="49A5656C.7020407_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63F1CFD7-7574-40FA-B1F0-3979345AF95E_at_eecs.utk.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 10:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 24, 2009, at 18:08 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Probably this message only for George, but I'll toss it out to the  
</span><br>
<span class="quotelev2">&gt;&gt; alias/archive.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Actually, maybe Rich should weigh in here, too.  This relates to the 
<br>
overflow mechanism in MCA_BTL_SM_FIFO_WRITE.
<br>
<p><span class="quotelev2">&gt;&gt; I have a question about the sm sendi() function.  What should happen  
</span><br>
<span class="quotelev2">&gt;&gt; if the sendi() function attempts to write to the FIFO, but the FIFO  
</span><br>
<span class="quotelev2">&gt;&gt; is full?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The write should not be queued except in the case where the whole 
</span><br>
<span class="quotelev1">&gt; data  referred by the convertor is copied out of the user memory.
</span><br>
<p>And this is indeed the case.  The data-convertor copy completed 
<br>
successfully.
<br>
<p><span class="quotelev1">&gt; If the  FIFO is full, the best will be to allocate the descriptor and 
</span><br>
<span class="quotelev1">&gt; give it  back to the PML.
</span><br>
<p>Why?  The data has been copied out of the user's buffer.  The pointer to 
<br>
that data has been queued for sending.  (It hasn't been queued in the 
<br>
FIFO, which is full, but it has been queued in the pending-send list.)
<br>
<p>The FIFO has an overflow mechanism.  Actually, prior to my recent 
<br>
putbacks, it had two overflow mechanisms.  One was to grow the FIFO, and 
<br>
the other was to use the pending-send queue.  While adding support for 
<br>
multiple senders per FIFO and at Rich's suggestion, I pulled out the 
<br>
ability to grow the FIFO.  (Some number of folks didn't even believe 
<br>
that the FIFO-grow stuff even existed or was enabled or worked 
<br>
properly.)  That still leaves the pending sends.  So, the &quot;out of 
<br>
resource&quot; return code from the FIFO write is kind of spurious.  The FIFO 
<br>
write is returning that code even though it has accepted the write and 
<br>
queued it up.
<br>
<p><span class="quotelev2">&gt;&gt; Currently, it appears that the sendi() function returns an error  
</span><br>
<span class="quotelev2">&gt;&gt; code to the PML, which assumes that the sendi() tried to send the  
</span><br>
<span class="quotelev2">&gt;&gt; message but failed and so just tried to allocate a descriptor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this is the expected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But is that what should happen?  The condition of the FIFO being  
</span><br>
<span class="quotelev2">&gt;&gt; full is a little misleading since the write is still queued for  
</span><br>
<span class="quotelev2">&gt;&gt; further progress -- not in the FIFO itself but in the pending-send  
</span><br>
<span class="quotelev2">&gt;&gt; queue.  This distinction should perhaps not matter to the upper  
</span><br>
<span class="quotelev2">&gt;&gt; layers.  The upper layers should still view the send as  &quot;completed&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (buffered by the MPI implementation to be progressed  later).  I 
</span><br>
<span class="quotelev2">&gt;&gt; would think that the sendi() function should return a  SUCCESS code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the write is queued then this is more or less a bug. We will 
</span><br>
<span class="quotelev1">&gt; nicely  cope with this case, because we have this sequence number and 
</span><br>
<span class="quotelev1">&gt; we will  drop a message duplicate, but we will end-up sending the same 
</span><br>
<span class="quotelev1">&gt; message  twice. The problem is that I don't know which of the copies 
</span><br>
<span class="quotelev1">&gt; will be  used on the receiver side, I guess the first one reaching the 
</span><br>
<span class="quotelev1">&gt; receiver.
</span><br>
<p>Arrgh!  When the primary mechanism (FIFO) starts getting congested, we 
<br>
start pumping duplicate messages into the system?
<br>
<p>The proper fix (IMHO) is to have the sendi function return a SUCCESS 
<br>
code once it's written the message and the pointer to the message.  And, 
<br>
once it's written those two things, it seems to me to be a bug to return 
<br>
any other code.
<br>
<p><span class="quotelev2">&gt;&gt; Relevent source code is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PML, line 496
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c</a> 
</span><br>
<span class="quotelev2">&gt;&gt; #496
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTL, line 785
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm.c#785
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FIFO write, line 18
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h">https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h</a> 
</span><br>
<span class="quotelev2">&gt;&gt; #18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5530.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
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
