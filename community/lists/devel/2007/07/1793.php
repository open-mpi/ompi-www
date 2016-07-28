<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  2 17:06:53 2007" -->
<!-- isoreceived="20070702210653" -->
<!-- sent="Mon, 2 Jul 2007 17:06:36 -0400" -->
<!-- isosent="20070702210636" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] extracting MPI message tag at the btl level" -->
<!-- id="D15A73D1-A3CA-43E7-8814-90446B3C3FE7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46896696.8040308_at_cs.ubc.ca" -->
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
<strong>Date:</strong> 2007-07-02 17:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Karol Mroz: "[OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>In reply to:</strong> <a href="1792.php">Karol Mroz: "[OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karol,
<br>
<p>There is no way to know the MPI tag at the BTL level. The BTL is  
<br>
protocol agnostic, it only moves bytes around (BTL = Byte Transport  
<br>
Layer). Moreover, the BTLs can be (and are) used by different PML,  
<br>
each of them supporting a different protocol.
<br>
<p>Now, let talk specifically about the OB1 PML. The first X bytes  
<br>
contain a message header, but this message header differ based on the  
<br>
protocol used to transmit the message. There are multiple protocols:  
<br>
eager, send/recv, RDMA. If you look in ompi/mca/pml/ob1/pml_ob1_hdr.h  
<br>
you will see the different types of headers used by the OB1 PML.  
<br>
However, do not use this file in the BTL, as the BTL is PML agnostic.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 2, 2007, at 4:56 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev1">&gt; Good morning everyone. I had a question about obtaining the message  
</span><br>
<span class="quotelev1">&gt; tag
</span><br>
<span class="quotelev1">&gt; from the iovec array in mca_btl_sctp_frag_t* frag from within the
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_send() function. If I understand correctly, the  
</span><br>
<span class="quotelev1">&gt; first X
</span><br>
<span class="quotelev1">&gt; bytes in the first iovec entry contain message header information  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; form of an mca_pml_ob1_match_hdr_t struct that contains a hdr_tag  
</span><br>
<span class="quotelev1">&gt; field.
</span><br>
<span class="quotelev1">&gt; When I extract this, I get a number that resembles an address.
</span><br>
<span class="quotelev1">&gt; Dereferencing this gives, from what I can tell, an incorrect value and
</span><br>
<span class="quotelev1">&gt; passing the value into ntohl() etc brings me no closer. There is
</span><br>
<span class="quotelev1">&gt; probably something basic I'm overlooking... any help would be  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Karol
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1793/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Karol Mroz: "[OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>In reply to:</strong> <a href="1792.php">Karol Mroz: "[OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
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
