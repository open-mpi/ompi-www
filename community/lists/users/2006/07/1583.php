<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 23:32:41 2006" -->
<!-- isoreceived="20060707033241" -->
<!-- sent="Thu, 6 Jul 2006 20:32:35 -0700" -->
<!-- isosent="20060707033235" -->
<!-- name="s anwar" -->
<!-- email="sanwar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn error messages" -->
<!-- id="3e3c86f90607062032i2812c474q664bbf14aa4a957b_at_mail.gmail.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C0D3065F.326A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> s anwar (<em>sanwar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 23:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1584.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1582.php">Brian Barrett: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the diagnosis.
<br>
Saadat.
<br>
<p><p>On 7/6/06, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Saadat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's the problem, then &#150; you need to run comm_spawn applications using
</span><br>
<span class="quotelev1">&gt; mpirun, I'm afraid. We plan to fix this in the near future, but for now we
</span><br>
<span class="quotelev1">&gt; can only offer that workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/6/06 5:30 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running the application without mpirun, i.e. ./foobar. So, according
</span><br>
<span class="quotelev1">&gt; to you definition of singleton above, I am calling comm_spawn from a
</span><br>
<span class="quotelev1">&gt; singleton.
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
<span class="quotelev1">&gt; On 7/6/06, *Ralph Castain* &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Saadat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you clarify how you are running this application? We have a known
</span><br>
<span class="quotelev1">&gt; problem with comm_spawn from a singleton (i.e., if you just did a.outinstead of mpirun &#151;np 1
</span><br>
<span class="quotelev1">&gt; a.out) - the errors look somewhat like what you are showing here, hence
</span><br>
<span class="quotelev1">&gt; our curiousity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/6/06 3:12 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Fedora Core 4 (Linux turkana 2.6.12-1.1390_FC4smp #1 SMP Tue
</span><br>
<span class="quotelev1">&gt; Jul 5 20:21:11 EDT 2005 i686 athlon i386 GNU/Linux). The machine is a dual
</span><br>
<span class="quotelev1">&gt; processor Athlon based machine. No, cluster resource manager, just an
</span><br>
<span class="quotelev1">&gt; rsh/ssh based setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/6/06, *Ralph H Castain* &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Saadat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you tell us something more about the system you are using? What type
</span><br>
<span class="quotelev1">&gt; of processors, operating system, any resource manager (e.g., SLURM, PBS),
</span><br>
<span class="quotelev1">&gt; etc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/6/06 10:49 AM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good Day:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the following error messages every time I run a very simple
</span><br>
<span class="quotelev1">&gt; program that spawns child processes:
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/oob_base_xcast.c at line 108
</span><br>
<span class="quotelev1">&gt; [turkana:27949] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors are being generated by the master process. Does any body know
</span><br>
<span class="quotelev1">&gt; what do they mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, if I spawn four child processes, not all of them run to completion,
</span><br>
<span class="quotelev1">&gt; i.e. till MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1584.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1582.php">Brian Barrett: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
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
