<?
$subject_val = "Re: [OMPI devel] Moving fragments in btl sm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 12:12:17 2007" -->
<!-- isoreceived="20071108171217" -->
<!-- sent="Thu, 8 Nov 2007 12:12:11 -0500" -->
<!-- isosent="20071108171211" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Moving fragments in btl sm" -->
<!-- id="2D54E08B-0ABC-4127-8298-D53BC1BE6092_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0711081330320.19116_at_lgserv3.stud.cs.uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Moving fragments in btl sm<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 12:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The real memory copy happen in the convertor, more specifically in the  
<br>
ompi_convertor_pack for the sender and in the ompi_convertor_unpack  
<br>
for the receiver. In fact, none of the BTL directly call memcpy, all  
<br>
memory movements are done via the convertor.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 8, 2007, at 7:38 AM, Torje Henriksen wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question that I shouldn't need to ask, but I'm
</span><br>
<span class="quotelev1">&gt; kind of lost in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The btl sm component is using the circular buffers to write and read
</span><br>
<span class="quotelev1">&gt; fragments (sending and receiving).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the write_to_head and read_from_tail I can only see pointers  
</span><br>
<span class="quotelev1">&gt; beeing set,
</span><br>
<span class="quotelev1">&gt; no data being moved. So where does the actual data movement/copying  
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev1">&gt; place? I'm thinking maybe a callback function existing somewhere :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help now and earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torje Henriksen
</span><br>
<span class="quotelev1">&gt; (torjeh_at_[hidden])
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2593/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
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
