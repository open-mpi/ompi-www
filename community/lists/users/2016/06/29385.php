<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 13:38:35 2016" -->
<!-- isoreceived="20160606173835" -->
<!-- sent="Mon, 6 Jun 2016 10:38:31 -0700" -->
<!-- isosent="20160606173831" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="DA15E0C6-3F77-474D-94D0-5F80ABA169F5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJB=V002DXhOopuEOHjus14tcg9ZW97o4r_2jejbfJQCEpntLA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-06 13:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 6, 2016, at 10:18 AM, Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, 
</span><br>
<span class="quotelev1">&gt; FWIW: I haven&#226;&#128;&#153;t seen it before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure I understand the issue, but I have no knowledge of Jupyter or why you are using it. From what I can see, it appears that your choice of tools may be complicating your solution - I&#226;&#128;&#153;d suggest perhaps focusing on solving the problem rather than trying to force-fit your current tools, but that presumes you don&#226;&#128;&#153;t have some particular attachment to those tools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No attachment to particular tools. This is a greenfield project. As to Jupyter, it's fairly simple. JupyterHub launches Jupyter in a Docker container with the user's directory, e.g. /var/nfs/jupyter/robnagler gets mounted /home/docker-user. Then the user can bring a up a terminal and work within the container as if they ssh'ed into the container, but without having to run ssh. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think of JupyterHub as way to provide login nodes without having a corresponding Unix user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That isn&#226;&#128;&#153;t the security hole - the issue is that Docker doesn&#226;&#128;&#153;t prevent the user from taking privileged state, which means the user can become root. Yes, it is within that container - but the network and other 3rd party services can be vulnerable. Cgroups doesn&#226;&#128;&#153;t really solve that problem as it still thinks the user is the one you originally set for the container, and constrains resources that way - but it doesn&#226;&#128;&#153;t do authentication protection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think user namespaces &lt;<a href="https://docs.docker.com/engine/reference/commandline/daemon/#daemon-user-namespace-options">https://docs.docker.com/engine/reference/commandline/daemon/#daemon-user-namespace-options</a>&gt; (Docker 1.10)  helps mitigate privilege escalation/container escape issues. You can become root in the container, but outside the container, you are some other user, like NFS's root_squash. Docker by default does contain the network and other devices. I don't really know what MPI would require, but it seems to work with TCP sockets, which don't allow spoofing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing I'm assuming with all this is that people who run containers on Docker Hub, Travis, Terminal.com, etc. have similar problems. They are running jobs on behalf of web users (like our problem) as a single unix user id. Docker Hub runs containers as root to build images so they must be able to lock down containers well enough.
</span><br>
<p>You know what they say about &#226;&#128;&#156;assume&#226;&#128;&#157;&#226;&#128;&#166;.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another thing we can (and probably should) do is verify the images have no setuid files. I think this would eliminate a lot of the privilege escalation issues.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29384.php">http://www.open-mpi.org/community/lists/users/2016/06/29384.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29384.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
