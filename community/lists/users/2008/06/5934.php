<?
$subject_val = "Re: [OMPI users] Open MPI timeout problems.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 05:23:00 2008" -->
<!-- isoreceived="20080619092300" -->
<!-- sent="Thu, 19 Jun 2008 12:20:23 +0300" -->
<!-- isosent="20080619092023" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI timeout problems." -->
<!-- id="485A24D7.7020609_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1213805512.12328.29.camel_at_pacific.cee.cornell.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI timeout problems.<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 05:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5935.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually the retry exceed point to some network issue on your cluster. I 
<br>
see from the logs that you still
<br>
use MVAPI. If i remember correct,  MVAPI include IBADM application that 
<br>
should be able to check and debug the network.
<br>
BTW I recommend you to update your MVAPI driver to latest OpenFabric driver.
<br>
<p>Peter Diamessis wrote:
<br>
<span class="quotelev1">&gt; Dear folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate your help on the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running a parallel CFD code on the Army Research Lab's MJM Linux
</span><br>
<span class="quotelev1">&gt; cluster, which uses Open-MPI. I've run the same code on other Linux
</span><br>
<span class="quotelev1">&gt; clusters that use MPICH2 and had never run into this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm quite convinced that the bottleneck for my code is this data
</span><br>
<span class="quotelev1">&gt; transposition routine, although I have not done any rigorous profiling
</span><br>
<span class="quotelev1">&gt; to check on it. This is where 90% of the parallel communication takes
</span><br>
<span class="quotelev1">&gt; place. I'm running a CFD code that uses a 3-D rectangular domain which
</span><br>
<span class="quotelev1">&gt; is partitioned across processors in such a way that each processor
</span><br>
<span class="quotelev1">&gt; stores vertical slabs that are contiguous in the x-direction but shared
</span><br>
<span class="quotelev1">&gt; across processors in the y-dir. . When a 2-D Fast Fourier Transform
</span><br>
<span class="quotelev1">&gt; (FFT) needs to be done, data is transposed such that the vertical slabs
</span><br>
<span class="quotelev1">&gt; are now contiguous in the y-dir. in each processor. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code would normally be run for about 10,000 timesteps. In the
</span><br>
<span class="quotelev1">&gt; specific case which blocks, the job crashes after ~200 timesteps and at
</span><br>
<span class="quotelev1">&gt; each timestep a large number of 2-D FFTs are performed. For a domain
</span><br>
<span class="quotelev1">&gt; with resolution of Nx * Ny * Nz points and P processors, during one FFT,
</span><br>
<span class="quotelev1">&gt; each processor performs P Sends and P Receives of a message of size
</span><br>
<span class="quotelev1">&gt; (Nx*Ny*Nz)/P, i.e. there are a total of 2*P^2 such Sends/Receives. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've focused on a case using P=32 procs with Nx=256, Ny=128, Nz=175. You
</span><br>
<span class="quotelev1">&gt; can see that each FFT involves 2048 communications. I totally rewrote my
</span><br>
<span class="quotelev1">&gt; data transposition routine to no longer use specific blocking/non-
</span><br>
<span class="quotelev1">&gt; blocking Sends/Receives but to use MPI_ALLTOALL which I would hope is
</span><br>
<span class="quotelev1">&gt; optimized for the specific MPI Implementation to do data transpositions.
</span><br>
<span class="quotelev1">&gt; Unfortunately, my code still crashes with time-out problems like before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens for P=4, 8, 16 &amp; 32 processors. The same MPI_ALLTOALL code
</span><br>
<span class="quotelev1">&gt; worked fine on a smaller cluster here. Note that in the future I would
</span><br>
<span class="quotelev1">&gt; like to work with resolutions of (Nx,Ny,Nz)=(512,256,533) and P=128 or
</span><br>
<span class="quotelev1">&gt; 256 procs. which will involve an order of magnitude more communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I ran the job by submitting it to an LSF queue system. I've
</span><br>
<span class="quotelev1">&gt; attached the script file used for that. I basically enter bsub -x &lt;
</span><br>
<span class="quotelev1">&gt; script_openmpi at the command line. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I communicated with a consultant at ARL, he recommended I use
</span><br>
<span class="quotelev1">&gt; 3 specific script files which I've attached. I believe these enable
</span><br>
<span class="quotelev1">&gt; control over some of the MCA parameters. I've experimented with values
</span><br>
<span class="quotelev1">&gt; of  btl_mvapi_ib_timeout = 14, 18, 20, 24 and 30 and I still have this
</span><br>
<span class="quotelev1">&gt; problem. I am still in contact with this consultant but thought it would
</span><br>
<span class="quotelev1">&gt; be good to contact you folks directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note:
</span><br>
<span class="quotelev1">&gt; a) echo $PATH returns: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/bin:
</span><br>
<span class="quotelev1">&gt; /opt/compiler/pgi/linux86-64/6.2/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev1">&gt; ia32e/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev1">&gt; ia32e/etc:/usr/cta/modules/3.1.6/bin:
</span><br>
<span class="quotelev1">&gt; /usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:
</span><br>
<span class="quotelev1">&gt; .:/usr/lib/java/bin:/opt/gm/bin:/opt/mx/bin:/opt/PST/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) echo $LD_LIBRARY_PATH returns:
</span><br>
<span class="quotelev1">&gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/lib:
</span><br>
<span class="quotelev1">&gt; /opt/compiler/pgi/linux86-64/6.2/lib:
</span><br>
<span class="quotelev1">&gt; /opt/compiler/pgi/linux86-64/6.2/libso:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev1">&gt; ia32e/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the following files:
</span><br>
<span class="quotelev1">&gt; 1) Gzipped versions of the .out &amp; .err files of the failed job.
</span><br>
<span class="quotelev1">&gt; 2) ompi_info.log: The output of ompi_info -all
</span><br>
<span class="quotelev1">&gt; 3) mpirun, mpirun.lsf, openmpi_wrapper: the three script files provided
</span><br>
<span class="quotelev1">&gt; to me by the ARL consultant. I store these in my home directory and
</span><br>
<span class="quotelev1">&gt; experimented with the MCA parameter btl_mvapi_ib_timeout in mpirun.
</span><br>
<span class="quotelev1">&gt; 4) The script file script_openmpi that I use to submit the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am unable to provide you with the config.log file as I cannot find it
</span><br>
<span class="quotelev1">&gt; in the top level Open MPI directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also unable to provide you with details on the specific cluster
</span><br>
<span class="quotelev1">&gt; that I'm running in terms of the network. I know they use Infiniband and
</span><br>
<span class="quotelev1">&gt; some more detail may be found on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.arl.hpc.mil/Systems/mjm.html">http://www.arl.hpc.mil/Systems/mjm.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some other info:
</span><br>
<span class="quotelev1">&gt; a) uname -a returns: 
</span><br>
<span class="quotelev1">&gt; Linux l1 2.6.5-7.308-smp.arl-msrc #2 SMP Thu Jan 10 09:18:41 EST 2008
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) ulimit -l returns: unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot see a pattern as to which nodes are bad and which are good ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I found in the mail archives that someone had a similar
</span><br>
<span class="quotelev1">&gt; problem in transposing a matrix with 16 million elements. The only
</span><br>
<span class="quotelev1">&gt; answer I found in the thread was to increase the value of
</span><br>
<span class="quotelev1">&gt; btl_mvapi_ib_timeout to 14 or 16, something I've done already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm hoping that there must be a way out of this problem. I need to
</span><br>
<span class="quotelev1">&gt; get my code running as I'm under pressure to produce results for a
</span><br>
<span class="quotelev1">&gt; grant that's paying me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have any feedback I would be hugely grateful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter Diamessis
</span><br>
<span class="quotelev1">&gt; Cornell University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="5935.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
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
