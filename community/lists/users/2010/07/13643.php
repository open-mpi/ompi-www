<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 04:08:22 2010" -->
<!-- isoreceived="20100715080822" -->
<!-- sent="Thu, 15 Jul 2010 10:08:13 +0200" -->
<!-- isosent="20100715080813" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="201007151008.13099.eg_at_fft.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007141059.54375.eg_at_fft.be" -->
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
<strong>Date:</strong> 2010-07-15 04:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>In reply to:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Rolf,
<br>
<p>unfortunately, i couldn't get rid of that annoying segmentation fault when selecting another bcast algorithm.
<br>
i'm now going to replace MPI_Bcast with a naive implementation (using MPI_Send and MPI_Recv) and see if that helps.
<br>
<p>regards,
<br>
&#233;loi
<br>
<p><p>On Wednesday 14 July 2010 10:59:53 Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your input. You're right, I miss the
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll check if I the segmentation fault disappears when using the basic
</span><br>
<span class="quotelev1">&gt; bcast linear algorithm using the proper command line you provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 13 July 2010 20:39:59 Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Eloi:
</span><br>
<span class="quotelev2">&gt; &gt; To select the different bcast algorithms, you need to add an extra mca
</span><br>
<span class="quotelev2">&gt; &gt; parameter that tells the library to use dynamic selection.
</span><br>
<span class="quotelev2">&gt; &gt; --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One way to make sure you are typing this in correctly is to use it with
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info.  Do the following:
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info -mca coll_tuned_use_dynamic_rules 1 --param coll
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You should see lots of output with all the different algorithms that can
</span><br>
<span class="quotelev2">&gt; &gt; be selected for the various collectives.
</span><br>
<span class="quotelev2">&gt; &gt; Therefore, you need this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rolf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 07/13/10 11:28, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed to switch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to the basic linear algorithm. Anyway whatever the algorithm used, the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segmentation fault remains.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does anyone could give some advice on ways to diagnose the issue I'm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; facing ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm focusing on the MPI_Bcast routine that seems to randomly segfault
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; when using the openib btl. I'd like to know if there is any way to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make OpenMPI switch to a different algorithm than the default one
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; being selected for MPI_Bcast.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I'm observing a random segmentation fault during an internode
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; parallel computation involving the openib btl and OpenMPI-1.4.2 (the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; same issue can be observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\-5\/x
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 86 _6 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5/x86_
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 64 /A c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_n2.da
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; t' '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch'
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; '--mem=3200' '--threads=1' '--errorlevel=FATAL' '--t_max=0.1'
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; '--parallel=domain'
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; If I choose not to use the openib btl (by using --mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; on the command line, for instance), I don't encounter any problem and
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; the parallel computation runs flawlessly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; - understand why this issue is observed only when using the openib
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl and not when using self,sm,tcp
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; The outputs of ompi_info and the configure scripts of OpenMPI are
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; enclosed to this email, and some information on the infiniband
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; drivers as well.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Here is the command line used when launching a parallel computation
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;    --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13642.php">Shiqing Fan: "Re: [OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>In reply to:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
