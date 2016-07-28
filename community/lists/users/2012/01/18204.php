<?
$subject_val = "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 17:19:14 2012" -->
<!-- isoreceived="20120118221914" -->
<!-- sent="Thu, 19 Jan 2012 02:19:09 +0400" -->
<!-- isosent="20120118221909" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision" -->
<!-- id="CAN7CqrcQ3OoOHg=ZRMKzdDOGP-N_WzX=YfX3LfU-M5vNTQMaAA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6693EFCF-7189-4B92-B916-8E8CC351382F_at_cisco.com" -->
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
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 17:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18205.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18203.php">David Race: "[OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, nothing specific. Only basic settings (--mca btl openib,self
<br>
--npernode 1, etc).
<br>
<p>Actually I'm were confused with this error because today it just
<br>
disapeared. I had 2 separate folders where it was reproduced in 100%
<br>
of test runs. Today I recompiled the source and it is gone in both
<br>
folders. But yesterday I tried recompiling multiple times with no
<br>
effect. So I believe this must be somehow related to some unknown
<br>
settings in the lab which have been changed. Trying to reproduce the
<br>
crash now...
<br>
<p>Regards,
<br>
Andrew Senin.
<br>
<p>On Thu, Jan 19, 2012 at 12:05 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jumping in pretty late in this thread here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that it's failing in opal_hwloc_base_close(). &#160;That's a little worrysome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do see an odd path through the hwloc initialization that *could* cause an error during finalization -- but it would involve you setting an invalid value for an MCA parameter. &#160;Are you setting hwloc_base_mem_bind_failure_action or
</span><br>
<span class="quotelev1">&gt; hwloc_base_mem_alloc_policy, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2012, at 1:56 PM, Andrew Senin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I've found a bug in the hear revision of the OpenMPI 1.5
</span><br>
<span class="quotelev2">&gt;&gt; branch. If it is configured with --disable-debug it crashes in
</span><br>
<span class="quotelev2">&gt;&gt; finalize on the hello_c.c example. Did I miss something out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure options:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
</span><br>
<span class="quotelev2">&gt;&gt; --disable-debug --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Runtime command and output:
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:../lib ./mpirun --mca btl openib,self
</span><br>
<span class="quotelev2">&gt;&gt; --npernode 1 --host mir1,mir2 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] Failing at address: 0xe8
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] Failing at address: 0xe8
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 0] /lib64/libpthread.so.0() [0x390d20f4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588cee6a8]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588cee700]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588d1beb2]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588c81eb5]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588c217c3]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f4588c39959]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x390ca1ec5d]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev2">&gt;&gt; [mir1:05542] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 0] /lib64/libpthread.so.0() [0x3a6dc0f4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f31d6a8]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f31d700]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f34aeb2]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f2b0eb5]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f2507c3]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f409f268959]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3a6d41ec5d]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev2">&gt;&gt; [mir2:10218] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 5542 on node mir1 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Andrew Senin
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18205.php">Shiqing Fan: "Re: [OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18203.php">David Race: "[OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Reply:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
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
