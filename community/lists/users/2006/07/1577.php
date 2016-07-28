<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 19:03:59 2006" -->
<!-- isoreceived="20060706230359" -->
<!-- sent="Thu, 06 Jul 2006 17:03:55 -0600" -->
<!-- isosent="20060706230355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn error messages" -->
<!-- id="C0D2F2FB.3260%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607061412p741e1835y690e6463e9a93216_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 19:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Previous message:</strong> <a href="1576.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1576.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Reply:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Saadat
<br>
<p>Could you clarify how you are running this application? We have a known
<br>
problem with comm_spawn from a singleton (i.e., if you just did a.out
<br>
instead of mpirun &#139;np 1 a.out) - the errors look somewhat like what you are
<br>
showing here, hence our curiousity.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/6/06 3:12 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Fedora Core 4 (Linux turkana 2.6.12-1.1390_FC4smp #1 SMP Tue Jul 5
</span><br>
<span class="quotelev1">&gt; 20:21:11 EDT 2005 i686 athlon i386 GNU/Linux). The machine is a dual processor
</span><br>
<span class="quotelev1">&gt; Athlon based machine. No, cluster resource manager, just an rsh/ssh based
</span><br>
<span class="quotelev1">&gt; setup. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/6/06, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Saadat
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell us something more about the system you are using? What type of
</span><br>
<span class="quotelev2">&gt;&gt; processors, operating system, any resource manager (e.g., SLURM, PBS), etc?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/6/06 10:49 AM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good Day:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am getting the following error messages every time I run a very simple
</span><br>
<span class="quotelev2">&gt;&gt; program that spawns child processes:
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These errors are being generated by the master process. Does any body know
</span><br>
<span class="quotelev2">&gt;&gt; what do they mean?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, if I spawn four child processes, not all of them run to completion,
</span><br>
<span class="quotelev2">&gt;&gt; i.e. till MPI_Finalize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Saadat.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Previous message:</strong> <a href="1576.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1576.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Reply:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
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
