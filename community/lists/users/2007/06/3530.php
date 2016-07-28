<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 13:09:14 2007" -->
<!-- isoreceived="20070621170914" -->
<!-- sent="Thu, 21 Jun 2007 18:09:06 +0100" -->
<!-- isosent="20070621170906" -->
<!-- name="Chris Reeves" -->
<!-- email="chris.reeves_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="20070621170906.GH14843_at_defiant" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="091919A4-98AA-4CFC-8B33-FC22922674B4_at_cisco.com" -->
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
<strong>From:</strong> Chris Reeves (<em>chris.reeves_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 13:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all your replies and sorry for the delay in getting back to you.
<br>
<p>On Tue, Jun 19, 2007 at 01:40:21PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 19, 2007, at 9:18 AM, Chris Reeves wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also attached is a small patch that I wrote to work around some  firewall
</span><br>
<span class="quotelev2">&gt; &gt; limitations on the nodes (I don't know if there's a better way to  do this
</span><br>
<span class="quotelev2">&gt; &gt; - suggestions are welcome). The patch may or may not be relevant, but  I'm
</span><br>
<span class="quotelev2">&gt; &gt; not ruling out network issues and a bit of peer review never goes amiss
</span><br>
<span class="quotelev2">&gt; &gt; in case I've done something very silly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the looks of the patch, it looks like you just want Open MPI to  
</span><br>
<span class="quotelev1">&gt; restrict itself to a specific range of ports, right?  If that's the  
</span><br>
<span class="quotelev1">&gt; case, we'd probably do this slightly differently (with MCA parameters  
</span><br>
<span class="quotelev1">&gt; -- we certainly wouldn't want to force everyone to use a hard-coded  
</span><br>
<span class="quotelev1">&gt; port range).  Brian's also re-working some TCP and OOB issues on a / 
</span><br>
<span class="quotelev1">&gt; tmp branch right now; we'd want to wait until he's done before  
</span><br>
<span class="quotelev1">&gt; applying a similar patch.
</span><br>
<p>I thought that would be the 'official', configurable way to do it. But I lack
<br>
a thorough enough understanding of how everything fits together to implement
<br>
it in that way.
<br>
<p><span class="quotelev1">&gt; My first question is: why are you calling MPI_BARRIER?  ;-)
</span><br>
<p>Good question. Thinking about it, not all occurences are probably necessary. I
<br>
didn't write this code, but I will discuss this with my colleague.
<br>
<p><span class="quotelev1">&gt; Clearly, if we're getting stuck in there, it could be a bug.  Have  
</span><br>
<span class="quotelev1">&gt; you run your code through a memory-checking debugger?  It's hard to  
</span><br>
<span class="quotelev1">&gt; say exactly what the problem is without more information -- it could  
</span><br>
<span class="quotelev1">&gt; be your app, it could be OMPI, it could be the network, ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a good datapoint to run with other MPI implementations, but &quot;it  
</span><br>
<span class="quotelev1">&gt; worked with MPI X&quot; isn't always an iron-clad indication that the new  
</span><br>
<span class="quotelev1">&gt; MPI is at fault.  I'm not saying we don't have bugs in Open MPI :-)  
</span><br>
<span class="quotelev1">&gt; -- I'm just saying that I agree with you: more data is necessary.
</span><br>
<p>The code is compiled with debugging turned on (with gcc's -g flag). I believe
<br>
that this does a certain degree of memory checking, but I'd have to look it up
<br>
to make sure...
<br>
<p>Indeed. I'm not necessarily blaming OpenMPI :-p The above was merely, as you
<br>
say, an additional datapoint.
<br>
<p><span class="quotelev2">&gt; &gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x01c46f96 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x01c458c2 in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x01c45d32 in opal_event_loop ()
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x01c3e6f2 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x01b6083e in ompi_request_wait_all ()
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x01ec68d8 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x01ecbf64 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x01b75590 in MPI_Barrier ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a quick sanity check: I assume the call stack is the same on all  
</span><br>
<span class="quotelev1">&gt; processes, right?  I.e., ompi_coll_tuned_barrier_intra_bruck () is  
</span><br>
<span class="quotelev1">&gt; the call right after MPI_BARRIER?
</span><br>
<p>It is similar. Obviously different processes are at different points in the
<br>
loop when I attach, but the traces are similar enough. All of them have
<br>
ompi_coll_tuned_barrier_intra_bruck in the stack after MPI_Barrier.
<br>
<p><span class="quotelev2">&gt; &gt; What if some packets went missing on the network? Surely TCP should take
</span><br>
<span class="quotelev2">&gt; &gt; care of this and resend?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the topology of the network that you're running on?
</span><br>
<p>9 machines are physically co-located and each have a single connection to one
<br>
of two linked switches. The 10th machine is in a different part of the
<br>
building, but on the same subnet (off a different switch). All machines can
<br>
talk to each other under normal conditions.
<br>
<p><span class="quotelev2">&gt; &gt; As implied by my line of questioning, my current thoughts are that some
</span><br>
<span class="quotelev2">&gt; &gt; messages between nodes have somehow gone missing. Could this  happen? What
</span><br>
<span class="quotelev2">&gt; &gt; could cause this? All machines are on the same subnet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  On a single subnet, but you need the firewall capability -- are  
</span><br>
<span class="quotelev1">&gt; they physically remote from each other, or do you just have the local  
</span><br>
<span class="quotelev1">&gt; firewalling capabilities enabled on each node?
</span><br>
<p>Each node has a local firewall set up by the systems administrator, who was
<br>
persuaded to poke a 'small' (1000-port) hole in said firewall for
<br>
communication between the nodes. There are no further firewalls between the
<br>
nodes. The firewalls are there to stay.
<br>
<p>Cheers for all your help so far,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
