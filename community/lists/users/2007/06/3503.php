<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 13:42:57 2007" -->
<!-- isoreceived="20070619174257" -->
<!-- sent="Tue, 19 Jun 2007 13:40:21 -0400" -->
<!-- isosent="20070619174021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="091919A4-98AA-4CFC-8B33-FC22922674B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070619131823.GB14843_at_defiant" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 13:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3502.php">Alf Wachsmann: "[OMPI users] Problem with user shell and mpirun-prefix"</a>
<li><strong>In reply to:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2007, at 9:18 AM, Chris Reeves wrote:
<br>
<p><span class="quotelev1">&gt; I've had a look through the FAQ and searched the list archives and  
</span><br>
<span class="quotelev1">&gt; can't find
</span><br>
<span class="quotelev1">&gt; any similar problems to this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OpenMPI 1.2.2 on 10 Intel iMacs (Intel Core2 Duo CPU).  
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev1">&gt; specifiying two slots per machine and starting my job with:
</span><br>
<span class="quotelev1">&gt; /Network/Guanine/csr201/local-i386/opt/openmpi/bin/mpirun -np 20 -- 
</span><br>
<span class="quotelev1">&gt; hostfile
</span><br>
<span class="quotelev1">&gt; bhost.jobControl nice -19 /Network/Guanine/csr201/jobControl/ 
</span><br>
<span class="quotelev1">&gt; run_torus.pl
</span><br>
<span class="quotelev1">&gt; /Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log and output of 'ompi_info --all' are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also attached is a small patch that I wrote to work around some  
</span><br>
<span class="quotelev1">&gt; firewall
</span><br>
<span class="quotelev1">&gt; limitations on the nodes (I don't know if there's a better way to  
</span><br>
<span class="quotelev1">&gt; do this -
</span><br>
<span class="quotelev1">&gt; suggestions are welcome). The patch may or may not be relevant, but  
</span><br>
<span class="quotelev1">&gt; I'm not
</span><br>
<span class="quotelev1">&gt; ruling out network issues and a bit of peer review never goes amiss  
</span><br>
<span class="quotelev1">&gt; in case
</span><br>
<span class="quotelev1">&gt; I've done something very silly.
</span><br>
<p>&nbsp;From the looks of the patch, it looks like you just want Open MPI to  
<br>
restrict itself to a specific range of ports, right?  If that's the  
<br>
case, we'd probably do this slightly differently (with MCA parameters  
<br>
-- we certainly wouldn't want to force everyone to use a hard-coded  
<br>
port range).  Brian's also re-working some TCP and OOB issues on a / 
<br>
tmp branch right now; we'd want to wait until he's done before  
<br>
applying a similar patch.
<br>
<p><span class="quotelev1">&gt; The programme that I'm trying to run is fairly hefty, so I'm afraid  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; can't provide you with a simple test case to highlight the problem.  
</span><br>
<span class="quotelev1">&gt; The best I
</span><br>
<span class="quotelev1">&gt; can do it provide you with a description of where I'm at and then  
</span><br>
<span class="quotelev1">&gt; ask for some
</span><br>
<span class="quotelev1">&gt; advice/suggestions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code itself has run in the past with various versions of MPI/ 
</span><br>
<span class="quotelev1">&gt; LAM and
</span><br>
<span class="quotelev1">&gt; OpenMPI and hasn't, to my knowledge, undergone any significant changes
</span><br>
<span class="quotelev1">&gt; recently. I have noticed delays before, both on this system and on  
</span><br>
<span class="quotelev1">&gt; others,
</span><br>
<span class="quotelev1">&gt; when MPI_BARRIER is called but they don't always result in a permanent
</span><br>
<span class="quotelev1">&gt; 'spinning' of the process.
</span><br>
<p>My first question is: why are you calling MPI_BARRIER?  ;-)
<br>
<p>Clearly, if we're getting stuck in there, it could be a bug.  Have  
<br>
you run your code through a memory-checking debugger?  It's hard to  
<br>
say exactly what the problem is without more information -- it could  
<br>
be your app, it could be OMPI, it could be the network, ...
<br>
<p>It's a good datapoint to run with other MPI implementations, but &quot;it  
<br>
worked with MPI X&quot; isn't always an iron-clad indication that the new  
<br>
MPI is at fault.  I'm not saying we don't have bugs in Open MPI :-)  
<br>
-- I'm just saying that I agree with you: more data is necessary.
<br>
<p><span class="quotelev1">&gt; The 20-node job that I'm running right now is using 90-100% of  
</span><br>
<span class="quotelev1">&gt; every CPU, but
</span><br>
<span class="quotelev1">&gt; hasn't made any progress for around 14 hours. I've used GDB to  
</span><br>
<span class="quotelev1">&gt; attach to each
</span><br>
<span class="quotelev1">&gt; of these processes and verified that every single one of them is  
</span><br>
<span class="quotelev1">&gt; sitting
</span><br>
<span class="quotelev1">&gt; inside a call to MPI_BARRIER. My understanding is that once every  
</span><br>
<span class="quotelev1">&gt; process hits
</span><br>
<span class="quotelev1">&gt; the barrier, they should then move on to the next part of the code.
</span><br>
<p>That's correct.  FWIW, you shouldn't need to wait 14 hours to tell  
<br>
this; you can assume that if *all* processes are stopped in the same  
<br>
MPI_BARRIER for any length of time (to include just a few seconds),  
<br>
the job is hung.
<br>
<p><span class="quotelev1">&gt; Here's an example of what I see when I attach to one of these  
</span><br>
<span class="quotelev1">&gt; processes:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attaching to program: `/private/var/automount/Network/Guanine/ 
</span><br>
<span class="quotelev1">&gt; csr201/models-gap/torus/torus.ompiosx-intel', process 29578.
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries ..++++ 
</span><br>
<span class="quotelev1">&gt; +....................................................................  
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; 0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev1">&gt; #1  0x01c46f96 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev1">&gt; #2  0x01c458c2 in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; #3  0x01c45d32 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt; #4  0x01c3e6f2 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #5  0x01b6083e in ompi_request_wait_all ()
</span><br>
<span class="quotelev1">&gt; #6  0x01ec68d8 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev1">&gt; #7  0x01ecbf64 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev1">&gt; #8  0x01b75590 in MPI_Barrier ()
</span><br>
<p>Just a quick sanity check: I assume the call stack is the same on all  
<br>
processes, right?  I.e., ompi_coll_tuned_barrier_intra_bruck () is  
<br>
the call right after MPI_BARRIER?
<br>
<p><span class="quotelev1">&gt; Does anyone have any suggestions as to what might be happening  
</span><br>
<span class="quotelev1">&gt; here? Is there
</span><br>
<span class="quotelev1">&gt; any way to 'tickle' the processes and get them to move on?
</span><br>
<p>It is unlikely.  If everyone is waiting in the barrier, then  
<br>
something went wrong.  They're going to stay there until OMPI thinks  
<br>
that everyone has hit the barrier.
<br>
<p><span class="quotelev1">&gt; What if some
</span><br>
<span class="quotelev1">&gt; packets went missing on the network? Surely TCP should take care of  
</span><br>
<span class="quotelev1">&gt; this an
</span><br>
<span class="quotelev1">&gt; resend?
</span><br>
<p>One would assume so, yes.  But the timeout may be very, very long.
<br>
<p>What is the topology of the network that you're running on?
<br>
<p><span class="quotelev1">&gt; As implied by my line of questioning, my current thoughts are that
</span><br>
<span class="quotelev1">&gt; some messages between nodes have somehow gone missing. Could this  
</span><br>
<span class="quotelev1">&gt; happen? What
</span><br>
<span class="quotelev1">&gt; could cause this? All machines are on the same subnet.
</span><br>
<p>Hmm.  On a single subnet, but you need the firewall capability -- are  
<br>
they physically remote from each other, or do you just have the local  
<br>
firewalling capabilities enabled on each node?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3502.php">Alf Wachsmann: "[OMPI users] Problem with user shell and mpirun-prefix"</a>
<li><strong>In reply to:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
