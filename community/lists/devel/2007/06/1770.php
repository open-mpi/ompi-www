<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 15:44:54 2007" -->
<!-- isoreceived="20070626194454" -->
<!-- sent="Tue, 26 Jun 2007 15:44:45 -0400" -->
<!-- isosent="20070626194445" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP BTL Development for Open MPI" -->
<!-- id="13FECB3E-E902-4681-87AE-BE2612008079_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="468157D1.70102_at_cs.ubc.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 15:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>In reply to:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Reply:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karol,
<br>
<p>We (the folks at UTK) implemented a SCTP BTL. It's not yet in the  
<br>
trunk, but it will get there shortly. Instead of starting from  
<br>
scratch, it might be a good idea to start directly from there.
<br>
<p>To answer your question, the TCP BTL use a copy of the original  
<br>
iovec. After each write, this copy is modified in order to describe  
<br>
the next operation (i.e. some of the iovec removed and some pointers  
<br>
modified based on the return value of the write function).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 26, 2007, at 2:15 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev1">&gt; Hello... I'm a student at the University of British Columbia  
</span><br>
<span class="quotelev1">&gt; working on
</span><br>
<span class="quotelev1">&gt; creating an SCTP BTL for Open MPI. I have a simple implementation
</span><br>
<span class="quotelev1">&gt; working that uses SCTPs one-to-one style sockets for sending messages.
</span><br>
<span class="quotelev1">&gt; The same writev()/readv() calls that are used in the TCP BTL are  
</span><br>
<span class="quotelev1">&gt; used in
</span><br>
<span class="quotelev1">&gt; this new BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The next step is to allow large messages (300K +) to be sent over the
</span><br>
<span class="quotelev1">&gt; SCTP socket. Right now, I'm fragmenting the iovec pointing to the
</span><br>
<span class="quotelev1">&gt; message at the BTL level. Repeated calls to writev() are then made,  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; the first call sending header information and a part of the message,
</span><br>
<span class="quotelev1">&gt; followed by sends of nothing but message data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My concern is that if the send is interrupted partly through the  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; and then resumed, it will attempt to resend the vector containing the
</span><br>
<span class="quotelev1">&gt; message data from the beginning as mca_btl_sctp_frag_t pointer is only
</span><br>
<span class="quotelev1">&gt; aware of the original, un-fragmented iovec. I'm wondering if extending
</span><br>
<span class="quotelev1">&gt; the array of iovec structures contained within the frag pointer to
</span><br>
<span class="quotelev1">&gt; contain the properly fragmented message would cause havoc on the
</span><br>
<span class="quotelev1">&gt; middleware. Currently the array is of size 5 (as is the case for  
</span><br>
<span class="quotelev1">&gt; the TCP
</span><br>
<span class="quotelev1">&gt; BTL). Would extending this beyond 5 to allow for proper book  
</span><br>
<span class="quotelev1">&gt; keeping in
</span><br>
<span class="quotelev1">&gt; the event of an interrupted send create problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on this matter would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Karol Mroz
</span><br>
<span class="quotelev1">&gt; kmroz_at_[hidden]
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1770/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>In reply to:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Reply:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
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
