<?
$subject_val = "[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 11:32:24 2013" -->
<!-- isoreceived="20131113163224" -->
<!-- sent="Wed, 13 Nov 2013 17:32:21 +0100 (CET)" -->
<!-- isosent="20131113163221" -->
<!-- name="Iv&#195;&#161;n Cores Gonz&#195;&#161;lez" -->
<!-- email="ivan.coresg_at_[hidden]" -->
<!-- subject="[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration." -->
<!-- id="782283335.1972443.1384360341501.JavaMail.zimbra_at_udc.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="100699927.1971322.1384360122803.JavaMail.zimbra_at_udc.es" -->
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
<strong>Subject:</strong> [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration.<br>
<strong>From:</strong> Iv&#195;&#161;n Cores Gonz&#195;&#161;lez (<em>ivan.coresg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-13 11:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>Previous message:</strong> <a href="22967.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>Reply:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am running the NAS parallel benchmarks and I have a performance problem
<br>
depending on the hostfile configuration. I use Open MPI version 1.7.2.
<br>
<p>I run the FT benchmark in 16 processes, but I want to overload each core
<br>
with 4 processes (yes, I want to do it), so I execute:
<br>
<p>time mpirun --hostfile ./hostfile -np 16 --oversubscribe -bind-to core:overload-allowed --ppr 4:core --report-bindings ./ft.C.16
<br>
<p>and the hostfile is (each node has 2 octo-core Intel Xeon processors):
<br>
compute-0-15 slots=4
<br>
<p>I check the core mapping whit the &quot;top&quot; command and the 16 processes run 
<br>
over 4 physical cores. The time execution in this configuration is 80 seconds.
<br>
<p>The problem is that if I change the hostfile to:
<br>
compute-0-15 slots=16
<br>
<p>and I run the same mpirun instruction (overloading each core with 4 
<br>
processes) the execution time increase to 240 seconds (!). 
<br>
I check the core mapping again and the 16 processes were running over 
<br>
the same 4 cores. 
<br>
<p>Any idea to explain the performance drop?
<br>
<p>Thanks,
<br>
Iv&#195;&#161;n Cores.
<br>
<p>P.S.:
<br>
In both cases the binging is:
<br>
[compute-0-15.local:14691] MCW rank 15 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 1 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 2 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 3 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 4 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 5 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 6 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 7 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 8 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 10 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 11 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 12 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 13 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
<br>
[compute-0-15.local:14691] MCW rank 14 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>Previous message:</strong> <a href="22967.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>Reply:</strong> <a href="22969.php">Ralph Castain: "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
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
