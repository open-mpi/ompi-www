<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 03:04:39 2007" -->
<!-- isoreceived="20070625070439" -->
<!-- sent="Mon, 25 Jun 2007 09:04:43 +0200" -->
<!-- isosent="20070625070443" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467F690B.2080200_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D90A479-C65D-4913-A66D-6B72C9B60FCD_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-25 03:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>In reply to:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for late reply, but I havent had access to the machine at the weekend.
<br>
<p><span class="quotelev1">&gt; I don't really know what this means.  People have explained &quot;loose&quot;  
</span><br>
<span class="quotelev1">&gt; vs. &quot;tight&quot; integration to me before, but since I'm not an SGE user,  
</span><br>
<span class="quotelev1">&gt; the definitions always fall away.
</span><br>
<p>I *assume* loose coupled jobs, are just jobs, where the SGE find some
<br>
nodes to process them and from then on, it doesn't care about anything
<br>
in conjunction to the jobs. In contrast to tight coupled jobs, where the
<br>
SGE take care for sub process which could spwan from the job and
<br>
terminate them too in case of a failure, or take care of specified
<br>
resources.
<br>
<p><span class="quotelev1">&gt; Based on your prior e-mail, it looks like you are always invoking  
</span><br>
<span class="quotelev1">&gt; &quot;ulimit&quot; via &quot;pdsh&quot;, even under SGE jobs.  This is incorrect. 
</span><br>
<p>why?
<br>
<p><span class="quotelev1">&gt; Can't you just submit an SGE job script that runs &quot;ulimit&quot;?
</span><br>
<p>#!/bin/csh -f
<br>
#$ -N MPI_Job
<br>
#$ -pe mpi 4
<br>
hostname &amp;&amp; ulimit -a
<br>
<p>ATM I'm quite confused: cause I want to use the c-shell, but ulimit is
<br>
just for bash. The c-shell uses limit... hmm.. and SGE uses obviously
<br>
bash, instead of my request for csh in the first line. But if I just use
<br>
#!/bin/bash I get the same limits:
<br>
<p>-sh-3.00$ cat MPI_Job.o112116
<br>
node02
<br>
core file size          (blocks, -c) unlimited
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 1024
<br>
max locked memory       (kbytes, -l) 32
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) unlimited
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 139264
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p>oops =&gt; 32 kbytes... So this isn't OMPI's fault.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; What are the limits of the user that launches the SGE daemons?  I.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not, that could hamper SGE's ability to set the limits that you told
</span><br>
<span class="quotelev2">&gt;&gt; The limits in /etc/security/limits.conf apply to all users (using a
</span><br>
<span class="quotelev2">&gt;&gt; '*'), hence the SGE processes and deamons shouldn't have any limits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really.  limits.conf is not universally applied; it's a PAM  
</span><br>
<span class="quotelev1">&gt; entity.  So for daemons that start via /etc/init.d scripts (or  
</span><br>
<span class="quotelev1">&gt; whatever the equivalent is on your system), PAM limits are not  
</span><br>
<span class="quotelev1">&gt; necessarily applied.  For example, I had to manually insert a &quot;ulimit  
</span><br>
<span class="quotelev1">&gt; -Hl unlimited&quot; in the startup script for my SLURM daemons.
</span><br>
<p>Hmm, ATM there are some important jobs in the queue (started some MONTHS
<br>
ago) so I cannot restart the daemon. Is there any other way than restart
<br>
(with proper limits) for ensuring the limits of a process?
<br>
<p><p>thanks for your great help :)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>In reply to:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
