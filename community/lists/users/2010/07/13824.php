<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 07:49:47 2010" -->
<!-- isoreceived="20100728114947" -->
<!-- sent="Wed, 28 Jul 2010 07:50:35 -0400" -->
<!-- isosent="20100728115035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="0C23BC20-23A7-4417-8F5C-635E8E16F72C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1280244104.6708.1386982823_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 07:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2010, at 11:21 AM, Hugo Gagnon wrote:
<br>
<p><span class="quotelev1">&gt; I appreciate your replies but my question has to do with the function
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce of OpenMPI built on a Mac OSX 10.6 with ifort (intel
</span><br>
<span class="quotelev1">&gt; fortran compiler).
</span><br>
<p>The implication I was going for was that if you were using MPI_DOUBLE_PRECISION with a data buffer that wasn't actually double precision, Bad Things would happen inside the allreduce because OMPI would likely read/write beyond the end of your buffer.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
