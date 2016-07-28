<?
$subject_val = "Re: [OMPI users] --preload-binary does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 15:27:29 2014" -->
<!-- isoreceived="20140606192729" -->
<!-- sent="Fri, 6 Jun 2014 21:27:21 +0200" -->
<!-- isosent="20140606192721" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --preload-binary does not work" -->
<!-- id="6A86938D-3DA6-4FB8-B9C9-6610717A0DE9_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B6496950-4478-41B3-B3EA-7F5BF3798023_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] --preload-binary does not work<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 15:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24583.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes	to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24587.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24587.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.06.2014 um 21:04 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Supposed to, yes - but I don't know how much testing it has seen. I can try to take a look
</span><br>
<p>Wasn't it on the list recently, that 1.8.1 should do it even without passphraseless SSH between the nodes?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Jun 6, 2014, at 12:02 PM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI ver 1.8.1 on a cluster of 4 machines.
</span><br>
<span class="quotelev2">&gt;&gt; One Redhat 6.2 and three busybox machine. They are all 64bit environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to use --preload-binary option to send the binary file to hosts but it's not working.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # /mpi/bin/mpirun --prefix /mpi --preload-files ./a.out --allow-run-as-root --np 4 --host box0101,box0103 --preload-binary ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev2">&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Executable: ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Node: box0101
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 17.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 17 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I sent the binary by SCP beforehand, the command works fine. SCP is working fine without password between the hosts.
</span><br>
<span class="quotelev2">&gt;&gt; Is the option supposed to work?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eiichi
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24583.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes	to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24587.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24587.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
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
