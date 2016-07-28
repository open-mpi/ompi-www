<?
$subject_val = "Re: [OMPI users] rankfile error on openmpi/1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 07:13:51 2009" -->
<!-- isoreceived="20090901111351" -->
<!-- sent="Tue, 1 Sep 2009 14:13:46 +0300" -->
<!-- isosent="20090901111346" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfile error on openmpi/1.3.3" -->
<!-- id="453d39990909010413w3b63688dhef62d73100cbd9b9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9CF45ADE-ED84-402D-A167-6EC7A294529D_at_open-mpi.org" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 07:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10532.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please try using full ( drdb0235.en.desres.deshaw.com ) hostname
<br>
in the hostfile/rankfile.
<br>
It should help.
<br>
Lenny.
<br>
<p>On Mon, Aug 31, 2009 at 7:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid the rank-file mapper in 1.3.3 has several known problems that
</span><br>
<span class="quotelev1">&gt; have been described on the list by users. We hopefully have those fixed in
</span><br>
<span class="quotelev1">&gt; the upcoming 1.3.4 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2009, at 10:01 AM, Sacerdoti, Federico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use the rankmap to bind a 4-proc mpi job to one socket of a
</span><br>
<span class="quotelev1">&gt; two-socket, 8 core machine. However I'm getting a strange error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMDS USED
</span><br>
<span class="quotelev1">&gt; orterun --hostfile hostlist.1 -n 4  --mca rmaps_rank_file_path ./rankmap.1
</span><br>
<span class="quotelev1">&gt; desres-netscan  -o $OUTDIR
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
<span class="quotelev1">&gt; Rankfile claimed host drdb0235.en that was not allocated or oversubscribed
</span><br>
<span class="quotelev1">&gt; it's slots:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt; parameter in file rmaps_rank_file.c at line 108
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt; parameter in file base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt; parameter in file base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [drdb0235.en.desres.deshaw.com:14242] [[37407,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt; parameter in file plm_rsh_module.c at line 985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From looking at the code in rmaps_rank_file.c it seems the error occurs
</span><br>
<span class="quotelev1">&gt; when the node-gathering code wraps twice around the hostlist. However I dont
</span><br>
<span class="quotelev1">&gt; see why that is happening.
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10533/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10532.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Reply:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
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
