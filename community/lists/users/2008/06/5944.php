<?
$subject_val = "Re: [OMPI users] Fw: Re:  Open MPI timeout problems.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 17:39:01 2008" -->
<!-- isoreceived="20080619213901" -->
<!-- sent="Fri, 20 Jun 2008 00:38:45 +0300" -->
<!-- isosent="20080619213845" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: Re:  Open MPI timeout problems." -->
<!-- id="485AD1E5.6010601_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="485AC381.3050104_at_cornell.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fw: Re:  Open MPI timeout problems.<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 17:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5943.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5943.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I appreciate the feedback. I'm assuming that this upgrade to the Open 
</span><br>
<span class="quotelev1">&gt; Fabric
</span><br>
<span class="quotelev1">&gt; driver is something that the System Admin. of the cluster should be 
</span><br>
<span class="quotelev1">&gt; concerned with and not I ?
</span><br>
Driver upgrade will require root permissions.
<br>
Thanks,
<br>
Pasha
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter Diamessis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On *Thu, 6/19/08, Pavel Shamis (Pasha) 
</span><br>
<span class="quotelev2">&gt;&gt; /&lt;pasha_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     From: Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subject: Re: [OMPI users] Open MPI timeout problems.
</span><br>
<span class="quotelev2">&gt;&gt;     To: pjd38_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Date: Thursday, June 19, 2008, 5:20 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Usually the retry exceed point to some network issue on your 
</span><br>
<span class="quotelev2">&gt;&gt; cluster. I     see from the logs that you still
</span><br>
<span class="quotelev2">&gt;&gt;     use MVAPI. If i remember correct,  MVAPI include IBADM 
</span><br>
<span class="quotelev2">&gt;&gt; application that     should be able to check and debug the network.
</span><br>
<span class="quotelev2">&gt;&gt;     BTW I recommend you to update your MVAPI driver to latest 
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabric driver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Peter Diamessis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Dear folks,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I would appreciate your help on the following:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I'm running a parallel CFD code on the Army Research Lab's MJM
</span><br>
<span class="quotelev2">&gt;&gt;     Linux
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; cluster, which uses Open-MPI. I've run the same code on other 
</span><br>
<span class="quotelev2">&gt;&gt; Linux
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; clusters that use MPICH2 and had never run into this problem.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I'm quite convinced that the bottleneck for my code is this data
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; transposition routine, although I have not done any rigorous 
</span><br>
<span class="quotelev2">&gt;&gt; profiling
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; to check on it. This is where 90% of the parallel communication 
</span><br>
<span class="quotelev2">&gt;&gt; takes
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; place. I'm running a CFD code that uses a 3-D rectangular 
</span><br>
<span class="quotelev2">&gt;&gt; domain which
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; is partitioned across processors in such a way that each processor
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; stores vertical slabs that are contiguous in the x-direction 
</span><br>
<span class="quotelev2">&gt;&gt; but shared
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; across processors in the y-dir. . When a 2-D Fast Fourier 
</span><br>
<span class="quotelev2">&gt;&gt; Transform
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; (FFT) needs to be done, data is transposed such that the 
</span><br>
<span class="quotelev2">&gt;&gt; vertical slabs
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; are now contiguous in the y-dir. in each processor.     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; The code would normally be run for about 10,000 timesteps. In the
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; specific case which blocks, the job crashes after ~200 
</span><br>
<span class="quotelev2">&gt;&gt; timesteps and at
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; each timestep a large number of 2-D FFTs are performed. For a 
</span><br>
<span class="quotelev2">&gt;&gt; domain
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; with resolution of Nx * Ny * Nz points and P processors, during 
</span><br>
<span class="quotelev2">&gt;&gt; one FFT,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; each processor performs P Sends and P Receives of a message of 
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; (Nx*Ny*Nz)/P, i.e. there are a total of 2*P^2 such 
</span><br>
<span class="quotelev2">&gt;&gt; Sends/Receives.     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I've focused on a case using P=32 procs with Nx=256, Ny=128, 
</span><br>
<span class="quotelev2">&gt;&gt; Nz=175.
</span><br>
<span class="quotelev2">&gt;&gt;     You
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; can see that each FFT involves 2048 communications. I totally 
</span><br>
<span class="quotelev2">&gt;&gt; rewrote my
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; data transposition routine to no longer use specific blocking/non-
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; blocking Sends/Receives but to use MPI_ALLTOALL which I would 
</span><br>
<span class="quotelev2">&gt;&gt; hope is
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; optimized for the specific MPI Implementation to do data 
</span><br>
<span class="quotelev2">&gt;&gt; transpositions.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Unfortunately, my code still crashes with time-out problems 
</span><br>
<span class="quotelev2">&gt;&gt; like before.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; This happens for P=4, 8, 16 &amp; 32 processors. The same MPI_ALLTOALL
</span><br>
<span class="quotelev2">&gt;&gt;     code
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; worked fine on a smaller cluster here. Note that in the future 
</span><br>
<span class="quotelev2">&gt;&gt; I would
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; like to work with resolutions of (Nx,Ny,Nz)=(512,256,533) and 
</span><br>
<span class="quotelev2">&gt;&gt; P=128 or
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 256 procs. which will involve an order of magnitude more 
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Note that I ran the job by submitting it to an LSF queue 
</span><br>
<span class="quotelev2">&gt;&gt; system. I've
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; attached the script file used for that. I basically enter bsub 
</span><br>
<span class="quotelev2">&gt;&gt; -x &lt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; script_openmpi at the command line.     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; When I communicated with a consultant at ARL, he recommended I use
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 3 specific script files which I've attached. I believe these 
</span><br>
<span class="quotelev2">&gt;&gt; enable
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; control over some of the MCA parameters. I've experimented with 
</span><br>
<span class="quotelev2">&gt;&gt; values
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; of  btl_mvapi_ib_timeout = 14, 18, 20, 24 and 30 and I still 
</span><br>
<span class="quotelev2">&gt;&gt; have this
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; problem. I am still in contact with this consultant but thought 
</span><br>
<span class="quotelev2">&gt;&gt; it would
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; be good to contact you folks directly.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Note:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; a) echo $PATH returns:     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/bin:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/compiler/pgi/linux86-64/6.2/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ia32e/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ia32e/etc:/usr/cta/modules/3.1.6/bin:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; .:/usr/lib/java/bin:/opt/gm/bin:/opt/mx/bin:/opt/PST/bin
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; b) echo $LD_LIBRARY_PATH returns:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; /opt/mpi/x86_64/pgi/6.2/openmpi-1.2/lib:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; /opt/compiler/pgi/linux86-64/6.2/lib:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/compiler/pgi/linux86-64/6.2/libso:/usr/lsf/6.2/linux2.6-glibc2.3-
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ia32e/lib
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I've attached the following files:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 1) Gzipped versions of the .out &amp; .err files of the failed job.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 2) ompi_info.log: The output of ompi_info -all
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 3) mpirun, mpirun.lsf, openmpi_wrapper: the three script files 
</span><br>
<span class="quotelev2">&gt;&gt; provided
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; to me by the ARL consultant. I store these in my home directory 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; experimented with the MCA parameter btl_mvapi_ib_timeout in 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 4) The script file script_openmpi that I use to submit the job.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I am unable to provide you with the config.log file as I cannot 
</span><br>
<span class="quotelev2">&gt;&gt; find it
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; in the top level Open MPI directory.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I am also unable to provide you with details on the specific 
</span><br>
<span class="quotelev2">&gt;&gt; cluster
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; that I'm running in terms of the network. I know they use 
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;     and
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; some more detail may be found on:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.arl.hpc.mil/Systems/mjm.html">http://www.arl.hpc.mil/Systems/mjm.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Some other info:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; a) uname -a returns:     &gt; Linux l1 2.6.5-7.308-smp.arl-msrc #2 
</span><br>
<span class="quotelev2">&gt;&gt; SMP Thu Jan 10 09:18:41 EST 2008
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; b) ulimit -l returns: unlimited
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I cannot see a pattern as to which nodes are bad and which are 
</span><br>
<span class="quotelev2">&gt;&gt; good ...
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Note that I found in the mail archives that someone had a similar
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; problem in transposing a matrix with 16 million elements. The only
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; answer I found in the thread was to increase the value of
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; btl_mvapi_ib_timeout to 14 or 16, something I've done already.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; I'm hoping that there must be a way out of this problem. I need to
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; get my code running as I'm under pressure to produce results for a
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; grant that's paying me.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; If you have any feedback I would be hugely grateful.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Peter Diamessis
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Cornell University
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;       &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5943.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5943.php">Peter Diamessis: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
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
