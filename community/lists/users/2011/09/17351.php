<?
$subject_val = "Re: [OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 08:11:41 2011" -->
<!-- isoreceived="20110920121141" -->
<!-- sent="Tue, 20 Sep 2011 08:11:34 -0400" -->
<!-- isosent="20110920121134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on multiple nodes" -->
<!-- id="DDDBC7A5-A13B-459F-B4CC-984195A40204_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALcLSfonKTtkp9L8XMTFg_4LRFYP2o1qXVNXykiCMC5gq=oVQg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 08:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17350.php">Jeff Squyres: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 19, 2011, at 10:23 PM, Ole Nielsen wrote:
<br>
<p><span class="quotelev1">&gt; Hi all - and sorry for the multiple postings, but I have more information.
</span><br>
<p>+1 on Eugene's comments.  The test program looks fine to me.
<br>
<p>FWIW, you don't need -lmpi to compile your program; OMPI's wrapper compiler allows you to just:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpicc mpi_test.c -o mpi_test -Wall
<br>
<p><span class="quotelev1">&gt; 1: After a reboot of two nodes I ran again, and the inter-node freeze didn't happen until the third iteration. I take that to mean that the basic communication works, but that something is saturating. Is there some notion of buffer size somewhere in the MPI system that could explain this?
</span><br>
<p>Hmm.  This is not a good sign; it somewhat indicates a problem with your OS.  Based on this email and your prior emails, I'm guessing you're using TCP for communication, and that the problem is based on inter-node communication (e.g., the problem would occur even if you only run 1 process per machine, but does not occur if you run all N processes on a single machine, per your #4, below).
<br>
<p><span class="quotelev1">&gt; 2: The nodes have 4 ethernet cards each. Could the mapping be a problem?
</span><br>
<p>Shouldn't be.  If it runs at all, then it should run fine.
<br>
<p>Do you have all your ethernet cards on a single subnet, or multiple subnets?  I have heard of problems when you have multiple ethernet cards on the same subnet -- I believe there's some non-determinism in than case in what wire/NIC a packet will actually go out, which may be problematic for OMPI.
<br>
<p><span class="quotelev1">&gt; 3: The cpus are running at a 100% for all processes involved in the freeze
</span><br>
<p>That's probably right.  OMPI aggressively polls for progress as a way to decrease latency.  So all processes are trying to make progress, and therefore are aggressively polling, eating up 100% of the CPU.
<br>
<p><span class="quotelev1">&gt; 4: The same test program (<a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>) works fine when run within one node so the problem must be with MPI and/or our network. 
</span><br>
<p>This helps identify the issue as the TCP communication, not the shared memory communication.
<br>
<p><span class="quotelev1">&gt; 5: The network and ssh works otherwise fine.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Again many thanks for any hint that can get us going again. The main thing we need is some diagnostics that may point to what causes this problem for MPI.
</span><br>
<p>If you are running with multiple NICs on the same subnet, change them to multiple subnets and see if it starts working fine.
<br>
<p>If they're on different subnets, try using the btl_tcp_if_include / btl_tcp_if_exclude MCA parameters to exclude certain networks and see if they're the problematic ones.  Keep in mind that ..._include and ..._exclude are mutually exclusive; you should only specify one.  And if you specify exclude, be sure to exclude loopback.  E.g:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl_if_include eth0,eth1 -np 16 --hostfile hostfile mpi_test
<br>
or
<br>
&nbsp;&nbsp;mpirun --mca btl_if_exclude lo0,eth1 -np 16 --hostfile hostfile mpi_test
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17352.php">Yevgeny Kliteynik: "Re: [OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17350.php">Jeff Squyres: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
