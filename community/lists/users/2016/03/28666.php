<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 23:07:13 2016" -->
<!-- isoreceived="20160309040713" -->
<!-- sent="Wed, 9 Mar 2016 13:07:14 +0900" -->
<!-- isosent="20160309040714" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="56DFA172.4050308_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHwLALP=F8NF3DUyGkMYLyFYtPOwiEVwX0m2BnV4L09DjEHbew_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 23:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jackson,
<br>
<p>one more thing, how did you build openmpi ?
<br>
<p>if you built from git (and without VPATH), then --enable-debug is 
<br>
automatically set, and this is hurting performance.
<br>
if not already done, i recommend you download the latest openmpi tarball 
<br>
(1.10.2) and
<br>
./configure --with-platform=contrib/platform/optimized --prefix=...
<br>
last but not least, you can
<br>
mpirun --mca mpi_leave_pinned 1 &lt;your benchmark&gt;
<br>
(that being said, i am not sure this is useful with TCP networks ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 3/9/2016 11:34 AM, Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; If you are using instance types that support SR-IOV (aka. &quot;enhanced 
</span><br>
<span class="quotelev1">&gt; networking&quot; in AWS), then turn it on. We saw huge differences when 
</span><br>
<span class="quotelev1">&gt; SR-IOV is enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you start your instances with a placement group -- 
</span><br>
<span class="quotelev1">&gt; otherwise, the instances can be data centers apart!
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
<span class="quotelev1">&gt; But still, it is interesting that Intel MPI is getting a 2X speedup 
</span><br>
<span class="quotelev1">&gt; with the same setup! Can you post the raw numbers so that we can take 
</span><br>
<span class="quotelev1">&gt; a deeper look??
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
<span class="quotelev1">&gt; On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L. 
</span><br>
<span class="quotelev1">&gt; &lt;Gary.Jackson_at_[hidden] &lt;mailto:Gary.Jackson_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing
</span><br>
<span class="quotelev1">&gt;     about half the performance for MPI over TCP as I do with raw TCP.
</span><br>
<span class="quotelev1">&gt;     Before I start digging in to this more deeply, does anyone know
</span><br>
<span class="quotelev1">&gt;     what might cause that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For what it's worth, I see the same issues with MPICH, but I do
</span><br>
<span class="quotelev1">&gt;     not see it with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Gary Jackson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
