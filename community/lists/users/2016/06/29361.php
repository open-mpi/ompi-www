<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 09:20:24 2016" -->
<!-- isoreceived="20160603132024" -->
<!-- sent="Fri, 3 Jun 2016 14:19:51 +0100" -->
<!-- isosent="20160603131951" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAPqNE2XzVgj7NEDpuKrxO35kaE6c_=OO3yVOT1qr_1Unu2+S0g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJB=V03aqsX0zezA6Vt-H=+ykaJxhpBJHa6hXuyLNfKsdfe_-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-03 09:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob, I really think you should look at the FAQ
<br>
<a href="http://singularity.lbl.gov/#faq">http://singularity.lbl.gov/#faq</a>
<br>
<p>Also I don;t understand what you mean by 'Out users don't have Unix user
<br>
IDs'
<br>
That is no problem of course - I have worked with Centrify and Samba, where
<br>
you can define mappings between Windows users and Unix IDs or groups,
<br>
and also with the NICE Enginframe where again you define a mapping.
<br>
<p>What is the use case here - are you just wanting the codes to execute with
<br>
one given Unix ID?
<br>
<p><p>On 3 June 2016 at 14:06, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your thoughts. Lots of new technology out there!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; have you looked at Singularity
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/gmkurtzer/singularity/releases/tag/2.0">https://github.com/gmkurtzer/singularity/releases/tag/2.0</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks very cool, but it doesn't address our problem. We already have the
</span><br>
<span class="quotelev1">&gt; images built with our codes. Our users don't have Unix user ids. We know
</span><br>
<span class="quotelev1">&gt; their execution environment. It doesn't handle queueing, which the problem
</span><br>
<span class="quotelev1">&gt; I have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was gobsmacked to see how easy it was to install Juia ClusterManagers
</span><br>
<span class="quotelev2">&gt;&gt; and get Slurm integration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very nice, and something many Docker-oriented tools have. What
</span><br>
<span class="quotelev1">&gt; they don't have is good multi-user support. Remember, you can't let people
</span><br>
<span class="quotelev1">&gt; run Docker directly, because it gives them root access to the machine. The
</span><br>
<span class="quotelev1">&gt; queue manager has to control that part. You don't even want to start the
</span><br>
<span class="quotelev1">&gt; container as root, because you might be running an arbitrary container.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ps. Also have you looked at Bright Cluster Manager?
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.brightcomputing.com/whats-new-in-7.2">http://www.brightcomputing.com/whats-new-in-7.2</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We want both bare metal and commercial VPCs. Provisioning bare metal is
</span><br>
<span class="quotelev1">&gt; not a problem we have right now. Our cluster is small and already
</span><br>
<span class="quotelev1">&gt; provisioned. For VPCs, we can use StarCluster to launch the cluster in the
</span><br>
<span class="quotelev1">&gt; cloud, but that cluster is standalone. The queue manager needs to know it
</span><br>
<span class="quotelev1">&gt; was created and push the user's environment to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interesting times we are living in are at odds with our
</span><br>
<span class="quotelev1">&gt; infrastructure-oriented past. Clusters can come and go, and users can
</span><br>
<span class="quotelev1">&gt; package their code portably. The &quot;module load&quot; systems like Bright Cluster
</span><br>
<span class="quotelev1">&gt; offers are irrelevant. Let users build their images as they like with only
</span><br>
<span class="quotelev1">&gt; a few requirements, and they can run them with JupyterHub AND in an HPC
</span><br>
<span class="quotelev1">&gt; environment, which eliminates the need for Singularity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29360.php">http://www.open-mpi.org/community/lists/users/2016/06/29360.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29360.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29362.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
