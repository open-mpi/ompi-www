<?
$subject_val = "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:33:33 2015" -->
<!-- isoreceived="20150430193333" -->
<!-- sent="Thu, 30 Apr 2015 15:33:31 -0400" -->
<!-- isosent="20150430193331" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="CAMJJpkUVGkQeCYFizrb_-epMLA3Z_fCSh-enaQZxS+3kKfHgVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.LFD.2.11.1504301407480.2844_at_asterix" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 15:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26823.php">Satish Balay: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the packed representation we store not MPI_Datatypes but a handcrafted
<br>
id for each one. The 2 codes should have been in sync. I'm looking at
<br>
another issue right now, and I'll come back to this one right after.
<br>
<p>Thanks for paying attention to the code.
<br>
&nbsp;&nbsp;George.
<br>
<p>On Thu, Apr 30, 2015 at 3:13 PM, Satish Balay &lt;balay_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for checking and getting a more appropriate fix in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just tried this out - and the PETSc test code runs fine with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: There is one inconsistancy in ompi/datatype/ompi_datatype_args.c
</span><br>
<span class="quotelev1">&gt; [that I noticed] - that you might want to check.
</span><br>
<span class="quotelev1">&gt; Perhaps the second line should be  &quot;(DC) * sizeof(MPI_Datatype)&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         int length = sizeof(ompi_datatype_args_t) + (IC) * sizeof(int) + \
</span><br>
<span class="quotelev1">&gt;             (AC) * sizeof(OPAL_PTRDIFF_TYPE) + (DC) *
</span><br>
<span class="quotelev1">&gt; sizeof(MPI_Datatype); \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        pArgs-&gt;total_pack_size = (4 + (IC)) * sizeof(int) +             \
</span><br>
<span class="quotelev1">&gt;             (AC) * sizeof(OPAL_PTRDIFF_TYPE) + (DC) * sizeof(int);      \
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Satish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 30 Apr 2015, Matthew Knepley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, May 1, 2015 at 4:55 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; George reviewed your patch and adjusted it a bit.  We applied it to
</span><br>
<span class="quotelev1">&gt; master
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and it's pending to the release series (v1.8.x).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Was this identified by IBM?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/015d3f56cf749ee5ad9ea4428d2f5da72f9bbe08">https://github.com/open-mpi/ompi/commit/015d3f56cf749ee5ad9ea4428d2f5da72f9bbe08</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Matt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Would you mind testing a nightly master snapshot?  It should be in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tonight's build:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Apr 30, 2015, at 12:50 AM, Satish Balay &lt;balay_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; OpenMPI developers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; We've had issues (memory errors) with OpenMPI - and code in PETSc
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; library that uses MPI_Win_fence().
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Vagrind shows memory corruption deep inside OpenMPI function stack.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm attaching a potential patch that appears to fix this issue for
</span><br>
<span class="quotelev1">&gt; us.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [the corresponding valgrind trace is listed in the patch header]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Perhaps there is a more appropriate fix for this memory corruption.
</span><br>
<span class="quotelev1">&gt; Could
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; you check on this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Sorry I don't have a pure MPI test code to demonstrate this error -
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; but a PETSc test example code consistantly reproduces this issue]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Satish&lt;openmpi-1.8.4.patch&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26823.php">http://www.open-mpi.org/community/lists/users/2015/04/26823.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26823.php">Satish Balay: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
