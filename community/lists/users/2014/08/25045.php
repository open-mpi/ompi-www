<?
$subject_val = "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 07:33:12 2014" -->
<!-- isoreceived="20140816113312" -->
<!-- sent="Sat, 16 Aug 2014 11:33:11 +0000" -->
<!-- isosent="20140816113311" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1" -->
<!-- id="CB0861A5-C322-42E2-90F9-9F9556B934BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S_oYQvAQSgjDMzLY171QLv6vHBrV-J=DBGuWr7_-T2FgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-16 07:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25022.php">Matt Thompson: "[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried moving your shared memory backing file directory, like the warning message suggests?
<br>
<p>I haven't seen a shared memory file on a network share cause correctness issues before (just performance issues), but I could see how that could be in the realm of possibility...
<br>
<p>Also, are you running 96 processes on a single machine, or spread across multiple machines?
<br>
<p>Note that Open MPI 1.8.x binds each MPI process to a core by default, so if you're oversubscribing the machine, it could be fairly disastrous...?
<br>
<p><p>On Aug 14, 2014, at 1:29 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I work on a large climate model called GEOS-5 and we've recently managed to get it to compile with gfortran 4.9.1 (our usual compilers are Intel and PGI for performance). In doing so, we asked our admins to install Open MPI 1.8.1 as the MPI stack instead of MVAPICH2 2.0 mainly because we figure the gfortran port is more geared to a desktop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the model builds just fine but when we run it, it stalls in our &quot;History&quot; component whose job is to write out netCDF files of output. The odd thing is, though, this stall seems to happen more on our Sandy Bridge nodes than on our Westmere nodes, but both hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A colleague has made a single-file code that emulates our History component (the MPI traffic part) that we've used to report bugs to MVAPICH and I asked him to try it with this issue and it seems to duplicate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To wit, a &quot;successful&quot; run of the code is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1003) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Open MPI will create a shared memory backing file in a
</span><br>
<span class="quotelev1">&gt; directory that appears to be mounted on a network filesystem.
</span><br>
<span class="quotelev1">&gt; Creating the shared memory backup file on a network file system, such
</span><br>
<span class="quotelev1">&gt; as NFS or Lustre is not recommended -- it may cause excessive network
</span><br>
<span class="quotelev1">&gt; traffic to your file servers and/or cause shared memory traffic in
</span><br>
<span class="quotelev1">&gt; Open MPI to be much slower than expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may want to check what the typical temporary directory is on your
</span><br>
<span class="quotelev1">&gt; node.  Possible sources of the location of this temporary directory
</span><br>
<span class="quotelev1">&gt; include the $TEMPDIR, $TEMP, and $TMP environment variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, too, that system administrators can set a list of filesystems
</span><br>
<span class="quotelev1">&gt; where Open MPI is disallowed from creating temporary files by setting
</span><br>
<span class="quotelev1">&gt; the MCA parameter &quot;orte_no_session_dir&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host: borg01s026
</span><br>
<span class="quotelev1">&gt;   Fileame:    /gpfsm/dnb31/tdirs/pbs/slurm.2202701.mathomp4/openmpi-sessions-mathomp4_at_borg01s026_0/60464/1/shared_mem_pool.borg01s026
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can set the MCA paramter shmem_mmap_enable_nfs_warning to 0 to
</span><br>
<span class="quotelev1">&gt; disable this message.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  nx:            4
</span><br>
<span class="quotelev1">&gt;  ny:           24
</span><br>
<span class="quotelev1">&gt;  comm size is           96
</span><br>
<span class="quotelev1">&gt;  local array sizes are          12          12
</span><br>
<span class="quotelev1">&gt;  filling local arrays
</span><br>
<span class="quotelev1">&gt;  creating requests
</span><br>
<span class="quotelev1">&gt;  igather
</span><br>
<span class="quotelev1">&gt;  before collective wait
</span><br>
<span class="quotelev1">&gt;  after collective wait
</span><br>
<span class="quotelev1">&gt;  result is            1   1.00000000       1.00000000    
</span><br>
<span class="quotelev1">&gt;  result is            2   1.41421354       1.41421354    
</span><br>
<span class="quotelev1">&gt;  result is            3   1.73205078       1.73205078    
</span><br>
<span class="quotelev1">&gt;  result is            4   2.00000000       2.00000000    
</span><br>
<span class="quotelev1">&gt;  result is            5   2.23606801       2.23606801    
</span><br>
<span class="quotelev1">&gt;  result is            6   2.44948983       2.44948983    
</span><br>
<span class="quotelev1">&gt;  result is            7   2.64575124       2.64575124    
</span><br>
<span class="quotelev1">&gt;  result is            8   2.82842708       2.82842708    
</span><br>
<span class="quotelev1">&gt; ...snip...
</span><br>
<span class="quotelev1">&gt;  result is          939   30.6431065       30.6431065    
</span><br>
<span class="quotelev1">&gt;  result is          940   30.6594200       30.6594200    
</span><br>
<span class="quotelev1">&gt;  result is          941   30.6757240       30.6757240    
</span><br>
<span class="quotelev1">&gt;  result is          942   30.6920185       30.6920185    
</span><br>
<span class="quotelev1">&gt;  result is          943   30.7083054       30.7083054    
</span><br>
<span class="quotelev1">&gt;  result is          944   30.7245827       30.7245827    
</span><br>
<span class="quotelev1">&gt;  result is          945   30.7408524       30.7408524    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where the second and third columns of numbers are just the square root of the first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, often, the runs do this (note I'm removing the shmem_mmap_enable_nfs_warning message for sanity's sake from these copy and pastes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1196) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt;  nx:            4
</span><br>
<span class="quotelev1">&gt;  ny:           24
</span><br>
<span class="quotelev1">&gt;  comm size is           96
</span><br>
<span class="quotelev1">&gt;  local array sizes are          12          12
</span><br>
<span class="quotelev1">&gt;  filling local arrays
</span><br>
<span class="quotelev1">&gt;  creating requests
</span><br>
<span class="quotelev1">&gt;  igather
</span><br>
<span class="quotelev1">&gt;  before collective wait
</span><br>
<span class="quotelev1">&gt;  after collective wait
</span><br>
<span class="quotelev1">&gt;  result is            1   1.00000000       1.00000000    
</span><br>
<span class="quotelev1">&gt;  result is            2   1.41421354       1.41421354    
</span><br>
<span class="quotelev1">&gt; [borg01w021:09264] 89 more processes have sent help message help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev1">&gt; [borg01w021:09264] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where it prints out a few results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The worst case is most often seen on Sandy Bridge and is the most often failure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1197) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt;  nx:            4
</span><br>
<span class="quotelev1">&gt;  ny:           24
</span><br>
<span class="quotelev1">&gt;  comm size is           96
</span><br>
<span class="quotelev1">&gt;  local array sizes are          12          12
</span><br>
<span class="quotelev1">&gt;  filling local arrays
</span><br>
<span class="quotelev1">&gt;  creating requests
</span><br>
<span class="quotelev1">&gt;  igather
</span><br>
<span class="quotelev1">&gt;  before collective wait
</span><br>
<span class="quotelev1">&gt; [borg01w021:09367] 89 more processes have sent help message help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev1">&gt; [borg01w021:09367] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This halt best compares to our full model code. It halts much at the same &quot;place&quot; around a collective wait.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, if I setenv OMPI_MCA_orte_base_help_aggregate 0 (to see all help/error messages) I usually just &quot;hang&quot; with no error message at all (additionally turning off the warning):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1203) $ setenv OMPI_MCA_orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt; (1203) $ setenv OMPI_MCA_shmem_mmap_enable_nfs_warning 0
</span><br>
<span class="quotelev1">&gt; (1204) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt;  nx:            4
</span><br>
<span class="quotelev1">&gt;  ny:           24
</span><br>
<span class="quotelev1">&gt;  comm size is           96
</span><br>
<span class="quotelev1">&gt;  local array sizes are          12          12
</span><br>
<span class="quotelev1">&gt;  filling local arrays
</span><br>
<span class="quotelev1">&gt;  creating requests
</span><br>
<span class="quotelev1">&gt;  igather
</span><br>
<span class="quotelev1">&gt;  before collective wait
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, this problem doesn't seem to appear at lower number of processes (16, 24, 32) but does seem pretty consistent at 96, especially on Sandy Bridges.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, yes, we get that weird srun.slurm warning but we always seem to get that (Open MPI, MVAPICH) so while our admins are trying to correct that, at present it is not our worry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI stack was compiled with (per our admins):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-fPIC -m64&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-fPIC -m64&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev1">&gt; export F90FLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot;
</span><br>
<span class="quotelev1">&gt; export CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure --with-slurm --disable-wrapper-rpath --enable-shared
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-usnic --prefix=${PREFIX}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of &quot;ompi_info --all&quot; is found:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out">https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reproducer code can be found here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90">https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reproducer is easily built with just 'mpif90' and to run it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun -np NPROCS ./mpi_reproducer.x NX NY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where NX*NY has to equal NPROCS and it's best to keep them even numbers. (There might be a few more restrictions and the code will die if you violate them.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson          SSAI, Sr Software Test Engr
</span><br>
<span class="quotelev1">&gt; NASA GSFC, Global Modeling and Assimilation Office
</span><br>
<span class="quotelev1">&gt; Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD 20771
</span><br>
<span class="quotelev1">&gt; Phone: 301-614-6712              Fax: 301-614-6246 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25022.php">http://www.open-mpi.org/community/lists/users/2014/08/25022.php</a>
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
<li><strong>Next message:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25022.php">Matt Thompson: "[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
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
