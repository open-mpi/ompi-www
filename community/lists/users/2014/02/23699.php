<?
$subject_val = "[OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 18:19:22 2014" -->
<!-- isoreceived="20140227231922" -->
<!-- sent="Fri, 28 Feb 2014 08:19:08 +0900" -->
<!-- isosent="20140227231908" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] new map-by-obj has a problem" -->
<!-- id="OFFAA8E9DE.1B93801E-ON49257C8C.007EB370-49257C8C.00801DEE_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] new map-by-obj has a problem<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20new%20map-by-obj%20has%20a%20problem"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-27 18:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes another problem.
<br>
<p>I have overload message with this command line as shown below:
<br>
<p>mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
<br>
-display-map ~/mis/openmpi/d
<br>
emos/myprog
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:         CORE
<br>
&nbsp;&nbsp;&nbsp;Node:            node05
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:          1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>Then, I add &quot;-bind-to core:overload-allowed&quot; to see what happenes.
<br>
<p>mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
<br>
-display-map -bind-to core:o
<br>
verload-allowed ~/mis/openmpi/demos/myprog
<br>
&nbsp;Data for JOB [14398,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 3
<br>
<p>&nbsp;Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14398,1] App: 0 Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
[node06.cluster:18443] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:20901] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node06.cluster:18443] MCW rank 7 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node05.cluster:20901] MCW rank 3 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node06.cluster:18443] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:20901] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node06.cluster:18443] MCW rank 5 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node05.cluster:20901] MCW rank 1 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
Hello world from process 4 of 8
<br>
Hello world from process 2 of 8
<br>
Hello world from process 6 of 8
<br>
Hello world from process 0 of 8
<br>
Hello world from process 5 of 8
<br>
Hello world from process 1 of 8
<br>
Hello world from process 7 of 8
<br>
Hello world from process 3 of 8
<br>
<p>When I add &quot;map-by obj:span&quot;, it works fine:
<br>
<p>mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2,span
<br>
-display-map  ~/mis/ope
<br>
nmpi/demos/myprog
<br>
&nbsp;Data for JOB [14703,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 3
<br>
<p>&nbsp;Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14703,1] App: 0 Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
[node06.cluster:18491] MCW rank 6 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node05.cluster:20949] MCW rank 2 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node06.cluster:18491] MCW rank 7 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
[node05.cluster:20949] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
[node06.cluster:18491] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:20949] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node06.cluster:18491] MCW rank 5 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
[node05.cluster:20949] MCW rank 1 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
....
<br>
<p>So, byobj_span would be okay. Of course, bynode and byslot should be okay.
<br>
Could you take a look at orte_rmaps_rr_byobj again?
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23700.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
