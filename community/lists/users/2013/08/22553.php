<?
$subject_val = "Re: [OMPI users] mpirun tries to ssh to local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 08:33:11 2013" -->
<!-- isoreceived="20130826123311" -->
<!-- sent="Mon, 26 Aug 2013 14:33:09 +0200" -->
<!-- isosent="20130826123309" -->
<!-- name="Federico Carotenuto" -->
<!-- email="carotenuto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun tries to ssh to local machine" -->
<!-- id="20130826143309.152467pdcpibxr7p_at_webmail.bo.ibimet.cnr.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="394E3D51-47AC-4290-BA56-5CDF055CBDF1_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Federico Carotenuto (<em>carotenuto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 08:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22552.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22552.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kind Reuti,
<br>
<p>I'm start thinking I've got some compilation issue with MPI: I'm  
<br>
afraid I've got the MPICH 1 coming with the PGI compiler installation,  
<br>
because if I try to run mpiexec the terminal answers with &quot;The program  
<br>
'mpiexec' can be found in the following packages: *lam-runtime *mpich2  
<br>
*openmpi-bin *openmpi1.6-bin. Try: sudo apt-get install &lt;selected  
<br>
package&gt;&quot;.
<br>
<p>I've also tried to modify the machinefile that comes by default under  
<br>
/opt/pgi/linux86-64/13.4/mpi/mpich/share/machinefile.LINUX adding the  
<br>
line &quot;modelstation:8&quot;, but still mpirun prompts for the password 8  
<br>
times.
<br>
<p>Thanks for your help and patience
<br>
<p><p>Reuti &lt;reuti_at_[hidden]&gt; ha scritto:
<br>
<p><span class="quotelev1">&gt; Am 26.08.2013 um 12:53 schrieb Federico Carotenuto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your quick reply!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I didn't set a machinefile...that may be the problem:  
</span><br>
<span class="quotelev2">&gt;&gt; I'm fairly new to MPI and SSH and I'm still quite confused even  
</span><br>
<span class="quotelev2">&gt;&gt; after reading some tutorials.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a default. But you can also specify it on the command line  
</span><br>
<span class="quotelev1">&gt; to test it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -host modelstation -np 2 mpihello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My etc/hosts contains: 127.0.0.1 localhost and 127.0.1.1  
</span><br>
<span class="quotelev2">&gt;&gt; modelstation (modelstation is the machine name I was mentioning in  
</span><br>
<span class="quotelev2">&gt;&gt; the previous mail)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if I type hostname the terminal returns modelstation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 26.08.2013 um 12:15 schrieb Federico Carotenuto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm currently having this issue with mpirun: I want to launch a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program only on the cores of the local machine, but every time I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run an mpi program it says that the host 127.0.0.1  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;local_machine_name&gt; with it's associated key is unkown and asks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me if I want to add it to the list of ssh known hosts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By chowing/chmodding the .ssh file I was able to permanently add  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this &quot;host&quot; to the list of known hosts, but my problem is that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every program that I try to run ask me to insert a password (the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actual local user password) n times where n is equal to the -np  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter (i.e.: if I run the program on 8 cores I receive 8  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; successive password pronts).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I insert the password everything runs fine, but it's quite  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; annoying and I wish to bypass such step: is there a way to have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun memorize the password? Or make him understand that the 8  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes are actually 8 cores on the local machine and not 8  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different hosts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which hostname do you specify in your machinefile?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which hostnames are set in /etc/hosts for your local machine?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the output of `hostname`? Does it match the one in the machinefile?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For systemd there is a new command `hostnamectl --static  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set-hostname [NAME]` to set it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This message was sent using IMP, the Internet Messaging Program.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22552.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>In reply to:</strong> <a href="22552.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22554.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
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
