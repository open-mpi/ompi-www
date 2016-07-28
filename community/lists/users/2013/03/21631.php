<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 06:22:40 2013" -->
<!-- isoreceived="20130330102240" -->
<!-- sent="Sat, 30 Mar 2013 17:22:31 +0700" -->
<!-- isosent="20130330102231" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="5156BCE7.1070802_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51569E9F.1060607_at_hmg.inpg.fr" -->
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
<strong>Date:</strong> 2013-03-30 06:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21632.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21630.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21630.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21636.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
<br>
<span class="quotelev1">&gt; I do not know about your code but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) did you check stack limitations ? Typically intel fortran codes 
</span><br>
<span class="quotelev1">&gt; needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev1">&gt; Check ulimit -a
</span><br>
<p>First time I heard of stack limitations. Anyway, ulimit -a gives
<br>
<p>$ ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 127368
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) 10240
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 1024
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p>So stack size is 10MB??? Does this one create problem? How do I change this?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) did your node uses cpuset and memory limitation like fake numa to 
</span><br>
<span class="quotelev1">&gt; set the maximum amount of memory available for a job ?
</span><br>
<p>Not really understand (also first time heard of fake numa), but I am 
<br>
pretty sure we do not have such things. The server I tried was a 
<br>
dedicated server with 2 x5420 and 16GB physical memory.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Duke Nguyen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry if this question had been asked before, but after ten days 
</span><br>
<span class="quotelev2">&gt;&gt; of searching/working on the system, I surrender :(. We try to use 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to run abinit (abinit.org) which in turns will call an input 
</span><br>
<span class="quotelev2">&gt;&gt; file to run some simulation. The command to run is pretty simple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We ran this command on a server with two quad core x5420 and 16GB of 
</span><br>
<span class="quotelev2">&gt;&gt; memory. I called only 4 core, and I guess in theory each of the core 
</span><br>
<span class="quotelev2">&gt;&gt; should take up to 2GB each.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the output of the log, there is something about memory:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P This job should need less than                     717.175 Mbytes 
</span><br>
<span class="quotelev2">&gt;&gt; of memory.
</span><br>
<span class="quotelev2">&gt;&gt;   Rough estimation (10% accuracy) of disk space for files :
</span><br>
<span class="quotelev2">&gt;&gt;   WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 
</span><br>
<span class="quotelev2">&gt;&gt; Mbytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So basically it reported that the above job should not take more than 
</span><br>
<span class="quotelev2">&gt;&gt; 718MB each core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I still have the Segmentation Fault error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 16099 on node biobos 
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The system already has limits up to unlimited:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/security/limits.conf | grep -v '#'
</span><br>
<span class="quotelev2">&gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried to run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; before the mpirun command above, but it did not help at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we adjust the parameters of the input.files to give the reported 
</span><br>
<span class="quotelev2">&gt;&gt; mem per core is less than 512MB, then the job runs fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21632.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21630.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21630.php">Patrick B&#233;gou: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21636.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
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
