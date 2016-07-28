<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  7 12:34:12 2007" -->
<!-- isoreceived="20070707163412" -->
<!-- sent="Sat, 7 Jul 2007 12:33:57 -0400" -->
<!-- isosent="20070707163357" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] extracting MPI message tag at the btl level" -->
<!-- id="4010F133-5FCA-41AB-B3AB-791035E7E4F7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="468BE6D1.4070107_at_cs.ubc.ca" -->
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
<strong>Date:</strong> 2007-07-07 12:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>In reply to:</strong> <a href="1796.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2007, at 2:28 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev1">&gt; In order to have this, though, I'd need to be able to fetch the  
</span><br>
<span class="quotelev1">&gt; context
</span><br>
<span class="quotelev1">&gt; and tag information from the header when it arrives at the BTL. This
</span><br>
<span class="quotelev1">&gt; data appears to have been transformed somehow when it gets to that
</span><br>
<span class="quotelev1">&gt; layer, though, and I'm trying to figure out how. Has something arcane
</span><br>
<span class="quotelev1">&gt; been done to this data aside from switching byte ordering?
</span><br>
<p>I have a hard time to figure out how do you know what kind of header  
<br>
you're working on ? I suspect that looking into the first char in the  
<br>
pointer you can find out what's there but only if you know what PML  
<br>
you're working for. That will tie your BTL to a specific PML (right  
<br>
now I suppose it's OB1). But try to run with DR and you will see that  
<br>
your approach will not work.
<br>
<p>If you really think that getting access to the MPI level tags and  
<br>
context it's a very important information fro you then the BTL is not  
<br>
the right way to go. Implement a MTL (the one that work with the CM  
<br>
PML) instead of a BTL. There you will have access to the full  
<br>
information of the MPI level. However, keep in mind that you will  
<br>
lose multi BTL support, all pipeline and fault tolerance features and  
<br>
that you will have to support by yourself the communications in the  
<br>
same node and in the same process. But, if you really need the MPI  
<br>
level information that the only consistent way to do it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Karol
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karol,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no way to know the MPI tag at the BTL level. The BTL is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocol agnostic, it only moves bytes around (BTL = Byte Transport
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Layer). Moreover, the BTLs can be (and are) used by different PML,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each of them supporting a different protocol.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, let talk specifically about the OB1 PML. The first X bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain a message header, but this message header differ based on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocol used to transmit the message. There are multiple protocols:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eager, send/recv, RDMA. If you look in ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_ob1_hdr.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will see the different types of headers used by the OB1 PML.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, do not use this file in the BTL, as the BTL is PML  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agnostic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 2, 2007, at 4:56 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good morning everyone. I had a question about obtaining the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message tag
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the iovec array in mca_btl_sctp_frag_t* frag from within the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_btl_tcp_frag_send() function. If I understand correctly, the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first X
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bytes in the first iovec entry contain message header  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; form of an mca_pml_ob1_match_hdr_t struct that contains a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hdr_tag field.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I extract this, I get a number that resembles an address.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dereferencing this gives, from what I can tell, an incorrect  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passing the value into ntohl() etc brings me no closer. There is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; probably something basic I'm overlooking... any help would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Karol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --Karol Mroz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kmroz_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1804/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>In reply to:</strong> <a href="1796.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
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
