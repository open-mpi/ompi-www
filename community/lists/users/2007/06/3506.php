<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 14:43:49 2007" -->
<!-- isoreceived="20070619184349" -->
<!-- sent="Tue, 19 Jun 2007 14:43:42 -0400 (EDT)" -->
<!-- isosent="20070619184342" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="Pine.LNX.4.62.0706191427430.23607_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 14:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You should definitely try everything people before me mentioned.
<br>
Also, try running single process per node - and see if it happens.
<br>
<p>I do not have some great insight about this issue - but I did have similar 
<br>
problem in March.  Unfortunately it went away (don't remember how - either 
<br>
by me quiting doing those tests or.. - so we never filed a bug).  It won't 
<br>
help you but maybe will help Brian for debugging purposes.
<br>
<p>Anyway, here is what I think was happening with our bug.
<br>
we would see occasionally a benchmark livelocking in Barrier 
<br>
with large(r) number of processes with two processes per node (80+) over
<br>
(pml ob1, btl mx,sm,self). 
<br>
However, the problem did not occur with (pml cm, mtl mx).
<br>
<p>We ended up concluding that, on a node the following would occur:
<br>
1) send request from barrier would be still marked as active
<br>
2) the pending queue was empty and remaining data size was 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implying that MCA_PML_BASE_REQUEST_MPI_COMPLETE was not called.
<br>
<p>After (quite a bit of debugging) we concluded that the sequence numbers of 
<br>
the packets in the requests on the receiver side were not correct. So the 
<br>
message was either sent with incorrect sequence number, or received with 
<br>
incorrect number  (which is lower than the &quot;correct&quot; sequence number, and 
<br>
thus ignored).  This conclusion may or may not be correct :-)
<br>
<p>I am pretty sure that the problem is not in collective itself.  I would 
<br>
run 1 process per node, until Brian is done with his stuff.
<br>
<p>Cheers,
<br>
Jelena
<br>
<p>On Tue, 19 Jun 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 19, 2007, at 9:18 AM, Chris Reeves wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've had a look through the FAQ and searched the list archives and
</span><br>
<span class="quotelev2">&gt;&gt; can't find
</span><br>
<span class="quotelev2">&gt;&gt; any similar problems to this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running OpenMPI 1.2.2 on 10 Intel iMacs (Intel Core2 Duo CPU).
</span><br>
<span class="quotelev2">&gt;&gt; I am
</span><br>
<span class="quotelev2">&gt;&gt; specifiying two slots per machine and starting my job with:
</span><br>
<span class="quotelev2">&gt;&gt; /Network/Guanine/csr201/local-i386/opt/openmpi/bin/mpirun -np 20 --
</span><br>
<span class="quotelev2">&gt;&gt; hostfile
</span><br>
<span class="quotelev2">&gt;&gt; bhost.jobControl nice -19 /Network/Guanine/csr201/jobControl/
</span><br>
<span class="quotelev2">&gt;&gt; run_torus.pl
</span><br>
<span class="quotelev2">&gt;&gt; /Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The config.log and output of 'ompi_info --all' are attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also attached is a small patch that I wrote to work around some
</span><br>
<span class="quotelev2">&gt;&gt; firewall
</span><br>
<span class="quotelev2">&gt;&gt; limitations on the nodes (I don't know if there's a better way to
</span><br>
<span class="quotelev2">&gt;&gt; do this -
</span><br>
<span class="quotelev2">&gt;&gt; suggestions are welcome). The patch may or may not be relevant, but
</span><br>
<span class="quotelev2">&gt;&gt; I'm not
</span><br>
<span class="quotelev2">&gt;&gt; ruling out network issues and a bit of peer review never goes amiss
</span><br>
<span class="quotelev2">&gt;&gt; in case
</span><br>
<span class="quotelev2">&gt;&gt; I've done something very silly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the looks of the patch, it looks like you just want Open MPI to
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The programme that I'm trying to run is fairly hefty, so I'm afraid
</span><br>
<span class="quotelev2">&gt;&gt; that I
</span><br>
<span class="quotelev2">&gt;&gt; can't provide you with a simple test case to highlight the problem.
</span><br>
<span class="quotelev2">&gt;&gt; The best I
</span><br>
<span class="quotelev2">&gt;&gt; can do it provide you with a description of where I'm at and then
</span><br>
<span class="quotelev2">&gt;&gt; ask for some
</span><br>
<span class="quotelev2">&gt;&gt; advice/suggestions...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code itself has run in the past with various versions of MPI/
</span><br>
<span class="quotelev2">&gt;&gt; LAM and
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI and hasn't, to my knowledge, undergone any significant changes
</span><br>
<span class="quotelev2">&gt;&gt; recently. I have noticed delays before, both on this system and on
</span><br>
<span class="quotelev2">&gt;&gt; others,
</span><br>
<span class="quotelev2">&gt;&gt; when MPI_BARRIER is called but they don't always result in a permanent
</span><br>
<span class="quotelev2">&gt;&gt; 'spinning' of the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first question is: why are you calling MPI_BARRIER?  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly, if we're getting stuck in there, it could be a bug.  Have
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 20-node job that I'm running right now is using 90-100% of
</span><br>
<span class="quotelev2">&gt;&gt; every CPU, but
</span><br>
<span class="quotelev2">&gt;&gt; hasn't made any progress for around 14 hours. I've used GDB to
</span><br>
<span class="quotelev2">&gt;&gt; attach to each
</span><br>
<span class="quotelev2">&gt;&gt; of these processes and verified that every single one of them is
</span><br>
<span class="quotelev2">&gt;&gt; sitting
</span><br>
<span class="quotelev2">&gt;&gt; inside a call to MPI_BARRIER. My understanding is that once every
</span><br>
<span class="quotelev2">&gt;&gt; process hits
</span><br>
<span class="quotelev2">&gt;&gt; the barrier, they should then move on to the next part of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's correct.  FWIW, you shouldn't need to wait 14 hours to tell
</span><br>
<span class="quotelev1">&gt; this; you can assume that if *all* processes are stopped in the same
</span><br>
<span class="quotelev1">&gt; MPI_BARRIER for any length of time (to include just a few seconds),
</span><br>
<span class="quotelev1">&gt; the job is hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's an example of what I see when I attach to one of these
</span><br>
<span class="quotelev2">&gt;&gt; processes:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attaching to program: `/private/var/automount/Network/Guanine/
</span><br>
<span class="quotelev2">&gt;&gt; csr201/models-gap/torus/torus.ompiosx-intel', process 29578.
</span><br>
<span class="quotelev2">&gt;&gt; Reading symbols for shared libraries ..++++
</span><br>
<span class="quotelev2">&gt;&gt; +....................................................................
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt; 0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x9000121c in sigprocmask ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x01c46f96 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x01c458c2 in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x01c45d32 in opal_event_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x01c3e6f2 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x01b6083e in ompi_request_wait_all ()
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x01ec68d8 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x01ecbf64 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x01b75590 in MPI_Barrier ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a quick sanity check: I assume the call stack is the same on all
</span><br>
<span class="quotelev1">&gt; processes, right?  I.e., ompi_coll_tuned_barrier_intra_bruck () is
</span><br>
<span class="quotelev1">&gt; the call right after MPI_BARRIER?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any suggestions as to what might be happening
</span><br>
<span class="quotelev2">&gt;&gt; here? Is there
</span><br>
<span class="quotelev2">&gt;&gt; any way to 'tickle' the processes and get them to move on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is unlikely.  If everyone is waiting in the barrier, then
</span><br>
<span class="quotelev1">&gt; something went wrong.  They're going to stay there until OMPI thinks
</span><br>
<span class="quotelev1">&gt; that everyone has hit the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if some
</span><br>
<span class="quotelev2">&gt;&gt; packets went missing on the network? Surely TCP should take care of
</span><br>
<span class="quotelev2">&gt;&gt; this an
</span><br>
<span class="quotelev2">&gt;&gt; resend?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One would assume so, yes.  But the timeout may be very, very long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the topology of the network that you're running on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As implied by my line of questioning, my current thoughts are that
</span><br>
<span class="quotelev2">&gt;&gt; some messages between nodes have somehow gone missing. Could this
</span><br>
<span class="quotelev2">&gt;&gt; happen? What
</span><br>
<span class="quotelev2">&gt;&gt; could cause this? All machines are on the same subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  On a single subnet, but you need the firewall capability -- are
</span><br>
<span class="quotelev1">&gt; they physically remote from each other, or do you just have the local
</span><br>
<span class="quotelev1">&gt; firewalling capabilities enabled on each node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
Murphy's Law of Research:
         Enough research will tend to support your theory.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
