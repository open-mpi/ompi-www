<?
$subject_val = "[OMPI users] OSX:  dyld: Symbol not found: _orte_daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 08:01:38 2011" -->
<!-- isoreceived="20111108130138" -->
<!-- sent="Tue, 8 Nov 2011 14:01:32 +0100" -->
<!-- isosent="20111108130132" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[OMPI users] OSX:  dyld: Symbol not found: _orte_daemon" -->
<!-- id="D53E243D-5A2B-4904-ADFF-63E02730A8EC_at_onera.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 08:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17719.php">amosleff_at_[hidden]: "[OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<li><strong>Reply:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I am trying to run a program on a cluster composed with Apple Xserve running 10.5.8 (Leopard).
<br>
<p><p>1) I am using openmpi-1.4.4 compiled with Intel ifort and icc (V12)
<br>
(/opt is a share point mounted in /Network/opt with NFS)
<br>
<p>./configure --prefix=/opt/openmpi-1.4.4                             \
<br>
F77=/Network/opt/intel/composerxe/bin/ifort F77FLAGS=&quot;-arch x86_64&quot; \
<br>
FC=/Network/opt/intel/composerxe/bin/ifort  FCFLAGS=&quot;-arch x86_64&quot;  \
<br>
CC=/Network/opt/intel/composerxe/bin/icc    CFLAGS=&quot;-arch x86_64&quot;   \
<br>
CXX=/Network/opt/intel/composerxe/bin/icpc  CXXFLAGS=&quot;-arch x86_64&quot;
<br>
<p>make
<br>
sudo make install
<br>
<p><p>Each /etc/profile of my nodes contains :
<br>
<p>export COMP_HOME=/Network/opt/intel/composerxe
<br>
export PATH=$COMP_HOME/bin:$COMP_HOME/man:$PATH
<br>
export DYLD_LIBRARY_PATH=$COMP_HOME/lib/:$DYLD_LIBRARY_PATH
<br>
<p>export MPI_HOME=/Network/opt/openmpi-1.4.4
<br>
export OPAL_PREFIX=/Network/opt/openmpi-1.4.4
<br>
<p>export PATH=${MPI_HOME}/bin:${MPI_HOME}/man:$PATH
<br>
export DYLD_LIBRARY_PATH=$MPI_HOME/lib/:$DYLD_LIBRARY_PATH
<br>
export LD_LIBRARY_PATH=$MPI_HOME/lib/:$LD_LIBRARY_PATH
<br>
<p>2) when I lauch mpirun on several nodes, the MPI connections fails and I have the error message :
<br>
<p>&nbsp;mpirun --prefix /Network/opt/openmpi-1.4.4/ -H node1,node2 -n 2 space64 -f Test/Euler/eulerRigid.def
<br>
dyld: lazy symbol binding failed: Symbol not found: _orte_daemon
<br>
&nbsp;&nbsp;Referenced from: /Network/opt/openmpi-1.4.4/bin/orted
<br>
&nbsp;&nbsp;Expected in: /usr/lib/libopen-rte.0.dylib
<br>
<p>dyld: Symbol not found: _orte_daemon
<br>
&nbsp;&nbsp;Referenced from: /Network/opt/openmpi-1.4.4/bin/orted
<br>
&nbsp;&nbsp;Expected in: /usr/lib/libopen-rte.0.dylib
<br>
<p>bash: line 1:  2973 Trace/BPT trap          /Network/opt/openmpi-1.4.4/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 1644560384 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1644560384.0;tcp://10.0.0.1:50782;tcp://125.1.4.55:50782&quot;
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 41667) died unexpectedly with status 133 while attempting
<br>
to launch so we are aborting.
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
mpirun: clean termination accomplished
<br>
<p><p>3) Does anyone have an idea ?
<br>
<p><p><pre>
--
Christophe Peyret
ONERA - DSNA - PS3A
29 ave de la Division Leclerc
F92320 Chatillon
Tel. : +331 4673 4778
Fax : +331 4673 4166
<a href="http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques">http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17719.php">amosleff_at_[hidden]: "[OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<li><strong>Reply:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
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
