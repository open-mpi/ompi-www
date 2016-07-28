<?
$subject_val = "Re: [OMPI users] SLOAVx alltoallv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 09:28:53 2016" -->
<!-- isoreceived="20160506132853" -->
<!-- sent="Fri, 6 May 2016 22:28:52 +0900" -->
<!-- isosent="20160506132852" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLOAVx alltoallv" -->
<!-- id="CAAkFZ5s=MwsqNLN+jtoz3s-SNCKKjwt3Qh+nh7bMzmR7czPZ_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87inyrfkgd.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 09:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29113.php">Dave Love: "[OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Reply:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>I briefly read the papers and it suggests the SLOAVx algorithm is
<br>
implemented by the ml collective module
<br>
this module had some issues and was judged not good for production.
<br>
it is disabled by default in the v1.10 series, and has been simply removed
<br>
from the v2.x branch.
<br>
<p>you can either use (at your own risk ...) v1.10 or master with
<br>
mpirun --mca coll_ml_priority 100 ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 6, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At the risk of banging on too much about collectives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I came across a writeup of the &quot;SLOAVx&quot; algorithm for alltoallv
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.auburn.edu/~zzl0014/pubs/ccgrid13.pdf">http://www.auburn.edu/~zzl0014/pubs/ccgrid13.pdf</a>&gt;.  It was implemented
</span><br>
<span class="quotelev1">&gt; in OMPI with apparently good results, but I can't find any code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if anyone knows the story on that.  Was it not contributed, or
</span><br>
<span class="quotelev1">&gt; is it actually not worthwhile?  Otherwise, might it be worth investigating?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29113.php">http://www.open-mpi.org/community/lists/users/2016/05/29113.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29113.php">Dave Love: "[OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Reply:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
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
