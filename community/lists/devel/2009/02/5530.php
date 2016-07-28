<?
$subject_val = "Re: [OMPI devel] mca_btl_sm_sendi question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 14:04:59 2009" -->
<!-- isoreceived="20090225190459" -->
<!-- sent="Wed, 25 Feb 2009 14:04:52 -0500" -->
<!-- isosent="20090225190452" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_sm_sendi question" -->
<!-- id="AD0744AF-FB49-4C73-B55C-D62DF0F7D061_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A5656C.7020407_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-25 14:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5531.php">Ken Olum: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2009, at 10:36 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2009, at 18:08 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Probably this message only for George, but I'll toss it out to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  alias/archive.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Actually, maybe Rich should weigh in here, too.  This relates to the  
</span><br>
<span class="quotelev1">&gt; overflow mechanism in MCA_BTL_SM_FIFO_WRITE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a question about the sm sendi() function.  What should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happen  if the sendi() function attempts to write to the FIFO, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the FIFO  is full?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The write should not be queued except in the case where the whole  
</span><br>
<span class="quotelev2">&gt;&gt; data  referred by the convertor is copied out of the user memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this is indeed the case.  The data-convertor copy completed  
</span><br>
<span class="quotelev1">&gt; successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the  FIFO is full, the best will be to allocate the descriptor  
</span><br>
<span class="quotelev2">&gt;&gt; and give it  back to the PML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why?  The data has been copied out of the user's buffer.  The  
</span><br>
<span class="quotelev1">&gt; pointer to that data has been queued for sending.  (It hasn't been  
</span><br>
<span class="quotelev1">&gt; queued in the FIFO, which is full, but it has been queued in the  
</span><br>
<span class="quotelev1">&gt; pending-send list.)
</span><br>
<p>As I previously state, if the data is copied out of the user buffer,  
<br>
the sendi should always return success. However, having a queue in the  
<br>
BTL only duplicates the queue from the PML.
<br>
<p><span class="quotelev1">&gt; The FIFO has an overflow mechanism.  Actually, prior to my recent  
</span><br>
<span class="quotelev1">&gt; putbacks, it had two overflow mechanisms.  One was to grow the FIFO,  
</span><br>
<span class="quotelev1">&gt; and the other was to use the pending-send queue.  While adding  
</span><br>
<span class="quotelev1">&gt; support for multiple senders per FIFO and at Rich's suggestion, I  
</span><br>
<span class="quotelev1">&gt; pulled out the ability to grow the FIFO.  (Some number of folks  
</span><br>
<span class="quotelev1">&gt; didn't even believe that the FIFO-grow stuff even existed or was  
</span><br>
<span class="quotelev1">&gt; enabled or worked properly.)  That still leaves the pending sends.   
</span><br>
<span class="quotelev1">&gt; So, the &quot;out of resource&quot; return code from the FIFO write is kind of  
</span><br>
<span class="quotelev1">&gt; spurious.  The FIFO write is returning that code even though it has  
</span><br>
<span class="quotelev1">&gt; accepted the write and queued it up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, it appears that the sendi() function returns an error   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code to the PML, which assumes that the sendi() tried to send the   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message but failed and so just tried to allocate a descriptor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this is the expected behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But is that what should happen?  The condition of the FIFO being   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full is a little misleading since the write is still queued for   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further progress -- not in the FIFO itself but in the pending- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send  queue.  This distinction should perhaps not matter to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upper  layers.  The upper layers should still view the send as   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;completed&quot; (buffered by the MPI implementation to be progressed   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later).  I would think that the sendi() function should return a   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUCCESS code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the write is queued then this is more or less a bug. We will  
</span><br>
<span class="quotelev2">&gt;&gt; nicely  cope with this case, because we have this sequence number  
</span><br>
<span class="quotelev2">&gt;&gt; and we will  drop a message duplicate, but we will end-up sending  
</span><br>
<span class="quotelev2">&gt;&gt; the same message  twice. The problem is that I don't know which of  
</span><br>
<span class="quotelev2">&gt;&gt; the copies will be  used on the receiver side, I guess the first  
</span><br>
<span class="quotelev2">&gt;&gt; one reaching the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Arrgh!  When the primary mechanism (FIFO) starts getting congested,  
</span><br>
<span class="quotelev1">&gt; we start pumping duplicate messages into the system?
</span><br>
<p>If the BTL queue the send internally and returns an error, then the  
<br>
PML will:
<br>
- go back in the mca_pml_ob1_send_request_start with the error set to  
<br>
OUT_OF_RESSOURCES
<br>
- will continue over the list of available BTL for the eager and try  
<br>
to send the same message again.
<br>
- in the case no more BTLs are available it will add the request to  
<br>
the pending queue, and it will reschedule it later.
<br>
<p>So the answer is yes, if a BTL returns an error while adding the data  
<br>
in its own queues, then we will duplicate the send operation.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; The proper fix (IMHO) is to have the sendi function return a SUCCESS  
</span><br>
<span class="quotelev1">&gt; code once it's written the message and the pointer to the message.   
</span><br>
<span class="quotelev1">&gt; And, once it's written those two things, it seems to me to be a bug  
</span><br>
<span class="quotelev1">&gt; to return any other code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Relevent source code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML, line 496
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #496
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL, line 785
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_sm.c#785
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FIFO write, line 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h">https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #18
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5531.php">Ken Olum: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>In reply to:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5532.php">Richard Graham: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
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
