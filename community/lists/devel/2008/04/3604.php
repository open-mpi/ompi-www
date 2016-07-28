<?
$subject_val = "Re: [OMPI devel] limit tcp fragment size?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 21:25:11 2008" -->
<!-- isoreceived="20080402012511" -->
<!-- sent="Tue, 1 Apr 2008 18:25:02 -0700 (PDT)" -->
<!-- isosent="20080402012502" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] limit tcp fragment size?" -->
<!-- id="296691.45507.qm_at_web52104.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] limit tcp fragment size?" -->
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
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 21:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>Previous message:</strong> <a href="3603.php">Jeff Squyres: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>Reply:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply. 
<br>
I was not able to achieve the required task with the given pointers. 
<br>
I ran the application with following command,
<br>
mpirun  -np 2 --mca btl_tcp_frag 9 --mca btl_tcp_max_send_size 8192 -host node-00,node-01 /home/atif/blah/aa_l
<br>
<p>I still see the messages of size 65226 bytes. I am missing something? One side question, I cannot find documentation for the mca parameter btl_tcp_frag.
<br>
<p>I am currently using openmpi version 1.2.2. 
<br>
<p><p>Best Regards,
<br>
Muhammad Atif
<br>
<p>----- Original Message ----
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Tuesday, April 1, 2008 1:31:46 AM
<br>
Subject: Re: [OMPI devel] limit tcp fragment size?
<br>
<p>The btl_tcp_min_send_size is not exactly what you expect it to be. It  
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
<p><p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
You rock. That's why Blockbuster's offering you one month of Blockbuster Total Access, No Cost.  
<br>
<a href="http://tc.deals.yahoo.com/tc/blockbuster/text5.com">http://tc.deals.yahoo.com/tc/blockbuster/text5.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>Previous message:</strong> <a href="3603.php">Jeff Squyres: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
<li><strong>Reply:</strong> <a href="3605.php">George Bosilca: "Re: [OMPI devel] limit tcp fragment size?"</a>
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
