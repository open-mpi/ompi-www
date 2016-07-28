<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 14:42:46 2016" -->
<!-- isoreceived="20160408184246" -->
<!-- sent="Fri, 8 Apr 2016 11:42:25 -0700" -->
<!-- isosent="20160408184225" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAGKz=uJ1MnwkfFRAUqmiNNt2xY1tUyKNSj43iq6ViKto+B0onA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tcNUkjW0W4EkFpnX9E040nUk20gANW8t_=qrZiRwoAHw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 14:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George:
<br>
<p>Indeed, MPI_Wtick is not always a good measure of the precision of
<br>
MPI_Wtime.  The way I would measure resolution is to call MPI_Wtime a few
<br>
million times.
<br>
<p>For example, on Blue Gene/Q, MPI_Wtime was ~220 cycles per call.  I don't
<br>
remember what MPI_Wtick returned, but I guess it was 1./1.6e9, which of
<br>
course is ~200 times smaller.
<br>
<p>On the other hand, an implementation based on gettimeofday might claim a
<br>
resolution of 1.e-6 in MPI_Wtick, but could take an arbitrarily long time,
<br>
depending on how the OS chooses to implement this system call.
<br>
<p>Jeff
<br>
<p>On Fri, Apr 8, 2016 at 7:26 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gettimeofday() uses (seconds, microseconds) to represent the time, and
</span><br>
<span class="quotelev1">&gt; hence, the resolution is hardcoded to 1 microsecond
</span><br>
<span class="quotelev1">&gt; clock_gettine() uses (seconds, nanoseconds) and hence the resolution is
</span><br>
<span class="quotelev1">&gt; hard coded to 1 nanosecond.
</span><br>
<span class="quotelev1">&gt; this is the max resolution, and it could be lower than that depending on
</span><br>
<span class="quotelev1">&gt; what gettimeofday() does under the hood.
</span><br>
<span class="quotelev1">&gt; /* I remember there was an issue with the first software stack of MPSS,
</span><br>
<span class="quotelev1">&gt; the Xeon phi o/s, and once in a while, the effective time resolution
</span><br>
<span class="quotelev1">&gt; dropped to 100 Hz, and the MPI application has no way to be made aware of
</span><br>
<span class="quotelev1">&gt; that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, in OpenMPI, you should not expect a resolution higher than
</span><br>
<span class="quotelev1">&gt; MPI_Wtick(),
</span><br>
<span class="quotelev1">&gt; and yes, it might be (way) worst than that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, April 8, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Other implementations of MPI have very accurate counters.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This might be a discutable topic. A quick survey of some of the MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries available on a Linux cluster give the following precision for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Wtime implementation :
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpich-3.1.4: wtick = 1.000000e-06
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Intel(R) MPI Library 5.1.1 for Linux*: wtick = 1.000000e-06
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi-1.10.2: wtick = 1.000000e-06
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi-master: wtick = 1.000000e-09
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you trust wtick anyhow?  OMPI 1.10 says it's always 10&#226;&#129;&#187;&#226;&#129;&#182;, which
</span><br>
<span class="quotelev2">&gt;&gt; isn't necessarily realistic even if it uses gettimeofday with a nominal
</span><br>
<span class="quotelev2">&gt;&gt; 1&#206;&#188;s resolution.  At least with some (older?) Linuxes, and possibly other
</span><br>
<span class="quotelev2">&gt;&gt; kernels, gettimeofday is limited to the kernel tick rate -- a few 100 Hz
</span><br>
<span class="quotelev2">&gt;&gt; if I recall correctly.  I'd need convincing about 1ns generally for the
</span><br>
<span class="quotelev2">&gt;&gt; real time clock too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, experimentally, RHEL6-packaged mpich 3.1's wtime calls
</span><br>
<span class="quotelev2">&gt;&gt; gettimeofday and not clock_gettime; likewise impi 4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for fixing ompi, by the way.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28910.php">http://www.open-mpi.org/community/lists/users/2016/04/28910.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28911.php">http://www.open-mpi.org/community/lists/users/2016/04/28911.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
