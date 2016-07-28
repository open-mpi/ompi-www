<?
$subject_val = "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 07:34:23 2011" -->
<!-- isoreceived="20110124123423" -->
<!-- sent="Mon, 24 Jan 2011 13:34:16 +0100" -->
<!-- isosent="20110124123416" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use" -->
<!-- id="4D3D71C8.6040309_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D218F7E.6050302_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 07:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>Previous message:</strong> <a href="15403.php">Kedar Soparkar: "[OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>In reply to:</strong> <a href="15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi folks,
<br>
<p>sorry to insist, i'll be glad if someone could point out the relevant 
<br>
piece of info I missed.
<br>
<p>these huge memory consumption cannot be explained easily on the user 
<br>
side, especially since it's only seen on the master process node...
<br>
<p><p>thanks,
<br>
&#233;loi
<br>
<p><p><p><p>On 01/03/2011 09:57 AM, Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'd like to know if someone had a chance to check at the issue I 
</span><br>
<span class="quotelev1">&gt; reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks and happy new year !
</span><br>
<span class="quotelev1">&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/21/2010 10:58 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt; hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when launching a parallel computation on 128 nodes using openib and 
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i 
</span><br>
<span class="quotelev2">&gt;&gt; observe a rather large memory consumption (2GB: 65336*256*128) on the 
</span><br>
<span class="quotelev2">&gt;&gt; process with rank 0 (only).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this memory seems to be initialized and in use as the resident memory 
</span><br>
<span class="quotelev2">&gt;&gt; indicator matches the virtual one. at the time of observation, a call 
</span><br>
<span class="quotelev2">&gt;&gt; to MPI_Init has been done, but no communication (user side) has been 
</span><br>
<span class="quotelev2">&gt;&gt; done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev2">&gt;&gt; - other processes located on the same nodes don't use that amount of 
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and 
</span><br>
<span class="quotelev2">&gt;&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options. 
</span><br>
<span class="quotelev2">&gt;&gt; the cluster is based on eight-core nodes using mellanox hca.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; &#233;loi
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>Previous message:</strong> <a href="15403.php">Kedar Soparkar: "[OMPI users] bash: orted: command not found despite env vars being set"</a>
<li><strong>In reply to:</strong> <a href="15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
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
