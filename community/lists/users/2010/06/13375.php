<?
$subject_val = "Re: [OMPI users] problems with turbFoam";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 09:53:55 2010" -->
<!-- isoreceived="20100622135355" -->
<!-- sent="Tue, 22 Jun 2010 09:53:50 -0400" -->
<!-- isosent="20100622135350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with turbFoam" -->
<!-- id="FCC8A00B-176C-4ABA-B66A-800A5847C12B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF05E119E4.4BD17162-ONC125774A.004B5BDA-C125774A.004B5BE0_at_mpsa.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with turbFoam<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 09:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13374.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problems with turbFoam"</a>
<li><strong>In reply to:</strong> <a href="13374.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problems with turbFoam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you mean to send this to the openfoam mailing list?
<br>
<p>We don't know much (anything) about the internals and usage of openfoam -- you'll need to contact them for help.  This list is for Open MPI and general MPI support only.
<br>
<p>Sorry!
<br>
<p><p>On Jun 22, 2010, at 9:43 AM, &lt;asmae.elbahlouli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hello, i'm new with openfoam and i have a problem with a mpirun, when a type in the terminal : mpirun -np 30 -machinefile machinefile turbFoam -parallel | tee 2&gt;&amp;1 log/turb.log
</span><br>
<span class="quotelev1">&gt; it runs, after a while it stops with this message :
</span><br>
<span class="quotelev1">&gt; Create time                                                                    
</span><br>
<span class="quotelev1">&gt; Create mesh for time = 4000
</span><br>
<span class="quotelev1">&gt; Reading field p
</span><br>
<span class="quotelev1">&gt; Reading field U
</span><br>
<span class="quotelev1">&gt; Reading/calculating face flux field phi
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; [23] keyword PISO is undefined in dictionary &quot;/media/OpenFoam/Travaux/psa-habitacle/foamProMesh-pisoFoam/turbtest/turbFoam/processor23/system/fvSolution&quot;
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; [23] file: /media/OpenFoam/Travaux/psa-habitacle/foamProMesh-pisoFoam/turbtest/turbFoam/processor23/system/fvSolution from line 3 to line 31.
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; [23]     From function dictionary::subDict(const word&amp; keyword) const
</span><br>
<span class="quotelev1">&gt; [23]     in file db/dictionary/dictionary.C at line 271.
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; FOAM parallel run exiting
</span><br>
<span class="quotelev1">&gt; [23]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 23 in communicator MPI_COMM_WORLD with errorcode 1.
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 23 with PID 30795 on node 10.0.0.7 exiting without calling &quot;finalize&quot;. This may have caused other processes in the application to be terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when i replace  turbFoam in the mpirun with simpleFoam it runs correctly.  Someone knows what is the problem?
</span><br>
<span class="quotelev1">&gt; thanks
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
<li><strong>Next message:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13374.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problems with turbFoam"</a>
<li><strong>In reply to:</strong> <a href="13374.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problems with turbFoam"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
