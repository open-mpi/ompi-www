<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 10:21:33 2007" -->
<!-- isoreceived="20070625142133" -->
<!-- sent="Mon, 25 Jun 2007 16:21:52 +0200" -->
<!-- isosent="20070625142152" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467FCF80.7070108_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="467FC6D6.1040303_at_sun.com" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-25 10:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui schrieb:
<br>
<span class="quotelev1">&gt; sadfub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for late reply, but I havent had access to the machine at the weekend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't really know what this means.  People have explained &quot;loose&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vs. &quot;tight&quot; integration to me before, but since I'm not an SGE user,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the definitions always fall away.
</span><br>
<span class="quotelev2">&gt;&gt; I *assume* loose coupled jobs, are just jobs, where the SGE find some
</span><br>
<span class="quotelev2">&gt;&gt; nodes to process them and from then on, it doesn't care about anything
</span><br>
<span class="quotelev2">&gt;&gt; in conjunction to the jobs. In contrast to tight coupled jobs, where the
</span><br>
<span class="quotelev2">&gt;&gt; SGE take care for sub process which could spwan from the job and
</span><br>
<span class="quotelev2">&gt;&gt; terminate them too in case of a failure, or take care of specified
</span><br>
<span class="quotelev2">&gt;&gt; resources.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Based on your prior e-mail, it looks like you are always invoking  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ulimit&quot; via &quot;pdsh&quot;, even under SGE jobs.  This is incorrect. 
</span><br>
<span class="quotelev2">&gt;&gt; why?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't you just submit an SGE job script that runs &quot;ulimit&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/csh -f
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev2">&gt;&gt; hostname &amp;&amp; ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ATM I'm quite confused: cause I want to use the c-shell, but ulimit is
</span><br>
<span class="quotelev2">&gt;&gt; just for bash. The c-shell uses limit... hmm.. and SGE uses obviously
</span><br>
<span class="quotelev2">&gt;&gt; bash, instead of my request for csh in the first line. But if I just use
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash I get the same limits:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -sh-3.00$ cat MPI_Job.o112116
</span><br>
<span class="quotelev2">&gt;&gt; node02
</span><br>
<span class="quotelev2">&gt;&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev2">&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max user processes              (-u) 139264
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; oops =&gt; 32 kbytes... So this isn't OMPI's fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this looks like sge_execd isn't able to source the correct system 
</span><br>
<span class="quotelev1">&gt; defaults from the limit.conf file after you applied the change. Maybe 
</span><br>
<span class="quotelev1">&gt; you will need to restart the daemon?
</span><br>
<p>Yes I posted the same question to the sun grid engine mailing list, and
<br>
as Jeff initially supposed it was the inproper limits for the daemons
<br>
(sgeexec). So I've to edit each node's init script
<br>
(/etc/init.d/sgeexecd), and put &quot;ulimit -l unlimited&quot; before starting
<br>
sge_execd. Then kill all sgeexecd's (running jobs won't be affected if
<br>
you use &quot;qconf -ke all&quot;) then restart every node's sgeexecd. After that
<br>
every thing with SGE and OMPI 1.1.1 was fine.
<br>
<p>But for the whole question just read the small thread at:
<br>
<a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=20390">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=20390</a>
<br>
<p>At this point big thanks to Jeff, and all other which helped me!
<br>
<p>Are there any suggestions to the compilation error?
<br>
<p>many many thousand thanks for the great help here in the forum!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
