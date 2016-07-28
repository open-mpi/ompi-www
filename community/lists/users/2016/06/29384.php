<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 13:18:56 2016" -->
<!-- isoreceived="20160606171856" -->
<!-- sent="Mon, 6 Jun 2016 11:18:14 -0600" -->
<!-- isosent="20160606171814" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V002DXhOopuEOHjus14tcg9ZW97o4r_2jejbfJQCEpntLA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B9E8D2E9-AE1B-42CD-8271-09C60A6F445C_at_open-mpi.org" -->
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
<strong>From:</strong> Rob Nagler (<em>openmpi-wooxi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 13:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><span class="quotelev1">&gt; FWIW: I haven&#226;&#128;&#153;t seen it before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good to know.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure I understand the issue, but I have no knowledge of Jupyter or why
</span><br>
<span class="quotelev1">&gt; you are using it. From what I can see, it appears that your choice of tools
</span><br>
<span class="quotelev1">&gt; may be complicating your solution - I&#226;&#128;&#153;d suggest perhaps focusing on solving
</span><br>
<span class="quotelev1">&gt; the problem rather than trying to force-fit your current tools, but that
</span><br>
<span class="quotelev1">&gt; presumes you don&#226;&#128;&#153;t have some particular attachment to those tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No attachment to particular tools. This is a greenfield project. As to
<br>
Jupyter, it's fairly simple. JupyterHub launches Jupyter in a Docker
<br>
container with the user's directory, e.g. /var/nfs/jupyter/robnagler gets
<br>
mounted /home/docker-user. Then the user can bring a up a terminal and work
<br>
within the container as if they ssh'ed into the container, but without
<br>
having to run ssh.
<br>
<p>Think of JupyterHub as way to provide login nodes without having a
<br>
corresponding Unix user.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That isn&#226;&#128;&#153;t the security hole - the issue is that Docker doesn&#226;&#128;&#153;t prevent
</span><br>
<span class="quotelev1">&gt; the user from taking privileged state, which means the user can become
</span><br>
<span class="quotelev1">&gt; root. Yes, it is within that container - but the network and other 3rd
</span><br>
<span class="quotelev1">&gt; party services can be vulnerable. Cgroups doesn&#226;&#128;&#153;t really solve that problem
</span><br>
<span class="quotelev1">&gt; as it still thinks the user is the one you originally set for the
</span><br>
<span class="quotelev1">&gt; container, and constrains resources that way - but it doesn&#226;&#128;&#153;t do
</span><br>
<span class="quotelev1">&gt; authentication protection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think user namespaces
<br>
&lt;<a href="https://docs.docker.com/engine/reference/commandline/daemon/#daemon-user-namespace-options">https://docs.docker.com/engine/reference/commandline/daemon/#daemon-user-namespace-options</a>&gt;
<br>
(Docker 1.10)  helps mitigate privilege escalation/container escape issues.
<br>
You can become root in the container, but outside the container, you are
<br>
some other user, like NFS's root_squash. Docker by default does contain the
<br>
network and other devices. I don't really know what MPI would require, but
<br>
it seems to work with TCP sockets, which don't allow spoofing.
<br>
<p>One thing I'm assuming with all this is that people who run containers on
<br>
Docker Hub, Travis, Terminal.com, etc. have similar problems. They are
<br>
running jobs on behalf of web users (like our problem) as a single unix
<br>
user id. Docker Hub runs containers as root to build images so they must be
<br>
able to lock down containers well enough.
<br>
<p>Another thing we can (and probably should) do is verify the images have no
<br>
setuid files. I think this would eliminate a lot of the privilege
<br>
escalation issues.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29384/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29383.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
