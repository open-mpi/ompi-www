<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 19:18:43 2016" -->
<!-- isoreceived="20160113001843" -->
<!-- sent="Wed, 13 Jan 2016 09:18:39 +0900" -->
<!-- isosent="20160113001839" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="569597DF.9090600_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPuR+ZjYOYNWGuN5fcimZ-GYHxeZU6DKoMFpNEWwoVKr13TySw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 19:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim,
<br>
<p>can you please confirm my understanding is correct :
<br>
<p>- OpenMPI does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
<br>
- mpich does accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw *if* 
<br>
the corresponding count *is* zero
<br>
- mpich does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw 
<br>
*if* the corresponding count is *not* zero
<br>
<p>So you are considering as a bug the fact OpenMPI does not accept 
<br>
MPI_DATATYPE_NULL *with* a zero count.
<br>
<p>am i correct ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/13/2016 8:27 AM, Jim Edwards wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI-1.8.3 built with gcc 4.8.3
</span><br>
<span class="quotelev1">&gt; and I am using an MPI_Alltoallw call to perform
</span><br>
<span class="quotelev1">&gt; an all to some (or some to all) communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the case in which my task is not sending (or receiving) any data I 
</span><br>
<span class="quotelev1">&gt; set the
</span><br>
<span class="quotelev1">&gt; datatype for that send or recv buffer to MPI_DATATYPE_NULL - this
</span><br>
<span class="quotelev1">&gt; works fine with other mpi libraries but fails in openmpi.   If I set
</span><br>
<span class="quotelev1">&gt; the datatype to something else say MPI_CHAR - it works fine.   I think
</span><br>
<span class="quotelev1">&gt; that this is a bug in open-mpi - would you agree?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt; Boulder, CO
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28249.php">http://www.open-mpi.org/community/lists/users/2016/01/28249.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
