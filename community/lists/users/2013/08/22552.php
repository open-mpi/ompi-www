<?
$subject_val = "Re: [OMPI users] mpirun tries to ssh to local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 08:18:06 2013" -->
<!-- isoreceived="20130826121806" -->
<!-- sent="Mon, 26 Aug 2013 14:17:56 +0200" -->
<!-- isosent="20130826121756" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun tries to ssh to local machine" -->
<!-- id="394E3D51-47AC-4290-BA56-5CDF055CBDF1_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130826125300.913755k3d410mdu4_at_webmail.bo.ibimet.cnr.it" -->
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
<strong>Date:</strong> 2013-08-26 08:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.08.2013 um 12:53 schrieb Federico Carotenuto:
<br>
<p><span class="quotelev1">&gt; Kind Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your quick reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I didn't set a machinefile...that may be the problem: I'm fairly new to MPI and SSH and I'm still quite confused even after reading some tutorials.
</span><br>
<p>There is a default. But you can also specify it on the command line to test it:
<br>
<p>mpiexec -host modelstation -np 2 mpihello
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; My etc/hosts contains: 127.0.0.1 localhost and 127.0.1.1 modelstation (modelstation is the machine name I was mentioning in the previous mail)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I type hostname the terminal returns modelstation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reuti &lt;reuti_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 26.08.2013 um 12:15 schrieb Federico Carotenuto:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently having this issue with mpirun: I want to launch a program only on the cores of the local machine, but every time I run an mpi program it says that the host 127.0.0.1 &lt;local_machine_name&gt; with it's associated key is unkown and asks me if I want to add it to the list of ssh known hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By chowing/chmodding the .ssh file I was able to permanently add this &quot;host&quot; to the list of known hosts, but my problem is that every program that I try to run ask me to insert a password (the actual local user password) n times where n is equal to the -np parameter (i.e.: if I run the program on 8 cores I receive 8 successive password pronts).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I insert the password everything runs fine, but it's quite annoying and I wish to bypass such step: is there a way to have mpirun memorize the password? Or make him understand that the 8 nodes are actually 8 cores on the local machine and not 8 different hosts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which hostname do you specify in your machinefile?
</span><br>
<span class="quotelev2">&gt;&gt; Which hostnames are set in /etc/hosts for your local machine?
</span><br>
<span class="quotelev2">&gt;&gt; What is the output of `hostname`? Does it match the one in the machinefile?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For systemd there is a new command `hostnamectl --static set-hostname [NAME]` to set it.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message was sent using IMP, the Internet Messaging Program.
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
<li><strong>Next message:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22551.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
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
