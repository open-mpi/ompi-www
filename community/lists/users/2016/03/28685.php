<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 07:25:33 2016" -->
<!-- isoreceived="20160311122533" -->
<!-- sent="Fri, 11 Mar 2016 21:25:32 +0900" -->
<!-- isosent="20160311122532" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="CAAkFZ5uP7VAK-9omG23tn5+iKK-ONtXv+4kiP2sxJdToh-KG3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D307082C.2891C%Gary.Jackson_at_jhuapl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Poor performance on Amazon EC2 with TCP<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 07:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28686.php">Saliya Ekanayake: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gary,
<br>
<p>I previously missed the fact you are running on a 10GbE network, and I
<br>
still assumes you are not running a debug build.
<br>
<p>maybe you need to increase send/recv buffer sizes
<br>
ompi_info --all | grep btl_tcp
<br>
will list the parameters that can be tuned,
<br>
then you can
<br>
mpirun --mca btl_tcp_&lt;name&gt; &lt;value&gt;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, March 11, 2016, Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I re-ran all experiments with 1.10.2 configured the way you specified. My
</span><br>
<span class="quotelev1">&gt; results are here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0">https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some remarks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. OpenMPI had poor performance relative to raw TCP and IMPI across
</span><br>
<span class="quotelev1">&gt;    all MTUs.
</span><br>
<span class="quotelev1">&gt;    2. Those issues appeared at larger message sizes.
</span><br>
<span class="quotelev1">&gt;    3. Intel MPI and raw TCP were comparable across message sizes and MTUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With respect to some other concerns:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. I verified that the MTU values I'm using are correct with tracepath.
</span><br>
<span class="quotelev1">&gt;    2. I am using a placement group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary Jackson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;&gt; on behalf
</span><br>
<span class="quotelev1">&gt; of Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, March 8, 2016 at 11:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Poor performance on Amazon EC2 with TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jackson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one more thing, how did you build openmpi ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you built from git (and without VPATH), then --enable-debug is
</span><br>
<span class="quotelev1">&gt; automatically set, and this is hurting performance.
</span><br>
<span class="quotelev1">&gt; if not already done, i recommend you download the latest openmpi tarball
</span><br>
<span class="quotelev1">&gt; (1.10.2) and
</span><br>
<span class="quotelev1">&gt; ./configure --with-platform=contrib/platform/optimized --prefix=...
</span><br>
<span class="quotelev1">&gt; last but not least, you can
</span><br>
<span class="quotelev1">&gt; mpirun --mca mpi_leave_pinned 1 &lt;your benchmark&gt;
</span><br>
<span class="quotelev1">&gt; (that being said, i am not sure this is useful with TCP networks ...)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/9/2016 11:34 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using instance types that support SR-IOV (aka. &quot;enhanced
</span><br>
<span class="quotelev1">&gt; networking&quot; in AWS), then turn it on. We saw huge differences when SR-IOV
</span><br>
<span class="quotelev1">&gt; is enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you start your instances with a placement group -- otherwise,
</span><br>
<span class="quotelev1">&gt; the instances can be data centers apart!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And check that jumbo frames are enabled properly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still, it is interesting that Intel MPI is getting a 2X speedup with
</span><br>
<span class="quotelev1">&gt; the same setup! Can you post the raw numbers so that we can take a deeper
</span><br>
<span class="quotelev1">&gt; look??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L. &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Gary.Jackson_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Gary.Jackson_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Gary.Jackson_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
</span><br>
<span class="quotelev2">&gt;&gt; half the performance for MPI over TCP as I do with raw TCP. Before I start
</span><br>
<span class="quotelev2">&gt;&gt; digging in to this more deeply, does anyone know what might cause that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, I see the same issues with MPICH, but I do not see
</span><br>
<span class="quotelev2">&gt;&gt; it with Intel MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Gary Jackson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28686.php">Saliya Ekanayake: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
