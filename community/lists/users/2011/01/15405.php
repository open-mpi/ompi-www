<?
$subject_val = "Re: [OMPI users] bash: orted: command not found despite env vars being set";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 07:49:05 2011" -->
<!-- isoreceived="20110124124905" -->
<!-- sent="Mon, 24 Jan 2011 13:48:51 +0100" -->
<!-- isosent="20110124124851" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bash: orted: command not found despite env vars being set" -->
<!-- id="B3152ED1-7F72-4AC1-8DA5-306DB310F73C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikAaRo1Ws3TZzsug3aMpn+HJ6jASNyFxaQS9mWq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bash: orted: command not found despite env vars being set<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 07:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15406.php">Staffan Ronnas: "[OMPI users] Are there limitations on MPI_Alloc_mem?"</a>
<li><strong>Previous message:</strong> <a href="15404.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>In reply to:</strong> <a href="15403.php">Kedar Soparkar: "[OMPI users] bash: orted: command not found despite env vars being set"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 24.01.2011 um 11:47 schrieb Kedar Soparkar:
<br>
<p><span class="quotelev1">&gt; I'm trying to setup a small cluster of 2 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both nodes are running Fedora 11 Kernel 2.6.29.4, have the same user
</span><br>
<span class="quotelev1">&gt; mpiuser with the same password. Both of them have their env vars set
</span><br>
<span class="quotelev1">&gt; as follows in /etc/profile itself:
</span><br>
<p>This is syntax for which type of shell?
<br>
<p><span class="quotelev1">&gt; PATH                                usr/lib/openmpi/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH           usr/lib/openmpi/lib
</span><br>
<p>The leading slash is missing in case you want to specify absolute paths. And any set path should be retained and not be replaced:
<br>
<p>export PATH=/usr/lib/openmpi/bin${PATH:+:$PATH}
<br>
export LD_LIBRARY_PATH=/usr/lib/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Currently, mpirun executes successfully on either node individually.
</span><br>
<span class="quotelev1">&gt; However, when trying to run over the network, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_c-199 ~]$ mpirun -np 3 --hostfile .mpi_hostfile ./a.out
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 12639) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What fixes should I try to get the cluster to work?
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
<li><strong>Next message:</strong> <a href="15406.php">Staffan Ronnas: "[OMPI users] Are there limitations on MPI_Alloc_mem?"</a>
<li><strong>Previous message:</strong> <a href="15404.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>In reply to:</strong> <a href="15403.php">Kedar Soparkar: "[OMPI users] bash: orted: command not found despite env vars being set"</a>
<!-- nextthread="start" -->
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
