<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 08:14:01 2016" -->
<!-- isoreceived="20160323121401" -->
<!-- sent="Wed, 23 Mar 2016 21:13:37 +0900" -->
<!-- isosent="20160323121337" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="CAAkFZ5uxm+JwgMH5XKw1-7QgqqmjsKVMULq04HoFaTrM5Umzhg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcVHtMjcU8goLTe4a=2OJhvswS0HvkrcZO805VrYd1HiZUf7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] terrible infiniband performance for<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 08:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28792.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message"</a>
<li><strong>In reply to:</strong> <a href="28791.php">Ronald Cohen: "[OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ronald,
<br>
<p>did you try to build openmpi with a previous gcc release ?
<br>
if yes, what about the performance ?
<br>
<p>did you build openmpi from a tarball or from git ?
<br>
if from git and without VPATH, then you need to
<br>
configure with --disable-debug
<br>
<p>iirc, one issue was identified previously
<br>
(gcc optimization that prevents the memory wrapper from behaving as
<br>
expected) and I am not sure the fix landed in v1.10 branch nor master ...
<br>
<p>thanks for the info about gcc 6.0.0
<br>
now this is supported on a free compiler
<br>
(cray and intel already support that, but they are commercial compilers),
<br>
I will resume my work on supporting this
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
</span><br>
<span class="quotelev1">&gt; on two nodes. It seems that quad-infiniband should do better than
</span><br>
<span class="quotelev1">&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
</span><br>
<span class="quotelev1">&gt; ideas of what to do to get usable performance? Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bstatus
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
</span><br>
<span class="quotelev1">&gt;         base lid:        0x1
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev1">&gt;         link_layer:      InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ron
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Professor Dr. Ronald Cohen
</span><br>
<span class="quotelev1">&gt; Ludwig Maximilians Universit&#195;&#164;t
</span><br>
<span class="quotelev1">&gt; Theresienstrasse 41 Room 207
</span><br>
<span class="quotelev1">&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
</span><br>
<span class="quotelev1">&gt; M&#195;&#188;nchen
</span><br>
<span class="quotelev1">&gt; 80333
</span><br>
<span class="quotelev1">&gt; Deutschland
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ronald.cohen_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; skype: ronaldcohen
</span><br>
<span class="quotelev1">&gt; +49 (0) 89 74567980
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ronald Cohen
</span><br>
<span class="quotelev1">&gt; Geophysical Laboratory
</span><br>
<span class="quotelev1">&gt; Carnegie Institution
</span><br>
<span class="quotelev1">&gt; 5251 Broad Branch Rd., N.W.
</span><br>
<span class="quotelev1">&gt; Washington, D.C. 20015
</span><br>
<span class="quotelev1">&gt; rcohen_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; office: 202-478-8937
</span><br>
<span class="quotelev1">&gt; skype: ronaldcohen
</span><br>
<span class="quotelev1">&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ron Cohen
</span><br>
<span class="quotelev1">&gt; recohen3_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev1">&gt; twitter: @recohen3
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28792.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message"</a>
<li><strong>In reply to:</strong> <a href="28791.php">Ronald Cohen: "[OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
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
