<?
$subject_val = "Re: [OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection resetby peer (104)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 17:52:12 2010" -->
<!-- isoreceived="20100114225212" -->
<!-- sent="Thu, 14 Jan 2010 17:52:07 -0500" -->
<!-- isosent="20100114225207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection resetby peer (104)" -->
<!-- id="9E302177-E23F-4112-B249-31CB7FB61D16_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ebe51f0b1001131858yd1d6bb3wb42d3038a46b966a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection resetby peer (104)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 17:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11781.php">Jeff Squyres: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView onDarwin"</a>
<li><strong>Previous message:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>In reply to:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2010, at 9:58 PM, SpiduS Okami wrote:
<br>
<p><span class="quotelev1">&gt; I would like to know if someone could help me with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [fenrir][[9567,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the hpcc program in a beowulf type cluster with 2,3 and 4 machines. When I use 10.000 problems and up it gives me this error. Any one know what could be this? and how can I solve this problem.
</span><br>
<p>This *usually* means that an MPI process has died unexpectedly; one of its peers noticed that it died by the fact that a socket closed.
<br>
<p>You might want to poke around and see if there are corefiles or somesuch that explain why an MPI process died...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11781.php">Jeff Squyres: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView onDarwin"</a>
<li><strong>Previous message:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>In reply to:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
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
