<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 09:18:58 2007" -->
<!-- isoreceived="20070723131858" -->
<!-- sent="Mon, 23 Jul 2007 07:18:49 -0600" -->
<!-- isosent="20070723131849" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun --bynode/--byslot problem" -->
<!-- id="C2CA06D9.A1DA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="864805E437EF7C40986276CE00F29E4C9D9DEF_at_ava-es5.solers.local" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 09:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, byslot appears to be working just fine on our bproc clusters (it is the
<br>
default mode). As you probably know, bproc is a little strange in how we
<br>
launch - we have to launch the procs in &quot;waves&quot; that correspond to the
<br>
number of procs on a node.
<br>
<p>In other words, the first &quot;wave&quot; launches a proc on all nodes that have at
<br>
least one proc on them. The second &quot;wave&quot; then launches another proc on all
<br>
nodes that have at least two procs on them, but doesn't launch anything on
<br>
any node that only has one proc on it.
<br>
<p>My guess here is that the system for some reason is insisting that your head
<br>
node be involved in every wave. I confess that we have never tested (to my
<br>
knowledge) a mapping that involves &quot;skipping&quot; a node somewhere in the
<br>
allocation - we always just map from the beginning of the node list, with
<br>
the maximum number of procs being placed on the first nodes in the list
<br>
(since in our machines, the nodes are all the same, so who cares?). So it is
<br>
possible that something in the code objects to skipping around nodes in the
<br>
allocation.
<br>
<p>I will have to look and see where that dependency might lie - will try to
<br>
get to it this week.
<br>
<p>BTW: that patch I sent you for head node operations will be in 1.2.4.
<br>
<p>Ralph
<br>
<p><p><p>On 7/23/07 7:04 AM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      We are experiencing a problem with the process allocation on our Open MPI
</span><br>
<span class="quotelev1">&gt; cluster. We are using Scyld 4.1 (BPROC), the OFED 1.2 Topspin Infiniband
</span><br>
<span class="quotelev1">&gt; drivers, Open MPI 1.2.3 + patch (to run processes on the head node). The
</span><br>
<span class="quotelev1">&gt; hardware consists of a head node and N blades on private ethernet and
</span><br>
<span class="quotelev1">&gt; infiniband networks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The command run for these tests is a simple MPI program (called 'hn') which
</span><br>
<span class="quotelev1">&gt; prints out the rank and the hostname. The hostname for the head node is 'head'
</span><br>
<span class="quotelev1">&gt; and the compute nodes are '.0' ... '.9'.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are using the following hostfiles for this example:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; hostfile7
</span><br>
<span class="quotelev1">&gt; -1 max_slots=1
</span><br>
<span class="quotelev1">&gt; 0 max_slots=3
</span><br>
<span class="quotelev1">&gt; 1 max_slots=3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; hostfile8
</span><br>
<span class="quotelev1">&gt; -1 max_slots=2
</span><br>
<span class="quotelev1">&gt; 0 max_slots=3
</span><br>
<span class="quotelev1">&gt; 1 max_slots=3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; hostfile9
</span><br>
<span class="quotelev1">&gt; -1 max_slots=3
</span><br>
<span class="quotelev1">&gt; 0 max_slots=3
</span><br>
<span class="quotelev1">&gt; 1 max_slots=3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; running the following commands:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; orterun --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev1">&gt; orterun --hostfile hostfile8 -np 8 ./hn
</span><br>
<span class="quotelev1">&gt; orterun --byslot --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev1">&gt; orterun --byslot --hostfile hostfile8 -np 8 ./hn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; causes orterun to crash. However,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; orterun --hostfile hostfile9 -np 9 ./hn
</span><br>
<span class="quotelev1">&gt; ortetrun --byslot --hostfile hostfile9 -np 9 ./hn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; works outputing the following:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 0 head
</span><br>
<span class="quotelev1">&gt; 1 head
</span><br>
<span class="quotelev1">&gt; 2 head
</span><br>
<span class="quotelev1">&gt; 3 .0
</span><br>
<span class="quotelev1">&gt; 4 .0
</span><br>
<span class="quotelev1">&gt; 5 .0
</span><br>
<span class="quotelev1">&gt; 6 .0
</span><br>
<span class="quotelev1">&gt; 7 .0
</span><br>
<span class="quotelev1">&gt; 8 .0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, running the following:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; orterun --bynode --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; works, outputing the following
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 0 head
</span><br>
<span class="quotelev1">&gt; 1 .0
</span><br>
<span class="quotelev1">&gt; 2 .1
</span><br>
<span class="quotelev1">&gt; 3 .0
</span><br>
<span class="quotelev1">&gt; 4 .1
</span><br>
<span class="quotelev1">&gt; 5 .0
</span><br>
<span class="quotelev1">&gt; 6 .1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is the '--byslot' crash a known problem? Does it have something to do with
</span><br>
<span class="quotelev1">&gt; BPROC? Thanks in advance for any assistance!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sean
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
<li><strong>Next message:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
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
