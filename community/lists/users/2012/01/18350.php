<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:25:56 2012" -->
<!-- isoreceived="20120131202556" -->
<!-- sent="Tue, 31 Jan 2012 13:25:47 -0700" -->
<!-- isosent="20120131202547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="2A95A609-9711-4875-9904-F9B00FEB1951_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9B2FF14F-9BEF-4216-B52D-DC9162FA8316_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18354.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18354.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18398.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 12:58 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 31.01.2012 um 20:38 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure I fully grok this thread, but will try to provide an answer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you start a singleton, it spawns off a daemon that is the equivalent of &quot;mpirun&quot;. This daemon is created for the express purpose of allowing the singleton to use MPI dynamics like comm_spawn - without it, the singleton would be unable to execute those functions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first thing the daemon does is read the local allocation, using the same methods as used by mpirun. So whatever allocation is present that mpirun would have read, the daemon will get. This includes hostfiles and SGE allocations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it should honor also the default hostfile of Open MPI if running outside of SGE, i.e. from the command line?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The exception to this is when the singleton gets started in an altered environment - e.g., if SGE changes the environmental variables when launching the singleton process. We see this in some resource managers - you can get an allocation of N nodes, but when you launch a job, the envar in that job only indicates the number of nodes actually running processes in that job. In such a situation, the daemon will see the altered value as its &quot;allocation&quot;, potentially causing confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure whether I get it right. When I launch the same application with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np1 ./Mpitest&quot; (and get an allocation of 2+2 on the two machines):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev1">&gt; 9504 ?        S      0:00  \_ sge_shepherd-3791 -bg
</span><br>
<span class="quotelev1">&gt; 9506 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3791
</span><br>
<span class="quotelev1">&gt; 9507 ?        S      0:00          \_ mpiexec -np 1 ./Mpitest
</span><br>
<span class="quotelev1">&gt; 9508 ?        R      0:07              \_ ./Mpitest
</span><br>
<span class="quotelev1">&gt; 9509 ?        Sl     0:00              \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381  orted -mca
</span><br>
<span class="quotelev1">&gt; 9513 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev1">&gt; 25434 ?        Sl     0:00  \_ sge_shepherd-3791 -bg
</span><br>
<span class="quotelev1">&gt; 25436 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3791.1/1.pc15381
</span><br>
<span class="quotelev1">&gt; 25444 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 821952512 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; 25447 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 25448 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I expect (main + 1 child, other node gets 2 children). Now I launch the singleton instead (nothing changed besides this, still 2+2 granted):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;./Mpitest&quot; and get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev1">&gt; 9546 ?        S      0:00  \_ sge_shepherd-3793 -bg
</span><br>
<span class="quotelev1">&gt; 9548 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3793
</span><br>
<span class="quotelev1">&gt; 9549 ?        R      0:00          \_ ./Mpitest
</span><br>
<span class="quotelev1">&gt; 9550 ?        Ss     0:00              \_ orted --hnp --set-sid --report-uri 6 --singleton-died-pipe 7
</span><br>
<span class="quotelev1">&gt; 9551 ?        Sl     0:00                  \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381 orted
</span><br>
<span class="quotelev1">&gt; 9554 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 9555 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev1">&gt; 25494 ?        Sl     0:00  \_ sge_shepherd-3793 -bg
</span><br>
<span class="quotelev1">&gt; 25495 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3793.1/1.pc15381
</span><br>
<span class="quotelev1">&gt; 25502 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 814940160 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; 25503 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only one child is going to the other node. The environment is the same in both cases. Is this the correct behavior?
</span><br>
<p><p>We probably aren't correctly marking the original singleton on that node, and so the mapper thinks there are still two slots available on the original node.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For this reason, I generally recommend that you run dynamic applications using miprun when operating in RM-managed environments to avoid confusion. Or at least use &quot;printenv&quot; to check that the envars are going to be right before trying to start from a singleton.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2012, at 12:19 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 31.01.2012 um 20:12 schrieb Jeff Squyres:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I only noticed after the fact that Tom is also here at Cisco (it's a big company, after all :-) ).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've contacted him using our proprietary super-secret Cisco handshake (i.e., the internal phone network); I'll see if I can figure out the issues off-list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I would be interested in a statement about a hostlist for singleton startups. Or whether it's honoring the tight integration nodes more by accident than by design. And as said: I see a wrong allocation, as the initial ./Mpitest doesn't count as process. I get a 3+1 allocation instead of 2+2 (what is granted by SGE). If started with &quot;mpiexec -np 1 ./Mpitest&quot; all is fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 31, 2012, at 1:08 PM, Dave Love wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maybe it's a side effect of a tight integration that it would start on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the correct nodes (but I face an incorrect allocation of slots and an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error message at the end if started without mpiexec), as in this case
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it has no command line option for the hostfile. How to get the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requested nodes if started from the command line?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, I wouldn't expect it to work without mpirun/mpiexec and, of course,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I basically agree with Reuti about the rest.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If there is an actual SGE problem or need for an enhancement, though,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; please file it per <a href="https://arc.liv.ac.uk/trac/SGE#mail">https://arc.liv.ac.uk/trac/SGE#mail</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18354.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18354.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18398.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
