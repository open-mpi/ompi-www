<?
$subject_val = "[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 13:29:46 2014" -->
<!-- isoreceived="20140814172946" -->
<!-- sent="Thu, 14 Aug 2014 13:29:25 -0400" -->
<!-- isosent="20140814172925" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1" -->
<!-- id="CAFb48S_oYQvAQSgjDMzLY171QLv6vHBrV-J=DBGuWr7_-T2FgA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 13:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25021.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI Users,
<br>
<p>I work on a large climate model called GEOS-5 and we've recently managed to
<br>
get it to compile with gfortran 4.9.1 (our usual compilers are Intel and
<br>
PGI for performance). In doing so, we asked our admins to install Open MPI
<br>
1.8.1 as the MPI stack instead of MVAPICH2 2.0 mainly because we figure the
<br>
gfortran port is more geared to a desktop.
<br>
<p>So, the model builds just fine but when we run it, it stalls in our
<br>
&quot;History&quot; component whose job is to write out netCDF files of output. The
<br>
odd thing is, though, this stall seems to happen more on our Sandy Bridge
<br>
nodes than on our Westmere nodes, but both hang.
<br>
<p>A colleague has made a single-file code that emulates our History component
<br>
(the MPI traffic part) that we've used to report bugs to MVAPICH and I
<br>
asked him to try it with this issue and it seems to duplicate it.
<br>
<p>To wit, a &quot;successful&quot; run of the code is:
<br>
<p>(1003) $ mpirun -np 96 ./mpi_reproducer.x 4 24
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
--------------------------------------------------------------------------
<br>
WARNING: Open MPI will create a shared memory backing file in a
<br>
directory that appears to be mounted on a network filesystem.
<br>
Creating the shared memory backup file on a network file system, such
<br>
as NFS or Lustre is not recommended -- it may cause excessive network
<br>
traffic to your file servers and/or cause shared memory traffic in
<br>
Open MPI to be much slower than expected.
<br>
<p>You may want to check what the typical temporary directory is on your
<br>
node.  Possible sources of the location of this temporary directory
<br>
include the $TEMPDIR, $TEMP, and $TMP environment variables.
<br>
<p>Note, too, that system administrators can set a list of filesystems
<br>
where Open MPI is disallowed from creating temporary files by setting
<br>
the MCA parameter &quot;orte_no_session_dir&quot;.
<br>
<p>&nbsp;&nbsp;Local host: borg01s026
<br>
&nbsp;&nbsp;Fileame:
<br>
&nbsp;/gpfsm/dnb31/tdirs/pbs/slurm.2202701.mathomp4/openmpi-sessions-mathomp4_at_borg01s026_0
<br>
/60464/1/shared_mem_pool.borg01s026
<br>
<p>You can set the MCA paramter shmem_mmap_enable_nfs_warning to 0 to
<br>
disable this message.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;nx:            4
<br>
&nbsp;ny:           24
<br>
&nbsp;comm size is           96
<br>
&nbsp;local array sizes are          12          12
<br>
&nbsp;filling local arrays
<br>
&nbsp;creating requests
<br>
&nbsp;igather
<br>
&nbsp;before collective wait
<br>
&nbsp;after collective wait
<br>
&nbsp;result is            1   1.00000000       1.00000000
<br>
&nbsp;result is            2   1.41421354       1.41421354
<br>
&nbsp;result is            3   1.73205078       1.73205078
<br>
&nbsp;result is            4   2.00000000       2.00000000
<br>
&nbsp;result is            5   2.23606801       2.23606801
<br>
&nbsp;result is            6   2.44948983       2.44948983
<br>
&nbsp;result is            7   2.64575124       2.64575124
<br>
&nbsp;result is            8   2.82842708       2.82842708
<br>
...snip...
<br>
&nbsp;result is          939   30.6431065       30.6431065
<br>
&nbsp;result is          940   30.6594200       30.6594200
<br>
&nbsp;result is          941   30.6757240       30.6757240
<br>
&nbsp;result is          942   30.6920185       30.6920185
<br>
&nbsp;result is          943   30.7083054       30.7083054
<br>
&nbsp;result is          944   30.7245827       30.7245827
<br>
&nbsp;result is          945   30.7408524       30.7408524
<br>
<p>Where the second and third columns of numbers are just the square root of
<br>
the first.
<br>
<p>But, often, the runs do this (note I'm removing the
<br>
shmem_mmap_enable_nfs_warning message for sanity's sake from these copy and
<br>
pastes):
<br>
<p>(1196) $ mpirun -np 96 ./mpi_reproducer.x 4 24
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
&nbsp;nx:            4
<br>
&nbsp;ny:           24
<br>
&nbsp;comm size is           96
<br>
&nbsp;local array sizes are          12          12
<br>
&nbsp;filling local arrays
<br>
&nbsp;creating requests
<br>
&nbsp;igather
<br>
&nbsp;before collective wait
<br>
&nbsp;after collective wait
<br>
&nbsp;result is            1   1.00000000       1.00000000
<br>
&nbsp;result is            2   1.41421354       1.41421354
<br>
[borg01w021:09264] 89 more processes have sent help message
<br>
help-opal-shmem-mmap.txt / mmap on nfs
<br>
[borg01w021:09264] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>where it prints out a few results.
<br>
<p>The worst case is most often seen on Sandy Bridge and is the most often
<br>
failure:
<br>
<p>(1197) $ mpirun -np 96 ./mpi_reproducer.x 4 24
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
&nbsp;nx:            4
<br>
&nbsp;ny:           24
<br>
&nbsp;comm size is           96
<br>
&nbsp;local array sizes are          12          12
<br>
&nbsp;filling local arrays
<br>
&nbsp;creating requests
<br>
&nbsp;igather
<br>
&nbsp;before collective wait
<br>
[borg01w021:09367] 89 more processes have sent help message
<br>
help-opal-shmem-mmap.txt / mmap on nfs
<br>
[borg01w021:09367] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>This halt best compares to our full model code. It halts much at the same
<br>
&quot;place&quot; around a collective wait.
<br>
<p>Finally, if I setenv OMPI_MCA_orte_base_help_aggregate 0 (to see all
<br>
help/error messages) I usually just &quot;hang&quot; with no error message at all
<br>
(additionally turning off the warning):
<br>
<p>(1203) $ setenv OMPI_MCA_orte_base_help_aggregate 0
<br>
(1203) $ setenv OMPI_MCA_shmem_mmap_enable_nfs_warning 0
<br>
(1204) $ mpirun -np 96 ./mpi_reproducer.x 4 24
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
&nbsp;nx:            4
<br>
&nbsp;ny:           24
<br>
&nbsp;comm size is           96
<br>
&nbsp;local array sizes are          12          12
<br>
&nbsp;filling local arrays
<br>
&nbsp;creating requests
<br>
&nbsp;igather
<br>
&nbsp;before collective wait
<br>
<p>Note, this problem doesn't seem to appear at lower number of processes (16,
<br>
24, 32) but does seem pretty consistent at 96, especially on Sandy Bridges.
<br>
<p>Also, yes, we get that weird srun.slurm warning but we always seem to get
<br>
that (Open MPI, MVAPICH) so while our admins are trying to correct that, at
<br>
present it is not our worry.
<br>
<p>The MPI stack was compiled with (per our admins):
<br>
<p>export CFLAGS=&quot;-fPIC -m64&quot;
<br>
export CXXFLAGS=&quot;-fPIC -m64&quot;
<br>
export FFLAGS=&quot;-fPIC&quot;
<br>
export FCFLAGS=&quot;-fPIC&quot;
<br>
export F90FLAGS=&quot;-fPIC&quot;
<br>
<p>export LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot;
<br>
export CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot;
<br>
<p>export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/nlocal/slurm/2.6.3/lib64
<br>
<p>../configure --with-slurm --disable-wrapper-rpath --enable-shared
<br>
--enable-mca-no-build=btl-usnic --prefix=${PREFIX}
<br>
<p>The output of &quot;ompi_info --all&quot; is found:
<br>
<p>&nbsp;&nbsp;<a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out">https://gist.github.com/mathomp4/301723165efbbb616184#file-ompi_info-out</a>
<br>
<p>The reproducer code can be found here:
<br>
<p><p><a href="https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90">https://gist.github.com/mathomp4/301723165efbbb616184#file-mpi_reproducer-f90</a>
<br>
<p>The reproducer is easily built with just 'mpif90' and to run it:
<br>
<p>&nbsp;&nbsp;mpirun -np NPROCS ./mpi_reproducer.x NX NY
<br>
<p>where NX*NY has to equal NPROCS and it's best to keep them even numbers.
<br>
(There might be a few more restrictions and the code will die if you
<br>
violate them.)
<br>
<p>Thanks,
<br>
Matt Thompson
<br>
<p><pre>
-- 
Matt Thompson          SSAI, Sr Software Test Engr
NASA GSFC, Global Modeling and Assimilation Office
Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD 20771
Phone: 301-614-6712              Fax: 301-614-6246
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25021.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
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
