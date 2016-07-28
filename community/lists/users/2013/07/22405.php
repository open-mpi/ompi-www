<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 29 06:29:31 2013" -->
<!-- isoreceived="20130729102931" -->
<!-- sent="Mon, 29 Jul 2013 12:28:57 +0200" -->
<!-- isosent="20130729102857" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="82239E2F-6BEE-490B-9DBC-1B458AC50BAF_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51F5E622.2080800_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-29 06:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.07.2013 um 05:48 schrieb dani:
<br>
<p><span class="quotelev1">&gt; But that is not a requirement on ssh.
</span><br>
<span class="quotelev1">&gt; That is a requirement on the install base on the second node - both must have the same environment variables set, using same paths on each machine.
</span><br>
<span class="quotelev1">&gt; either install openmpi on each node, and setup  /etc/profile.d/openmpi.{c,}sh and /etc/ld.so.conf.d/openmpi.conf files on both (preferred) or install to a common file system (e.g. nfs mount) and still use profile and ldconfig to setup environment.
</span><br>
<p>Where was Open MPI installed to? Maybe you need to set the $PATH for a non-interactive login in your ~/.bashrc to include this location on the slave node.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On 29/07//2013 05:00, meng wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;   Thank you for the reply.
</span><br>
<span class="quotelev2">&gt;&gt;   In examples directory on the computer c1, command &quot;mpiexec -np 4 hello_c&quot; is correctly executed.
</span><br>
<span class="quotelev2">&gt;&gt;  If I run &quot; mpiexec -machinefile hosts hello_c &quot; on computer c1, where hosts contains two line :
</span><br>
<span class="quotelev2">&gt;&gt; &quot;  node3
</span><br>
<span class="quotelev2">&gt;&gt;   localhost
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; the screen displays as follows:
</span><br>
<span class="quotelev2">&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 5247) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;   I dont know whats wrong with it.
</span><br>
<span class="quotelev2">&gt;&gt;   Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;  Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Meng
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At 2013-07-27 16:44:56,Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Am 27.07.2013 um 08:48 schrieb meng:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    what 's the requriement, especially on ssh, to run openmpi? I have two computers, say c1 and c2. Through ssh, c1 can access c2 without password, but c2 can't access c1. Under this environment, can I use openmpi to compute parallely? 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;as long as you execute `mpiexec` only on c1, it should work. But you can't start a job on c2.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;-- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  Regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; meng
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
