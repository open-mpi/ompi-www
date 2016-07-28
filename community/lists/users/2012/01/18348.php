<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 14:58:12 2012" -->
<!-- isoreceived="20120131195812" -->
<!-- sent="Tue, 31 Jan 2012 20:58:00 +0100" -->
<!-- isosent="20120131195800" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="9B2FF14F-9BEF-4216-B52D-DC9162FA8316_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2176122A-187D-480D-B9D0-D6B9F4B7220E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 14:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 20:38 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Not sure I fully grok this thread, but will try to provide an answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you start a singleton, it spawns off a daemon that is the equivalent of &quot;mpirun&quot;. This daemon is created for the express purpose of allowing the singleton to use MPI dynamics like comm_spawn - without it, the singleton would be unable to execute those functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first thing the daemon does is read the local allocation, using the same methods as used by mpirun. So whatever allocation is present that mpirun would have read, the daemon will get. This includes hostfiles and SGE allocations.
</span><br>
<p>So it should honor also the default hostfile of Open MPI if running outside of SGE, i.e. from the command line?
<br>
<p><p><span class="quotelev1">&gt; The exception to this is when the singleton gets started in an altered environment - e.g., if SGE changes the environmental variables when launching the singleton process. We see this in some resource managers - you can get an allocation of N nodes, but when you launch a job, the envar in that job only indicates the number of nodes actually running processes in that job. In such a situation, the daemon will see the altered value as its &quot;allocation&quot;, potentially causing confusion.
</span><br>
<p>Not sure whether I get it right. When I launch the same application with:
<br>
<p>&quot;mpiexec -np1 ./Mpitest&quot; (and get an allocation of 2+2 on the two machines):
<br>
<p>27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
<br>
&nbsp;9504 ?        S      0:00  \_ sge_shepherd-3791 -bg
<br>
&nbsp;9506 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3791
<br>
&nbsp;9507 ?        S      0:00          \_ mpiexec -np 1 ./Mpitest
<br>
&nbsp;9508 ?        R      0:07              \_ ./Mpitest
<br>
&nbsp;9509 ?        Sl     0:00              \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381  orted -mca
<br>
&nbsp;9513 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>&nbsp;2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
<br>
25434 ?        Sl     0:00  \_ sge_shepherd-3791 -bg
<br>
25436 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3791.1/1.pc15381
<br>
25444 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 821952512 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
<br>
25447 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
<br>
25448 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>This is what I expect (main + 1 child, other node gets 2 children). Now I launch the singleton instead (nothing changed besides this, still 2+2 granted):
<br>
<p>&quot;./Mpitest&quot; and get:
<br>
<p>27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
<br>
&nbsp;9546 ?        S      0:00  \_ sge_shepherd-3793 -bg
<br>
&nbsp;9548 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3793
<br>
&nbsp;9549 ?        R      0:00          \_ ./Mpitest
<br>
&nbsp;9550 ?        Ss     0:00              \_ orted --hnp --set-sid --report-uri 6 --singleton-died-pipe 7
<br>
&nbsp;9551 ?        Sl     0:00                  \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381 orted
<br>
&nbsp;9554 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
<br>
&nbsp;9555 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>&nbsp;2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
<br>
25494 ?        Sl     0:00  \_ sge_shepherd-3793 -bg
<br>
25495 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3793.1/1.pc15381
<br>
25502 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 814940160 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
<br>
25503 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
<br>
<p>Only one child is going to the other node. The environment is the same in both cases. Is this the correct behavior?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; For this reason, I generally recommend that you run dynamic applications using miprun when operating in RM-managed environments to avoid confusion. Or at least use &quot;printenv&quot; to check that the envars are going to be right before trying to start from a singleton.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 12:19 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 31.01.2012 um 20:12 schrieb Jeff Squyres:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I only noticed after the fact that Tom is also here at Cisco (it's a big company, after all :-) ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've contacted him using our proprietary super-secret Cisco handshake (i.e., the internal phone network); I'll see if I can figure out the issues off-list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I would be interested in a statement about a hostlist for singleton startups. Or whether it's honoring the tight integration nodes more by accident than by design. And as said: I see a wrong allocation, as the initial ./Mpitest doesn't count as process. I get a 3+1 allocation instead of 2+2 (what is granted by SGE). If started with &quot;mpiexec -np 1 ./Mpitest&quot; all is fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 31, 2012, at 1:08 PM, Dave Love wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe it's a side effect of a tight integration that it would start on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the correct nodes (but I face an incorrect allocation of slots and an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message at the end if started without mpiexec), as in this case
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it has no command line option for the hostfile. How to get the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; requested nodes if started from the command line?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I wouldn't expect it to work without mpirun/mpiexec and, of course,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I basically agree with Reuti about the rest.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If there is an actual SGE problem or need for an enhancement, though,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please file it per <a href="https://arc.liv.ac.uk/trac/SGE#mail">https://arc.liv.ac.uk/trac/SGE#mail</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
