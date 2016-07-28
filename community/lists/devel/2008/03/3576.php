<?
$subject_val = "Re: [OMPI devel] limit tcp fragment size?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 11:31:54 2008" -->
<!-- isoreceived="20080331153154" -->
<!-- sent="Mon, 31 Mar 2008 11:31:46 -0400" -->
<!-- isosent="20080331153146" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] limit tcp fragment size?" -->
<!-- id="53722900-6C08-4795-8DCD-5F52BDADF19A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="396142.19475.qm_at_web52108.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] limit tcp fragment size?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 11:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3575.php">Josh Hursey: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The btl_tcp_min_send_size is not exactly what you expect it to be. It  
<br>
drive only the send protocol (as implemented in Open MPI), and not the  
<br>
put protocol the TCP BTL is using.
<br>
<p>You can achieve what you want with 2 parameters:
<br>
1. btl_tcp_frag set to 9. This will force the send protocol over TCP  
<br>
all the time
<br>
2. btl_tcp_max_send_size set to 16K which will define the size of a  
<br>
fragment in the pipelined send protocol.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2008, at 2:46 AM, Muhammad Atif wrote:
<br>
<span class="quotelev1">&gt; G'day
</span><br>
<span class="quotelev1">&gt; Just a quick basic question..... in case of tcp btl, how do I limit  
</span><br>
<span class="quotelev1">&gt; the frag size?
</span><br>
<span class="quotelev1">&gt; I do not want MPI to send a fragment of size greater than lets say  
</span><br>
<span class="quotelev1">&gt; 16K in size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I am not mistaken, should not the btl_tcp_min_send_size do the  
</span><br>
<span class="quotelev1">&gt; trick?  If it is supposed to do it, why do i see packets of lenght  
</span><br>
<span class="quotelev1">&gt; 64K ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Muhammad Atif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Special deal for Yahoo! users &amp; friends - No Cost. Get a month of  
</span><br>
<span class="quotelev1">&gt; Blockbuster Total  
</span><br>
<span class="quotelev1">&gt; Accessnow_______________________________________________
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3576/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3575.php">Josh Hursey: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
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
