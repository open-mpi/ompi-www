<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 11:46:17 2016" -->
<!-- isoreceived="20160606154617" -->
<!-- sent="Mon, 6 Jun 2016 08:46:13 -0700" -->
<!-- isosent="20160606154613" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="B9E8D2E9-AE1B-42CD-8271-09C60A6F445C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 11:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 6, 2016, at 8:32 AM, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, John. I sometimes wonder if I'm the only one out there with this particular problem.
</span><br>
<p>FWIW: I haven&#226;&#128;&#153;t seen it before.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, thanks for sticking with me. :) Using a pool of uids doesn't really work due to the way cgroups/containers works. It also would require changing the permissions of all of the user's files, which would create issues for Jupyter/Hub's access to the files, which is used for in situ monitoring.
</span><br>
<p>Not sure I understand the issue, but I have no knowledge of Jupyter or why you are using it. From what I can see, it appears that your choice of tools may be complicating your solution - I&#226;&#128;&#153;d suggest perhaps focusing on solving the problem rather than trying to force-fit your current tools, but that presumes you don&#226;&#128;&#153;t have some particular attachment to those tools.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Docker does not yet handle uid mapping at the container level (1.10 added mappings for the daemon). We have solved this problem &lt;<a href="https://github.com/radiasoft/containers/blob/fc63d3c0d2ffe7e8a80ed1e2a8dc44a33c08cb46/bin/build-docker.sh#L110">https://github.com/radiasoft/containers/blob/fc63d3c0d2ffe7e8a80ed1e2a8dc44a33c08cb46/bin/build-docker.sh#L110</a>&gt; by adding a uid/gid switcher at container startup for our images. The trick is to change the uid/gid of the &quot;container user&quot; with usermod and groupmod. This only works, however, with images we provide. I'd like a solution that allows us to start arbitrary/unsafe images, relying on cgroups to their job.
</span><br>
<p>That isn&#226;&#128;&#153;t the security hole - the issue is that Docker doesn&#226;&#128;&#153;t prevent the user from taking privileged state, which means the user can become root. Yes, it is within that container - but the network and other 3rd party services can be vulnerable. Cgroups doesn&#226;&#128;&#153;t really solve that problem as it still thinks the user is the one you originally set for the container, and constrains resources that way - but it doesn&#226;&#128;&#153;t do authentication protection.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles, the containers do lock the user down, but the problem is that the file system space has to be dynamically bound to the containers across the cluster. JuptyerHub solves this problem by understanding the concept of a user, and providing a hook to change the directory to be mounted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daniel, we've had bad experiences with ZoL. It's allocation algorithm degrades rapidly when the file system gets over 80% full. It still is not integrated into major distros, which leads to dkms nightmares on system upgrades. I don't really see Flocker as helping in this regard, because the problem is the scheduler, not the file system. We know which directory we have to mount from the cluster file system, just need to get the scheduler to allow us to mount that with the container that is running slurmd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll play with Slurm Elastic Compute this week to see how it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29382.php">http://www.open-mpi.org/community/lists/users/2016/06/29382.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
