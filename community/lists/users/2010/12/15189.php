<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 10:47:55 2010" -->
<!-- isoreceived="20101217154755" -->
<!-- sent="Fri, 17 Dec 2010 16:47:48 +0100" -->
<!-- isosent="20101217154748" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="AC860BD2-7E8D-475F-B4F9-517CAC33DAE2_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikM+sUz33c0P6_w6TXaeT2eoAG4Jy7EVcKv=fV1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 10:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour John,
<br>
<p>&nbsp;&nbsp;First, Thanks for your feedback.
<br>
<p>Le 17 d&#233;c. 10 &#224; 16:13, John Hearns a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On 17 December 2010 14:45, Gilbert Grosdidier
</span><br>
<span class="quotelev1">&gt; &lt;Gilbert.Grosdidier_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;  About this issue, for which I got NO feedback ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilbert, as you have an SGI cluster, have you filed a support  
</span><br>
<span class="quotelev1">&gt; request to SGI?
</span><br>
<p>gg= Yes, I filed one, but with no more luck yet.
<br>
<p><span class="quotelev1">&gt; Also, which firmware do you have installed?
</span><br>
<span class="quotelev1">&gt; I have        Firmware version: 2.5.0
</span><br>
<p>gg= I don't know, and firmware_revs does not seem to be available.
<br>
Only thing I got on a worker node was with lspci :
<br>
<span class="quotelev1">&gt; 03:00.0 InfiniBand: Mellanox Technologies MT26418 [ConnectX IB DDR,  
</span><br>
<span class="quotelev1">&gt; PCIe 2.0 5GT/s] (rev a0)
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/mlx4_release_notes.txt">http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/mlx4_release_notes.txt</a>
</span><br>
<p>gg= Looking into this one, I noticed pointers towards /etc/infiniband/ 
<br>
connectx.conf
<br>
and /sbin/connectx_port_config, but they are not available either.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Features that are enabled with FW 2.5.0 only:
</span><br>
<span class="quotelev1">&gt; - Send with invalidate and Local invalidate send queue work requests.
</span><br>
<span class="quotelev1">&gt; - Resize CQ support.
</span><br>
<p>gg= I also spotted some special hooks inside openib code about
<br>
HAVE_IBV_GET_DEVICE_LIST, HAVE_IBV_CREATE_XRC_RCV_QP and  
<br>
HAVE_IBV_FORK_INIT.
<br>
Are any of them suspicious together with ConnectX HCAs, please ?
<br>
<p><p>&nbsp;&nbsp;Thanks,    Best,    G.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently spotted
</span><br>
<span class="quotelev2">&gt;&gt; into btl_openib.c code, that this error message could come from
</span><br>
<span class="quotelev2">&gt;&gt; some missing ConnectX HCA ibv_resize_cq function. Well ...
</span><br>
<span class="quotelev2">&gt;&gt;  I was unable yet to figure out why/how this could occur, but I have
</span><br>
<span class="quotelev2">&gt;&gt; a now a closely related question about ConnectX Infiniband HCA :
</span><br>
<span class="quotelev2">&gt;&gt; does anybody know which other unimplemented IB functionalities
</span><br>
<span class="quotelev2">&gt;&gt; could be lacking for this ConnectX HCA ?
</span><br>
<span class="quotelev2">&gt;&gt;  This could allow me to patch appropriately by hand the OpenMPI code,
</span><br>
<span class="quotelev2">&gt;&gt; since I currently believe these functionalities are going
</span><br>
<span class="quotelev2">&gt;&gt; undetected as missing by the configure step.
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,    Best,    G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 15 d&#233;c. 10 &#224; 08:59, Gilbert Grosdidier a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with OpenMPI 1.4.3 on an SGI Altix cluster with 2048 cores,  
</span><br>
<span class="quotelev2">&gt;&gt; I got
</span><br>
<span class="quotelev2">&gt;&gt; this error message on all cores, right at startup :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.c:211:adjust_cq] cannot resize completion queue, error: 12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What could be the culprit please ?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a workaround ?
</span><br>
<span class="quotelev2">&gt;&gt; What parameter is to be tuned ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any help,    Best,    G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
