<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 17:56:31 2012" -->
<!-- isoreceived="20120726215631" -->
<!-- sent="Thu, 26 Jul 2012 23:56:17 +0200" -->
<!-- isosent="20120726215617" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="37D6FC08-B5BD-4EC3-98BB-EBCDEB4FEEB0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92106F22-B070-4E0B-A55F-C0E2BD09EA39_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 17:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19832.php">Sayre, Alan N: "[OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.07.2012 um 23:48 schrieb Reuti:
<br>
<p><span class="quotelev1">&gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a purely parallel job that runs ~100 processes. Each process has ~identical 
</span><br>
<span class="quotelev2">&gt;&gt; overhead so the speed of the program is dominated by the slowest processor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For this reason, I would like to restrict the job to a specific set of identical (fast)
</span><br>
<span class="quotelev2">&gt;&gt; processors on our cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me what affect these 
</span><br>
<span class="quotelev2">&gt;&gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot; environment as :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where jobfile contains the command
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -l &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe mpich 101 jobfile.job
</span><br>
<p>Or shorter:
<br>
<p>$ qsub -l &quot;h=compute-5*&amp;(*-[1-9]|*-[1-2][0-9]|*-3[0-2])&quot; -pe mpich 101 jobfile.job
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32 on our machine, 
</span><br>
<span class="quotelev2">&gt;&gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Erik
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt;&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt;&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt;&gt; f : 214 645 5948
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
<li><strong>Next message:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19832.php">Sayre, Alan N: "[OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19834.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
