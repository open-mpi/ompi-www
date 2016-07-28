<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 19:22:33 2013" -->
<!-- isoreceived="20131126002233" -->
<!-- sent="Tue, 26 Nov 2013 09:22:24 +0900" -->
<!-- isosent="20131126002224" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager" -->
<!-- id="OFFDBDCB9C.97F7E4FE-ON49257C2F.0000DACA-49257C2F.00020F83_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F69E76A4-22E3-425F-8DF4-9D02269767AC_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4a1r29646%20with%20-hostfile%20option%20under%20Torque%20manager"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-25 19:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23063.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23043.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23163.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you very much for your quick response.
<br>
<p>I'm afraid to say that I found one more issuse...
<br>
<p>It's not so serious. Please check it when you have a lot of time.
<br>
<p>The problem is cpus-per-proc with -map-by option under Torque manager.
<br>
It doesn't work as shown below. I guess you can get the same
<br>
behaviour under Slurm manager.
<br>
<p>Of course, if I remove -map-by option, it works quite well.
<br>
<p>[mishima_at_manage testbed2]$ qsub -I -l nodes=1:ppn=32
<br>
qsub: waiting for job 8116.manage.cluster to start
<br>
qsub: job 8116.manage.cluster ready
<br>
<p>[mishima_at_node03 ~]$ cd ~/Ducom/testbed2
<br>
[mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings -cpus-per-proc 4
<br>
-map-by socket mPre
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:         CORE
<br>
&nbsp;&nbsp;&nbsp;Node:            node03
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
<p><p>[mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings -cpus-per-proc 4
<br>
mPre
<br>
[node03.cluster:18128] MCW rank 2 bound to socket 1[core 8[hwt 0]], socket
<br>
1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
<br>
ocket 1[core 11[hwt 0]]:
<br>
[./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
<br>
[node03.cluster:18128] MCW rank 3 bound to socket 1[core 12[hwt 0]], socket
<br>
1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
<br>
&nbsp;socket 1[core 15[hwt 0]]:
<br>
[./././././././.][././././B/B/B/B][./././././././.][./././././././.]
<br>
[node03.cluster:18128] MCW rank 4 bound to socket 2[core 16[hwt 0]], socket
<br>
2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
<br>
&nbsp;socket 2[core 19[hwt 0]]:
<br>
[./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
<br>
[node03.cluster:18128] MCW rank 5 bound to socket 2[core 20[hwt 0]], socket
<br>
2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
<br>
&nbsp;socket 2[core 23[hwt 0]]:
<br>
[./././././././.][./././././././.][././././B/B/B/B][./././././././.]
<br>
[node03.cluster:18128] MCW rank 6 bound to socket 3[core 24[hwt 0]], socket
<br>
3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
<br>
&nbsp;socket 3[core 27[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
<br>
[node03.cluster:18128] MCW rank 7 bound to socket 3[core 28[hwt 0]], socket
<br>
3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
<br>
&nbsp;socket 3[core 31[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][././././B/B/B/B]
<br>
[node03.cluster:18128] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]:
<br>
[B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
<br>
[node03.cluster:18128] MCW rank 1 bound to socket 0[core 4[hwt 0]], socket
<br>
0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
<br>
cket 0[core 7[hwt 0]]:
<br>
[././././B/B/B/B][./././././././.][./././././././.][./././././././.]
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Fixed and scheduled to move to 1.7.4. Thanks again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 17, 2013, at 6:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks! That's precisely where I was going to look when I had time :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll update tomorrow.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Nov 17, 2013 at 7:01 PM,  &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the continuous story of &quot;Segmentation fault in oob_tcp.c of
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.4a1r29646&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found the cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Firstly, I noticed that your hostfile can work and mine can not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your host file:
</span><br>
<span class="quotelev1">&gt; cat hosts
</span><br>
<span class="quotelev1">&gt; bend001 slots=12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My host file:
</span><br>
<span class="quotelev1">&gt; cat hosts
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; ...(total 8 lines)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified my script file to add &quot;slots=1&quot; to each line of my hostfile
</span><br>
<span class="quotelev1">&gt; just before launching mpirun. Then it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My host file(modified):
</span><br>
<span class="quotelev1">&gt; cat hosts
</span><br>
<span class="quotelev1">&gt; node08 slots=1
</span><br>
<span class="quotelev1">&gt; node08 slots=1
</span><br>
<span class="quotelev1">&gt; ...(total 8 lines)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Secondary, I confirmed that there's a slight difference between
</span><br>
<span class="quotelev1">&gt; orte/util/hostfile/hostfile.c of 1.7.3 and that of 1.7.4a1r29646.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ diff
</span><br>
<span class="quotelev1">&gt; hostfile.c.org ../../../../openmpi-1.7.3/orte/util/hostfile/hostfile.c
</span><br>
<span class="quotelev1">&gt; 394,401c394,399
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; if (got_count) {
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; &#160; &#160; node-&gt;slots_given = true;
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; } else if (got_max) {
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; &#160; &#160; node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; &#160; &#160; node-&gt;slots_given = true;
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; } else {
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; &#160; &#160; /* should be set by obj_new, but just to be clear */
</span><br>
<span class="quotelev1">&gt; &lt; &#160; &#160; &#160; &#160; node-&gt;slots_given = false;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; if (!got_count) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; if (got_max) {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; } else {
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; ++node-&gt;slots;
</span><br>
<span class="quotelev2">&gt; &gt; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I added the line 402 below just as a tentative trial.
</span><br>
<span class="quotelev1">&gt; Then, it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat -n orte/util/hostfile/hostfile.c:
</span><br>
<span class="quotelev1">&gt; &#160; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160; &#160;394 &#160; &#160; &#160;if (got_count) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;395 &#160; &#160; &#160; &#160; &#160;node-&gt;slots_given = true;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;396 &#160; &#160; &#160;} else if (got_max) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;397 &#160; &#160; &#160; &#160; &#160;node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;398 &#160; &#160; &#160; &#160; &#160;node-&gt;slots_given = true;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;399 &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;400 &#160; &#160; &#160; &#160; &#160;/* should be set by obj_new, but just to be clear */
</span><br>
<span class="quotelev1">&gt; &#160; &#160;401 &#160; &#160; &#160; &#160; &#160;node-&gt;slots_given = false;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;402 &#160; &#160; &#160; &#160; &#160;++node-&gt;slots; /* added by tmishima */
</span><br>
<span class="quotelev1">&gt; &#160; &#160;403 &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160; &#160;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please fix the problem properly, because it's just based on my
</span><br>
<span class="quotelev1">&gt; random guess. It's related to the treatment of hostfile where slots
</span><br>
<span class="quotelev1">&gt; information is not given.
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
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23065.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23063.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23043.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="23067.php">Reuti: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23163.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
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
