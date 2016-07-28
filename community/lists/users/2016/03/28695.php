<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 13:52:57 2016" -->
<!-- isoreceived="20160313175257" -->
<!-- sent="Sun, 13 Mar 2016 17:52:53 +0000" -->
<!-- isosent="20160313175253" -->
<!-- name="Jackson, Gary L." -->
<!-- email="Gary.Jackson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="D30B1EDE.28CB6%Gary.Jackson_at_jhuapl.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E87D04BB-4E09-44C1-BFF0-3BFF8F305A44_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2016-03-13 13:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28696.php">Matthew Larkin: "[OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By doing a parameter sweep, the best results I've gotten are with:
<br>
<p>btl_tcp_eager_limit &amp; btl_tcp_rndv_eager_limit = 2 ** 17
<br>
btl_tcp_sndbuf &amp; btl_tcp_rcvbuf = 2 ** 24
<br>
btl_tcp_endpoint_cache = 2 ** 12
<br>
btl_tcp_tcp_links = 2
<br>
<p>Even so, the peak performance is around 7000Mbits/s and a message size
<br>
around a megabyte.
<br>
<p>For what it's worth, you can get access to AWS resources to do your own
<br>
tuning, which may be more expedient than working through me as a proxy.
<br>
Right now I'm using two c4.8xlarge instances in a placement group at
<br>
$1.675/hour each to work this out. I only keep them around for as long as
<br>
I'm using them, then I terminate the instances when I'm done working.
<br>
<p><pre>
-- 
Gary Jackson
From:  users &lt;users-bounces_at_[hidden]&gt; on behalf of George Bosilca
&lt;bosilca_at_[hidden]&gt;
Reply-To:  Open MPI Users &lt;users_at_[hidden]&gt;
Date:  Friday, March 11, 2016 at 11:19 AM
To:  Open MPI Users &lt;users_at_[hidden]&gt;
Subject:  Re: [OMPI users] Poor performance on Amazon EC2 with TCP
Gary,
The current fine tuning of our TCP layer was done on a 1Gb network, and
might result in the performance degradation you see. There is a
relationship between the depth of the pipeline and the length of the
packets, together with another set of
 MCA parameters that can have a drastic impact on performance.
You should start with &#179;ompi_info &#139;param btl tcp -l 9&#178;.
&gt;From your performance graphs I can see that Intel MPI has an eager size of
around 128k (while ours is at 32k). Try to address this by setting
btl_tcp_eager_limit to 128k and also btl_tcp_rndv_eager_limit to the same
value.
By default Open MPI assumes TCP kernel buffers of 128k. These values can
be tuned at the kernel level
(<a href="http://www.cyberciti.biz/faq/linux-tcp-tuning/">http://www.cyberciti.biz/faq/linux-tcp-tuning/</a>) and/or you can let Open
 MPI know that it can use more (by setting the MCA parameters
btl_tcp_sndbuf and btl_tcp_rcvbuf).
Then you can play with the size of the TCP endpoint caching (it should be
set to a value where the memcpy is about the same cost as a syscall).
btl_tcp_endpoint_cache is the MCA parameter you are looking for.
Another trick, in case the injection rate of a single fd is too slow you
can ask Open MPI to use multiple channels by setting btl_tcp_links to
something else than 1. On a PS4 I had to bump it up to 3-4 to get the best
performance.
Other parameters to be tuned:
- btl_tcp_max_send_size
- btl_tcp_rdma_pipeline_send_length
I don&#185;t have access to a 10Gb network to tune. If you manage to tune it, I
would like to get the values for the different MCA parameters so that out
TCP BTL behaves optimally by default.
  Thanks,
    George.
On Mar 10, 2016, at 11:45 , Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt;
wrote:
I re-ran all experiments with 1.10.2 configured the way you specified. My
results are here:
<a href="https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0">https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0</a>
Some remarks:
1. OpenMPI had poor performance relative to raw TCP and IMPI across all
MTUs.
2. Those issues appeared at larger message sizes.
3. Intel MPI and raw TCP were comparable across message sizes and MTUs.
With respect to some other concerns:
1. I verified that the MTU values I'm using are correct with tracepath.
2. I am using a placement group.
-- 
Gary Jackson
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet
&lt;gilles_at_[hidden]&gt;
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
Date: Tuesday, March 8, 2016 at 11:07 PM
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] Poor performance on Amazon EC2 with TCP
Jackson,
one more thing, how did you build openmpi ?
if you built from git (and without VPATH), then --enable-debug is
automatically set, and this is hurting performance.
if not already done, i recommend you download the latest openmpi tarball
(1.10.2) and
./configure --with-platform=contrib/platform/optimized --prefix=...
last but not least, you can
mpirun --mca mpi_leave_pinned 1 &lt;your benchmark&gt;
(that being said, i am not sure this is useful with TCP networks ...)
Cheers,
Gilles
On 3/9/2016 11:34 AM, Rayson Ho wrote:
If you are using instance types that support SR-IOV (aka. &quot;enhanced
networking&quot; in AWS), then turn it on. We saw huge differences when SR-IOV
is enabled
<a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.htm">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.htm</a>
l
<a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-par">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-par</a>
t-2.html
Make sure you start your instances with a placement group -- otherwise,
the instances can be data centers apart!
And check that jumbo frames are enabled properly:
<a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a>
But still, it is interesting that Intel MPI is getting a 2X speedup with
the same setup! Can you post the raw numbers so that we can take a deeper
look??
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L.
&lt; &lt;mailto:Gary.Jackson_at_[hidden]&gt;Gary.Jackson_at_[hidden]&gt; wrote:
I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
half the performance for MPI over TCP as I do with raw TCP. Before I start
digging in to this more deeply, does anyone know what might cause that?
For what it's worth, I see the same issues with MPICH, but I do not see it
with Intel MPI.
-- 
Gary Jackson
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: 
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
Link to this post: 
<a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>&gt;
 
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: 
<a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: 
<a href="http://www.open-mpi.org/community/lists/users/2016/03/28672.php">http://www.open-mpi.org/community/lists/users/2016/03/28672.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28696.php">Matthew Larkin: "[OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
