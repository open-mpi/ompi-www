<?
$subject_val = "Re: [OMPI users] openib issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 07:34:13 2010" -->
<!-- isoreceived="20100810113413" -->
<!-- sent="Tue, 10 Aug 2010 13:33:18 +0200" -->
<!-- isosent="20100810113318" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issues" -->
<!-- id="201008101333.18449.eg_at_fft.be" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="AANLkTik2NSL3qFhwJF6Qq=HX6sgZN6fcEyDFB2GKN9Y5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib issues<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 07:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13957.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>In reply to:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
<p>The HCA card is a Mellanox Technologies MT25418 (ConnectX IB DDR, PCIe 2.0 2.5GT/s, rev a0).
<br>
I cannot post code/instructions how to reproduce these errors as they randomly appeared during some tests I've performed to locate the origin of a segmentation fault during an MPI collective call.
<br>
<p>Have you ever experienced such issues ? And do you know what these messages mean ?
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p>On Tuesday 10 August 2010 13:19:45 Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hey Eloi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What HCA card do you have ? Can you post code/instructions howto reproduce
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev1">&gt; 10x
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 5:22 PM, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could someone have a look on these two different error messages ? I'd
</span><br>
<span class="quotelev2">&gt; &gt; like to know the reason(s) why they were displayed and their actual
</span><br>
<span class="quotelev2">&gt; &gt; meaning.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 19 July 2010 16:38:57 Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've been working on a random segmentation fault that seems to occur
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; during
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a collective communication when using the openib btl (see [OMPI users]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [openib] segfault when using openib btl).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; During my tests, I've come across different issues reported by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI-1.4.2:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1/
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [[12770,1],0][btl_openib_component.c:3227:handle_wc] from bn0103 to:
</span><br>
<span class="quotelev2">&gt; &gt; bn0122
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wr_id 560618664 opcode 1  vendor error 105 qp_idx 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [[992,1],6][btl_openib_component.c:3227:handle_wc] from pbn04 to: pbn05
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error polling LP CQ with status REMOTE ACCESS ERROR status number 10
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for wr_id 162858496 opcode 1  vendor error 136 qp_idx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[[992,1],5][btl_openib_component.c:3227:handle_wc] from pbn05 to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pbn04 error polling HP CQ with status WORK REQUEST FLUSHED ERROR
</span><br>
<span class="quotelev3">&gt; &gt; &gt; status number
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for wr_id 485900928 opcode 0  vendor error 249 qp_idx 0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Local host:        p'&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI process PID:   20743
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This error may indicate connectivity problems within the fabric; please
</span><br>
<span class="quotelev3">&gt; &gt; &gt; contact your system administrator.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'd like to know what these two errors mean and where they come from.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eloi Gaudry
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Free Field Technologies
</span><br>
<span class="quotelev2">&gt; &gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev2">&gt; &gt; Company Phone:   +32 10 487 959
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Company Phone:   +32 10 487 959
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13957.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
<li><strong>In reply to:</strong> <a href="13955.php">Mike Dubman: "Re: [OMPI users] openib issues"</a>
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
