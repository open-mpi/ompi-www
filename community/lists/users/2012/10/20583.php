<?
$subject_val = "Re: [OMPI users] error from MPI_Allgather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 02:50:05 2012" -->
<!-- isoreceived="20121030065005" -->
<!-- sent="Tue, 30 Oct 2012 06:23:55 +0000 (UTC)" -->
<!-- isosent="20121030062355" -->
<!-- name="rajesh" -->
<!-- email="chithrasala_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error from MPI_Allgather" -->
<!-- id="loom.20121030T071354-70_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30084B3D-C02C-4F07-9509-B455FA34BA66_at_cisco.com" -->
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
<strong>From:</strong> rajesh (<em>chithrasala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 02:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres &lt;at&gt; cisco.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. That looks like an MPICH error message (i.e., it's not from Open MPI --
</span><br>
Open MPI and MPICH2 are entirely
<br>
<span class="quotelev1">&gt; different software packages with different developers and behaviors).  You
</span><br>
might want to contact them
<br>
<span class="quotelev1">&gt; for more specific details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. That being said, it looks like you used the same buffer for both the sbuf
</span><br>
and rbuf.  MPI does not allow you to
<br>
<span class="quotelev1">&gt; do that; you need to specify different buffers for those arguments.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<p>Hi Jeff,
<br>
Thank you for your reply.
<br>
<p>The problem occurs with openmpi. I could understand the problem as you said in
<br>
the reply. But how can I set different buffers for them?
<br>
thank you
<br>
<p>Rajesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
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
