<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 19:12:20 2011" -->
<!-- isoreceived="20110913231220" -->
<!-- sent="Tue, 13 Sep 2011 17:12:10 -0600" -->
<!-- isosent="20110913231210" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E483738_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45759E50-C5DA-4C02-A107-AACC899B1299_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 19:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17277.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17276.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't budget computer hours so I don't think we would use accounting, although I'm not sure I know what this capability is all about. Also, I don't care about launch speed. A few minutes means nothing when the job will take days to run. Also, I have a highly portable strategy of wrapping the mpirun command with a shell script that figures out how many processes are allocated to the job and explicitly tells OpenMPI how many hosts to use and which ones.  I can adapt that script in very minor ways to support any job-queueing system past present or future, and my invocation of the mpirun command remains the same and should always work.
<br>
<p>For these reasons I have preferred the rsh/ssh launcher, the less intelligent the better. I'm sure there are benefits of tight integration, as you said, perhaps you can keep users from accidentally or intentionally using nodes outside their allocation. It's just not an issue for us.
<br>
<p>I will check the FAQ to see if I can learn more about the benefits of tight integration with a job-queueing system.
<br>
<p><p>Thank you again for the help
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: Tuesday, September 13, 2011 5:36 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Problem running under SGE
<br>
<p>Am 14.09.2011 um 00:25 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; Your comment guided me in the right direction, Reuti. And overlapped with your guidance, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works: if I add this flag then it runs
</span><br>
<span class="quotelev1">&gt; --mca plm_rsh_disable_qrsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you both for the explanations.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had built OpenMPI on another system, as I said, it did not have SGE and thus I did not give --without-sge (nor did I give --with-sge).  In the future for building 1.4.3 I will just add --without-sge and presumably I won't run into the qrsh issue.
</span><br>
<p>Can I understand this in a way, that you don't want a tight integration with correct accounting, but prefer to run slave tasks by rsh/ssh on your own? This can lead to oversubscribed machines in case some users' scripts are not honoring the machinefile in the correct way.
<br>
<p>Having a tight integration (with disabled ssh/rsh inside the cluster) is the setup I usually prefer.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 13, 2011 4:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Problem running under SGE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 13.09.2011 um 23:18 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm able to run this command below from an interactive shell window:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh -x MPI_ENVIRONMENT=1 ./test_setup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but it does not work if I put it into a shell script and 'qsub' that script to SGE.  I get the message shown at the bottom of this post. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried everything I can think of.  I would welcome any hints on how to proceed. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, this OpenMPI is 1.4.3 and I built it on another system.  I am setting and exporting OPAL_PREFIX and as I said, all works fine interactively just not in batch.  It was built with -disable-shared and I don't see any shared libs under openmpi/lib, and I've done 'ldd' from within the script, on both the application executable and on the orterun command; no unresolved shared libraries.  So I don't think the error message hinting at LD_LIBRARY_PATH issues is pointing me in the right direction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any guidance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I missed this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 139362 failed: execution daemon on host &quot;f8312&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did you supply a machinefile on your own? In a proper SGE integration it's running in a parallel environment. You defined and requested one? The error looks like it was started in a PE, but tried to access a node not granted for the actual job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 2818) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17277.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17276.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- nextthread="start" -->
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
