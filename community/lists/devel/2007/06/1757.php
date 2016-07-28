<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 09:45:16 2007" -->
<!-- isoreceived="20070625134516" -->
<!-- sent="Mon, 25 Jun 2007 09:44:54 -0400" -->
<!-- isosent="20070625134454" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467FC6D6.1040303_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="467F690B.2080200_at_gmx.net" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 09:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sadfub_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Sorry for late reply, but I havent had access to the machine at the weekend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't really know what this means.  People have explained &quot;loose&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; vs. &quot;tight&quot; integration to me before, but since I'm not an SGE user,  
</span><br>
<span class="quotelev2">&gt;&gt; the definitions always fall away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *assume* loose coupled jobs, are just jobs, where the SGE find some
</span><br>
<span class="quotelev1">&gt; nodes to process them and from then on, it doesn't care about anything
</span><br>
<span class="quotelev1">&gt; in conjunction to the jobs. In contrast to tight coupled jobs, where the
</span><br>
<span class="quotelev1">&gt; SGE take care for sub process which could spwan from the job and
</span><br>
<span class="quotelev1">&gt; terminate them too in case of a failure, or take care of specified
</span><br>
<span class="quotelev1">&gt; resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Based on your prior e-mail, it looks like you are always invoking  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ulimit&quot; via &quot;pdsh&quot;, even under SGE jobs.  This is incorrect. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can't you just submit an SGE job script that runs &quot;ulimit&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev1">&gt; hostname &amp;&amp; ulimit -a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ATM I'm quite confused: cause I want to use the c-shell, but ulimit is
</span><br>
<span class="quotelev1">&gt; just for bash. The c-shell uses limit... hmm.. and SGE uses obviously
</span><br>
<span class="quotelev1">&gt; bash, instead of my request for csh in the first line. But if I just use
</span><br>
<span class="quotelev1">&gt; #!/bin/bash I get the same limits:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -sh-3.00$ cat MPI_Job.o112116
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 139264
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oops =&gt; 32 kbytes... So this isn't OMPI's fault.
</span><br>
<p>this looks like sge_execd isn't able to source the correct system 
<br>
defaults from the limit.conf file after you applied the change. Maybe 
<br>
you will need to restart the daemon?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What are the limits of the user that launches the SGE daemons?  I.e.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not, that could hamper SGE's ability to set the limits that you told
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The limits in /etc/security/limits.conf apply to all users (using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '*'), hence the SGE processes and deamons shouldn't have any limits.
</span><br>
<span class="quotelev2">&gt;&gt; Not really.  limits.conf is not universally applied; it's a PAM  
</span><br>
<span class="quotelev2">&gt;&gt; entity.  So for daemons that start via /etc/init.d scripts (or  
</span><br>
<span class="quotelev2">&gt;&gt; whatever the equivalent is on your system), PAM limits are not  
</span><br>
<span class="quotelev2">&gt;&gt; necessarily applied.  For example, I had to manually insert a &quot;ulimit  
</span><br>
<span class="quotelev2">&gt;&gt; -Hl unlimited&quot; in the startup script for my SLURM daemons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, ATM there are some important jobs in the queue (started some MONTHS
</span><br>
<span class="quotelev1">&gt; ago) so I cannot restart the daemon. Is there any other way than restart
</span><br>
<span class="quotelev1">&gt; (with proper limits) for ensuring the limits of a process?
</span><br>
<p>Would setting the limit in the ~/.cshrc workaround this? If neither this 
<br>
or restarting sge_execd doesn't set the correct limit for you (after you 
<br>
change the limit.conf), then I believe there is something wrong inside 
<br>
sge_execd not setting the limits correctly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your great help :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Gleb Natapov: "[OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
