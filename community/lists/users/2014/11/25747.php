<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 10:13:34 2014" -->
<!-- isoreceived="20141111151334" -->
<!-- sent="Tue, 11 Nov 2014 07:13:29 -0800" -->
<!-- isosent="20141111151329" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="0BD6E10C-9F89-4F1A-87B3-6D62543131BC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="814E6D361B66804FBF146E8AB57FE1CC2E32A628_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 10:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This clearly displays the problem - if you look at the reported &#226;&#128;&#156;allocated nodes&#226;&#128;&#157;, you see that we only got one node (cn6050). This is why we mapped all your procs onto that node.
<br>
<p>So the real question is - why? Can you show us the content of PE_HOSTFILE?
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2014, at 4:51 AM, SLIM H.A. &lt;h.a.slim_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Reuti and Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Below is the output of the run for openmpi 1.8.3 with this line
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS --display-map --display-allocation --cpus-per-proc 1 $exe
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; master=cn6050
</span><br>
<span class="quotelev1">&gt; PE=orte
</span><br>
<span class="quotelev1">&gt; JOB_ID=2482923
</span><br>
<span class="quotelev1">&gt; Got 32 slots.
</span><br>
<span class="quotelev1">&gt; slots:
</span><br>
<span class="quotelev1">&gt; cn6050 16 par6.q_at_cn6050 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; cn6045 16 par6.q_at_cn6045 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; Tue Nov 11 12:37:37 GMT 2014
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;         cn6050: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; Data for JOB [57374,1] offset 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Data for node: cn6050  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [57374,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [57374,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [57374,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also
</span><br>
<span class="quotelev1">&gt; ompi_info | grep grid
</span><br>
<span class="quotelev1">&gt; gives                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; ompi_info | grep psm
</span><br>
<span class="quotelev1">&gt; gives                 MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev1">&gt; because the intercoonect is TrueScale/QLogic
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_mtl &quot;psm&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; is set in the script. This is the PE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             4000
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: 10 November 2014 05:07
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] oversubscription of slots with GridEngine
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You might also add the &#226;&#128;&#148;display-allocation flag to mpirun so we can see what it thinks the allocation looks like. If there are only 16 slots on the node, it seems odd that OMPI would assign 32 procs to it unless it thinks there is only 1 node in the job, and oversubscription is allowed (which it won&#226;&#128;&#153;t be by default if it read the GE allocation)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2014, at 9:56 AM, Reuti &lt;reuti_at_[hidden] &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 09.11.2014 um 18:20 schrieb SLIM H.A. &lt;h.a.slim_at_[hidden] &lt;mailto:h.a.slim_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean the master node of the parallel job I assume.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is part of the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; master=cn6083
</span><br>
<span class="quotelev1">&gt; PE=orte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What allocation rule was defined for this PE - &quot;control_slave yes&quot; is set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JOB_ID=2481793
</span><br>
<span class="quotelev1">&gt; Got 32 slots.
</span><br>
<span class="quotelev1">&gt; slots:
</span><br>
<span class="quotelev1">&gt; cn6083 16 par6.q_at_cn6083 &lt;mailto:par6.q_at_cn6083&gt; &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; cn6085 16 par6.q_at_cn6085 &lt;mailto:par6.q_at_cn6085&gt; &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; Sun Nov  9 16:50:59 GMT 2014
</span><br>
<span class="quotelev1">&gt; Data for JOB [44767,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev1">&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc 1 
</span><br>
<span class="quotelev1">&gt; --bind-to-core 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was Open MPI configured with --with-sge?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried both 1.8.2, 1.8.3 and also 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for some clarification that anyone can give.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25741.php">http://www.open-mpi.org/community/lists/users/2014/11/25741.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25750.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
