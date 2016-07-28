<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  8 12:03:36 2013" -->
<!-- isoreceived="20131208170336" -->
<!-- sent="Sun, 8 Dec 2013 09:03:14 -0800" -->
<!-- isosent="20131208170314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager" -->
<!-- id="2C275036-359B-4D86-83DF-8A8B15882026_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFFDBDCB9C.97F7E4FE-ON49257C2F.0000DACA-49257C2F.00020F83_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-08 12:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23064.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Reply:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Reply:</strong> <a href="23173.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed this under the trunk (was an issue regardless of RM) and have scheduled it for 1.7.4.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Nov 25, 2013, at 4:22 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your quick response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid to say that I found one more issuse...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not so serious. Please check it when you have a lot of time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is cpus-per-proc with -map-by option under Torque manager.
</span><br>
<span class="quotelev1">&gt; It doesn't work as shown below. I guess you can get the same
</span><br>
<span class="quotelev1">&gt; behaviour under Slurm manager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, if I remove -map-by option, it works quite well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage testbed2]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 8116.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; qsub: job 8116.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 ~]$ cd ~/Ducom/testbed2
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings -cpus-per-proc 4
</span><br>
<span class="quotelev1">&gt; -map-by socket mPre
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
<span class="quotelev1">&gt;   Node:            node03
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings -cpus-per-proc 4
</span><br>
<span class="quotelev1">&gt; mPre
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 2 bound to socket 1[core 8[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev1">&gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 3 bound to socket 1[core 12[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][././././B/B/B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 4 bound to socket 2[core 16[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 5 bound to socket 2[core 20[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][././././B/B/B/B][./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 6 bound to socket 3[core 24[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 7 bound to socket 3[core 28[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][./././././././.][././././B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:18128] MCW rank 1 bound to socket 0[core 4[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fixed and scheduled to move to 1.7.4. Thanks again!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 17, 2013, at 6:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks! That's precisely where I was going to look when I had time :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll update tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Nov 17, 2013 at 7:01 PM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the continuous story of &quot;Segmentation fault in oob_tcp.c of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.7.4a1r29646&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found the cause.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Firstly, I noticed that your hostfile can work and mine can not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your host file:
</span><br>
<span class="quotelev2">&gt;&gt; cat hosts
</span><br>
<span class="quotelev2">&gt;&gt; bend001 slots=12
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My host file:
</span><br>
<span class="quotelev2">&gt;&gt; cat hosts
</span><br>
<span class="quotelev2">&gt;&gt; node08
</span><br>
<span class="quotelev2">&gt;&gt; node08
</span><br>
<span class="quotelev2">&gt;&gt; ...(total 8 lines)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I modified my script file to add &quot;slots=1&quot; to each line of my hostfile
</span><br>
<span class="quotelev2">&gt;&gt; just before launching mpirun. Then it worked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My host file(modified):
</span><br>
<span class="quotelev2">&gt;&gt; cat hosts
</span><br>
<span class="quotelev2">&gt;&gt; node08 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node08 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; ...(total 8 lines)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Secondary, I confirmed that there's a slight difference between
</span><br>
<span class="quotelev2">&gt;&gt; orte/util/hostfile/hostfile.c of 1.7.3 and that of 1.7.4a1r29646.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ diff
</span><br>
<span class="quotelev2">&gt;&gt; hostfile.c.org ../../../../openmpi-1.7.3/orte/util/hostfile/hostfile.c
</span><br>
<span class="quotelev2">&gt;&gt; 394,401c394,399
</span><br>
<span class="quotelev2">&gt;&gt; &lt;     if (got_count) {
</span><br>
<span class="quotelev2">&gt;&gt; &lt;         node-&gt;slots_given = true;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;     } else if (got_max) {
</span><br>
<span class="quotelev2">&gt;&gt; &lt;         node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;         node-&gt;slots_given = true;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt; &lt;         /* should be set by obj_new, but just to be clear */
</span><br>
<span class="quotelev2">&gt;&gt; &lt;         node-&gt;slots_given = false;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (!got_count) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (got_max) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ++node-&gt;slots;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, I added the line 402 below just as a tentative trial.
</span><br>
<span class="quotelev2">&gt;&gt; Then, it worked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cat -n orte/util/hostfile/hostfile.c:
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt;    394      if (got_count) {
</span><br>
<span class="quotelev2">&gt;&gt;    395          node-&gt;slots_given = true;
</span><br>
<span class="quotelev2">&gt;&gt;    396      } else if (got_max) {
</span><br>
<span class="quotelev2">&gt;&gt;    397          node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev2">&gt;&gt;    398          node-&gt;slots_given = true;
</span><br>
<span class="quotelev2">&gt;&gt;    399      } else {
</span><br>
<span class="quotelev2">&gt;&gt;    400          /* should be set by obj_new, but just to be clear */
</span><br>
<span class="quotelev2">&gt;&gt;    401          node-&gt;slots_given = false;
</span><br>
<span class="quotelev2">&gt;&gt;    402          ++node-&gt;slots; /* added by tmishima */
</span><br>
<span class="quotelev2">&gt;&gt;    403      }
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please fix the problem properly, because it's just based on my
</span><br>
<span class="quotelev2">&gt;&gt; random guess. It's related to the treatment of hostfile where slots
</span><br>
<span class="quotelev2">&gt;&gt; information is not given.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23064.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Reply:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Reply:</strong> <a href="23173.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
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
