<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 16:42:30 2016" -->
<!-- isoreceived="20160408204230" -->
<!-- sent="Fri, 8 Apr 2016 16:42:29 -0400" -->
<!-- isosent="20160408204229" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAMJJpkWD6tPNFvNB-y-QwjPZ_=RHV_hxZ5O8jBLaX3N=--bw+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uJ1MnwkfFRAUqmiNNt2xY1tUyKNSj43iq6ViKto+B0onA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 16:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Wtick is not about the precision but about the resolution of the
<br>
underlying timer (aka. the best you can hope to get). Thus, the measured
<br>
time will certainly be larger, but, and this is almost a certainty, it will
<br>
hardly be smaller. As a result, I am doubtful that an MPI implementation
<br>
will provide an MPI_Wtime with a practical resolution smaller that whatever
<br>
the corresponding MPI_Wtick returns.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p>On Fri, Apr 8, 2016 at 2:42 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, MPI_Wtick is not always a good measure of the precision of
</span><br>
<span class="quotelev1">&gt; MPI_Wtime.  The way I would measure resolution is to call MPI_Wtime a few
</span><br>
<span class="quotelev1">&gt; million times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, on Blue Gene/Q, MPI_Wtime was ~220 cycles per call.  I don't
</span><br>
<span class="quotelev1">&gt; remember what MPI_Wtick returned, but I guess it was 1./1.6e9, which of
</span><br>
<span class="quotelev1">&gt; course is ~200 times smaller.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, an implementation based on gettimeofday might claim a
</span><br>
<span class="quotelev1">&gt; resolution of 1.e-6 in MPI_Wtick, but could take an arbitrarily long time,
</span><br>
<span class="quotelev1">&gt; depending on how the OS chooses to implement this system call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 8, 2016 at 7:26 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gettimeofday() uses (seconds, microseconds) to represent the time, and
</span><br>
<span class="quotelev2">&gt;&gt; hence, the resolution is hardcoded to 1 microsecond
</span><br>
<span class="quotelev2">&gt;&gt; clock_gettine() uses (seconds, nanoseconds) and hence the resolution is
</span><br>
<span class="quotelev2">&gt;&gt; hard coded to 1 nanosecond.
</span><br>
<span class="quotelev2">&gt;&gt; this is the max resolution, and it could be lower than that depending on
</span><br>
<span class="quotelev2">&gt;&gt; what gettimeofday() does under the hood.
</span><br>
<span class="quotelev2">&gt;&gt; /* I remember there was an issue with the first software stack of MPSS,
</span><br>
<span class="quotelev2">&gt;&gt; the Xeon phi o/s, and once in a while, the effective time resolution
</span><br>
<span class="quotelev2">&gt;&gt; dropped to 100 Hz, and the MPI application has no way to be made aware of
</span><br>
<span class="quotelev2">&gt;&gt; that */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, in OpenMPI, you should not expect a resolution higher than
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wtick(),
</span><br>
<span class="quotelev2">&gt;&gt; and yes, it might be (way) worst than that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, April 8, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Other implementations of MPI have very accurate counters.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This might be a discutable topic. A quick survey of some of the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; libraries available on a Linux cluster give the following precision for
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Wtime implementation :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpich-3.1.4: wtick = 1.000000e-06
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Intel(R) MPI Library 5.1.1 for Linux*: wtick = 1.000000e-06
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ompi-1.10.2: wtick = 1.000000e-06
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ompi-master: wtick = 1.000000e-09
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you trust wtick anyhow?  OMPI 1.10 says it's always 10&#226;&#129;&#187;&#226;&#129;&#182;, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't necessarily realistic even if it uses gettimeofday with a nominal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1&#206;&#188;s resolution.  At least with some (older?) Linuxes, and possibly other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernels, gettimeofday is limited to the kernel tick rate -- a few 100 Hz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I recall correctly.  I'd need convincing about 1ns generally for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real time clock too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyhow, experimentally, RHEL6-packaged mpich 3.1's wtime calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gettimeofday and not clock_gettime; likewise impi 4.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for fixing ompi, by the way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28910.php">http://www.open-mpi.org/community/lists/users/2016/04/28910.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28911.php">http://www.open-mpi.org/community/lists/users/2016/04/28911.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28912.php">http://www.open-mpi.org/community/lists/users/2016/04/28912.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28912.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
