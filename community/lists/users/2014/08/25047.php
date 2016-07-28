<?
$subject_val = "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 15:09:40 2014" -->
<!-- isoreceived="20140816190940" -->
<!-- sent="Sat, 16 Aug 2014 15:09:16 -0400" -->
<!-- isosent="20140816190916" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1" -->
<!-- id="CAFb48S-omgRCZnTprwfTNQummYY1ektsygeZC3xGKfc_m-YKDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CB0861A5-C322-42E2-90F9-9F9556B934BA_at_cisco.com" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-16 15:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25048.php">Rio Yokota: "[OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I've tried moving the backing file and it doesn't matter. I can say that
<br>
PGI 14.7 + Open MPI 1.8.1 does not show this issue. I can run that on 96
<br>
cores just fine. Heck, I've run it on a few hundred.
<br>
<p>As for the 96, they are either on 8 Westmere nodes (8 nodes with 2 6-core
<br>
sockets) or 6 Sandy Bridge nodes (6 nodes with 2 8-core sockets). I think
<br>
each set is on a different Infiniband fabric, but I'm not sure of that.
<br>
However, since the PGI 14.7/Open MPI 1.8.1 works just fine on the exact
<br>
same sets of nodes (grabbed via an interactive SLURM job), I can't see how
<br>
the Infiniband fabric would matter.
<br>
<p>I also tried various combinations of:
<br>
<p>&nbsp;&nbsp;mpirun --np
<br>
&nbsp;&nbsp;mpirun --map-by core -np
<br>
&nbsp;&nbsp;mpirun --map-by socket -np
<br>
<p>and maybe a few -bind-to as well all with --report-bindings on to make sure
<br>
it was doing what I expect, and it was. It wasn't putting 96 processes on a
<br>
single node, for example, or all on the same socket or core by some freak
<br>
accident.
<br>
<p>The only difference between the Open MPI installs are the compilers they
<br>
were built with (I'm pretty sure the admins just downloaded the source
<br>
once). Looking at &quot;mpif90 -showme&quot; I can see that the PGI 14.7 compile
<br>
built the mpi_f90 and mpi modules while it looks like the GCC 4.9.1 did
<br>
not, but our main code and this reproducer only use mpif.h, so that
<br>
shouldn't matter.
<br>
<p>Matt
<br>
<p><p>On Sat, Aug 16, 2014 at 7:33 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Have you tried moving your shared memory backing file directory, like the
</span><br>
<span class="quotelev1">&gt; warning message suggests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't seen a shared memory file on a network share cause correctness
</span><br>
<span class="quotelev1">&gt; issues before (just performance issues), but I could see how that could be
</span><br>
<span class="quotelev1">&gt; in the realm of possibility...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, are you running 96 processes on a single machine, or spread across
</span><br>
<span class="quotelev1">&gt; multiple machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that Open MPI 1.8.x binds each MPI process to a core by default, so
</span><br>
<span class="quotelev1">&gt; if you're oversubscribing the machine, it could be fairly disastrous...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2014, at 1:29 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I work on a large climate model called GEOS-5 and we've recently managed
</span><br>
<span class="quotelev1">&gt; to get it to compile with gfortran 4.9.1 (our usual compilers are Intel and
</span><br>
<span class="quotelev1">&gt; PGI for performance). In doing so, we asked our admins to install Open MPI
</span><br>
<span class="quotelev1">&gt; 1.8.1 as the MPI stack instead of MVAPICH2 2.0 mainly because we figure the
</span><br>
<span class="quotelev1">&gt; gfortran port is more geared to a desktop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, the model builds just fine but when we run it, it stalls in our
</span><br>
<span class="quotelev1">&gt; &quot;History&quot; component whose job is to write out netCDF files of output. The
</span><br>
<span class="quotelev1">&gt; odd thing is, though, this stall seems to happen more on our Sandy Bridge
</span><br>
<span class="quotelev1">&gt; nodes than on our Westmere nodes, but both hang.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A colleague has made a single-file code that emulates our History
</span><br>
<span class="quotelev1">&gt; component (the MPI traffic part) that we've used to report bugs to MVAPICH
</span><br>
<span class="quotelev1">&gt; and I asked him to try it with this issue and it seems to duplicate it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To wit, a &quot;successful&quot; run of the code is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1003) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Open MPI will create a shared memory backing file in a
</span><br>
<span class="quotelev2">&gt; &gt; directory that appears to be mounted on a network filesystem.
</span><br>
<span class="quotelev2">&gt; &gt; Creating the shared memory backup file on a network file system, such
</span><br>
<span class="quotelev2">&gt; &gt; as NFS or Lustre is not recommended -- it may cause excessive network
</span><br>
<span class="quotelev2">&gt; &gt; traffic to your file servers and/or cause shared memory traffic in
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI to be much slower than expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You may want to check what the typical temporary directory is on your
</span><br>
<span class="quotelev2">&gt; &gt; node.  Possible sources of the location of this temporary directory
</span><br>
<span class="quotelev2">&gt; &gt; include the $TEMPDIR, $TEMP, and $TMP environment variables.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note, too, that system administrators can set a list of filesystems
</span><br>
<span class="quotelev2">&gt; &gt; where Open MPI is disallowed from creating temporary files by setting
</span><br>
<span class="quotelev2">&gt; &gt; the MCA parameter &quot;orte_no_session_dir&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Local host: borg01s026
</span><br>
<span class="quotelev2">&gt; &gt;   Fileame:
</span><br>
<span class="quotelev1">&gt; /gpfsm/dnb31/tdirs/pbs/slurm.2202701.mathomp4/openmpi-sessions-mathomp4_at_borg01s026_0
</span><br>
<span class="quotelev1">&gt; /60464/1/shared_mem_pool.borg01s026
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can set the MCA paramter shmem_mmap_enable_nfs_warning to 0 to
</span><br>
<span class="quotelev2">&gt; &gt; disable this message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  nx:            4
</span><br>
<span class="quotelev2">&gt; &gt;  ny:           24
</span><br>
<span class="quotelev2">&gt; &gt;  comm size is           96
</span><br>
<span class="quotelev2">&gt; &gt;  local array sizes are          12          12
</span><br>
<span class="quotelev2">&gt; &gt;  filling local arrays
</span><br>
<span class="quotelev2">&gt; &gt;  creating requests
</span><br>
<span class="quotelev2">&gt; &gt;  igather
</span><br>
<span class="quotelev2">&gt; &gt;  before collective wait
</span><br>
<span class="quotelev2">&gt; &gt;  after collective wait
</span><br>
<span class="quotelev2">&gt; &gt;  result is            1   1.00000000       1.00000000
</span><br>
<span class="quotelev2">&gt; &gt;  result is            2   1.41421354       1.41421354
</span><br>
<span class="quotelev2">&gt; &gt;  result is            3   1.73205078       1.73205078
</span><br>
<span class="quotelev2">&gt; &gt;  result is            4   2.00000000       2.00000000
</span><br>
<span class="quotelev2">&gt; &gt;  result is            5   2.23606801       2.23606801
</span><br>
<span class="quotelev2">&gt; &gt;  result is            6   2.44948983       2.44948983
</span><br>
<span class="quotelev2">&gt; &gt;  result is            7   2.64575124       2.64575124
</span><br>
<span class="quotelev2">&gt; &gt;  result is            8   2.82842708       2.82842708
</span><br>
<span class="quotelev2">&gt; &gt; ...snip...
</span><br>
<span class="quotelev2">&gt; &gt;  result is          939   30.6431065       30.6431065
</span><br>
<span class="quotelev2">&gt; &gt;  result is          940   30.6594200       30.6594200
</span><br>
<span class="quotelev2">&gt; &gt;  result is          941   30.6757240       30.6757240
</span><br>
<span class="quotelev2">&gt; &gt;  result is          942   30.6920185       30.6920185
</span><br>
<span class="quotelev2">&gt; &gt;  result is          943   30.7083054       30.7083054
</span><br>
<span class="quotelev2">&gt; &gt;  result is          944   30.7245827       30.7245827
</span><br>
<span class="quotelev2">&gt; &gt;  result is          945   30.7408524       30.7408524
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where the second and third columns of numbers are just the square root
</span><br>
<span class="quotelev1">&gt; of the first.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, often, the runs do this (note I'm removing the
</span><br>
<span class="quotelev1">&gt; shmem_mmap_enable_nfs_warning message for sanity's sake from these copy and
</span><br>
<span class="quotelev1">&gt; pastes):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1196) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt;  nx:            4
</span><br>
<span class="quotelev2">&gt; &gt;  ny:           24
</span><br>
<span class="quotelev2">&gt; &gt;  comm size is           96
</span><br>
<span class="quotelev2">&gt; &gt;  local array sizes are          12          12
</span><br>
<span class="quotelev2">&gt; &gt;  filling local arrays
</span><br>
<span class="quotelev2">&gt; &gt;  creating requests
</span><br>
<span class="quotelev2">&gt; &gt;  igather
</span><br>
<span class="quotelev2">&gt; &gt;  before collective wait
</span><br>
<span class="quotelev2">&gt; &gt;  after collective wait
</span><br>
<span class="quotelev2">&gt; &gt;  result is            1   1.00000000       1.00000000
</span><br>
<span class="quotelev2">&gt; &gt;  result is            2   1.41421354       1.41421354
</span><br>
<span class="quotelev2">&gt; &gt; [borg01w021:09264] 89 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev2">&gt; &gt; [borg01w021:09264] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where it prints out a few results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The worst case is most often seen on Sandy Bridge and is the most often
</span><br>
<span class="quotelev1">&gt; failure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1197) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt;  nx:            4
</span><br>
<span class="quotelev2">&gt; &gt;  ny:           24
</span><br>
<span class="quotelev2">&gt; &gt;  comm size is           96
</span><br>
<span class="quotelev2">&gt; &gt;  local array sizes are          12          12
</span><br>
<span class="quotelev2">&gt; &gt;  filling local arrays
</span><br>
<span class="quotelev2">&gt; &gt;  creating requests
</span><br>
<span class="quotelev2">&gt; &gt;  igather
</span><br>
<span class="quotelev2">&gt; &gt;  before collective wait
</span><br>
<span class="quotelev2">&gt; &gt; [borg01w021:09367] 89 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev2">&gt; &gt; [borg01w021:09367] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This halt best compares to our full model code. It halts much at the
</span><br>
<span class="quotelev1">&gt; same &quot;place&quot; around a collective wait.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, if I setenv OMPI_MCA_orte_base_help_aggregate 0 (to see all
</span><br>
<span class="quotelev1">&gt; help/error messages) I usually just &quot;hang&quot; with no error message at all
</span><br>
<span class="quotelev1">&gt; (additionally turning off the warning):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1203) $ setenv OMPI_MCA_orte_base_help_aggregate 0
</span><br>
<span class="quotelev2">&gt; &gt; (1203) $ setenv OMPI_MCA_shmem_mmap_enable_nfs_warning 0
</span><br>
<span class="quotelev2">&gt; &gt; (1204) $ mpirun -np 96 ./mpi_reproducer.x 4 24
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt;  nx:            4
</span><br>
<span class="quotelev2">&gt; &gt;  ny:           24
</span><br>
<span class="quotelev2">&gt; &gt;  comm size is           96
</span><br>
<span class="quotelev2">&gt; &gt;  local array sizes are          12          12
</span><br>
<span class="quotelev2">&gt; &gt;  filling local arrays
</span><br>
<span class="quotelev2">&gt; &gt;  creating requests
</span><br>
<span class="quotelev2">&gt; &gt;  igather
</span><br>
<span class="quotelev2">&gt; &gt;  before collective wait
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note, this problem doesn't seem to appear at lower number of processes
</span><br>
<span class="quotelev1">&gt; (16, 24, 32) but does seem pretty consistent at 96, especially on Sandy
</span><br>
<span class="quotelev1">&gt; Bridges.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, yes, we get that weird srun.slurm warning but we always seem to
</span><br>
<span class="quotelev1">&gt; get that (Open MPI, MVAPICH) so while our admins are trying to correct
</span><br>
<span class="quotelev1">&gt; that, at present it is not our worry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI stack was compiled with (per our admins):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export CFLAGS=&quot;-fPIC -m64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export CXXFLAGS=&quot;-fPIC -m64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FCFLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export F90FLAGS=&quot;-fPIC&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../configure --with-slurm --disable-wrapper-rpath --enable-shared
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mca-no-build=btl-usnic --prefix=${PREFIX}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output of &quot;ompi_info --all&quot; is found:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out">https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reproducer code can be found here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90">https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reproducer is easily built with just 'mpif90' and to run it:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np NPROCS ./mpi_reproducer.x NX NY
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where NX*NY has to equal NPROCS and it's best to keep them even numbers.
</span><br>
<span class="quotelev1">&gt; (There might be a few more restrictions and the code will die if you
</span><br>
<span class="quotelev1">&gt; violate them.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matt Thompson          SSAI, Sr Software Test Engr
</span><br>
<span class="quotelev2">&gt; &gt; NASA GSFC, Global Modeling and Assimilation Office
</span><br>
<span class="quotelev2">&gt; &gt; Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD 20771
</span><br>
<span class="quotelev2">&gt; &gt; Phone: 301-614-6712              Fax: 301-614-6246
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25022.php">http://www.open-mpi.org/community/lists/users/2014/08/25022.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25045.php">http://www.open-mpi.org/community/lists/users/2014/08/25045.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25048.php">Rio Yokota: "[OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25046.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
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
