<?
$subject_val = "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 05:05:51 2015" -->
<!-- isoreceived="20150808090551" -->
<!-- sent="Sat, 8 Aug 2015 02:05:39 -0700" -->
<!-- isosent="20150808090539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1" -->
<!-- id="CAMD57ofpPR_K2BmiB4OGb9m7vEbT0ypj1nZz3ArLza7w5ajy0Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ6k7aGn4LAh+7oX--jMzvB_D-xzPjRBiLyV_P_Bfmy5UdWJfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-08 05:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My first suggestion would be to try using 1.8.8 instead to get all the bug
<br>
fixes since 1.8.1 was released
<br>
<p>On Fri, Aug 7, 2015 at 10:34 PM, kishor sharma &lt;kishor.iitr_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently upgraded from openmpi 1.5.4 to openmpi 1.81 and built an
</span><br>
<span class="quotelev1">&gt; application which uses parallel version of Mumps (
</span><br>
<span class="quotelev1">&gt; <a href="http://mumps.enseeiht.fr/">http://mumps.enseeiht.fr/</a>) .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am noticing process gets hung with np &gt; 2 but some time it works also. I
</span><br>
<span class="quotelev1">&gt; am not sure if this because of the openmpi upgrade or some problem with our
</span><br>
<span class="quotelev1">&gt; code. It used to work fine with 1.5.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strace shows that process is polling some resource while it is hanged. Any
</span><br>
<span class="quotelev1">&gt; pointers on how to debug this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Kishor
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27410.php">http://www.open-mpi.org/community/lists/users/2015/08/27410.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="27410.php">kishor sharma: "[OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="27412.php">Gilles Gouaillardet: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
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
