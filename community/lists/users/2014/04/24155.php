<?
$subject_val = "Re: [OMPI users] can't run mpi-jobs on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 10:26:35 2014" -->
<!-- isoreceived="20140411142635" -->
<!-- sent="Fri, 11 Apr 2014 07:25:36 -0700" -->
<!-- isosent="20140411142536" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run mpi-jobs on remote host" -->
<!-- id="1F715178-77B3-45DC-BCCD-B1DBF6D782B0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f97c8f180dcd4d52bf0d4b89a2c5794d_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run mpi-jobs on remote host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 10:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24156.php">Allan Wu: "[OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>In reply to:</strong> <a href="24151.php">Lubrano Francesco: "[OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p>short answer: you need to be able to ssh to the remote hosts without a password
<br>
<p><p>On Apr 11, 2014, at 1:09 AM, Lubrano Francesco &lt;lubrano.francesco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear MPI users,
</span><br>
<span class="quotelev1">&gt; I have a problem with open-mpi (version 1.8).
</span><br>
<span class="quotelev1">&gt; I'm just beginning to undestand how mpi works and I can't find solution of my problem on FAQ page.
</span><br>
<span class="quotelev1">&gt; I have two machines (a local host and a remote host) with linux open-suse (latest version) and open-mpi 1.8
</span><br>
<span class="quotelev1">&gt; I can run open-mpi jobs on both machines from theirself (in a &quot;local&quot; way).
</span><br>
<span class="quotelev1">&gt; I have not connections problem: ssh from the first to the second works correctly and I can run programs on remote machine.
</span><br>
<span class="quotelev1">&gt; If I run a simple non mpi program on the remot host from the local one, it doesnt' work. I think it is a buffer pointer problem (status 1). I didn't change open-mpi settings and PATH is correct. I have just one open-mpi versione on both of them. Open-mpi doesn't show any error: just return to the local machine.
</span><br>
<span class="quotelev1">&gt; I can also request to run a false program: it does not change. on the terminal I can read
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; francesco_at_linux-hldu:~&gt; mpirun -host Frank_at_158.110.39.110 hostname
</span><br>
<span class="quotelev1">&gt; Password: 
</span><br>
<span class="quotelev1">&gt; francesco_at_linux-hldu:~&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I request debug, the result is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; francesco_at_linux-hldu:~&gt; mpirun -d --host Frank_at_158.110.39.110 hostname
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] procdir: /tmp/openmpi-sessions-francesco_at_linux-hldu_0/33429/0/0
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] jobdir: /tmp/openmpi-sessions-francesco_at_linux-hldu_0/33429/0
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] top: openmpi-sessions-francesco_at_linux-hldu_0
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Password: 
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] procdir: /tmp/openmpi-sessions-Frank_at_linux-o5sl_0/33429/0/1
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] jobdir: /tmp/openmpi-sessions-Frank_at_linux-o5sl_0/33429/0
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] top: openmpi-sessions-Frank_at_linux-o5sl_0
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:04273] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 1
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02537] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you understand where is the problem? How can I get more information?
</span><br>
<span class="quotelev1">&gt; Thank you for your cooperation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Francesco 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24156.php">Allan Wu: "[OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>In reply to:</strong> <a href="24151.php">Lubrano Francesco: "[OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
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
