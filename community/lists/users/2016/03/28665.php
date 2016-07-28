<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 21:34:09 2016" -->
<!-- isoreceived="20160309023409" -->
<!-- sent="Tue, 8 Mar 2016 21:34:07 -0500" -->
<!-- isosent="20160309023407" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="CAHwLALP=F8NF3DUyGkMYLyFYtPOwiEVwX0m2BnV4L09DjEHbew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D30446F8.27B05%Gary.Jackson_at_jhuapl.edu" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 21:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using instance types that support SR-IOV (aka. &quot;enhanced
<br>
networking&quot; in AWS), then turn it on. We saw huge differences when SR-IOV
<br>
is enabled
<br>
<p><a href="http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html">http://blogs.scalablelogic.com/2013/12/enhanced-networking-in-aws-cloud.html</a>
<br>
<a href="http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html">http://blogs.scalablelogic.com/2014/01/enhanced-networking-in-aws-cloud-part-2.html</a>
<br>
<p>Make sure you start your instances with a placement group -- otherwise, the
<br>
instances can be data centers apart!
<br>
<p>And check that jumbo frames are enabled properly:
<br>
<p><a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html">http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/network_mtu.html</a>
<br>
<p>But still, it is interesting that Intel MPI is getting a 2X speedup with
<br>
the same setup! Can you post the raw numbers so that we can take a deeper
<br>
look??
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
<br>
<p><p><p><p>On Tue, Mar 8, 2016 at 9:08 AM, Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
</span><br>
<span class="quotelev1">&gt; half the performance for MPI over TCP as I do with raw TCP. Before I start
</span><br>
<span class="quotelev1">&gt; digging in to this more deeply, does anyone know what might cause that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, I see the same issues with MPICH, but I do not see it
</span><br>
<span class="quotelev1">&gt; with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary Jackson
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28659.php">http://www.open-mpi.org/community/lists/users/2016/03/28659.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28666.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
