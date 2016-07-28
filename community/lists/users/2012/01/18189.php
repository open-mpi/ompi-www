<?
$subject_val = "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:19:21 2012" -->
<!-- isoreceived="20120117151921" -->
<!-- sent="Tue, 17 Jan 2012 19:19:16 +0400" -->
<!-- isosent="20120117151916" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision" -->
<!-- id="CAN7Cqre8zrao4DpysE8c1a+r=_XjrD1M2sW7SDNTMLtzHf16Ww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F72D4D9D-095B-4556-BF3F-B0C9675F9ACC_at_gmail.com" -->
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
<strong>Date:</strong> 2012-01-17 10:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>In reply to:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
slurm 2.3.2
<br>
<p>-Andrew
<br>
<p>On Tue, Jan 17, 2012 at 6:05 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What version of slurm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 4:36 AM, Andrew Senin &lt;andrew.senin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want Mike can provide access to the lab with RHEL 6.0 where we
</span><br>
<span class="quotelev2">&gt;&gt; see the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Andrew Senin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 17, 2012 at 9:59 AM, Mike Dubman &lt;mike.ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It happens for us on RHEL 6.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jan 17, 2012 at 3:46 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I'm afraid I can't replicate your report. It runs fine for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 16, 2012, at 4:25 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmmm....probably a bug. I haven't tested that branch yet. Will take a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; look.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 16, 2012, at 11:56 AM, Andrew Senin &lt;andrew.senin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think I've found a bug in the hear revision of the OpenMPI 1.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch. If it is configured with --disable-debug it crashes in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; finalize on the hello_c.c example. Did I miss something out?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Configure options:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --disable-debug --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Runtime command and output:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:../lib ./mpirun --mca btl openib,self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --npernode 1 --host mir1,mir2 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] Failing at address: 0xe8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] Failing at address: 0xe8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 0] /lib64/libpthread.so.0() [0x390d20f4c0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588cee6a8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588cee700]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588d1beb2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588c81eb5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588c217c3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f4588c39959]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x390ca1ec5d]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir1:05542] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 0] /lib64/libpthread.so.0() [0x3a6dc0f4c0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(+0x1346a8)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f31d6a8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_hwloc_base_close+0x32)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f31d700]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(opal_finalize+0x73)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f34aeb2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(orte_finalize+0xfe)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f2b0eb5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(ompi_mpi_finalize+0x67a)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f2507c3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /hpc/home/USERS/senina/projects/distribs/openmpi-svn_v1.5/install/lib/libmpi.so.1(PMPI_Finalize+0x59)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x7f409f268959]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 7] ./hello(main+0x69) [0x4008fd]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0x3a6d41ec5d]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] [ 9] ./hello() [0x4007d9]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mir2:10218] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 5542 on node mir1 exited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Andrew Senin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18190.php">MM: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>In reply to:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18201.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
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
