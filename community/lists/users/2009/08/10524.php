<?
$subject_val = "Re: [OMPI users] rankfile error on openmpi/1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 12:44:08 2009" -->
<!-- isoreceived="20090831164408" -->
<!-- sent="Mon, 31 Aug 2009 10:43:54 -0600" -->
<!-- isosent="20090831164354" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfile error on openmpi/1.3.3" -->
<!-- id="9CF45ADE-ED84-402D-A167-6EC7A294529D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FE1D72F2809CF54DA0146C920D6697E10B3663_at_maildrd1.nyc.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] rankfile error on openmpi/1.3.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 12:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10523.php">Sacerdoti, Federico: "[OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10523.php">Sacerdoti, Federico: "[OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the rank-file mapper in 1.3.3 has several known problems  
<br>
that have been described on the list by users. We hopefully have those  
<br>
fixed in the upcoming 1.3.4 release.
<br>
<p><p>On Aug 31, 2009, at 10:01 AM, Sacerdoti, Federico wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use the rankmap to bind a 4-proc mpi job to one  
</span><br>
<span class="quotelev1">&gt; socket of a two-socket, 8 core machine. However I'm getting a  
</span><br>
<span class="quotelev1">&gt; strange error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMDS USED
</span><br>
<span class="quotelev1">&gt; orterun --hostfile hostlist.1 -n 4  --mca rmaps_rank_file_path ./ 
</span><br>
<span class="quotelev1">&gt; rankmap.1 desres-netscan  -o $OUTDIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat rankmap.1
</span><br>
<span class="quotelev1">&gt; rank 0=drdb0235.en slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=drdb0235.en slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 2=drdb0235.en slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 3=drdb0235.en slot=0:3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat hostlist.1
</span><br>
<span class="quotelev1">&gt; drdb0235.en slots=8
</span><br>
<span class="quotelev1">&gt; ERROR SEEN
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rankfile claimed host drdb0235.en that was not allocated or  
</span><br>
<span class="quotelev1">&gt; oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Bad parameter in file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Bad parameter in file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Bad parameter in file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Bad parameter in file plm_rsh_module.c at line 985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From looking at the code in rmaps_rank_file.c it seems the error  
</span><br>
<span class="quotelev1">&gt; occurs when the node-gathering code wraps twice around the hostlist.  
</span><br>
<span class="quotelev1">&gt; However I dont see why that is happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I specify 8 slots in the rankmap, I see a different error: Error,  
</span><br>
<span class="quotelev1">&gt; invalid rank (4) in the rankfile (./rankmap.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Federico
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10523.php">Sacerdoti, Federico: "[OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10523.php">Sacerdoti, Federico: "[OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
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
