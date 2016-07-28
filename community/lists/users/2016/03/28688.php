<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 11:19:42 2016" -->
<!-- isoreceived="20160311161942" -->
<!-- sent="Fri, 11 Mar 2016 11:19:37 -0500" -->
<!-- isosent="20160311161937" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="E87D04BB-4E09-44C1-BFF0-3BFF8F305A44_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 11:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gary,
<br>
<p>The current fine tuning of our TCP layer was done on a 1Gb network, and might result in the performance degradation you see. There is a relationship between the depth of the pipeline and the length of the packets, together with another set of MCA parameters that can have a drastic impact on performance.
<br>
<p>You should start with &#226;&#128;&#156;ompi_info &#226;&#128;&#148;param btl tcp -l 9&#226;&#128;&#157;.
<br>
<p>From your performance graphs I can see that Intel MPI has an eager size of around 128k (while ours is at 32k). Try to address this by setting btl_tcp_eager_limit to 128k and also btl_tcp_rndv_eager_limit to the same value.
<br>
<p>By default Open MPI assumes TCP kernel buffers of 128k. These values can be tuned at the kernel level (<a href="http://www.cyberciti.biz/faq/linux-tcp-tuning/">http://www.cyberciti.biz/faq/linux-tcp-tuning/</a> &lt;<a href="http://www.cyberciti.biz/faq/linux-tcp-tuning/">http://www.cyberciti.biz/faq/linux-tcp-tuning/</a>&gt;) and/or you can let Open MPI know that it can use more (by setting the MCA parameters btl_tcp_sndbuf and btl_tcp_rcvbuf).
<br>
<p>Then you can play with the size of the TCP endpoint caching (it should be set to a value where the memcpy is about the same cost as a syscall). btl_tcp_endpoint_cache is the MCA parameter you are looking for.
<br>
<p>Another trick, in case the injection rate of a single fd is too slow you can ask Open MPI to use multiple channels by setting btl_tcp_links to something else than 1. On a PS4 I had to bump it up to 3-4 to get the best performance.
<br>
<p>Other parameters to be tuned:
<br>
- btl_tcp_max_send_size
<br>
- btl_tcp_rdma_pipeline_send_length
<br>
<p>I don&#226;&#128;&#153;t have access to a 10Gb network to tune. If you manage to tune it, I would like to get the values for the different MCA parameters so that out TCP BTL behaves optimally by default.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; On Mar 10, 2016, at 11:45 , Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I re-ran all experiments with 1.10.2 configured the way you specified. My results are here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0">https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0</a> &lt;<a href="https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0">https://www.dropbox.com/s/4v4jaxe8sflgymj/collected.pdf?dl=0</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some remarks:
</span><br>
<span class="quotelev1">&gt; OpenMPI had poor performance relative to raw TCP and IMPI across all MTUs.
</span><br>
<span class="quotelev1">&gt; Those issues appeared at larger message sizes.
</span><br>
<span class="quotelev1">&gt; Intel MPI and raw TCP were comparable across message sizes and MTUs.
</span><br>
<span class="quotelev1">&gt; With respect to some other concerns:
</span><br>
<span class="quotelev1">&gt; I verified that the MTU values I'm using are correct with tracepath.
</span><br>
<span class="quotelev1">&gt; I am using a placement group.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gary Jackson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, March 8, 2016 at 11:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
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
<span class="quotelev1">&gt; if you built from git (and without VPATH), then --enable-debug is automatically set, and this is hurting performance.
</span><br>
<span class="quotelev1">&gt; if not already done, i recommend you download the latest openmpi tarball (1.10.2) and
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
<span class="quotelev2">&gt;&gt; If you are using instance types that support SR-IOV (aka. &quot;enhanced networking&quot; in AWS), then turn it on. We saw huge differences when SR-IOV is enabled
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a> &lt;<a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a> &lt;<a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sure you start your instances with a placement group -- otherwise, the instances can be data centers apart!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And check that jumbo frames are enabled properly:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a> &lt;<a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But still, it is interesting that Intel MPI is getting a 2X speedup with the same setup! Can you post the raw numbers so that we can take a deeper look??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a> &lt;<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a> &lt;<a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L. &lt; &lt;mailto:Gary.Jackson_at_[hidden]&gt;Gary.Jackson_at_[hidden] &lt;mailto:Gary.Jackson_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about half the performance for MPI over TCP as I do with raw TCP. Before I start digging in to this more deeply, does anyone know what might cause that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, I see the same issues with MPICH, but I do not see it with Intel MPI.
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28665.php">http://www.open-mpi.org/community/lists/users/2016/03/28665.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28672.php">http://www.open-mpi.org/community/lists/users/2016/03/28672.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
