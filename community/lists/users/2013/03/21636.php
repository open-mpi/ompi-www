<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 09:40:53 2013" -->
<!-- isoreceived="20130330134053" -->
<!-- sent="Sat, 30 Mar 2013 14:46:40 +0100" -->
<!-- isosent="20130330134640" -->
<!-- name="Patrick B&#233;gou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="5156ECC0.7010804_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5156BCE7.1070802_at_gmx.com" -->
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
<strong>Date:</strong> 2013-03-30 09:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21637.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21657.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, so your problem is identified as a stack size problem. I went into 
<br>
these limitations using Intel fortran compilers on large data problems.
<br>
<p>First, it seems you can increase your stack size as &quot;ulimit -s 
<br>
unlimited&quot; works (you didn't enforce the system hard limit). The best 
<br>
way  is to set this setting in your .bashrc file so it will works on 
<br>
every node.
<br>
But setting it to unlimited may not be really safe. IE, if you got in a 
<br>
badly coded recursive function calling itself without a stop condition 
<br>
you can request all the system memory and crash the node. So set a large 
<br>
but limited value, it's safer.
<br>
<p>I'm managing a cluster and I always set a maximum value to stack size. I 
<br>
also limit the memory available for each core for system stability. If a 
<br>
user request only one of the 12 cores of a node he can only access 1/12 
<br>
of the node memory amount. If he needs more memory he has to request 2 
<br>
cores, even if he uses a sequential code. This avoid crashing jobs of 
<br>
other users on the same node with memory requirements. But this is not 
<br>
configured on your node.
<br>
<p>Duke Nguyen a &#233;crit :
<br>
<span class="quotelev1">&gt; On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I do not know about your code but:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) did you check stack limitations ? Typically intel fortran codes 
</span><br>
<span class="quotelev2">&gt;&gt; needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev2">&gt;&gt; Check ulimit -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First time I heard of stack limitations. Anyway, ulimit -a gives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 127368
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So stack size is 10MB??? Does this one create problem? How do I change 
</span><br>
<span class="quotelev1">&gt; this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) did your node uses cpuset and memory limitation like fake numa to 
</span><br>
<span class="quotelev2">&gt;&gt; set the maximum amount of memory available for a job ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really understand (also first time heard of fake numa), but I am 
</span><br>
<span class="quotelev1">&gt; pretty sure we do not have such things. The server I tried was a 
</span><br>
<span class="quotelev1">&gt; dedicated server with 2 x5420 and 16GB physical memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am sorry if this question had been asked before, but after ten 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; days of searching/working on the system, I surrender :(. We try to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use mpirun to run abinit (abinit.org) which in turns will call an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; input file to run some simulation. The command to run is pretty simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We ran this command on a server with two quad core x5420 and 16GB of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory. I called only 4 core, and I guess in theory each of the core 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should take up to 2GB each.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the output of the log, there is something about memory:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P This job should need less than                     717.175 Mbytes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Rough estimation (10% accuracy) of disk space for files :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mbytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So basically it reported that the above job should not take more 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than 718MB each core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I still have the Segmentation Fault error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 16099 on node biobos 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The system already has limits up to unlimited:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat /etc/security/limits.conf | grep -v '#'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the mpirun command above, but it did not help at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we adjust the parameters of the input.files to give the reported 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem per core is less than 512MB, then the job runs fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21637.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21631.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21657.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
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
