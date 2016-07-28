<?
$subject_val = "Re: [OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 18:26:26 2014" -->
<!-- isoreceived="20140227232626" -->
<!-- sent="Thu, 27 Feb 2014 15:24:33 -0800" -->
<!-- isosent="20140227232433" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new map-by-obj has a problem" -->
<!-- id="18898159-6DFF-476F-A058-C8CE40DB7F57_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFFAA8E9DE.1B93801E-ON49257C8C.007EB370-49257C8C.00801DEE_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] new map-by-obj has a problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 18:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm..what does your node look like again (sockets and cores)?
<br>
<p>On Feb 27, 2014, at 3:19 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes another problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have overload message with this command line as shown below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev1">&gt; -display-map ~/mis/openmpi/d
</span><br>
<span class="quotelev1">&gt; emos/myprog
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Bind to:         CORE
</span><br>
<span class="quotelev1">&gt;   Node:            node05
</span><br>
<span class="quotelev1">&gt;   #processes:  2
</span><br>
<span class="quotelev1">&gt;   #cpus:          1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I add &quot;-bind-to core:overload-allowed&quot; to see what happenes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev1">&gt; -display-map -bind-to core:o
</span><br>
<span class="quotelev1">&gt; verload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; Data for JOB [14398,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18443] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20901] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18443] MCW rank 7 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20901] MCW rank 3 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18443] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20901] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18443] MCW rank 5 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20901] MCW rank 1 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I add &quot;map-by obj:span&quot;, it works fine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2,span
</span><br>
<span class="quotelev1">&gt; -display-map  ~/mis/ope
</span><br>
<span class="quotelev1">&gt; nmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; Data for JOB [14703,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18491] MCW rank 6 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20949] MCW rank 2 bound to socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18491] MCW rank 7 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20949] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18491] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20949] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node06.cluster:18491] MCW rank 5 bound to socket 1[core 4[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:20949] MCW rank 1 bound to socket 1[core 4[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, byobj_span would be okay. Of course, bynode and byslot should be okay.
</span><br>
<span class="quotelev1">&gt; Could you take a look at orte_rmaps_rr_byobj again?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23699.php">tmishima_at_[hidden]: "[OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
