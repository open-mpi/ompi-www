<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 11:27:29 2010" -->
<!-- isoreceived="20100713152729" -->
<!-- sent="Tue, 13 Jul 2010 17:28:08 +0200" -->
<!-- isosent="20100713152808" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="201007131728.08622.eg_at_fft.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007121053.58254.eg_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 11:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13624.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed to switch to the basic linear algorithm.
<br>
Anyway whatever the algorithm used, the segmentation fault remains.
<br>
<p>Does anyone could give some advice on ways to diagnose the issue I'm facing ?
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p>On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm focusing on the MPI_Bcast routine that seems to randomly segfault when
</span><br>
<span class="quotelev1">&gt; using the openib btl. I'd like to know if there is any way to make OpenMPI
</span><br>
<span class="quotelev1">&gt; switch to a different algorithm than the default one being selected for
</span><br>
<span class="quotelev1">&gt; MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm observing a random segmentation fault during an internode parallel
</span><br>
<span class="quotelev2">&gt; &gt; computation involving the openib btl and OpenMPI-1.4.2 (the same issue
</span><br>
<span class="quotelev2">&gt; &gt; can be observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev2">&gt; &gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\-5\/x86_6
</span><br>
<span class="quotelev2">&gt; &gt; 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev2">&gt; &gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5/x86_64/A
</span><br>
<span class="quotelev2">&gt; &gt; c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev2">&gt; &gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_n2.dat'
</span><br>
<span class="quotelev2">&gt; &gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch' '--mem=3200'
</span><br>
<span class="quotelev2">&gt; &gt; '--threads=1' '--errorlevel=FATAL' '--t_max=0.1' '--parallel=domain'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I choose not to use the openib btl (by using --mca btl self,sm,tcp on
</span><br>
<span class="quotelev2">&gt; &gt; the command line, for instance), I don't encounter any problem and the
</span><br>
<span class="quotelev2">&gt; &gt; parallel computation runs flawlessly.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would like to get some help to be able:
</span><br>
<span class="quotelev2">&gt; &gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev2">&gt; &gt; - understand why this issue is observed only when using the openib btl
</span><br>
<span class="quotelev2">&gt; &gt; and not when using self,sm,tcp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The outputs of ompi_info and the configure scripts of OpenMPI are
</span><br>
<span class="quotelev2">&gt; &gt; enclosed to this email, and some information on the infiniband drivers
</span><br>
<span class="quotelev2">&gt; &gt; as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is the command line used when launching a parallel computation
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; using infiniband:
</span><br>
<span class="quotelev2">&gt; &gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; btl openib,sm,self,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev2">&gt; &gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev2">&gt; &gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev2">&gt; &gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13624.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13622.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
