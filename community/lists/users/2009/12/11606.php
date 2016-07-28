<?
$subject_val = "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 17:58:26 2009" -->
<!-- isoreceived="20091218225826" -->
<!-- sent="Fri, 18 Dec 2009 23:58:15 +0100" -->
<!-- isosent="20091218225815" -->
<!-- name="Johann Knechtel" -->
<!-- email="s9158897_at_[hidden]" -->
<!-- subject="[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all" -->
<!-- id="4B2C0907.6060800_at_mail.inf.tu-dresden.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all<br>
<strong>From:</strong> Johann Knechtel (<em>s9158897_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 17:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Your help with the following torque integration issue will be much
<br>
appreciated: whenever I try to start a openmpi job on more than one
<br>
node, it simply does not start up on the nodes.
<br>
The torque job fails with the following:
<br>
<p><span class="quotelev1">&gt; Fri Dec 18 22:11:07 CET 2009
</span><br>
<span class="quotelev1">&gt;  OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         node2 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; Fri Dec 18 22:12:47 CET 2009
</span><br>
<p>I am quite confident about the compilation and installation of torque
<br>
and openmpi, since it runs without error on one node:
<br>
<span class="quotelev1">&gt; Fri Dec 18 22:14:11 CET 2009
</span><br>
<span class="quotelev1">&gt;  OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev1">&gt; Process 1 on node1 out of 2
</span><br>
<span class="quotelev1">&gt; Process 0 on node1 out of 2
</span><br>
<span class="quotelev1">&gt; Fri Dec 18 22:14:12 CET 2009
</span><br>
<p>The called programm is a simple helloworld which runs without errors
<br>
started manually on the nodes; therefore it also runs without errors
<br>
using a hostfile to daemonize on more than one node. I already tried to
<br>
compile openmpi with default prefix:
<br>
<span class="quotelev1">&gt;   $ ./configure CC=ppu-gcc CPP=ppu-cpp CXX=ppu-c++ CFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-m32 FC=ppu-gfortran43 FCFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; CCASFLAGS=-m32 LD=ppu32-ld LDFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; --prefix=/shared/openmpi_gcc_ppc --with-platform=optimized
</span><br>
<span class="quotelev1">&gt; --disable-mpi-profile --with-tm=/usr/local/ --with-wrapper-cflags=-m32
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default
</span><br>
<p>Also the called helloworld is compiled with and without -rpath, so I
<br>
just wanted to be sure regarding any linked library issue.
<br>
<p>Now, the interesting fact is the following: I compiled on one node a
<br>
kernel with CONFIG_BSD_PROCESS_ACCT_V3 to monitor the startup of the
<br>
pbs, mpi and helloworld daemons. And as already mentioned at the
<br>
beginning, therefore I assumed that the mpi startup within torque is not
<br>
working for me.
<br>
Please request any further logs or so you want to review, I did not
<br>
wanted to get the mail to large at first.
<br>
Any ideas?
<br>
<p>Greetings,
<br>
Johann
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
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
