<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 11:28:11 2013" -->
<!-- isoreceived="20130330152811" -->
<!-- sent="Sat, 30 Mar 2013 08:28:03 -0700" -->
<!-- isosent="20130330152803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="5B286034-C639-40AD-8424-054935E6E206_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D48654B8-61E1-4B00-B4CD-AD543D88EDC0_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 11:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Previous message:</strong> <a href="21638.php">Gustavo Correa: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21638.php">Gustavo Correa: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: there is an MCA param that helps with such problems:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_set_max_sys_limits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Set to non-zero to automatically set any system-imposed limits to the maximum allowed&quot;,
<br>
<p>At the moment, it only sets the limits on number of files open, and max size of a file we can create. Easy enough to add the stack size, though as someone pointed out, it has some negatives as well.
<br>
<p><p>On Mar 30, 2013, at 7:35 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2013, at 10:02 AM, Duke Nguyen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/30/13 8:20 PM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 30.03.2013 um 13:26 schrieb Tim Prince:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 03/30/2013 06:36 AM, Duke Nguyen wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 3/30/13 5:22 PM, Duke Nguyen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 3/30/13 3:13 PM, Patrick B&#233;gou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not know about your code but:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) did you check stack limitations ? Typically intel fortran codes needs large amount of stack when the problem size increase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Check ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; First time I heard of stack limitations. Anyway, ulimit -a gives
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pending signals                 (-i) 127368
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So stack size is 10MB??? Does this one create problem? How do I change this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I did $ ulimit -s unlimited to have stack size to be unlimited, and the job ran fine!!! So it looks like stack limit is the problem. Questions are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * how do I set this automatically (and permanently)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * should I set all other ulimits to be unlimited?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In our environment, the only solution we found is to have mpirun run a script on each node which sets ulimit (as well as environment variables which are more convenient to set there than in the mpirun), before starting the executable.  We had expert recommendations against this but no other working solution.  It seems unlikely that you would want to remove any limits which work at default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stack size unlimited in reality is not unlimited; it may be limited by a system limit or implementation.  As we run up to 120 threads per rank and many applications have threadprivate data regions, ability to run without considering stack limit is the exception rather than the rule.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even if I would be the only user on a cluster of machines, I would define this in any queuingsystem to set the limits for the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry if I dont get this correctly, but do you mean I should set this using Torque/Maui (our queuing manager) instead of the system itself (/etc/security/limits.conf and /etc/profile.d/)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Duke
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do both.
</span><br>
<span class="quotelev1">&gt; Set memlock and stacksize to unlimited, and increase the maximum number of
</span><br>
<span class="quotelev1">&gt; open files  in the pbs_mom script in /etc/init.d, and do the same in /etc/security/limits.conf.
</span><br>
<span class="quotelev1">&gt; This maybe an overzealous  &quot;belt and suspenders&quot; policy, but it works.
</span><br>
<span class="quotelev1">&gt; As everybody else said, a small stacksize is a common cause of segmentation fault in
</span><br>
<span class="quotelev1">&gt; large codes.
</span><br>
<span class="quotelev1">&gt; Basically all codes that we run here have this problem, with too many
</span><br>
<span class="quotelev1">&gt; automatic arrays, structures, etc in functions and subroutines. 
</span><br>
<span class="quotelev1">&gt; But also a small memlock is trouble for OFED/Infinband, and the small (default) 
</span><br>
<span class="quotelev1">&gt; max number of open file handles may hit the limit easily if many programs 
</span><br>
<span class="quotelev1">&gt; (or poorly written  programs) are running in the same node.
</span><br>
<span class="quotelev1">&gt; The default Linux distribution limits don't seem to be tailored for HPC, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa 
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
<li><strong>Next message:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Previous message:</strong> <a href="21638.php">Gustavo Correa: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21638.php">Gustavo Correa: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
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
