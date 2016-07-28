<?
$subject_val = "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 23:54:19 2011" -->
<!-- isoreceived="20110224045419" -->
<!-- sent="Thu, 24 Feb 2011 12:52:53 +0800" -->
<!-- isosent="20110224045253" -->
<!-- name="Li Zuwei" -->
<!-- email="lzuwei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3" -->
<!-- id="AB003ED847BEC24EBD9AA7508F69A9C404BF0ADA_at_lancelot.dsonet.corp.root" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AB003ED847BEC24EBD9AA7508F69A9C404BF0AD9_at_lancelot.dsonet.corp.root" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3<br>
<strong>From:</strong> Li Zuwei (<em>lzuwei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 23:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Previous message:</strong> <a href="15713.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Reply:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Reply:</strong> <a href="15718.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users,
<br>
<p>I'm measuring barrier synchronization performance on the v1.5.1 build of OpenMPI. I am currently trying to measure synchronization performance on a single node, with 5 processes. I'm getting pretty weak results as follows:
<br>
<p>Testing procedure - initialize the timer at the start of the barrier, stop the timer when the process break from the barrier. Cycle through N number of times and calculate the average.
<br>
<p>1 Node 5 processes: 299.38ms
<br>
1 Node 7 processes: 513.95ms
<br>
1 Node 10 processes: 749.94ms
<br>
<p>I am wondering if this is the expected performance on a single nodes. I presume Open MPI automatically uses Shared Memory for barrier synchronization on a single node which I think should be able to provide better performance when running on a single node. Is there a way to determine what transport layer I am using and I would greatly appreciate tips on how can I tune this performance. 
<br>
<p>Regards,
<br>
Zuwei
<br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Previous message:</strong> <a href="15713.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Reply:</strong> <a href="15715.php">David Zhang: "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrier on Windows XP SP3"</a>
<li><strong>Reply:</strong> <a href="15718.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Performance Issues with OpenMPI v1.5.1 MPI_Barrieron Windows XP SP3"</a>
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
