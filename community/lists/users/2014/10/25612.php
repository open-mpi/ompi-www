<?
$subject_val = "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 10:59:44 2014" -->
<!-- isoreceived="20141027145944" -->
<!-- sent="Mon, 27 Oct 2014 08:59:44 -0600" -->
<!-- isosent="20141027145944" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code" -->
<!-- id="20141027145944.GA82773_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E1736260B_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 10:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25613.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25611.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25611.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 27, 2014 at 02:15:45PM +0000, Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is  the system response on the login node of cluster5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cluster5:~/dat&gt; mpirun -np 1 df -h
</span><br>
<span class="quotelev1">&gt; Filesystem      Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; /dev/sda31      228G  5.6G  211G   3% /
</span><br>
<span class="quotelev1">&gt; udev             32G  232K   32G   1% /dev
</span><br>
<span class="quotelev1">&gt; tmpfs            32G     0   32G   0% /dev/shm
</span><br>
<span class="quotelev1">&gt; /dev/sda11      291M   39M  237M  15% /boot
</span><br>
<span class="quotelev1">&gt; /dev/gpfs10     495T  280T  216T  57% /gpfs10
</span><br>
<span class="quotelev1">&gt; /dev/loop1      3.2G  3.2G     0 100% /media
</span><br>
<span class="quotelev1">&gt; cluster5:~/dat&gt; mpirun -np 1 df -hi
</span><br>
<span class="quotelev1">&gt; Filesystem     Inodes IUsed IFree IUse% Mounted on
</span><br>
<span class="quotelev1">&gt; /dev/sda31        15M  253K   15M    2% /
</span><br>
<span class="quotelev1">&gt; udev                0     0     0     - /dev
</span><br>
<span class="quotelev1">&gt; tmpfs            7.9M     3  7.9M    1% /dev/shm
</span><br>
<span class="quotelev1">&gt; /dev/sda11        76K    41   76K    1% /boot
</span><br>
<span class="quotelev1">&gt; /dev/gpfs10      128M   67M   62M   53% /gpfs10
</span><br>
<span class="quotelev1">&gt; /dev/loop1          0     0     0     - /media
</span><br>
<span class="quotelev1">&gt; cluster5:~/dat&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this the system response on the compute node of cluster5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rachner_at_r5i5n13:~&gt;  mpirun -np 1 df -h
</span><br>
<span class="quotelev1">&gt; Filesystem      Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; tmpfs            63G  1.4G   62G   3% /
</span><br>
<span class="quotelev1">&gt; udev             63G   92K   63G   1% /dev
</span><br>
<span class="quotelev1">&gt; tmpfs            63G     0   63G   0% /dev/shm
</span><br>
<span class="quotelev1">&gt; tmpfs           150M   12M  139M   8% /tmp
</span><br>
<p>This is the problem right here. /tmp can only be used to back a total of
<br>
139M of shared memory. /dev/shm can back up to 63G so using that will
<br>
solve your problem.
<br>
<p>Try setting adding -mca shmem_mmap_relocate_backing_file true to your
<br>
mpirun line or add shmem_mmap_relocate_backing_file = true to your
<br>
installation's &lt;openmpi_prefix&gt;/etc/openmpi-mca-params.conf
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25612/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25613.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<li><strong>Previous message:</strong> <a href="25611.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25611.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] WG: Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
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
