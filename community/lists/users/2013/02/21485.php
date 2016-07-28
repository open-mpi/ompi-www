<?
$subject_val = "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:40:32 2013" -->
<!-- isoreceived="20130228164032" -->
<!-- sent="Thu, 28 Feb 2013 17:40:19 +0100" -->
<!-- isosent="20130228164019" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?" -->
<!-- id="2D1E2436-E425-4E72-AB15-05264AC69C1B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="647E873E-C02E-4A7E-8DB6-E2E5992ACBBF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-02-28 11:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Previous message:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="21482.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 28.02.2013 um 17:29 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2013, at 6:17 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 28.02.2013 um 08:58 schrieb Reuti:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 28.02.2013 um 06:55 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't off-hand see a problem, though I do note that your &quot;working&quot; version incorrectly reports the universe size as 2!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it was 2 in the case when it was working by giving only two hostnames without any dedicated slot count. What should it be in this case - &quot;unknown&quot;, &quot;infinity&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an add on:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) I tried it again on the command line and still get:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Total: 64
</span><br>
<span class="quotelev2">&gt;&gt; Universe: 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with a hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node006
</span><br>
<span class="quotelev2">&gt;&gt; node007
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My bad - since no slots were given, we default to a value of 1 for each node, so this is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) In a job script under SGE and Open MPI compiled --with-sge I get after mangling the hostfile:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin /sh
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe openmpi* 128
</span><br>
<span class="quotelev2">&gt;&gt; #$ -l exclusive
</span><br>
<span class="quotelev2">&gt;&gt; cut -f 1 -d&quot; &quot; $PE_HOSTFILE &gt; $TMPDIR/machines
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -cpus-per-proc 2 -report-bindings -hostfile $TMPDIR/machines -np 64 ./mpihello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Total: 64
</span><br>
<span class="quotelev2">&gt;&gt; Universe: 128
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be correct as SGE is allocating a total of 128 slots (or pe's)
</span><br>
<p>Yep, this is the case. But the hostfile I give in addition contains only the two hostnames (not slot count).
<br>
<p>And if I don't supply this mangled file in addition, it won't startup but give the error:
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M).  Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
<p>What I just note: in this error there is no hostname given when running inside SGE. But there is one given if started from the command line like:
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor on node:
<br>
<p>&nbsp;&nbsp;Node: node006
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M), or that the node has an unexpectedly different topology.
<br>
<p>Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host, and that all nodes
<br>
have identical topologies.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the found allocation by SGE and the one from the command line argument are getting mixed here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll have to take a look at this and get back to you on it.
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
<li><strong>Next message:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Previous message:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="21482.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
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
