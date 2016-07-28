<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 10:43:55 2007" -->
<!-- isoreceived="20070622144355" -->
<!-- sent="Fri, 22 Jun 2007 16:44:09 +0200" -->
<!-- isosent="20070622144409" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467BE039.2000304_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9776CF7A-E22D-4FB7-8078-E922372D23D0_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-22 10:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres schrieb:
<br>
<p><span class="quotelev2">&gt;&gt; Hmm, I've heard about conflicts with OMPI 1.2.x and OFED 1.1 (sorry no
</span><br>
<span class="quotelev2">&gt;&gt; refference here),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unaware of any problems with OMPI 1.2.x and OFED 1.1.  I run OFED  
</span><br>
<span class="quotelev1">&gt; 1.1 on my cluster at Cisco and have many different versions of OMPI  
</span><br>
<span class="quotelev1">&gt; installed (1.2, trunk, etc.).
</span><br>
<p>Yes you are right, I read wrong (in the OMPI 1.2 changelog (README) OFED
<br>
1.0 isn't considered to work with OMPI 1.2. Sorry..).
<br>
<p><span class="quotelev2">&gt;&gt; and I've got no luck producing a working OMPI
</span><br>
<span class="quotelev2">&gt;&gt; installation (&quot;mpirun --help&quot; runs, and ./IMB-MPI compiles and runs  
</span><br>
<span class="quotelev2">&gt;&gt; too,
</span><br>
<span class="quotelev2">&gt;&gt; but &quot;mpirun -np 2 node03,node14 IMB-MPI1&quot; doesnt (segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault))...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send more information on this?  See <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev1">&gt; community/help/
</span><br>
<p>-sh-3.00$ ompi/bin/mpirun -d -np 2 -H node03,node06 hostname
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] connect_uni: connection not allowed
<br>
[headnode:23178] [0,0,0] setting up session dir with
<br>
[headnode:23178]        universe default-universe-23178
<br>
[headnode:23178]        user me
<br>
[headnode:23178]        host headnode
<br>
[headnode:23178]        jobid 0
<br>
[headnode:23178]        procid 0
<br>
[headnode:23178] procdir:
<br>
/tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0/0
<br>
[headnode:23178] jobdir:
<br>
/tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0
<br>
[headnode:23178] unidir:
<br>
/tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178
<br>
[headnode:23178] top: openmpi-sessions-me_at_headnode_0
<br>
[headnode:23178] tmp: /tmp
<br>
[headnode:23178] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/universe-setup.txt
<br>
[headnode:23178] [0,0,0] wrote setup file
<br>
[headnode:23178] *** Process received signal ***
<br>
[headnode:23178] Signal: Segmentation fault (11)
<br>
[headnode:23178] Signal code: Address not mapped (1)
<br>
[headnode:23178] Failing at address: 0x1
<br>
[headnode:23178] [ 0] /lib64/tls/libpthread.so.0 [0x39ed80c430]
<br>
[headnode:23178] [ 1] /lib64/tls/libc.so.6(strcmp+0) [0x39ecf6ff00]
<br>
[headnode:23178] [ 2]
<br>
/home/me/ompi/lib/openmpi/mca_pls_rsh.so(orte_pls_rsh_launch+0x24f)
<br>
[0x2a9723cc7f]
<br>
[headnode:23178] [ 3] /home/me/ompi/lib/openmpi/mca_rmgr_urm.so
<br>
[0x2a9764fa90]
<br>
[headnode:23178] [ 4] /home/me/ompi/bin/mpirun(orterun+0x35b) [0x402ca3]
<br>
[headnode:23178] [ 5] /home/me/ompi/bin/mpirun(main+0x1b) [0x402943]
<br>
[headnode:23178] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x39ecf1c3fb]
<br>
[headnode:23178] [ 7] /home/me/ompi/bin/mpirun [0x40289a]
<br>
[headnode:23178] *** End of error message ***
<br>
Segmentation fault
<br>
<p><p><span class="quotelev2">&gt;&gt; yes I allready read the faq, and even setting them to unlimited has
</span><br>
<span class="quotelev2">&gt;&gt; shown not be working. In the SGE one could specify the limits to
</span><br>
<span class="quotelev2">&gt;&gt; SGE-jobs by e.g. the qmon tool, (configuring queues &gt; select queue &gt;
</span><br>
<span class="quotelev2">&gt;&gt; modify &gt; limits) But there is everything set to infinity. (Beside  
</span><br>
<span class="quotelev2">&gt;&gt; that,
</span><br>
<span class="quotelev2">&gt;&gt; the job is running with a static machinefile (is this an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;noninteractive&quot; job?)) How could I test ulimits of interactive and
</span><br>
<span class="quotelev2">&gt;&gt; noninteractive jobs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Launch an SGE job that calls the shell command &quot;limit&quot; (if you run C- 
</span><br>
<span class="quotelev1">&gt; shell variants) or &quot;ulimit -l&quot; (if you run Bourne shell variants).   
</span><br>
<span class="quotelev1">&gt; Ensure that the output is &quot;unlimited&quot;.
</span><br>
<p>I've done that allready, but how to distinguish between tight coupled
<br>
job ulimits and loose coupled job ulimits? I tested to pass
<br>
$TMPDIR/machines to a shell script which in turn delivers a &quot;ulimit -a&quot;,
<br>
*assuming* this is considered as a tight coupled job, but each node
<br>
returned unlimited.. and without this $TMPDIR/machines too. Even the
<br>
headnode is set to unlimited.
<br>
<p><span class="quotelev1">&gt; What are the limits of the user that launches the SGE daemons?  I.e.,  
</span><br>
<span class="quotelev1">&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If  
</span><br>
<span class="quotelev1">&gt; not, that could hamper SGE's ability to set the limits that you told  
</span><br>
<p>The limits in /etc/security/limits.conf apply to all users (using a
<br>
'*'), hence the SGE processes and deamons shouldn't have any limits.
<br>
<p><span class="quotelev1">&gt; it to via qmon (remember my disclaimer: I know nothing about SGE, so  
</span><br>
<span class="quotelev1">&gt; this is speculation).
</span><br>
<p>But thanks anyway =&gt; I will post this issue to an SGE mailing list soon.
<br>
The config.log and the `ompi_info --all` is attached. Thanks again to
<br>
all of you.
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1751/logs.tbz">logs.tbz</a>
</ul>
<!-- attachment="logs.tbz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1750.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1746.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
