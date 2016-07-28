<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 09:45:12 2010" -->
<!-- isoreceived="20101217144512" -->
<!-- sent="Fri, 17 Dec 2010 15:45:05 +0100" -->
<!-- isosent="20101217144505" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="7C8AFE37-44DD-4388-A97A-193FC24B1911_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D08756E.2080502_at_cern.ch" -->
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
<strong>Date:</strong> 2010-12-17 09:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15185.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>In reply to:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>&nbsp;&nbsp;About this issue, for which I got NO feedback ;-) I recently spotted
<br>
into btl_openib.c code, that this error message could come from
<br>
some missing ConnectX HCA ibv_resize_cq function. Well ...
<br>
<p>&nbsp;&nbsp;I was unable yet to figure out why/how this could occur, but I have
<br>
a now a closely related question about ConnectX Infiniband HCA :
<br>
does anybody know which other unimplemented IB functionalities
<br>
could be lacking for this ConnectX HCA ?
<br>
<p>&nbsp;&nbsp;This could allow me to patch appropriately by hand the OpenMPI code,
<br>
since I currently believe these functionalities are going
<br>
undetected as missing by the configure step.
<br>
<p>&nbsp;&nbsp;Thanks,    Best,    G.
<br>
<p><p>Le 15 d&#233;c. 10 &#224; 08:59, Gilbert Grosdidier a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with OpenMPI 1.4.3 on an SGI Altix cluster with 2048 cores,  
</span><br>
<span class="quotelev1">&gt; I got
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
<span class="quotelev1">&gt; Thanks in advance for any help,    Best,    G.
</span><br>
<p><p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15185.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>In reply to:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15187.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
