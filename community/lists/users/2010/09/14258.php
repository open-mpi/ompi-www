<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 10:18:46 2010" -->
<!-- isoreceived="20100921141846" -->
<!-- sent="Tue, 21 Sep 2010 10:18:30 -0400" -->
<!-- isosent="20100921141830" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C98BEB6.5050203_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 10:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Ethan Deneault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running Scientific Linux 5.5, with OpenMPI 1.4 installed into the
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/1.4-gcc/ directory. I know this is typically
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi, but Red Hat does things differently. I have my PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH set correctly; because the test program does compile and
</span><br>
<span class="quotelev2">&gt;&gt; run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cluster consists of 10 Intel Pentium 4 diskless nodes. The master is
</span><br>
<span class="quotelev2">&gt;&gt; a AMD x86_64 machine which serves the diskless node images and /home as
</span><br>
<span class="quotelev2">&gt;&gt; an NFS mount. I compile all of my programs as 32-bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My code is a simple hello world:
</span><br>
<span class="quotelev2">&gt;&gt; $ more test.f
</span><br>
<span class="quotelev2">&gt;&gt;       program test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;       integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_INIT(ierror)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev2">&gt;&gt;       print*, 'node', rank, ': Hello world'
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_FINALIZE(ierror)
</span><br>
<span class="quotelev2">&gt;&gt;       end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run this program with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --machinefile testfile ./test.out
</span><br>
<span class="quotelev2">&gt;&gt;  node           0 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;  node           2 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;  node           1 : Hello world
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the expected output. Here, testfile contains the master node:
</span><br>
<span class="quotelev2">&gt;&gt; 'pleiades', and two slave nodes: 'taygeta' and 'm43'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I add another machine to testfile, say 'asterope', it hangs until I
</span><br>
<span class="quotelev2">&gt;&gt; ctrl-c it. I have tried every machine, and as long as I do not include
</span><br>
<span class="quotelev2">&gt;&gt; more than 3 hosts, the program will not hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have run the debug-daemons flag with it as well, and I don't see what
</span><br>
<span class="quotelev2">&gt;&gt; is wrong specifically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm assuming you already tested ssh connectivity and verified everything
</span><br>
<span class="quotelev1">&gt; is working as it should. (You did test all that, right?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sounds like configuration problem on one of the nodes, or a problem
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Run the mpirun command from a different host. I'd try running it from
</span><br>
<span class="quotelev1">&gt; several different hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Change your machinefile to include 4 completely different hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think someone else recommended that you should be specifying the
</span><br>
<span class="quotelev1">&gt; number of process with -np. I second that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the above fails, you might want to post your machine file your using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Ethan
<br>
<p>What your program prints is process number, not the host name.
<br>
To make sure all nodes are responding, you can try this:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
<p>For the hostfile/machinefile structure,
<br>
including the number of slots/cores/processors, see &quot;man mpiexec&quot;.
<br>
<p>The OpenMPI FAQ have answers for many of these initial setup questions.
<br>
Worth taking a look.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14260.php">Ethan Deneault: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
