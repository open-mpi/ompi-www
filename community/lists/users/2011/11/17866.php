<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 09:30:22 2011" -->
<!-- isoreceived="20111130143022" -->
<!-- sent="Wed, 30 Nov 2011 07:30:13 -0700" -->
<!-- isosent="20111130143013" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="C597EE70-41AE-483B-96E4-DF6BD3192F28_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111130T115932-218_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 09:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has come up before - I would suggest doing a quick search of &quot;ec2&quot; on our user list. Here is one solution:
<br>
<p>On Jun 14, 2011, at 10:50 AM, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; I've put together a simple system for running OMPI on EC2 (Amazon's cloud computing service).  If you're interested, see 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://norbl.com/ppe-ompi.html">http://norbl.com/ppe-ompi.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barnet Wagman
</span><br>
<p><p><p>On Nov 30, 2011, at 4:03 AM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc &lt;at&gt; open-mpi.org&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2011, at 2:00 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot to Ralph and Reuti.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually we are trying to use EC2 nodes as compute nodes and my local PC as host
</span><br>
<span class="quotelev1">&gt; node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Happy to know that it is OK to use user&lt;at&gt;somehost.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We used that but failed. Would try again. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we have set up .ssh file on remote EC2 hosts. Is there anything else that
</span><br>
<span class="quotelev1">&gt; we should be taking care of when dealing with EC2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 24.11.2011 um 05:26 schrieb Jaison Paul:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to access OpenMPI processes over Internet using ssh and not
</span><br>
<span class="quotelev1">&gt; quite successful, yet. I believe
</span><br>
<span class="quotelev2">&gt;&gt; that I should be able to do it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to run one process on my PC and the rest on a remote cluster over
</span><br>
<span class="quotelev1">&gt; internet. I have set the public keys
</span><br>
<span class="quotelev2">&gt;&gt; (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user &lt;at&gt; remotehost.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is not a valid syntax for Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This isn't correct - we have long supported that syntax in a hostfile, and
</span><br>
<span class="quotelev1">&gt; there is no issue with having a
</span><br>
<span class="quotelev2">&gt;&gt; different user name at each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jaison: are you sure your nodes are setup for password-less ssh? In other
</span><br>
<span class="quotelev1">&gt; words, have you setup your .ssh
</span><br>
<span class="quotelev2">&gt;&gt; files on the remote nodes so they will allow us to ssh a process on them
</span><br>
<span class="quotelev1">&gt; without providing a password? This is
</span><br>
<span class="quotelev2">&gt;&gt; the typical problem we see.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But it fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue seems to be the user! That is, the user on my PC is different to
</span><br>
<span class="quotelev1">&gt; that of user at remotehosts. That's
</span><br>
<span class="quotelev2">&gt;&gt; my assumption.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this the problem? Is there any work-around to solve this issue? Do I
</span><br>
<span class="quotelev1">&gt; need to have same username at all
</span><br>
<span class="quotelev2">&gt;&gt; nodes to solve this issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can define nicknames for an ssh connection in a file ~/.ssh/config like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host foobar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   User baz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hostname the.remote.server.demo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Port 1234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While this will work with any nickname for an ssh connection, in your case
</span><br>
<span class="quotelev1">&gt; the nickname must match the one
</span><br>
<span class="quotelev2">&gt;&gt; specified in the hostfile, as Open MPI won't use this lookup file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host remotehost.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   User user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh should then use the entries therein to initiate the connection. For
</span><br>
<span class="quotelev1">&gt; details you can have a look at `man ssh_config`.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users &lt;at&gt; open-mpi.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
