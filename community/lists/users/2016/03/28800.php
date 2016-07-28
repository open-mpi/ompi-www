<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 10:21:22 2016" -->
<!-- isoreceived="20160323142122" -->
<!-- sent="Wed, 23 Mar 2016 10:21:06 -0400" -->
<!-- isosent="20160323142106" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="CAEcVHtOKRiCq5eHDgBSoWmDCENK8aeb+ezazHXFm0+d+uraXSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5t-CYmG3=pvhr+gWhwiM_TMZyyxLRmvcHhwQZagCTxKug_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-23 10:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28799.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The configure line was simply:
<br>
<p>&nbsp;./configure --prefix=/home/rcohen
<br>
<p>when I run:
<br>
<p>mpirun --mca btl self,vader,openib ...
<br>
<p>I get the same lousy results: 1.5 GFLOPS
<br>
<p>The output of the grep is:
<br>
<p>Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
Cpus_allowed_list:      0-7
<br>
Cpus_allowed_list:      8-15
<br>
<p><p>linpack *HPL) certainly is known to scale fine.
<br>
<p>I am running a standard benchmark--HPL--linpack.
<br>
<p>I think it is not the compiler, but I could try that.
<br>
<p>Ron
<br>
<p><p><p><p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Wed, Mar 23, 2016 at 9:32 AM, Gilles Gouaillardet
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt; Ronald,
&gt;
&gt; the fix I mentioned landed into the v1.10 branch
&gt; <a href="https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62">https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62</a>
&gt;
&gt; can you please post your configure command line ?
&gt;
&gt; you can also try to
&gt; mpirun --mca btl self,vader,openib ...
&gt; to make sure your run will abort instead of falling back to tcp
&gt;
&gt; then you can
&gt; mpirun ... grep Cpus_allowed_list /proc/self/status
&gt; to confirm your tasks do not end up bound to the same cores when running on
&gt; two nodes.
&gt;
&gt; is your application known to scale on infiniband network ?
&gt; or did you naively hope it would scale ?
&gt;
&gt; at first, I recommend you run standard benchmark to make sure you get the
&gt; performance you expect from your infiniband network
&gt; (for example IMB or OSU benchmark)
&gt; and run this test in the same environment than your app (e.g. via a batch
&gt; manager if applicable)
&gt;
&gt; if you do not get the performance you expect, then I suggest you try the
&gt; stock gcc compiler shipped with your distro and see if it helps.
&gt;
&gt; Cheers,
&gt;
&gt; Gilles
&gt;
&gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; Thank  you! Here are the answers:
&gt;&gt;
&gt;&gt; I did not try a previous release of gcc.
&gt;&gt; I built from a tarball.
&gt;&gt; What should I do about the iirc issue--how should I check?
&gt;&gt; Are there any flags I should be using for infiniband? Is this a
&gt;&gt; problem with latency?
&gt;&gt;
&gt;&gt; Ron
&gt;&gt;
&gt;&gt;
&gt;&gt; ---
&gt;&gt; Ron Cohen
&gt;&gt; recohen3_at_[hidden]
&gt;&gt; skypename: ronaldcohen
&gt;&gt; twitter: @recohen3
&gt;&gt;
&gt;&gt;
&gt;&gt; On Wed, Mar 23, 2016 at 8:13 AM, Gilles Gouaillardet
&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt;&gt; &gt; Ronald,
&gt;&gt; &gt;
&gt;&gt; &gt; did you try to build openmpi with a previous gcc release ?
&gt;&gt; &gt; if yes, what about the performance ?
&gt;&gt; &gt;
&gt;&gt; &gt; did you build openmpi from a tarball or from git ?
&gt;&gt; &gt; if from git and without VPATH, then you need to
&gt;&gt; &gt; configure with --disable-debug
&gt;&gt; &gt;
&gt;&gt; &gt; iirc, one issue was identified previously
&gt;&gt; &gt; (gcc optimization that prevents the memory wrapper from behaving as
&gt;&gt; &gt; expected) and I am not sure the fix landed in v1.10 branch nor master
&gt;&gt; &gt; ...
&gt;&gt; &gt;
&gt;&gt; &gt; thanks for the info about gcc 6.0.0
&gt;&gt; &gt; now this is supported on a free compiler
&gt;&gt; &gt; (cray and intel already support that, but they are commercial
&gt;&gt; &gt; compilers),
&gt;&gt; &gt; I will resume my work on supporting this
&gt;&gt; &gt;
&gt;&gt; &gt; Cheers,
&gt;&gt; &gt;
&gt;&gt; &gt; Gilles
&gt;&gt; &gt;
&gt;&gt; &gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
&gt;&gt; &gt;&gt; on two nodes. It seems that quad-infiniband should do better than
&gt;&gt; &gt;&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
&gt;&gt; &gt;&gt; ideas of what to do to get usable performance? Thank you!
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; bstatus
&gt;&gt; &gt;&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;&gt; &gt;&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
&gt;&gt; &gt;&gt;         base lid:        0x1
&gt;&gt; &gt;&gt;         sm lid:          0x1
&gt;&gt; &gt;&gt;         state:           4: ACTIVE
&gt;&gt; &gt;&gt;         phys state:      5: LinkUp
&gt;&gt; &gt;&gt;         rate:            56 Gb/sec (4X FDR)
&gt;&gt; &gt;&gt;         link_layer:      InfiniBand
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; Ron
&gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; Professor Dr. Ronald Cohen
&gt;&gt; &gt;&gt; Ludwig Maximilians Universit&#195;&#164;t
&gt;&gt; &gt;&gt; Theresienstrasse 41 Room 207
&gt;&gt; &gt;&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
&gt;&gt; &gt;&gt; M&#195;&#188;nchen
&gt;&gt; &gt;&gt; 80333
&gt;&gt; &gt;&gt; Deutschland
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; ronald.cohen_at_[hidden]
&gt;&gt; &gt;&gt; skype: ronaldcohen
&gt;&gt; &gt;&gt; +49 (0) 89 74567980
&gt;&gt; &gt;&gt; ---
&gt;&gt; &gt;&gt; Ronald Cohen
&gt;&gt; &gt;&gt; Geophysical Laboratory
&gt;&gt; &gt;&gt; Carnegie Institution
&gt;&gt; &gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt; &gt;&gt; Washington, D.C. 20015
&gt;&gt; &gt;&gt; rcohen_at_[hidden]
&gt;&gt; &gt;&gt; office: 202-478-8937
&gt;&gt; &gt;&gt; skype: ronaldcohen
&gt;&gt; &gt;&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
&gt;&gt; &gt;&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; ---
&gt;&gt; &gt;&gt; Ron Cohen
&gt;&gt; &gt;&gt; recohen3_at_[hidden]
&gt;&gt; &gt;&gt; skypename: ronaldcohen
&gt;&gt; &gt;&gt; twitter: @recohen3
&gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; Link to this post:
&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; users mailing list
&gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt; Link to this post:
&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28793.php">http://www.open-mpi.org/community/lists/users/2016/03/28793.php</a>
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28794.php">http://www.open-mpi.org/community/lists/users/2016/03/28794.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28796.php">http://www.open-mpi.org/community/lists/users/2016/03/28796.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28799.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28801.php">Gilles Gouaillardet: "[OMPI users]  terrible infiniband performance for"</a>
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
