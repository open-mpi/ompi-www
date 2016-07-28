<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 03:12:17 2016" -->
<!-- isoreceived="20160408071217" -->
<!-- sent="Fri, 8 Apr 2016 03:12:16 -0400" -->
<!-- isosent="20160408071216" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAMJJpkVqa7MOKNjytQp76jACOBASWBJOZ0AdVFeBH-8-FW4h9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uKXZ57_HNO+JB8-Kqt3Bx6s1SxugacjrrUH8GbgU=O2rw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-08 03:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28907.php">David Froger: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>In reply to:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 7, 2016 at 4:19 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 7, 2016 at 9:28 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, the lesson seems to be that you shouldn't use mpi_wtime if you
</span><br>
<span class="quotelev2">&gt;&gt; need decent precision or realistic mpi_wtick across implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I certainly hope that this isn't the lesson anyone learns from this.  It
</span><br>
<span class="quotelev1">&gt; is extremely important to application developers that MPI_Wtime represent a
</span><br>
<span class="quotelev1">&gt; &quot;best effort&quot; implementation on every platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>+1
<br>
<p><p><span class="quotelev1">&gt; Other implementations of MPI have very accurate counters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This might be a discutable topic. A quick survey of some of the MPI
<br>
libraries available on a Linux cluster give the following precision for
<br>
MPI_Wtime implementation :
<br>
<p>mpich-3.1.4: wtick = 1.000000e-06
<br>
Intel(R) MPI Library 5.1.1 for Linux*: wtick = 1.000000e-06
<br>
ompi-1.10.2: wtick = 1.000000e-06
<br>
ompi-master: wtick = 1.000000e-09
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28906.php">http://www.open-mpi.org/community/lists/users/2016/04/28906.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28907.php">David Froger: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>In reply to:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
