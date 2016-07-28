<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 25 05:42:51 2011" -->
<!-- isoreceived="20111125104251" -->
<!-- sent="Fri, 25 Nov 2011 11:42:37 +0100" -->
<!-- isosent="20111125104237" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="B0E879C5-E8E2-4749-BE00-DBF45282D409_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EDC5949A-0817-4F7B-AECE-98EDDC5BBF25_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-25 05:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17831.php">Thomas Anderson: "[OMPI users] file view with struct data type"</a>
<li><strong>In reply to:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Am 25.11.2011 um 03:47 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2011, at 2:00 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.11.2011 um 05:26 schrieb Jaison Paul:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to access OpenMPI processes over Internet using ssh and not quite successful, yet. I believe that I should be able to do it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to run one process on my PC and the rest on a remote cluster over internet. I have set the public keys (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localhost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this is not a valid syntax for Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't correct
</span><br>
<p>I'm completely sorry about this, it wasn't my intention to misguide anyone. But this syntax isn't something I would have expected to work, nor is it documented in `man mpiexec` AFAICS. I suggest to add it there or at <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>. Or maybe a complete new man page for &quot;hostfile&quot;, where also slots= and max_slots= are explained in one location.
<br>
<p>NB: Checking orte/util/hostfile/hostfile.c even ^ to exclude hosts is supported, but from which initial list will they be excluded? In the `man orte_hosts` I find --default-hostfile which could be the initial list, but --default-hostfile isn't in mpirun's man page.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; - we have long supported that syntax in a hostfile, and there is no issue with having a different user name at each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison: are you sure your nodes are setup for password-less ssh? In other words, have you setup your .ssh files on the remote nodes so they will allow us to ssh a process on them without providing a password? This is the typical problem we see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue seems to be the user! That is, the user on my PC is different to that of user at remotehosts. That's my assumption.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this the problem? Is there any work-around to solve this issue? Do I need to have same username at all nodes to solve this issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can define nicknames for an ssh connection in a file ~/.ssh/config like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Host foobar
</span><br>
<span class="quotelev2">&gt;&gt;   User baz
</span><br>
<span class="quotelev2">&gt;&gt;   Hostname the.remote.server.demo
</span><br>
<span class="quotelev2">&gt;&gt;   Port 1234
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While this will work with any nickname for an ssh connection, in your case the nickname must match the one specified in the hostfile, as Open MPI won't use this lookup file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Host remotehost.com
</span><br>
<span class="quotelev2">&gt;&gt;   User user
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ssh should then use the entries therein to initiate the connection. For details you can have a look at `man ssh_config`.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17831.php">Thomas Anderson: "[OMPI users] file view with struct data type"</a>
<li><strong>In reply to:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17833.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
