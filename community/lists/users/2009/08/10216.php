<?
$subject_val = "Re: [OMPI users] problem w sge 6.2 &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 16:52:52 2009" -->
<!-- isoreceived="20090805205252" -->
<!-- sent="Wed, 05 Aug 2009 16:52:38 -0400" -->
<!-- isosent="20090805205238" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem w sge 6.2 &amp;amp; openmpi" -->
<!-- id="4A79F116.7020607_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F61FEFA0-08E8-4E10-A269-A80E25572BA9_at_pmc.ucsc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem w sge 6.2 &amp; openmpi<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 16:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10217.php">Eli Morris: "[OMPI users]  problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume it is working with np=8 because the 8 processes are getting 
<br>
launched on the same node as mpirun and therefore there is no call to 
<br>
qrsh to start up any remote processes.  When you go beyond 8, mpirun 
<br>
calls qrsh to start up processes on some of the remote nodes.
<br>
<p>I would suggest first that you replace your MPI program with just 
<br>
hostname to simplify debug.  Then maybe you can forward along your qsub 
<br>
script as well as what your PE environment looks like (qconf -sp PE_NAME 
<br>
--- where PE_NAME is the name of your parallel environemnt).
<br>
<p>Rolf
<br>
<p>Eli Morris wrote:
<br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run an example program, mpi-ring, on a rocks cluster. 
</span><br>
<span class="quotelev1">&gt; When launched via sge with 8 processors (we have 8 procs per node), 
</span><br>
<span class="quotelev1">&gt; the program works fine, but with any more processors and the program 
</span><br>
<span class="quotelev1">&gt; fails.
</span><br>
<span class="quotelev1">&gt; I'm using open-mpi 1.3.2, included below, at end of post, is output of 
</span><br>
<span class="quotelev1">&gt; ompi_info -all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help with this vexing problem is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eli
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [emorris_at_nimbus ~/test]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib:/lib:/usr/lib:/share/apps/sunstudio/rtlibs
</span><br>
<span class="quotelev1">&gt; [emorris_at_nimbus ~/test]$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/share/apps/sunstudio/bin:/opt/ncl/bin:/home/tobrien/scripts:/usr/java/latest/bin:/opt/local/grads/bin:/share/apps/openmpilib/bin:/opt/local/ncl/ncl/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/opt/gridengine/bin/lx26-amd64:/usr/kerberos/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/openmpi/bin/:/opt/rocks/bin:/opt/rocks/sbin:/home/emorris/.sage/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/openmpi/bin/:/opt/rocks/bin:/opt/rocks/sbin:/home/emorris/.sage/bin 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [emorris_at_nimbus ~/test]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the mpirun command from the script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun --debug-daemons --mca plm_base_verbose 40 -mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent ssh -np $NSLOTS $HOME/test/mpi-ring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the verbose output of a successful program start and failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Success:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_nimbus test]# more mpi-ring.qsub.o246
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: Looking for plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [rsh]
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[INVALID],INVALID] plm:rsh: using 
</span><br>
<span class="quotelev1">&gt; /opt/gridengine/bin/lx26-amd64/qrsh for launching
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select:(  plm) Query of component 
</span><br>
<span class="quotelev1">&gt; [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select:(  plm) Skipping component 
</span><br>
<span class="quotelev1">&gt; [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca:base:select:(  plm) Selected component 
</span><br>
<span class="quotelev1">&gt; [rsh]
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] node[0].name compute-0-11 
</span><br>
<span class="quotelev1">&gt; daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] orted_cmd: received 
</span><br>
<span class="quotelev1">&gt; add_local_procs
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] orted_recv: received 
</span><br>
<span class="quotelev1">&gt; sync+nidmap from local proc [[22715,1],1]
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] orted_recv: received 
</span><br>
<span class="quotelev1">&gt; sync+nidmap from local proc [[22715,1],0]
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] orted_cmd: received 
</span><br>
<span class="quotelev1">&gt; collective data cmd
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:32126] [[22715,0],0] orted_cmd: received 
</span><br>
<span class="quotelev1">&gt; collective data cmd
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_nimbus test]# more mpi-ring.qsub.o244
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [rsh]
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] [[INVALID],INVALID] plm:rsh: using 
</span><br>
<span class="quotelev1">&gt; /opt/gridengine/bin/lx26-amd64/qrsh for launc
</span><br>
<span class="quotelev1">&gt; hing
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] mca:base:select:(  plm) Query of component 
</span><br>
<span class="quotelev1">&gt; [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] mca:base:select:(  plm) Skipping component 
</span><br>
<span class="quotelev1">&gt; [slurm]. Query failed to return a mod
</span><br>
<span class="quotelev1">&gt; ule
</span><br>
<span class="quotelev1">&gt; [compute-0-14.local:31175] mca:base:select:(  plm) Selected component 
</span><br>
<span class="quotelev1">&gt; [rsh]
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;compute-0-6.local&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.compute-0-6&quot;
</span><br>
<span class="quotelev1">&gt; error: error: ending connection before all data received
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; error reading job context from &quot;qlogin_starter&quot;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A daemon (pid 31176) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10217.php">Eli Morris: "[OMPI users]  problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<!-- nextthread="start" -->
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
