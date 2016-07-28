<?
$subject_val = "[OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 18:59:01 2014" -->
<!-- isoreceived="20140619225901" -->
<!-- sent="Fri, 20 Jun 2014 07:57:57 +0900" -->
<!-- isosent="20140619225757" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="OF315716A9.5495D2B4-ON49257CED.001763D1-49257CFC.007E468D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20trunk%20hangs%20when%20I%20specify%20a%20particular%20binding%20by%20rankfile"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-19 18:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15031.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15029.php">Edgar Gabriel: "Re: [OMPI devel] Agenda for next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>Recently I have been seeing a hang with trunk when I specify a
<br>
particular binding by use of rankfile or &quot;-map-by slot&quot;.
<br>
<p>This can be reproduced by the rankfile which allocates a process
<br>
beyond socket boundary. For example, on the node05 which has 2 socket
<br>
with 4 core, the rank 1 is allocated through socket 0 and 1 as shown
<br>
below. Then it hangs in the middle of communication.
<br>
<p>[mishima_at_manage trial]$ cat rankfile1
<br>
rank 0=node05 slot=0-1
<br>
rank 1=node05 slot=3-4
<br>
rank 2=node05 slot=6-7
<br>
<p>[mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings demos/myprog
<br>
[node05.cluster:02342] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:02342] MCW rank 1 bound to socket 0[core 3[hwt 0]], socket
<br>
1[core 4[hwt 0]]: [./././B][B/././.]
<br>
[node05.cluster:02342] MCW rank 2 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
Hello world from process 2 of 3
<br>
Hello world from process 1 of 3
<br>
&lt;&lt; hang here! &gt;&gt;
<br>
<p>If I disable coll_ml or use 1.8 series, it works, which means it
<br>
might be affected by coll_ml component, I guess. But, unfortunately,
<br>
I have no idea to fix this problem. So, please somebody could resolve
<br>
the issue.
<br>
<p>[mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings -mca
<br>
coll_ml_priority 0 demos/myprog
<br>
[node05.cluster:02382] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:02382] MCW rank 1 bound to socket 0[core 3[hwt 0]], socket
<br>
1[core 4[hwt 0]]: [./././B][B/././.]
<br>
[node05.cluster:02382] MCW rank 2 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
Hello world from process 2 of 3
<br>
Hello world from process 0 of 3
<br>
Hello world from process 1 of 3
<br>
<p>In addtition, when I use the host with 12 cores, &quot;-map-by slot&quot; causes the
<br>
same problem.
<br>
[mishima_at_manage trial]$ mpirun -np 3 -map-by slot:pe=4 -report-bindings
<br>
demos/myprog
<br>
[manage.cluster:02557] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]: [B/B/B/B/./.][./././././.]
<br>
[manage.cluster:02557] MCW rank 1 bound to socket 0[core 4[hwt 0]], socket
<br>
0[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
<br>
cket 1[core 7[hwt 0]]: [././././B/B][B/B/./././.]
<br>
[manage.cluster:02557] MCW rank 2 bound to socket 1[core 8[hwt 0]], socket
<br>
1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
<br>
ocket 1[core 11[hwt 0]]: [./././././.][././B/B/B/B]
<br>
Hello world from process 1 of 3
<br>
Hello world from process 2 of 3
<br>
&lt;&lt; hang here! &gt;&gt;
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15031.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15029.php">Edgar Gabriel: "Re: [OMPI devel] Agenda for next week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
