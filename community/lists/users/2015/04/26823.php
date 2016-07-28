<?
$subject_val = "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:13:15 2015" -->
<!-- isoreceived="20150430191315" -->
<!-- sent="Thu, 30 Apr 2015 14:13:15 -0500" -->
<!-- isosent="20150430191315" -->
<!-- name="Satish Balay" -->
<!-- email="balay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="alpine.LFD.2.11.1504301407480.2844_at_asterix" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAMYG4GkLiyQUOc46x0bVKMkt2dYBBLVgMOYgzhzK8RmSY=qRbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4<br>
<strong>From:</strong> Satish Balay (<em>balay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 15:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Maybe reply:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26825.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for checking and getting a more appropriate fix in.
<br>
<p>I've just tried this out - and the PETSc test code runs fine with it.
<br>
<p>BTW: There is one inconsistancy in ompi/datatype/ompi_datatype_args.c
<br>
[that I noticed] - that you might want to check.
<br>
Perhaps the second line should be  &quot;(DC) * sizeof(MPI_Datatype)&quot;?
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int length = sizeof(ompi_datatype_args_t) + (IC) * sizeof(int) + \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(AC) * sizeof(OPAL_PTRDIFF_TYPE) + (DC) * sizeof(MPI_Datatype); \
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pArgs-&gt;total_pack_size = (4 + (IC)) * sizeof(int) +             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(AC) * sizeof(OPAL_PTRDIFF_TYPE) + (DC) * sizeof(int);      \
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
<p>Satish
<br>
<p><p>On Thu, 30 Apr 2015, Matthew Knepley wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, May 1, 2015 at 4:55 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George reviewed your patch and adjusted it a bit.  We applied it to master
</span><br>
<span class="quotelev2">&gt; &gt; and it's pending to the release series (v1.8.x).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was this identified by IBM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/015d3f56cf749ee5ad9ea4428d2f5da72f9bbe08">https://github.com/open-mpi/ompi/commit/015d3f56cf749ee5ad9ea4428d2f5da72f9bbe08</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Would you mind testing a nightly master snapshot?  It should be in
</span><br>
<span class="quotelev2">&gt; &gt; tonight's build:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 30, 2015, at 12:50 AM, Satish Balay &lt;balay_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI developers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We've had issues (memory errors) with OpenMPI - and code in PETSc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; library that uses MPI_Win_fence().
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Vagrind shows memory corruption deep inside OpenMPI function stack.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm attaching a potential patch that appears to fix this issue for us.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [the corresponding valgrind trace is listed in the patch header]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Perhaps there is a more appropriate fix for this memory corruption. Could
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you check on this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Sorry I don't have a pure MPI test code to demonstrate this error -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but a PETSc test example code consistantly reproduces this issue]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Satish&lt;openmpi-1.8.4.patch&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Maybe reply:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26825.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
