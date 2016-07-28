<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 11:07:17 2016" -->
<!-- isoreceived="20160323150717" -->
<!-- sent="Wed, 23 Mar 2016 10:07:12 -0500" -->
<!-- isosent="20160323150712" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for" -->
<!-- id="56F2B120.8070206_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5v4U0NF57kKrzoAdit9pfqS4DvtEBDAueokbWw4FosU=g_at_mail.gmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 11:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28803.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28803.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
not sure whether it is relevant in this case, but I spent in January 
<br>
nearly one week to figure out why the openib component was running very 
<br>
slow with the new Open MPI releases (though it was the 2.x series at 
<br>
that time), and the culprit turned out to be the
<br>
btl_openib_flags parameter. I used to set this parameter in former 
<br>
releases to get good performance on my cluster, but it lead to 
<br>
absolutely disastrous performance with the new version. So if you have 
<br>
any parameters set, try to remove them completely and see whether this 
<br>
makes a difference.
<br>
<p>Edgar
<br>
<p><p>On 3/23/2016 10:01 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ronald,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out of curiosity, what kind of performance do you get with tcp and two 
</span><br>
<span class="quotelev1">&gt; nodes ?
</span><br>
<span class="quotelev1">&gt; e.g.
</span><br>
<span class="quotelev1">&gt; mpirun --mca tcp,vader,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before that, you can
</span><br>
<span class="quotelev1">&gt; mpirun uptime
</span><br>
<span class="quotelev1">&gt; to ensure all your nodes are free
</span><br>
<span class="quotelev1">&gt; (e.g. no process was left running by an other job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you might also want to allocate your nodes exclusively (iirc, qsub -x) 
</span><br>
<span class="quotelev1">&gt; to avoid side effects
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
<span class="quotelev1">&gt; On Wednesday, March 23, 2016, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ronald,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     first, can you make sure tm was built ?
</span><br>
<span class="quotelev1">&gt;     the easiest way us to
</span><br>
<span class="quotelev1">&gt;     configure --with-tm ...
</span><br>
<span class="quotelev1">&gt;     it will crash if tm is not found
</span><br>
<span class="quotelev1">&gt;     if pbs/torque is not installed in a standard location, then you
</span><br>
<span class="quotelev1">&gt;     have to
</span><br>
<span class="quotelev1">&gt;     configure --with-tm=&lt;dir&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     then you can omit -hostfile from your mpirun command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hpl is known to scale, assuming the data is big enough, you use an
</span><br>
<span class="quotelev1">&gt;     optimized blas, and the right number of openmp threads
</span><br>
<span class="quotelev1">&gt;     (e.g. if you run 8 tasks per node, the you can have up to 2 openmp
</span><br>
<span class="quotelev1">&gt;     threads, but if you use 8 or 16 threads, then performance will be
</span><br>
<span class="quotelev1">&gt;     worst)
</span><br>
<span class="quotelev1">&gt;     first run xhpl one node, and when you get 80% of the peak
</span><br>
<span class="quotelev1">&gt;     performance, then you can run on two nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Wednesday, March 23, 2016, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The configure line was simply:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          ./configure --prefix=/home/rcohen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         when I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpirun --mca btl self,vader,openib ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I get the same lousy results: 1.5 GFLOPS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The output of the grep is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      0-7
</span><br>
<span class="quotelev1">&gt;         Cpus_allowed_list:      8-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         linpack *HPL) certainly is known to scale fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am running a standard benchmark--HPL--linpack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I think it is not the compiler, but I could try that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Ron
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ---
</span><br>
<span class="quotelev1">&gt;         Ron Cohen
</span><br>
<span class="quotelev1">&gt;         recohen3_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         skypename: ronaldcohen
</span><br>
<span class="quotelev1">&gt;         twitter: @recohen3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Wed, Mar 23, 2016 at 9:32 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;         &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;         &gt; Ronald,
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; the fix I mentioned landed into the v1.10 branch
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev1">&gt;         <a href="https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62">https://github.com/open-mpi/ompi-release/commit/c376994b81030cfa380c29d5b8f60c3e53d3df62</a>
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; can you please post your configure command line ?
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; you can also try to
</span><br>
<span class="quotelev2">&gt;         &gt; mpirun --mca btl self,vader,openib ...
</span><br>
<span class="quotelev2">&gt;         &gt; to make sure your run will abort instead of falling back to tcp
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; then you can
</span><br>
<span class="quotelev2">&gt;         &gt; mpirun ... grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev2">&gt;         &gt; to confirm your tasks do not end up bound to the same cores
</span><br>
<span class="quotelev1">&gt;         when running on
</span><br>
<span class="quotelev2">&gt;         &gt; two nodes.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; is your application known to scale on infiniband network ?
</span><br>
<span class="quotelev2">&gt;         &gt; or did you naively hope it would scale ?
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; at first, I recommend you run standard benchmark to make
</span><br>
<span class="quotelev1">&gt;         sure you get the
</span><br>
<span class="quotelev2">&gt;         &gt; performance you expect from your infiniband network
</span><br>
<span class="quotelev2">&gt;         &gt; (for example IMB or OSU benchmark)
</span><br>
<span class="quotelev2">&gt;         &gt; and run this test in the same environment than your app
</span><br>
<span class="quotelev1">&gt;         (e.g. via a batch
</span><br>
<span class="quotelev2">&gt;         &gt; manager if applicable)
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; if you do not get the performance you expect, then I suggest
</span><br>
<span class="quotelev1">&gt;         you try the
</span><br>
<span class="quotelev2">&gt;         &gt; stock gcc compiler shipped with your distro and see if it helps.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Gilles
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; On Wednesday, March 23, 2016, Ronald Cohen
</span><br>
<span class="quotelev1">&gt;         &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Thank  you! Here are the answers:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; I did not try a previous release of gcc.
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; I built from a tarball.
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; What should I do about the iirc issue--how should I check?
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Are there any flags I should be using for infiniband? Is this a
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; problem with latency?
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Ron
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Ron Cohen
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt;
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; On Wed, Mar 23, 2016 at 8:13 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; Ronald,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; did you try to build openmpi with a previous gcc release ?
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; if yes, what about the performance ?
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; did you build openmpi from a tarball or from git ?
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; if from git and without VPATH, then you need to
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; configure with --disable-debug
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; iirc, one issue was identified previously
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; (gcc optimization that prevents the memory wrapper from
</span><br>
<span class="quotelev1">&gt;         behaving as
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; expected) and I am not sure the fix landed in v1.10
</span><br>
<span class="quotelev1">&gt;         branch nor master
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; thanks for the info about gcc 6.0.0
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; now this is supported on a free compiler
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; (cray and intel already support that, but they are commercial
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; compilers),
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; I will resume my work on supporting this
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; On Wednesday, March 23, 2016, Ronald Cohen
</span><br>
<span class="quotelev1">&gt;         &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP
</span><br>
<span class="quotelev1">&gt;         running 8 cores
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; on two nodes. It seems that quad-infiniband should do
</span><br>
<span class="quotelev1">&gt;         better than
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0
</span><br>
<span class="quotelev1">&gt;         20160317 . Any
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; ideas of what to do to get usable performance? Thank you!
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; bstatus
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         default gid:
</span><br>
<span class="quotelev1">&gt;          fe80:0000:0000:0000:0002:c903:00ec:9301
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         base lid:        0x1
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         rate:            56 Gb/sec (4X FDR)
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;         link_layer:      InfiniBand
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Ron
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Professor Dr. Ronald Cohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Ludwig Maximilians Universit&#195;&#164;t
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Theresienstrasse 41 Room 207
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; M&#195;&#188;nchen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; 80333
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Deutschland
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; ronald.cohen_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; skype: ronaldcohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; +49 (0) 89 74567980
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Ronald Cohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Geophysical Laboratory
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Carnegie Institution
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; 5251 Broad Branch Rd., N.W.
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Washington, D.C. 20015
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; rcohen_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; office: 202-478-8937
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; skype: ronaldcohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Ron Cohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; twitter: @recohen3
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;         &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/03/28791.php">http://www.open-mpi.org/community/lists/users/2016/03/28791.php</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;         &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/03/28793.php">http://www.open-mpi.org/community/lists/users/2016/03/28793.php</a>
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;         &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28794.php">http://www.open-mpi.org/community/lists/users/2016/03/28794.php</a>
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;         &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;         &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;         &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;         &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;         &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28796.php">http://www.open-mpi.org/community/lists/users/2016/03/28796.php</a>
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/03/28800.php">http://www.open-mpi.org/community/lists/users/2016/03/28800.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28803.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28803.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28805.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
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
