<?
$subject_val = "Re: [OMPI users] round-robin scheduling question [hostfile]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 09:52:56 2009" -->
<!-- isoreceived="20090221145256" -->
<!-- sent="Sat, 21 Feb 2009 07:52:45 -0700" -->
<!-- isosent="20090221145245" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] round-robin scheduling question [hostfile]" -->
<!-- id="2F09B7ED-259D-4268-B5C0-27C8E491D7E4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499FB5B3.5040909_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] round-robin scheduling question [hostfile]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-21 09:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8153.php">Michael Alexander: "[OMPI users] CfP 4th Workshop on Virtualization in High-Performance Cloud Computing (VHPC'09)"</a>
<li><strong>Previous message:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2009, at 1:05 AM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your explanation!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is a little bit of both:
</span><br>
<span class="quotelev2">&gt;&gt; * historical, because most MPI's default to mapping by slot, and
</span><br>
<span class="quotelev2">&gt;&gt; * performance, because procs that share a node can communicate via  
</span><br>
<span class="quotelev2">&gt;&gt; shared memory, which is faster than sending messages over an  
</span><br>
<span class="quotelev2">&gt;&gt; interconnect, and most apps are communication-bound
</span><br>
<span class="quotelev2">&gt;&gt; If your app is disk-intensive, then mapping it -bynode may be a  
</span><br>
<span class="quotelev2">&gt;&gt; better
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok -- by this, it seems that there is no &quot;rule&quot; that says one is  
</span><br>
<span class="quotelev1">&gt; obviously better than the other.  It depends on factors such as disk  
</span><br>
<span class="quotelev1">&gt; access and shared memory access and which one is dominating.  So, it  
</span><br>
<span class="quotelev1">&gt; is worth to try both to see?
</span><br>
<p>Can't hurt! You might be able to tell by knowing what your app is  
<br>
doing, but otherwise, feel free to experiment.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; option for you. That's why we provide it. Note, however, that you  
</span><br>
<span class="quotelev2">&gt;&gt; can still wind up with multiple procs on a node. All &quot;bynode&quot; means  
</span><br>
<span class="quotelev2">&gt;&gt; is that the ranks are numbered consecutively bynode - it doesn't  
</span><br>
<span class="quotelev2">&gt;&gt; mean that there is only one proc/node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see.  But if the number of processes (as specified using -np) is  
</span><br>
<span class="quotelev1">&gt; less than the number of nodes, if &quot;by node&quot; is chosen, then is it  
</span><br>
<span class="quotelev1">&gt; guaranteed that only one process will be on each node?
</span><br>
<p>That is correct
<br>
<p><span class="quotelev1">&gt; Is there a way to write the hostfile to ensure this?
</span><br>
<p>You don't need to do anything in the hostfile - if you use bynode and  
<br>
np &lt; #nodes, it is guaranteed that you will have only one proc/node
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was curious if a node has 4 slots, whether writing it 4 times in  
</span><br>
<span class="quotelev1">&gt; the hostfile with 1 slot each has any meaning.  Might be a bad idea  
</span><br>
<span class="quotelev1">&gt; as we are trying to fool mpirun?
</span><br>
<p>It won't have any meaning as we aggregate the results. In other words,  
<br>
we read through the hostfile, and if a host appears more than once, we  
<br>
simply add the #slots on subsequent entries to the earlier one. So we  
<br>
wind up with just one instance of that host that has the total number  
<br>
of slots allocated to it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you truly want one proc/node, then you should use the -pernode  
</span><br>
<span class="quotelev2">&gt;&gt; option. This maps one proc on each node up to either the number of  
</span><br>
<span class="quotelev2">&gt;&gt; procs you specified or the number of available nodes. If you don't  
</span><br>
<span class="quotelev2">&gt;&gt; specify -np, we just put one proc on each node in your allocation/ 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see ... I was not aware of that option; thank you!
</span><br>
<p>Do a &quot;man mpirun&quot; and you will see that there are several mapping  
<br>
options that might interest you, including:
<br>
<p>1. npernode - let's you specify how many procs/node (as opposed to  
<br>
&quot;pernode&quot;, where you only get one proc/node - obviously, pernode is  
<br>
the equivalent of &quot;-npernode 1&quot;)
<br>
<p>2. seq - a sequential mapper. This mapper will read a file (which can  
<br>
be different from the hostfile used to specify your allocation) and  
<br>
assign one proc to each entry in a sequential manner like this:
<br>
<p>node1 ----&gt; rank 0 goes on node1
<br>
node5 ----&gt; rank 1 goes on node5
<br>
node1 ----&gt; rank 2 goes on node1
<br>
...
<br>
<p>3. rank_file - allows you to specify that rank x goes on node foo, and  
<br>
what core/socket that rank should be bound to
<br>
<p>The man page will describe all the various options. Which one is best  
<br>
for your app really depends on what the app is doing, the capabilities  
<br>
and topology of your cluster, etc. A little experimentation can help  
<br>
you get a feel for when to use which one.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8153.php">Michael Alexander: "[OMPI users] CfP 4th Workshop on Virtualization in High-Performance Cloud Computing (VHPC'09)"</a>
<li><strong>Previous message:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
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
