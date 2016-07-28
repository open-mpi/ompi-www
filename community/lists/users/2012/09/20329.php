<?
$subject_val = "Re: [OMPI users] error from MPI_Allgather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 02:37:29 2012" -->
<!-- isoreceived="20120926063729" -->
<!-- sent="Wed, 26 Sep 2012 08:37:29 +0200" -->
<!-- isosent="20120926063729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error from MPI_Allgather" -->
<!-- id="30084B3D-C02C-4F07-9509-B455FA34BA66_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAL_g3-VdB-EY=g0jjDHGrcgTMdwiGxN+OWUqKNqwBYhDxdoSfQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-26 02:37:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20330.php">Jeff Squyres: "Re: [OMPI users] -DUSE_TSD_DATA_HACK problem in openmpi's ptmalloc2"</a>
<li><strong>Previous message:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
<li><strong>In reply to:</strong> <a href="20325.php">Rajesh J: "[OMPI users] error from MPI_Allgather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two things:
<br>
<p>1. That looks like an MPICH error message (i.e., it's not from Open MPI -- Open MPI and MPICH2 are entirely different software packages with different developers and behaviors).  You might want to contact them for more specific details.
<br>
<p>2. That being said, it looks like you used the same buffer for both the sbuf and rbuf.  MPI does not allow you to do that; you need to specify different buffers for those arguments.
<br>
<p><p>On Sep 26, 2012, at 5:45 AM, Rajesh J wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have some error while using mpirun. Could anyone please help me solve this.
</span><br>
<span class="quotelev1">&gt; I googled this and found some, but too technical for me since I am not
</span><br>
<span class="quotelev1">&gt; so familiar with mpi programs. Is this due to some installation
</span><br>
<span class="quotelev1">&gt; problem or the program which I run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fatal error in PMPI_Allgather: Invalid buffer pointer, error stack:
</span><br>
<span class="quotelev1">&gt; PMPI_Allgather(958): MPI_Allgather(sbuf=0x6465d30, scount=1,
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER, rbuf=0x6465d30, rcount=1, MPI_INTEGER, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; PMPI_Allgather(931): Buffers must not be aliased
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; **Dr. Rajesh J.
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate,
</span><br>
<span class="quotelev1">&gt; Center for Global Environmental Research,
</span><br>
<span class="quotelev1">&gt; National Institute for Environmental Studies,
</span><br>
<span class="quotelev1">&gt; 16-2 Onogawa, Tsukuba, Ibaraki, 305-8506 Japan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20330.php">Jeff Squyres: "Re: [OMPI users] -DUSE_TSD_DATA_HACK problem in openmpi's ptmalloc2"</a>
<li><strong>Previous message:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
<li><strong>In reply to:</strong> <a href="20325.php">Rajesh J: "[OMPI users] error from MPI_Allgather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
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
