<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 17:39:32 2007" -->
<!-- isoreceived="20070723213932" -->
<!-- sent="Mon, 23 Jul 2007 23:39:32 +0200" -->
<!-- isosent="20070723213932" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge qdel fails" -->
<!-- id="ADA2E379-A5F3-43AE-BBEB-0C5B1599F800_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A501A5.80902_at_Sun.COM" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 17:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>running conventional TCP/IP all is safe AFAICS - all processes will  
<br>
be killed on all involved nodes. The problem arises with OFED, with  
<br>
which we also have this behavior using MVAPICH.
<br>
<p>Unfortunately we have only a limited number of nodes with InfiniBand,  
<br>
and hence time to test and develop something is highly limited, as  
<br>
users running applications there are in favor.
<br>
<p>Am 23.07.2007 um 21:29 schrieb Pak Lui:
<br>
<p><span class="quotelev1">&gt; Hi Henk,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can delete the (sge) job with qdel -f such that it disappears  
</span><br>
<span class="quotelev2">&gt;&gt; from the
</span><br>
<span class="quotelev2">&gt;&gt; job list but the application processes keep running, including the
</span><br>
<span class="quotelev2">&gt;&gt; shepherds. I have to kill them with -15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For some reason the kill -15 does not reach mpirun. (We use such a
</span><br>
<span class="quotelev2">&gt;&gt; parameter to mpirun on our myrinet mx nodes with mpich, that's why I
</span><br>
<span class="quotelev2">&gt;&gt; asked).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe qdel would send a SIGKILL to mpirun
</span><br>
<p>Correct, it's send to the complete process group which qrsh-starter  
<br>
spawns up. I.e. &quot;kill -9 -- -processgroup_id&quot;.
<br>
<p><span class="quotelev1">&gt; instead of a SIGTERM
</span><br>
<span class="quotelev1">&gt; (-15), that is why you don't see the signal reaches mpirun. Since  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; is no way to catch a SIGKILL so that maybe why the orted and the
</span><br>
<span class="quotelev1">&gt; processes would keep running.
</span><br>
<p>In a Tightly Integrated parallel environment, there shouldn't be any  
<br>
need to catch such a signal. SGE will kill all started processes on  
<br>
its own - no further action necessary.
<br>
<p><span class="quotelev1">&gt; Hmm, this actually reminds me of a related problem. That is with the
</span><br>
<span class="quotelev1">&gt; qsub -notify option does not work as it intended under ORTE. The qsub
</span><br>
<span class="quotelev1">&gt; -notify option supposed to send a SIGUSR2 to mpirun and the processes
</span><br>
<span class="quotelev1">&gt; for an impending SIGKILL N seconds before it actually happens.  
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; we don't catch SIGUSR2 signal in ORTE specifically for SGE (or the
</span><br>
<span class="quotelev1">&gt; gridengine modules), therefore user would see the mpirun and orted  
</span><br>
<span class="quotelev1">&gt; exit
</span><br>
<span class="quotelev1">&gt; before the user apps can catch the SIGUSR signal. I should file a trac
</span><br>
<span class="quotelev1">&gt; bug against this SGE feature we don't yet support and fix it  
</span><br>
<span class="quotelev1">&gt; sometime in
</span><br>
<span class="quotelev1">&gt; the future.
</span><br>
<p>As SIGUSR2 is send to the complete processgroup (and keep in mind:  
<br>
also the job script on its own), it would just mean to ignore  
<br>
SIGUSR1/2 in orted (and maybe in mpirun, otherwise it also must be  
<br>
trapped there). So it could be included in the action to the --no- 
<br>
daemonize option given to orted when running under SGE. For now you  
<br>
would also need this in the job script:
<br>
<p>#!/bin/sh
<br>
trap '' usr2
<br>
export PATH=/home/reuti/openmpi-1.2.3/bin:$PATH
<br>
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH${LD_LIBRARY_PATH:+:}/home/ 
<br>
reuti/openmpi-1.2.3/lib
<br>
(trap '' usr2; exec mpirun -np $NSLOTS /home/reuti/mpihello)
<br>
<p><p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; So back to your problem. Although this is unintended, maybe you can  
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev1">&gt; to run the job with qsub -notify for the mean time until we change for
</span><br>
<span class="quotelev1">&gt; above, since it will send a SIGUSR2 to mpirun, which should terminate
</span><br>
<span class="quotelev1">&gt; the mpirun, orted and the user processes in a way that is more
</span><br>
<span class="quotelev1">&gt; gracefully than qdel (or SIGKILL), because SIGKILL would not allow  
</span><br>
<span class="quotelev1">&gt; orted
</span><br>
<span class="quotelev1">&gt; to kill off the user processes, as SIGTERM or SIGUSR1/2 would.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to confirm, there is no configure directive specific to  
</span><br>
<span class="quotelev2">&gt;&gt; gridengine
</span><br>
<span class="quotelev2">&gt;&gt; when building openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, there isn't any configure directives currently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; henk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 23 July 2007 15:16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] sge qdel fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Henk,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The sge script should not require any extra parameter. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qdel command should send the kill signal to mpirun and also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove the SGE allocated tmp directory (in something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/174.1.all.q/) which contains the OMPI session dir for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the running job, and in turns would cause orted and the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes to exit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe you could try qdel -f &lt;jid&gt; to force delete from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sge_qmaster, in case when sge_execd does not respond to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; delete request by the sge_qmaster?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using OpenMPI 1.2.3 with SGE 6.0u7 over InfiniBand (OFED 1.2),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following the recommendation in the OpenMPI FAQ
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The job runs but when the user wants to delete the job with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the qdel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command, this fails. Does the mpirun command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np $NSLOTS ./exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the sge script require extra parameters?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any advice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Henk
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
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
<li><strong>Next message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
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
