<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 14:40:29 2010" -->
<!-- isoreceived="20100713184029" -->
<!-- sent="Tue, 13 Jul 2010 14:39:59 -0400" -->
<!-- isosent="20100713183959" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="4C3CB2FF.3020300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007131728.08622.eg_at_fft.be" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 14:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13624.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eloi:
<br>
To select the different bcast algorithms, you need to add an extra mca 
<br>
parameter that tells the library to use dynamic selection.
<br>
--mca coll_tuned_use_dynamic_rules 1
<br>
<p>One way to make sure you are typing this in correctly is to use it with 
<br>
ompi_info.  Do the following:
<br>
ompi_info -mca coll_tuned_use_dynamic_rules 1 --param coll
<br>
<p>You should see lots of output with all the different algorithms that can 
<br>
be selected for the various collectives.
<br>
Therefore, you need this:
<br>
<p>--mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_bcast_algorithm 1
<br>
<p>Rolf
<br>
<p>On 07/13/10 11:28, Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found that &quot;--mca coll_tuned_bcast_algorithm 1&quot; allowed to switch to the basic linear algorithm.
</span><br>
<span class="quotelev1">&gt; Anyway whatever the algorithm used, the segmentation fault remains.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone could give some advice on ways to diagnose the issue I'm facing ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm focusing on the MPI_Bcast routine that seems to randomly segfault when
</span><br>
<span class="quotelev2">&gt;&gt; using the openib btl. I'd like to know if there is any way to make OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; switch to a different algorithm than the default one being selected for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm observing a random segmentation fault during an internode parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computation involving the openib btl and OpenMPI-1.4.2 (the same issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pbn08:02624] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\-5\/x86_6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5/x86_64/A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_n2.dat'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch' '--mem=3200'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--threads=1' '--errorlevel=FATAL' '--t_max=0.1' '--parallel=domain'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I choose not to use the openib btl (by using --mca btl self,sm,tcp on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the command line, for instance), I don't encounter any problem and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel computation runs flawlessly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - to diagnose the issue I'm facing with the openib btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - understand why this issue is observed only when using the openib btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and not when using self,sm,tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The outputs of ompi_info and the configure scripts of OpenMPI are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enclosed to this email, and some information on the infiniband drivers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the command line used when launching a parallel computation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose --version --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13624.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
