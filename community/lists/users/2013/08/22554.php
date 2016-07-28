<?
$subject_val = "Re: [OMPI users] mpirun tries to ssh to local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 09:17:31 2013" -->
<!-- isoreceived="20130826131731" -->
<!-- sent="Mon, 26 Aug 2013 15:17:21 +0200" -->
<!-- isosent="20130826131721" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun tries to ssh to local machine" -->
<!-- id="BD922EDF-B964-4965-BD9A-59F6A371008F_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130826143309.152467pdcpibxr7p_at_webmail.bo.ibimet.cnr.it" -->
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
<strong>Date:</strong> 2013-08-26 09:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.08.2013 um 14:33 schrieb Federico Carotenuto:
<br>
<p><span class="quotelev1">&gt; Kind Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm start thinking I've got some compilation issue with MPI: I'm afraid I've got the MPICH 1 coming with the PGI compiler installation, because if I try to run mpiexec the terminal answers with &quot;The program 'mpiexec' can be found in the following packages: *lam-runtime *mpich2 *openmpi-bin *openmpi1.6-bin. Try: sudo apt-get install &lt;selected package&gt;&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also tried to modify the machinefile that comes by default under /opt/pgi/linux86-64/13.4/mpi/mpich/share/machinefile.LINUX adding the line &quot;modelstation:8&quot;, but still mpirun prompts for the password 8 times.
</span><br>
<p>This was normal at that time: one rsh/ssh per parallel instance. Nowadays Open MPI and MPICH2/3 will use only one `rsh`/`ssh` per host and start all other parallel tasks as thread (i.e: on a local machine they don't need a local `rsh` or `ssh` at all). Although you could either adjust `rsh` to disregard passwords (deprecated) or route `rsh` to `ssh` and enable passphraseless login:
<br>
<p>MPICH(1) is outdated (released 2005) and I suggested already to Portland to exclude it from the package. IMO this adds more confusion than it help.
<br>
<p>Hence, please install a recent version of Open MPI or MPICH2/3 and then we can look into it again on the appropriate list.
<br>
<p>-- Reuti
<br>
<p>PS: The above mentioned LAM/MPI is outdated too.
<br>
<p><p><span class="quotelev1">&gt; Thanks for your help and patience
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reuti &lt;reuti_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 26.08.2013 um 12:53 schrieb Federico Carotenuto:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind Reuti,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your quick reply!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid I didn't set a machinefile...that may be the problem: I'm fairly new to MPI and SSH and I'm still quite confused even after reading some tutorials.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a default. But you can also specify it on the command line to test it:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -host modelstation -np 2 mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My etc/hosts contains: 127.0.0.1 localhost and 127.0.1.1 modelstation (modelstation is the machine name I was mentioning in the previous mail)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I type hostname the terminal returns modelstation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 26.08.2013 um 12:15 schrieb Federico Carotenuto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm currently having this issue with mpirun: I want to launch a program only on the cores of the local machine, but every time I run an mpi program it says that the host 127.0.0.1 &lt;local_machine_name&gt; with it's associated key is unkown and asks me if I want to add it to the list of ssh known hosts.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; By chowing/chmodding the .ssh file I was able to permanently add this &quot;host&quot; to the list of known hosts, but my problem is that every program that I try to run ask me to insert a password (the actual local user password) n times where n is equal to the -np parameter (i.e.: if I run the program on 8 cores I receive 8 successive password pronts).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I insert the password everything runs fine, but it's quite annoying and I wish to bypass such step: is there a way to have mpirun memorize the password? Or make him understand that the 8 nodes are actually 8 cores on the local machine and not 8 different hosts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which hostname do you specify in your machinefile?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which hostnames are set in /etc/hosts for your local machine?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the output of `hostname`? Does it match the one in the machinefile?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For systemd there is a new command `hostnamectl --static set-hostname [NAME]` to set it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22553.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22555.php">Federico Carotenuto: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
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
