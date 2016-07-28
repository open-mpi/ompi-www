<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 09:32:38 2016" -->
<!-- isoreceived="20160323133238" -->
<!-- sent="Wed, 23 Mar 2016 22:32:17 +0900" -->
<!-- isosent="20160323133217" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="CAAkFZ5t-CYmG3=pvhr+gWhwiM_TMZyyxLRmvcHhwQZagCTxKug_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcVHtOVPr3j1TzHeOHjx5dcy2RTD=XuuiqOe8Evcciks1VksA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-23 09:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28800.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28800.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ronald,
<br>
<p>the fix I mentioned landed into the v1.10 branch
<br>
<a href="https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62">https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62</a>
<br>
<p>can you please post your configure command line ?
<br>
<p>you can also try to
<br>
mpirun --mca btl self,vader,openib ...
<br>
to make sure your run will abort instead of falling back to tcp
<br>
<p>then you can
<br>
mpirun ... grep Cpus_allowed_list /proc/self/status
<br>
to confirm your tasks do not end up bound to the same cores when running on
<br>
two nodes.
<br>
<p>is your application known to scale on infiniband network ?
<br>
or did you naively hope it would scale ?
<br>
<p>at first, I recommend you run standard benchmark to make sure you get the
<br>
performance you expect from your infiniband network
<br>
(for example IMB or OSU benchmark)
<br>
and run this test in the same environment than your app (e.g. via a batch
<br>
manager if applicable)
<br>
<p>if you do not get the performance you expect, then I suggest you try the
<br>
stock gcc compiler shipped with your distro and see if it helps.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank  you! Here are the answers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not try a previous release of gcc.
</span><br>
<span class="quotelev1">&gt; I built from a tarball.
</span><br>
<span class="quotelev1">&gt; What should I do about the iirc issue--how should I check?
</span><br>
<span class="quotelev1">&gt; Are there any flags I should be using for infiniband? Is this a
</span><br>
<span class="quotelev1">&gt; problem with latency?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ron
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 23, 2016 at 8:13 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ronald,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; did you try to build openmpi with a previous gcc release ?
</span><br>
<span class="quotelev2">&gt; &gt; if yes, what about the performance ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; did you build openmpi from a tarball or from git ?
</span><br>
<span class="quotelev2">&gt; &gt; if from git and without VPATH, then you need to
</span><br>
<span class="quotelev2">&gt; &gt; configure with --disable-debug
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; iirc, one issue was identified previously
</span><br>
<span class="quotelev2">&gt; &gt; (gcc optimization that prevents the memory wrapper from behaving as
</span><br>
<span class="quotelev2">&gt; &gt; expected) and I am not sure the fix landed in v1.10 branch nor master ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the info about gcc 6.0.0
</span><br>
<span class="quotelev2">&gt; &gt; now this is supported on a free compiler
</span><br>
<span class="quotelev2">&gt; &gt; (cray and intel already support that, but they are commercial compilers),
</span><br>
<span class="quotelev2">&gt; &gt; I will resume my work on supporting this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on two nodes. It seems that quad-infiniband should do better than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ideas of what to do to get usable performance? Thank you!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bstatus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         base lid:        0x1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         sm lid:          0x1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         rate:            56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         link_layer:      InfiniBand
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ron
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Professor Dr. Ronald Cohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ludwig Maximilians Universit&#195;&#164;t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Theresienstrasse 41 Room 207
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M&#195;&#188;nchen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 80333
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Deutschland
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ronald.cohen_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; skype: ronaldcohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +49 (0) 89 74567980
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ronald Cohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Geophysical Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Carnegie Institution
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5251 Broad Branch Rd., N.W.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Washington, D.C. 20015
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rcohen_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; office: 202-478-8937
</span><br>
<span class="quotelev3">&gt; &gt;&gt; skype: ronaldcohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ron Cohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recohen3_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28793.php">http://www.open-mpi.org/community/lists/users/2016/03/28793.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28794.php">http://www.open-mpi.org/community/lists/users/2016/03/28794.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28794.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28800.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28800.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
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
