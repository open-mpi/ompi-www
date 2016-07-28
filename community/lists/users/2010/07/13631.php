<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 05:00:02 2010" -->
<!-- isoreceived="20100714090002" -->
<!-- sent="Wed, 14 Jul 2010 10:59:53 +0200" -->
<!-- isosent="20100714085953" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="201007141059.54375.eg_at_fft.be" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4C3CB2FF.3020300_at_oracle.com" -->
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
<strong>Date:</strong> 2010-07-14 04:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Previous message:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>thanks for your input. You're right, I miss the coll_tuned_use_dynamic_rules option.
<br>
<p>I'll check if I the segmentation fault disappears when using the basic bcast linear algorithm using the proper command line you provided.
<br>
<p>Regards,
<br>
Eloi
<br>
<p>On Tuesday 13 July 2010 20:39:59 Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Hi Eloi:
</span><br>
<span class="quotelev1">&gt; To select the different bcast algorithms, you need to add an extra mca
</span><br>
<span class="quotelev1">&gt; parameter that tells the library to use dynamic selection.
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One way to make sure you are typing this in correctly is to use it with
</span><br>
<span class="quotelev1">&gt; ompi_info.  Do the following:
</span><br>
<span class="quotelev1">&gt; ompi_info -mca coll_tuned_use_dynamic_rules 1 --param coll
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should see lots of output with all the different algorithms that can
</span><br>
<span class="quotelev1">&gt; be selected for the various collectives.
</span><br>
<span class="quotelev1">&gt; Therefore, you need this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/13/10 11:28, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed to switch to
</span><br>
<span class="quotelev2">&gt; &gt; the basic linear algorithm. Anyway whatever the algorithm used, the
</span><br>
<span class="quotelev2">&gt; &gt; segmentation fault remains.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone could give some advice on ways to diagnose the issue I'm
</span><br>
<span class="quotelev2">&gt; &gt; facing ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm focusing on the MPI_Bcast routine that seems to randomly segfault
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when using the openib btl. I'd like to know if there is any way to make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI switch to a different algorithm than the default one being
</span><br>
<span class="quotelev3">&gt; &gt;&gt; selected for MPI_Bcast.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm observing a random segmentation fault during an internode parallel
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; computation involving the openib btl and OpenMPI-1.4.2 (the same issue
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can be observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\-5\/x86
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _6 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5/x86_64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /A c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_n2.dat'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch' '--mem=3200'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; '--threads=1' '--errorlevel=FATAL' '--t_max=0.1' '--parallel=domain'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If I choose not to use the openib btl (by using --mca btl self,sm,tcp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on the command line, for instance), I don't encounter any problem and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the parallel computation runs flawlessly.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - understand why this issue is observed only when using the openib btl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and not when using self,sm,tcp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The outputs of ompi_info and the configure scripts of OpenMPI are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; enclosed to this email, and some information on the infiniband drivers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is the command line used when launching a parallel computation
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Company Phone:   +32 10 487 959
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13632.php">Saygin Arkan: "[OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Previous message:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
