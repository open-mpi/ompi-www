<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 11:07:19 2007" -->
<!-- isoreceived="20070723150719" -->
<!-- sent="Mon, 23 Jul 2007 09:07:12 -0600" -->
<!-- isosent="20070723150712" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun --bynode/--byslot problem" -->
<!-- id="C2CA2040.A1EF%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="864805E437EF7C40986276CE00F29E4C9D9DF0_at_ava-es5.solers.local" -->
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
<strong>Date:</strong> 2007-07-23 11:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes...it would indeed.
<br>
<p><p>On 7/23/07 9:03 AM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would this logic be in the bproc pls component?
</span><br>
<span class="quotelev1">&gt; Sean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Mon 7/23/2007 9:18 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orterun --bynode/--byslot problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, byslot appears to be working just fine on our bproc clusters (it is the
</span><br>
<span class="quotelev1">&gt; default mode). As you probably know, bproc is a little strange in how we
</span><br>
<span class="quotelev1">&gt; launch - we have to launch the procs in &quot;waves&quot; that correspond to the
</span><br>
<span class="quotelev1">&gt; number of procs on a node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, the first &quot;wave&quot; launches a proc on all nodes that have at
</span><br>
<span class="quotelev1">&gt; least one proc on them. The second &quot;wave&quot; then launches another proc on all
</span><br>
<span class="quotelev1">&gt; nodes that have at least two procs on them, but doesn't launch anything on
</span><br>
<span class="quotelev1">&gt; any node that only has one proc on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess here is that the system for some reason is insisting that your head
</span><br>
<span class="quotelev1">&gt; node be involved in every wave. I confess that we have never tested (to my
</span><br>
<span class="quotelev1">&gt; knowledge) a mapping that involves &quot;skipping&quot; a node somewhere in the
</span><br>
<span class="quotelev1">&gt; allocation - we always just map from the beginning of the node list, with
</span><br>
<span class="quotelev1">&gt; the maximum number of procs being placed on the first nodes in the list
</span><br>
<span class="quotelev1">&gt; (since in our machines, the nodes are all the same, so who cares?). So it is
</span><br>
<span class="quotelev1">&gt; possible that something in the code objects to skipping around nodes in the
</span><br>
<span class="quotelev1">&gt; allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will have to look and see where that dependency might lie - will try to
</span><br>
<span class="quotelev1">&gt; get to it this week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW: that patch I sent you for head node operations will be in 1.2.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/23/07 7:04 AM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      We are experiencing a problem with the process allocation on our Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cluster. We are using Scyld 4.1 (BPROC), the OFED 1.2 Topspin Infiniband
</span><br>
<span class="quotelev3">&gt;&gt; &gt; drivers, Open MPI 1.2.3 + patch (to run processes on the head node). The
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hardware consists of a head node and N blades on private ethernet and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; infiniband networks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The command run for these tests is a simple MPI program (called 'hn') which
</span><br>
<span class="quotelev3">&gt;&gt; &gt; prints out the rank and the hostname. The hostname for the head node is
</span><br>
<span class="quotelev2">&gt;&gt; 'head'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and the compute nodes are '.0' ... '.9'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We are using the following hostfiles for this example:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hostfile7
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -1 max_slots=1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hostfile8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -1 max_slots=2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hostfile9
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -1 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 max_slots=3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; running the following commands:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --hostfile hostfile8 -np 8 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --byslot --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --byslot --hostfile hostfile8 -np 8 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; causes orterun to crash. However,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --hostfile hostfile9 -np 9 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ortetrun --byslot --hostfile hostfile9 -np 9 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; works outputing the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 head
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 head
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2 head
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 5 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 6 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 7 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 8 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, running the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orterun --bynode --hostfile hostfile7 -np 7 ./hn
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; works, outputing the following
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 head
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2 .1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4 .1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 5 .0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 6 .1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is the '--byslot' crash a known problem? Does it have something to do with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BPROC? Thanks in advance for any assistance!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sean
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3739.php">Kelley, Sean: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
