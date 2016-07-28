<?
$subject_val = "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 03:57:41 2011" -->
<!-- isoreceived="20110103085741" -->
<!-- sent="Mon, 03 Jan 2011 09:57:34 +0100" -->
<!-- isosent="20110103085734" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use" -->
<!-- id="4D218F7E.6050302_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D107A2B.6050407_at_fft.be" -->
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
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 03:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15242.php">Shiqing Fan: "Re: [OMPI users] Windows installers of 1.5.1 - No Fortan ?"</a>
<li><strong>Previous message:</strong> <a href="15240.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM has retired"</a>
<li><strong>In reply to:</strong> <a href="../../2010/12/15198.php">Eloi Gaudry: "[OMPI users] memory consumption on rank 0 and btl_openib_receive_queues use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15396.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Reply:</strong> <a href="15396.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>i'd like to know if someone had a chance to check at the issue I reported.
<br>
<p>thanks and happy new year !
<br>
&#233;loi
<br>
<p>On 12/21/2010 10:58 AM, Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when launching a parallel computation on 128 nodes using openib and 
</span><br>
<span class="quotelev1">&gt; the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i 
</span><br>
<span class="quotelev1">&gt; observe a rather large memory consumption (2GB: 65336*256*128) on the 
</span><br>
<span class="quotelev1">&gt; process with rank 0 (only).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this memory seems to be initialized and in use as the resident memory 
</span><br>
<span class="quotelev1">&gt; indicator matches the virtual one. at the time of observation, a call 
</span><br>
<span class="quotelev1">&gt; to MPI_Init has been done, but no communication (user side) has been 
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev1">&gt; - other processes located on the same nodes don't use that amount of 
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and 
</span><br>
<span class="quotelev1">&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options. the 
</span><br>
<span class="quotelev1">&gt; cluster is based on eight-core nodes using mellanox hca.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your help,
</span><br>
<span class="quotelev1">&gt; &#233;loi
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
<p><p><pre>
-- 
Eloi Gaudry
Senior Product Development Engineer
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Direct Phone Number: +32 10 495 147
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15242.php">Shiqing Fan: "Re: [OMPI users] Windows installers of 1.5.1 - No Fortan ?"</a>
<li><strong>Previous message:</strong> <a href="15240.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM has retired"</a>
<li><strong>In reply to:</strong> <a href="../../2010/12/15198.php">Eloi Gaudry: "[OMPI users] memory consumption on rank 0 and btl_openib_receive_queues use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15396.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Reply:</strong> <a href="15396.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
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
