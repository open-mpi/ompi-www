<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 10:26:09 2016" -->
<!-- isoreceived="20160408142609" -->
<!-- sent="Fri, 8 Apr 2016 23:26:08 +0900" -->
<!-- isosent="20160408142608" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAAkFZ5tcNUkjW0W4EkFpnX9E040nUk20gANW8t_=qrZiRwoAHw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87bn5kw5tb.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 10:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>gettimeofday() uses (seconds, microseconds) to represent the time, and
<br>
hence, the resolution is hardcoded to 1 microsecond
<br>
clock_gettine() uses (seconds, nanoseconds) and hence the resolution is
<br>
hard coded to 1 nanosecond.
<br>
this is the max resolution, and it could be lower than that depending on
<br>
what gettimeofday() does under the hood.
<br>
/* I remember there was an issue with the first software stack of MPSS, the
<br>
Xeon phi o/s, and once in a while, the effective time resolution dropped to
<br>
100 Hz, and the MPI application has no way to be made aware of that */
<br>
<p>bottom line, in OpenMPI, you should not expect a resolution higher than
<br>
MPI_Wtick(),
<br>
and yes, it might be (way) worst than that
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, April 8, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Other implementations of MPI have very accurate counters.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This might be a discutable topic. A quick survey of some of the MPI
</span><br>
<span class="quotelev2">&gt; &gt; libraries available on a Linux cluster give the following precision for
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wtime implementation :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpich-3.1.4: wtick = 1.000000e-06
</span><br>
<span class="quotelev2">&gt; &gt; Intel(R) MPI Library 5.1.1 for Linux*: wtick = 1.000000e-06
</span><br>
<span class="quotelev2">&gt; &gt; ompi-1.10.2: wtick = 1.000000e-06
</span><br>
<span class="quotelev2">&gt; &gt; ompi-master: wtick = 1.000000e-09
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you trust wtick anyhow?  OMPI 1.10 says it's always 10&#226;&#129;&#187;&#226;&#129;&#182;, which
</span><br>
<span class="quotelev1">&gt; isn't necessarily realistic even if it uses gettimeofday with a nominal
</span><br>
<span class="quotelev1">&gt; 1&#206;&#188;s resolution.  At least with some (older?) Linuxes, and possibly other
</span><br>
<span class="quotelev1">&gt; kernels, gettimeofday is limited to the kernel tick rate -- a few 100 Hz
</span><br>
<span class="quotelev1">&gt; if I recall correctly.  I'd need convincing about 1ns generally for the
</span><br>
<span class="quotelev1">&gt; real time clock too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, experimentally, RHEL6-packaged mpich 3.1's wtime calls
</span><br>
<span class="quotelev1">&gt; gettimeofday and not clock_gettime; likewise impi 4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for fixing ompi, by the way.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28910.php">http://www.open-mpi.org/community/lists/users/2016/04/28910.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
