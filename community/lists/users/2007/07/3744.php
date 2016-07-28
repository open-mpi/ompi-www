<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 15:29:48 2007" -->
<!-- isoreceived="20070723192948" -->
<!-- sent="Mon, 23 Jul 2007 15:29:41 -0400" -->
<!-- isosent="20070723192941" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge qdel fails" -->
<!-- id="46A501A5.80902_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC41E_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Date:</strong> 2007-07-23 15:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
<li><strong>In reply to:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3750.php">Reuti: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3750.php">Reuti: "Re: [OMPI users] sge qdel fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Henk,
<br>
<p>SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Dear Pak Lui
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can delete the (sge) job with qdel -f such that it disappears from the
</span><br>
<span class="quotelev1">&gt; job list but the application processes keep running, including the
</span><br>
<span class="quotelev1">&gt; shepherds. I have to kill them with -15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason the kill -15 does not reach mpirun. (We use such a
</span><br>
<span class="quotelev1">&gt; parameter to mpirun on our myrinet mx nodes with mpich, that's why I
</span><br>
<span class="quotelev1">&gt; asked).
</span><br>
<p>I believe qdel would send a SIGKILL to mpirun instead of a SIGTERM 
<br>
(-15), that is why you don't see the signal reaches mpirun. Since there 
<br>
is no way to catch a SIGKILL so that maybe why the orted and the 
<br>
processes would keep running.
<br>
<p>Hmm, this actually reminds me of a related problem. That is with the 
<br>
qsub -notify option does not work as it intended under ORTE. The qsub 
<br>
-notify option supposed to send a SIGUSR2 to mpirun and the processes 
<br>
for an impending SIGKILL N seconds before it actually happens. However, 
<br>
we don't catch SIGUSR2 signal in ORTE specifically for SGE (or the 
<br>
gridengine modules), therefore user would see the mpirun and orted exit 
<br>
before the user apps can catch the SIGUSR signal. I should file a trac 
<br>
bug against this SGE feature we don't yet support and fix it sometime in 
<br>
the future.
<br>
<p>So back to your problem. Although this is unintended, maybe you can try 
<br>
to run the job with qsub -notify for the mean time until we change for 
<br>
above, since it will send a SIGUSR2 to mpirun, which should terminate 
<br>
the mpirun, orted and the user processes in a way that is more 
<br>
gracefully than qdel (or SIGKILL), because SIGKILL would not allow orted 
<br>
to kill off the user processes, as SIGTERM or SIGUSR1/2 would.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to confirm, there is no configure directive specific to gridengine
</span><br>
<span class="quotelev1">&gt; when building openmpi?
</span><br>
<p>Right, there isn't any configure directives currently.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; henk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 23 July 2007 15:16
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] sge qdel fails
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Henk,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sge script should not require any extra parameter. The 
</span><br>
<span class="quotelev2">&gt;&gt; qdel command should send the kill signal to mpirun and also 
</span><br>
<span class="quotelev2">&gt;&gt; remove the SGE allocated tmp directory (in something like 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/174.1.all.q/) which contains the OMPI session dir for 
</span><br>
<span class="quotelev2">&gt;&gt; the running job, and in turns would cause orted and the user 
</span><br>
<span class="quotelev2">&gt;&gt; processes to exit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe you could try qdel -f &lt;jid&gt; to force delete from the 
</span><br>
<span class="quotelev2">&gt;&gt; sge_qmaster, in case when sge_execd does not respond to the 
</span><br>
<span class="quotelev2">&gt;&gt; delete request by the sge_qmaster?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.2.3 with SGE 6.0u7 over InfiniBand (OFED 1.2), 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following the recommendation in the OpenMPI FAQ
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job runs but when the user wants to delete the job with 
</span><br>
<span class="quotelev2">&gt;&gt; the qdel 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command, this fails. Does the mpirun command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np $NSLOTS ./exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the sge script require extra parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any advice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Henk
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3745.php">Francesco Pietra: "[OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
<li><strong>In reply to:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3750.php">Reuti: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3750.php">Reuti: "Re: [OMPI users] sge qdel fails"</a>
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
