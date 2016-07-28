<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 12:19:09 2013" -->
<!-- isoreceived="20130402161909" -->
<!-- sent="Tue, 02 Apr 2013 23:18:59 +0700" -->
<!-- isosent="20130402161859" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="515B04F3.2090803_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D2AC484-60DB-4B16-B119-8E9FCCAAAC1D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-04-02 12:18:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21662.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/2/13 10:45 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...tell you what. I'll add the ability for OMPI to set the limit to a user-specified level upon launch of each process. This will give you some protection and flexibility.
</span><br>
<p>That would be excellent ;)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I forget, so please forgive the old man's fading memory - what version of OMPI are you using? I'll backport a patch for you.
</span><br>
<p>It's openmpi-1.6.3-x86_64, if that helps...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2013, at 8:40 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/30/13 8:46 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, so your problem is identified as a stack size problem. I went into these limitations using Intel fortran compilers on large data problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, it seems you can increase your stack size as &quot;ulimit -s unlimited&quot; works (you didn't enforce the system hard limit). The best way  is to set this setting in your .bashrc file so it will works on every node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But setting it to unlimited may not be really safe. IE, if you got in a badly coded recursive function calling itself without a stop condition you can request all the system memory and crash the node. So set a large but limited value, it's safer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I feel the pain you mentioned :). With -s unlimited now some of our nodes are easily down (completely) and needed to be hard reset!!! (whereas we never had any node down like that before even with the killed or badly coded jobs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking for a safer number of ulimit -s other than &quot;unlimited&quot; now... :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm managing a cluster and I always set a maximum value to stack size. I also limit the memory available for each core for system stability. If a user request only one of the 12 cores of a node he can only access 1/12 of the node memory amount. If he needs more memory he has to request 2 cores, even if he uses a sequential code. This avoid crashing jobs of other users on the same node with memory requirements. But this is not configured on your node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do not know about your code but:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) did you check stack limitations ? Typically intel fortran codes needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Check ulimit -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First time I heard of stack limitations. Anyway, ulimit -a gives
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ulimit -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pending signals                 (-i) 127368
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So stack size is 10MB??? Does this one create problem? How do I change this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) did your node uses cpuset and memory limitation like fake numa to set the maximum amount of memory available for a job ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not really understand (also first time heard of fake numa), but I am pretty sure we do not have such things. The server I tried was a dedicated server with 2 x5420 and 16GB physical memory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am sorry if this question had been asked before, but after ten days of searching/working on the system, I surrender :(. We try to use mpirun to run abinit (abinit.org) which in turns will call an input file to run some simulation. The command to run is pretty simple
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We ran this command on a server with two quad core x5420 and 16GB of memory. I called only 4 core, and I guess in theory each of the core should take up to 2GB each.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In the output of the log, there is something about memory:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; P This job should need less than                     717.175 Mbytes of memory.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Rough estimation (10% accuracy) of disk space for files :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 Mbytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So basically it reported that the above job should not take more than 718MB each core.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But I still have the Segmentation Fault error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 16099 on node biobos exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The system already has limits up to unlimited:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ cat /etc/security/limits.conf | grep -v '#'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I also tried to run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; before the mpirun command above, but it did not help at all.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If we adjust the parameters of the input.files to give the reported mem per core is less than 512MB, then the job runs fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; D.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21662.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21658.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21660.php">Gus Correa: "Re: [OMPI users] memory per core/process"</a>
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
