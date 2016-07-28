<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 13:44:53 2005" -->
<!-- isoreceived="20051128184453" -->
<!-- sent="Mon, 28 Nov 2005 11:44:47 -0700" -->
<!-- isosent="20051128184447" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problems with bproc cluster" -->
<!-- id="438B501F.1070506_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200511281210.22482.ouellet_at_amnh.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 13:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0400.php">Jeff Squyres: "Re: [O-MPI users] Problems with accessing list archives"</a>
<li><strong>In reply to:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello John,
<br>
<p>You need to specify both --enable-static and --disable-shared to do a static
<br>
build (not sure why, perhaps someone else can fill us in on that)...
<br>
<p>The logs indicate the launch is failing trying to start orted on the backend
<br>
node... probably due to shared library dependencies.
<br>
<p>You might try doing a bpsh &lt;node&gt; ldd orted
<br>
<p>And check that the libraries resolve / and or rebuild with the indicated
<br>
configure option.
<br>
<p>Regards,
<br>
Tim
<br>
<p><p>John Ouellette wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having problems with getting code (specifically ASC FLASH) to run on our 
</span><br>
<span class="quotelev1">&gt; bproc-based cluster using Open-MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our cluster is based on bproc 4.0.0.pre8 and Linux 2.6.9 (vanilla) and we're 
</span><br>
<span class="quotelev1">&gt; using Intel v9.0 compilers.  OpenMPI compiles without errors on this setup.
</span><br>
<span class="quotelev1">&gt; I've attached a compressed file containing the output of config.log, my 
</span><br>
<span class="quotelev1">&gt; machines file, and the output of ompi_info (the make.log file was too large 
</span><br>
<span class="quotelev1">&gt; and made the tar file 120KB -- larger than the 100KB limit on the mailing 
</span><br>
<span class="quotelev1">&gt; list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem I'm having is detailed in the 'log3.out' file, also contained in 
</span><br>
<span class="quotelev1">&gt; the attached tar file.  Specifically, when I run FLASH with the following 
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile machines.openmpi -np 4 ./flash2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a bzillion errors of the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file rmgr_urm_component.c at line 190
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This eventually goes away and, just before the process dies, I also get many 
</span><br>
<span class="quotelev1">&gt; errors like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file pls_bproc.c at line 582
</span><br>
<span class="quotelev1">&gt; [demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file pls_bproc.c at line 838
</span><br>
<span class="quotelev1">&gt; [demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at line 177
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and complaints about not being able to find the file help_pls_bproc.txt, which 
</span><br>
<span class="quotelev1">&gt; actually does exist in the location where OpenMPI was installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any insight would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; John Ouellette
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0400.php">Jeff Squyres: "Re: [O-MPI users] Problems with accessing list archives"</a>
<li><strong>In reply to:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0402.php">Jeff Squyres: "Re: [O-MPI users] problems with bproc cluster"</a>
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
