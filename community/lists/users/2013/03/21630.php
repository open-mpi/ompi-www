<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 04:07:29 2013" -->
<!-- isoreceived="20130330080729" -->
<!-- sent="Sat, 30 Mar 2013 09:13:19 +0100" -->
<!-- isosent="20130330081319" -->
<!-- name="Patrick B&#233;gou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="51569E9F.1060607_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5156685A.6030209_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory per core/process<br>
<strong>From:</strong> Patrick B&#233;gou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 04:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>In reply to:</strong> <a href="21628.php">Duke Nguyen: "[OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not know about your code but:
<br>
<p>1) did you check stack limitations ? Typically intel fortran codes needs 
<br>
large amount of stack when the problem size increase.
<br>
Check ulimit -a
<br>
<p>2) did your node uses cpuset and memory limitation like fake numa to set 
<br>
the maximum amount of memory available for a job ?
<br>
<p>Patrick
<br>
<p>Duke Nguyen a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry if this question had been asked before, but after ten days 
</span><br>
<span class="quotelev1">&gt; of searching/working on the system, I surrender :(. We try to use 
</span><br>
<span class="quotelev1">&gt; mpirun to run abinit (abinit.org) which in turns will call an input 
</span><br>
<span class="quotelev1">&gt; file to run some simulation. The command to run is pretty simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We ran this command on a server with two quad core x5420 and 16GB of 
</span><br>
<span class="quotelev1">&gt; memory. I called only 4 core, and I guess in theory each of the core 
</span><br>
<span class="quotelev1">&gt; should take up to 2GB each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the output of the log, there is something about memory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P This job should need less than                     717.175 Mbytes of 
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<span class="quotelev1">&gt;   Rough estimation (10% accuracy) of disk space for files :
</span><br>
<span class="quotelev1">&gt;   WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 Mbytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So basically it reported that the above job should not take more than 
</span><br>
<span class="quotelev1">&gt; 718MB each core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I still have the Segmentation Fault error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 16099 on node biobos 
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system already has limits up to unlimited:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /etc/security/limits.conf | grep -v '#'
</span><br>
<span class="quotelev1">&gt; * soft memlock unlimited
</span><br>
<span class="quotelev1">&gt; * hard memlock unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before the mpirun command above, but it did not help at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we adjust the parameters of the input.files to give the reported 
</span><br>
<span class="quotelev1">&gt; mem per core is less than 512MB, then the job runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
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
<li><strong>Next message:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>In reply to:</strong> <a href="21628.php">Duke Nguyen: "[OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
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
