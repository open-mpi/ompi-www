<?
$subject_val = "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 09:51:34 2011" -->
<!-- isoreceived="20111108145134" -->
<!-- sent="Tue, 8 Nov 2011 07:51:24 -0700" -->
<!-- isosent="20111108145124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon" -->
<!-- id="178413D0-3262-4113-8435-75DE915F0258_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D53E243D-5A2B-4904-ADFF-63E02730A8EC_at_onera.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 09:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17720.php">Christophe Peyret: "[OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that the prefix you configured with doesn't match the prefix you are providing:
<br>
<p>configure:  prefix = /opt/openmpi-1.4.4
<br>
<p>running:  prefix = /Network/opt/openmpi-1.4.4
<br>
<p>The two have to match in order for the libraries to be found.
<br>
<p><p>On Nov 8, 2011, at 6:01 AM, Christophe Peyret wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a program on a cluster composed with Apple Xserve running 10.5.8 (Leopard).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) I am using openmpi-1.4.4 compiled with Intel ifort and icc (V12)
</span><br>
<span class="quotelev1">&gt; (/opt is a share point mounted in /Network/opt with NFS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.4.4                             \
</span><br>
<span class="quotelev1">&gt; F77=/Network/opt/intel/composerxe/bin/ifort F77FLAGS=&quot;-arch x86_64&quot; \
</span><br>
<span class="quotelev1">&gt; FC=/Network/opt/intel/composerxe/bin/ifort  FCFLAGS=&quot;-arch x86_64&quot;  \
</span><br>
<span class="quotelev1">&gt; CC=/Network/opt/intel/composerxe/bin/icc    CFLAGS=&quot;-arch x86_64&quot;   \
</span><br>
<span class="quotelev1">&gt; CXX=/Network/opt/intel/composerxe/bin/icpc  CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; sudo make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each /etc/profile of my nodes contains :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export COMP_HOME=/Network/opt/intel/composerxe
</span><br>
<span class="quotelev1">&gt; export PATH=$COMP_HOME/bin:$COMP_HOME/man:$PATH
</span><br>
<span class="quotelev1">&gt; export DYLD_LIBRARY_PATH=$COMP_HOME/lib/:$DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export MPI_HOME=/Network/opt/openmpi-1.4.4
</span><br>
<span class="quotelev1">&gt; export OPAL_PREFIX=/Network/opt/openmpi-1.4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=${MPI_HOME}/bin:${MPI_HOME}/man:$PATH
</span><br>
<span class="quotelev1">&gt; export DYLD_LIBRARY_PATH=$MPI_HOME/lib/:$DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$MPI_HOME/lib/:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) when I lauch mpirun on several nodes, the MPI connections fails and I have the error message :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --prefix /Network/opt/openmpi-1.4.4/ -H node1,node2 -n 2 space64 -f Test/Euler/eulerRigid.def
</span><br>
<span class="quotelev1">&gt; dyld: lazy symbol binding failed: Symbol not found: _orte_daemon
</span><br>
<span class="quotelev1">&gt;   Referenced from: /Network/opt/openmpi-1.4.4/bin/orted
</span><br>
<span class="quotelev1">&gt;   Expected in: /usr/lib/libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _orte_daemon
</span><br>
<span class="quotelev1">&gt;   Referenced from: /Network/opt/openmpi-1.4.4/bin/orted
</span><br>
<span class="quotelev1">&gt;   Expected in: /usr/lib/libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: line 1:  2973 Trace/BPT trap          /Network/opt/openmpi-1.4.4/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 1644560384 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1644560384.0;tcp://10.0.0.1:50782;tcp://125.1.4.55:50782&quot;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 41667) died unexpectedly with status 133 while attempting
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
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) Does anyone have an idea ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Christophe Peyret
</span><br>
<span class="quotelev1">&gt; ONERA - DSNA - PS3A
</span><br>
<span class="quotelev1">&gt; 29 ave de la Division Leclerc
</span><br>
<span class="quotelev1">&gt; F92320 Chatillon
</span><br>
<span class="quotelev1">&gt; Tel. : +331 4673 4778
</span><br>
<span class="quotelev1">&gt; Fax : +331 4673 4166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques">http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17720.php">Christophe Peyret: "[OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
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
