<?
$subject_val = "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 17:16:40 2014" -->
<!-- isoreceived="20140117221640" -->
<!-- sent="Fri, 17 Jan 2014 14:16:33 -0800" -->
<!-- isosent="20140117221633" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2" -->
<!-- id="E7DE32AA-9F57-4200-91A3-36F87AB51BAC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFA0A72C97.4D7A4E05-ON49257C63.0078A5F2-49257C63.0078F17F_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 17:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - I understood and was just occupied with something else for a while. Thanks for the follow-up. I'm looking at the issue and trying to decipher the right solution.
<br>
<p><p>On Jan 17, 2014, at 2:00 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry that my explanation was not enough ...
</span><br>
<span class="quotelev1">&gt; This is the summary of my situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I create a hostfile as shown below manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I use mpirun to start the job without Torque, which means I'm running in
</span><br>
<span class="quotelev1">&gt; an un-managed environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Firstly, ORTE detects 8 slots on each host(maybe in
</span><br>
<span class="quotelev1">&gt; &quot;orte_ras_base_allocate&quot;).
</span><br>
<span class="quotelev1">&gt;    node05: slots=8 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt;    node06: slots=8 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Then, the code I identified is resetting the slot counts.
</span><br>
<span class="quotelev1">&gt;    node05: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt;    node06: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. Therefore, ORTE believes that there is only one slot on each host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, I didn't use Torque this time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This issue is caused only when it is not in the managed
</span><br>
<span class="quotelev2">&gt;&gt; environment - namely, orte_managed_allocation is false
</span><br>
<span class="quotelev2">&gt;&gt; (and orte_set_slots is NULL).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Under the torque management, it works fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope you can understand the situation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry, but I'm really confused, so let me try to understand the
</span><br>
<span class="quotelev2">&gt;&gt; situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You use Torque to get an allocation, so you are running in a managed
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You then use mpirun to start the job, but pass it a hostfile as shown
</span><br>
<span class="quotelev2">&gt;&gt; below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somehow, ORTE believes that there is only one slot on each host, and
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; believe the code you've identified is resetting the slot counts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that a correct summary of the situation?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 16, 2014, at 4:00 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I encountered the hostfile issue again where slots are counted by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listing the node multiple times. This should be fixed by r29765
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Fix hostfile parsing for the case where RMs count slots ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The difference is using RM or not. At that time, I executed mpirun
</span><br>
<span class="quotelev2">&gt;&gt; through
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Torque manager. This time I executed it directly from command line as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shown at the bottom, where node05,06 has 8 cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then, I checked source files arroud it and found that the line
</span><br>
<span class="quotelev1">&gt; 151-160
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plm_base_launch_support.c caused this issue. As node-&gt;slots is
</span><br>
<span class="quotelev1">&gt; already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; counted in hostfile.c @ r29765 even when node-&gt;slots_given is false,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think this part of plm_base_launch_support.c would be unnecesarry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/mca/plm/base/plm_base_launch_support.c @ 30189:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 151             } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 152                 /* set any non-specified slot counts to 1 */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 153                 for (i=0; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 154                     if (NULL == (node =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 155                         continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 156                     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 157                     if (!node-&gt;slots_given) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 158                         node-&gt;slots = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 159                     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 160                 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 161             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Removing this part, it works very well, where the function of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_set_default_slots is still alive. I think this would be better
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the compatible extention of openmpi-1.7.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev1">&gt; -cpus-per-proc
</span><br>
<span class="quotelev2">&gt;&gt; 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -report-bindings myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 2 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 3 is not bound (or bound to all
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 1 is not bound (or bound to all
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
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
