<?
$subject_val = "Re: [OMPI users] Problems with shared libraries while launching jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 07:29:20 2012" -->
<!-- isoreceived="20121215122920" -->
<!-- sent="Sat, 15 Dec 2012 07:29:13 -0500" -->
<!-- isosent="20121215122913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with shared libraries while launching jobs" -->
<!-- id="9720A534-63CD-4D16-8648-F361A75C1C1D_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F1A2342_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with shared libraries while launching jobs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-15 07:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>In reply to:</strong> <a href="20952.php">Blosch, Edwin L: "[OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that exporting the LD_LIBRARY_PATH on the mpirun command line does not necessarily apply to launching the remote orteds (it applies to launching the remote MPI processes, which are children of the orteds).
<br>
<p>Since you're using ssh, you might want to check the shell startup scripts on the target nodes (e.g., .bashrc).  It's not sufficient to not overwrite the LD_LIBRARY_PATH -- ensure that it is getting set to the right library location of the intel support libraries.
<br>
<p>You might also want to check your .bashrc that you're not setting LD_LIBRARY_PATH (or path or ...) after it exits for non-interactive shells.  This is a common optimization trick in shell startup files -- exit early when it detects that this is a non-interactive shell, and therefore don't do a bunch of stuff that assumedly is only needed when you login interactively (e.g., create shell aliases and the like).
<br>
<p>Random question: is there a reason you're not using torque support?  When you use torque support, torque will automatically copy your current environment -- including LD_LIBRARY_PATH -- to the target node before launching orted.  Hence, it can actually be easier for LD_LIBRARY_PATH issues like this.
<br>
<p><p><p>On Dec 14, 2012, at 3:17 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I am having a weird problem launching cases with OpenMPI 1.4.3.  It is most likely a problem with a particular node of our cluster, as the jobs will run fine on some submissions, but not other submissions.  It seems to depend on the node list.  I just am having trouble diagnosing which node, and what is the nature of the problem it has.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; One or perhaps more of the orted are indicating they cannot find an Intel Math library.  The error is:
</span><br>
<span class="quotelev1">&gt; /release/cfd/openmpi-intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ve checked the environment just before launching mpirun, and LD_LIBRARY_PATH includes the necessary component to point to where the Intel shared libraries are located.  Furthermore, my mpirun command line says to export the LD_LIBRARY_PATH variable:
</span><br>
<span class="quotelev1">&gt; Executing ['/release/cfd/openmpi-intel/bin/mpirun', '--machinefile /var/spool/PBS/aux/20761.maruhpc4-mgt', '-np 160', '-x LD_LIBRARY_PATH', '-x MPI_ENVIRONMENT=1', '/tmp/fv420761.maruhpc4-mgt/falconv4_openmpi_jsgl', '-v', '-cycles', '10000', '-ri', 'restart.1', '-ro', '/tmp/fv420761.maruhpc4-mgt/restart.1']
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My shell-initialization script (.bashrc) does not overwrite LD_LIBRARY_PATH.  OpenMPI is built explicitly --without-torque and should be using ssh to launch the orted.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What options can I add to get more debugging of problems launching orted?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>In reply to:</strong> <a href="20952.php">Blosch, Edwin L: "[OMPI users] Problems with shared libraries while launching jobs"</a>
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
