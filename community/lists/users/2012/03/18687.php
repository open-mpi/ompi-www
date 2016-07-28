<?
$subject_val = "Re: [OMPI users] can't run the code on Jaguar";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 20:13:48 2012" -->
<!-- isoreceived="20120306011348" -->
<!-- sent="Mon, 5 Mar 2012 17:13:46 -0800" -->
<!-- isosent="20120306011346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run the code on Jaguar" -->
<!-- id="244909C0-8E81-4197-8C2A-C7584352F11A_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F553A0A.6080404_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run the code on Jaguar<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 20:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18688.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18686.php">bin Wang: "[OMPI users]  can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18686.php">bin Wang: "[OMPI users]  can't run the code on Jaguar"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you attempt to start your job, and what does your configure line look like?
<br>
<p>Sent from my iPad
<br>
<p>On Mar 5, 2012, at 2:11 PM, bin Wang &lt;bighead521_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run the latest OpenMPI code on Jaguar.
</span><br>
<span class="quotelev1">&gt; (Cloned from the Open MPI Mercurial mirror of the Subversion repository)
</span><br>
<span class="quotelev1">&gt; The configuration and compilation of OpenMPI were fine, and benchmark
</span><br>
<span class="quotelev1">&gt; was also successfully compiled. I tried to launch my program using mpirun
</span><br>
<span class="quotelev1">&gt; within an interactive job, but it failed immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Core dump file gave me the following information.
</span><br>
<span class="quotelev1">&gt; ====================Error Msg=========================
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local
</span><br>
<span class="quotelev1">&gt; node in file ess_singleton_module.c at line 220
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration33r environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Unable to start a daemon on40he local node&quot; (-127) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** reported by process [4294967295,42949No process In: Line: ??   PC: ??
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [jaguarpf-login2:15370] *** and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt; Local host: jaguarpf-login2
</span><br>
<span class="quotelev1">&gt; PID:        15370
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Program exited with code 01.
</span><br>
<span class="quotelev1">&gt; ====================Error Msg Over=====================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are several components under ess, but I don't know why and how the
</span><br>
<span class="quotelev1">&gt; singleton component was chosen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope someone could help me to compile and run openmpi successfully on Jaguar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comment and suggestion will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Bin
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
<li><strong>Next message:</strong> <a href="18688.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18686.php">bin Wang: "[OMPI users]  can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18686.php">bin Wang: "[OMPI users]  can't run the code on Jaguar"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
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
