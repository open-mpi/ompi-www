<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 07:42:24 2013" -->
<!-- isoreceived="20130402114224" -->
<!-- sent="Tue, 2 Apr 2013 13:42:10 +0200" -->
<!-- isosent="20130402114210" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="446669CA-EC16-45FE-8085-2227CC0FC00B_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="515ABF62.8020606_at_gmx.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-02 07:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21651.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21651.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21655.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21655.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 02.04.2013 um 13:22 schrieb Duke Nguyen:
<br>
<p><span class="quotelev1">&gt; On 4/1/13 9:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It's probably the same problem - try running 'mpirun -npernode 1 -tag-output ulimit -a&quot;  on the remote nodes and see what it says. I suspect you'll find that they aren't correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Somehow I could not run your advised CMD:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -l nodes=4:ppn=8 -I
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 481.biobos to start
</span><br>
<span class="quotelev1">&gt; qsub: job 481.biobos ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /usr/local/bin/mpirun -npernode 1 -tag-output ulimit -a
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<p>`ulimit` is a shell builtin:
<br>
<p>$ type ulimit
<br>
ulimit is a shell builtin
<br>
<p>It should work wit:
<br>
<p>$ /usr/local/bin/mpirun -npernode 1 -tag-output  sh -c &quot;ulimit -a&quot;
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Executable: ulimit
</span><br>
<span class="quotelev1">&gt; Node: node0108.biobos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But anyway, I figured out the reason. Yes, it is the cluster nodes that did not update ulimit settings (our system is a diskless node with warewulf so basically we have to update the vnfs and reboot all nodes before the nodes can run with new settings).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all the helps :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW: the &quot;-tag-output'&quot; option marks each line of output with the rank of the process. Since all the outputs will be interleaved, this will help you identify what came from each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2013, at 11:30 PM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/31/13 12:20 AM, Duke Nguyen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I should really have asked earlier. Thanks for all the helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I was excited too soon :). Increasing stacksize does help if I run a job in a dedicated server. Today I tried to modify the cluster (/etc/security/limits.conf, /etc/init.d/pbs_mom) and tried to run a different job with 4 nodes/8 core each (nodes=4:ppn=8), but I still get the mpirun error. My ulimit now reads:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending signals                 (-i) 8271027
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                      (-n) 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max user processes              (-u) 8192
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any other advice???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/30/13 10:28 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: there is an MCA param that helps with such problems:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         opal_set_max_sys_limits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  &quot;Set to non-zero to automatically set any system-imposed limits to the maximum allowed&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At the moment, it only sets the limits on number of files open, and max size of a file we can create. Easy enough to add the stack size, though as someone pointed out, it has some negatives as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 30, 2013, at 7:35 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 30, 2013, at 10:02 AM, Duke Nguyen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 3/30/13 8:20 PM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 30.03.2013 um 13:26 schrieb Tim Prince:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 03/30/2013 06:36 AM, Duke Nguyen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 3/30/13 5:22 PM, Duke Nguyen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not know about your code but:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) did you check stack limitations ? Typically intel fortran codes needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Check ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; First time I heard of stack limitations. Anyway, ulimit -a gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pending signals                 (-i) 127368
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So stack size is 10MB??? Does this one create problem? How do I change this?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I did $ ulimit -s unlimited to have stack size to be unlimited, and the job ran fine!!! So it looks like stack limit is the problem. Questions are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * how do I set this automatically (and permanently)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * should I set all other ulimits to be unlimited?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In our environment, the only solution we found is to have mpirun run a script on each node which sets ulimit (as well as environment variables which are more convenient to set there than in the mpirun), before starting the executable.  We had expert recommendations against this but no other working solution.  It seems unlikely that you would want to remove any limits which work at default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stack size unlimited in reality is not unlimited; it may be limited by a system limit or implementation.  As we run up to 120 threads per rank and many applications have threadprivate data regions, ability to run without considering stack limit is the exception rather than the rule.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Even if I would be the only user on a cluster of machines, I would define this in any queuingsystem to set the limits for the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry if I dont get this correctly, but do you mean I should set this using Torque/Maui (our queuing manager) instead of the system itself (/etc/security/limits.conf and /etc/profile.d/)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Duke
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We do both.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Set memlock and stacksize to unlimited, and increase the maximum number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; open files  in the pbs_mom script in /etc/init.d, and do the same in /etc/security/limits.conf.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This maybe an overzealous  &quot;belt and suspenders&quot; policy, but it works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As everybody else said, a small stacksize is a common cause of segmentation fault in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; large codes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Basically all codes that we run here have this problem, with too many
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; automatic arrays, structures, etc in functions and subroutines.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But also a small memlock is trouble for OFED/Infinband, and the small (default)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; max number of open file handles may hit the limit easily if many programs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (or poorly written  programs) are running in the same node.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The default Linux distribution limits don't seem to be tailored for HPC, I guess.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="21653.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21651.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21651.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21655.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21655.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
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
