<?
$subject_val = "Re: [OMPI users] problem with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 07:15:20 2010" -->
<!-- isoreceived="20100611111520" -->
<!-- sent="Fri, 11 Jun 2010 07:15:15 -0400" -->
<!-- isosent="20100611111515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpirun" -->
<!-- id="CFACF1E6-41A5-4CBB-BA52-8D7A95ECF7E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF416F7F9D.CAC3A796-ONC125773F.0031B7D8-C125773F.0031B7DD_at_mpsa.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mpirun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 07:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="13312.php">Jeff Squyres: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>In reply to:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13410.php">Nifty Tom Mitchell: "Re: [OMPI users] problem with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a afraid I don't know anything about OpenFoam, but it looks like it deliberately chose to abort due to some error (i.e., it then called MPI_ABORT to abort).
<br>
<p>I don't know what those stack traces mean; you will likely have better luck asking your question on the OpenFoam support list.
<br>
<p>Good luck!
<br>
<p><p>On Jun 11, 2010, at 5:03 AM, &lt;asmae.elbahlouli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; i'm doing a tutorial on OpenFoam, but when i run in parallel by typing &quot;mpirun -np 30 foamProMesh -parallel | tee 2&gt;&amp;1 log/FPM.log&quot;
</span><br>
<span class="quotelev1">&gt; On the terminal window , after fews seconds of run, it iterate but i have at the end:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; tta201_at_linux-qv31:/media/OpenFoam/Travaux/F1car_asmaetest&gt; mpirun -np 30 -machinefile machinefile foamProMesh -parallel | tee 2&gt;&amp;1 log/FPM.log
</span><br>
<span class="quotelev1">&gt; /*---------------------------------------------------------------------------*\                                                                
</span><br>
<span class="quotelev1">&gt; |                  |                                                          |                                                                
</span><br>
<span class="quotelev1">&gt; |   F ield         | FOAM:     The Open Source CFD Toolbox                    |                                                                
</span><br>
<span class="quotelev1">&gt; |   O peration     | Version:  1.5-2.2                                        |                                                                
</span><br>
<span class="quotelev1">&gt; |   A nd           | Web:      <a href="http://www.iconcfd.com">http://www.iconcfd.com</a>                         |                                                                
</span><br>
<span class="quotelev1">&gt; |   M anipulation  |                                                          |                                                                
</span><br>
<span class="quotelev1">&gt; \*---------------------------------------------------------------------------*/                                                                
</span><br>
<span class="quotelev1">&gt; Exec   : foamProMesh -parallel                                                                                                                 
</span><br>
<span class="quotelev1">&gt; Date   : Jun 11 2010                                                                                                                           
</span><br>
<span class="quotelev1">&gt; Time   : 10:42:24                                                                                                                              
</span><br>
<span class="quotelev1">&gt; Host   : Foam1                                                                                                                                 
</span><br>
<span class="quotelev1">&gt; PID    : 9789                                                                                                                                  
</span><br>
<span class="quotelev1">&gt; Case   : /media/OpenFoam/Travaux/F1car_asmaetest                                                                                               
</span><br>
<span class="quotelev1">&gt; nProcs : 30                                                                                                                                    
</span><br>
<span class="quotelev1">&gt; Slaves :                                                                                                                                       
</span><br>
<span class="quotelev1">&gt; 29                                                                                                                                             
</span><br>
<span class="quotelev1">&gt; (                                                                                                                                              
</span><br>
<span class="quotelev1">&gt; Foam1.9790                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam1.9791                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam1.9792                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam2.9224                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam2.9225                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam2.9226                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam2.9227                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam3.8925                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam3.8926                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; Foam3.8927                                                                                                                                     
</span><br>
<span class="quotelev1">&gt; ...... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added patches in = 0 s
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Selecting decompositionMethod hierarchical
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Overall mesh bounding box  : (-5.60160988792 -5.00165616875 -0.259253998544) (9.39931715541 5.00165616875 5.74982363461)
</span><br>
<span class="quotelev1">&gt; Relative tolerance         : 1e-06                                                                                      
</span><br>
<span class="quotelev1">&gt; Absolute matching distance : 1.90053435613e-05                                                                          
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Determining initial surface intersections
</span><br>
<span class="quotelev1">&gt; -----------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; [1] Face 42832 is in zone 5, its coupled face is in zone -1#0  Foam::error::printStack(Foam::Ostream&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #1  Foam::error::abort() in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #2  Foam::meshRefinement::checkCoupledFaceZones(Foam::polyMesh const&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libautoMesh.so&quot;
</span><br>
<span class="quotelev1">&gt; #3  main in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/applications/bin/linux64GccDPOpt/foamProMesh&quot;
</span><br>
<span class="quotelev1">&gt; #4  __libc_start_main in &quot;/lib64/libc.so.6&quot;
</span><br>
<span class="quotelev1">&gt; #5  __gxx_personality_v0 at /usr/src/packages/BUILD/glibc-2.3/csu/../sysdeps/x86_64/elf/start.S:116
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; [1]     From function meshRefinement::checkCoupledFaceZones(const polyMesh&amp;)
</span><br>
<span class="quotelev1">&gt; [1]     in file autoHexMesh/meshRefinement/meshRefinement.C at line 1180.
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; FOAM parallel run aborting
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; [11] Face 42862 is in zone -1, its coupled face is in zone 5#0  Foam::error::printStack(Foam::Ostream&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #1  Foam::error::abort() in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #2  Foam::meshRefinement::checkCoupledFaceZones(Foam::polyMesh const&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libautoMesh.so&quot;
</span><br>
<span class="quotelev1">&gt; #3  main in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/applications/bin/linux64GccDPOpt/foamProMesh&quot;
</span><br>
<span class="quotelev1">&gt; #4  __libc_start_main in &quot;/lib64/libc.so.6&quot;
</span><br>
<span class="quotelev1">&gt; #5  __gxx_personality_v0 at /usr/src/packages/BUILD/glibc-2.3/csu/../sysdeps/x86_64/elf/start.S:116
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; [11]     From function meshRefinement::checkCoupledFaceZones(const polyMesh&amp;)
</span><br>
<span class="quotelev1">&gt; [11]     in file autoHexMesh/meshRefinement/meshRefinement.C at line 1180.
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; FOAM parallel run aborting
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; [8] Face 41663 is in zone -1, its coupled face is in zone 5#0  Foam::error::printStack(Foam::Ostream&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #1  Foam::error::abort() in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libFOAM.so&quot;
</span><br>
<span class="quotelev1">&gt; #2  Foam::meshRefinement::checkCoupledFaceZones(Foam::polyMesh const&amp;) in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/lib/linux64GccDPOpt/libautoMesh.so&quot;
</span><br>
<span class="quotelev1">&gt; #3  main in &quot;/media/OpenFoam/FOAMpro/FOAMpro-1.5-2.2/FOAM-1.5-2.2/applications/bin/linux64GccDPOpt/foamProMesh&quot;
</span><br>
<span class="quotelev1">&gt; #4  __libc_start_main in &quot;/lib64/libc.so.6&quot;
</span><br>
<span class="quotelev1">&gt; #5  __gxx_personality_v0 at /usr/src/packages/BUILD/glibc-2.3/csu/../sysdeps/x86_64/elf/start.S:116
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; [8]     From function meshRefinement::checkCoupledFaceZones(const polyMesh&amp;)
</span><br>
<span class="quotelev1">&gt; [8]     in file autoHexMesh/meshRefinement/meshRefinement.C at line 1180.
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; FOAM parallel run aborting
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 9790 on
</span><br>
<span class="quotelev1">&gt; node 10.0.0.1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-qv31:16344] 2 more processes have sent help message help-mpi-api.txt / mpi-abort
</span><br>
<span class="quotelev1">&gt; [linux-qv31:16344] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
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
<li><strong>Next message:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="13312.php">Jeff Squyres: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>In reply to:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13410.php">Nifty Tom Mitchell: "Re: [OMPI users] problem with mpirun"</a>
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
