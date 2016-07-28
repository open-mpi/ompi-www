<?
$subject_val = "Re: [OMPI users] Connection timed out on TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 18:26:33 2014" -->
<!-- isoreceived="20140429222633" -->
<!-- sent="Tue, 29 Apr 2014 22:26:32 +0000" -->
<!-- isosent="20140429222632" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out on TCP" -->
<!-- id="A8D613B3-172D-4F26-88CC-1D8D2FFAF1BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53600B6E.2070201_at_ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out on TCP<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 18:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24274.php">Åke Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2014, at 4:28 PM, Vince Grimes &lt;tom.grimes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I realize it is no longer in the history of replies for this message, but the reason I am trying to use tcp instead of Infiniband is because:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using an in-house program called ScalIT that performs operations on very large sparse distributed matrices.
</span><br>
<span class="quotelev1">&gt; ScalIT works on other clusters with comparable hardware and software, but not ours.
</span><br>
<span class="quotelev1">&gt; Other programs run just fine on our cluster using OpenMPI.
</span><br>
<span class="quotelev1">&gt; ScalIT runs to completion using OpenMPI *on a single 12-core node*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was suggested to me by another list member that I try forcing usage of tcp instead of Infiniband, so that's what I've been trying, just to see if it will work. I guess the tcp code is expected to be more reliable?
</span><br>
<p>No, but it *should* be easier to configure...
<br>
<p>We have previously seen instability of the IP-over-IB drivers, but I haven't been directly involved in the IB community for years, so that information may well be dated.
<br>
<p><span class="quotelev1">&gt; The mca parameters used to produce the current error are: &quot;--mca btl self,sm,tcp --mca btl_tcp_if_exclude lo,ib0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	The previous Infiniband error message is:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; local QP operation err (QPN 7c1d43, WQE @ 00015005, CQN 7a009a, index 307512)
</span><br>
<span class="quotelev1">&gt;  [ 0] 007c1d43
</span><br>
<span class="quotelev1">&gt;  [ 4] 00000000
</span><br>
<span class="quotelev1">&gt;  [ 8] 00000000
</span><br>
<span class="quotelev1">&gt;  [ c] 00000000
</span><br>
<span class="quotelev1">&gt;  [10] 026b2ed0
</span><br>
<span class="quotelev1">&gt;  [14] 00000000
</span><br>
<span class="quotelev1">&gt;  [18] 00015005
</span><br>
<span class="quotelev1">&gt;  [1c] ff100000
</span><br>
<span class="quotelev1">&gt; [[31552,1],84][btl_openib_component.c:3492:handle_wc] from compute-4-5.local to: compute-4-13 error polling LP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 246f300 opcode 128  vendor error 107 qp_idx 0
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was also suggested that I disable eager RDMA. Doing this (&quot;--mca btl_openib_use_eager_rdma 0&quot;) results in:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; [[30430,1],234][btl_openib_component.c:3492:handle_wc] from compute-1-18.local to: compute-6-10 error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id 2c41e80 opcode 128 vendor error 244 qp_idx 0
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the Infiniband errors come in the same place with respect to the program output and reference the same OpenMPI code line. (It is notoriously difficult to trace through this program to be sure of the location in the code where the error occurs as ScalIT is written in appalling FORTRAN.)
</span><br>
<p>Do you know for sure that this is a correct MPI application?
<br>
<p>The errors you describe above may well be due to IB layer-0 kinds of errors (e.g., bad cables and/or bad HCAs), or they could be due to application errors (e.g., memory corruption).
<br>
<p>I say this because if you're getting hangs in TCP and errors with IB, it could be that the application itself is faulty...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24274.php">Åke Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
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
