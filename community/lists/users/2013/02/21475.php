<?
$subject_val = "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 02:59:12 2013" -->
<!-- isoreceived="20130228075912" -->
<!-- sent="Thu, 28 Feb 2013 08:58:58 +0100" -->
<!-- isosent="20130228075858" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?" -->
<!-- id="023C5A90-A9AC-424A-AC98-60E172039892_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2F6243F-4823-4E2A-91BF-732014C07A82_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-02-28 02:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 28.02.2013 um 06:55 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; I don't off-hand see a problem, though I do note that your &quot;working&quot; version incorrectly reports the universe size as 2!
</span><br>
<p>Yes, it was 2 in the case when it was working by giving only two hostnames without any dedicated slot count. What should it be in this case - &quot;unknown&quot;, &quot;infinity&quot;?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll have to take a look at this and get back to you on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2013, at 3:15 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have an issue using the option -cpus-per-proc 2. As I have Bulldozer machines and I want only one process per FP core, I thought using -cpus-per-proc 2 would be the way to go. Initially I had this issue inside GridEngine but then tried it outside any queuingsystem and face exactly the same behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @) Each machine has 4 CPUs with each having 16 integer cores, hence 64 integer cores per machine in total. Used Open MPI is 1.6.4.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and a hostfile containing only the two lines listing the machines:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node006
</span><br>
<span class="quotelev2">&gt;&gt; node007
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This works as I would like it (see working.txt) when initiated on node006.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 64 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But changing the hostefile so that it is having a slot count which might mimic the behavior in case of a parsed machinefile out of any queuing system:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node006 slots=64
</span><br>
<span class="quotelev2">&gt;&gt; node007 slots=64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This fails with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev2">&gt;&gt; an MPI process to a unique processor on node:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Node: node006
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev2">&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev2">&gt;&gt; M), or that the node has an unexpectedly different topology.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev2">&gt;&gt; MPI processes that you are launching on this host, and that all nodes
</span><br>
<span class="quotelev2">&gt;&gt; have identical topologies.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (see failed.txt)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b1) mpiexec -cpus-per-proc 2 -report-bindings -hostfile machines -np 32 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This works and the found universe is 128 as expected (see only32.txt).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c) Maybe the used machinefile is not parsed in the correct way, so I checked:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c1) mpiexec -hostfile machines -np 64 ./mpihello =&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c2) mpiexec -hostfile machines -np 128 ./mpihello =&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c3) mpiexec -hostfile machines -np 129 ./mpihello =&gt; fails as expected
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, it got the slot counts in the correct way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What do I miss?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;failed.txt&gt;&lt;only32.txt&gt;&lt;working.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21474.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Reply:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
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
