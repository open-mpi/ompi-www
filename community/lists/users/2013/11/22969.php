<?
$subject_val = "Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 12:01:36 2013" -->
<!-- isoreceived="20131113170136" -->
<!-- sent="Wed, 13 Nov 2013 09:00:45 -0800" -->
<!-- isosent="20131113170045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration." -->
<!-- id="F8EF2BD9-80CC-4E05-B17B-FC66FC6318A6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="782283335.1972443.1384360341501.JavaMail.zimbra_at_udc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-13 12:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22968.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>In reply to:</strong> <a href="22968.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you specify slots=16, you are no longer oversubscribed - and so we don't back down the MPI aggressiveness on messaging. When you are oversubscribed, we have each MPI proc release its schedule slice back to the OS when it's waiting for a message.
<br>
<p>Overloaded and aggressive = bad performance.
<br>
<p>On Nov 13, 2013, at 8:32 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am running the NAS parallel benchmarks and I have a performance problem
</span><br>
<span class="quotelev1">&gt; depending on the hostfile configuration. I use Open MPI version 1.7.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run the FT benchmark in 16 processes, but I want to overload each core
</span><br>
<span class="quotelev1">&gt; with 4 processes (yes, I want to do it), so I execute:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time mpirun --hostfile ./hostfile -np 16 --oversubscribe -bind-to core:overload-allowed --ppr 4:core --report-bindings ./ft.C.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the hostfile is (each node has 2 octo-core Intel Xeon processors):
</span><br>
<span class="quotelev1">&gt; compute-0-15 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I check the core mapping whit the &quot;top&quot; command and the 16 processes run 
</span><br>
<span class="quotelev1">&gt; over 4 physical cores. The time execution in this configuration is 80 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that if I change the hostfile to:
</span><br>
<span class="quotelev1">&gt; compute-0-15 slots=16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I run the same mpirun instruction (overloading each core with 4 
</span><br>
<span class="quotelev1">&gt; processes) the execution time increase to 240 seconds (!). 
</span><br>
<span class="quotelev1">&gt; I check the core mapping again and the 16 processes were running over 
</span><br>
<span class="quotelev1">&gt; the same 4 cores. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea to explain the performance drop?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Iv&#225;n Cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.:
</span><br>
<span class="quotelev1">&gt; In both cases the binging is:
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 15 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 1 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 2 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 3 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 4 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 5 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 6 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 7 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 8 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 10 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 11 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 12 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 13 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [compute-0-15.local:14691] MCW rank 14 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="22970.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22968.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<li><strong>In reply to:</strong> <a href="22968.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] Mpirun performance varies changing the hostfile with equivalent configuration."</a>
<!-- nextthread="start" -->
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
