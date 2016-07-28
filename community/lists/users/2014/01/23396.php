<?
$subject_val = "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 15:31:43 2014" -->
<!-- isoreceived="20140117203143" -->
<!-- sent="Sat, 18 Jan 2014 05:31:36 +0900" -->
<!-- isosent="20140117203136" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2" -->
<!-- id="OF52F54760.C3496FEB-ON49257C63.006EE710-49257C63.0070C45A_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="861B34E9-8C44-4A58-8B69-F18DC794BAB0_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20hosfile%20issue%20of%20openmpi-1.7.4rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-17 15:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, I didn't use Torque this time.
<br>
<p>This issue is caused only when it is not in the managed
<br>
environment - namely, orte_managed_allocation is false
<br>
(and orte_set_slots is NULL).
<br>
<p>Under the torque management, it works fine.
<br>
<p>I hope you can understand the situation.
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; I'm sorry, but I'm really confused, so let me try to understand the
</span><br>
situation.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You use Torque to get an allocation, so you are running in a managed
</span><br>
environment.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You then use mpirun to start the job, but pass it a hostfile as shown
</span><br>
below.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow, ORTE believes that there is only one slot on each host, and you
</span><br>
believe the code you've identified is resetting the slot counts.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that a correct summary of the situation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2014, at 4:00 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I encountered the hostfile issue again where slots are counted by
</span><br>
<span class="quotelev2">&gt; &gt; listing the node multiple times. This should be fixed by r29765
</span><br>
<span class="quotelev2">&gt; &gt; - Fix hostfile parsing for the case where RMs count slots ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The difference is using RM or not. At that time, I executed mpirun
</span><br>
through
<br>
<span class="quotelev2">&gt; &gt; Torque manager. This time I executed it directly from command line as
</span><br>
<span class="quotelev2">&gt; &gt; shown at the bottom, where node05,06 has 8 cores.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then, I checked source files arroud it and found that the line 151-160
</span><br>
in
<br>
<span class="quotelev2">&gt; &gt; plm_base_launch_support.c caused this issue. As node-&gt;slots is already
</span><br>
<span class="quotelev2">&gt; &gt; counted in hostfile.c @ r29765 even when node-&gt;slots_given is false,
</span><br>
<span class="quotelev2">&gt; &gt; I think this part of plm_base_launch_support.c would be unnecesarry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/plm/base/plm_base_launch_support.c @ 30189:
</span><br>
<span class="quotelev2">&gt; &gt; 151             } else {
</span><br>
<span class="quotelev2">&gt; &gt; 152                 /* set any non-specified slot counts to 1 */
</span><br>
<span class="quotelev2">&gt; &gt; 153                 for (i=0; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; 154                     if (NULL == (node =
</span><br>
<span class="quotelev2">&gt; &gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev2">&gt; &gt; 155                         continue;
</span><br>
<span class="quotelev2">&gt; &gt; 156                     }
</span><br>
<span class="quotelev2">&gt; &gt; 157                     if (!node-&gt;slots_given) {
</span><br>
<span class="quotelev2">&gt; &gt; 158                         node-&gt;slots = 1;
</span><br>
<span class="quotelev2">&gt; &gt; 159                     }
</span><br>
<span class="quotelev2">&gt; &gt; 160                 }
</span><br>
<span class="quotelev2">&gt; &gt; 161             }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Removing this part, it works very well, where the function of
</span><br>
<span class="quotelev2">&gt; &gt; orte_set_default_slots is still alive. I think this would be better for
</span><br>
<span class="quotelev2">&gt; &gt; the compatible extention of openmpi-1.7.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts -cpus-per-proc
</span><br>
4
<br>
<span class="quotelev2">&gt; &gt; -report-bindings myprog
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:22287] MCW rank 2 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:22287] MCW rank 3 is not bound (or bound to all
</span><br>
available
<br>
<span class="quotelev2">&gt; &gt; processors)
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:22287] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:22287] MCW rank 1 is not bound (or bound to all
</span><br>
available
<br>
<span class="quotelev2">&gt; &gt; processors)
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23381.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Reply:</strong> <a href="23399.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
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
