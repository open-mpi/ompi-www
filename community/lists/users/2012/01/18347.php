<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 14:38:24 2012" -->
<!-- isoreceived="20120131193824" -->
<!-- sent="Tue, 31 Jan 2012 12:38:15 -0700" -->
<!-- isosent="20120131193815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="2176122A-187D-480D-B9D0-D6B9F4B7220E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3CBDDF52-3A9D-4E76-A607-D165754ECCB8_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-01-31 14:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18344.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I fully grok this thread, but will try to provide an answer.
<br>
<p>When you start a singleton, it spawns off a daemon that is the equivalent of &quot;mpirun&quot;. This daemon is created for the express purpose of allowing the singleton to use MPI dynamics like comm_spawn - without it, the singleton would be unable to execute those functions.
<br>
<p>The first thing the daemon does is read the local allocation, using the same methods as used by mpirun. So whatever allocation is present that mpirun would have read, the daemon will get. This includes hostfiles and SGE allocations.
<br>
<p>The exception to this is when the singleton gets started in an altered environment - e.g., if SGE changes the environmental variables when launching the singleton process. We see this in some resource managers - you can get an allocation of N nodes, but when you launch a job, the envar in that job only indicates the number of nodes actually running processes in that job. In such a situation, the daemon will see the altered value as its &quot;allocation&quot;, potentially causing confusion.
<br>
<p>For this reason, I generally recommend that you run dynamic applications using miprun when operating in RM-managed environments to avoid confusion. Or at least use &quot;printenv&quot; to check that the envars are going to be right before trying to start from a singleton.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jan 31, 2012, at 12:19 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 31.01.2012 um 20:12 schrieb Jeff Squyres:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I only noticed after the fact that Tom is also here at Cisco (it's a big company, after all :-) ).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've contacted him using our proprietary super-secret Cisco handshake (i.e., the internal phone network); I'll see if I can figure out the issues off-list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I would be interested in a statement about a hostlist for singleton startups. Or whether it's honoring the tight integration nodes more by accident than by design. And as said: I see a wrong allocation, as the initial ./Mpitest doesn't count as process. I get a 3+1 allocation instead of 2+2 (what is granted by SGE). If started with &quot;mpiexec -np 1 ./Mpitest&quot; all is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2012, at 1:08 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maybe it's a side effect of a tight integration that it would start on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the correct nodes (but I face an incorrect allocation of slots and an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error message at the end if started without mpiexec), as in this case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it has no command line option for the hostfile. How to get the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested nodes if started from the command line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I wouldn't expect it to work without mpirun/mpiexec and, of course,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I basically agree with Reuti about the rest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is an actual SGE problem or need for an enhancement, though,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please file it per <a href="https://arc.liv.ac.uk/trac/SGE#mail">https://arc.liv.ac.uk/trac/SGE#mail</a>
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18344.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
