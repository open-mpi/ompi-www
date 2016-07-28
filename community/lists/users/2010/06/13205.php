<?
$subject_val = "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:07:18 2010" -->
<!-- isoreceived="20100602140718" -->
<!-- sent="Wed, 2 Jun 2010 10:07:11 -0400" -->
<!-- isosent="20100602140711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
<!-- id="033358DA-D363-46FC-BF2E-6B1525F3D3F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201006021558.07337.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Previous message:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 9:58 AM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; I copy the output of my last mail at the end of this one, to avoid searching.
</span><br>
<span class="quotelev1">&gt; Here is the line that I used to configure OMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt;./configure --prefix=/home/p10015/openmpi --with-threads=posix --enable-mpi-threads --enable-progress-threads --enable-mpirun-prefix-by-default --enable-sparse-groups
</span><br>
<p>My bad -- I missed that.  
<br>
<p>--enable-progress-threads is likely the culprit here.  That option is VERY poorly tested and likely does not work.  Can you try without that?
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
<li><strong>Next message:</strong> <a href="13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Previous message:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
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
