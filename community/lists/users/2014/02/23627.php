<?
$subject_val = "Re: [OMPI users] map-by node with openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 22 16:54:55 2014" -->
<!-- isoreceived="20140222215455" -->
<!-- sent="Sun, 23 Feb 2014 06:54:22 +0900" -->
<!-- isosent="20140222215422" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] map-by node with openmpi-1.7.5a1" -->
<!-- id="OF67C76C95.17278D9F-ON49257C87.0075664E-49257C87.0078607D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA1E2861-B5D2-4A8C-B647-187ABFAA591B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-22 16:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I will verify your patch. It's exciting for me.
<br>
Pleaes give me a time.
<br>
<p>I was reviewing rmapa_rr_mappers.c simultaneously with your work.
<br>
I found some minor problems additionally. To avoid confusion,
<br>
I will report them after this job will be completed.
<br>
<p>By the way, binding problem will be also fixed by your patch,
<br>
because you added the lines from 399 to 406. It really has no
<br>
relation with hetero-nodes, thanks.
<br>
<p>399 #if OPAL_HAVE_HWLOC
<br>
400             /* get the root object as we are not assigning
<br>
401             * locale except at the node level
<br>
402             */
<br>
403            if (NULL != node-&gt;topology) {
<br>
404                obj = hwloc_get_root_obj(node-&gt;topology);
<br>
405            }
<br>
406 #endif
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; I'm afraid that patch didn't solve the problem when I tested it - it
</span><br>
resolved a problem of cpus-per-rank &gt; 1, but not the case of descending
<br>
order of slots. Took a little more work, but I believe the
<br>
<span class="quotelev1">&gt; patch in r30798 (based on yours) completes the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the &quot;hetero-nodes&quot; flag is a bit of a red herring here. That flag
</span><br>
indicates a difference in physical topology between the nodes, not a
<br>
difference in number of assigned slots. It would be
<br>
<span class="quotelev1">&gt; required if your nodes actually have different numbers of cores on them
</span><br>
(e.g., have different chips) and you want us to bind the processes or map
<br>
by some object lower than the node level, but only in
<br>
<span class="quotelev1">&gt; such cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate your help! I scheduled the patch for 1.7.5 and assigned it to
</span><br>
you for verification - please let me know if you don't haver time to do so.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4296">https://svn.open-mpi.org/trac/ompi/ticket/4296</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2014, at 5:00 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, I've found the fix. Please check the attached
</span><br>
<span class="quotelev2">&gt; &gt; patch file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At this moment, nodes in hostfile should be listed in
</span><br>
<span class="quotelev2">&gt; &gt; ascending order of slot size when we use &quot;map-by node&quot; or
</span><br>
<span class="quotelev2">&gt; &gt; &quot;map-by obj:span&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that the hostfile created by Torque in our
</span><br>
<span class="quotelev2">&gt; &gt; cluster always lists allocated nodes in descending order...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (See attached file: patch.rr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did overall verification of rr_mapper, and I found another problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with &quot;map-by node&quot;. As far as I checked, &quot;map-by obj&quot; other than node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; worked fine. I myself do not use &quot;map-by node&quot;, but I'd like to report
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it to improve reliability of 1.7.5. It seems too difficult for me to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; resolve it. I hope you could take a look.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem occurs when I mixedly use two kinds of node, although I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; add &quot;-hetero-nodes&quot; to command line:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node04 slots=8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node05 slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node06 slots=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_manage work]$ mpirun -np 12 -machinefile pbs_hosts -map-by
</span><br>
node
<br>
<span class="quotelev3">&gt; &gt;&gt; -report-bindings -hetero-nodes /home/mishima/mi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; s/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rmaps_rr.c at line 241
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With &quot;-np 11&quot;, it works. But rank 10 is bound to the wrong core (which
</span><br>
is
<br>
<span class="quotelev3">&gt; &gt;&gt; already used by rank 0). I guess something is wrong with the handling
</span><br>
of
<br>
<span class="quotelev3">&gt; &gt;&gt; different topology when &quot;map-by node&quot; is specified. In addition, the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calculation of assigning procs to each node has some problems:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_manage work]$ mpirun -np 11 -machinefile pbs_hosts -map-by
</span><br>
node
<br>
<span class="quotelev3">&gt; &gt;&gt; -report-bindings -hetero-nodes /home/mishima/mi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; s/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node04.cluster:13384] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node04.cluster:13384] MCW rank 6 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [././B/././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node04.cluster:13384] MCW rank 8 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./././B/./././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node04.cluster:13384] MCW rank 10 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B/././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node04.cluster:13384] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node06.cluster:24192] MCW rank 5 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node06.cluster:24192] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node05.cluster:25655] MCW rank 9 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./././B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node05.cluster:25655] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [B/././.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node05.cluster:25655] MCW rank 4 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [./B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node05.cluster:25655] MCW rank 7 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [././B/.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 4 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 7 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 6 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 3 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 0 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 8 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 2 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 5 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 9 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 1 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello world from process 10 of 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;patch.rr&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23628.php">Saliya Ekanayake: "[OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
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
