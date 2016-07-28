<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 15:21:01 2010" -->
<!-- isoreceived="20100921192101" -->
<!-- sent="Tue, 21 Sep 2010 15:20:56 -0400" -->
<!-- isosent="20100921192056" -->
<!-- name="Ethan Deneault" -->
<!-- email="edeneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C990598.4050303_at_ut.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C99005C.10605_at_oracle.com" -->
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
<strong>From:</strong> Ethan Deneault (<em>edeneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 15:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Ethan:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you run just &quot;hostname&quot; successfully?  In other words, a non-MPI 
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; If that does not work, then we know the problem is in the runtime.  If  
</span><br>
<span class="quotelev1">&gt; it does works, then
</span><br>
<span class="quotelev1">&gt; there is something with the way the MPI library is setting up its 
</span><br>
<span class="quotelev1">&gt; connections.
</span><br>
<p>Interesting. I did not try this.
<br>
<p>&nbsp;From the master:
<br>
$ mpirun -debug-daemons -host merope,asterope -np 2 hostname
<br>
asterope
<br>
merope
<br>
<p>$ mpirun -host merope,asterope,electra -np 3 hostname
<br>
asterope
<br>
merope
<br>
<p>(hangs)
<br>
<p>$ mpirun -host electra,asterope,merope -np 3 hostname
<br>
asterope
<br>
electra
<br>
<p>(hangs)
<br>
<p>I cannot get 3 nodes to work together. Each node does work if in a pair of two. I can get three 
<br>
-processes- to work, if I include the master:
<br>
<p>$ mpirun -host pleiades,electra,asterope -np 3 hostname
<br>
pleiades
<br>
electra
<br>
asterope
<br>
<p>But 4 processes does not:
<br>
<p>$ mpirun -host pleiades,electra,asterope,merope -np 4 hostname
<br>
pleiades
<br>
electra
<br>
asterope
<br>
<p>(hangs)
<br>
<p><span class="quotelev1">&gt; Is there more than one interface on the nodes?
</span><br>
<p>Each node only has eth0, and a static DHCP address.
<br>
<p>Is there something in the way that I have the nodes set up? They boot via PXE from an image on the 
<br>
master, so they should all have the same basic filesystem.
<br>
<p>Cheers,
<br>
Ethan
<br>
<p><p><p><p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09/21/10 14:41, Ethan Deneault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm assuming you already tested ssh connectivity and verified everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is working as it should. (You did test all that, right?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. I am able to log in remotely to all nodes from the master, and to 
</span><br>
<span class="quotelev2">&gt;&gt; each node from each node without a password. Each node mounts the same 
</span><br>
<span class="quotelev2">&gt;&gt; /home directory from the master, so they have the same copy of all the 
</span><br>
<span class="quotelev2">&gt;&gt; ssh and rsh keys.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This sounds like configuration problem on one of the nodes, or a problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with ssh. I suspect it's not a problem with the number of processes, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   whichever node is the 4th in your machinefile has a connectivity or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration issue:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would try the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. reorder the list of hosts in your machine file.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. Change your machinefile to include 4 completely different hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This does not seem to have any beneficial effect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test program run from the master (pleiades) with any combination 
</span><br>
<span class="quotelev2">&gt;&gt; of 3 other nodes hangs during communication. This includes not using 
</span><br>
<span class="quotelev2">&gt;&gt; --machinefile and using -host; i.e.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -host merope,electra,atlas -np 4 ./test.out (hangs)
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -host merope,electra,atlas -np 3 ./test.out (hangs)
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -host merope,electra -np 3 ./test.out
</span><br>
<span class="quotelev2">&gt;&gt;  node           1 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;  node           0 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;  node           2 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Run the mpirun command from a different host. I'd try running it from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several different hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun command does not seem to work when launched from one of the 
</span><br>
<span class="quotelev2">&gt;&gt; nodes. As an example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running on node asterope:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asterope$ mpirun -debug-daemons -host atlas,electra -np 4 ./test.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on atlas - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on electra - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[54956,0],1] checking in as pid 2716 on host atlas
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[54956,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[54956,0],2] checking in as pid 2741 on host electra
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[54956,0],2] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (hangs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think someone else recommended that you should be specifying the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of process with -np. I second that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the above fails, you might want to post your machine file your using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine file is a simple list of hostnames, as an example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; m43
</span><br>
<span class="quotelev2">&gt;&gt; taygeta
</span><br>
<span class="quotelev2">&gt;&gt; asterope
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Dr. Ethan Deneault
Assistant Professor of Physics
SC-234
University of Tampa
Tampa, FL 33615
Office: (813) 257-3555
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14263.php">Ashley Pittman: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
