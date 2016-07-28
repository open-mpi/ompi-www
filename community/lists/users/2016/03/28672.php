<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 11:45:12 2016" -->
<!-- isoreceived="20160310164512" -->
<!-- sent="Thu, 10 Mar 2016 16:45:08 +0000" -->
<!-- isosent="20160310164508" -->
<!-- name="Jackson, Gary L." -->
<!-- email="Gary.Jackson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="D307082C.2891C%Gary.Jackson_at_jhuapl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56DFA172.4050308_at_rist.or.jp" -->
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
<strong>From:</strong> Jackson, Gary L. (<em>Gary.Jackson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 11:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28671.php">Joshua Wall: "[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I re-ran all experiments with 1.10.2 configured the way you specified. My results are here:
<br>
<p><a href="https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0">https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0</a>
<br>
<p>Some remarks:
<br>
<p>&nbsp;&nbsp;1.  OpenMPI had poor performance relative to raw TCP and IMPI across all MTUs.
<br>
&nbsp;&nbsp;2.  Those issues appeared at larger message sizes.
<br>
&nbsp;&nbsp;3.  Intel MPI and raw TCP were comparable across message sizes and MTUs.
<br>
<p>With respect to some other concerns:
<br>
<p>&nbsp;&nbsp;1.  I verified that the MTU values I'm using are correct with tracepath.
<br>
&nbsp;&nbsp;2.  I am using a placement group.
<br>
<p><pre>
--
Gary Jackson
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt;
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Date: Tuesday, March 8, 2016 at 11:07 PM
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Subject: Re: [OMPI users] Poor performance on Amazon EC2 with TCP
Jackson,
one more thing, how did you build openmpi ?
if you built from git (and without VPATH), then --enable-debug is automatically set, and this is hurting performance.
if not already done, i recommend you download the latest openmpi tarball (1.10.2) and
./configure --with-platform=contrib/platform/optimized --prefix=...
last but not least, you can
mpirun --mca mpi_leave_pinned 1 &lt;your benchmark&gt;
(that being said, i am not sure this is useful with TCP networks ...)
Cheers,
Gilles
On 3/9/2016 11:34 AM, Rayson Ho wrote:
If you are using instance types that support SR-IOV (aka. &quot;enhanced networking&quot; in AWS), then turn it on. We saw huge differences when SR-IOV is enabled
<a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a>
<a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a>
Make sure you start your instances with a placement group -- otherwise, the instances can be data centers apart!
And check that jumbo frames are enabled properly:
<a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a>
But still, it is interesting that Intel MPI is getting a 2X speedup with the same setup! Can you post the raw numbers so that we can take a deeper look??
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L. &lt;&lt;mailto:Gary.Jackson_at_[hidden]&gt;Gary.Jackson_at_[hidden]&lt;mailto:Gary.Jackson_at_[hidden]&gt;&gt; wrote:
I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about half the performance for MPI over TCP as I do with raw TCP. Before I start digging in to this more deeply, does anyone know what might cause that?
For what it's worth, I see the same issues with MPICH, but I do not see it with Intel MPI.
--
Gary Jackson
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28671.php">Joshua Wall: "[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
