<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 14:28:52 2007" -->
<!-- isoreceived="20070704182852" -->
<!-- sent="Wed, 04 Jul 2007 11:28:33 -0700" -->
<!-- isosent="20070704182833" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] extracting MPI message tag at the btl level" -->
<!-- id="468BE6D1.4070107_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46896A2B.9040209_at_cs.ubc.ca" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-04 14:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI devel] vampir trace - additional compiler options"</a>
<li><strong>In reply to:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wanted to post another followup to this message.
<br>
<p>I realize that the design philosophy implies that the BTL should operate 
<br>
at a level of abstraction where it merely shuttles bytes around. 
<br>
However, my recent experience suggests that it might actually be useful 
<br>
to have the ability to selectively query the context in which this data 
<br>
is being used, such as message tags, contexts, etc.
<br>
<p>In order to have this, though, I'd need to be able to fetch the context 
<br>
and tag information from the header when it arrives at the BTL. This 
<br>
data appears to have been transformed somehow when it gets to that 
<br>
layer, though, and I'm trying to figure out how. Has something arcane 
<br>
been done to this data aside from switching byte ordering?
<br>
<p>Thanks,
<br>
Karol
<br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Karol,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no way to know the MPI tag at the BTL level. The BTL is 
</span><br>
<span class="quotelev2">&gt;&gt; protocol agnostic, it only moves bytes around (BTL = Byte Transport 
</span><br>
<span class="quotelev2">&gt;&gt; Layer). Moreover, the BTLs can be (and are) used by different PML, 
</span><br>
<span class="quotelev2">&gt;&gt; each of them supporting a different protocol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, let talk specifically about the OB1 PML. The first X bytes 
</span><br>
<span class="quotelev2">&gt;&gt; contain a message header, but this message header differ based on the 
</span><br>
<span class="quotelev2">&gt;&gt; protocol used to transmit the message. There are multiple protocols: 
</span><br>
<span class="quotelev2">&gt;&gt; eager, send/recv, RDMA. If you look in ompi/mca/pml/ob1/pml_ob1_hdr.h 
</span><br>
<span class="quotelev2">&gt;&gt; you will see the different types of headers used by the OB1 PML. 
</span><br>
<span class="quotelev2">&gt;&gt; However, do not use this file in the BTL, as the BTL is PML agnostic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2007, at 4:56 PM, Karol Mroz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good morning everyone. I had a question about obtaining the message tag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the iovec array in mca_btl_sctp_frag_t* frag from within the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_tcp_frag_send() function. If I understand correctly, the first X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes in the first iovec entry contain message header information in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; form of an mca_pml_ob1_match_hdr_t struct that contains a hdr_tag field.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I extract this, I get a number that resembles an address.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dereferencing this gives, from what I can tell, an incorrect value and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passing the value into ntohl() etc brings me no closer. There is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably something basic I'm overlooking... any help would be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Karol Mroz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kmroz_at_[hidden]
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<p><p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI devel] vampir trace - additional compiler options"</a>
<li><strong>In reply to:</strong> <a href="1794.php">Karol Mroz: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
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
