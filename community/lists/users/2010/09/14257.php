<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 09:54:03 2010" -->
<!-- isoreceived="20100921135403" -->
<!-- sent="Tue, 21 Sep 2010 09:53:58 -0400" -->
<!-- isosent="20100921135358" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C98B8F6.5040008_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C97CB8B.6090506_at_ut.edu" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 09:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14246.php">Ethan Deneault: "[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Deneault wrote:
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running Scientific Linux 5.5, with OpenMPI 1.4 installed into the
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/1.4-gcc/ directory. I know this is typically
</span><br>
<span class="quotelev1">&gt; /opt/openmpi, but Red Hat does things differently. I have my PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH set correctly; because the test program does compile and
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cluster consists of 10 Intel Pentium 4 diskless nodes. The master is
</span><br>
<span class="quotelev1">&gt; a AMD x86_64 machine which serves the diskless node images and /home as
</span><br>
<span class="quotelev1">&gt; an NFS mount. I compile all of my programs as 32-bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My code is a simple hello world:
</span><br>
<span class="quotelev1">&gt; $ more test.f
</span><br>
<span class="quotelev1">&gt;       program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_INIT(ierror)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev1">&gt;       print*, 'node', rank, ': Hello world'
</span><br>
<span class="quotelev1">&gt;       call MPI_FINALIZE(ierror)
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run this program with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --machinefile testfile ./test.out
</span><br>
<span class="quotelev1">&gt;  node           0 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           2 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           1 : Hello world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the expected output. Here, testfile contains the master node:
</span><br>
<span class="quotelev1">&gt; 'pleiades', and two slave nodes: 'taygeta' and 'm43'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I add another machine to testfile, say 'asterope', it hangs until I
</span><br>
<span class="quotelev1">&gt; ctrl-c it. I have tried every machine, and as long as I do not include
</span><br>
<span class="quotelev1">&gt; more than 3 hosts, the program will not hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have run the debug-daemons flag with it as well, and I don't see what
</span><br>
<span class="quotelev1">&gt; is wrong specifically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'm assuming you already tested ssh connectivity and verified everything
<br>
is working as it should. (You did test all that, right?)
<br>
<p>This sounds like configuration problem on one of the nodes, or a problem
<br>
with ssh. I suspect it's not a problem with the number of processes, but
<br>
&nbsp;&nbsp;whichever node is the 4th in your machinefile has a connectivity or
<br>
configuration issue:
<br>
<p>I would try the following:
<br>
<p>1. reorder the list of hosts in your machine file.
<br>
<p>2. Run the mpirun command from a different host. I'd try running it from
<br>
several different hosts.
<br>
<p>3. Change your machinefile to include 4 completely different hosts.
<br>
<p>I think someone else recommended that you should be specifying the
<br>
number of process with -np. I second that.
<br>
<p>If the above fails, you might want to post your machine file your using.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<li><strong>In reply to:</strong> <a href="14246.php">Ethan Deneault: "[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14258.php">Gus Correa: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
