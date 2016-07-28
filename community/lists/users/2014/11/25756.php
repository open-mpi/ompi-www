<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 13:06:31 2014" -->
<!-- isoreceived="20141111180631" -->
<!-- sent="Tue, 11 Nov 2014 19:06:18 +0100" -->
<!-- isosent="20141111180618" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="BB435FC5-B768-4ED1-9E6E-98976D5B4B4E_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A6588BDF-FDA6-434D-BEA7-45C1B4B88162_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 13:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>In reply to:</strong> <a href="25753.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.11.2014 um 17:52 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 11, 2014, at 7:57 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 11.11.2014 um 16:13 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This clearly displays the problem - if you look at the reported &#147;allocated nodes&#148;, you see that we only got one node (cn6050). This is why we mapped all your procs onto that node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the real question is - why? Can you show us the content of PE_HOSTFILE?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 11, 2014, at 4:51 AM, SLIM H.A. &lt;h.a.slim_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Reuti and Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Below is the output of the run for openmpi 1.8.3 with this line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np $NSLOTS --display-map --display-allocation --cpus-per-proc 1 $exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master=cn6050
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PE=orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; JOB_ID=2482923
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Got 32 slots.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn6050 16 par6.q_at_cn6050 &lt;NULL&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn6045 16 par6.q_at_cn6045 &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The above looks like the PE_HOSTFILE. So it should be 16 slots per node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that the standard PE_HOSTFILE format? I&#146;m looking at the ras/gridengine module, and it looks like it is expecting a different format. I suspect that is the problem
</span><br>
<p>Well, the fourth column can be a processer range in older versions of SGE and the binding in newer ones, but the first three columns were always this way.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder whether any environment variable was reset, which normally allows Open MPI to discover that it's running inside SGE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e. SGE_ROOT, JOB_ID, ARC and PE_HOSTFILE are untouched before the job starts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Supplying &quot;-np $NSLOTS&quot; shouldn't be necessary though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tue Nov 11 12:37:37 GMT 2014
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       cn6050: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for JOB [57374,1] offset 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: cn6050  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Process OMPI jobid: [57374,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Process OMPI jobid: [57374,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#133;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Process OMPI jobid: [57374,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep grid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gives                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep psm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gives                 MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because the intercoonect is TrueScale/QLogic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv OMPI_MCA_mtl &quot;psm&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is set in the script. This is the PE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pe_name           orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots             4000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user_lists        NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; control_slaves    TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; urgency_slots     min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Henk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: 10 November 2014 05:07
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] oversubscription of slots with GridEngine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might also add the &#151;display-allocation flag to mpirun so we can see what it thinks the allocation looks like. If there are only 16 slots on the node, it seems odd that OMPI would assign 32 procs to it unless it thinks there is only 1 node in the job, and oversubscription is allowed (which it won&#146;t be by default if it read the GE allocation)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 9, 2014, at 9:56 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 09.11.2014 um 18:20 schrieb SLIM H.A. &lt;h.a.slim_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You mean the master node of the parallel job I assume.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is part of the output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master=cn6083
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PE=orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What allocation rule was defined for this PE - &quot;control_slave yes&quot; is set?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; JOB_ID=2481793
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Got 32 slots.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn6083 16 par6.q_at_cn6083 &lt;NULL&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cn6085 16 par6.q_at_cn6085 &lt;NULL&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun Nov  9 16:50:59 GMT 2014
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for JOB [44767,1] offset 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Process OMPI jobid: [44767,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Process OMPI jobid: [44767,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Process OMPI jobid: [44767,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --cpus-per-proc 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --bind-to-core 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Was Open MPI configured with --with-sge?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried both 1.8.2, 1.8.3 and also 1.6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for some clarification that anyone can give.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Henk
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25741.php">http://www.open-mpi.org/community/lists/users/2014/11/25741.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25747.php">http://www.open-mpi.org/community/lists/users/2014/11/25747.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25750.php">http://www.open-mpi.org/community/lists/users/2014/11/25750.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25753.php">http://www.open-mpi.org/community/lists/users/2014/11/25753.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>In reply to:</strong> <a href="25753.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25757.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
