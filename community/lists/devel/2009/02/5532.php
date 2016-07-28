<?
$subject_val = "Re: [OMPI devel] mca_btl_sm_sendi question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 15:34:17 2009" -->
<!-- isoreceived="20090225203417" -->
<!-- sent="Wed, 25 Feb 2009 15:34:11 -0500" -->
<!-- isosent="20090225203411" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_sm_sendi question" -->
<!-- id="C5CB1573.30088%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 15:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5533.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5531.php">Ken Olum: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>In reply to:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It really does not matter what one does with the sm sends that can't be
<br>
posted to the FIFO, as long as they are posted at some later time.  The
<br>
current implementation generates does not rely on the ordering memory
<br>
provides, but generates a sequence number and uses this in the matching,
<br>
just like any other btl. So one does not need to preserve the sending order,
<br>
like one would, if one avoided sequence numbers, and had to rely on  the
<br>
memory ordering to satisfy MPI matching rules.
<br>
<p>Rich
<br>
<p><p>On 2/25/09 10:36 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2009, at 18:08 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Probably this message only for George, but I'll toss it out to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alias/archive.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, maybe Rich should weigh in here, too.  This relates to the
</span><br>
<span class="quotelev1">&gt; overflow mechanism in MCA_BTL_SM_FIFO_WRITE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a question about the sm sendi() function.  What should happen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the sendi() function attempts to write to the FIFO, but the FIFO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is full?
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
<span class="quotelev2">&gt;&gt; If the  FIFO is full, the best will be to allocate the descriptor and
</span><br>
<span class="quotelev2">&gt;&gt; give it  back to the PML.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why?  The data has been copied out of the user's buffer.  The pointer to
</span><br>
<span class="quotelev1">&gt; that data has been queued for sending.  (It hasn't been queued in the
</span><br>
<span class="quotelev1">&gt; FIFO, which is full, but it has been queued in the pending-send list.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FIFO has an overflow mechanism.  Actually, prior to my recent
</span><br>
<span class="quotelev1">&gt; putbacks, it had two overflow mechanisms.  One was to grow the FIFO, and
</span><br>
<span class="quotelev1">&gt; the other was to use the pending-send queue.  While adding support for
</span><br>
<span class="quotelev1">&gt; multiple senders per FIFO and at Rich's suggestion, I pulled out the
</span><br>
<span class="quotelev1">&gt; ability to grow the FIFO.  (Some number of folks didn't even believe
</span><br>
<span class="quotelev1">&gt; that the FIFO-grow stuff even existed or was enabled or worked
</span><br>
<span class="quotelev1">&gt; properly.)  That still leaves the pending sends.  So, the &quot;out of
</span><br>
<span class="quotelev1">&gt; resource&quot; return code from the FIFO write is kind of spurious.  The FIFO
</span><br>
<span class="quotelev1">&gt; write is returning that code even though it has accepted the write and
</span><br>
<span class="quotelev1">&gt; queued it up.
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
<span class="quotelev3">&gt;&gt;&gt; further progress -- not in the FIFO itself but in the pending-send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queue.  This distinction should perhaps not matter to the upper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layers.  The upper layers should still view the send as  &quot;completed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (buffered by the MPI implementation to be progressed  later).  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would think that the sendi() function should return a  SUCCESS code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the write is queued then this is more or less a bug. We will
</span><br>
<span class="quotelev2">&gt;&gt; nicely  cope with this case, because we have this sequence number and
</span><br>
<span class="quotelev2">&gt;&gt; we will  drop a message duplicate, but we will end-up sending the same
</span><br>
<span class="quotelev2">&gt;&gt; message  twice. The problem is that I don't know which of the copies
</span><br>
<span class="quotelev2">&gt;&gt; will be  used on the receiver side, I guess the first one reaching the
</span><br>
<span class="quotelev2">&gt;&gt; receiver.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arrgh!  When the primary mechanism (FIFO) starts getting congested, we
</span><br>
<span class="quotelev1">&gt; start pumping duplicate messages into the system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proper fix (IMHO) is to have the sendi function return a SUCCESS
</span><br>
<span class="quotelev1">&gt; code once it's written the message and the pointer to the message.  And,
</span><br>
<span class="quotelev1">&gt; once it's written those two things, it seems to me to be a bug to return
</span><br>
<span class="quotelev1">&gt; any other code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Relevent source code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML, line 496
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendr">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendr</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eq.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #496
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
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo">https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #18
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
<li><strong>Next message:</strong> <a href="5533.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5531.php">Ken Olum: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>In reply to:</strong> <a href="5529.php">Eugene Loh: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
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
