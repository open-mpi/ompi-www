<?
$subject_val = "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 15:05:20 2012" -->
<!-- isoreceived="20120118200520" -->
<!-- sent="Wed, 18 Jan 2012 15:05:15 -0500" -->
<!-- isosent="20120118200515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision" -->
<!-- id="6693EFCF-7189-4B92-B916-8E8CC351382F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAN7CqretgorVZyencQ1ATStVL2=ccUsLNOtEXo59KbA45gu=RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 15:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18202.php">Rodrigo Oliveira: "[OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jumping in pretty late in this thread here...
<br>
<p>I see that it's failing in opal_hwloc_base_close().  That's a little worrysome.  
<br>
<p>I do see an odd path through the hwloc initialization that *could* cause an error during finalization -- but it would involve you setting an invalid value for an MCA parameter.  Are you setting hwloc_base_mem_bind_failure_action or 
<br>
hwloc_base_mem_alloc_policy, perchance?
<br>
<p><p>On Jan 16, 2012, at 1:56 PM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I've found a bug in the hear revision of the OpenMPI 1.5
</span><br>
<span class="quotelev1">&gt; branch. If it is configured with --disable-debug it crashes in
</span><br>
<span class="quotelev1">&gt; finalize on the hello_c.c example. Did I miss something out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure options:
</span><br>
<span class="quotelev1">&gt; ./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
</span><br>
<span class="quotelev1">&gt; --disable-debug --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --prefix=/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Runtime command and output:
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:../lib ./mpirun --mca btl openib,self
</span><br>
<span class="quotelev1">&gt; --npernode 1 --host mir1,mir2 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; [mir1:05542] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mir1:05542] Failing at address: 0xe8
</span><br>
<span class="quotelev1">&gt; [mir2:10218] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mir2:10218] Failing at address: 0xe8
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 0] /lib64/libpthread.so.0() [0x390d20f4c0]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev1">&gt; [0x7f4588cee6a8]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev1">&gt; [0x7f4588cee700]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev1">&gt; [0x7f4588d1beb2]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c81eb5]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c217c3]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev1">&gt; [0x7f4588c39959]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x390ca1ec5d]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev1">&gt; [mir1:05542] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 0] /lib64/libpthread.so.0() [0x3a6dc0f4c0]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev1">&gt; [0x7f409f31d6a8]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev1">&gt; [0x7f409f31d700]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev1">&gt; [0x7f409f34aeb2]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev1">&gt; [0x7f409f2b0eb5]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev1">&gt; [0x7f409f2507c3]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev1">&gt; [0x7f409f268959]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3a6d41ec5d]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev1">&gt; [mir2:10218] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 5542 on node mir1 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrew Senin
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
<li><strong>Next message:</strong> <a href="18202.php">Rodrigo Oliveira: "[OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="18170.php">Andrew Senin: "[OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18204.php">Andrew Senin: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
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
