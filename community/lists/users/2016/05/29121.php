<?
$subject_val = "Re: [OMPI users] SLOAVx alltoallv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 09:32:58 2016" -->
<!-- isoreceived="20160506133258" -->
<!-- sent="Fri, 6 May 2016 09:32:56 -0400" -->
<!-- isosent="20160506133256" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLOAVx alltoallv" -->
<!-- id="CAG4F6z_RcUseeEOugTuU-+vLXn66OxQai+wRWUnepGDrKr4Otw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5s=MwsqNLN+jtoz3s-SNCKKjwt3Qh+nh7bMzmR7czPZ_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLOAVx alltoallv<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 09:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>In reply to:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It did not make it upstream.
<br>
<p><p>Josh
<br>
<p>On Fri, May 6, 2016 at 9:28 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I briefly read the papers and it suggests the SLOAVx algorithm is
</span><br>
<span class="quotelev1">&gt; implemented by the ml collective module
</span><br>
<span class="quotelev1">&gt; this module had some issues and was judged not good for production.
</span><br>
<span class="quotelev1">&gt; it is disabled by default in the v1.10 series, and has been simply removed
</span><br>
<span class="quotelev1">&gt; from the v2.x branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can either use (at your own risk ...) v1.10 or master with
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll_ml_priority 100 ...
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
<span class="quotelev1">&gt; On Friday, May 6, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the risk of banging on too much about collectives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came across a writeup of the &quot;SLOAVx&quot; algorithm for alltoallv
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.auburn.edu/~zzl0014/pubs/ccgrid13.pdf">http://www.auburn.edu/~zzl0014/pubs/ccgrid13.pdf</a>&gt;.  It was implemented
</span><br>
<span class="quotelev2">&gt;&gt; in OMPI with apparently good results, but I can't find any code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if anyone knows the story on that.  Was it not contributed, or
</span><br>
<span class="quotelev2">&gt;&gt; is it actually not worthwhile?  Otherwise, might it be worth
</span><br>
<span class="quotelev2">&gt;&gt; investigating?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29113.php">http://www.open-mpi.org/community/lists/users/2016/05/29113.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29120.php">http://www.open-mpi.org/community/lists/users/2016/05/29120.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>In reply to:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
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
