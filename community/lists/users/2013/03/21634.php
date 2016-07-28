<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 08:26:10 2013" -->
<!-- isoreceived="20130330122610" -->
<!-- sent="Sat, 30 Mar 2013 08:26:05 -0400" -->
<!-- isosent="20130330122605" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="5156D9DD.8050406_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5156C01C.8070708_at_gmx.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 08:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/30/2013 06:36 AM, Duke Nguyen wrote:
<br>
<span class="quotelev1">&gt; On 3/30/13 5:22 PM, Duke Nguyen wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did $ ulimit -s unlimited to have stack size to be unlimited, and 
</span><br>
<span class="quotelev1">&gt; the job ran fine!!! So it looks like stack limit is the problem. 
</span><br>
<span class="quotelev1">&gt; Questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * how do I set this automatically (and permanently)?
</span><br>
<span class="quotelev1">&gt;  * should I set all other ulimits to be unlimited?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In our environment, the only solution we found is to have mpirun run a 
<br>
script on each node which sets ulimit (as well as environment variables 
<br>
which are more convenient to set there than in the mpirun), before 
<br>
starting the executable.  We had expert recommendations against this but 
<br>
no other working solution.  It seems unlikely that you would want to 
<br>
remove any limits which work at default.
<br>
Stack size unlimited in reality is not unlimited; it may be limited by a 
<br>
system limit or implementation.  As we run up to 120 threads per rank 
<br>
and many applications have threadprivate data regions, ability to run 
<br>
without considering stack limit is the exception rather than the rule.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21633.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21635.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
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
