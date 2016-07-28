<?
$subject_val = "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  9 03:13:44 2011" -->
<!-- isoreceived="20111109081344" -->
<!-- sent="Wed, 9 Nov 2011 09:13:38 +0100" -->
<!-- isosent="20111109081338" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon" -->
<!-- id="91A07BC6-2E08-4FBD-8D8B-C4444022B437_at_onera.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="[OMPI users] OSX: dyld: Symbol not found: _orte_daemon" -->
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
<strong>Subject:</strong> Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-09 03:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
<li><strong>Previous message:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17734.php">Jeff Squyres: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<li><strong>Reply:</strong> <a href="17734.php">Jeff Squyres: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#149; Few Additionnal Informations about my Network configuration
<br>
<p>/opt is a share point it uses NFS
<br>
<p>/Network/opt
<br>
<p>is the point where /opt can be found accross the Network
<br>
<p>I declared OPAL_PREFIX because openmpi was built with prefix /opt and runs it directory /Network/opt
<br>
<p><p>&#149;  If a copy the directory /opt/openmpi-1.4.4 on all my nodes
<br>
<p>scp -r /opt/openmpi-1.4.4 root_at_node2:/opt/.
<br>
scp -r /opt/openmpi-1.4.4 root_at_node3:/opt/.
<br>
scp -r /opt/openmpi-1.4.4 root_at_node4:/opt/.
<br>
....
<br>
<p>This time my program runs.
<br>
<p>&#149; A Question :  is OPAL_PREFIX declaration enought to use /Network/opt rather than /opt ?
<br>
<p><p>Christophe
<br>
<p><p><span class="quotelev1">&gt; The problem is that the prefix you configured with doesn't match the prefix you are providing: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: prefix = /opt/openmpi-1.4.4 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running: prefix = /Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The two have to match in order for the libraries to be found. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2011, at 6:01 AM, Christophe Peyret wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run a program on a cluster composed with Apple Xserve running 10.5.8 (Leopard). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) I am using openmpi-1.4.4 compiled with Intel ifort and icc (V12) 
</span><br>
<span class="quotelev2">&gt; &gt; (/opt is a share point mounted in /Network/opt with NFS) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/openmpi-1.4.4 \ 
</span><br>
<span class="quotelev2">&gt; &gt; F77=/Network/opt/intel/composerxe/bin/ifort F77FLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev2">&gt; &gt; FC=/Network/opt/intel/composerxe/bin/ifort FCFLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev2">&gt; &gt; CC=/Network/opt/intel/composerxe/bin/icc CFLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev2">&gt; &gt; CXX=/Network/opt/intel/composerxe/bin/icpc CXXFLAGS=&quot;-arch x86_64&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; make 
</span><br>
<span class="quotelev2">&gt; &gt; sudo make install 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Each /etc/profile of my nodes contains : 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export COMP_HOME=/Network/opt/intel/composerxe 
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=$COMP_HOME/bin:$COMP_HOME/man:$PATH 
</span><br>
<span class="quotelev2">&gt; &gt; export DYLD_LIBRARY_PATH=$COMP_HOME/lib/:$DYLD_LIBRARY_PATH 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export MPI_HOME=/Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev2">&gt; &gt; export OPAL_PREFIX=/Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=${MPI_HOME}/bin:${MPI_HOME}/man:$PATH 
</span><br>
<span class="quotelev2">&gt; &gt; export DYLD_LIBRARY_PATH=$MPI_HOME/lib/:$DYLD_LIBRARY_PATH 
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/lib/:$LD_LIBRARY_PATH 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) when I lauch mpirun on several nodes, the MPI connections fails and I have the error message : 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --prefix /Network/opt/openmpi-1.4.4/ -H node1,node2 -n 2 space64 -f Test/Euler/eulerRigid.def 
</span><br>
<span class="quotelev2">&gt; &gt; dyld: lazy symbol binding failed: Symbol not found: _orte_daemon 
</span><br>
<span class="quotelev2">&gt; &gt; Referenced from: /Network/opt/openmpi-1.4.4/bin/orted 
</span><br>
<span class="quotelev2">&gt; &gt; Expected in: /usr/lib/libopen-rte.0.dylib 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; dyld: Symbol not found: _orte_daemon 
</span><br>
<span class="quotelev2">&gt; &gt; Referenced from: /Network/opt/openmpi-1.4.4/bin/orted 
</span><br>
<span class="quotelev2">&gt; &gt; Expected in: /usr/lib/libopen-rte.0.dylib 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; bash: line 1: 2973 Trace/BPT trap /Network/opt/openmpi-1.4.4/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 1644560384 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1644560384.0;tcp://10.0.0.1:50782;tcp://125.1.4.55:50782&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 41667) died unexpectedly with status 133 while attempting 
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared 
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the 
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will 
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes. 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process 
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation. 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: clean termination accomplished 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3) Does anyone have an idea ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Christophe Peyret 
</span><br>
<span class="quotelev2">&gt; &gt; ONERA - DSNA - PS3A 
</span><br>
<span class="quotelev2">&gt; &gt; 29 ave de la Division Leclerc 
</span><br>
<span class="quotelev2">&gt; &gt; F92320 Chatillon 
</span><br>
<span class="quotelev2">&gt; &gt; Tel. : +331 4673 4778 
</span><br>
<span class="quotelev2">&gt; &gt; Fax : +331 4673 4166 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques">http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
<li><strong>Previous message:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17734.php">Jeff Squyres: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<li><strong>Reply:</strong> <a href="17734.php">Jeff Squyres: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
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
