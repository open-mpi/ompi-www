<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 04:01:11 2011" -->
<!-- isoreceived="20111124090111" -->
<!-- sent="Thu, 24 Nov 2011 10:00:53 +0100" -->
<!-- isosent="20111124090053" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="C118E34A-983D-4A8C-B408-A47E90C922FC_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6412_1322105026_pAO3NfPk001039_4ECDC765.2000806_at_cs.anu.edu.au" -->
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
<strong>Date:</strong> 2011-11-24 04:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17820.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17820.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 24.11.2011 um 05:26 schrieb Jaison Paul:
<br>
<p><span class="quotelev1">&gt; I am trying to access OpenMPI processes over Internet using ssh and not quite successful, yet. I believe that I should be able to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to run one process on my PC and the rest on a remote cluster over internet. I have set the public keys (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; localhost
</span><br>
<span class="quotelev1">&gt; user_at_[hidden]
</span><br>
<p>this is not a valid syntax for Open MPI.
<br>
<p><p><span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; But it fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue seems to be the user! That is, the user on my PC is different to that of user at remotehosts. That's my assumption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the problem? Is there any work-around to solve this issue? Do I need to have same username at all nodes to solve this issue?
</span><br>
<p>You can define nicknames for an ssh connection in a file ~/.ssh/config like:
<br>
<p>Host foobar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;User baz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hostname the.remote.server.demo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Port 1234
<br>
<p>While this will work with any nickname for an ssh connection, in your case the nickname must match the one specified in the hostfile, as Open MPI won't use this lookup file:
<br>
<p>Host remotehost.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;User user
<br>
<p>ssh should then use the entries therein to initiate the connection. For details you can have a look at `man ssh_config`.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17820.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17820.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
