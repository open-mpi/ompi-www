<?
$subject_val = "Re: [OMPI users] map-by node with openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 08:00:39 2014" -->
<!-- isoreceived="20140219130039" -->
<!-- sent="Wed, 19 Feb 2014 22:00:05 +0900" -->
<!-- isosent="20140219130005" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] map-by node with openmpi-1.7.5a1" -->
<!-- id="OFC229D66B.BC05519F-ON49257C84.0046A420-49257C84.00477813_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF35B3CFC0.CEF0D8B8-ON49257C83.00166B70-49257C83.0024E0C8_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] map-by node with openmpi-1.7.5a1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20map-by%20node%20with%20openmpi-1.7.5a1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-19 08:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23623.php">Samuel Richard: "[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Previous message:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I've found the fix. Please check the attached
<br>
patch file.
<br>
<p>At this moment, nodes in hostfile should be listed in
<br>
ascending order of slot size when we use &quot;map-by node&quot; or
<br>
&quot;map-by obj:span&quot;.
<br>
<p>The problem is that the hostfile created by Torque in our
<br>
cluster always lists allocated nodes in descending order...
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>(See attached file: patch.rr)
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did overall verification of rr_mapper, and I found another problem
</span><br>
<span class="quotelev1">&gt; with &quot;map-by node&quot;. As far as I checked, &quot;map-by obj&quot; other than node
</span><br>
<span class="quotelev1">&gt; worked fine. I myself do not use &quot;map-by node&quot;, but I'd like to report
</span><br>
<span class="quotelev1">&gt; it to improve reliability of 1.7.5. It seems too difficult for me to
</span><br>
<span class="quotelev1">&gt; resolve it. I hope you could take a look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem occurs when I mixedly use two kinds of node, although I
</span><br>
<span class="quotelev1">&gt; add &quot;-hetero-nodes&quot; to command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev1">&gt; node04 slots=8
</span><br>
<span class="quotelev1">&gt; node05 slots=2
</span><br>
<span class="quotelev1">&gt; node06 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ mpirun -np 12 -machinefile pbs_hosts -map-by node
</span><br>
<span class="quotelev1">&gt; -report-bindings -hetero-nodes /home/mishima/mi
</span><br>
<span class="quotelev1">&gt; s/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 241
</span><br>
<span class="quotelev1">&gt; [manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With &quot;-np 11&quot;, it works. But rank 10 is bound to the wrong core (which is
</span><br>
<span class="quotelev1">&gt; already used by rank 0). I guess something is wrong with the handling of
</span><br>
<span class="quotelev1">&gt; different topology when &quot;map-by node&quot; is specified. In addition, the
</span><br>
<span class="quotelev1">&gt; calculation of assigning procs to each node has some problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage work]$ mpirun -np 11 -machinefile pbs_hosts -map-by node
</span><br>
<span class="quotelev1">&gt; -report-bindings -hetero-nodes /home/mishima/mi
</span><br>
<span class="quotelev1">&gt; s/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; [node04.cluster:13384] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:13384] MCW rank 6 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:13384] MCW rank 8 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:13384] MCW rank 10 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [./././././././.]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:13384] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:24192] MCW rank 5 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:24192] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:25655] MCW rank 9 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:25655] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:25655] MCW rank 4 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:25655] MCW rank 7 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/.][./././.]
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 7 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 6 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 8 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 9 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 11
</span><br>
<span class="quotelev1">&gt; Hello world from process 10 of 11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23622/patch.rr">patch.rr</a>
</ul>
<!-- attachment="patch.rr" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23623.php">Samuel Richard: "[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Previous message:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
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
