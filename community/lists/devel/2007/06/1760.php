<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 11:12:31 2007" -->
<!-- isoreceived="20070625151231" -->
<!-- sent="Mon, 25 Jun 2007 11:10:56 -0400" -->
<!-- isosent="20070625151056" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467FDB00.4000706_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="467FCF80.7070108_at_gmx.net" -->
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
<strong>Date:</strong> 2007-06-25 11:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sadfub_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Pak Lui schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; sadfub_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for late reply, but I havent had access to the machine at the weekend.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't really know what this means.  People have explained &quot;loose&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vs. &quot;tight&quot; integration to me before, but since I'm not an SGE user,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the definitions always fall away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I *assume* loose coupled jobs, are just jobs, where the SGE find some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes to process them and from then on, it doesn't care about anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in conjunction to the jobs. In contrast to tight coupled jobs, where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE take care for sub process which could spwan from the job and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate them too in case of a failure, or take care of specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Based on your prior e-mail, it looks like you are always invoking  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ulimit&quot; via &quot;pdsh&quot;, even under SGE jobs.  This is incorrect. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can't you just submit an SGE job script that runs &quot;ulimit&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/csh -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname &amp;&amp; ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ATM I'm quite confused: cause I want to use the c-shell, but ulimit is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just for bash. The c-shell uses limit... hmm.. and SGE uses obviously
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash, instead of my request for csh in the first line. But if I just use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash I get the same limits:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -sh-3.00$ cat MPI_Job.o112116
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max user processes              (-u) 139264
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oops =&gt; 32 kbytes... So this isn't OMPI's fault.
</span><br>
<span class="quotelev2">&gt;&gt; this looks like sge_execd isn't able to source the correct system 
</span><br>
<span class="quotelev2">&gt;&gt; defaults from the limit.conf file after you applied the change. Maybe 
</span><br>
<span class="quotelev2">&gt;&gt; you will need to restart the daemon?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes I posted the same question to the sun grid engine mailing list, and
</span><br>
<span class="quotelev1">&gt; as Jeff initially supposed it was the inproper limits for the daemons
</span><br>
<span class="quotelev1">&gt; (sgeexec). So I've to edit each node's init script
</span><br>
<span class="quotelev1">&gt; (/etc/init.d/sgeexecd), and put &quot;ulimit -l unlimited&quot; before starting
</span><br>
<span class="quotelev1">&gt; sge_execd. Then kill all sgeexecd's (running jobs won't be affected if
</span><br>
<span class="quotelev1">&gt; you use &quot;qconf -ke all&quot;) then restart every node's sgeexecd. After that
</span><br>
<span class="quotelev1">&gt; every thing with SGE and OMPI 1.1.1 was fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But for the whole question just read the small thread at:
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=20390">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=20390</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point big thanks to Jeff, and all other which helped me!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any suggestions to the compilation error?
</span><br>
<p>Are you referring to this SEGV error here? I am assuming this is OMPI 
<br>
1.1.1 so you are using rsh PLS to launch your executables (using loose 
<br>
integration).
<br>
<p><span class="quotelev1"> &gt;-sh-3.00$ ompi/bin/mpirun -d -np 2 -H node03,node06 hostname
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1"> &gt; [headnode:23178]        universe default-universe-23178
</span><br>
<span class="quotelev1"> &gt; [headnode:23178]        user me
</span><br>
<span class="quotelev1"> &gt; [headnode:23178]        host headnode
</span><br>
<span class="quotelev1"> &gt; [headnode:23178]        jobid 0
</span><br>
<span class="quotelev1"> &gt; [headnode:23178]        procid 0
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] procdir:
</span><br>
<span class="quotelev1"> &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0/0
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] jobdir:
</span><br>
<span class="quotelev1"> &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] unidir:
</span><br>
<span class="quotelev1"> &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] top: openmpi-sessions-me_at_headnode_0
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] tmp: /tmp
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [0,0,0] contact_file
</span><br>
<span class="quotelev1"> &gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/universe-
</span><br>
<span class="quotelev1"> &gt; setup.txt
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] *** Process received signal ***
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] Failing at address: 0x1
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 0] /lib64/tls/libpthread.so.0 [0x39ed80c430]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 1] /lib64/tls/libc.so.6(strcmp+0) [0x39ecf6ff00]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 2]
</span><br>
<span class="quotelev1"> &gt; /home/me/ompi/lib/openmpi/mca_pls_rsh.so(orte_pls_rsh_launch+0x24f)
</span><br>
<span class="quotelev1"> &gt; [0x2a9723cc7f]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 3] /home/me/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1"> &gt; [0x2a9764fa90]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 4] /home/me/ompi/bin/mpirun(orterun+0x35b)
</span><br>
<span class="quotelev1"> &gt; [0x402ca3]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 5] /home/me/ompi/bin/mpirun(main+0x1b) [0x402943]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1"> &gt; [0x39ecf1c3fb]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] [ 7] /home/me/ompi/bin/mpirun [0x40289a]
</span><br>
<span class="quotelev1"> &gt; [headnode:23178] *** End of error message ***
</span><br>
<span class="quotelev1"> &gt; Segmentation fault
</span><br>
<p>So is it true that SEGV only occurred under the SGE environment and not 
<br>
a normal environment? If it is then I am baffled because starting rsh 
<br>
pls under the SGE environment in 1.1.1 should be no different than 
<br>
starting rsh pls without SGE.
<br>
<p>There seems to be only one strcmp that can fail in the 
<br>
orte_pls_rsh_launch(). I can only assume there is some memory corruption 
<br>
when getting either ras_node-&gt;node_name or orte_system_info.nodename for 
<br>
strcmp.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/tags/v1.1-series/v1.1.1/orte/mca/pls/rsh/pls_rsh_module.c">https://svn.open-mpi.org/trac/ompi/browser/tags/v1.1-series/v1.1.1/orte/mca/pls/rsh/pls_rsh_module.c</a>
<br>
<p>Maybe a way to workaround it is by using a more recent OMPI version. A 
<br>
lot of things in ORTE has been revamped since 1.1 so I would encourage 
<br>
you to try a more recent OMPI since there maybe some fixes that probably 
<br>
didn't get brought over to 1.1. Plus with 1.2 you should be able to use 
<br>
the tight integration with the gridengine module there.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; many many thousand thanks for the great help here in the forum!
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
<li><strong>Next message:</strong> <a href="1761.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1759.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
