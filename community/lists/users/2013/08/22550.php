<?
$subject_val = "Re: [OMPI users] mpirun tries to ssh to local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 06:37:34 2013" -->
<!-- isoreceived="20130826103734" -->
<!-- sent="Mon, 26 Aug 2013 12:37:24 +0200" -->
<!-- isosent="20130826103724" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun tries to ssh to local machine" -->
<!-- id="ED4E9FA5-7C7E-4245-8BB8-9E091869693C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130826121525.40151ak0fjgwl1h9_at_webmail.bo.ibimet.cnr.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun tries to ssh to local machine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 06:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.08.2013 um 12:15 schrieb Federico Carotenuto:
<br>
<p><span class="quotelev1">&gt; I'm currently having this issue with mpirun: I want to launch a program only on the cores of the local machine, but every time I run an mpi program it says that the host 127.0.0.1 &lt;local_machine_name&gt; with it's associated key is unkown and asks me if I want to add it to the list of ssh known hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By chowing/chmodding the .ssh file I was able to permanently add this &quot;host&quot; to the list of known hosts, but my problem is that every program that I try to run ask me to insert a password (the actual local user password) n times where n is equal to the -np parameter (i.e.: if I run the program on 8 cores I receive 8 successive password pronts).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I insert the password everything runs fine, but it's quite annoying and I wish to bypass such step: is there a way to have mpirun memorize the password? Or make him understand that the 8 nodes are actually 8 cores on the local machine and not 8 different hosts?
</span><br>
<p>Which hostname do you specify in your machinefile?
<br>
Which hostnames are set in /etc/hosts for your local machine?
<br>
What is the output of `hostname`? Does it match the one in the machinefile?
<br>
<p>For systemd there is a new command `hostnamectl --static set-hostname [NAME]` to set it.
<br>
<p>-- Reuti<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22549.php">Federico Carotenuto: "[OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
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
