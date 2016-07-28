<?
$subject_val = "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  9 08:16:31 2011" -->
<!-- isoreceived="20111109131631" -->
<!-- sent="Wed, 9 Nov 2011 08:16:26 -0500" -->
<!-- isosent="20111109131626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon" -->
<!-- id="4D3D2572-F2EF-4BE2-AF20-C7AC04D36807_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="91A07BC6-2E08-4FBD-8D8B-C4444022B437_at_onera.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-09 08:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17735.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17733.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="17731.php">Christophe Peyret: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, yes, OPAL_PREFIX should be enough.
<br>
<p>However, it is certainly easier to configure properly if you have the same prefix on all nodes, even if it's actually different one one node.
<br>
<p>Check out this FAQ entry for more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p><p>On Nov 9, 2011, at 3:13 AM, Christophe Peyret wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#149; Few Additionnal Informations about my Network configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt is a share point it uses NFS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Network/opt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is the point where /opt can be found accross the Network
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I declared OPAL_PREFIX because openmpi was built with prefix /opt and runs it directory /Network/opt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#149;  If a copy the directory /opt/openmpi-1.4.4 on all my nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; scp -r /opt/openmpi-1.4.4 root_at_node2:/opt/.
</span><br>
<span class="quotelev1">&gt; scp -r /opt/openmpi-1.4.4 root_at_node3:/opt/.
</span><br>
<span class="quotelev1">&gt; scp -r /opt/openmpi-1.4.4 root_at_node4:/opt/.
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This time my program runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#149; A Question :  is OPAL_PREFIX declaration enought to use /Network/opt rather than /opt ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christophe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that the prefix you configured with doesn't match the prefix you are providing: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure: prefix = /opt/openmpi-1.4.4 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; running: prefix = /Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The two have to match in order for the libraries to be found. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2011, at 6:01 AM, Christophe Peyret wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to run a program on a cluster composed with Apple Xserve running 10.5.8 (Leopard). 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) I am using openmpi-1.4.4 compiled with Intel ifort and icc (V12) 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (/opt is a share point mounted in /Network/opt with NFS) 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure --prefix=/opt/openmpi-1.4.4 \ 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; F77=/Network/opt/intel/composerxe/bin/ifort F77FLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; FC=/Network/opt/intel/composerxe/bin/ifort FCFLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CC=/Network/opt/intel/composerxe/bin/icc CFLAGS=&quot;-arch x86_64&quot; \ 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CXX=/Network/opt/intel/composerxe/bin/icpc CXXFLAGS=&quot;-arch x86_64&quot; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sudo make install 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Each /etc/profile of my nodes contains : 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export COMP_HOME=/Network/opt/intel/composerxe 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export PATH=$COMP_HOME/bin:$COMP_HOME/man:$PATH 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export DYLD_LIBRARY_PATH=$COMP_HOME/lib/:$DYLD_LIBRARY_PATH 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export MPI_HOME=/Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export OPAL_PREFIX=/Network/opt/openmpi-1.4.4 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export PATH=${MPI_HOME}/bin:${MPI_HOME}/man:$PATH 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export DYLD_LIBRARY_PATH=$MPI_HOME/lib/:$DYLD_LIBRARY_PATH 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export LD_LIBRARY_PATH=$MPI_HOME/lib/:$LD_LIBRARY_PATH 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) when I lauch mpirun on several nodes, the MPI connections fails and I have the error message : 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun --prefix /Network/opt/openmpi-1.4.4/ -H node1,node2 -n 2 space64 -f Test/Euler/eulerRigid.def 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dyld: lazy symbol binding failed: Symbol not found: _orte_daemon 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Referenced from: /Network/opt/openmpi-1.4.4/bin/orted 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Expected in: /usr/lib/libopen-rte.0.dylib 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dyld: Symbol not found: _orte_daemon 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Referenced from: /Network/opt/openmpi-1.4.4/bin/orted 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Expected in: /usr/lib/libopen-rte.0.dylib 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bash: line 1: 2973 Trace/BPT trap /Network/opt/openmpi-1.4.4/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 1644560384 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1644560384.0;tcp://10.0.0.1:50782;tcp://125.1.4.55:50782&quot; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A daemon (pid 41667) died unexpectedly with status 133 while attempting 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to launch so we are aborting. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There may be more information reported by the environment (see above). 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This may be because the daemon was unable to find all the needed shared 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; automatically be forwarded to the remote nodes. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that caused that situation. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun: clean termination accomplished 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3) Does anyone have an idea ? 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Christophe Peyret 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ONERA - DSNA - PS3A 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 29 ave de la Division Leclerc 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; F92320 Chatillon 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tel. : +331 4673 4778 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fax : +331 4673 4166 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques">http://www.onera.fr/dsna/couplage-methodes-aeroacoustiques</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="17735.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17733.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="17731.php">Christophe Peyret: "Re: [OMPI users] OSX: dyld: Symbol not found: _orte_daemon"</a>
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
