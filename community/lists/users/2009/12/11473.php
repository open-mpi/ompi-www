<?
$subject_val = "Re: [OMPI users] orte error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 10:44:39 2009" -->
<!-- isoreceived="20091209154439" -->
<!-- sent="Wed, 9 Dec 2009 10:44:34 -0500" -->
<!-- isosent="20091209154434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte error" -->
<!-- id="F1E073AB-F9B1-48AA-B818-832C1BBFAA9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7CF7D76F-ED06-466C-A1D2-152213F5FAAC_at_uct.ac.za" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 10:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>Previous message:</strong> <a href="11472.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>In reply to:</strong> <a href="11472.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>Reply:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you run simple MPI applications, like sending a message around in a ring?
<br>
<p>On Dec 9, 2009, at 10:18 AM, Andrew McBride wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your quick response Ralph. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors I get is now are of a completely different nature and have to do with, presumably, calling delete on an unallocated pointer. Now, this probably has little to do with openmpi and more to do with compilers used to create openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used gcc version 4.5.0 20090910 when compiling openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start testing: Dec 09 15:53 SAST
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 1/534 Testing: Teuchos_BLAS_test_MPI_1
</span><br>
<span class="quotelev1">&gt; 1/534 Test: Teuchos_BLAS_test_MPI_1
</span><br>
<span class="quotelev1">&gt; Command: &quot;/Users/andrewmcbride/lib/openmpi-1.3.3/MAC/bin/mpiexec&quot; &quot;-np&quot; &quot;1&quot; &quot;/Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS/Teuchos_BLAS_test.exe&quot; &quot;-v&quot;
</span><br>
<span class="quotelev1">&gt; Directory: /Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS
</span><br>
<span class="quotelev1">&gt; &quot;Teuchos_BLAS_test_MPI_1&quot; start time: Dec 09 15:53 SAST
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Teuchos_BLAS_test.exe(72504) malloc: *** error for object 0x100727c00: pointer being freed was not allocated
</span><br>
<span class="quotelev1">&gt; *** set a breakpoint in malloc_error_break to debug
</span><br>
<span class="quotelev1">&gt; [macs-mac:72504] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macs-mac:72504] Signal: Abort trap (6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09 Dec 2009, at 3:32 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You need to set your LD_LIBRARY_PATH to ~/lib/openmpi-1.3.3/MAC/lib, and your PATH to ~/lib/openmpi-1.3.3/MAC/bin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It should then run fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 9, 2009 at 6:29 AM, Andrew McBride &lt;andrew.mcbride_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've installed trilinos using the openmpi 1.3.3 libraries. I'm configuring openmpi as follows:
</span><br>
<span class="quotelev2">&gt;&gt; /configure CXX=/usr/local/bin/g++ CC=/usr/local/bin/gcc F77=/usr/local/bin/gfortran - prefix=/Users/andrewmcbride/lib/openmpi-1.3.3/MAC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Trilinos compiles without problem but the test fail (see below). I'm running a Mac with OSX10.6 (snow leopard). The mpi tests seem to run fine:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpirun -np 2 hello_
</span><br>
<span class="quotelev2">&gt;&gt; bash-3.2$ ~/lib/openmpi-1.3.3/MAC/bin/mpirun -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm convinced that the problem has to do with the paths and different versions of mpi lurking on the mac. I don't want to use the version of openmpi that comes bundled with the mac for a different reason.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be most appreciated
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Start testing: Dec 09 12:18 SAST
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 1/534 Testing: Teuchos_BLAS_test_MPI_1
</span><br>
<span class="quotelev2">&gt;&gt; 1/534 Test: Teuchos_BLAS_test_MPI_1
</span><br>
<span class="quotelev2">&gt;&gt; Command: &quot;/Users/andrewmcbride/lib/openmpi-1.3.3/MAC/bin/mpiexec&quot; &quot;-np&quot; &quot;1&quot; &quot;/Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS/Teuchos_BLAS_test.exe&quot; &quot;-v&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Directory: /Users/andrewmcbride/lib/trilinos-10.0.2-Source/MAC_SL/packages/teuchos/test/BLAS
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Teuchos_BLAS_test_MPI_1&quot; start time: Dec 09 12:18 SAST
</span><br>
<span class="quotelev2">&gt;&gt; Output:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [macs-mac.local:71058] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [macs-mac.local:71058] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>Previous message:</strong> <a href="11472.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>In reply to:</strong> <a href="11472.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
<li><strong>Reply:</strong> <a href="11474.php">Andrew McBride: "Re: [OMPI users] orte error"</a>
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
