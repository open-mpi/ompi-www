<?
$subject_val = "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 09:34:35 2014" -->
<!-- isoreceived="20141028133435" -->
<!-- sent="Tue, 28 Oct 2014 13:34:26 +0000" -->
<!-- isosent="20141028133426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two" -->
<!-- id="582B6FD1-3FD7-4F55-B4BB-30889243C35C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="544F93E8.7060403_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 09:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25629.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java FAQ Page out of date"</a>
<li><strong>Previous message:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2014, at 9:02 AM, maxinator333 &lt;maxinator333_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It doesn't seem to work. (switching off wlan still works)
</span><br>
<span class="quotelev1">&gt; mpicc mpiinit.c -o mpiinit.exe; time mpirun --mca btl sm,self -n 2 ./mpiinit.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real    0m43.733s
</span><br>
<span class="quotelev1">&gt; user    0m0.888s
</span><br>
<span class="quotelev1">&gt; sys     0m0.824s
</span><br>
<p>Ah, this must be an ORTE issue, then (i.e., the run-time system beneath the MPI layer).
<br>
<p>Try specifying that ORTE should use the loopback interface:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl sm,self --mca oob_tcp_if_include lo ...
<br>
<p>(actually, I don't know what the loopback interface is called on Windows; it's typically &quot;lo&quot; in Linux 2.6 kernels...)
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
<li><strong>Next message:</strong> <a href="25629.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java FAQ Page out of date"</a>
<li><strong>Previous message:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>In reply to:</strong> <a href="25627.php">maxinator333: "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
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
