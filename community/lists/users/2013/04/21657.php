<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 11:40:27 2013" -->
<!-- isoreceived="20130402154027" -->
<!-- sent="Tue, 02 Apr 2013 22:40:17 +0700" -->
<!-- isosent="20130402154017" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="515AFBE1.6040505_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5156ECC0.7010804_at_hmg.inpg.fr" -->
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
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-02 11:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21656.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21636.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/30/13 8:46 PM, Patrick B&#233;gou wrote:
<br>
<span class="quotelev1">&gt; Ok, so your problem is identified as a stack size problem. I went into 
</span><br>
<span class="quotelev1">&gt; these limitations using Intel fortran compilers on large data problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, it seems you can increase your stack size as &quot;ulimit -s 
</span><br>
<span class="quotelev1">&gt; unlimited&quot; works (you didn't enforce the system hard limit). The best 
</span><br>
<span class="quotelev1">&gt; way  is to set this setting in your .bashrc file so it will works on 
</span><br>
<span class="quotelev1">&gt; every node.
</span><br>
<span class="quotelev1">&gt; But setting it to unlimited may not be really safe. IE, if you got in 
</span><br>
<span class="quotelev1">&gt; a badly coded recursive function calling itself without a stop 
</span><br>
<span class="quotelev1">&gt; condition you can request all the system memory and crash the node. So 
</span><br>
<span class="quotelev1">&gt; set a large but limited value, it's safer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Now I feel the pain you mentioned :). With -s unlimited now some of our 
<br>
nodes are easily down (completely) and needed to be hard reset!!! 
<br>
(whereas we never had any node down like that before even with the 
<br>
killed or badly coded jobs).
<br>
<p>Looking for a safer number of ulimit -s other than &quot;unlimited&quot; now... :(
<br>
<p><span class="quotelev1">&gt; I'm managing a cluster and I always set a maximum value to stack size. 
</span><br>
<span class="quotelev1">&gt; I also limit the memory available for each core for system stability. 
</span><br>
<span class="quotelev1">&gt; If a user request only one of the 12 cores of a node he can only 
</span><br>
<span class="quotelev1">&gt; access 1/12 of the node memory amount. If he needs more memory he has 
</span><br>
<span class="quotelev1">&gt; to request 2 cores, even if he uses a sequential code. This avoid 
</span><br>
<span class="quotelev1">&gt; crashing jobs of other users on the same node with memory 
</span><br>
<span class="quotelev1">&gt; requirements. But this is not configured on your node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not know about your code but:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) did you check stack limitations ? Typically intel fortran codes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First time I heard of stack limitations. Anyway, ulimit -a gives
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev2">&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; pending signals                 (-i) 127368
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev2">&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So stack size is 10MB??? Does this one create problem? How do I 
</span><br>
<span class="quotelev2">&gt;&gt; change this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) did your node uses cpuset and memory limitation like fake numa to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set the maximum amount of memory available for a job ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not really understand (also first time heard of fake numa), but I am 
</span><br>
<span class="quotelev2">&gt;&gt; pretty sure we do not have such things. The server I tried was a 
</span><br>
<span class="quotelev2">&gt;&gt; dedicated server with 2 x5420 and 16GB physical memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am sorry if this question had been asked before, but after ten 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; days of searching/working on the system, I surrender :(. We try to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use mpirun to run abinit (abinit.org) which in turns will call an 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; input file to run some simulation. The command to run is pretty simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We ran this command on a server with two quad core x5420 and 16GB 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of memory. I called only 4 core, and I guess in theory each of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core should take up to 2GB each.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the output of the log, there is something about memory:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P This job should need less than                     717.175 Mbytes 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of memory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Rough estimation (10% accuracy) of disk space for files :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mbytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So basically it reported that the above job should not take more 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than 718MB each core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I still have the Segmentation Fault error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 16099 on node biobos 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The system already has limits up to unlimited:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cat /etc/security/limits.conf | grep -v '#'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before the mpirun command above, but it did not help at all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we adjust the parameters of the input.files to give the reported 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem per core is less than 512MB, then the job runs fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21656.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21636.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
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
