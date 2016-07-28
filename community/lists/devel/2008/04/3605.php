<?
$subject_val = "Re: [OMPI devel] limit tcp fragment size?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 22:08:41 2008" -->
<!-- isoreceived="20080402020841" -->
<!-- sent="Tue, 1 Apr 2008 22:08:29 -0400" -->
<!-- isosent="20080402020829" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] limit tcp fragment size?" -->
<!-- id="E0A83323-4129-4C28-96EE-AF2835DD66FB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="296691.45507.qm_at_web52104.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2008-04-01 22:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3606.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk launch scaling"</a>
<li><strong>Previous message:</strong> <a href="3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>In reply to:</strong> <a href="3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The parameters I was talking about only split the message at the MPI  
<br>
level, pushing the data in 8k fragments into the network. Once the  
<br>
data is pushed into the kernel (via the socket), we don't have any  
<br>
control over how not when it is physically send to the remote node.  
<br>
The only way I see to limit the fragments at the hardware level, is to  
<br>
force the send and receive buffer in the kernel to a specific value.  
<br>
Tis can be done for each socket, and Open MPI povide 2 MCA parameters  
<br>
for this: btl_tcp_sndbuf and btl_tcp_rcvbuf.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 1, 2008, at 9:25 PM, Muhammad Atif wrote:
<br>
<span class="quotelev1">&gt; Thanks for the reply.
</span><br>
<span class="quotelev1">&gt; I was not able to achieve the required task with the given pointers.
</span><br>
<span class="quotelev1">&gt; I ran the application with following command,
</span><br>
<span class="quotelev1">&gt; mpirun  -np 2 --mca btl_tcp_frag 9 --mca btl_tcp_max_send_size 8192 - 
</span><br>
<span class="quotelev1">&gt; host node-00,node-01 /home/atif/blah/aa_l
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still see the messages of size 65226 bytes. I am missing  
</span><br>
<span class="quotelev1">&gt; something? One side question, I cannot find documentation for the  
</span><br>
<span class="quotelev1">&gt; mca parameter btl_tcp_frag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently using openmpi version 1.2.2.
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
<span class="quotelev1">&gt; ----- Original Message ----
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 1, 2008 1:31:46 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] limit tcp fragment size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The btl_tcp_min_send_size is not exactly what you expect it to be. It
</span><br>
<span class="quotelev1">&gt; drive only the send protocol (as implemented in Open MPI), and not the
</span><br>
<span class="quotelev1">&gt; put protocol the TCP BTL is using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can achieve what you want with 2 parameters:
</span><br>
<span class="quotelev1">&gt; 1. btl_tcp_frag set to 9. This will force the send protocol over TCP
</span><br>
<span class="quotelev1">&gt; all the time
</span><br>
<span class="quotelev1">&gt; 2. btl_tcp_max_send_size set to 16K which will define the size of a
</span><br>
<span class="quotelev1">&gt; fragment in the pipelined send protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 2:46 AM, Muhammad Atif wrote:
</span><br>
<span class="quotelev2">&gt; &gt; G'day
</span><br>
<span class="quotelev2">&gt; &gt; Just a quick basic question..... in case of tcp btl, how do I limit
</span><br>
<span class="quotelev2">&gt; &gt; the frag size?
</span><br>
<span class="quotelev2">&gt; &gt; I do not want MPI to send a fragment of size greater than lets say
</span><br>
<span class="quotelev2">&gt; &gt; 16K in size.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I am not mistaken, should not the btl_tcp_min_send_size do the
</span><br>
<span class="quotelev2">&gt; &gt; trick?  If it is supposed to do it, why do i see packets of lenght
</span><br>
<span class="quotelev2">&gt; &gt; 64K ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Muhammad Atif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Special deal for Yahoo! users &amp; friends - No Cost. Get a month of
</span><br>
<span class="quotelev2">&gt; &gt; Blockbuster Total
</span><br>
<span class="quotelev2">&gt; &gt; Accessnow_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You rock. That's why Blockbuster's offering you one month of  
</span><br>
<span class="quotelev1">&gt; Blockbuster Total Access, No  
</span><br>
<span class="quotelev1">&gt; Cost._______________________________________________
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3605/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3606.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk launch scaling"</a>
<li><strong>Previous message:</strong> <a href="3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>In reply to:</strong> <a href="3604.php">Muhammad Atif: "Re: [OMPI devel] limit tcp fragment size?"</a>
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
