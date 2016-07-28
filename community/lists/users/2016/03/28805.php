<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 11:11:28 2016" -->
<!-- isoreceived="20160323151128" -->
<!-- sent="Wed, 23 Mar 2016 11:11:21 -0400" -->
<!-- isosent="20160323151121" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="CAEcVHtOsanRzNRou8XOAYm+F_w8_yg5oVpaS5fKsD604gon9gQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56F2B120.8070206_at_central.uh.edu" -->
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
<strong>Date:</strong> 2016-03-23 11:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28804.php">Edgar Gabriel: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28804.php">Edgar Gabriel: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have any parameters set other than the defaults--thank you!
<br>
<p>Ron
<br>
<p><pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Wed, Mar 23, 2016 at 11:07 AM, Edgar Gabriel &lt;egabriel_at_[hidden]&gt; wrote:
&gt; not sure whether it is relevant in this case, but I spent in January nearly
&gt; one week to figure out why the openib component was running very slow with
&gt; the new Open MPI releases (though it was the 2.x series at that time), and
&gt; the culprit turned out to be the
&gt; btl_openib_flags parameter. I used to set this parameter in former releases
&gt; to get good performance on my cluster, but it lead to absolutely disastrous
&gt; performance with the new version. So if you have any parameters set, try to
&gt; remove them completely and see whether this makes a difference.
&gt;
&gt; Edgar
&gt;
&gt;
&gt;
&gt; On 3/23/2016 10:01 AM, Gilles Gouaillardet wrote:
&gt;
&gt; Ronald,
&gt;
&gt; out of curiosity, what kind of performance do you get with tcp and two nodes
&gt; ?
&gt; e.g.
&gt; mpirun --mca tcp,vader,self ...
&gt;
&gt; before that, you can
&gt; mpirun uptime
&gt; to ensure all your nodes are free
&gt; (e.g. no process was left running by an other job)
&gt;
&gt; you might also want to allocate your nodes exclusively (iirc, qsub -x) to
&gt; avoid side effects
&gt;
&gt; Cheers,
&gt;
&gt; Gilles
&gt;
&gt; On Wednesday, March 23, 2016, Gilles Gouaillardet
&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; Ronald,
&gt;&gt;
&gt;&gt; first, can you make sure tm was built ?
&gt;&gt; the easiest way us to
&gt;&gt; configure --with-tm ...
&gt;&gt; it will crash if tm is not found
&gt;&gt; if pbs/torque is not installed in a standard location, then you have to
&gt;&gt; configure --with-tm=&lt;dir&gt;
&gt;&gt;
&gt;&gt; then you can omit -hostfile from your mpirun command line
&gt;&gt;
&gt;&gt; hpl is known to scale, assuming the data is big enough, you use an
&gt;&gt; optimized blas, and the right number of openmp threads
&gt;&gt; (e.g. if you run 8 tasks per node, the you can have up to 2 openmp
&gt;&gt; threads, but if you use 8 or 16 threads, then performance will be worst)
&gt;&gt; first run xhpl one node, and when you get 80% of the peak performance,
&gt;&gt; then you can run on two nodes.
&gt;&gt;
&gt;&gt; Cheers,
&gt;&gt;
&gt;&gt; Gilles
&gt;&gt;
&gt;&gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; The configure line was simply:
&gt;&gt;&gt;
&gt;&gt;&gt;  ./configure --prefix=/home/rcohen
&gt;&gt;&gt;
&gt;&gt;&gt; when I run:
&gt;&gt;&gt;
&gt;&gt;&gt; mpirun --mca btl self,vader,openib ...
&gt;&gt;&gt;
&gt;&gt;&gt; I get the same lousy results: 1.5 GFLOPS
&gt;&gt;&gt;
&gt;&gt;&gt; The output of the grep is:
&gt;&gt;&gt;
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt; Cpus_allowed_list:      0-7
&gt;&gt;&gt; Cpus_allowed_list:      8-15
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; linpack *HPL) certainly is known to scale fine.
&gt;&gt;&gt;
&gt;&gt;&gt; I am running a standard benchmark--HPL--linpack.
&gt;&gt;&gt;
&gt;&gt;&gt; I think it is not the compiler, but I could try that.
&gt;&gt;&gt;
&gt;&gt;&gt; Ron
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ---
&gt;&gt;&gt; Ron Cohen
&gt;&gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; twitter: @recohen3
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Wed, Mar 23, 2016 at 9:32 AM, Gilles Gouaillardet
&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt;&gt;&gt; &gt; Ronald,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; the fix I mentioned landed into the v1.10 branch
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; <a href="https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62">https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62</a>
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; can you please post your configure command line ?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; you can also try to
&gt;&gt;&gt; &gt; mpirun --mca btl self,vader,openib ...
&gt;&gt;&gt; &gt; to make sure your run will abort instead of falling back to tcp
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; then you can
&gt;&gt;&gt; &gt; mpirun ... grep Cpus_allowed_list /proc/self/status
&gt;&gt;&gt; &gt; to confirm your tasks do not end up bound to the same cores when
&gt;&gt;&gt; &gt; running on
&gt;&gt;&gt; &gt; two nodes.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; is your application known to scale on infiniband network ?
&gt;&gt;&gt; &gt; or did you naively hope it would scale ?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; at first, I recommend you run standard benchmark to make sure you get
&gt;&gt;&gt; &gt; the
&gt;&gt;&gt; &gt; performance you expect from your infiniband network
&gt;&gt;&gt; &gt; (for example IMB or OSU benchmark)
&gt;&gt;&gt; &gt; and run this test in the same environment than your app (e.g. via a
&gt;&gt;&gt; &gt; batch
&gt;&gt;&gt; &gt; manager if applicable)
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; if you do not get the performance you expect, then I suggest you try
&gt;&gt;&gt; &gt; the
&gt;&gt;&gt; &gt; stock gcc compiler shipped with your distro and see if it helps.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Cheers,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Gilles
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; Thank  you! Here are the answers:
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; I did not try a previous release of gcc.
&gt;&gt;&gt; &gt;&gt; I built from a tarball.
&gt;&gt;&gt; &gt;&gt; What should I do about the iirc issue--how should I check?
&gt;&gt;&gt; &gt;&gt; Are there any flags I should be using for infiniband? Is this a
&gt;&gt;&gt; &gt;&gt; problem with latency?
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; Ron
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; ---
&gt;&gt;&gt; &gt;&gt; Ron Cohen
&gt;&gt;&gt; &gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; &gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; &gt;&gt; twitter: @recohen3
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; On Wed, Mar 23, 2016 at 8:13 AM, Gilles Gouaillardet
&gt;&gt;&gt; &gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
&gt;&gt;&gt; &gt;&gt; &gt; Ronald,
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; did you try to build openmpi with a previous gcc release ?
&gt;&gt;&gt; &gt;&gt; &gt; if yes, what about the performance ?
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; did you build openmpi from a tarball or from git ?
&gt;&gt;&gt; &gt;&gt; &gt; if from git and without VPATH, then you need to
&gt;&gt;&gt; &gt;&gt; &gt; configure with --disable-debug
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; iirc, one issue was identified previously
&gt;&gt;&gt; &gt;&gt; &gt; (gcc optimization that prevents the memory wrapper from behaving as
&gt;&gt;&gt; &gt;&gt; &gt; expected) and I am not sure the fix landed in v1.10 branch nor
&gt;&gt;&gt; &gt;&gt; &gt; master
&gt;&gt;&gt; &gt;&gt; &gt; ...
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; thanks for the info about gcc 6.0.0
&gt;&gt;&gt; &gt;&gt; &gt; now this is supported on a free compiler
&gt;&gt;&gt; &gt;&gt; &gt; (cray and intel already support that, but they are commercial
&gt;&gt;&gt; &gt;&gt; &gt; compilers),
&gt;&gt;&gt; &gt;&gt; &gt; I will resume my work on supporting this
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; Cheers,
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; Gilles
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt;
&gt;&gt;&gt; &gt;&gt; &gt; wrote:
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8
&gt;&gt;&gt; &gt;&gt; &gt;&gt; cores
&gt;&gt;&gt; &gt;&gt; &gt;&gt; on two nodes. It seems that quad-infiniband should do better than
&gt;&gt;&gt; &gt;&gt; &gt;&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
&gt;&gt;&gt; &gt;&gt; &gt;&gt; ideas of what to do to get usable performance? Thank you!
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; bstatus
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         base lid:        0x1
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         sm lid:          0x1
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         state:           4: ACTIVE
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         phys state:      5: LinkUp
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         rate:            56 Gb/sec (4X FDR)
&gt;&gt;&gt; &gt;&gt; &gt;&gt;         link_layer:      InfiniBand
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ron
&gt;&gt;&gt; &gt;&gt; &gt;&gt; --
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Professor Dr. Ronald Cohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ludwig Maximilians Universit&#195;&#164;t
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Theresienstrasse 41 Room 207
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
&gt;&gt;&gt; &gt;&gt; &gt;&gt; M&#195;&#188;nchen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; 80333
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Deutschland
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; ronald.cohen_at_[hidden]
&gt;&gt;&gt; &gt;&gt; &gt;&gt; skype: ronaldcohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; +49 (0) 89 74567980
&gt;&gt;&gt; &gt;&gt; &gt;&gt; ---
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ronald Cohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Geophysical Laboratory
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Carnegie Institution
&gt;&gt;&gt; &gt;&gt; &gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Washington, D.C. 20015
&gt;&gt;&gt; &gt;&gt; &gt;&gt; rcohen_at_[hidden]
&gt;&gt;&gt; &gt;&gt; &gt;&gt; office: 202-478-8937
&gt;&gt;&gt; &gt;&gt; &gt;&gt; skype: ronaldcohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
&gt;&gt;&gt; &gt;&gt; &gt;&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt;&gt; &gt;&gt; &gt;&gt; ---
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ron Cohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; recohen3_at_[hidden]
&gt;&gt;&gt; &gt;&gt; &gt;&gt; skypename: ronaldcohen
&gt;&gt;&gt; &gt;&gt; &gt;&gt; twitter: @recohen3
&gt;&gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; &gt;&gt; &gt;&gt; Link to this post:
&gt;&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt;
&gt;&gt;&gt; &gt;&gt; &gt; _______________________________________________
&gt;&gt;&gt; &gt;&gt; &gt; users mailing list
&gt;&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
&gt;&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; &gt;&gt; &gt; Link to this post:
&gt;&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28793.php">http://www.open-mpi.org/community/lists/users/2016/03/28793.php</a>
&gt;&gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt;&gt; &gt;&gt; users mailing list
&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; &gt;&gt; Link to this post:
&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28794.php">http://www.open-mpi.org/community/lists/users/2016/03/28794.php</a>
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; _______________________________________________
&gt;&gt;&gt; &gt; users mailing list
&gt;&gt;&gt; &gt; users_at_[hidden]
&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; &gt; Link to this post:
&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28796.php">http://www.open-mpi.org/community/lists/users/2016/03/28796.php</a>
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28800.php">http://www.open-mpi.org/community/lists/users/2016/03/28800.php</a>
&gt;
&gt;
&gt; --
&gt; Edgar Gabriel
&gt; Associate Professor
&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
&gt; Department of Computer Science          University of Houston
&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
&gt; --
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28804.php">http://www.open-mpi.org/community/lists/users/2016/03/28804.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28804.php">Edgar Gabriel: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28804.php">Edgar Gabriel: "Re: [OMPI users] terrible infiniband performance for"</a>
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
