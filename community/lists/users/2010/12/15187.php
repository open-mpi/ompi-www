<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 10:14:05 2010" -->
<!-- isoreceived="20101217151405" -->
<!-- sent="Fri, 17 Dec 2010 15:13:58 +0000" -->
<!-- isosent="20101217151358" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="AANLkTikM+sUz33c0P6_w6TXaeT2eoAG4Jy7EVcKv=fV1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C8AFE37-44DD-4388-A97A-193FC24B1911_at_cern.ch" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 10:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15189.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15189.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 December 2010 14:45, Gilbert Grosdidier
<br>
&lt;Gilbert.Grosdidier_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt; &#160;About this issue, for which I got NO feedback ;-)
</span><br>
<p>Gilbert, as you have an SGI cluster, have you filed a support request to SGI?
<br>
<p><p>Also, which firmware do you have installed?
<br>
I have        Firmware version: 2.5.0
<br>
<p><p><p><a href="http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/mlx4_release_notes.txt">http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/mlx4_release_notes.txt</a>
<br>
<p>Features that are enabled with FW 2.5.0 only:
<br>
- Send with invalidate and Local invalidate send queue work requests.
<br>
- Resize CQ support.
<br>
<p><p><p><p>I recently spotted
<br>
<span class="quotelev1">&gt; into btl_openib.c code, that this error message could come from
</span><br>
<span class="quotelev1">&gt; some missing ConnectX HCA ibv_resize_cq function. Well ...
</span><br>
<span class="quotelev1">&gt; &#160;I was unable yet to figure out why/how this could occur, but I have
</span><br>
<span class="quotelev1">&gt; a now a closely related question about ConnectX Infiniband HCA :
</span><br>
<span class="quotelev1">&gt; does anybody know which other unimplemented IB functionalities
</span><br>
<span class="quotelev1">&gt; could be lacking for this ConnectX HCA ?
</span><br>
<span class="quotelev1">&gt; &#160;This could allow me to patch appropriately by hand the OpenMPI code,
</span><br>
<span class="quotelev1">&gt; since I currently believe these functionalities are going
</span><br>
<span class="quotelev1">&gt; undetected as missing by the configure step.
</span><br>
<span class="quotelev1">&gt; &#160;Thanks, &#160; &#160;Best, &#160; &#160;G.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15 d&#233;c. 10 &#224; 08:59, Gilbert Grosdidier a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with OpenMPI 1.4.3 on an SGI Altix cluster with 2048 cores, I got
</span><br>
<span class="quotelev1">&gt; this error message on all cores, right at startup :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib.c:211:adjust_cq] cannot resize completion queue, error: 12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the culprit please ?
</span><br>
<span class="quotelev1">&gt; Is there a workaround ?
</span><br>
<span class="quotelev1">&gt; What parameter is to be tuned ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help, &#160;&#160;&#160;Best, &#160;&#160;&#160;G.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15189.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15189.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
