<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 14:58:46 2010" -->
<!-- isoreceived="20100921185846" -->
<!-- sent="Tue, 21 Sep 2010 14:58:36 -0400" -->
<!-- isosent="20100921185836" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C99005C.10605_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C98FC71.7060003_at_ut.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 14:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan:
<br>
<p>Can you run just &quot;hostname&quot; successfully?  In other words, a non-MPI 
<br>
program.
<br>
If that does not work, then we know the problem is in the runtime.  If  
<br>
it does works, then
<br>
there is something with the way the MPI library is setting up its 
<br>
connections.
<br>
<p>Is there more than one interface on the nodes?
<br>
<p>Rolf
<br>
<p>On 09/21/10 14:41, Ethan Deneault wrote:
<br>
<span class="quotelev1">&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming you already tested ssh connectivity and verified everything
</span><br>
<span class="quotelev2">&gt;&gt; is working as it should. (You did test all that, right?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. I am able to log in remotely to all nodes from the master, and to 
</span><br>
<span class="quotelev1">&gt; each node from each node without a password. Each node mounts the same 
</span><br>
<span class="quotelev1">&gt; /home directory from the master, so they have the same copy of all the 
</span><br>
<span class="quotelev1">&gt; ssh and rsh keys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This sounds like configuration problem on one of the nodes, or a problem
</span><br>
<span class="quotelev2">&gt;&gt; with ssh. I suspect it's not a problem with the number of processes, but
</span><br>
<span class="quotelev2">&gt;&gt;   whichever node is the 4th in your machinefile has a connectivity or
</span><br>
<span class="quotelev2">&gt;&gt; configuration issue:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would try the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. reorder the list of hosts in your machine file.
</span><br>
<span class="quotelev2">&gt; &gt; 3. Change your machinefile to include 4 completely different hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does not seem to have any beneficial effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test program run from the master (pleiades) with any combination 
</span><br>
<span class="quotelev1">&gt; of 3 other nodes hangs during communication. This includes not using 
</span><br>
<span class="quotelev1">&gt; --machinefile and using -host; i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -host merope,electra,atlas -np 4 ./test.out (hangs)
</span><br>
<span class="quotelev1">&gt; $ mpirun -host merope,electra,atlas -np 3 ./test.out (hangs)
</span><br>
<span class="quotelev1">&gt; $ mpirun -host merope,electra -np 3 ./test.out
</span><br>
<span class="quotelev1">&gt;  node           1 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           0 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           2 : Hello world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Run the mpirun command from a different host. I'd try running it from
</span><br>
<span class="quotelev2">&gt;&gt; several different hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun command does not seem to work when launched from one of the 
</span><br>
<span class="quotelev1">&gt; nodes. As an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running on node asterope:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asterope$ mpirun -debug-daemons -host atlas,electra -np 4 ./test.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon was launched on atlas - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on electra - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[54956,0],1] checking in as pid 2716 on host atlas
</span><br>
<span class="quotelev1">&gt; Daemon [[54956,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; Daemon [[54956,0],2] checking in as pid 2741 on host electra
</span><br>
<span class="quotelev1">&gt; Daemon [[54956,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (hangs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think someone else recommended that you should be specifying the
</span><br>
<span class="quotelev2">&gt;&gt; number of process with -np. I second that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the above fails, you might want to post your machine file your using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine file is a simple list of hostnames, as an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m43
</span><br>
<span class="quotelev1">&gt; taygeta
</span><br>
<span class="quotelev1">&gt; asterope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14262.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
