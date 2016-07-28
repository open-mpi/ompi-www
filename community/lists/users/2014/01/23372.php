<?
$subject_val = "[OMPI users] hosfile issue of openmpi-1.7.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 19:00:59 2014" -->
<!-- isoreceived="20140117000059" -->
<!-- sent="Fri, 17 Jan 2014 09:00:47 +0900" -->
<!-- isosent="20140117000047" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] hosfile issue of openmpi-1.7.4rc2" -->
<!-- id="OFA9811CDD.C68A2400-ON49257C62.00834DCA-49257C63.00001472_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] hosfile issue of openmpi-1.7.4rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20hosfile%20issue%20of%20openmpi-1.7.4rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-16 19:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23371.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I encountered the hostfile issue again where slots are counted by
<br>
listing the node multiple times. This should be fixed by r29765
<br>
- Fix hostfile parsing for the case where RMs count slots ....
<br>
<p>The difference is using RM or not. At that time, I executed mpirun through
<br>
Torque manager. This time I executed it directly from command line as
<br>
shown at the bottom, where node05,06 has 8 cores.
<br>
<p>Then, I checked source files arroud it and found that the line 151-160 in
<br>
plm_base_launch_support.c caused this issue. As node-&gt;slots is already
<br>
counted in hostfile.c @ r29765 even when node-&gt;slots_given is false,
<br>
I think this part of plm_base_launch_support.c would be unnecesarry.
<br>
<p>orte/mca/plm/base/plm_base_launch_support.c @ 30189:
<br>
151             } else {
<br>
152                 /* set any non-specified slot counts to 1 */
<br>
153                 for (i=0; i &lt; orte_node_pool-&gt;size; i++) {
<br>
154                     if (NULL == (node =
<br>
(orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
<br>
155                         continue;
<br>
156                     }
<br>
157                     if (!node-&gt;slots_given) {
<br>
158                         node-&gt;slots = 1;
<br>
159                     }
<br>
160                 }
<br>
161             }
<br>
<p>Removing this part, it works very well, where the function of
<br>
orte_set_default_slots is still alive. I think this would be better for
<br>
the compatible extention of openmpi-1.7.3.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>[mishima_at_manage work]$ cat pbs_hosts
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node05
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
node06
<br>
[mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -cpus-per-proc 4
<br>
-report-bindings myprog
<br>
[node05.cluster:22287] MCW rank 2 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
<br>
cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
<br>
[node05.cluster:22287] MCW rank 3 is not bound (or bound to all available
<br>
processors)
<br>
[node05.cluster:22287] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
<br>
[node05.cluster:22287] MCW rank 1 is not bound (or bound to all available
<br>
processors)
<br>
Hello world from process 0 of 4
<br>
Hello world from process 1 of 4
<br>
Hello world from process 3 of 4
<br>
Hello world from process 2 of 4
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23371.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
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
