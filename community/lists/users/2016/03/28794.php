<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 08:47:25 2016" -->
<!-- isoreceived="20160323124725" -->
<!-- sent="Wed, 23 Mar 2016 08:47:02 -0400" -->
<!-- isosent="20160323124702" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="CAEcVHtOVPr3j1TzHeOHjx5dcy2RTD=XuuiqOe8Evcciks1VksA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uxm+JwgMH5XKw1-7QgqqmjsKVMULq04HoFaTrM5Umzhg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 08:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank  you! Here are the answers:
<br>
<p>I did not try a previous release of gcc.
<br>
I built from a tarball.
<br>
What should I do about the iirc issue--how should I check?
<br>
Are there any flags I should be using for infiniband? Is this a
<br>
problem with latency?
<br>
<p>Ron
<br>
<p><p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Wed, Mar 23, 2016 at 8:13 AM, Gilles Gouaillardet
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt; Ronald,
&gt;
&gt; did you try to build openmpi with a previous gcc release ?
&gt; if yes, what about the performance ?
&gt;
&gt; did you build openmpi from a tarball or from git ?
&gt; if from git and without VPATH, then you need to
&gt; configure with --disable-debug
&gt;
&gt; iirc, one issue was identified previously
&gt; (gcc optimization that prevents the memory wrapper from behaving as
&gt; expected) and I am not sure the fix landed in v1.10 branch nor master ...
&gt;
&gt; thanks for the info about gcc 6.0.0
&gt; now this is supported on a free compiler
&gt; (cray and intel already support that, but they are commercial compilers),
&gt; I will resume my work on supporting this
&gt;
&gt; Cheers,
&gt;
&gt; Gilles
&gt;
&gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
&gt;&gt; on two nodes. It seems that quad-infiniband should do better than
&gt;&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
&gt;&gt; ideas of what to do to get usable performance? Thank you!
&gt;&gt;
&gt;&gt; bstatus
&gt;&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
&gt;&gt;         base lid:        0x1
&gt;&gt;         sm lid:          0x1
&gt;&gt;         state:           4: ACTIVE
&gt;&gt;         phys state:      5: LinkUp
&gt;&gt;         rate:            56 Gb/sec (4X FDR)
&gt;&gt;         link_layer:      InfiniBand
&gt;&gt;
&gt;&gt; Ron
&gt;&gt; --
&gt;&gt;
&gt;&gt; Professor Dr. Ronald Cohen
&gt;&gt; Ludwig Maximilians Universit&#195;&#164;t
&gt;&gt; Theresienstrasse 41 Room 207
&gt;&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
&gt;&gt; M&#195;&#188;nchen
&gt;&gt; 80333
&gt;&gt; Deutschland
&gt;&gt;
&gt;&gt;
&gt;&gt; ronald.cohen_at_[hidden]
&gt;&gt; skype: ronaldcohen
&gt;&gt; +49 (0) 89 74567980
&gt;&gt; ---
&gt;&gt; Ronald Cohen
&gt;&gt; Geophysical Laboratory
&gt;&gt; Carnegie Institution
&gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt; Washington, D.C. 20015
&gt;&gt; rcohen_at_[hidden]
&gt;&gt; office: 202-478-8937
&gt;&gt; skype: ronaldcohen
&gt;&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
&gt;&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; ---
&gt;&gt; Ron Cohen
&gt;&gt; recohen3_at_[hidden]
&gt;&gt; skypename: ronaldcohen
&gt;&gt; twitter: @recohen3
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28793.php">http://www.open-mpi.org/community/lists/users/2016/03/28793.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28795.php">Joshua Ladd: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
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
