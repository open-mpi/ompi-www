<?
$subject_val = "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 18:56:15 2009" -->
<!-- isoreceived="20091218235615" -->
<!-- sent="Fri, 18 Dec 2009 16:47:47 -0700" -->
<!-- isosent="20091218234747" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all" -->
<!-- id="3657D709-B24A-4036-A66B-048BF60EDF7B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B2C0907.6060800_at_mail.inf.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 18:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are the OMPI libraries and binaries installed at the same place on all the remote nodes?
<br>
<p>Are you setting the LD_LIBRARY_PATH correctly?
<br>
<p>Are the Torque libs available in the same place on the remote nodes? Remember, Torque runs mpirun on a backend node - not on the frontend.
<br>
<p>These are the most typical problems. 
<br>
<p><p>On Dec 18, 2009, at 3:58 PM, Johann Knechtel wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your help with the following torque integration issue will be much
</span><br>
<span class="quotelev1">&gt; appreciated: whenever I try to start a openmpi job on more than one
</span><br>
<span class="quotelev1">&gt; node, it simply does not start up on the nodes.
</span><br>
<span class="quotelev1">&gt; The torque job fails with the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 18 22:11:07 CET 2009
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;        node2 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 18 22:12:47 CET 2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am quite confident about the compilation and installation of torque
</span><br>
<span class="quotelev1">&gt; and openmpi, since it runs without error on one node:
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 18 22:14:11 CET 2009
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on node1 out of 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on node1 out of 2
</span><br>
<span class="quotelev2">&gt;&gt; Fri Dec 18 22:14:12 CET 2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The called programm is a simple helloworld which runs without errors
</span><br>
<span class="quotelev1">&gt; started manually on the nodes; therefore it also runs without errors
</span><br>
<span class="quotelev1">&gt; using a hostfile to daemonize on more than one node. I already tried to
</span><br>
<span class="quotelev1">&gt; compile openmpi with default prefix:
</span><br>
<span class="quotelev2">&gt;&gt;  $ ./configure CC=ppu-gcc CPP=ppu-cpp CXX=ppu-c++ CFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=-m32 FC=ppu-gfortran43 FCFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; CCASFLAGS=-m32 LD=ppu32-ld LDFLAGS=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/shared/openmpi_gcc_ppc --with-platform=optimized
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-profile --with-tm=/usr/local/ --with-wrapper-cflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-ldflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also the called helloworld is compiled with and without -rpath, so I
</span><br>
<span class="quotelev1">&gt; just wanted to be sure regarding any linked library issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, the interesting fact is the following: I compiled on one node a
</span><br>
<span class="quotelev1">&gt; kernel with CONFIG_BSD_PROCESS_ACCT_V3 to monitor the startup of the
</span><br>
<span class="quotelev1">&gt; pbs, mpi and helloworld daemons. And as already mentioned at the
</span><br>
<span class="quotelev1">&gt; beginning, therefore I assumed that the mpi startup within torque is not
</span><br>
<span class="quotelev1">&gt; working for me.
</span><br>
<span class="quotelev1">&gt; Please request any further logs or so you want to review, I did not
</span><br>
<span class="quotelev1">&gt; wanted to get the mail to large at first.
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; Johann
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
<li><strong>Next message:</strong> <a href="11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
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
