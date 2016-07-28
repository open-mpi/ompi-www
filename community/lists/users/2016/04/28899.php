<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 10:03:01 2016" -->
<!-- isoreceived="20160406140301" -->
<!-- sent="Wed, 6 Apr 2016 10:02:59 -0400" -->
<!-- isosent="20160406140259" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAMJJpkUASS3NyXytLsBKQL-RC2pxLtbHr9mQraFecek=ufuxig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5v8nOwb-rRFK18S2OKZaitu16Z4TsaHxz+i5uC7d6JMng_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-06 10:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
git blame reports that the gettime patch is in master for the last 1 1/2
<br>
years (Nov 2014). Here is an untested patch (cherrypicked 00300f464d plus
<br>
few changes).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><p><p><p>On Wed, Apr 6, 2016 at 9:32 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, on v1.10, we likely use the number of cycles / cpu freq.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see opal_sys_timer_get_cycles in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h">https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot remember whether this is a monotonic timer.
</span><br>
<span class="quotelev1">&gt; (e.g. MPI_Wtime() invoked on a given cpu is always lower or equal to
</span><br>
<span class="quotelev1">&gt; MPI_Wtime() invoked later and on *any* cpu)
</span><br>
<span class="quotelev1">&gt; that could be the reason why we moved to clock_gettime() in master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; do you have a more precise recollection ?
</span><br>
<span class="quotelev1">&gt; shall we backport the us of clock_gettime() into v1.10 ?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, April 6, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Are you talking about different source?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On further investigation it looks so -- the development source does
</span><br>
<span class="quotelev2">&gt;&gt; feature clock_gettime, but the release doesn't.  Back to LD_PRELOAD...
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28897.php">http://www.open-mpi.org/community/lists/users/2016/04/28897.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28898.php">http://www.open-mpi.org/community/lists/users/2016/04/28898.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28899/00300f464d.patch">00300f464d.patch</a>
</ul>
<!-- attachment="00300f464d.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
