<?
$subject_val = "Re: [OMPI users] error from MPI_Allgather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 09:57:56 2012" -->
<!-- isoreceived="20121030135756" -->
<!-- sent="Tue, 30 Oct 2012 09:57:52 -0400" -->
<!-- isosent="20121030135752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error from MPI_Allgather" -->
<!-- id="F6B214AC-E303-4D08-8A41-4F2634A8E9FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20121030T071354-70_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] error from MPI_Allgather<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 09:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20592.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2012, at 2:23 AM, rajesh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. That being said, it looks like you used the same buffer for both the sbuf and rbuf.  MPI does not allow you to
</span><br>
<span class="quotelev2">&gt;&gt; do that; you need to specify different buffers for those arguments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs with openmpi. I could understand the problem as you said in
</span><br>
<span class="quotelev1">&gt; the reply. But how can I set different buffers for them?
</span><br>
<p>You need to change your code so that you can pass different buffers in for sbuf and rbuf. 
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
<li><strong>Next message:</strong> <a href="20592.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
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
