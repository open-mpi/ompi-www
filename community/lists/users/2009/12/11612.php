<?
$subject_val = "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 16:30:05 2009" -->
<!-- isoreceived="20091219213005" -->
<!-- sent="Sat, 19 Dec 2009 22:29:54 +0100" -->
<!-- isosent="20091219212954" -->
<!-- name="Johann Knechtel" -->
<!-- email="s9158897_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all" -->
<!-- id="4B2D45D2.9040209_at_mail.inf.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3657D709-B24A-4036-A66B-048BF60EDF7B_at_open-mpi.org" -->
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
<strong>From:</strong> Johann Knechtel (<em>s9158897_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-19 16:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and all,
<br>
<p>Yes, the OMPI libs and binaries are at the same place on the nodes, I
<br>
packed OMPI via checkinstall and installed the deb via pdsh on the nodes.
<br>
The LD_LIBRARY_PATH is set; I can run for example &quot;mpirun --hostfile
<br>
nodefile hellocluster&quot; without problems. But when started via torque job
<br>
it does not work out. I do assume correctly, that the LD_LIBRARY_PATH
<br>
will be exported by torque to the daemonized mpirunners, dont I?
<br>
The torque libs are all on the same place, I installed the package shell
<br>
scripts via pdsh.
<br>
<p>Greetings,
<br>
Johann
<br>
<p><p>Ralph Castain schrieb:
<br>
<span class="quotelev1">&gt; Are the OMPI libraries and binaries installed at the same place on all the remote nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you setting the LD_LIBRARY_PATH correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the Torque libs available in the same place on the remote nodes? Remember, Torque runs mpirun on a backend node - not on the frontend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the most typical problems. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2009, at 3:58 PM, Johann Knechtel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your help with the following torque integration issue will be much
</span><br>
<span class="quotelev2">&gt;&gt; appreciated: whenever I try to start a openmpi job on more than one
</span><br>
<span class="quotelev2">&gt;&gt; node, it simply does not start up on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt; The torque job fails with the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fri Dec 18 22:11:07 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        node2 - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fri Dec 18 22:12:47 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I am quite confident about the compilation and installation of torque
</span><br>
<span class="quotelev2">&gt;&gt; and openmpi, since it runs without error on one node:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fri Dec 18 22:14:11 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 on node1 out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 on node1 out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fri Dec 18 22:14:12 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; The called programm is a simple helloworld which runs without errors
</span><br>
<span class="quotelev2">&gt;&gt; started manually on the nodes; therefore it also runs without errors
</span><br>
<span class="quotelev2">&gt;&gt; using a hostfile to daemonize on more than one node. I already tried to
</span><br>
<span class="quotelev2">&gt;&gt; compile openmpi with default prefix:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ ./configure CC=ppu-gcc CPP=ppu-cpp CXX=ppu-c++ CFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS=-m32 FC=ppu-gfortran43 FCFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCASFLAGS=-m32 LD=ppu32-ld LDFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/shared/openmpi_gcc_ppc --with-platform=optimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-profile --with-tm=/usr/local/ --with-wrapper-cflags=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-wrapper-ldflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Also the called helloworld is compiled with and without -rpath, so I
</span><br>
<span class="quotelev2">&gt;&gt; just wanted to be sure regarding any linked library issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, the interesting fact is the following: I compiled on one node a
</span><br>
<span class="quotelev2">&gt;&gt; kernel with CONFIG_BSD_PROCESS_ACCT_V3 to monitor the startup of the
</span><br>
<span class="quotelev2">&gt;&gt; pbs, mpi and helloworld daemons. And as already mentioned at the
</span><br>
<span class="quotelev2">&gt;&gt; beginning, therefore I assumed that the mpi startup within torque is not
</span><br>
<span class="quotelev2">&gt;&gt; working for me.
</span><br>
<span class="quotelev2">&gt;&gt; Please request any further logs or so you want to review, I did not
</span><br>
<span class="quotelev2">&gt;&gt; wanted to get the mail to large at first.
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt; Johann
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11613.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
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
