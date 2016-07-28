<?
$subject_val = "Re: [OMPI users] Problem with the 1.8.8 version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 10:49:59 2015" -->
<!-- isoreceived="20151204154959" -->
<!-- sent="Sat, 5 Dec 2015 00:49:55 +0900" -->
<!-- isosent="20151204154955" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with the 1.8.8 version" -->
<!-- id="CAAkFZ5seDsu-T=X_dXxLiCK7d=ai1Nh4hPonU0+kDMiycEFzzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5661A8B0.5020704_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with the 1.8.8 version<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-04 10:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<li><strong>In reply to:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Caroline,
<br>
<p>I recommend you download and install OpenMPI 1.10.1 instead.
<br>
<p>Iirc, I backported the required changes in
<br>
<a href="https://github.com/open-mpi/ompi-release/commit/7dbae1f5cd92726d0f1981d9eb91796548070a2a">https://github.com/open-mpi/ompi-release/commit/7dbae1f5cd92726d0f1981d9eb91796548070a2a</a>
<br>
This is more likely to apply correctly on 1.8.8
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, December 4, 2015, Baldassari Caroline &lt;carolineb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed OpenMPI 1.8.8 (the last version 1.8.8 downloaded on your
</span><br>
<span class="quotelev1">&gt; site) on a cluster using SLES 11 SP3 with OFED 1.5.4 and I have the problem:
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12) like described in:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27407.php">http://www.open-mpi.org/community/lists/users/2015/08/27407.php</a>
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17729.php">http://www.open-mpi.org/community/lists/devel/2015/08/17729.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw the fix of Gilles in <a href="https://github.com/open-mpi/ompi/pull/782">https://github.com/open-mpi/ompi/pull/782</a> but
</span><br>
<span class="quotelev1">&gt; the problem is that I don't have the files:
</span><br>
<span class="quotelev1">&gt; config/opal_check_openfabrics.m4
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/openib/btl_open_xrc.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have, instead, this two files:
</span><br>
<span class="quotelev1">&gt; config/ompi_check_openfabrics.m4
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_open_xrc.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to simply modify this two files like in the fix but I didn't
</span><br>
<span class="quotelev1">&gt; manage to do the make all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have 2 questions:
</span><br>
<span class="quotelev1">&gt; Is it the good version that I have donwloaded?
</span><br>
<span class="quotelev1">&gt; How can I have the fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; Caroline Baldassari (SGI)
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28133.php">http://www.open-mpi.org/community/lists/users/2015/12/28133.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28135.php">Carl Ponder: "[OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>Previous message:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<li><strong>In reply to:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
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
