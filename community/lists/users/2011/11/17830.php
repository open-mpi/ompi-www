<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 21:47:53 2011" -->
<!-- isoreceived="20111125024753" -->
<!-- sent="Thu, 24 Nov 2011 19:47:45 -0700" -->
<!-- isosent="20111125024745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="EDC5949A-0817-4F7B-AECE-98EDDC5BBF25_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C118E34A-983D-4A8C-B408-A47E90C922FC_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2011-11-24 21:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17831.php">Thomas Anderson: "[OMPI users] file view with struct data type"</a>
<li><strong>Previous message:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2011, at 2:00 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 24.11.2011 um 05:26 schrieb Jaison Paul:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to access OpenMPI processes over Internet using ssh and not quite successful, yet. I believe that I should be able to do it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to run one process on my PC and the rest on a remote cluster over internet. I have set the public keys (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; localhost
</span><br>
<span class="quotelev2">&gt;&gt; user_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is not a valid syntax for Open MPI.
</span><br>
<p>This isn't correct - we have long supported that syntax in a hostfile, and there is no issue with having a different user name at each node.
<br>
<p>Jaison: are you sure your nodes are setup for password-less ssh? In other words, have you setup your .ssh files on the remote nodes so they will allow us to ssh a process on them without providing a password? This is the typical problem we see.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; But it fails.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The issue seems to be the user! That is, the user on my PC is different to that of user at remotehosts. That's my assumption.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this the problem? Is there any work-around to solve this issue? Do I need to have same username at all nodes to solve this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can define nicknames for an ssh connection in a file ~/.ssh/config like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host foobar
</span><br>
<span class="quotelev1">&gt;    User baz
</span><br>
<span class="quotelev1">&gt;    Hostname the.remote.server.demo
</span><br>
<span class="quotelev1">&gt;    Port 1234
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While this will work with any nickname for an ssh connection, in your case the nickname must match the one specified in the hostfile, as Open MPI won't use this lookup file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host remotehost.com
</span><br>
<span class="quotelev1">&gt;    User user
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh should then use the entries therein to initiate the connection. For details you can have a look at `man ssh_config`.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17831.php">Thomas Anderson: "[OMPI users] file view with struct data type"</a>
<li><strong>Previous message:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
