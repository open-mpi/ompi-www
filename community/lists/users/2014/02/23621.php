<?
$subject_val = "[OMPI users] map-by node with openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 01:42:52 2014" -->
<!-- isoreceived="20140218064252" -->
<!-- sent="Tue, 18 Feb 2014 15:42:17 +0900" -->
<!-- isosent="20140218064217" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] map-by node with openmpi-1.7.5a1" -->
<!-- id="OF35B3CFC0.CEF0D8B8-ON49257C83.00166B70-49257C83.0024E0C8_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] map-by node with openmpi-1.7.5a1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20map-by%20node%20with%20openmpi-1.7.5a1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-18 01:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I did overall verification of rr_mapper, and I found another problem
<br>
with &quot;map-by node&quot;. As far as I checked, &quot;map-by obj&quot; other than node
<br>
worked fine. I myself do not use &quot;map-by node&quot;, but I'd like to report
<br>
it to improve reliability of 1.7.5. It seems too difficult for me to
<br>
resolve it. I hope you could take a look.
<br>
<p>The problem occurs when I mixedly use two kinds of node, although I
<br>
add &quot;-hetero-nodes&quot; to command line:
<br>
<p>[mishima_at_manage work]$ cat pbs_hosts
<br>
node04 slots=8
<br>
node05 slots=2
<br>
node06 slots=2
<br>
<p>[mishima_at_manage work]$ mpirun -np 12 -machinefile pbs_hosts -map-by node
<br>
-report-bindings -hetero-nodes /home/mishima/mi
<br>
s/openmpi/demos/myprog
<br>
[manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
<br>
rmaps_rr.c at line 241
<br>
[manage.cluster:13113] [[15682,0],0] ORTE_ERROR_LOG: Fatal in file
<br>
base/rmaps_base_map_job.c at line 285
<br>
<p>With &quot;-np 11&quot;, it works. But rank 10 is bound to the wrong core (which is
<br>
already used by rank 0). I guess something is wrong with the handling of
<br>
different topology when &quot;map-by node&quot; is specified. In addition, the
<br>
calculation of assigning procs to each node has some problems:
<br>
<p>[mishima_at_manage work]$ mpirun -np 11 -machinefile pbs_hosts -map-by node
<br>
-report-bindings -hetero-nodes /home/mishima/mi
<br>
s/openmpi/demos/myprog
<br>
[node04.cluster:13384] MCW rank 3 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
[node04.cluster:13384] MCW rank 6 bound to socket 0[core 2[hwt 0]]:
<br>
[././B/././././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
[node04.cluster:13384] MCW rank 8 bound to socket 0[core 3[hwt 0]]:
<br>
[./././B/./././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
[node04.cluster:13384] MCW rank 10 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.][./././././././.]
<br>
[./././././././.]
<br>
[node04.cluster:13384] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
[node06.cluster:24192] MCW rank 5 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
[node06.cluster:24192] MCW rank 2 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node05.cluster:25655] MCW rank 9 bound to socket 0[core 3[hwt 0]]:
<br>
[./././B][./././.]
<br>
[node05.cluster:25655] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././.][./././.]
<br>
[node05.cluster:25655] MCW rank 4 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./.][./././.]
<br>
[node05.cluster:25655] MCW rank 7 bound to socket 0[core 2[hwt 0]]:
<br>
[././B/.][./././.]
<br>
Hello world from process 4 of 11
<br>
Hello world from process 7 of 11
<br>
Hello world from process 6 of 11
<br>
Hello world from process 3 of 11
<br>
Hello world from process 0 of 11
<br>
Hello world from process 8 of 11
<br>
Hello world from process 2 of 11
<br>
Hello world from process 5 of 11
<br>
Hello world from process 9 of 11
<br>
Hello world from process 1 of 11
<br>
Hello world from process 10 of 11
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
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
