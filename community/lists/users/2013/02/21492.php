<?
$subject_val = "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 14:13:18 2013" -->
<!-- isoreceived="20130228191318" -->
<!-- sent="Thu, 28 Feb 2013 20:13:06 +0100" -->
<!-- isosent="20130228191306" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?" -->
<!-- id="0AAE140B-553E-4C95-A62A-44AEF5379A01_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="181DCC47-AFAD-4449-A4A7-90E7A3EAA561_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 14:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21491.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21491.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 28.02.2013 um 19:50 schrieb Reuti:
<br>
<p><span class="quotelev1">&gt; Am 28.02.2013 um 19:21 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 28, 2013, at 9:53 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 28.02.2013 um 17:54 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm....the problem is that we are mapping procs using the provided slots instead of dividing the slots by cpus-per-proc. So we put too many on the first node, and the backend daemon aborts the job because it lacks sufficient processors for cpus-per-proc=2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, this I would understand. But why is it then working if no maximum number of slots is given? Will it then just fill the node up to the found number of cores inside and subtract this correctly each time a new process ist started and jump to the next machine if necessary?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not exactly. If no max slots is given, then we assume a value of one. This effectively converts byslot mapping to bynode - i.e., we place one proc on a node, and that meets its #slots, so we place the next proc on the next node. So you wind up balancing across the two nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, now I understand the behavior - Thx.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you specify slots=64, then we'll try to place all 64 procs on the first node because we are using byslot mapping by default. You could make it work by just adding -bynode to your command line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is of course for now a feasible workaround to get the intended behavior by supplying just an additional hostfile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or use bynode mapping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean a line like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -cpus-per-proc 2 -bynode -report-bindings ./mpihello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me this results in the same error like without &quot;-bynode&quot; at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But regarding my recent eMail I also wonder about the difference between running on the command line and inside SGE. In the latter case the overall universe is correct.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you don't provide a slots value in the hostfile, we assume 1 - and so the universe size is 2, and you are heavily oversubscribed. Inside SGE, we see 128 slots assigned to you, and you are not oversubscribed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but the &quot;fake&quot; hostfile I provide on the command line to `mpiexec` has only the plain names inside. Somehow this changes the way the processes are distributed to &quot;-bynode&quot;, but not the overall slotcount - interesting.
</span><br>
<p>Ups: I meant &quot;overall universe size&quot;, as the slot count (i.e. processes) I supply by the -np option to reduce it.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given that there are no current plans for a 1.6.5, this may not get fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 27, 2013, at 3:15 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have an issue using the option -cpus-per-proc 2. As I have Bulldozer machines and I want only one process per FP core, I thought using -cpus-per-proc 2 would be the way to go. Initially I had this issue inside GridEngine but then tried it outside any queuingsystem and face exactly the same behavior.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @) Each machine has 4 CPUs with each having 16 integer cores, hence 64 integer cores per machine in total. Used Open MPI is 1.6.4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and a hostfile containing only the two lines listing the machines:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node006
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node007
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This works as I would like it (see working.txt) when initiated on node006.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But changing the hostefile so that it is having a slot count which might mimic the behavior in case of a parsed machinefile out of any queuing system:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node006 slots=64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node007 slots=64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This fails with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an MPI process to a unique processor on node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node: node006
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; M), or that the node has an unexpectedly different topology.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI processes that you are launching on this host, and that all nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have identical topologies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (see failed.txt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b1) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 32 ./mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This works and the found universe is 128 as expected (see only32.txt).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c) Maybe the used machinefile is not parsed in the correct way, so I checked:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c1) mpiexec -hostfile machines -np 64 ./mpihello =&gt; works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c2) mpiexec -hostfile machines -np 128 ./mpihello =&gt; works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c3) mpiexec -hostfile machines -np 129 ./mpihello =&gt; fails as expected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, it got the slot counts in the correct way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What do I miss?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;failed.txt&gt;&lt;only32.txt&gt;&lt;working.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21491.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21491.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
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
