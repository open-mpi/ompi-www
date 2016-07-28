<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 20:26:45 2006" -->
<!-- isoreceived="20060707002645" -->
<!-- sent="Thu, 06 Jul 2006 18:26:39 -0600" -->
<!-- isosent="20060707002639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn error messages" -->
<!-- id="C0D3065F.326A%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607061630p291ad5f3uacb14282484f9500_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-07-06 20:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Reply:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Saadat
<br>
<p>That&#185;s the problem, then &#173; you need to run comm_spawn applications using
<br>
mpirun, I&#185;m afraid. We plan to fix this in the near future, but for now we
<br>
can only offer that workaround.
<br>
<p>Ralph
<br>
<p><p><p>On 7/6/06 5:30 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running the application without mpirun, i.e. ./foobar. So, according to
</span><br>
<span class="quotelev1">&gt; you definition of singleton above, I am calling comm_spawn from a singleton.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/6/06, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Saadat
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you clarify how you are running this application? We have a known
</span><br>
<span class="quotelev2">&gt;&gt; problem with comm_spawn from a singleton (i.e., if you just did a.out instead
</span><br>
<span class="quotelev2">&gt;&gt; of mpirun &#139;np 1 a.out) - the errors look somewhat like what you are showing
</span><br>
<span class="quotelev2">&gt;&gt; here, hence our curiousity.
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
<span class="quotelev2">&gt;&gt; On 7/6/06 3:12 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using Fedora Core 4 (Linux turkana 2.6.12-1.1390_FC4smp #1 SMP Tue Jul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 20:21:11 EDT 2005 i686 athlon i386 GNU/Linux). The machine is a dual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor Athlon based machine. No, cluster resource manager, just an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh/ssh based setup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saadat.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/6/06, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Saadat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you tell us something more about the system you are using? What type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of processors, operating system, any resource manager (e.g., SLURM, PBS),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; etc?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/6/06 10:49 AM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good Day:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am getting the following error messages every time I run a very simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program that spawns child processes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These errors are being generated by the master process. Does any body know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what do they mean?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, if I spawn four child processes, not all of them run to completion,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i.e. till MPI_Finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saadat.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1578.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Reply:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
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
