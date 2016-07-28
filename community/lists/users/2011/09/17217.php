<?
$subject_val = "Re: [OMPI users] Infiniband Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:01:54 2011" -->
<!-- isoreceived="20110912130154" -->
<!-- sent="Mon, 12 Sep 2011 16:01:43 +0300" -->
<!-- isosent="20110912130143" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband Error" -->
<!-- id="4E6E02B7.8070008_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsJ58z_E5UpU6ZFWfbEETC5iW7j2uKoMtDgSepf89Owy7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband Error<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 09:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
<li><strong>Previous message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17214.php">Ahsan Ali: "[OMPI users] Infiniband Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This means that you have some problem on that node,
<br>
and it's probably unrelated to Open MPI.
<br>
Bad cable? Bad port? FW/driver in some bad state?
<br>
Do other IB performance tests work OK on this node?
<br>
Try rebooting the node.
<br>
<p>-- YK
<br>
<p>On 12-Sep-11 7:52 AM, Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting following error during an application run which causes it to crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *[[36944,1],41][btl_openib_component.c:3227:handle_wc] from compute-01-19.private.dns.zone to: compute-01-04 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 167703304 opcode 128  vendor error 129 qp_idx 3*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I removed that particular node and then the error was removed.Please suggest me what could be the solution to this. Thanking you in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
<li><strong>Previous message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17214.php">Ahsan Ali: "[OMPI users] Infiniband Error"</a>
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
