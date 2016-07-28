<?
$subject_val = "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 20 07:28:49 2009" -->
<!-- isoreceived="20091220122849" -->
<!-- sent="Sun, 20 Dec 2009 13:28:39 +0100" -->
<!-- isosent="20091220122839" -->
<!-- name="Johann Knechtel" -->
<!-- email="s9158897_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all" -->
<!-- id="4B2E1877.5080505_at_mail.inf.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE17AC6C-6432-44CD-A77A-BB2A7D544F7B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-20 07:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11615.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11615.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thank you very much for your input! The parameter &quot;mca plm rsh&quot;
<br>
did it. I am just curious about the reasons for that behavior?
<br>
You can find the complete output of the different commands embedded in
<br>
your mail below. The first line states the successful load of the OMPI
<br>
environment, we use the modules package on our cluster.
<br>
<p>Greetings
<br>
Johann
<br>
<p><p>Ralph Castain schrieb:
<br>
<span class="quotelev1">&gt; Sorry - hit &quot;send&quot; and then saw the version sitting right there in the subject! Doh...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, let's try verifying what components are actually getting used. Run this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -mca ras_base_verbose 10 -mca plm_base_verbose 10 which orted
</span><br>
<span class="quotelev1">&gt;   
</span><br>
&nbsp;OpenMPI with PPU-GCC was loaded
<br>
[node1:00706] mca: base: components_open: Looking for plm components
<br>
[node1:00706] mca: base: components_open: opening plm components
<br>
[node1:00706] mca: base: components_open: found loaded component rsh
<br>
[node1:00706] mca: base: components_open: component rsh has no register
<br>
function
<br>
[node1:00706] mca: base: components_open: component rsh open function
<br>
successful
<br>
[node1:00706] mca: base: components_open: found loaded component slurm
<br>
[node1:00706] mca: base: components_open: component slurm has no
<br>
register function
<br>
[node1:00706] mca: base: components_open: component slurm open function
<br>
successful
<br>
[node1:00706] mca: base: components_open: found loaded component tm
<br>
[node1:00706] mca: base: components_open: component tm has no register
<br>
function
<br>
[node1:00706] mca: base: components_open: component tm open function
<br>
successful
<br>
[node1:00706] mca:base:select: Auto-selecting plm components
<br>
[node1:00706] mca:base:select:(  plm) Querying component [rsh]
<br>
[node1:00706] mca:base:select:(  plm) Query of component [rsh] set
<br>
priority to 10
<br>
[node1:00706] mca:base:select:(  plm) Querying component [slurm]
<br>
[node1:00706] mca:base:select:(  plm) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[node1:00706] mca:base:select:(  plm) Querying component [tm]
<br>
[node1:00706] mca:base:select:(  plm) Query of component [tm] set
<br>
priority to 75
<br>
[node1:00706] mca:base:select:(  plm) Selected component [tm]
<br>
[node1:00706] mca: base: close: component rsh closed
<br>
[node1:00706] mca: base: close: unloading component rsh
<br>
[node1:00706] mca: base: close: component slurm closed
<br>
[node1:00706] mca: base: close: unloading component slurm
<br>
[node1:00706] mca: base: components_open: Looking for ras components
<br>
[node1:00706] mca: base: components_open: opening ras components
<br>
[node1:00706] mca: base: components_open: found loaded component slurm
<br>
[node1:00706] mca: base: components_open: component slurm has no
<br>
register function
<br>
[node1:00706] mca: base: components_open: component slurm open function
<br>
successful
<br>
[node1:00706] mca: base: components_open: found loaded component tm
<br>
[node1:00706] mca: base: components_open: component tm has no register
<br>
function
<br>
[node1:00706] mca: base: components_open: component tm open function
<br>
successful
<br>
[node1:00706] mca:base:select: Auto-selecting ras components
<br>
[node1:00706] mca:base:select:(  ras) Querying component [slurm]
<br>
[node1:00706] mca:base:select:(  ras) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[node1:00706] mca:base:select:(  ras) Querying component [tm]
<br>
[node1:00706] mca:base:select:(  ras) Query of component [tm] set
<br>
priority to 100
<br>
[node1:00706] mca:base:select:(  ras) Selected component [tm]
<br>
[node1:00706] mca: base: close: unloading component slurm
<br>
/opt/openmpi_1.3.4_gcc_ppc/bin/orted
<br>
[node1:00706] mca: base: close: unloading component tm
<br>
[node1:00706] mca: base: close: component tm closed
<br>
[node1:00706] mca: base: close: unloading component tm
<br>
<p><span class="quotelev1">&gt; Then get an allocation and run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -pernode which orted
</span><br>
<span class="quotelev1">&gt;   
</span><br>
&nbsp;OpenMPI with PPU-GCC was loaded
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node2 - daemon did not report back when launched
<br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -pernode -mca plm rsh which orted
</span><br>
<span class="quotelev1">&gt;   
</span><br>
&nbsp;OpenMPI with PPU-GCC was loaded
<br>
/opt/openmpi_1.3.4_gcc_ppc/bin/orted
<br>
/opt/openmpi_1.3.4_gcc_ppc/bin/orted
<br>
<span class="quotelev1">&gt; and see what happens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2009, at 5:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; That error has nothing to do with Torque. The cmd line is simply wrong - you are specifying a btl that doesn't exist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should work just fine with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n X hellocluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nothing else is required. When you run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile nodefile hellocluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI will still use Torque to do the launch - it just gets the list of nodes from your nodefile instead of the PBS_NODEFILE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may have stated it below, but I can't find it: what version of OMPI are you using? Are there additional versions installed on your system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2009, at 3:58 PM, Johann Knechtel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, and do I have to take care of the MCA ras plugin by my own?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried somethings like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca ras tm --mca btl ras,plm  --mca ras_tm_nodefile_dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/spool/torque/aux/ hellocluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but despite that it has not helped/worked out ([node3:22726] mca: base:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components_open: component pml / csum open function failed) it also does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not look so convenient to me...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Johann
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Johann Knechtel schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph and all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, the OMPI libs and binaries are at the same place on the nodes, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; packed OMPI via checkinstall and installed the deb via pdsh on the nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The LD_LIBRARY_PATH is set; I can run for example &quot;mpirun --hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodefile hellocluster&quot; without problems. But when started via torque job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it does not work out. I do assume correctly, that the LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be exported by torque to the daemonized mpirunners, dont I?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The torque libs are all on the same place, I installed the package shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scripts via pdsh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Johann
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain schrieb:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are the OMPI libraries and binaries installed at the same place on all the remote nodes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you setting the LD_LIBRARY_PATH correctly?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are the Torque libs available in the same place on the remote nodes? Remember, Torque runs mpirun on a backend node - not on the frontend.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These are the most typical problems. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 18, 2009, at 3:58 PM, Johann Knechtel wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Your help with the following torque integration issue will be much
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; appreciated: whenever I try to start a openmpi job on more than one
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node, it simply does not start up on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The torque job fails with the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fri Dec 18 22:11:07 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;      node2 - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fri Dec 18 22:12:47 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am quite confident about the compilation and installation of torque
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and openmpi, since it runs without error on one node:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fri Dec 18 22:14:11 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI with PPU-GCC was loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 1 on node1 out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 0 on node1 out of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fri Dec 18 22:14:12 CET 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The called programm is a simple helloworld which runs without errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; started manually on the nodes; therefore it also runs without errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using a hostfile to daemonize on more than one node. I already tried to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compile openmpi with default prefix:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ./configure CC=ppu-gcc CPP=ppu-cpp CXX=ppu-c++ CFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CXXFLAGS=-m32 FC=ppu-gfortran43 FCFLAGS=-m32 FFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCASFLAGS=-m32 LD=ppu32-ld LDFLAGS=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/shared/openmpi_gcc_ppc --with-platform=optimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --disable-mpi-profile --with-tm=/usr/local/ --with-wrapper-cflags=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-wrapper-ldflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Also the called helloworld is compiled with and without -rpath, so I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; just wanted to be sure regarding any linked library issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now, the interesting fact is the following: I compiled on one node a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; kernel with CONFIG_BSD_PROCESS_ACCT_V3 to monitor the startup of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pbs, mpi and helloworld daemons. And as already mentioned at the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; beginning, therefore I assumed that the mpi startup within torque is not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; working for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please request any further logs or so you want to review, I did not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wanted to get the mail to large at first.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Johann
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<li><strong>Next message:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11615.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>In reply to:</strong> <a href="11615.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11617.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Reply:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
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
