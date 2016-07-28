<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 14:42:01 2010" -->
<!-- isoreceived="20100921184201" -->
<!-- sent="Tue, 21 Sep 2010 14:41:53 -0400" -->
<!-- isosent="20100921184153" -->
<!-- name="Ethan Deneault" -->
<!-- email="edeneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C98FC71.7060003_at_ut.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C98B8F6.5040008_at_ias.edu" -->
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
<strong>Date:</strong> 2010-09-21 14:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm assuming you already tested ssh connectivity and verified everything
</span><br>
<span class="quotelev1">&gt; is working as it should. (You did test all that, right?)
</span><br>
<p>Yes. I am able to log in remotely to all nodes from the master, and to each node from each node 
<br>
without a password. Each node mounts the same /home directory from the master, so they have the same 
<br>
copy of all the ssh and rsh keys.
<br>
<p><span class="quotelev1">&gt; This sounds like configuration problem on one of the nodes, or a problem
</span><br>
<span class="quotelev1">&gt; with ssh. I suspect it's not a problem with the number of processes, but
</span><br>
<span class="quotelev1">&gt;   whichever node is the 4th in your machinefile has a connectivity or
</span><br>
<span class="quotelev1">&gt; configuration issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would try the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. reorder the list of hosts in your machine file.
</span><br>
<span class="quotelev1"> &gt; 3. Change your machinefile to include 4 completely different hosts.
</span><br>
<p>This does not seem to have any beneficial effect.
<br>
<p>The test program run from the master (pleiades) with any combination of 3 other nodes hangs during 
<br>
communication. This includes not using --machinefile and using -host; i.e.
<br>
<p>$ mpirun -host merope,electra,atlas -np 4 ./test.out (hangs)
<br>
$ mpirun -host merope,electra,atlas -np 3 ./test.out (hangs)
<br>
$ mpirun -host merope,electra -np 3 ./test.out
<br>
&nbsp;&nbsp;node           1 : Hello world
<br>
&nbsp;&nbsp;node           0 : Hello world
<br>
&nbsp;&nbsp;node           2 : Hello world
<br>
<p><span class="quotelev1">&gt; 2. Run the mpirun command from a different host. I'd try running it from
</span><br>
<span class="quotelev1">&gt; several different hosts.
</span><br>
<p>The mpirun command does not seem to work when launched from one of the nodes. As an example:
<br>
<p>Running on node asterope:
<br>
<p>asterope$ mpirun -debug-daemons -host atlas,electra -np 4 ./test.out
<br>
<p>Daemon was launched on atlas - beginning to initialize
<br>
Daemon was launched on electra - beginning to initialize
<br>
Daemon [[54956,0],1] checking in as pid 2716 on host atlas
<br>
Daemon [[54956,0],1] not using static ports
<br>
Daemon [[54956,0],2] checking in as pid 2741 on host electra
<br>
Daemon [[54956,0],2] not using static ports
<br>
<p>(hangs)
<br>
<p><span class="quotelev1">&gt; I think someone else recommended that you should be specifying the
</span><br>
<span class="quotelev1">&gt; number of process with -np. I second that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the above fails, you might want to post your machine file your using.
</span><br>
<p>The machine file is a simple list of hostnames, as an example:
<br>
<p>m43
<br>
taygeta
<br>
asterope
<br>
<p><p><p>Cheers,
<br>
Ethan
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14261.php">Rolf vandeVaart: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
